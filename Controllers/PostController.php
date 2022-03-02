<?php

class PostController extends Controller
{
    public function index()
    {
        $data = array();
        $p = new Post();
        $c = new Comment();
        $data['comment'] = $c->getCommnet();
        $data['viewComment'] = 'comment';
      //  $data['postlast'] = $p->getListLastPost();
        $this->loadTemplate('post', $data);
    }
    public function list()
    {
        $offset = 0;
        $limit = 6;
        $currentPage = 1;
        $data = array();

        $p = new Post();
        $c = new Comment();

        if (!empty($_GET['p'])) {
            $currentPage = $_GET['p'];
        }
        $offset = ($currentPage * $limit) - $limit;

        $data['comment'] = $c->getCommnet();
        $data['viewComment'] = 'comment';
        $data['post'] = $p->getListPost($offset, $limit);
        $data['totalPost'] = $p->getTotal();
        $data['numberOfPage'] = ceil($data['totalPost'] / $limit);
        $data['currentPage'] = $currentPage;
        $this->loadTemplate('listPost', $data);
    }

    public function newPost()
    {
        $data = array();
        if (isset($_POST['title'])) {
            $title = addslashes($_POST['title']);
            $author = addslashes($_POST['author']);
            $text = addslashes($_POST['text']);
            $image = ($_FILES['image']);
            $this->resizeUploadImage($image);
            $p = new Post();
            $p->register($author, $title, $image['name'], $text);
            $data['erro'] = 'deu certo';
        }
        $this->loadTemplate('newPost', $data);
    }
    public function update($id)
    {
        $data = array();
        $p = new Post();
        $data = $p->getListPostByID($id);
        if (isset($_POST['title'])) {
            $title = addslashes($_POST['title']);
            $text = addslashes($_POST['text']);
            // verifica se alterei a imagem e se o arquivo existe mesmo
            if ((isset($_POST['imageOld'])) and (!empty($_POST['imageOld']))) {
                $image = addslashes($_POST['imageOld']);
                if (!file_exists('media/image/' . $image)) {
                    $data['erro'] = 'Erro ao carregar imagem';
                    $this->loadTemplate('newPost', $data);
                    exit;
                }
            // se houve alteração entao faz o processo normal de upload
            } else {
                $image = ($_FILES['image']);
                $this->resizeUploadImage($image);
                $image = $image['name'];
            }
            $p = new Post();
            $data['erro'] = $p->update($title, $image, $text, $id);
            header('Location:' . BASE_URL . 'user/myPost');
        }
        $this->loadTemplate('newPost', $data);
    }
    public function resizeUploadImage($image)
    {
        // move e salva o image
        $dir =  'media/image/';
        move_uploaded_file($image['tmp_name'], $dir . $image['name']);
        //pega o arquivo do diretorio
        $filename = $dir . $image['name'];
        $new_image = $image['name'];
        // Largura e altura máximos
        $width = 1900;
        $height = 1080;

        // Obtendo o tamanho original
        list($width_orig, $height_orig) = getimagesize($filename);

         // Calculando a proporção
        $ratio_orig = $width_orig / $height_orig;

        if ($width / $height > $ratio_orig) {
            $width = $height * $ratio_orig;
        } else {
            $height = $width / $ratio_orig;
        }

        // O resize .Gerando uma nova imagem. e Verifica a iamgem jpeg ou png
        $image_p = imagecreatetruecolor($width, $height);
        if (exif_imagetype($filename) == IMAGETYPE_PNG) {
            $image = imagecreatefrompng($filename);
            imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
            // Salvando a imagem em arquivo:
            imagepng($image_p, $dir . $new_image);
        } elseif (exif_imagetype($filename) == IMAGETYPE_JPEG) {
            $image = imagecreatefromjpeg($filename);
            imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
            // Salvando a imagem em arquivo:
            imagejpeg($image_p, $dir . $new_image);
        }
    }
    public function comment()
    {
        $data = array();
        $c = new Comment();
        $data = $c->getCommnet();
        $this->loadView('comment', $data);
    }
    public function deletComment()
    {
    }
    public function addComment()
    {
    }
}

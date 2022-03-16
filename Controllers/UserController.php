<?php

class UserController extends Controller
{
    public function index()
    {
        $data = array();
        $u = new User();
        $id = $_SESSION['IdOfUser'];        
        $data['totalPost'] = $u->getTotalPost($id);
        // $data['userPost'] = $u->getUserById($id);
        //$this->loadTemplate('post', $data);
        $this->loadTemplate('userView', $data);
    }
    public function new()
    {
        $data = array();
        if ((isset($_POST)) and (!empty($_POST))) {
            $name = addslashes($_POST['name']);
            $email = addslashes($_POST['email']);
            $biography = addslashes($_POST['biography']);
            $password = addslashes($_POST['password']);
            //upload de imagem
            $image = $_FILES['picture'];
            $this->resizeUploadImage($image);
            $a = new User();
            $data['erro'] = $a->save(
                $name,
                $email,
                $biography,
                $image['name'],
                $password
            );
        }
        $this->loadTemplate('userNew', $data);
    }

    public function update()
    {
        $data = array();
        $u = new User();
        $data = $u->getUserById($_SESSION['IdOfUser']);
        if ((isset($_POST)) and (!empty($_POST))) {
            $name = addslashes($_POST['name']);
            $email = addslashes($_POST['email']);
            $biography = addslashes($_POST['biography']);
            // verifica se alterei a imagem e se o arquivo existe mesmo
            if ((isset($_POST['imageOld'])) and (!empty($_POST['imageOld']))) {
                $image = addslashes($_POST['imageOld']);
                if (!file_exists('media/image/' . $image)) {
                      $data['erro'] = 'Erro ao carregar imagem';
                      $this->loadTemplate('userNew', $data);
                      exit;
                }
            // se houve alteração entao faz o processo normal de upload
            } else {
                $image = ($_FILES['picture']);
                $this->resizeUploadImage($image);
                $image = $image['name'];
            }
            $a = new User();
            $data['erro'] = $a->update(
                $name,
                $email,
                $biography,
                $image,
                $_SESSION['IdOfUser']
            );
        }
        $this->loadTemplate('UserNew', $data);
    }
    public function myPost()
    {
        $offset = 0;
        $limit = 6;
        $currentPage = 1;
        $data = array();
        $id = $_SESSION['IdOfUser'];

        $a = new User();

        if (!empty($_GET['p'])) {
            $currentPage = $_GET['p'];
        }
        $offset = ($currentPage * $limit) - $limit;

        $data['post'] = $a->getList($id, $offset, $limit);
        $data['totalPost'] = $a->getTotal();
        $data['numberOfPage'] = ceil($data['totalPost'] / $limit);
        $data['currentPage'] = $currentPage;
        $this->loadTemplate('meusPost', $data);
    }
    public function login()
    {
        $data = array();
        if ((isset($_POST['email'])) and (!empty($_POST['email']))) {
            $pass = addslashes($_POST['password']);
            $email = addslashes($_POST['email']);
            $a = new User();
            $data = $a->isLogged($email, $pass);
            if (!isset($data['erro']) or empty($data['erro'])) {
                header('Location: ' . BASE_URL);
            }
        }
        $this->loadTemplate('login', $data);
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
        $width = 400;
        $height = 400;

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
}

<?php

class Post extends Model
{
    public function register($author, $title, $image, $text)
    {
        $sql = "INSERT INTO post SET title = :title, image = :image, text = :text, author = :author";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":title", $title);
        $sql->bindValue(":author", $author);
        $sql->bindValue(":text", $text);
        $sql->bindValue(":image", $image);
        $sql->execute();
    }
    public function getListPost($offset, $limit)
    {
        $array = array();
        $sql = "SELECT post.title, post.image, post.text, user.name, post.date, user.picture, post.id
        FROM post INNER JOIN user
        WHERE post.id_author = user.id LIMIT $offset, $limit";
      //  $sql->bindValue(":limit", $limit);
        $sql = $this->db->query($sql);
        $array = $sql->fetchAll();
        return $array;
    }

    public function update($title, $image, $text, $id)
    {
        $sql = "UPDATE post SET title = :title, image = :image, text = :text WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":title", $title);
        $sql->bindValue(":text", $text);
        $sql->bindValue(":image", $image);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    public function getListPostByID($id)
    {

        $array =  array();
        $sql = "SELECT *FROM post WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        return $array;
    }
    public function getListLastPost()
    {
        $array = array();
        $sql = "SELECT post.title, post.image, post.text, user.name, post.date, user.picture, post.id
        FROM post INNER JOIN user
        WHERE post.id_author = user.id ORDER BY post.date DESC LIMIT 6";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        $array = $sql->fetchAll();
        return $array;
    }
    public function getTotal()
    {
        $sql  = "SELECT COUNT(*) as c FROM post";
        $sql = $this->db->query($sql);
        $sql = $sql->fetch();
        return $sql['c'];
    }
}

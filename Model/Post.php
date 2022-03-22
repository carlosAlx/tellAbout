<?php

class Post extends Model
{
    public function save($user, $title, $image, $text)
    {
        $sql = "INSERT INTO post SET title = :title, image = :image, text = :text, user_id = :user";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":title", $title);
        $sql->bindValue(":user", $user);
        $sql->bindValue(":text", $text);
        $sql->bindValue(":image", $image);
        $sql->execute();
    }
    public function getListPost($offset, $limit)
    {
        $array = array();
        $sql = "SELECT post.title, post.image, post.text, user.name, post.date, user.picture, post.id
        FROM post INNER JOIN user
        WHERE post.user_id = user.id LIMIT $offset, $limit";
        //$sql->bindValue(":limit", $limit);
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
        $sql = "SELECT post.title, post.image, post.text, user.name, post.date, user.picture, post.id
        FROM post INNER JOIN user
        on post.user_id = user.id WHERE post.id = :id";
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
        WHERE post.user_id = user.id ORDER BY post.date DESC LIMIT 6";
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

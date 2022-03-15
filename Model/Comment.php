<?php

class Comment extends Model
{
    public function getCommnet($id)
    {
        $array = array();
        $sql = "SELECT user.name, user.picture, comment.post_id, comment.user_id, comment.text
        FROM user INNER JOIN comment
        ON comment.user_id = user.id WHERE comment.post_id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        $array = $sql->fetchAll();
        return $array;
    }
    public function addComment($text, $id_usu, $id_post)
    {
        $sql = "INSERT INTO comment SET user_id = :id_usu, post_id = :id_post, text = :text";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":text", $text);
        $sql->bindValue(":id_usu", 1);
        $sql->bindValue(":id_post", $id_post);
        $sql->execute();
    }
}

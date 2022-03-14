<?php

class Comment extends Model
{
    public function getCommnet($id)
    {
        $array = array();
        $sql = "SELECT  user.name,user.picture, comment.text, comment.id AS idC, COMMENT.id_post, COMMENT.id_usu
        FROM  comment INNER JOIN user
        ON :id = COMMENT.id_post";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        $array = $sql->fetchAll();
        return $array;
    }
    public function addComment($text, $id_usu, $id_post)
    {
        $sql = "INSERT INTO comment SET id_usu = :id_usu, id_post = :id_post, text =:text";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":text", $text);
        $sql->bindValue(":id_usu", 1);
        $sql->bindValue(":id_post", $id_post);
        $sql->execute();
    }
}

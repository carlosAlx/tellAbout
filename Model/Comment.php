<?php

class Comment extends Model
{
    public function getCommnet()
    {
        $array = array();
        $sql = 'SELECT  user.name,user.picture, comment.text, comment.id, COMMENT.id_post, COMMENT.id_usu, post.id 
        FROM  comment INNER JOIN post
        on post.id = COMMENT.id_post INNER JOIN user  ON  COMMENT.id_usu= user.id';
        $sql = $this->db->prepare($sql);
        $sql->execute();
        $array = $sql->fetchAll();
        return $array;
    }
}

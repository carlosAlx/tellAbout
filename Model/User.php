<?php

class User extends model
{
    public function save($name, $email, $biography, $picture, $password)
    {
        $sql = "INSERT INTO user SET name = :name, email = :email, biography = :biography, picture = :picture, password = :password";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":biography", $biography);
        $sql->bindValue(":picture", $picture);
        $sql->bindValue('password', $password);
        $sql->execute();
    }
    public function update($name, $email, $biography, $picture, $id)
    {
        $array = array();
        $sql = "UPDATE user SET name= :name, email = :email, biography = :biography, picture = :picture WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":biography", $biography);
        $sql->bindValue(":picture", $picture);
        $sql->bindValue(":id", $id);
        $sql->execute();
        if ($sql ->rowCount() > 0) {
            $array = $sql->fetch();
        }
        return $array;
    }
    public function getList($id)
    {
        $array = array();
        $sql = "SELECT post.title, post.image, post.text, user.name, post.date, user.picture, post.id
        FROM post INNER JOIN user
        WHERE post.id_author = :id  LIMIT 6";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        $array['post'] = $sql->fetchAll();
        return $array;
    }
    public function isLogged($email, $password)
    {
        $array = array();
        $sql = "SELECT *FROM user WHERE email = :email and password = :password";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":password", $password);
        $sql->execute();
        if ($sql->rowCount() == 1) {
            $array = $sql->fetch();
            $_SESSION['IdOfUser'] = $array['id'];
        } else {
            $array['erro'] = 'Senha ou Email incorretos';
        }
        return $array;
    }
    public function getUserByName($name)
    {
        $sql =  "SELECT *FROM user WHERE NAME = :name ";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":name", $name);
        $sql->execute();
    }
    public function getUserById($id)
    {
        $array = array();
        $sql =  "SELECT *FROM user WHERE id = :id ";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        return $array;
    }
}

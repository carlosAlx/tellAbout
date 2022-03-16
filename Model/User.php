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
    public function getAllUser()
    {
        $array = array();
        $sql = "SELECT *FROM user limit 4";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        $array = $sql->fetchAll();
        return $array;
    }
    public function getList($id, $offset, $limit)
    {
        $array = array(); 
        $sql = "SELECT * FROM post WHERE user_id = :id LIMIT $offset, $limit";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        $array = $sql->fetchAll();
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
            $_SESSION['NameUser'] = $array['name'];
            $_SESSION['ImgUser'] = $array['picture'];
            $_SESSION['BioUser'] = $array['biography'];
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
    public function getTotal()
    {
        $sql  = "SELECT COUNT(*) as c FROM user";
        $sql = $this->db->query($sql);
        $sql = $sql->fetch();
        return $sql['c'];
    }
    public function getTotalPost($id)
    {
        $sql  = "SELECT COUNT(*) as cp FROM post WHERE user_id = $id";
        $sql = $this->db->query($sql);
        $sql->bindValue(":id", $id);
        $sql = $sql->fetch();
        return $sql['cp'];
    }
}

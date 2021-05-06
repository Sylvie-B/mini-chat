<?php


class userMana
{
    public function addUser ($pdo, string $pseudo, string $password){
        try{
            $sql = "
                INSERT INTO user (pseudo, password)
                VALUES ('$pseudo', '$password')
            ";
            return $pdo->exec($sql);
        }
        catch (PDOException $exception) {
            echo "add user error : ".$exception->getMessage();
        }
    }
}
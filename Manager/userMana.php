<?php


class userMana
{
    private PDO $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    /**
     * @param string $pseudo
     * @param string $password
     * @return mixed
     */
    public function addUser (string $pseudo, string $password){
        try{
            $sql = $this->pdo->prepare("
                INSERT INTO user (pseudo, password)
                VALUES ('$pseudo', '$password')
            ");
            return $this->pdo->exec($sql);
        }
        catch (PDOException $exception) {
            echo "add user error : ".$exception->getMessage();
        }
    }

    public function getPseudo (int $id): User {
        $sql = $this->pdo->prepare("SELECT * FROM user WHERE id = :id");
        $sql->execute();
        return $sql->fetch();
    }
}


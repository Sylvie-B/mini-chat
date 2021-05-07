<?php


class userMana
{
    private PDO $pdo;


    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    /**
     * @param int $id
     * @return User
     */
    public function getPseudo (int $id): string {
        $sql = $this->pdo->prepare("SELECT * FROM user WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        $pseudo = $this->User;
        return $sql->fetch();
    }
}


<?php


class userMana
{

    /**
     * @param $pdo
     * @param int $id
     * @return User|null
     */
    public function getPseudo($pdo, int $id): ? User
    {
        return $pdo->prepare("SELECT pseudo FROM user WHERE id = '$id'");
    }

    /**
     * @param string|null $pseudo
     */
    public function setPseudo(?string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @param $pdo
     * @param string $pseudo
     * @param string $password
     * @return mixed
     */
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
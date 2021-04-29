<?php


class User
{
    private ?int $id;
    private ?string $pseudo;
    private ?string $password;

    public function __construct(int $id, string $pseudo, string $password, bool $online){
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->password = $password;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

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
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

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
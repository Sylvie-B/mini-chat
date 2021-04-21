<?php


class User
{
    private ?int $id;
    private ?string $pseudo;
    private ?string $password;
    private ?bool $online;

    public function __construct(int $id, string $pseudo, string $password, bool $online){
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->password = $password;
        $this->online = $online;
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
     * @return string|null
     */
    public function getPseudo(): ?string
    {
        return $this->pseudo;
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

    /**
     * @return bool|null
     */
    public function getOnline(): ?bool
    {
        return $this->online;
    }

    /**
     * @param bool|null $online
     */
    public function setOnline(?bool $online): void
    {
        $this->online = $online;
    }

}
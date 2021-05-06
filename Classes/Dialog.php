<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/DbChat.php';

class Dialog
{
    private ?int $id;
    private ?string $message;
    private ?User $user;

    public function __construct(int $id = null, string $message = null, int $user = null){
        $this->id = $id;
        $this->message = $message;
        $this->user = $user;
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
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User|null $user
     */
    public function setUser(?User $user): void
    {
        $this->user = $user;
    }

}

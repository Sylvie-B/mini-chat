<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/DbChat.php';

class Dialog
{
    private ?int $id;
    private ?string $message;
    private ?int $user_fk;

    public function __construct(int $id = null, string $message = null, int $user_fk = null){
        $this->id = $id;
        $this->message = $message;
        $this->user_fk = $user_fk;
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
     * @return int|null
     */
    public function getUser(): ?int
    {
        return $this->user_fk;
    }

    /**
     * @param int|null $user_fk
     */
    public function setUser(?int $user_fk): void
    {
        $this->user_fk = $user_fk;
    }

}

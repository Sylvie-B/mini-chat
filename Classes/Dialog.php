<?php

class Dialog
{
    private ?int $id_message;
    private ?string $message;
    private ?int $user_fk;

    public function __construct(int $id_message = null, string $message = null, int $user_fk = null){
        $this->id_message = $id_message;
        $this->message = $message;
        $this->user_fk = $user_fk;
    }

    /**
     * @return int|null
     */
    public function getIdMessage(): ?int
    {
        return $this->id_message;
    }

    /**
     * @param int|null $id_message
     */
    public function setIdMessage(?int $id_message): void
    {
        $this->id_message = $id_message;
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
    public function getUserFk(): ?int
    {
        return $this->user_fk;
    }

    /**
     * @param int|null $user_fk
     */
    public function setUserFk(?int $user_fk): void
    {
        $this->user_fk = $user_fk;
    }


}

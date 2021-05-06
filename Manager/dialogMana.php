<?php


class dialogMana
{
    private PDO $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function addMessage(string $message, ?int $user_fk): bool {
        $search = $this->pdo->prepare("
            INSERT INTO dialog (message, user_fk) VALUE (:message, :user_fk)
        ");

        $search->bindValue(':message', strip_tags($message));
        $search->bindValue(':user_fk', $user_fk,PDO::PARAM_INT);
        $search->execute();
        return $this->pdo->lastInsertId();
    }

    public function getDialog(): array {
        $allDialog = [];
        $search = $this->pdo->prepare("SELECT * FROM dialog");
        $state = $search->execute();

        if($state){
            $data = $search->fetchAll();
            foreach ($data as $txt) {
                // get pseudo
                $allDialog[] = new Dialog($txt['id_message'],$txt['message'], $txt['user_fk']);
            }
        }
        return $allDialog;
    }
}
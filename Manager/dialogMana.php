<?php


class dialogMana
{
    public function addMessage($pdo, string $message, int $user): bool{
        $search = $pdo->prepare("
            INSERT INTO dialog (message, user_fk)
            VALUE ('$message', '$user')
            ");
        $search->bindParam(':message', strip_tags($message));
        $search->bindParam('user', $_SESSION['id'], PDO::PARAM_INT);
        $search->execute();
        return intval($pdo->lastInsertId());
    }

    public function getDialog($pdo): array {
        $dialog = [];
        $search = $pdo->prepare("
            SELECT dialog.message, user.pseudo
            FROM dialog
            INNER JOIN user on dialog.user_fk = user.id
            ");
        $state = $search->execute();

        if($state){
            foreach ($search->fetchAll as $text) {
                $dialog[] = $text;
            }
        }
        return $dialog;
    }
}
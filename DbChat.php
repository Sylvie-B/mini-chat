<?php


class DbChat
{
    private string $server;
    private string $db;
    private string $user;
    private string $password;

    /**
     * DbChat constructor.
     * @param $server
     * @param $db
     * @param $user
     * @param $password
     */
    public function __construct() {
        $this->server ='localhost';
        $this->db = 'mini_chat';
        $this->user = 'root';
        $this->password = '';
    }

    /**
     * @return PDO|null
     */
    public function connect(): ?PDO
    {
        try {
            $dbCo = new PDO ("mysql:host=$this->server;dbname=$this->db;charset=utf8", $this->user, $this->password);
            $dbCo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbCo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        } catch
        (PDOException $e) {
            echo "Error : " . $e->getMessage();
            return null;
        }
        return $dbCo;
    }

    public function addUser ($pdo, string $pseudo, string $password){
        try{
            $sql = "
                INSERT INTO mini_chat.user (pseudo, password, onLine)
                VALUES ('$pseudo', '$password', 1)
            ";
            return $pdo->exec($sql);
        }
        catch (PDOException $exception) {
            echo "add user error : ".$exception->getMessage();
        }
    }
}
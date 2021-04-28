<?php


class DbChat
{
    private string $server;
    private string $db;
    private string $user;
    private string $password;

    /**
     * DbChat constructor.
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

}

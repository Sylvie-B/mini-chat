<?php


class DbChat
{
    private string $server;
    private string $db;
    private string $user;
    private string $password;
    private ?PDO $pdo;

    /**
     * DbChat constructor.
     * @param $server
     * @param $db
     * @param $user
     * @param $password
     */
    public function __construct($server, $db, $user, $password) {
        $this->server = $server;
        $this->db = $db;
        $this->user = $user;
        $this->password = $password;
        $this->pdo = $this->connect();
    }

    /**
     * @return PDO|null
     */
    private function connect(): ?PDO
    {
        try {
            $dbCo = new PDO ("mysql:host=$this->server;dbname=$this->db;charset=utf8", $this->user, $this->password);
            $dbCo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbCo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        } catch
        (PDOException $e) {
            echo "Error" . $e->getMessage();
            return null;
        }
        return $dbCo;
    }

    public function getCo(): ?PDO
    {
        if(is_null($this->pdo)) {
            $this->pdo = $this->connect();
        }
        return $this->pdo;
    }
}
<?php
class User {
    private $conn;
    private $table = 'users';

    public $id;
    public $name;
    public $email;
    public $password;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function login() {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE email = :email AND password = :password';
        
        $stmt = $this->conn->prepare($query);

        // clean data
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));

        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        
        if($stmt->execute()){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->name = $row['name'];
            $this->password = $row['password'];
        }

        // Print error if something goes wrong.
		printf("Error: %s. \n", $stmt->error);

		return false;
 
    }
}

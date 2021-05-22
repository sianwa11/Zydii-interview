<?php

class Input {
    // DB stuff
	private $conn;
	private $table = 'input';

    // Properties
    public $id;
    public $jina;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = 'INSERT INTO ' . $this->table . '
            SET 
            jina = :jina';
        
            $stmt = $this->conn->prepare($query);

            $this->jina = htmlspecialchars(strip_tags($this->jina));

            $stmt->bindParam(':jina', $this->jina);

            if($stmt->execute()) {
                return true;
            }

        // Print error if something goes wrong.
		printf("Error: %s. \n", $stmt->error);

		return false;
    }

}
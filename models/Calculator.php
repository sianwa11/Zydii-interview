<?php

class Calculator {

    private $conn;
    private $table = 'calculator';

    public $a;
    public $b;
    public $operation;
    public $result;

    public function __construct($db) {
        $this->conn = $db;
    }

    private function insert() {
        $query = 'INSERT INTO ' . $this->table . '
            SET
            a = :a,
            b = :b
            result = :result';

            $stmt = $this->conn->prepare($query);

            $this->a = htmlspecialchars(strip_tags($this->a));
            $this->b = htmlspecialchars(strip_tags($this->b));
            $this->result = htmlspecialchars(strip_tags($this->result));

            $stmt->bindParam(':a', $this->a);
            $stmt->bindParam(':b', $this->b);
            $stmt->bindParam(':result', $this->result);

            if($stmt->execute()){
                return true;
            }
    
            // Print error if something goes wrong.
            printf("Error: %s. \n", $stmt->error);
    
            return false;

    }


    public function vuvuzela($a, $b, $operation) {

        $this->a = $a;
        $this->b = $b;
        $this->operation = $operation;

        if($this->operation === 'add')
        {
            $this->result =$this->a + $this->b;
            $this->insert();
            return $this->result;
        }

        if($this->operation === 'multiply')
        {
            $this->result =$this->a * $this->b;
            return $this->result;
        }
        if($this->operation === 'subtract')
        {
            $this->result =$this->a - $this->b;
            return $this->result;
        }
        if($this->operation === 'divide')
        {
            $this->result =$this->a / $this->b;
            return $this->result;
        }


        $this->result = 0;
        return $this->result;
    }
}
<?php
   class crud{
       //private database object
       private $db;
       //constroctor to initialize private variable to the database connection
        function __construct($conn){
        $this->db = $conn;
    }
        //INSERT FUNCTION
    public function insert($firstname,$lastname,$dob,$speciality,$email,$phone){
        try {
            //define sql statment to be executed
            $sql = "INSERT INTO form (firstname,lastname,dateofbirth,speciality_id,email,contact) VALUES (:firstname,:lastname,:dob,:speciality,:email,:phone)";
            //prepare the sql statment for execution
            $stmt = $this->db->prepare($sql);
            // bind all placeholders to the actual values

            $stmt->bindparam(':firstname',$firstname);
            $stmt->bindparam(':lastname',$lastname);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':speciality',$speciality);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':phone',$phone);

            $stmt->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }
    }


?>
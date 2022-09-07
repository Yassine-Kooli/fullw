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
        public function getForms(){
            try { 
                $sql = "SELECT * FROM `form` a inner join specialities s on a.speciality_id = s.speciality_id";
                $result = $this->db->query($sql);
                return $result;
                
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }

          
        }

        public function editForm($id,$firstname,$lastname,$dob,$speciality,$email,$phone){
            try {
                $sql = "UPDATE `form` SET `firstname`=:firstname,
                `lastname`=:lastname,
                `dateofbirth`=:dob,
                `speciality_id`=:speciality,
                `email`=:email,
                `contact`=:phone WHERE userid = :id ";
    
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':id',$id);
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


        public function getFormDetails($id){
            try {
                $sql = "SELECT * FROM `form` a inner join specialities s on a.speciality_id = s.speciality_id WHERE userid = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                $result = $stmt = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        } 

       /* public function getAllUsers(){
            try {
                $sql = "SELECT * FROM form";
                $result = $this->db->query($sql);
                return $result;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
*/
        public function deleteForm($id){
            try {
                $sql = "DELETE FROM `form` WHERE userid = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;

            }
            

        }

        public function getSpecialities(){
            try {
                $sql = "SELECT * FROM specialities";
                $result = $this->db->query($sql);
                return $result;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        

        


        
}

?>
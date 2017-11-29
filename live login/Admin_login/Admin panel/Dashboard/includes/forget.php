<?php
class Verify extends DbConn
        {
            $User = $_POST['UserName'];

            $newPass =  uniqid();

            $newpw = password_hash($newPass, PASSWORD_DEFAULT);
            
            try {

            $db = new DbConn;
            $tbl_members = $db->tbl_members;
            $err = '';

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }
        
         $stmt = $db->conn->prepare("SELECT * FROM ".$tbl_members." WHERE username = :myusername");
        $stmt->bindParam(':myusername', $myusername);
        $stmt->execute();
    
        }
    ?>
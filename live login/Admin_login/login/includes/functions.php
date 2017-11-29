<?php
//Class Autoloader
spl_autoload_register(function ($className) {

    $className = strtolower($className);
    $path = "includes/{$className}.php";

    if (file_exists($path)) {

        require_once($path);

    } else {

        die("The file {$className}.php could not be found.");

    }
});

function checkAttempts($username)
{

    try {

        $db = new DbConn;
        $conf = new GlobalConf;
        $tbl_attempts = $db->tbl_attempts;
        $ip_address = $conf->ip_address;
        $err = '';

        $sql = "SELECT Attempts as attempts, lastlogin FROM ".$tbl_attempts." WHERE IP = :ip and Username = :username";

        $stmt = $db->conn->prepare($sql);
        $stmt->bindParam(':ip', $ip_address);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;

        $oldTime = strtotime($result['lastlogin']);
        $newTime = strtotime($datetimeNow);
        $timeDiff = $newTime - $oldTime;

    } catch (PDOException $e) {

        $err = "Error: " . $e->getMessage();

    }

    //Determines returned value ('true' or error code)
    $resp = ($err == '') ? 'true' : $err;

    return $resp;

};

function mySqlErrors($response)
{
    //Returns custom error messages instead of MySQL errors
    switch (substr($response, 0, 22)) {

        case 'Error: SQLSTATE[23000]':
            echo "<script> iziToast.show({title: 'Error', message: 'Username or email already exists', theme: 'light',color: 'red',          position: 'topRight', progressBarColor: 'red', });   </script>";
            break;

        default:
            echo "<script> iziToast.show({title: 'Error', message: 'Error occured..... Try again!!', theme: 'light',color: 'red',          position: 'topRight', progressBarColor: 'red', });   </script>";

    }
};

<?php
require_once 'user.php';


class client extends user
{
    private $weight;
    private $height;
    private $waist_cer;
    private $trainer_id;
    private $bundle;


    public function __construct($fname = null, $lname = null, $gender = null, $username = null, $password = null, $email = null, $date_of_birth = null, $phonenum = null, $weight = null, $height = null, $waist_cer = null, $trainer_id = null,$bundle = null)
    {
        if($fname != null&&$lname != null&& $gender != null&& $username != null&& $password != null&& $email != null&& $date_of_birth != null&& $phonenum != null&& $weight != null&& $height != null&& $waist_cer = null && $trainer_id != null&& $bundle!=null){
            parent::__construct($fname, $lname, $gender, $username, $password, $email, $date_of_birth, $phonenum);
            $this->weight = $weight;
            $this->height = $height;
            $this->waist_cer = $waist_cer;
            $this->trainer_id = $trainer_id;
            $this->bundle = $bundle;
            $this->register();
    }
    }


    public function register()
    {

// MySQL connection setting
        $servername = "localhost";
        $usernamee = "root"; // MySQL username
        $passwordd = "18SYDasd$"; // MySQL password
        $database = "personal_training"; // MySQL database name

// Create connection
        $conn = new mysqli($servername, $usernamee, $passwordd, $database);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

// Insert new user's info values to info table in the DB
        $stmt = $conn->prepare("INSERT INTO client(id, username, password, fname, lname, gender, date_of_birth, email, phonenum, weight, height, waist_cer,bundle,trainer_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

// Bind all the params to its locations
        $stmt->bind_param("issssssssdddsi", $this->id, $this->username, $this->password, $this->fname, $this->lname, $this->gender, $this->date_of_birth, $this->email, $this->phonenum, $this->weight, $this->height, $this->waist_cer,$this->bundle,$this->trainer_id);

// Execute all the queries in the right order
        $stmt->execute();

// Close connection
        $conn->close();

    }

    function usernameValidate($username)
    {
        // MySQL connection setting
        $servername = "localhost";
        $usernamee = "root"; // MySQL username
        $passwordd = "18SYDasd$"; // MySQL password
        $database = "personal_training"; // MySQL database name

// Create connection
        $conn = new mysqli($servername, $usernamee, $passwordd, $database);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $stmt = $conn->query("SELECT * FROM client WHERE username = '$username'");
        if ( $stmt->num_rows == 0) {
           return false;
        }
        return true;
    }

    function resetPassword($username, $newPassword, $confirmNewPassword) {

        // MySQL connection setting
        $servername = "localhost";
        $usernamee = "root"; // MySQL username
        $passwordd = "18SYDasd$"; // MySQL password
        $database = "personal_training"; // MySQL database name

// Create connection
        $conn = new mysqli($servername, $usernamee, $passwordd, $database);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
//     if (!$this->usernameValidate($username)) {
//            $error_msg = "Username not found!";
//            include "pass_reset1_front.php";
//            exit();
//        }

// Check if the new password matches the confirm new password
        if ($newPassword !== $confirmNewPassword) {
            $error_msg = "Passwords do not match!";
            include 'pass_reset2_front.php';
            exit();
        }
        $conn->query("UPDATE client SET password = '$newPassword' WHERE username = '$username'");


       $conn->close();


    }



}
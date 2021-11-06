<?php

class Register
{
    public $localhost = "localhost";
    public $userName = "root";
    public $dbName = "regusers";
    public $password = "";
    public $conn;

    function __construct(){
        
        $this->conn = new mysqli($this->localhost,$this->userName, $this->password,$this->dbName);
        if($this->conn->connect_error){
            die("connection fail: " . mysqli_connect_error());
        }
        else{
            echo"connected";
        }
    }

    function registration($n,$e,$p,$image){

        $imageSource = $image["tmp_name"];
        $image = $image["name"];

        $reg = "INSERT INTO users(name,email,password,image) VALUES('$n','$e','$p','$image')";
        if(!mysqli_query($this->conn,$reg)){
            echo'Data is not save';
        }
        else{
            echo"Data Save Sucessfully";
            move_uploaded_file($imageSource, "images/" . $image);
        }
    }

    function dataShow(){
        $show = "SELECT * FROM users";
        $ret = mysqli_query($this->conn,$show);
        return $ret;
    }

    function dataDelete($id){
        $delete = "DELETE FROM users where id='$id'";
        $del = mysqli_query($this->conn,$delete);
        return $del;
    }
    function dataShowForUpdate($id){
        $update = "SELECT * FROM users WHERE id='$id'";
        $up = mysqli_query($this->conn,$update);
        return $up;
    }
    function dataUpdate($id,$n,$e,$p,$image){
        $imageSource = $image["tmp_name"];
        $image = $image["name"];

        $reg = "UPDATE users SET name='$n',email='$e',password='$p',image='$image' WHERE id='$id'";
        if(!mysqli_query($this->conn,$reg)){
            echo'Data is not Update';
        }
        else{
            $_SESSION['update'] = "Data Update Succssfully";
            move_uploaded_file($imageSource, "images/" . $image);
            echo"<script>window.location.href='Users.php'</script>";
        }
    }

    function login($e,$p){
        $login = "SELECT * FROM users WHERE email='$e' and password='$p'";
        $log = mysqli_query($this->conn,$login);
        return $log;
    }
}

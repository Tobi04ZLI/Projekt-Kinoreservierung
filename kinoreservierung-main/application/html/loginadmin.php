<?php
require_once ("database.php");

class Login
{
    private $adminusername;
    private $adminpassword;

    public function __construct($adminusername, $adminpassword)
    {
        $this->adminname = $adminusername;
        $this->adminpassword = $adminpassword;
    }

    public function login($connection)
    {

        $sqltwo = "SELECT adminname FROM users WHERE admin = '$this->adminname' AND adminpassword = '$this->adminpassword';";
        $result = mysqli_query($connection, $sqltwo);

        if (mysqli_num_rows($result)) {
            $_SESSION["Admin"]=true;
            header("location: room.class.php");
        } else {
            header("location: index.php");
            /*die(mysqli_error($connection) . "this user not exists");*/
        }

}
}

?>
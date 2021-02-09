<?php
require_once ("database.php");

class Login
{
    private $adminname;
    private $adminpassword;

    public function __construct($adminname, $adminpassword)
    {
        $this->adminname = $adminname;
        $this->adminpassword = $adminpassword;
    }

    public function login($connection)
    {
        if(isset($_POST["submit"])){
            $sqltwo = "SELECT adminname FROM admin WHERE admin = '$this->adminname' AND adminpassword = '$this->adminpassword';";
            $result = $connection->query($sql);
            $adminFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($adminFromDatabase as $admin) {
                ($admin);
                $adminname = $admin['adminname'];
                if (mysqli_num_rows($result)) {
                    $_SESSION["Admin"]=true;
                    header("location: room.class.php");
                } else {
                    header("location: index.php");
                    /*die(mysqli_error($connection) . "this user not exists");*/
                }
            }
            $result = mysqli_query($connection, $sqltwo);
        }
    }
}

?>
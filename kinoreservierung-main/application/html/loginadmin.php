<?php
require_once("database.php");

class login
{

    public $adminname;
    public $adminpassword;

    public function __construct($adminname, $adminpassword)
    {
        $this->adminname = $adminname;
        $this->adminpassword = $adminpassword;
    }

    public function login($connection)
    {
        if (isset($_POST["submit"])) {

            $adminname = $connection->real_escape_string($this->usrname);
            $adminpassword = $connection->real_escape_string($this->pwd);
            $adminname = $_POST['adminname'];
            $adminpassword = $_POST['adminpassword'];

            $sql = "SELECT adminname, adminpassword FROM admin";

            $result = $connection->query($sql);
            $adminFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
            $loginok = 0;
            foreach ($adminFromDatabase as $admin) {
                ($admin);
                $adminnamen = $admin['adminname'];
                $adminpasswort = $admin['adminpassword'];
                if ($adminname == $adminnamen && $adminpassword == $adminpasswort) {
                    $loginok = 1;
                }
            }

            if ($loginok == 1) {

                $connection->close();
                header("Location: adminview.php");
            } else {
                echo ("big fail");
            }
        }
    }
}

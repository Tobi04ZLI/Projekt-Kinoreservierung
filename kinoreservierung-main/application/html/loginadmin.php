<?php
require_once ("database.php");
require_once ("adminview.php");

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
                $adminnamen = $admin['adminname'];
                $adminpasswort = $admin['adminpassword'];
                if ($adminname == $adminnamennamen && $adminpassword == $adminpasswort) {
                    header("Location: adminview.php");
                } else {
                    echo "Wrong Logindata";
                    header("Location: index.php");
                }
            }
        }
    }
}

?>
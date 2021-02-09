<!doctype html>
<html lang="en">

<head>
    <style>
        .back {
            margin-left: -10px;
            margin-top: 41px;
            background-color: red;
            width: 177px;
        }

        .input {
            margin-left: 830px;
            margin-top: 250px;
        }

        .backtwo {
            background-color: green;
        }
    </style>
</head>

<body>

    <form action="registerbesucher.php" method="POST">
        <div class="input">
            <input type="text" name="username" placeholder="username"> <br> <br>
            <input type="text" name="email" placeholder="email"> <br> <br>
            <button type="submit" name="submit">
                register
            </button>
        </div>
    </form>


<?php
require_once "database.php";
class register{

    public $username;
    public $pwd;

    public function __constructor($username, $pwd){

        $this->username = $username;
        $this->pwd = $pwd;
    }

    public function create($connection){
        if(isset($_POST["button"])){
            $username = $_POST['username'];
            $pwd = $_POST['pwd'];

            $query = "INSERT INTO users (username, password) VALUES ('$username', '$pwd');";
            $result = $connection->query($query);

            if (!$result) {
                die($connection->error);
            }
            
            if ($connection->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
            }
            
            $connection->close();
            header("Location: registerbesucher.php");
        }
    }
}
?>

</body>
</html>
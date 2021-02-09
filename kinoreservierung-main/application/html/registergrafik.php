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
    
</body>
</html>
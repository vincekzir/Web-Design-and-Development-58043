<html>
    <head>
        <title>My Login Page</title>
    </head>

    <style>
    body 
    {
      background-color: pink;
    }
    .main-div
    {
        font-size: 23;
        font-family: helvetica;
        margin: 300 auto;
        align-items: center;
        text-align: center;
        padding: 50px;
        justify-content: center;
        min-height: 100px;
        border-radius: 50px;
        background-color: skyblue;
        width: 600px;
        height: 200px;
        display: flex;
    }
  </style>

  <div class = "main-div">
    <?php
        $servername = "localhost";
        $db = "login";
        $username = "root";
        $password = "";
        $port = "3306";
        $socket = "C:/xampp/mysql/mysql.sock";

        $conn = mysqli_connect($servername, $username, $password, $db, $port, $socket);
        //$con = new mysqli()
        if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully to the database! &#128540 &#10024 <br>";
        
        if (isset($_POST['Login']))
        {
            $username = $_POST['user'];
            $password = $_POST['text'];

            $sql = "SELECT * FROM users where username = '$username' AND password = '$password'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) == 1)
            {
                echo "<br>Login Successful! &#128540 &#10024";
                echo "<br>Your username is: $username";
                echo "<br>Your password is: $password";
            }
            else
            {
                echo "<br>Oh no!! &#128560<br>";
                echo "Failed to Login";
            }
        }
    ?>
</html>
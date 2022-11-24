<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      background-color: pink;
    }
    .main-div 
    {   
        font-size: 24;
        font-family: helvetica;
        margin: 300 auto;
        align-items: center;
        text-align: center;
        padding: 30px;
        justify-content: center;
        min-height: 100px;
        border-radius: 50px;
        background-color: skyblue;
        width: 500px;
        height: 200px;
        display: flex;
    }
  </style>
</head>

  <div class = "main-div">
  <h1>Login Page</h1>
  <form method="post" action="connection.php">
  	<p>
    Username: <input type="user" name="user"><br>
    Password: <input type="password" name="text"><br><br>
    <input type="submit" name="Login">
    </p>
  </form>

</body>
</html>
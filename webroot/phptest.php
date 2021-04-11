<html>
<body>
  <h2>HTML Forms</h2>

  <form action = "phptest.php" method ="post">

    <input type="text" name="fname"><br>

    <input type="text" name="sname" <br><br>
    #
    <input type="email" name="email" <br><br>

    <input type="password" name="pass" <br><br>

    <input type="submit" value="Submit">
  </form>

  <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>


  <?php
  $fname = $_POST["fname"];
  $sname = $_POST["sname"];
  $email = $_POST["email"];
  $pass = $_POST["pass"];

  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("DATABASE_USER");
  $dbpwd = getenv("DATABASE_PASSWORD");
  $dbname = getenv("DATABASE_NAME");


  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $sql = "INSERT INTO USERS (firstName, lastName, email, password)
  VALUES ('$fname', '$sname', '$email', '$pass')";
 if ($conn->query($sql) === TRUE) {
  echo "done";
  }
  else
  {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }
   $conn->close();
   }
  ?>
</body>
</html>

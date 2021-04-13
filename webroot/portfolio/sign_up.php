
<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "users";

$option = "";

$connect = mysqli_connect($server,$user,$password);
mysqli_select_db($connect, $database);

$sql = "SELECT * FROM login" ;
$query = mysqli_query($connect, $sql);

if(isset($_POST["post"]))
{
	$user_email = $_POST['user_email'];
	$user_pass = $_POST['user_pass'];
  $user_name = $_POST['user_name'];

  $sql = "INSERT INTO login(name, email, password, role) VALUES('$user_name', '$user_email', '$user_pass', 'user')";
	mysqli_query($connect, $sql);

}





?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="author" content="Faris Javaid">
  <link rel ="stylesheet" href = "portfolio.css">

  <title>
    FJ Portfolio
  </title>
  </head>
  <body>

    <header>

      <header class = "normal_header"> <!--Header opening-->
        <nav id = "main_nav">
            <ul class: "nav_block">
            <li class = "nav_element"><a href = "portfolio.html" class = "link">Home</a></li>
            <li class = "nav_element"><a href = "aboutme.html" class = "link">About me</a></li>
              <li class ="nav_element"><a href = "blog.php" class = "link">Blog</a></li>
              <li class = "nav_element"><a href = "projects.html" class = "link">Portfolio/Projects</a></li>
              <li class = "nav_element"><a href = "Experience.html" class = "link">Experience</a></li>
              <li class =  "nav_element"><a href = "Education.html" class = "link">Education and Qualifications</a></li>
              <li class = "nav_element"><a href = "skills.html" class = "link">Skills and achievements</a></li>
              <li class =  "nav_element"><a href = "contact.html" class = "link">Contact</a></li>
                <li class =  "nav_element"><a href = "blog.php" class = "link">
                  <?php
                    echo $option;
                  ?></a></li>

            </ul>

        </nav>


                <hgroup>

                  <h2 class = "heading_title">

                  Sign Up

                </h2>

              </header>


              <div class = "main">
              <article>
                <section id = "detail1">

        <form method = "POST">
        <fieldset>


            <label for="user_name">
          <h2>
      Please Enter Your Name
      </h2>


      </label>
          <input type="text" id = "user_name" name = user_name maxlength: 50 required>
        <br>
                  <label for="email">

                  <h2>
                  Please Enter Your Email
                  </h2>



              </label>

                      <input type="email" id = "user_email" name = user_email maxlength: 250 required>
                      <br>
                      <label for="user_pass">

                      <h2>
                  Please Enter a Password
                  </h2>


                  </label>
                      <input type="password" id = "user_pass" name = user_pass maxlength: 50 required>
                    <br>
          <input type="submit" id = "req_sign_up" name = post value="Sign up">


        </fieldset>



        </form>

                  <hr>


        </section>





                </div>
              </article>



        <footer>
          <p>
             <i>
              Author: Faris Javaid
              <br>
              last edited: 20/02/2021
              <br>
              <a href="mailto:ec20605@qmul.ac.uk">Send email</a>
            </i>
          </p>
          <p>
             <a href = #top>Back to top</a>
          </p>
      </footer>

  </body>
  <script type = 'text/javascript' src = 'clear.js'></script>
</html>

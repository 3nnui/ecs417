<?php
$server = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$user = getenv("DATABASE_USER");
$password = getenv("DATABASE_PASSWORD");
$database = getenv("DATABASE_NAME");


$option = "";
$status = "0";
$fail = "";
$admin_post = "";


$connect = mysqli_connect($server,$user,$password);
mysqli_select_db($connect, $database);



if(isset($_POST['email']) )
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "select * from login where email = '".$email."'AND password = '".$password."'
		limit 1";

				$check = mysqli_query($connect, $sql);
				if(mysqli_num_rows($check)==1){


				$role = mysqli_fetch_assoc($check);
				$role = $role['role'];



					//session started
				session_start();
						if($role == "admin")
						{
									$_SESSION['email'] = $email;
									$_SESSION['name'] = $name;
									$status = "admin";
									$_SESSION['status'] = $status;
									$option = "Logout";
									$_SESSION['option'] = $option;
									$admin_post = "Add Post";
									$_SESSION['add'] = $admin_post;
									header("location: add_post.php");
						}
						else {
							$_SESSION['email'] = $email;
							$status = "user";
							$_SESSION['status'] = $status;
							$option = "Logout";
							$_SESSION['option'] = $option;



						}
						}


					else{
						$fail = "Incorrect details, please try again";
						echo "fail";
					}
				}




//SETTING COMMENTS - aborted...

/*
$sql = "SELECT * FROM comments";
$query = mysqli_query($connect, $sql);

if(isset($_POST["add"]))
{
	$comment = $_POST['comment'];
	$name = "anon";
	$sql = "INSERT INTO comments(pid, name, content) VALUES('3', $name, $comment)";
	mysqli_query($connect, $sql);



	?> <script>alert("Comment added");
	</script>
	<?php

}
*/




















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


						</ul>

<div>
						<a href = "logout.php" class = "link">
							<?php
								echo $option;

							?></a>



						</div>
				</nav>

				<hgroup>
					<h1 class = "heading_title">

						Blog

					</h1>

			</header>






				<aside class = "blog_login">
					<fieldset>
					<form method = "POST">


								<legend>
								<h1>
									Login
								</h1>
								<h3 class = "fail">
									<i>
									<?php
										echo $fail;
										?>
									</i>
								</h3>
							</legend>

							<label for="email">Email Address:</label>
							<input type="email" name="email" placeholder = "Please enter your email" required>

							<label for="password">Password:</label>
							<input type="password" name="password" placeholder = "Please enter your password" required>
							<br>
							<a href = "sign_up.php" name = "sign_up">Sign up</a>
							<br>
							<input type="submit" value="Login">

			</fieldset>




				</form>
			</aside>



			<div class = "main_blog">
			<article>
				<?php
					$sql = "SELECT * FROM blog1;";
					$result = mysqli_query($connect, $sql);
					$check = mysqli_num_rows($result);

//store all blog content in arrays to sort
					$dates = array();
					$titles = array();
					$conts = array();

					if($check > 0)
					{
						while($row = mysqli_fetch_assoc($result)){

							$dates[] = $row['date'];
							$titles[] = $row['title'];
							$conts[] = $row['content'];
							$post_id[] = $row['ID'];

							$length = count($dates);

							for($i = 0; $i<$length; $i++)
							{
								for($j = 0;$j<$length - 1; $j++)
								{
									if($dates[$j] <$dates[$j+1])
									{
										$temp = $dates[$j+1];
										$temp2 = $titles[$j+1];
										$temp3 = $conts[$j+1];
										$temp4 = $post_id[$j+1];

										$dates[$j+1] = $dates[$j];
										$titles[$j+1] = $titles[$j];
										$conts[$j+1] = $conts[$j];
										$post_id[$j+1] = $post_id[$j];

										$dates[$j] = $temp;
										$titles[$j] = $temp2;
										$conts[$j] = $temp3;
										$post_id[$j] = $temp4;
									}
								}
							}
						}


					}

					//sorting

						for($k = 0; ($k<count($dates)); $k++)
						{



							?>
											<section>
															<div class = "blog_time">
													<img src = "clock.png" alt = "clock icon" width = 15 height = 15>
													<i>
														<?php
														echo $dates[$k];
														?>
														</i>
													</div>
														<h3>
															<?php
															?>
															Post
															<?php
														echo $post_id[$k];
														?>
														:
														<?php
														echo $titles[$k];
															?>
														</h3>
														<p>
															<?php
															echo $conts[$k];
							?>
							<br>



							<form method = "POST">
							<fieldset>
						<input type="text" name = "comment" placeholder = "Add comment" maxlength: 100  required>
						<input type="submit" name = "add" value="Add">
					</form>
					</fieldset>
												<hr>
												<?php




												 ?>
														</p>
													</section>
														<?php






						}





?>
























				</div><!--end of main class-->
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
</html>

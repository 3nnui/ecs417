<?php
session_start();
$email = $_SESSION['email'];
$option = $_SESSION['option'];
$status = $_SESSION['status'];


$server = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$user = getenv("DATABASE_USER");
$password = getenv("DATABASE_PASSWORD");
$database = getenv("DATABASE_NAME");


$connect = mysqli_connect($server,$user,$password);
mysqli_select_db($connect, $database);

$sql = "SELECT * FROM blog1" ;
$query = mysqli_query($connect, $sql);

if(isset($_POST["post"]))
{
	$title = $_POST['title'];
	$cont = $_POST['content'];

	$sql = "INSERT INTO blog1(title, content) VALUES('$title', '$cont')";
	mysqli_query($connect, $sql);



	?> <script>alert("Post successfully added");
	</script>
	<?php
	header("location: blog.php");
}

//preview feature
/*
if(isset($_POST["preview"]))
{
	$preview = true;
	$_SESSION['preview'] = $preview;
	$title = $_POST['title'];
	$cont = $_POST['content'];

	$sql = "INSERT INTO blog(title, content) VALUES('$title', '$cont')";
	mysqli_query($connect, $sql);

	header("location: blog.php");
}
*/








if($status == "admin")
{
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

<li class =  "nav_element"><a href = "logout.php" class = "link"><?php echo $option;?></a></li>


															</ul>

													</nav>


																	<hgroup>
																		<h1>
																				Signed in with <i> <?php
																				echo $email;
																				?>
																			</i>
																		</h1>
																		<h2 class = "heading_title">

																		Add Post

																	</h2>

																</header>


																<div class = "main">
																<article>
																	<section id = "addpost">

													<form method = "POST">
													<fieldset>
																		<label for="title">

																		<h2>
																		Title
																		</h2>

																		<i>
																			<div id = "title_empty">
																					</div>
																	</i>

																</label>

																				<input type="text" id = "add_title" name = title class = "add_title" maxlength: 1000 name="title">
																				<br>
																				<label for="content">

																				<h2>
																		Content
																		</h2>

																			<i>
																			<div id = "content_empty">
																				</div>
																		</i>
																		</label>
																				<textarea id = "content_box" class = "content_class" name="content" rows = 50 cols = "100"></textarea>
																			<br>
															<input type="submit" name = "preview" id = "preview" value="Preview">


														<input type="submit" id = "post" name = post value="Post">
														<input type="button" id = "clear-but" value="Clear">

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
<?php
}
?>

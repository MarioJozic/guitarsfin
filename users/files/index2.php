<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>One Page Wonder - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">
  

</head>

<body>



  

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#General">General</a>
      <a class="navbar-brand" href="#Types">Types</a>
      <a class="navbar-brand" href="#Howtheywork">How they work</a>
      <a class="navbar-brand" href="#Funfacts">Fun facts</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          <?php if(!isset($_SESSION["loggedin"])){ ?>
            <a class="nav-link" href="../register.php">Sign Up</a>
            <?php } ?>

          </li>
          <li class="nav-item">
            <?php if(!isset($_SESSION["loggedin"])){ ?>
                <a class="nav-link" href="../login.php">Log In</a>
            <?php } else { ?> 
                <a class="navbar-brand" >Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</a>
                <a class="nav-link"  href="../logout.php">Log out</a>
            <?php } ?>
          
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Guitars</h1>
        <h2 class="masthead-subheading mb-0">And why we love them!</h2>
        <a href="#General" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>


  <section id="General"> 
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">


          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">General:</h2>
            <p>asdasd</p> </div>
        </div>
      </div>
    </div>
  </section>

  <section id="Types">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/01.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Different types of guitars;</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="Howtheywork">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/02.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">How do they work?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="Funfacts"> 
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/03.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Here are some fun facts!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


          
          
          
      
          
         
            

            <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">

          <?php if(isset($_SESSION["loggedin"])){ 
             echo $_SESSION["username"]; 
             $username= $_SESSION["username"];
             ?>
          	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		
		
		
		<div>
			<textarea placeholder="Your comment here, maximum of 200 characters!" rows="5" cols="60" name="content" required></textarea>
		</div>
		
		<input type="submit" name="submit" value="Submit">
		
  </form>
          </div>
          </div>
          </div>
          </div>
  <table class="table table-dark">
<tr>
<th>Username</th>
<th>Comment</th>
</tr>

<?php } ?>

          
      <?php

    
    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    require_once "../config.php";

    /* Attempt to connect to MySQL database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    if(isset($_POST['submit']))
{
	$textareaValue = trim($_POST['content']);
	
	$sql = "INSERT INTO `comments`(`username`, `Comment`) VALUES ('$username', '$textareaValue')";
	$rs = mysqli_query($link, $sql);
	$affectedRows = mysqli_affected_rows($link);
	

}

    $sql = "SELECT username, comment FROM comments";
    $result = mysqli_query($link, $sql);

    
    
    echo "<br>";


    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["username"]. "</td><td>" . $row["comment"] . "</td><td>";
        }
        echo "</table>";
        } else { echo "0 results"; }
    
    mysqli_close($link);





    ?>

</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Mario Jozić 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

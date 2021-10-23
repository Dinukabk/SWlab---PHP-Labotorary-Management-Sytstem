
<?php 

  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'sonalihospitle'; 

  $conn = mysqli_connect('localhost', 'root', '', 'sonalihospitle');

  // Checking the connection
  if (mysqli_connect_errno()) {
    die('Database connection failed ' . mysqli_connect_error());
  }

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>SW Lab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li>
              <a href="Chan.php">Chanel Patients</a>
            </li>
            <li>
              <a href="Medicine.php">Give medicine</a>
            </li>
            <li>
              <a href="online.php">Online-Channeling</a>
            </li>

          </ul>


	      

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        

        
        

            
            <div class="span9">
                
                <br>
                    <br>
                        <br>
                            <br>
                                <br>
                                    <br>
                                        <br>
   
                <div class="hero-unit-3">
                        <ul class="thumbnails">
                            <li class="span7">
                                <div class="thumbnail">
                  

                                    <form class="form-horizontal" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail">Channel</label>
                                            <div class="controls">
                                                <input type="text" name="un" id="inputEmail" placeholder="Add Channel Type" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">Date</label>
                                            <div class="controls">
                                                <input type="text" name="p" id="inputPassword" placeholder="Add Chanenl Date" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">Time</label>
                                            <div class="controls">
                                                <input type="text" name="q" id="inputPassword" placeholder="Add Channel Time" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">Fees</label>
                                            <div class="controls">
                                                <input type="text" name="r" id="inputPassword" placeholder="Add Channel Fee" required>
                                            </div>
                                        </div>
                                        

                                                <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save Chanel </button>
                                            </div>
                                        </div>
                                    </form>

                                     <?php
                                    if (isset($_POST['save'])) {

                                        $un = $_POST['un'];
                                        $p = $_POST['p'];
                                        $q = $_POST['q'];
                                        $r = $_POST['r'];
                                    
                                        
                                        
                                        mysqli_query($conn,"insert into  channel  (ChanelT,Date,Time,Fee) values ('$un','$p','$q','$r')")or die(mysqli_error());
                                        echo('<script>location.href = "Chan.php"</script>');
                                    }
                                    ?>


                                </div>
                            </li>

                        </ul>
                        </div>



                    </div>
                </div>


            </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
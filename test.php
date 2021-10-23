
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
              <a href="Staff.php">Admin Staff</a>
              </li>
              <li>
              <a href="test.php">Test</a>
              </li>
            </ul>

          

          </div>
        </nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="AdminHome.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        

        
        

            
            <div class="span9">
                <a href="addtest.php" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Add test Details</a>
   
                <br></br>
                <div class="hero-unit-3">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;Test Details</strong>
                        </div>
                        <thead>
                            <tr>
                                <th>Test Id</th>
                                <th>Test Name</th>
                                <th>Test Price</th>
                               
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($conn,"select * from test ") or die(mysqli_error());
                            while ($row = mysqli_fetch_array($query)) {
                                $id = $row['id'];
                                ?>
                                <tr class="odd gradeX">
                                    <!-- script -->
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    
                                    $('#d<?php echo $id; ?>').tooltip('show')
                                    $('#d<?php echo $id; ?>').tooltip('hide')
                                });
                            </script>
                            <!-- end script -->
                         
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    
                                    $('#v<?php echo $id; ?>').tooltip('show')
                                    $('#v<?php echo $id; ?>').tooltip('hide')
                                });
                            </script>
                            <!-- end script -->

                           
                            <td><?php echo $row['id']; ?></td> 
                            <td><?php echo $row['Tname']; ?></td> 
                            <td><?php echo $row['Tprice']; ?></td> 
                            <td>
                         
                                <a rel="tooip"  title="Delete Subject" id="d<?php echo $id; ?>" href="#id<?php echo $id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;</a>
                               
                            </td>
                            <!-- user delete modal -->
                            <div id="id<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Class?</div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                    <a href="deletetest.php<?php echo '?id=' . $id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                </div>
                            </div>
                            <!-- end delete modal -->

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <!-- end slider -->
                </div>
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
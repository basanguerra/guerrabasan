<?php 
include ('connection.php');
$query = 'SELECT * FROM people
              WHERE
              people_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['people_ID'];
                $i= $row['first_name'];
                $a=$row['last_name'];
                $b=$row['mid_name'];
                $c=$row['address'];
                $d=$row['contact'];
                $e=$row['course'];
             
              }
              
              $id = $_GET['id'];

 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SSG</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php" style="color: white; font-size: 30px;">SSG Office</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">

                   
          </div>
        </div>
      </form>

      <!-- Navbar -->
      
         
        
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
             </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span>
          </a>
       
         
        </li>
             <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i> Services </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div><span><a class="dropdown-item" href="#">Activities</a></span></div>
           <div> <span><a class="dropdown-item" href="#">Students</a></span></div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="others.php">
            <i class="fas fa-fw fa-table"></i>
            <span>About us</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add.php">
            <i class=""></i>
            <span>Contact</span></a>
        </li>
        
      </ul>
      <div>

<div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <img src="logo.png" width="1070px" height="250px" style="text-align: center;">
            </li>
            
          </ol>
        
      </div>


            <ul class="nav nav-tabs">
              <li class="nav-item">
                   <a class="nav-link active" href="#documents"><span class="fa fa-th-list"></span>List of Students</a>
              </li>
              <!-- <li class="nav-item">
                  <a class="nav-link" href="#office"><span class="fa fa-user-times"></span> Archived Borrowers</a>
              </li> -->
            </ul>
            
            <div class="">
              <div class="tab-content">
                <div id="documents" class="tab-pane active">
                  <div class="w3-margin">
                    <div class="row">
                      <div class="col-sm-3 fixed-box">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Student" class="list-group-item">

                <ul id="myUL" class="list-group box">
                   <li class="list-group-item"><a href="students.php">All Students</a></li>
                  <li class="list-group-item"><a href="bsit.php">BSIT Students</a></li>
                        <li class="list-group-item"><a href="bsba.php">BSBA Students</a></li>
                        <li class="list-group-item"><a href="bsfi.php">BSFI Students</a></li>
                        <li class="list-group-item"><a href="bsed.php">BSED Students</a></li>
                        <li class="list-group-item"><a href="bscrim.php">BSCrim Students</a></li>              
                </ul>                 
                      </div>
                      <div class="col-sm-9">
                <div class="table-responsive">  
                 <div class="col-lg-6">

 <form role="form" method="post" action="edit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="First Name" name="firstname" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Last Name" name="lastname" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Middle Name" name="Middlename" value="<?php echo $b; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="Address" value="<?php echo $c; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Contact" name="Contact" value="<?php echo $d; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Course" name="Course" value="<?php echo $e; ?>">
                            </div>   
                            <div>
                              <ul>
                            <button type="submit" class="btn btn-xs btn-info">Update Record</button>
                          </ul>
                            </div>


                      </form>  
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

                            






                

                         
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
         
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span></span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>

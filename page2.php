      <?php
      $conn= mysqli_connect("localhost","root","","nmj");

if(isset($_GET['del']))
{
    $del_id=$_GET['del'];
    $query ="DELETE FROM `student` WHERE `student`.`id` = $del_id";
        if(mysqli_query($conn,$query))
        {
            echo "user has been deleted";
}
    else
    {
    echo "Not deleted";
    }
}
    ?>  

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mdbootstrap.com/previews/templates/admin-dashboard/html/pages/customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jan 2018 14:12:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NMJ SCHOOL ADMIN PANEL</title>
    <!-- Font Awesome -->
      <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Bootstrap core CSS --> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
   
</head>

<body class="fixed-sn white-skin">

    <!--Main Navigation-->
    <header>

        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed custom-scrollbar">
            <!-- Logo -->
          
            <!--/. Logo -->

            <!--Search Form-->
          
   
            
     
        <!--/. Sidebar navigation -->

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
           
        
            <ul class="nav navbar-nav nav-flex-icons ml-auto">

                <!-- Dropdown -->
                <li class="nav-item dropdown notifications-nav">
                    <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="badge red">3</span> <i class="fa fa-bell"></i>
                        <span class="d-none d-md-inline-block">Notifications</span>
                    </a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-money mr-2" aria-hidden="true"></i>
                            <span>New order received</span>
                            <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 13 min</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-money mr-2" aria-hidden="true"></i>
                            <span>New order received</span>
                            <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 33 min</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-line-chart mr-2" aria-hidden="true"></i>
                            <span>Your campaign is about to end</span>
                            <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 53 min</span>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
               
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Log Out</a>
                        <a class="dropdown-item" href="#">My account</a>
                    </div>
                </li>

            </ul>
            <!--/Navbar links-->
        </nav>
        <!-- /.Navbar -->

    </header>

    <!--Main layout-->
    <main>
        <div class="container-fluid" style="margin-top:100px">

            <!--Section: Customers-->
            <section class="section team-section">

                <!-- First row -->
                <div class="row">
                    <!-- First column -->
                    <div class="col-md-8">
                        <div class="row mb-1">
                            <div class="col-md-9">
                                <h4 class="h4-responsive mt-1"> 10th Students</h4>
                            </div>
                            <div class="col-md-3">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-1">
                                <!-- Tabs -->
                                <!-- Nav tabs -->
                                <div class="tabs-wrapper">
                                    <ul class="nav classic-tabs tabs-primary primary-color" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link waves-light active" data-toggle="tab" href="#panel83" role="tab">Student Information</a>
                                        </li>
                                      
                                    </ul>
                                </div>
                                <!-- Tab panels -->
                                <div class="tab-content card">
                                    <!--Panel 1-->
                                    <div class="tab-pane fade show active" id="panel83" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. Number</th>
                                                        <th>Full Name</th>
                                            
                                                        <th>Student ID</th>
                                                        <th>Operation</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

<?php


                $query="SELECT * FROM student ORDER BY id DESC";
                $run =mysqli_query($conn,$query);
                if(mysqli_num_rows($run)>0)
                {
                    
    
                    while($row = mysqli_fetch_array($run))
                    {
                        $id=$row['id'];
                        $full_name=$row['full_name'];
                      
                        $student_id=$row['student_id'];
                          $student_uid=$row['student_uid'];
                    
         
                    ?>
                  

                                                    <tr>
                                                        <th scope="row"><?php echo $id ?></th>
                                                        <td><?php echo $full_name ?></td>
                                                        
                                                        <td><?php echo $student_id ?></td>
                                                        
                                                        

                                                        <td width="10%">
                                                            <a class="blue-text" href="page2.php?view=<?php echo $id;?>" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-user"></i>view</a>
                                                            <br>
                                                          
                                                            <a class="red-text" href="page2.php?del=<?php echo $id;?>" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times">Delete</i></a>
                                                        </td>
                                                         <?php
                }
            }
            ?>
                                                    </tr>
                                                     
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--/.Panel 1-->
                                    <!--Panel 2-->
                                   
                                </div>
                                <!-- /.Tabs -->
                            </div>
                        </div>
                    </div>

                   <?php
if(isset($_GET['view']))
{
    $view_id=$_GET['view'];

                    $sql = "SELECT * FROM Student WHERE `student`.`id` = $view_id";

$run = $conn->query($sql);

 while($row = mysqli_fetch_array($run))
                    {
    $id=$row['id'];
    $full_name=$row['full_name'];
                        $mother_name=$row['mother_name'];
                        $student_id=$row['student_id'];
                          $student_uid=$row['student_uid'];
                        $nationality=$row['nationality'];

                        $tongue = $row['tongue'];
                $religion = $row['religion'];
                $caste = $row['caste'];
                
                $sub_caste = $row['sub_cast'];

                $birth_place = $row['birth_place'];
                $dob_letter = $row['dob_letter'];

                 $dob_number = $row['dob_number'];
                $last_school = $row['last_school'];
                
                $date_of_admit = $row['date_of_admit'];
                $class_admit = $row['class_admit'];
                $progress = $row['progress'];
                
                $conduct = $row['conduct'];
                $leave_class_date = $row['leave_class_date'];
                $leave_reason = $row['leave_reason'];

                $remark = $row['remark'];

?>

                   
                    <!-- /.First column -->
                    <!-- Second column -->
                    <div class="col-md-4 mb-1">

                        <!--Card-->
                        <div class="card profile-card">

                            <!--Avatar-->
                        

                            <div class="card-body pt-0 mt-0">
                                <!--Name-->
                                <div class="text-center">
                                    <h3 class="mb-3 font-bold"><strong><?php echo $full_name?></strong></h3>
                                    
                                </div>

                                <ul class="striped list-unstyled">
                                    <li><strong>Mother Name:</strong><?php echo $mother_name?></li>
                                    
                                    <li><strong>Student ID:</strong><?php echo $student_id?></li>
                                    
                                    <li><strong>Student UID:</strong> <?php echo $student_uid?></li>
                                    
                                    <li><strong>Nationality:</strong> <?php echo $nationality?></li>
                                    <li><strong>Mother Tongue :</strong> <?php echo $tongue?></li>
                                    
                                    <li><strong>Religion:</strong><?php echo $religion?></li>
                                    <li><strong>Caste:</strong><?php echo $caste?></li>
<li><strong>Sub Caste:</strong><?php echo $sub_caste?></li>

<li><strong>place of Birth:</strong><?php echo $birth_place?></li>
                                    
                                    <li><strong>Date of Birth (letters):</strong><?php echo $dob_letter?></li>
                                    
                                   <li><strong>Date of Birth (number):</strong><?php echo $dob_number?></li>
                                    
                                    <li><strong>last school Attended:</strong> <?php echo $last_school?></li>
                                    <li><strong>Date  admitted :</strong> <?php echo $date_of_admit?></li>

                                     <li><strong>Class in which admitted :</strong> <?php echo $class_admit?></li>
                                     <li><strong>progress:</strong><?php echo $progress?></li>
                                     <li><strong>conduct:</strong><?php echo $conduct?></li>
                                    
                                    <li><strong>class left information:</strong><?php echo $leave_class_date?></li>
                                    <li><strong>reason:</strong><?php echo $leave_reason?></li>

<li><strong>Remark:</strong><?php echo $remark?></li>

                                </ul>
  <a class="btn btn-primary" href="page2.php?view=<?php echo $id;?>" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-user"></i>view</a>
                                                           
                                                            <a class="btn btn-success" href="12th.php?view=<?php echo $id;?>" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-print"></i>print</a>
                                                           
                                                            <a class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil">edit</i></a>
                                                          
                                                          
                            </div>

                        </div>
                        <!--Card-->

                    </div>
                </div>
                <!-- /.Second column -->
        </div>
        <!-- /.First row -->
<?php
}
}
?>
        </section>
        <!--Section: Customers-->

        </div>
    </main>
    <!--Main layout-->



    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="../../js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../../js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../../js/mdb.min.js"></script>
    <!--Custom scripts-->
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();

        var container = document.getElementById('slide-out');
        Ps.initialize(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });
    </script>

    <script type="text/javascript">
$('#example').select2({
    placeholder: 'Select a student'
});
</script>
<script type="text/javascript">
$(document).ready(function(){

$.ajax({
    url: "ajaxpro.php", 
    success: function(result){
            $("#example").html(result);
     }});

});
</script>
</body>


<!-- Mirrored from mdbootstrap.com/previews/templates/admin-dashboard/html/pages/customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jan 2018 14:12:24 GMT -->
</html>
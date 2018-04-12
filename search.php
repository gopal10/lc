 <?php
 $conn= mysqli_connect("localhost","root","","nmj");
$search_value=$_POST["search"];
?>
 
                
                <div class="tab-content card">
                                    <!--Panel 1-->
                                    <div class="tab-pane fade show active" id="panel83" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. Number</th>
                                                        <th>Full Name</th>
                                                        <th>Mother Name</th>
                                                        <th>Student ID</th>
                                                        <th>Student UID</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

<?php


                $query="select * from student where full_name like '%$search_value%'";
                $run =mysqli_query($conn,$query);
                if(mysqli_num_rows($run)>0)
                {
                    
    
                    while($row = mysqli_fetch_array($run))
                    {
                        $id=$row['id'];
                        $full_name=$row['full_name'];
                        $mother_name=$row['mother_name'];
                        $student_id=$row['student_id'];
                          $student_uid=$row['student_uid'];
                        $nationality=$row['nationality'];
         
                    ?>
                  

                                                    <tr>
                                                        <th scope="row"><?php echo $id ?></th>
                                                        <td><?php echo $full_name ?></td>
                                                        <td><?php echo $mother_name ?></td>
                                                        <td><?php echo $student_id ?></td>
                                                        <td><?php echo $student_uid ?></td>
                                                        <td><?php echo $nationality ?></td>

                                                        <td>
                                                            <a class="blue-text" href="page2.php?view=<?php echo $id;?>" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-user"></i>view</a>
                                                            <a class="blue-text" href="12th.php?view=<?php echo $id;?>" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-user"></i>print</a>
                                                            <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a class="red-text" href="page2.php?del=<?php echo $id;?>" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
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
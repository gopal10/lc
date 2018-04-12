
<?php
$con= mysqli_connect("localhost","root","","nmj");
            
            if(isset($_POST['submit']))
            {
               // $reg_no = mysqli_real_escape_string($con,$_POST['reg_no']);
                $full_name = mysqli_real_escape_string($con,$_POST['full_name']);
                $mother_name = mysqli_real_escape_string($con,$_POST['mother_name']);
                
                $student_id = mysqli_real_escape_string($con,$_POST['stud_id']);
                $student_uid = mysqli_real_escape_string($con,$_POST['stud_uid']);
                $nationality = mysqli_real_escape_string($con,$_POST['national']);
                
                $tongue = mysqli_real_escape_string($con,$_POST['tongue']);
                $religion = mysqli_real_escape_string($con,$_POST['religion']);
                $caste = mysqli_real_escape_string($con,$_POST['caste']);
                
                $sub_cast = mysqli_real_escape_string($con,$_POST['subcaste']);

                $birth_place = mysqli_real_escape_string($con,$_POST['birth_place']);
                $dob_letter = mysqli_real_escape_string($con,$_POST['dob']);

                 $dob_number = mysqli_real_escape_string($con,$_POST['dob2']);
                $last_school = mysqli_real_escape_string($con,$_POST['last_school']);
                
                $date_of_admit = mysqli_real_escape_string($con,$_POST['doa']);
                $class_admit = mysqli_real_escape_string($con,$_POST['class_of_admit']);
                $progress = mysqli_real_escape_string($con,$_POST['progress']);
                
                $conduct = mysqli_real_escape_string($con,$_POST['conduct']);
                $leave_class_date = mysqli_real_escape_string($con,$_POST['leave_class_date']);
                $leave_reason = mysqli_real_escape_string($con,$_POST['reason']);

                $remark = mysqli_real_escape_string($con,$_POST['remarks']);
         
         $insert ="INSERT INTO `student`( `full_name`, `mother_name`, `student_id`, `student_uid`, `nationality`, `tongue`, `religion`, `caste`, `sub_cast`, `birth_place`, `dob_letter`, `dob_number`, `last_school`, `date_of_admit`, `class_admit`, `progress`, `conduct`, `leave_class_date`, `leave_reason`, `remark`) VALUES
       ('$full_name','$mother_name','$student_id','$student_uid','$nationality','$tongue','$religion','$caste','$sub_cast','$birth_place','$dob_letter','$dob_number','$last_school','$date_of_admit','$class_admit','$progress','$conduct','$leave_class_date','$leave_reason','$remark')";
                    
            if(mysqli_query($con,$insert))
                    {
                      echo"<script>alert('Successfully added!!')</script>";
         echo"<script>window.open('page2.php','_self')</script>";  
              
                    }
                   else{
                         
                     echo"<script>alert('Something Went Wrong. Please Try Again !!')</script>";
         echo"<script>window.open('index.php','_self')</script>"; 
                    }
              
            }
           

         ?>
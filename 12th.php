  <?php
  $conn= mysqli_connect("localhost","root","","nmj");
if(isset($_GET['view']))
{
    $view_id=$_GET['view'];

                    $sql = "SELECT DISTINCT * FROM Student WHERE `student`.`id` = $view_id";

$run = $conn->query($sql);

 while($row = mysqli_fetch_array($run))
                    {
   
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


  
 $student_id= chunk_split($student_id ,1,"  ");
 $student_uid= chunk_split($student_uid ,1,"  ");


 
 $dob_number= chunk_split($dob_number ,1,"   ");
?>
<!DOCTYPE html >
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="utf-8" />
</head>

<body style="margin: 0;">

<div id="p2" style="overflow: hidden; position: relative; width: 935px; height: 1540px;">

<!-- Begin shared CSS values -->
<style class="shared-css" type="text/css" >
.t {
	-webkit-transform-origin: top left;
	-moz-transform-origin: top left;
	-o-transform-origin: top left;
	-ms-transform-origin: top left;
	-webkit-transform: scale(0.25);
	-moz-transform: scale(0.25);
	-o-transform: scale(0.25);
	-ms-transform: scale(0.25);
	z-index: 2;
	position: absolute;
	white-space: pre;
	overflow: visible;
}
</style>
<!-- End shared CSS values -->
<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
</style>

<!-- Begin inline CSS -->
<style type="text/css" >

#t1_2{left:117px;top:400px;letter-spacing:-0.2px;word-spacing:0.2px;}
#t2_2{left:118px;top:432px;letter-spacing:-0.1px;word-spacing:0.5px;}
#t3_2{left:118px;top:536px;letter-spacing:-0.2px;word-spacing:2px;}
#t4_2{left:114px;top:831px;letter-spacing:-0.1px;word-spacing:-0.3px;}
#t5_2{left:114px;top:865px;word-spacing:0.1px;}
#t6_2{left:141px;top:886px;letter-spacing:-0.4px;}
#t7_2{left:114px;top:919px;letter-spacing:0.2px;word-spacing:-2.3px;}
#t8_2{left:114px;top:955px;letter-spacing:0.1px;word-spacing:0.5px;}
#t9_2{left:118px;top:569px;letter-spacing:-0.4px;word-spacing:-0.8px;}
#ta_2{left:118px;top:604px;letter-spacing:-0.1px;word-spacing:0.5px;}
#tb_2{left:117px;top:637px;word-spacing:0.5px;}
#tc_2{left:117px;top:672px;word-spacing:0.5px;}
#td_2{left:114px;top:708px;word-spacing:0.6px;}
#te_2{left:114px;top:741px;letter-spacing:-0.4px;word-spacing:1px;}
#tf_2{left:140px;top:761px;word-spacing:-0.3px;}
#tg_2{left:114px;top:796px;letter-spacing:-0.2px;word-spacing:-3.3px;}
#th_2{left:114px;top:990px;word-spacing:0.1px;}
#ti_2{left:141px;top:1010px;letter-spacing:-0.4px;word-spacing:0.4px;}
#tj_2{left:118px;top:466px;letter-spacing:-0.2px;word-spacing:0.7px;}
#tk_2{left:118px;top:501px;letter-spacing:-0.2px;word-spacing:0.4px;}
#tl_2{left:114px;top:1046px;letter-spacing:0.1px;word-spacing:-0.8px;}
#tm_2{left:100px;top:1160px;letter-spacing:-0.7px;word-spacing:1.3px;}
#tn_2{left:459px;top:1160px;letter-spacing:-0.7px;}
#to_2{left:115px;top:1085px;}
#tp_2{left:132px;top:1085px;letter-spacing:-0.8px;word-spacing:3.9px;}
#tq_2{left:217px;top:240px;letter-spacing:-0.3px;word-spacing:0.8px;}
#tr_2{left:298px;top:262px;letter-spacing:-0.5px;word-spacing:1.5px;}
#ts_2{left:301px;top:291px;}
#tt_2{left:328px;top:294px;letter-spacing:-1.2px;word-spacing:1.5px;}
#tu_2{left:642px;top:291px;}
#tv_2{left:131px;top:255px;}
#tw_2{left:399px;top:329px;letter-spacing:-0.4px;word-spacing:0.9px;}
#tx_2{left:267px;top:163px;letter-spacing:-0.3px;word-spacing:-2.2px;}
#ty_2{left:139px;top:121px;word-spacing:-2.4px;}
#tz_2{left:218px;top:140px;word-spacing:-2.5px;}
#t10_2{left:158px;top:187px;letter-spacing:-0.6px;word-spacing:-2.4px;}
#t11_2{left:325px;top:218px;letter-spacing:-0.1px;}
#t12_2{left:111px;top:358px;letter-spacing:-0.3px;word-spacing:0.8px;}
#t13_2{left:196px;top:358px;}
#t14_2{left:314px;top:358px;word-spacing:-0.3px;}
#t15_2{left:636px;top:358px;letter-spacing:-0.4px;word-spacing:1px;}
#t16_2{left:759px;top:358px;letter-spacing:-0.1px;word-spacing:-0.3px;}
#t17_2{left:131px;top:255px;}

#info1{
	margin-left: 976px;
	margin-top: -78px;
	text-transform: capitalize;
	font-family:Roboto,sans-serif;
	font-weight: bold;
	font-size: 60.5px;
}

#info2{
	margin-left: 976px;
	margin-top: -78px;
	
	font-family:Roboto,sans-serif;
	font-weight: bold;
	font-size: 55px;
}
#number1{
	margin-left: 959px;
	margin-top: -78px;
	
	font-family:Roboto,sans-serif;;
	font-weight: bold;
	letter-spacing: 2.5px;
}
#number2{
	margin-left: 959px;
	margin-top: -78px;
	
	font-family:Roboto,sans-serif;;
	font-weight: bold;
	letter-spacing: 3.5px;
}


.s1_2{
	FONT-SIZE: 67.5px;
	FONT-FAMILY: ArialNarrow_10;
	color: rgb(0,0,0);
}

.s2_2{
	FONT-SIZE: 67.5px;
	FONT-FAMILY: TimesNewRomanPS-BoldMT_13;
	color: red;
}

.s3_2{
	FONT-SIZE: 67.5px;
	FONT-FAMILY: Wingdings-Regular_q;
	color: red;
}

.s4_2{
	FONT-SIZE: 67.5px;
	FONT-FAMILY: TimesNewRomanPSMT_6;
	color: red;
}

.s5_2{
	FONT-SIZE: 73.3px;
	FONT-FAMILY: TimesNewRomanPSMT_6;
	color: red;
}

.s6_2{
	FONT-SIZE: 121.7px;
	FONT-FAMILY: Wingdings-Regular_q;
	color: red;
}

.s7_2{
	FONT-SIZE: 110px;
	FONT-FAMILY: Arial-BoldMT_16;
	color: red;
}

.s8_2{
	FONT-SIZE: 293.3px;
	FONT-FAMILY: DVTTRohiniBold_f;
	color: red;
}

.s9_2{
	FONT-SIZE: 73.3px;
	FONT-FAMILY: Arial-Black_19;
	color: red;
}

.s10_2{
	FONT-SIZE: 61.6px;
	FONT-FAMILY: TimesNewRomanPSMT_6;
	color: red;
}

.s11_2{
	FONT-SIZE: 98.3px;
	FONT-FAMILY: Arial-Black_19;
	color: red;
}

.t.v1_2{
	-webkit-transform: scale(0.24, 0.25);
	-ms-transform: scale(0.24, 0.25);
	-moz-transform: scale(0.24, 0.25);
	-o-transform: scale(0.24, 0.25);

}

</style>
<!-- End inline CSS -->

<!-- Begin embedded font definitions -->
<style id="fonts2" type="text/css" >

@font-face {
	font-family: Arial-BoldMT_16;
	src: url("fonts/Arial-BoldMT_16.woff") format("woff");
}

@font-face {
	font-family: TimesNewRomanPS-BoldMT_13;
	src: url("fonts/TimesNewRomanPS-BoldMT_13.woff") format("woff");
}

@font-face {
	font-family: Wingdings-Regular_q;
	src: url("fonts/Wingdings-Regular_q.woff") format("woff");
}

@font-face {
	font-family: ArialNarrow_10;
	src: url("fonts/ArialNarrow_10.woff") format("woff");
}

@font-face {
	font-family: DVTTRohiniBold_f;
	src: url("fonts/DVTTRohiniBold_f.woff") format("woff");
}

@font-face {
	font-family: Arial-Black_19;
	src: url("fonts/Arial-Black_19.woff") format("woff");
}

@font-face {
	font-family: TimesNewRomanPSMT_6;
	src: url("fonts/TimesNewRomanPSMT_6.woff") format("woff");
}

</style>
<!-- End embedded font definitions -->

<!-- Begin page background -->
<div id="pg2Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
<div id="pg2" style="-webkit-user-select: none;"><object width="935" height="1540" data="2/2.svg" type="image/svg+xml" id="pdf2" style="width:935px; height:1540px; background-color:white; -moz-transform:scale(1); z-index: 0;"></object></div>
<!-- End page background -->


<!-- Begin text definitions (Positioned/styled in CSS) -->
<div id="t1_2" class="t s1_2">1) Name of the Student in Full Name <p id="info1"><?php echo $full_name?></p>	</div>
<div id="t2_2" class="t s1_2">2) Name of the Mother in Full <p id="info1"><?php echo $mother_name?></p></div>
<div id="t3_2" class="t s1_2">5) Nationality  <p id="info1"><?php echo $nationality?></p></div>
<div id="t4_2" class="t s1_2">13) Date of Admission <p id="info1">Mother name</p></div>
<div id="t5_2" class="t s1_2">14) Standard &amp; Class into Which<p id="info2"><?php echo $class_admit?></p></div>
<div id="t6_2" class="t s1_2">admitted</div>
<div id="t7_2" class="t s1_2">15) Progress <p id="info1"><?php echo $progress?></p></div>
<div id="t8_2" class="t s1_2">16) Conduct <p id="info1"><?php echo $conduct?></p></div>
<div id="t9_2" class="t s1_2">6) Mother Tongue <p id="info1"><?php echo $tongue?></p></div>
<div id="ta_2" class="t s1_2">7) Religion <p id="info1"><?php echo $religion?></p></div>
<div id="tb_2" class="t s1_2">8) Caste <p id="info1"><?php echo $caste?></p></div>
<div id="tc_2" class="t s1_2">9) Sub-Caste <p id="info1"><?php echo $sub_caste?></p></div>
<div id="td_2" class="t s1_2">10) Birth Place <p id="info1"><?php echo $birth_place?></p></div>
<div id="te_2" class="t s1_2">11) Date of Birth, Month &amp; year<p id="number2"><?php echo $dob_number?></div>
<div id="tf_2" class="t s1_2">according to the Christianera era</p></div>
<div id="tg_2" class="t v1_2 s1_2">12) Last School attended with Standard<p id="info1"><?php echo $last_school?></p></div>
<div id="th_2" class="t s1_2">17) Standard &amp; Class from Which <p id="info1"><?php echo $leave_class_date?></p></div>
<div id="ti_2" class="t s1_2">left &amp; Date</div>
<div id="tj_2" class="t s1_2">3) Student I. D. <p id="number1"><?php echo $student_id?></p></div>
<div id="tk_2" class="t s1_2">4) Student U. I. D. <p id="number1"><?php echo $student_uid?></p></div>
<div id="tl_2" class="t s1_2">18) Shera <p id="info1"><?php echo $remark?></p></div>

<div id="head">
<div id="tm_2" class="t s2_2">Date : </div>
<div id="tn_2" class="t s2_2">Clerk </div>
<div id="to_2" class="t s3_2"></div>
<div id="tp_2" class="t s4_2">Certified that above information is in accordance with the Jr. College Register.</div>
<div id="tq_2" class="t s5_2">Permanent Jr. College Recognition No. HS / I / PD / 81 - 82 dated 8-8-81</div>
<div id="tr_2" class="t s5_2">By Dy. Director of Education Pune Region, Pune-1</div>
<div id="ts_2" class="t s6_2"></div>
<div id="tt_2" class="t s7_2">LEAVING CERTIFICATE </div>
<div id="tu_2" class="t s6_2"></div>
<!-- <div id="tv_2" class="t s8_2">$</div>
 --><div id="tw_2" class="t s4_2">Index No. J- 17 . 10 . 006</div>
<div id="tx_2" class="t s9_2">MANGAON TALUKA EDUCATION SOCIETY’S</div>
<div id="ty_2" class="t s10_2">No Change in any entry in this certificate shall be made except by the authority issuing it and any  infringement of</div>
<div id="tz_2" class="t s10_2">this requirement is liable to involve the imposition of penalty such as that of rustication.</div>
<div id="t10_2" class="t s11_2">RAJABHAU MONE HIGHER SECONDARY SCHOOL</div>
<div id="t11_2" class="t s9_2">GOREGAON - RAIGAD. (402 103)</div>
<div id="t12_2" class="t s10_2">Register No. </div>
<div id="t13_2" class="t s10_2">733 </div>
<div id="t14_2" class="t s10_2">/ H. S. / </div>
<div id="t15_2" class="t s10_2">Sr. No. </div>
<div id="t16_2" class="t s10_2">/ H. S. /</div>
<div id="t17_2" class="t s8_2" style="border: 10px solid red; border-radius: 50%; width: 255px; height: 260px; padding-left: 29px;">$</div>
</div>
<!-- End text definitions -->
<?php
}
}
?>

</div>
</body>
</html>

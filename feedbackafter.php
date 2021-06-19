<?php 
$con=mysqli_connect("localhost","root","","myhmsdb");
if(isset($_POST['btnsubmit']))
{
	$name = $_POST['txtName'];
	$contact = $_POST['txtContact'];
	$effects = $_POST['txtEffects'];
	$checkup = $_POST['txtCheckup'];
	$feed = $_POST['txtQuery'];

	$query="insert into feedbackafternew(name,contact,effects,checkup, query) values('$name','$contact','$effects','$checkup','$feed');";
	$result = mysqli_query($con,$query);
	
	if($result)
    {
    	echo '<script type="text/javascript">'; 
		echo 'alert("Feedback sent successfully!");'; 
		echo 'window.location.href = "feedbackafter.html";';
		echo '</script>';
    }else{
        echo '<script type="text/javascript">'; 
		echo 'alert("Oops! Something went wrong.");'; 
		echo 'window.location.href = "feedbackafter.html";';
		echo '</script>';
    }
}
<?php 
$con=mysqli_connect("localhost","root","","myhmsdb");
if(isset($_POST['btnSubmit']))
{
	$name = $_POST['txtName'];
	$score = $_POST['txtQuality'];
	$contact = $_POST['txtPhone'];
	$message = $_POST['txtMsg'];

	$query="insert into feedback(name,remark,contact,message) values('$name','$score','$contact','$message');";
	$result = mysqli_query($con,$query);
	
	if($result)
    {
    	echo '<script type="text/javascript">'; 
		echo 'alert("Feedback sent successfully!");'; 
		echo 'window.location.href = "feedback.html";';
		echo '</script>';
    }
}
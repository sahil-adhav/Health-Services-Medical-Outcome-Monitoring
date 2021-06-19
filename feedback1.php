
<?php
$q_score = $_POST['quality'];
$feedback_txt = $_POST['suggestion'];
$conn = mysqli_connect("localhost", "root","", "myhmsdb");
$query ="insert into feedback(quality_score, feedback)values($q_score, '$feedback_txt')";
$result = mysqli_query($conn, $query);

if($result)
// echo "<a href='admin-panel.php'>hello</a>";
echo "
<h1 class=FeedbackName >Thankyou for sharing your valueable feedback.</h1> <br><br>";
else
die("Something terrible happened. Please try again. ");
?>
<!-- //   echo 'Thank you for your valueable feedback. We\'ll appreciate!'; -->

<html>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<style>
.FeedbackName{
    color: white;
}

.btn-outline-light:hover {
        color: #0076d4;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
}

</style>
</head>
<body style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);color:white;padding-top:100px;text-align:center;">
    <a href="admin-panel.php" class="btn btn-outline-light">Back to your account</a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>






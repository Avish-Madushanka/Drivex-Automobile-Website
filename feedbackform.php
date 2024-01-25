<?php 




$name               = $_POST['name'];
$email              = $_POST['email'];
$subject            = $_POST['subject'];
$feedback           = $_POST['feedback'];








//create connection

$conn=mysqli_connect("localhost", "drivvnet_drivex", "Drivex12345!!", "drivvnet_drivex");

if (isset($_POST['submit'])) {
    $sql = "INSERT INTO tbl_feedback(
    name,
    email,
    subject,
    feedback


    )



VALUES(
    '$name',
    '$email',           
    '$subject',
    '$feedback'

)";





 if ($conn->query($sql) === TRUE) {
        echo "<script>alert('You have successfully inserted the data');</script>";
echo "<script type='text/javascript'> document.location ='index.php'; </script>";
} else{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}
}

?>

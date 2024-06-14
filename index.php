<?php

session_start();

include("includes/db.php");

include("functions/functions.php");

?>

<style>
   
body{
    text-align:center;
}

.custom-img {
        width: 400px;
        height: 400px;
        object-fit: cover;
}

.col-12{
    background-image: url("https://images.unsplash.com/photo-1489513691500-41ef4acdb665?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGV2ZW50JTIwbWFuYWdlbWVudHxlbnwwfHwwfHx8MA%3D%3D");
    background-size: cover; /* Ensures the image covers the entire area */
    background-position: center; /* Centers the image */
    height: 500px; /* Example height */
    width: 100%; 
    color: #ffffff;
    padding: 150px 200px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1 {
    margin: 0;
    font-size: 2.5em;
    text-align:center;
}

#current-time {
    font-size: 1.2em;
    margin-top: 10px;
    text-align:center;
}

main {
    padding: 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}


</style>
<!DOCTYPE html>
<html>

<head>
<title>Event Management System </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

<div id="top"><!-- top Starts -->

<div class="container"><!-- container Starts -->

<div class="col-md-6 offer"><!-- col-md-6 offer Starts -->

<a href="#" class="btn btn-info btn-sm" >
<?php

if(!isset($_SESSION['customer_email'])){

echo "Welcome :Guest";


}else{

echo "Welcome : " . $_SESSION['customer_email'] . "";

}


?>
</a>

<a href="#">
Total Price Of Events Booked :  <?php total_price(); ?> 
</a>

</div><!-- col-md-6 offer Ends -->

<div class="col-md-6"><!-- col-md-6 Starts -->
<ul class="menu"><!-- menu Starts -->

<li>
<a href="customer_register.php">
Register
</a>
</li>

<li>
<?php

if(!isset($_SESSION['customer_email'])){

echo "<a href='checkout.php' >My Account</a>";

}
else{

echo "<a href='customer/my_account.php?my_orders'>My Account</a>";

}


?>
</li>

<li>
<a href="bookings.php">
 Go to Bookings
</a>
</li>

<li>
<?php

if(!isset($_SESSION['customer_email'])){

echo "<a href='checkout.php'> Login </a>";

}else {

echo "<a href='logout.php'> Logout </a>";

}

?>
</li>

</ul><!-- menu Ends -->

</div><!-- col-md-6 Ends -->

</div><!-- container Ends -->
</div><!-- top Ends -->

<div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default Starts -->
<div class="container" ><!-- container Starts -->

<div class="navbar-header"><!-- navbar-header Starts -->

<a class="navbar-brand home" href="index.php" ><!--- navbar navbar-brand home Starts -->



</a><!--- navbar navbar-brand home Ends -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"  >

<span class="sr-only" >Toggle Navigation </span>

<i class="fa fa-align-justify"></i>

</button>



</div><!-- navbar-header Ends -->

<div class="navbar-collapse collapse" id="navigation" ><!-- navbar-collapse collapse Starts -->

<div class="padding-nav" ><!-- padding-nav Starts -->

<ul class="nav navbar-nav navbar-left"><!-- nav navbar-nav navbar-left Starts -->

<li class="active">
<a href="index.php"> Home </a>
</li>

<li>
<a href="venues.php"> Events </a>
</li>

<li>
<?php

if(!isset($_SESSION['customer_email'])){

echo "<a href='checkout.php' >My Account</a>";

}
else{

echo "<a href='customer/my_account.php?my_orders'>My Account</a>";

}


?>
</li>

<li>
<a href="bookings.php"> Bookings </a>
</li>

<li>
<a href="contact.php"> Contact Us </a>
</li>

</ul><!-- nav navbar-nav navbar-left Ends -->

</div><!-- padding-nav Ends -->

<a class="btn btn-info navbar-btn right" href="bookings.php"><!-- btn btn-info navbar-btn right Starts -->



<span>List Of Bookings </span>

</a><!-- btn btn-info navbar-btn right Ends -->

<div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Starts -->


</div><!-- navbar-collapse collapse right Ends -->











</div><!-- col-md-12 Ends -->

</div><!-- container Ends -->

<div class="row">
    <div class="col-12">
    <header>
        <h1>Welcome to Our Event Management System</h1>
        <h3>Quick and Hassle-Free Event Registration, Every Time.</h>
        <div id="current-time"></div>
    </header>
    </div>
</div?





<div id="hot"><!-- hot Starts -->

<div class="box"><!-- box Starts -->

<div class="container"><!-- container Starts -->

<div class="col-md-12"><!-- col-md-12 Starts -->

<h2>Upcoming Events</h2>

</div><!-- col-md-12 Ends -->

</div><!-- container Ends -->

</div><!-- box Ends -->

</div><!-- hot Ends -->


<div id="content" class="container"><!-- container Starts -->

<div class="row"><!-- row Starts -->

<?php

getPro();

?>

</div><!-- row Ends -->

</div><!-- container Ends -->

<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

<script>
function updateTime() {
    const currentTimeElement = document.getElementById('current-time');
    const now = new Date();
    const formattedTime = now.toLocaleTimeString();
    currentTimeElement.textContent = `Current Time: ${formattedTime}`;
}

document.addEventListener('DOMContentLoaded', () => {
    updateTime();
    setInterval(updateTime, 1000);
});
</script>

</body>
</html>
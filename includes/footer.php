
<div id="footer"><!-- footer Starts -->
<div class="container"><!-- container Starts -->

<div class="row" ><!-- row Starts -->

<div class="col-md-4 col-sm-6" ><!-- col-md-3 col-sm-6 Starts -->

<h4>Pages</h4>

<ul><!-- ul Starts -->

<li><a href="bookings.php">Bookings</a></li>

<li><a href="contact.php">Contact Us</a></li>

<li><a href="shop.php">venues</a></li>

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


</ul><!-- ul Ends -->

<hr>

<h4>User Section</h4>

<ul><!-- ul Starts -->

<li>

<?php

if(!isset($_SESSION['customer_email'])){

echo "<a href='checkout.php' >Login</a>";

}
else{

echo "<a href='customer/my_account.php?my_orders'>My Account</a>";

}


?>

</li>

<li><a href="customer_register.php">Register</a></li>

</ul><!-- ul Ends -->

<hr class="hidden-md hidden-lg hidden-sm" >

</div><!-- col-md-3 col-sm-6 Ends -->




<div class="col-md-4 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->

<h4>To Find Us</h4>



<a href="contact.php">Go to Contact Us page</a>

<hr class="hidden-md hidden-lg">

</div><!-- col-md-3 col-sm-6 Ends -->

<div class="col-md-4 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->





<hr>

<h4> Stay in touch </h4>

<p class="social"><!-- social Starts --->

<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-google-plus"></i></a>
<a href="#"><i class="fa fa-envelope"></i></a>

</p><!-- social Ends --->

</div><!-- col-md-3 col-sm-6 Ends -->

</div><!-- row Ends -->

</div><!-- container Ends -->
</div><!-- footer Ends -->

<div id="copyright"><!-- copyright Starts -->

<div class="container" ><!-- container Starts -->

<div class="col-md-6" ><!-- col-md-6 Starts -->

<p class="pull-left"> &copy;2024 COEN Database Systems, Santa Clara University</p>

</div><!-- col-md-6 Ends -->

<div class="col-md-6" ><!-- col-md-6 Starts -->



</div><!-- col-md-6 Ends -->

</div><!-- container Ends -->

</div><!-- copyright Ends -->





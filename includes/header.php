
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><b>WYPOŻYCZALNIA SAMOCHODÓW PLUTEX</b></a></div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <p class="uppercase_text">Skontaktuj się z nami : </p>
              <a href="mailto:info@o2.pl">info@o2.pl</a> </div>
            <div class="header_widgets">
              <p class="uppercase_text">Zadzwoń: </p>
              <a href="tel:61-1234-5678-09">+48-600-800-200</a> </div>
           
   <?php   if(strlen($_SESSION['login'])==0)
	{	
?>
 <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>
<?php }
else{ 

echo "Witamy w wypożyczalni samochodów";
 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="" aria-hidden="true"></i> 
<?php 
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName)."   |   "; }}?>WIECEJ OPCJI<i class="" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Ustawienia użytkownika</a></li>
            <li><a href="my-booking.php">Moje rezerwacje</a></li>
            <li><a href="post-testimonial.php">Daj rekomendacje</a></li>
          <li><a href="my-testimonials.php">Moje rekomendacje</a></li>
            <li><a href="logout.php">Wyloguj</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Ustawienia użytkownika</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Zmień hasło</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Moje rezerwacje</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Daj rekomendacje</a></li>
          <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Moje rekomendacje</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Wyloguj</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Strona główna</a>    </li>
          	 
          <li><a href="page.php?type=aboutus">O nas</a></li>
          <li><a href="car-listing.php">Lista samochodów</a>
          <li><a href="contact-us.php">Skontaktuj się z nami</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>
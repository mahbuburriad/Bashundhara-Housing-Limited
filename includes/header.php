<!DOCTYPE html>
<html>
<head>
<title>Bashundhara Housing Limited</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- <link href="resources\CSS\style.css" rel="stylesheet" type="text/css" media="all"> -->

    <link rel="icon" href = "resources\image\logo.png" type="image/png">
</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
   
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> +88 (017, 016) 11 574 805</li>
        <li><i class="fa fa-envelope-o"></i> mahbubur.riad@outlook.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-sign-in"></i><button onclick="document.getElementById('modal-signin').style.display='block'">Sign in As</button></li>
        <li><i class="fa fa-user"></i> <button onclick="document.getElementById('modal-register').style.display='block'"">Sign Up</button></li>
      </ul>
    </div>
    
  </div>
</div>



<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">Bashundhara Hosing Limited</a></h1>
    </div>
    <div id="search" class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="search" value="" placeholder="Search Here&hellip;">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>


<!-- ################################################################################################ -->
<div id="modal-signin" class="modal">
        <form class="modal-content animate" style="margin-top: 25px;height: 627px">
          <div class="image-container">
            <img src="resources\image\18.png" style="width: 200px; height: 200px;">
          </div>
          
          <div style="margin-top: 30px;padding: 16px">
            <label>Sign in as</label>
            <button type="button" onclick="location.href='guest-profile.php'" style="width: 98%;background-color: #4b0082">Guest</button>
            <button type="button" onclick="location.href='admin-profile.php'" style="width: 98%">Admin</button>
            <button type="button" onclick="location.href='landowner-profile.php'" style="width: 98%">Land Owner</button>
            <button type="button" onclick="location.href='security-profile.php'" style="width: 98%">Security Officer</button>
            <button type="button" onclick="location.href='guard_profile.php'" style="width: 98%">Guard</button>
            <button type="button" onclick="location.href='cleaner-profile.php'" style="width: 98%">Cleaner</button>
          </div>
          
          <div style="padding: 16px;background-color: #000000">
            <button type="button" onclick="document.getElementById('modal-signin').style.display='none'" style="background-color: #f44336">Cancel</button>
          </div>
        </form>
      </div>




<!-- ################################################################################################ -->

      <div id="modal-register" class="modal">
        <form class="modal-content animate" style="margin-top: 25px;height: 430px">
          <div class="image-container">
            <img src="resources\image\guest.png" style="width: 200px; height: 200px;">
          </div>
          
          <div style="margin-top: 30px;padding: 16px">
            <label>Register as</label>
            <button type="button" onclick="location.href='SignUpGuest.php'" style="width: 98%;background-color: #4b0082">Guest</button>
            <button type="button" onclick="location.href='regi_staff.php'" style="width: 98%">Registration As Stuff for Job</button>
          </div>
          
          <div style="padding: 16px;background-color: #000000">
            <button type="button" onclick="document.getElementById('modal-register').style.display='none'" style="background-color: #f44336">Cancel</button>
          </div>
                  </form>
      </div>
<!--  ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li><a href="Home.php">Home</a></li>
<li><a class="drop">service</a>
                <ul>
            <li><a href= "bwfs.php">Bashundhara Well-Fair Service</a></li>
            <li><a href= "s.php">Security</a></li>
            <li><a href="pay.php">Payment System</a></li>
          </ul>
          </li>
          <li><a class="drop">Buy/Rent</a>
          <ul>
            <li><a>Buy</a>
            <ul>
            <li><a href="sapartment.php">Apartment</a></li>
            <li><a href="splot.php">Plot</a></li>
          </ul></li>
          <li><a>Rent</a>
            <ul>
            <li><a href="apartment.php">Apartment</a></li>
            <li><a href="plot.php">Plot</a></li>
          </ul></li>
            
          </ul>
          
          </li>
          <li><a class="drop">Emergency</a>
          <ul>
            <li><a href="hospital.php">Hospital</a></li>
            <li><a href="police.php">Fire Station</a></li>
            <li><a href="http://www.police.gov.bd/">Police Station</a></li>
          </ul>
          </li>
        <li><a href= "ContactUs.php">Contact Us</a></li>
        <li><a href= "notice.php">Notice</a></li>
    <!-- ################################################################################################ -->
  </nav>
</div>



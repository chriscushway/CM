<?php
	
	include("functions.php");

	include("views/header.php");

	if($_GET['page'] == "about-us"){
      
      	include("views/about-us.php");
    
    }else if($_GET['page'] == "services"){
    
    	include("views/services.php");
      
    }else if($_GET['page'] == "equipment"){
      
      	include("views/equipment.php");
      
    }else if($_GET['page'] == "contact-us"){
      
      	include("views/contact-us.php");
      
    }else if($_GET['page'] == "events"){
      
      	include("views/events.php");
      
    }else if($_GET['page'] == "film"){
      
      include("views/film.php");
      
    }else if($_GET['page'] == "bookings"){
      
      include("views/bookings.php");
      
    }else if($_GET['page'] == "airside-transfer"){
      
      include("views/airside-transfer.php");
      
    }else if($_GET['page'] == "organ-transfer"){
      
      include("views/organ-transfer.php");
      
    }else if($_GET['page'] == "ifht"){
      
      include("views/ifht.php");
      
    }else if($_GET['page'] == "film-booking"){
      
      include("views/film-booking.php");
      
    }else if($_GET['page'] == "events-booking"){
      
      include("views/events-booking.php");
      
    }else if($_GET['page'] == "organ-transfer"){
      
      include("views/organ-transfer.php");
      
    }else if($_GET['page'] == "commercial-booking"){
      
      include("views/commercial.php");
      
    }else if($_GET['page'] == "coming-soon"){
      
      include("views/coming-soon.php");
      
    }else{
    	
      	include("views/home.php");
    
    }

	include("views/footer.php");

?>
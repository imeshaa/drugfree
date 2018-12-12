<?php 

  
  include('lang.php'); 
  
$default= ($_GET['lang']=='') ? 'en' : $_GET['lang'];
	
	echo $lang[$default]['hello'].','.$lang[$default]['my_name'].' John Doe';

 ?>



<?php


$con = mysql_connect('localhost','plotkinm','FaceBooK','plotkinm_db');
if (!$con)
  {
  die('Could not connect: ' . mysql_error($con));
  }


mysql_select_db($con,"plotkinm_db");


$result = mysql_query("SELECT city FROM US_Zip_Codes");


while($row = mysql_fetch_assoc($result))
  {
  		$cityName[] = $row['city'];
  }
mysql_free_result($result);
mysql_close($con);

if(isset($_GET['part']) and $_GET['part'] != '')
   $results = array();

	 foreach($cityName as $city)
    {
        // if it starts with 'part' add to results
        if( strpos($city, $_GET['part']) === 0 ){
            $results[] = $city;
        }
    }
	 echo json_encode($results);
?>
<!DOCTYPE html>
<html>
    <head>
      <!--  <title>RETRO|DUMP</title>        
        <link rel="stylesheet" type="text/css" media="screen" href="css/eshopheader.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/card.css" />
        
    </head>

    <body>
    <div class="upper_header">
    <div class="logo">RETRO|DUMP</div>
    </div>
    <div class="header">
<div class="left_segment"></div>
<div class="middle_segment"></div>
<div class="right_segment"></div>
</div>
-->
<?php

    //CARD.PHP

    include "db_connection.php";
    
    $nummer = $_GET['Mario_ID']; 

    $sql_querie = "SELECT Mario_ID, Mario_Img, Mario_Name, Mario_Year, Mario_System FROM mario_games";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="flexitem debug">' .
             '<a href="retrodump.php?Mario_ID=' . $row['Mario_ID'] . '">' .
             '<img src="' . $row['Mario_Img'] . '" alt="' . $row['Mario_Img'] . '" style="width:75%">' .
             '</a>' .
            $row['Mario_Name'] . '</h1>' .
            // '<h4>' . $row['Mario_System'] . '</h4>' .
             //'<h5>' . $row['Mario_Year'] . '</h5>' .
             
             //'<p class="title">' . $row['Mario_Name'] . '</p>' .           
             //'<p></p>' .
             '</div>';
       
    }       

    $conn = null;
  
?></body>
</html>
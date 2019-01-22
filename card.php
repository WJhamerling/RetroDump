<?php

    //CARD.PHP

    include "db_connection.php";        

    $sql_querie = "SELECT Mario_ID, Mario_Img, Mario_Name, Mario_Year, Mario_System FROM mario_games";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="flex">' .
             '<a href="retrodump.php?Mario_ID=' . $row['Mario_ID'] . '">' .
             '<img src="' . $row['Mario_Img'] . '" alt="' . $row['Mario_Img'] . '" style="width:25%">' .
             '</a>' .
             '<h1>' . $row['Mario_Name'] . '</h1>' .
             '<h4>' . $row['Mario_System'] . '</h4>' .
             '<h5>' . $row['Mario_Year'] . '</h5>' .
             
             '<p class="title">' . $row['Mario_Name'] . '</p>' .           
             '<p></p>' .
             '</div>';
       
    }       

    $conn = null;
  
?>
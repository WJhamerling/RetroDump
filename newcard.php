<?php

    //eshop.php

    include "db_connection.php";

    if(isset($_GET['Mario_ID'])){
        //ALS ?Mario_ID=x in de link staat.
        $m_id = $_GET['Mario_ID'];
        $sql_querie = "SELECT Mario_ID, Mario_Img, Mario_Name, Mario_Year, Mario_System FROM mario_games WHERE Mario_ID= '$m_id'"; 
    }else{
        //ALS er niks in de link staat.
        $sql_querie = "SELECT Mario_ID, Mario_Img, Mario_Name, Mario_Year, Mario_System FROM mario_games ";
    }  
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="flex debug">' .
             $row['Mario_Name'] .
             '<a href="eshop.php?Mario_ID=' . $row['Mario_ID'] . '">' .
             '<img src="' . $row['Mario_Img'] . '" alt="' . $row['Mario_Img'] . '" style="width:75%">' .
             '</a>' .
             
            // '<h4>' . $row['Mario_System'] . '</h4>' .
            //'<h5>' . $row['Mario_Year'] . '</h5>' .
            // '<p class="title">' . $row['Mario_Name'] . '</p>' .           
            // '<p></p>' .
             '</div>';
       
    }       

    $conn = null;
  
?>
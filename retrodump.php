<!DOCTYPE html>
<html>
    <head>
        <title>RETRO|DUMP</title>        
        <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
        
    </head>

    <body>
<?php

    //retrodump.php

    include "db_connection.php";
    
    $m_id = $_GET['Mario_ID'];


    $sql_querie = "SELECT Mario_ID, Mario_Img, Mario_Name, Mario_Year, Mario_System FROM mario_games WHERE Mario_ID= '$m_id'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="flex">' .
             '<a href="retrodump.php?Mario_ID=' . $row['Mario_ID'] . '">' .
             '<img src="' . $row['Mario_Img'] . '" alt="' . $row['Mario_Img'] . '" style="width:150%">' .
             '</a>' .
             '<h1>' . $row['Mario_Name'] . '</h1>' .
             '<h4>' . $row['Mario_System'] . '</h4>' .
             '<h5>' . $row['Mario_Year'] . '</h5>' .
             
             '<p class="title">' . $row['Mario_Name'] . '</p>' .           
             '<p></p>' .
             '</div>';
       
    }       

   // $conn = null;
  
?>

</body>
</html>
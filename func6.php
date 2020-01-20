
<?php
//hellow this is test content

//**************************************
//     First selection results     //
//**************************************
if($_GET['func'] == "drop_1" && isset($_GET['func'])) { 
   drop_1($_GET['drop_var']); 
}

function drop_1($drop_var)
{  
    
    /* include('conn.php');
    
    $equery = $conn->prepare("select room_number from room_type where room_id = '$drop_var'");
    $equery->execute();
    echo "<select name='room_number' class='form-control'>";
    echo "<option value=''>--Select--</option>";
    while ($erows = $equery->fetch())
    {
        
        $room_number = $erows['room_number'];
        echo "<option value='$room_number'>$room_number</option>";
    }
    echo "</select>";  */
    echo"hello";
 }
?>



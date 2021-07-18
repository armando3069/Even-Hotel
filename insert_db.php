<?php

 $sql= "INSERT INTO Hotel0369(DataR,Nume,Email,Telefon,Camera,Mesaje,Data1,Data2) VALUES ('$date','$Nume','$Email','$Telefon','$Camera','$Mesaje','$date_begin','$date_end')";
     
    if(mysqli_query($connect,$sql))
    {
       header("Location:home1.html");
    }
    else 
    {
       echo "error";
        die (mysqli_error($connect));
    }


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>home</title>
    </head>
    <body>
        
    <?php
    // connect with datebase
     require "connect_db.php";
     
     // read date POST

      $Nume = $_POST['Nume'];
      $Telefon = $_POST['Telefon'];
      $Email = $_POST['Email'];
      $Camera = $_POST['camere'];
      $Mesaje = $_POST['Mesaje'];
      $date_begin = $_POST['data_begin'];
      $date_end = $_POST['data_end'];
      $date = date("H:i / d.m.Y", strtotime("+1 hour"));

  
      //echo $Nume." ".$Telefon." ".$Email." ".$Camera." ".$Mesaje." ".$date_begin." ".$date_end."  ".$date;

      require  "insert_db.php";


     


    


    ?>

    </body>
</html>

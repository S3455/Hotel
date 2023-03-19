<?php

spl_autoload_register(function ($class_name) {
require_once $class_name . '.php';
});

$ho1 = new Hotel("Hilton **** Strasbourg", "10 route de la gare", 67000, "STRASBOURG");
$ho2 = new Hotel("Regent **** Paris", "14 route de la chance", 75000, "PARIS");

$ch1 = new Chambre(1, 120, 2, true, $ho1);
$ch2 = new Chambre(2, 120, 1, false, $ho1);
$ch3 = new Chambre(3, 120, 3, false, $ho1);
$ch4 = new Chambre(16, 300, 1, true, $ho1);
$ch5 = new Chambre(17, 300, 1, true, $ho1);
$ch6 = new Chambre(18, 300, 1, true, $ho1);
$ch7 = new Chambre(19, 300, 1, true, $ho1);

$cl1 = new Client("Micka", "MURMANN");
$cl2 = new Client("Virgile", "GIBELLO");
$cl3 = new Client("Micka", "MURMANN");

$re1 = new Reservation("1-01-2021","01-01-2021", $ch3, $cl2,$ho1);
$re2 = new Reservation(" 11-03-2021"," 11-03-2021", $ch2, $cl3,$ho1);
$re3 = new Reservation("01-04-2021","01-04-2021", $ch1, $cl1,$ho1);
$re4 = new Reservation("01-04-2021","01-04-2021", $ch4, $cl1,$ho1);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/756e95885c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
</head>
    <style>
    .Dispo {
  color: white;
  padding: 6px; 
  border: solid #32d296 1px;
  background-color: #32d296; 
    }

  .Reserv {
  color: white;
  padding: 6px; 
  border: solid #f0506e 1px;
  background-color: #f0506e; 
}

  span.Reservs {
  color: white;
  padding: 6px; 
  margin: 3px;
  background-color: #32d296; 
  }

  h2{
    margin-top: 50px;
  }

  body {
    padding: 0 30px;
  }

  tr {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color: #ffffff;
}

    </style>  
<body>
    <?php
$ho1->infos_Hotel();
$ho1->infos_HotelReservation();
$ho2->infos_HotelReservation();

$cl1->infos_ClientReservation();




$ho1->status_Hotel();


?>
</body>
</html>
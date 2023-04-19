<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
</head>
<body>
    
<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];



?>
<?php
$filtarggioparc = [];

if(isset($_GET['parking']) && $_GET['parking'] ==="1"){
    foreach($hotels as $hotel){
        if($hotel['parking'] == true) {
            $filtarggioparc[] = $hotel;
        }
    }
}else{
    $filtarggioparc = $hotels;
}
?>

<form method="GET" action="index.php">

<select id="genere" name="parking">
                <option value="0">scegli</option>
                <option value="1">con parceggio</option>
               
</select>

<button type="submit">Invia</button>
<button type="reset">Resetta</button>

</form>




 <div class="container">
 <table class="table table-striped">
<thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Stelle</th>
      <th scope="col">Distanza dal centro</th>
    </tr>
  </thead>
  <tbody>

    <?php

            foreach($filtarggioparc as $hotel) {
                echo "<tr>
                <td> " . $hotel['name'] . "</td>
                <td> " . $hotel['description']. "</td>
                <td> " . ($hotel['parking']? 'SI' : 'NO') . "</td>
                <td> " . $hotel['vote'] . "</td>
                <td> " . $hotel['distance_to_center'] . "</td>
                
                </tr>";
            }

    ?>
   

    
  </tbody>
</table>
 </div>

</body>
</html>
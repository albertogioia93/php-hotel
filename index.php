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

    var_dump($hotels);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- collegamento al framework bootstrap via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
<body>
    <h1>PHP HOTEL</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">PARKING</th>
      <th scope="col">VOTE</th>
      <th scope="col">DISTANCE TO CENTER</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $hotels [0] ['name']; ?></th>
      <td><?php echo $hotels [0] ['description']; ?></td>
      <td><?php echo $hotels [0] ['parking'] ? 'SI' : 'NO'; ?></td>
      <td><?php echo $hotels [0] ['vote']; ?></td>
      <td><?php echo $hotels [0] ['distance_to_center']; ?> km</td>
    </tr>
    <tr>
      <th scope="row"><?php echo $hotels [1] ['name']; ?></th>
      <td><?php echo $hotels [1] ['description']; ?></td>
      <td><?php echo $hotels [1] ['parking'] ? 'SI' : 'NO'; ?></td>
      <td><?php echo $hotels [1] ['vote']; ?></td>
      <td><?php echo $hotels [1] ['distance_to_center']; ?> km</td>
    </tr>
    <tr>
      <th scope="row"><?php echo $hotels [2] ['name']; ?></th>
      <td><?php echo $hotels [2] ['description']; ?></td>
      <td><?php echo $hotels [2] ['parking'] ? 'SI' : 'NO'; ?></td>
      <td><?php echo $hotels [2] ['vote']; ?></td>
      <td><?php echo $hotels [2] ['distance_to_center']; ?> km</td>
    </tr>
    <tr>
      <th scope="row"><?php echo $hotels [3] ['name']; ?></th>
      <td><?php echo $hotels [3] ['description']; ?></td>
      <td><?php echo $hotels [3] ['parking'] ? 'SI' : 'NO'; ?></td>
      <td><?php echo $hotels [3] ['vote']; ?></td>
      <td><?php echo $hotels [3] ['distance_to_center']; ?> km</td>
    </tr>
    <tr>
      <th scope="row"><?php echo $hotels [4] ['name']; ?></th>
      <td><?php echo $hotels [4] ['description']; ?></td>
      <td><?php echo $hotels [4] ['parking'] ? 'SI' : 'NO'; ?></td>
      <td><?php echo $hotels [4] ['vote']; ?></td>
      <td><?php echo $hotels [4] ['distance_to_center']; ?> km</td>
    </tr>
    
  </tbody>
</table>
    

    <!-- collegamento al js di bootstrap via cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
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

    $parking = $_POST['parcheggio'];

    $search = isset($_POST['parcheggio']) ? 'true' : 'false';
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
 </head>
 <body>
    <form action="./index.php" method="POST">
        <select name="parcheggio" id="parcheggio">
            <option value="1">Si</option>
            <option value="">No</option>
        </select>
        <button>Cerca</button>
    </form>
<table class="table">
 <?php 
    foreach($hotels as $key => $hotel) { ?>
    <?php if($key == 0){ ?>
        <thead>
            <tr>
        <?php foreach($hotel as $key => $info) { ?>
                        <th scope="col">
                            <?php echo $key ?>
                        </th>
                        <?php } ?>
                    </tr>
                </thead>
    <?php } ?>
    <tbody>
        <tr>
        <?php 
        if($search == 'true') {
            if($parking == $hotel['parking']) {
                foreach ($hotel as $key => $info) {?>
                                <td>
                                <?php 
                                        if($key == 'parking') {
                                            if($info == true){
                                                echo 'Si <br/>';
                                            }
                                            else {
                                                echo 'No <br/>';
                                            }
                                        }
                                        else{
                                            echo $info."<br/>";
                                        } 
                                ?>
                                </td>
                                <?php }
                
            }
        };
        if($search == 'false'){
            foreach ($hotel as $key => $info) {?>
                <td>
                <?php 
                        if($key == 'parking') {
                            if($info == true){
                                echo 'Si <br/>';
                            }
                            else {
                                echo 'No <br/>';
                            }
                        }
                        else{
                            echo $info."<br/>";
                        } 
                ?>
                </td>
                <?php }
        };
        ?>
                    </tr>
                </tbody>
                <?php } ?>
</table>
 </body>
 </html>

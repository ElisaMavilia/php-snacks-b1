<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->
<?php
$basketGame = [
    [  
        'home' => 'Messina sud',
        'guest' => 'Messina centro',
        'scoreH' => '60',
        'scoreG' => '55'
    ],
    [
        'home' => 'Catania sud',
        'guest' => 'Messina centro',
        'scoreH' => '44',
        'scoreG' => '55'
    ],

    [
        'home' => 'Gothenburg',
        'guest' => 'Kungälv',
        'scoreH' => '34',
        'scoreG' => '50'
    ],

    [
        'home' => 'Djurgården',
        'guest' => 'Malmö',
        'scoreH' =>'22',
        'scoreG' => '35'
    ],

    [
        'home' => 'Skellefteå',
        'guest' => 'Paris',
        'scoreH' => '45',
        'scoreG' => '60'
    ],


    [
        'home' => 'Lerum',
        'guest' => 'Rosegården',
        'scoreH' => '45',
        'scoreG' => '65'
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Snack 1</title>
</head>
<body>
    <main class="">
        <div class="card">
           <ul> <?php foreach ($basketGame as $game){ ?>
            <li> 
                <?php echo $game ['home']," - " , $game['guest'], "  "," | ", $game['scoreH'], " - " , $game['scoreG']?>
                 <?php } ?>
            </li>
           </ul>
        </div>
        <br>
      
       
          
    </main>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

<!--   <h1>Risultato partite</h1>

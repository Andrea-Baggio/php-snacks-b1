<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ## Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60
    ## Snack 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    ## Snack 4
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

    <?php 
    $arrHost = [
        [
        'hostTeam'=> 'Treviso',
        'score' => 66,
        ],
        [
        'hostTeam'=> 'Brindisi',
        'score' => 86,
        ],
        [
        'hostTeam'=> 'Lugano',
        'score' => 25,
        ]
    ]; 

    $arrGuest = [
        [
        'guestTeam'=> 'Milano',
        'score' => 81,
        ],
        [
        'guestTeam'=> 'Pesaro',
        'score' => 101,
        ],
        [
        'guestTeam'=> 'Varese',
        'score' => 93,
        ]
    ]; 

    print_r ($arrHost);
    print_r ($arrGuest);
    ?>
    <!-- <h2>Host team</h2> -->
</body>
</html>
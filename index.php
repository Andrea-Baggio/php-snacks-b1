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
    Olimpia Milano - Cantù | 55-60 -->

    <?php    
    $userName = $_GET['firstName'];
    $userEmail = $_GET['email'];
    $userAge = $_GET['age'];
    
    if (strlen($userName) > 3 && is_numeric ($userAge) && strpos($userEmail, '@') && strpos($userEmail, '.')) {
        $message = 'Accesso riuscito'; 
    } else {
        $message ='Accesso negato'; 
    }


     ## Snack 4
    // Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    $arrNumRandom = [];
    for ($i=0; $i < 15; $i++) { 
        $numbers = rand(0, 99);
        array_push($arrNumRandom, $numbers);
    }
    ?>
    
    <!-- Sanck 2 -->
    <h1>Sanck 2</h1>
    <form method="get" action="">
        <label for="firstName"> Nome
            <input type="text" name="firstName" id="firstName">
        </label>
        
        <label for="email"> E-mail
            <input type="text" name="email" id="email">
        </label>
        
        <label for="age"> Età
            <input type="text" name="age" id="age">
        </label>

        <button>Convalida dei dati</button>
        <div> <?php echo $message ?> </div>
    </form>

    <h1>Snack 4</h1>
    <div> <pre> <?php print_r($arrNumRandom); ?> </pre> </div>
</body>
</html>
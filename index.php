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
    ## Snack 4
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->



    <?php    
    ## Snack 2
    // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
    $userName = $_GET['firstName'];
    $userEmail = $_GET['email'];
    $userAge = $_GET['age'];

    if (strlen($userName) > 3) {
        print_r('corretto'); 
    } else {
        print_r('errato'); 
    }
    ?>
    
    <!-- Sanck 2 -->
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
    </form>

</body>
</html>
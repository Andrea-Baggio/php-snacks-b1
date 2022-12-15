<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
    ## Snack 1
    $arrMatch = [
        [
            'host' => [
            'team' => 'Milano',
            'score' => 99,
            ],

            'guest' => [
            'team' => 'Varese',
            'score' => 80,
            ],
        ],
        [
            'host' => [
            'team' => 'Napoli',
            'score' => 100,
            ],

            'guest' => [
            'team' => 'Torino',
            'score' => 101,
            ],
        ],
        [
            'host' => [
            'team' => 'Vicenza',
            'score' => 40,
            ],

            'guest' => [
            'team' => 'Predappio Eagles',
            'score' => 199,
            ],
        ],
    ];

    ## Snack 2 
    $userName = isset ($_GET['firstName']) ? $_GET['firstName'] : '';
    $userEmail = isset ($_GET['email']) ? $_GET['email'] : '';
    $userAge = isset ($_GET['age']) ? $_GET['age'] : ''; 
    
    if (strlen($userName) > 3 && is_numeric ($userAge) && strpos($userEmail, '@') && strpos($userEmail, '.')) {
        $message = 'Accesso riuscito'; 
    } else {
        $message ='Accesso negato'; 
    }

     ## Snack 4
    $arrNumRandom = [];
    while (count($arrNumRandom) < 15) {
        $numbers = rand(10, 99);
        if (!in_array($numbers, $arrNumRandom)) {
            $arrNumRandom[] = $numbers;
        }
    }

    ?>
    
    <h1>Snack 1</h1>
    <ul>
        <?php 
        for ($i=0; $i < count($arrMatch); $i++) { 
            $match = $arrMatch[$i];
            echo "<li>
                    {$match['host']['team']} -  
                    {$match['guest']['team']} |  
                    {$match['host']['score']} - 
                    {$match['guest']['score']}
                </li>";
        } ?>
    </ul>

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
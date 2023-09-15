<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reception data</title>
    <link rel="stylesheet" href="./styles/action.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script defer src="./js/action.js"></script>
</head>

<body>
    <div class="container">
        <div class="content">
            <?php
            $name = cleanData($_GET['name']);
            $fName = cleanData($_GET['first-name']);
            $email = cleanData($_GET['email']);
            $age = cleanData($_GET['age']);
            $country = match (cleanData($_GET['country'])) {
                '1' => "en France",
                '2' => "en Belgique",
                default => "un autre pays"
            };
            
            //set timezone to france
            date_default_timezone_set('Europe/Paris');

            //get only hours
            $hour = (int)date('H');
        

            $greeting;

            if($hour >= 5 && $hour < 12){
                $greeting = "Bonjour";
            } elseif ($hour >= 12 && $hour < 18){
                $greeting= "Bon après-midi";
            }else {
                $greeting = "Bonsoir";
            }

            
            function cleanData($data): string
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>

            <div class="info-wrapper">
                <span><?= $greeting ?>
                    <?= "$fName $name" ?> , vous avez
                    <?= $age ?>ans et habitez
                    <?= $country ?>
                </span>
                <span>
                    Votre Email est: <?= $email ?>
                </span>
                <div>
                    <button id="returnHome" onclick="returnHome()">Retour Formulaire</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php 
    require './include/config.inc.php';

    $timer = 10;
    $message_type = "danger";
    $message_title = "Erreur :(";
    $message_text = "Une erreur est survenue !";
    $message_subtext = "Redirection vers la page d'accueil dans 10 secondes.";

    function chaine_aleatoire($nb_car, $chaine = 'azertyuiopqsdfghjklmwxcvbn123456789')
    {
        $nb_lettres = strlen($chaine) - 1;
        $generation = '';
        for($i=0; $i < $nb_car; $i++)
        {
            $pos = mt_rand(0, $nb_lettres);
            $car = $chaine[$pos];
            $generation .= $car;
        }
        return $generation;
    }

    if (!isset($pdo))
    {
        try {
            $pdo = new PDO("mysql:host=$db_host;dbname=$db_database;charset=utf8mb4;", $db_username, $db_password);
        } catch (PDOException $e) {
            echo "Une erreur est survenue ! <br>Message : ". $e->getMessage()."<br>Code erreur N°".$e->getCode();
            die();
        }
    }

    if (isset($_POST["add_user"]))
    {
        
        $nom = $_POST["s_lastname"];
        $prenom = $_POST["s_name"];

        $username = strtolower($nom.".".$prenom);
        $pass_unhash = chaine_aleatoire(12);
        $password = hash("sha256", $pass_unhash);

        $promo_id = $_POST['s_promo'];

        try 
        {
            $valeurs = [
                'promo'=>$promo_id,
                'username'=>$username,
                'pwd'=>$password,
                'nom'=>$nom,
                'prenom'=>$prenom
            ];

            $requete = 'INSERT INTO utilisateurs (id_promo, username, password, nom, prenom) VALUES (:promo, :username, :pwd, :nom, :prenom)';
            $requete_preparee = $pdo->prepare($requete);
            
            if(!$requete_preparee->execute($valeurs)){
                //print_r($requete_preparee->errorInfo());

                $message_type = "danger";
                $message_title = "Erreur :(";
                $message_text = "Une erreur est survenue lors de l'ajout du simplonien a la base de données ! Code: ". $requete_preparee->getCode().".";
            }
            else
            {
                $timer = 30;
                $message_type = "success";
                $message_title = "Succès :)";
                $message_text = "Le simplonien <strong>".$nom." ".$prenom."</strong> a été ajouté dans la base de données.<br>Nom d'utilisateur: <strong>".$username."</strong> Mot de passe: <strong>".$pass_unhash."</strong>.";
            }
        }
        catch (PDOException $e) {
            $message_type = "danger";
            $message_title = "Erreur :(";
            $message_text = "Une erreur est survenue lors de l'ajout d'un simplonien. Code: ". $e->getCode().".";
        }
        
    }

    if (isset($_POST["add_promo"]))
    {
        $promo_name = $_POST["p_name"];

        try 
        {
            $valeurs = [
                'promo'=>$promo_name
            ];

            $requete = 'INSERT INTO promotion (label) VALUES (:promo)';
            $requete_preparee = $pdo->prepare($requete);
            
            if(!$requete_preparee->execute($valeurs)){
                //print_r($requete_preparee->errorInfo());

                $message_type = "danger";
                $message_title = "Erreur :(";
                $message_text = "Une erreur est survenue lors de l'ajout de la promotion a la base de données ! Code: ". $requete_preparee->getCode().".";
            }
            else
            {
                $timer = 10;
                $message_type = "success";
                $message_title = "Succès :)";
                $message_text = "La promotion <strong>\"".$promo_name."\"</strong> a été ajouté dans la base de données.";
            }
        }
        catch (PDOException $e) {
            $message_type = "danger";
            $message_title = "Erreur :(";
            $message_text = "Une erreur est survenue lors de l'ajout d'une promotion. Code: ". $e->getCode().".";
        }
    }

    $message_subtext = "Redirection vers la page d'accueil dans ".$timer." secondes.";
    header( "Refresh:".$timer."; url='./index.php'", true, 303);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simplon Charleville</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
</head>

<body>
    <div class="row">
        <div class="container col-md-5">
            <div class="my-3 p-3 bg-white rounded shadow">
                <div class="alert alert-<?php echo $message_type ?>" role="alert">
                    <h4 class="alert-heading"><?php echo $message_title ?></h4>
                    <p><?php echo $message_text ?></p>
                    <hr>
                    <p class="mb-0"><?php echo $message_subtext ?></p>
                </div>
            </div>
        </div>
    </div>

    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
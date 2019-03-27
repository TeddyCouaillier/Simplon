<?php 
  require './include/func.inc.php';

  if (!isset($pdo))
  {
      try {
          $pdo = new PDO("mysql:host=$db_host;dbname=$db_database;charset=utf8mb4;", $db_username, $db_password);
      } catch (PDOException $e) {
          echo "Une erreur est survenue ! <br>Message : ". $e->getMessage()."<br>Code erreur N°".$e->getCode();
          die();
      }
  }
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
  <link rel="stylesheet" type="text/css" media="screen" href="css/animate.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/header.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/footer.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/portfolio.css">
</head>

<body>
  <?php include('include/header.inc.php'); ?>


  <div class="col-md-12 tab-content promo">
    <div class="row justify-content-center">
      <ul class="nav nav-tabs promo_nav">

        <?php
          $first = true;
          $promos_list = json_decode($promos);

          for ($i = 1; $i < sizeof($promos_list); $i++)
          {
            $class = "active";
            if (!$first)
            {
              $class ="";
            }

            echo '
              <li class="nav-item">
                <a class="nav-link '. $class .'" data-toggle="tab" href="#link_promo'. $promos_list[$i]->id .'">'. $promos_list[$i]->label .'</a>
              </li>
            ';
            
            $first = false;
          }
        ?>
      </ul>
    </div>
    <?php 
          $first = true;
          $user_list = json_decode($users);
          for($i = 1; $i < sizeof($promos_list);$i++){
            $class = "active";
            if (!$first)
            {
              $class ="";
            }
            echo '<div id="link_promo'.$promos_list[$i]->id.'" class="tab-pane '.$class.' mt-4 fadeIn">';
              echo '<div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-1"></div>
                      <div class="col-lg-6 col-md-6 col-sm-10 d-flex justify-content-center">
                        <span class="hr font-weight-bold">FORMATEUR</span>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-1"></div>
                    </div>';
              echo '<div class="row justify-content-center">';
              for($j = 1; $j < sizeof($user_list); $j++){
              if($user_list[$j]->id_type == '1' && $user_list[$j]->id_promo == $promos_list[$i]->id){
                echo '<div class="card text-center card_portfolio">';
                if($user_list[$j]->avatar == NULL)
                  echo '<img src="img/img_formateur.jpg" class="card-img-top rounded-circle mx-auto image_portfolio" alt="Photo de profil">';
                else
                  echo '<img src="'.$user_list[$j]->avatar.'" class="card-img-top rounded-circle mx-auto image_portfolio" alt="Photo de profil">';            
                echo '<div class="card-body">
                <h5 class="card-title font-weight-bold">'.$user_list[$j]->prenom.' '.$user_list[$j]->nom.'</h5>
                <p class="p_portfolio">';
                $tags = json_decode($user_list[$j]->tags,true);
                if(sizeof($tags)>0){

                  for($k = 0; $k < sizeof($tags);$k++){
                    echo '<span class="badge badge-pill badge-secondary">'.$tags[$k]["label"].'</span>';
                  }    
                }
                else
                  echo '<span class="badge badge-pill badge-secondary">Aucun tag</span>';
                echo '<br><br></p>
                <button type="button" class="btn btn-danger btn-lg btn-block profil_portfolio" data-toggle="modal"
                  data-target="#profil_'.$user_list[$j]->id.'">PROFIL</button>
                </div>
              </div>';
              }
            }  
            echo '</div>';
            echo '<div class="row">
            <div class="col-lg-3 col-md-3 col-sm-1"></div>
            <div class="col-lg-6 col-md-6 col-sm-10 d-flex justify-content-center">
              <span class="hr font-weight-bold">SIMPLONIEN</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-1"></div>
          </div>';
           echo '<div class="row justify-content-center">';
            for($j = 1; $j < sizeof($user_list); $j++){
              if($user_list[$j]->id_type == '2' && $user_list[$j]->id_promo == $promos_list[$i]->id){
                echo '<div class="card text-center card_portfolio">';
                if($user_list[$j]->avatar == NULL)
                  echo '<img src="img/img_formateur.jpg" class="card-img-top rounded-circle mx-auto image_portfolio" alt="Photo de profil">';
                else
                  echo '<img src="'.$user_list[$j]->avatar.'" class="card-img-top rounded-circle mx-auto image_portfolio" alt="Photo de profil">';           
                echo '<div class="card-body">
                <h5 class="card-title font-weight-bold">'.$user_list[$j]->prenom.' '.$user_list[$j]->nom.'</h5>
                <p class="p_portfolio">';
                $tags = json_decode($user_list[$j]->tags,true);
                if(sizeof($tags)>0){

                  for($k = 0; $k < sizeof($tags);$k++){
                    echo '<span class="badge badge-pill badge-secondary">'.$tags[$k]["label"].'</span>';
                  }    
                }
                else
                  echo '<span class="badge badge-pill badge-secondary">Aucun tag</span>';
                echo '</p>
                <button type="button" class="btn btn-danger btn-lg btn-block profil_portfolio" data-toggle="modal"
                  data-target="#profil_'.$user_list[$j]->id.'">PROFIL</button>
                </div>
              </div>';
              }
            }
            echo '</div>';
            $first = false;
            echo '</div>'; 
          }
          echo '</div>';
  ?>
    <?php
     
  for($i = 1; $i <sizeof($user_list); $i++){
    echo '<div class="modal fade more" id="profil_'.$user_list[$i]->id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content text-center">
          <div class="modal-header">'; 
          if($user_list[$i]->avatar == NULL)
            echo '<img src="img/img_formateur.jpg" class="card-img-top rounded-circle mx-auto image_portfolio" alt="Photo de profil">';
          else
            echo '<img src="'.$user_list[$i]->avatar.'" class="card-img-top rounded-circle mx-auto image_portfolio" alt="Photo de profil">';
          echo '</div>
            <div class="modal-body col-10 offset-1">
              <h5 class="card-title font-weight-bold">'.$user_list[$i]->prenom.' '.$user_list[$i]->nom.'</h5>
            <div class="mb-2">';

            $tags = json_decode($user_list[$i]->tags,true);
            if(sizeof($tags)>0){
              for($k = 0; $k < sizeof($tags);$k++){
              
                  echo '<span class="badge badge-pill badge-secondary">'.$tags[$k]["label"].'</span>';
              }
            }
            else{
              echo '<span class="badge badge-pill badge-secondary">Aucun tag</span>';
            }
          echo '</div>
            <p class="p_profil">'.
          $user_list[$i]->mail.'<br>';
          if($user_list[$i]->description == NULL)
            echo '<i>Pas de description</i>';
          else  
            echo '<i>'.$user_list[$i]->description.'</i>';
          echo'</p>';
          if(strlen($user_list[$i]->cv_link)>0){
            echo '<a href="'.$user_list[$i]->cv_link.'"target="_blank"><button type="button" class="btn btn-danger link_profil mb-2">Site
              internet</button></a>';
          }
          else{
            echo '<a class="data-toggle="tooltip" data-placement="right" title="Pas de site"><button type="button" class="btn btn-danger link_profil mb-2" disabled
            >Site internet</button></a>';
          }
          echo '<div class="form-group">
            <button type="button" id="button_contact" class="btn btn-block btn-danger mx-auto" data-toggle="modal"
            data-target="#contact">PRENDRE CONTACT</button>
          </div>
        </div>
      </div>
    </div>
  </div>';
}
?>


    <div class="modal fade " id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content text-center">
          <div class="modal-header">
            <img src="img/scm_logo_md.png" class="mx-auto modal_logo">
          </div>
         <div class="modal-body col-10 offset-1">
            <form action="form.php" method="post">
              <div class="form-group">
                <input type="text" class="form-control mx-auto input_form" id="contact_username"
                  placeholder="Nom Prenom">
              </div>
              <div class="form-group">
                <input type="mail" class="form-control mx-auto input_form" id="contact_username"
                  placeholder="Adresse mail">
              </div>
              <div class="form-group">
                <input type="text" class="form-control mx-auto input_form" id="contact_username" placeholder="Sujet">
              </div>
              <div class="form-group">
                <textarea class="form-control mx-auto input_form" id="contact_username"
                  placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-block btn-danger mx-auto">CONTACTER</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php include('include/footer.inc.php'); ?>

    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script src="js/script.js"></script>
    <script>
      $("#button_contact").click(function () {
        $(".more").modal('toggle');
        $('.modal-backdrop').remove();
        $("#profil_contact").modal();
      });
    </script>
</body>

</html>
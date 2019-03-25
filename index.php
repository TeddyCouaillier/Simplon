<?php 
    require './include/func.inc.php';
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
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/preloader.css">
</head>

<body>
    <?php include('include/preloader.inc.php'); ?>
    <?php include('include/header.inc.php'); ?>

    <div class="my-5 text-center status">
        <div class="container text-center my-4 py-3">
            <h4>SESSION DE FORMATION </h4>
            <p class="text-muted italic">11 mars 2019 au 12 octobre 2019</p><br>
            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="bottom"
                title="Indisponible">
                <button type="button" style="pointer-events: none;" class="btn btn-danger" disabled>EN COURS</button>
            </span>
        </div>
    </div>

    <div class="row mx-auto">
        <div class="col-md-6" style="border-right: 1px solid #CCC;">
            <blockquote class="twitter-tweet tw-align-center" data-lang="fr">
                <p lang="fr" dir="ltr">Chez <a href="https://t.co/HjPoF23TjU">https://t.co/HjPoF23TjU</a> Charleville on
                    considère que le respect des droits des femmes c&#39;est d&#39;abord de leur proposer les formations
                    dans lesquelles elles peuvent s&#39;épanouir tant pro. que perso... c&#39;est ainsi un gage
                    d’émancipation et d&#39;autonomie. <a
                        href="https://twitter.com/hashtag/journ%C3%A9edesdroitdesfemmes?src=hash&amp;ref_src=twsrc%5Etfw">#journéedesdroitdesfemmes</a>
                    <a href="https://t.co/sH9ag03Gf1">pic.twitter.com/sH9ag03Gf1</a></p>&mdash; Simplon Charleville
                (@Simplon08) <a href="https://twitter.com/Simplon08/status/1103926063380353024?ref_src=twsrc%5Etfw">8
                    mars 2019</a>
            </blockquote>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
            <img src="./img/main_img1.jpg" class="index_img mx-auto my-auto"><br>
            <img src="./img/main_img2.jpg" class="index_img mx-auto my-auto"><br>
        </div>
    </div>

    <div class="my-5 text-center status">
        <div class="container text-center my-4 py-3">
            <h4> <i class="fab fa-facebook logo_main"></i> <i class="fab fa-twitter logo_main"></i> <i
                    class="fab fa-instagram logo_main"></i>
                <i class="fab fa-github logo_main"></i> </h4>
            <p class="text-muted italic"> 18A AVENUE GEORGES CORNEAU <br> CHARLEVILLE-MEZIERES</p>
            <button type="button" class="btn btn-danger mt-2" data-toggle="modal" data-target="#contactUs">NOUS
                CONTACTER</button>
        </div>
    </div>

    <div class="slider mt-2" style="width:80%;">
        <div class="slide-track">
            <div class="slide">
                <img src="./img/partners/p_cci.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="./img/partners/p_cci.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="./img/partners/p_cci.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="./img/partners/p_cci.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="./img/partners/p_cci.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="./img/partners/p_cci.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="./img/partners/p_cci.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="./img/partners/p_cci.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="./img/partners/p_cci.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="./img/partners/p_cci.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="./img/partners/p_cci.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="./img/partners/p_cci.png" height="100" width="250" alt="" />
            </div>

        </div>
    </div>

    <div class="modal fade" id="contactUs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <img src="img/scm_logo_md.png" class="mx-auto modal_logo">
                </div>
                <div class="modal-body col-10 offset-1">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control mx-auto input_form" id="contact_username"
                                placeholder="Nom Prenom">
                        </div>
                        <div class="form-group">
                            <input type="mail" class="form-control mx-auto input_form" id="contact_username"
                                placeholder="Adresse mail">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control mx-auto input_form" id="contact_username"
                                placeholder="Sujet">
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
</body>

</html>
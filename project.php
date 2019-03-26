<?php 

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css"
        integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/animate.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/header.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/footer.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/project.css">
</head>

<body>
    <?php include('include/header.inc.php'); ?>

    <div class="row my-5 mx-auto" id="project">
        <div class="col-lg-2 col-md-1 col-sm-0 col-xs-0"></div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-1 py-2 project_content">
            <ul class="list-group">
                <li class="list-group-item project_list"><a class="showSingle" target="div1"><i
                            class="fab fa-html5 icon_list"></i>HTML5<a></li>
                <li class="list-group-item project_list"><a class="showSingle" target="div2"><i
                            class="fab fa-css3-alt icon_list"></i>CSS3</a></li>
                <li class="list-group-item project_list"><a class="showSingle" target="div3"><i
                            class="fab fa-bootstrap icon_list"></i>BOOTSTRAP</a></li>
                <li class="list-group-item project_list"><a class="showSingle" target="div4"><i
                            class="fab fa-product-hunt icon_list"></i>PHP</a></li>
                <li class="list-group-item project_list"><a class="showSingle" target="div5"><i
                            class="fas fa-database icon_list"></i>SQL</a></li>
            </ul>


        </div>
        <div class="col-lg-6 col-md-7 col-sm-9 col-xs-11 text-center  project_content">
            <div id="div_show" class="align-middle">
                <p>
                    <img src="img/scm_logo_sm.png" id="logo_rotate"><br>
                    <h2 class="font-weight-bold">CHOISI UN LANGAGE</h2>
                </p>

            </div>
            <div id="div1" class="targetDiv animated fadeInDown">
                <p>
                    <i class="fab fa-html5 icon_div py-5"></i>
                    <h2>HTML5</h2>
                    <br>
                </p>
                <ul class="list-group">
                    <li class="list-group-item">Projet 1</li>
                    <li class="list-group-item">Projet 2</li>
                    <li class="list-group-item">Projet 3</li>
                    <li class="list-group-item">Projet 4</li>
                    <li class="list-group-item">Projet 5</li>
                </ul>
            </div>
            <div id="div2" class="targetDiv animated fadeInDown">
                <p>
                    <i class="fab fa-css3-alt icon_div py-5"></i>
                    <h2>CSS3</h2>
                    <br>
                </p>
                <ul class="list-group">
                    <li class="list-group-item">Projet 1</li>
                    <li class="list-group-item">Projet 2</li>
                </ul>
            </div>
            <div id="div3" class="targetDiv animated fadeInDown">
                <p>
                    <i class="fab fa-bootstrap icon_div py-5"></i>
                    <h2>BOOTSTRAP</h2>
                    <br>
                </p>
                <ul class="list-group">
                    <li class="list-group-item">Projet 1</li>
                    <li class="list-group-item">Projet 2</li>
                    <li class="list-group-item">Projet 3</li>
                    <li class="list-group-item">Projet 4</li>
                </ul>
            </div>
            <div id="div4" class="targetDiv animated fadeInDown">
                <p>
                    <i class="fab fa-product-hunt icon_div py-5"></i>
                    <h2>PHP</h2>
                    <br>
                </p>
                <ul class="list-group">
                    <li class="list-group-item">Projet 1</li>
                </ul>
            </div>
            <div id="div5" class="targetDiv animated fadeInDown">
                <p>
                    <i class="fas fa-database icon_div py-5"></i>
                    <h2>SQL</h2>
                    <br>
                </p>
                <ul class="list-group">
                </ul>
            </div>

        </div>
        <div class="col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
    </div>




    <?php include('include/footer.inc.php'); ?>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        $('.showSingle').click(function () {
            $('#div_show').hide();
            //$('.targetDiv').slideUp();
            $('.targetDiv').hide();
            $(`#${$(this).attr('target')}`).show();

            $(this).parent().siblings().css('border-right', '0px solid black');
            $(this).parent().css('border-right', '3px solid #D64541');
        });
    </script>

</body>

</html>
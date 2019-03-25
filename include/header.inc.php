<?php 
    echo $_SERVER['SCRIPT_NAME'];
    //<strong>SIMPL<span class="text-danger">O</span>N</strong>
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mx-auto">
    <a class="navbar-brand" href="./index.php"><img class="logo" src="./img/scm_logo_md.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-x"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-collapse-x">
        <ul class="navbar-nav ml-auto mr-2">
            <li class="nav-item">
                <a class="nav-link" href="./index.php"><i class="fas fa-home text-danger"></i> &nbsp;ACCUEIL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./portfolio.php"><i class="fas fa-portrait text-danger"></i>
                    &nbsp;PORTFOLIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./project.php"><i class="fas fa-clipboard-list text-danger"></i>
                    &nbsp;PROJETS</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <button type="button" class="button_nav" data-toggle="modal" data-target="#connexion">
                    <a class="nav-link login" data-toggle="tooltip" data-placement="bottom" title="Connexion"><i
                            class="fas fa-user"></i></a>
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="button_nav" data-toggle="modal" data-target="#add_content">
                    <a class="nav-link admin" data-toggle="tooltip" data-placement="bottom" title="Administration"><i
                            class="fas fa-server"></i></a>
                </button>
            </li>
        </ul>
    </div>
    <div class="progress fixed-top" style="height: 3px;">
        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="0" aria-valuemin="0"
            aria-valuemax="100"></div>
    </div>
</nav>

<?php include('include/connexion.inc.php'); ?>
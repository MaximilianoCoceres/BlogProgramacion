<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/bootstrap.min.css">

    <!-- css -->
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/style.css" />

    <title>Hello, world!</title>
</head>

<body>
    

    <!-- navbar -->
    <div class="container-fluid bg-dark">
        <nav class="navbar navbar-expand-lg container navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="./images/Bootstrap_logo.svg" width="30" height="30" class="d-inline-block align-top" alt="" />
                Titulo Logo
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <?php wp_nav_menu(array(
                'theme_location'=> 'superior',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'=> 'navbarSupportedContent',
                'items_wrap'=>'<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
                'menu_class'=>'nav-item'
                )) ?>
        </nav>
    </div>
    <!-- fin navbar -->

    <!-- temario -->

    <div class="container-fluid temario d-flex flex-column justify-content-center align-items-center">
        <div class="text-center">
            <h1 class="display-4 text-white">Titulo principal</h1>
        </div>
        <form action="" class="form-inline flex-column flex-sm-row">
            <div class="form-group">
                <input type="text" placeholder="Lorem" class="text-center" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary ml-2" value="Buscar" />
            </div>
        </form>
    </div>

    <!--  fin temario -->
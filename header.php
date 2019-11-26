<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nineteen Sixtyfour Theme</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">

    <?php wp_head(); ?>

</head>

<body>

    <header>
        BRYT HÄR
        <div class="container-fluid">
            <div class="row justify-content-between bg-info">
                <div class="col-6">
                    <a class="text-white display-3" href="/">Ziqzaq Code</a>
                </div>
                <div class="col-6 text-right">
                    <div class="container clearfix mt-2">
                        <?php get_search_form() ?>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-end bg-secondary">
                <div class="mr-4">
                    <!-- https://github.com/wp-bootstrap/wp-bootstrap-navwalker -->
                    <nav class="navbar navbar-expand-sm navbar-dark" role="navigation">
                        <div class="container">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand" href="#">Navbar</a>
                            <?php wp_nav_menu(
                                array(
                                    'theme_location'  => 'primary',
                                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                    'container'       => 'div',
                                    'container_class' => 'collapse navbar-collapse text-white',
                                    'container_id'    => 'bs-example-navbar-collapse-1',
                                    'menu_class'      => 'navbar-nav mr-auto',
                                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'          => new WP_Bootstrap_Navwalker(),
                                )
                            );
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- <main class="flex-1 mx-4 md:mx-8 lg:mx-12 mt-4"> -->
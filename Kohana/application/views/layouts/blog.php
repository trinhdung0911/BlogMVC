<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Blog | <?= isset($title) ? $title : 'Kohana3' ?></title>

        <!-- Bootstrap core CSS -->
        <?= HTML::style('assets/css/bootstrap.css') ?>
        <style>
            body {
                padding-top: 50px;
            }
            .sidebar{
                margin-top: 50px;
            }
        </style>
    </head>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?= HTML::anchor('/', 'Blog', array('class' => 'navbar-brand')); ?>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <?php 
                            if(Request::current()->controller() == 'Admin'){
                                echo '<li>' . HTML::anchor('/','< Back to front') . '</li>';
                                if(Request::current()->action() != 'get_login')echo '<li>' . HTML::anchor('/logout' , 'Logout') . '</li>';
                            } else {
                                echo '<li>' . HTML::anchor('/admin', 'Admin') . '</li>';
                            }
                        ?>
                    </ul>
                </div>
            </div><!-- /.container -->
        </div>

        <div class="container">
            <div class="row">
				<?= $content ?>
            </div>
        </div><!-- /.container -->

    <!-- Le bootstrap en js à la fin pour ne pas surcharger -->
    <?= HTML::script('assets/js/jquery.min.js') ?>
    <?= HTML::script('assets/js/bootstrap.min.js') ?>
    </body>
</html>

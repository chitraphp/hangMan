<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Word.php";

    session_start();
    if(empty($_SESSION['word_list'])) {
        $_SESSION['word_list'] = array();
        $word1 = "banana";
        $word2 = "elephant";
        array_push($_SESSION['word_list'], $word1, $word2);
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {

        return $app['twig']->render('hangman_template.php');

    });

    // $app->post("/create_cd", function() use ($app) {
    //
    //     $cd = new Cd($_POST['title'], $_POST['artist'], $_POST['cover_art'], $_POST['price']);
    //     $cd->save();
    //
    //     return $app['twig']->render('create_cd.php', array('newcd' => $cd));
    //
    // });
    //
    // $app->post("/delete_all", function() use ($app) {
    //
    //     Cd::deleteAll();
    //     return $app['twig']->render('delete_all.php');
    //
    // });


    return $app;
?>

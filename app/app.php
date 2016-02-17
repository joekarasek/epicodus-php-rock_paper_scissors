<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Game.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            'form' => true
        ));
    });

    $app->get("/game", function() use ($app) {
        $my_game = new Game;
        $winner = $my_game->threeTwoOne($_GET['player-one']);
        if ($winner == 'player 1') {
            $message_type = 'success';
            $message_text = 'You have triumphed over computer!';
        } elseif ($winner == 'player 2') {
            $message_type = 'danger';
            $message_text = 'You have been destroyed computer!';
        } else {
            $message_type = 'warning';
            $message_text = 'Draw... the war continues.';
        }

        return $app['twig']->render('index.html.twig', array(
            'form' => true,
            'message' => array(
                'type' => $message_type,
                'text' => $message_text
            )
        ));
    });

    return $app;
?>

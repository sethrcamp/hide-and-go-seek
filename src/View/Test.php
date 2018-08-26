<?php


$app->group('/test', function() use ($app) {

    $app->post('', function ($request, $response, $args) {
        die("success");
    });


});

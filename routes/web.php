<?php

use Symfony\Component\HttpFoundation\{Request, Response};
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;

$app->get('/{width}/{height}', function(Request $request, Silex\Application $app, $width, $height) {
    $image = $app['db']->fetchAssoc("SELECT filename FROM images ORDER BY rand() LIMIT 1");

    $placeholder = $app['image']
        ->make(__DIR__ . '/../public/img/' . $image['filename'])
        ->fit($width, $height)
        ->greyscale()
        ->response('png');

    return new Response($placeholder, 200, [
        'Content-Type' => 'png'
    ]);
})->assert('width', '[0-9]+')->assert('height', '[0-9]+');

<?php

use Symfony\Component\HttpFoundation\{Request, Response};
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;

$app->get('/', function(Request $request, Silex\Application $app) {
    return new Response("Home", 200);
});

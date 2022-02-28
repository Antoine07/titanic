<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

$request = Request::createFromGlobals();


$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader);

if ($request->getRequestUri()  === '/' && $request->getMethod() === 'POST') {

    $response = new RedirectResponse('/');

    $response->send();
}

if ($request->getRequestUri()  === '/' && $request->getMethod() === 'GET') {

    $response = new Response();
    $response->setContent($twig->render('search.html.twig', ['data' => $request->getRequestUri()]));
    $response->headers->set('Content-Type', 'text/html');

    $response->send();
}

if ($request->getRequestUri() === '/statistic') {

    $response = new Response();
    $response->setContent($twig->render('search.html.twig', ['data' => "statistic"]));
    $response->headers->set('Content-Type', 'text/html');

    $response->send();
}

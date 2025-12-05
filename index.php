<?php
require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
$client = new Client();

echo "Hello from PHP Simple Test!";

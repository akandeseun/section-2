<?php

require "functions.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// dieAndDump($_SERVER);

// if ($uri === '/') {
//   require "controllers/index.php";
// } elseif ($uri === '/about') {
//   require "controllers/about.php";
// } elseif ($uri === '/contact') {
//   require "controllers/contact.php";
// }

// refactoring it 

$routes = [
  "/" => "controllers/index.php",
  "/about" => "controllers/about.php",
  "/contact" => "controllers/contact.php",
];

foreach ($routes as $route => $value) {
  # code...
  if ($uri === $route) {
    require $value;
  }

  // echo "we couldn't find what you needed";
}

// another method 

// if (array_key_exists($uri, $routes)) {
//   require $routes[$uri];
// }

<?php

// require "router.php";

require "functions.php";


// brief review on classes

// class Person
// {
//   public $name;
//   public $age;

//   public function breathe()
//   {
//     echo $this->name . " is breathing";
//   }
// }

// $person = new Person();

// $person->name = 'Seun Akande';
// $person->age = 30;

// dieAndDump($person->breathe());

// ----------------
// connect to our MySQL database.

// Step 1 - initialize PDO (create a new instance of the PDO class)

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4;user=root;password=akandeseun44;";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// dieAndDump($posts);

foreach ($posts as $post) {
  echo "<li>" . $post['title'] . "</li>";
}

<?php

// require "router.php";

require "functions.php";
require "Database.php";


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



// dieAndDump($posts);



// connect to the database, and execute a query



$db = new Database();

$posts = $db->query("select * from posts where id = 2")->fetch(PDO::FETCH_ASSOC);

dieAndDump($posts);

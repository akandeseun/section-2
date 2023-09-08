 <?php
  $books = [
    [
      "title" => "Half of a Yellow Sun",
      "author" => "Chimamanda Adichie",
      "releaseYear" => 2006,
      "bookUrl" => "http://example.com"
    ],
    [
      "title" => "Things Fall Apart",
      "author" => "Chinua Achebe",
      "releaseYear" => 1958,
      "bookUrl" => "http://example.com"
    ],
    [
      "title" => "The Interpreters",
      "author" => "Wole Soyinka",
      "releaseYear" => 1965,
      "bookUrl" => "http://example.com"
    ],
    [
      "title" => "Purple Hibiscus",
      "author" => "Chimamanda Adichie",
      "releaseYear" => 2003,
      "bookUrl" => "http://example.com"
    ],
    [
      "title" => "Arrow of God",
      "author" => "Chinua Achebe",
      "releaseYear" => 1964,
      "bookUrl" => "http://example.com"
    ],

  ];

  // Using an Anonymous Function / Lambda function
  $filterByAuthor = function ($books, $author) {
    $filteredBooks = [];
    foreach ($books as $book) {
      if ($book['author'] === $author) {
        $filteredBooks[] = $book;
      }
    }
    return $filteredBooks;
  };

  // $filteredBooks = $filterByAuthor($books, "Wole Soyinka");

  // making it more dynamic

  function filter($items, $key, $value)
  {
    $filteredItems = [];
    foreach ($items as $item) {
      if ($item[$key] === $value) {
        $filteredItems[] = $item;
      }
    }
    return $filteredItems;
  }

  $filteredBooks = filter($books, "title", "Purple Hibiscus");

  // refactoring it again to use anonymous functions / callback functions
  function filterTwo($items, $fn)
  {
    $filteredItems = [];
    foreach ($items as $item) {
      if ($fn($item)) {
        $filteredItems[] = $item;
      }
    }
    return $filteredItems;
  }

  $filteredStuff = filterTwo($books, function ($book) {
    return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= "2003";
  });

  // using php's out of the box array filtering function
  $filteredArray = array_filter($books, function ($book) {
    return $book['author'] === "Wole Soyinka";
  });

  require "views/index.view.php";

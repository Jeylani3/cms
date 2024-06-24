<?php

$books = [
    [
        "name" => "To Kill a Mockingbird",
        "author" => "Harper Lee",
        "purchase_url" => "https://www.example.com/to-kill-a-mockingbird",
        "release_year" => 1960
    ],
    [
        "name" => "1984",
        "author" => "George Orwell",
        "purchase_url" => "https://www.example.com/1984",
        "release_year" => 1949
    ],
    [
        "name" => "The Great Gatsby",
        "author" => "F. Scott Fitzgerald",
        "purchase_url" => "https://www.example.com/the-great-gatsby",
        "release_year" => 1925
    ],
    [
        "name" => "The Catcher in the Rye",
        "author" => "F. Scott Fitzgerald",
        "purchase_url" => "https://www.example.com/the-catcher-in-the-rye",
        "release_year" => 1951
    ]
];

function filter ($items, $fn) {
   
    $filteredItems = [];
    

    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;     
        }       
    }
    return $filteredItems;
};

// $fileteredBooks = filter($books, 'release_year' , 1960);
    // $fileteredBooks = filter($books, function($book){
    //     return $book['release_year'] <= 2000;
    // });
    $fileteredBooks = array_filter($books, function($book){
        return $book['release_year'] <= 2000;
    });

require 'test.view.php';
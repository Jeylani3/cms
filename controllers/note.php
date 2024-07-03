<?php

$config = require ('config.php');
$db = new Database($config['database']);

$heading = 'Note ';


$id = $_GET['id'];

$note = $db->query('SELECT
  notes.id,
  notes.title,
  notes.body,
  users.name,
  users.email,
  notes.user_id
FROM
  notes
INNER JOIN
  users ON notes.user_id = users.id
  WHERE
  notes.id = :id', [':id' => $id]
)->fetch();

//------------------------------------------------
$columns = [
    'id' => 'ID',
    'body' => 'Body',
    'name' => 'Name',
    'email' => 'Email',
    'user_id' => 'User ID'
];

//_______________________________________________________________
require 'views/note.view.php';
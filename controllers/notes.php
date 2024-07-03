<?php

$config = require ('config.php');
$db = new Database($config['database']);

$heading = 'My Notes';

$notes = $db->query('SELECT
  notes.id,
  notes.body,
  users.name,
  users.email,
  notes.user_id
FROM
  notes
INNER JOIN
  users ON notes.user_id = users.id')->fetchAll();

//------------------------------------------------
$columns = [
    'id' => 'ID',
    'body' => 'Body',
    'name' => 'Name',
    'email' => 'Email',
    'user_id' => 'User ID'
];

//_______________________________________________________________
require 'views/notes.view.php';
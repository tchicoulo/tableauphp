<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="./index.css" rel="stylesheet" type="text/css" />
  </head>
  <body>

    <?php

    $livre1 = array(
      'title' => 'Titre1',
      'prix' => 2,
      'note' => 4,
      'prime' => true,
    );

    $livre2 = array(
      'title' => 'Titre2',
      'prix' => 5,
      'note' => 6,
      'prime' => false,
    );

    $livre3 = array(
      'title' => 'Titre3',
      'prix' => 7,
      'note' => 5,
      'prime' => true,
    );

    $livre4 = array(
      'title' => 'Titre4',
      'prix' => 1,
      'note' => 2,
      'prime' => false,
    );

    $livre5 = array(
      'title' => 'Titre5',
      'prix' => 1,
      'note' => 9,
      'prime' => false,
    );

    $livre6 = array(
      'title' => 'Titre6',
      'prix' => 1,
      'note' => 2,
      'prime' => false,
    );

    $livre7 = array(
      'title' => 'Titre7',
      'prix' => 1,
      'note' => 3,
      'prime' => true,
    );

    $livre8 = array(
      'title' => 'Titre8',
      'prix' => 7,
      'note' => 2,
      'prime' => false,
    );

    $livre9 = array(
      'title' => 'Titre9',
      'prix' => 1,
      'note' => 1,
      'prime' => true,
    );

    $livre10 = array(
      'title' => 'Titre10',
      'prix' => 10,
      'note' => 4,
      'prime' => false,
    );

    $livres = array($livre1, $livre2, $livre3, $livre4, $livre5, $livre6, $livre7, $livre8, $livre9, $livre10);

foreach ($livres as $book) {
  if ($book['prime']== true) {
    echo '<ul> <li>'.$book['title'].'</li> <li>'.$book['prix'].'€</li> <li>'.$book['note'].'</li> <li>Amazon Prime </li> </ul>';
  }
  else {
    echo '<ul> <li>'.$book['title'].'</li> <li>'.$book['prix'].'€</li> <li>'.$book['note'].'</li> <li>Non Prime </li> </ul>';
}
}

     ?>


  </body>
</html>

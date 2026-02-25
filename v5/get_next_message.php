<?php

$messages = [
  [
    "id"=>0,
    "msg" => "Pack your bags team, we're heading into uncharted territory to find the lost treasure cave!",
    "avatar" => "person-3.png",
    "name" => "John",
    "is_me" => 1
  ],
  [
    "id"=>1,
    "msg" => "The entrance is narrow and dark, but I can feel the adventure ahead.",
    "avatar" => "person-1.png",
    "name" => "Sally",
    "is_me" => 0
  ],
  [
    "id"=>2,
    "msg" => "Woah, look at those sparkling gemstones (💎) embedded in the walls down here!",
    "avatar" => "person-3.png",
    "name" => "John",
    "is_me" => 1
],
  [
    "id"=>3,
    "msg" => "We're really deep underground now, keep your eyes peeled for traps.",
    "avatar" => "person-3.png",
    "name" => "John",
    "is_me" => 1
  ], 
  [
    "id"=>4,
    "msg" => "Jackpot! There's piles of <b>gold</b>, <b>jewels</b>, and <b>ancient artifacts</b> in this hidden chamber!",
    "avatar" => "person-1.png",
    "name" => "Sally",
    "is_me" => 0
  ],
  [
    "id"=>5,
    "msg" => "Let's grab some souvenirs but leave the site undisturbed for future explorers.",
    "avatar" => "person-2.png",
    "name" => "Geoff",
    "is_me" => 0
  ],
];

$msg = $messages[0];

if (isset($_GET["id"])) {
  $msg = $messages[$_GET["id"]];
}

echo json_encode($msg);


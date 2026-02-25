<?php

$messages = [
  ["id"=>0, "msg" => "Pack your bags team, we're heading into uncharted territory to find the lost treasure cave!"],
  ["id"=>1, "msg" => "The entrance is narrow and dark, but I can feel the adventure ahead."],
  ["id"=>2, "msg" => "Woah, look at those sparkling gemstones (💎) embedded in the walls down here!"],
  ["id"=>3, "msg" => "We're really deep underground now, keep your eyes peeled for traps."], 
  ["id"=>4, "msg" => "Jackpot! There's piles of <b>gold</b>, <b>jewels</b>, and <b>ancient artifacts</b> in this hidden chamber!"],
  ["id"=>5, "msg" => "Let's grab some souvenirs but leave the site undisturbed for future explorers."],
];

$msg = $messages[0];

if (isset($_GET["id"])) {
  $msg = $messages[$_GET["id"]];
}

echo json_encode($msg);


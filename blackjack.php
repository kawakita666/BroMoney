<?

 print "<BR>";
if ($step == "") {
 echo "<A HREF=?step=new>Begin Game</A><BR>";
}

function cardtext($x) {
 if ($x == 1) $x = "A";
 if ($x == 11) $x = "J";
 if ($x == 12) $x = "Q";
 if ($x == 13) $x = "K";
 return $x;
}
$playerinfo[tokens]=1000;
if ($step == "new") {
 if ($playerinfo[tokens] >= 1) {

  mysql_query("INSERT INTO blackjack SET owner=$playerinfo[id]");
  $getgame = mysql_query("SELECT id FROM blackjack WHERE owner=$playerinfo[id] ORDER BY id DESC LIMIT 0,1");
  $game = mysql_fetch_array($getgame);
  $game = $game[id];
  $bjid = rand(1000,9999);
  mysql_query("UPDATE players SET bjid=$bjid, tokens=tokens-1 WHERE email='$email'");
  $you1 = rand(1,13);
  $you2 = rand(1,13);
  $comp1 = rand(1,13);
  $comp2 = rand(1,13);
  mysql_query("UPDATE blackjack SET you1=$you1, you2=$you2, comp1=$comp1, comp2=$comp2 WHERE id=$game");

  $comp1 = cardtext($comp1);
  $youtotal = $you1 + $you2;
  $you1 = cardtext($you1);
  $you2 = cardtext($you2);
  echo "Computer: [$comp1] [?]<BR>";
  echo "You: [$you1] [$you2]<BR><BR>";
 echo "Total: $youtotal<BR><BR>";
  echo "<A HREF=?step=draw&game=$game&bjid=$bjid>Draw</A> | <A HREF=?step=stand&game=$game&bjid=$bjid>Stand</A>";
 }
 else {
  echo "You are out of tokens!";
 }
}

if ($step == "draw") {
 if ($playerinfo[bjid] != $bjid) {
  echo "A gust of wind blew the cards flew all over the floor, and the game was declared void. Your tokan was not returned. Damn the house rules!";
  exit;
 }
 $bjid = rand(1000,9999);
 mysql_query("UPDATE players SET bjid=$bjid WHERE email='$email'");
 $getgame = mysql_query("SELECT * FROM blackjack WHERE owner=$playerinfo[id] ORDER BY id DESC LIMIT 0,1");
 $cards = mysql_fetch_array($getgame);
 $you = rand(1,13);
 mysql_query("UPDATE blackjack SET you$cards[next]=$you, next=next+1 WHERE id=$game");
 $youtotal = $you + $cards[you1] + $cards[you2] + $cards[you3] + $cards[you4];
 $you = cardtext($you);
 echo "Computer: [$cards[comp1]] [?]<BR>";
 if ($cards[next] == 3) {
  echo "You: [$cards[you1]] [$cards[you2]] [$you]<BR><BR>";
 }
 if ($cards[next] == 4) {
  echo "You: [$cards[you1]] [$cards[you2]] [$cards[you3]] [$you]<BR><BR>";
 }
 if ($cards[next] == 5) {
  echo "You: [$cards[you1]] [$cards[you2]] [$cards[you3]] [$cards[you4]] [$you]<BR><BR>";
  echo "Total: $youtotal<BR><BR>";
 if ($youtotal > 21) {
  echo "Bust!";
  exit;
 }
  echo "<A HREF=?step=stand&game=$game>Stand</A>";
 }
 else {
 echo "Total: $youtotal<BR><BR>";
 if ($youtotal > 21) {
  echo "Bust!";
  exit;
 }
  echo "<A HREF=?step=draw&game=$game&bjid=$bjid>Draw</A> | <A HREF=?step=stand&game=$game&bjid=$bjid>Stand</A>";
 }
}

if ($step == "stand") {
 $getgame = mysql_query("SELECT * FROM blackjack WHERE owner=$playerinfo[id] ORDER BY id DESC LIMIT 0,1");
 $cards = mysql_fetch_array($getgame);
 $youtotal = $cards[you1] + $cards[you2] + $cards[you3] + $cards[you4] + $cards[you5];
 if ($youtotal > 21) {
  echo "Bust!";
  exit;
 }
}

?>




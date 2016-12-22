<?php namespace pong; ?>
<html>
<?php include("inc/meta.html"); ?>
<body>

<?php
require_once("../php/GenericController.php");

$ctrl = new GenericController();

// Insert new game.
if(isset($_POST["newgame"]) &&
	isset($_POST["winner"]) &&
	isset($_POST["loser"]))
{
	if(isset($_POST["draw"]) && $_POST["draw"] == "draw"){
		$winner = "draw";
	} else {
		$winner = $_POST["winner"];
	}
	$ctrl->insert_new_game($_POST["winner"],$_POST["loser"],$winner);
}

// New player.
else if(isset($_POST["newplayer"]) && sizeof($_POST["player"]))
{
	$ctrl->insert_new_player($_POST["player"]);
} 
?>


<form action="index.php" method=POST>
	<input type="hidden" name="newgame" value="1"/>
	Winner <input type="text" name="winner"/><br/>
	Loser&nbsp; <input type="text" name="loser"/><br/>
	<input type="checkbox" name="draw" value="draw">Draw game
	<input type="submit" value="Submit"/>
</form>


<form action="index.php" method="POST">
	<input type="hidden" name="newplayer" value="1"/>
	<input type="text" name="player"/><br/>
	<input type="submit" value="Submit"/>
</form>
Statistics:
<?php 
foreach($ctrl->db->get_stats() as $player){
	echo print_r($player,true)."<br/>"; 
}
?>
<br/><br/>
<br/>
OK: <?php echo print_r($ctrl->out["ok"],true); ?><br/>
ERRORS: <?php echo print_r($ctrl->out["error"],true); ?>
</body></html>

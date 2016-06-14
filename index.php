<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exam project</title>
    <script src="js/createjs-2015.11.26.min.js"></script>
    <script src="js/Ajax.js"></script>
    <script src="js/intro.js"></script>
    
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
</head>

<body onload="getStarted()">

        	<form  id="scoreForm" class="hidden" action="saveScore.php" method="post">
        		<div class = "form-group">
        		<label for="exampleInputName">Name</label>
        		<input type="text" class="form-control" name="name" id="name" placeholder="name">
        		</div>

        		<button type="submit" class="btn btn-default">Submit</button>
        	</form>
    <canvas id="flower" width="600" height="400"></canvas>
    <div class="container hidden">
    	<div class="rank">
            <?php
        	include ("table1.php");
        	$stmt=$pdo->query("SELECT * FROM table1 ORDER BY score DESC LIMIT 3");
        	while($rank = $stmt->fetchObject()){
        	?>
        	<div id = "list" class="hidden">
        	<h2><?php echo $rank->name;?></h2>
        	<p><?php echo $rank->score;?></p>
        	</div>
        	<?php }?>


    	</div>

    </div>
</body>
</html>

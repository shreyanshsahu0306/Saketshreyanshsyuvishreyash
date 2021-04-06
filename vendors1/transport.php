<?php
	//	include 'includes/header.php';
	//	include 'includes/left-bar.php';
		include '../config.php';
?>
	<div class="col-md-10" style="background:#D5D8DC;min-height:570px;">
		<br/>
		<?php
			$res=mysqli_query($conn,"select * from product where type=2")or die(mysql_error());
			while($arr=mysqli_fetch_row($res))
			{
				echo "<div class='col-md-3 game'>";
					echo "<div class='game-price'>$$arr[7]</div>";
					echo "<a href='$arr[2]'><img src='$arr[2]'/></a>";
					echo "<div class='game-title'><u>$arr[0]</u> $arr[8]</div>";echo "<br/></div>";
                }
            ?>
    
    	
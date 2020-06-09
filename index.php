<?php
if ($_POST['submit'])
	{
	$x = (int) $_POST['x'];
	$y = (int) $_POST['y'];
	$operation  = $_POST['operation'];
	$rezult;
	if ($operation=='sum')
		$rezult = $x + $y;
	else if ($operation=='diff')
		$rezult = $x - $y;
	else if ($operation=='mult')
		$rezult = $x*$y;
	else if ($operation=='div')
		{
			if ($y==0)
				echo "Вы не можете делить на 0";
			else $rezult = $x/$y;
			
		}
	}
 ?> 
 <form action="" method="POST">    
	<input type="text" name="x" required>    
	<select name="operation" required>        
		<option value="sum">+</option>        
		<option value="diff">-</option>    
		<option value="mult">*</option>  
		<option value="div">:</option>
	</select>    
	<input type="text" name="y" required>    
	<input type="submit" name="submit">
 </form>
<?php

echo $rezult;
?>
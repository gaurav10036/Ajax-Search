<?php include_once('config.php');
$q = $_POST['q'];
?>
<?php if(isset($q)): ?>

	<?php 
	$query = "SELECT title FROM film WHERE title like '%$q%'";
	//print_r($query);
	$run = mysql_query($query) or die(mysql_error());
	?>
	<ul>
		<?php 
		$row=mysql_fetch_array($run);
		if(count($row)>1)
		{
			while($row=mysql_fetch_array($run))
			{
				
					echo '<li>'.$row['title'].'</li>';
		 
			}
		}
		else
		{
			echo 'No Result Found...';
		}
		 ?>
	</ul>
<?php endif; ?>	

<?php
include '_includes/config.php';
include ABSOLUTE_PATH . '/_includes/header.inc.php';
?>

<?php
	$_array = array("name" => "Khuong Khuat",
														"color" => "Orange",
														"movie" => "Cars 1",
														"book" => "Nobody's Boy",
														"website" => "http://youtube.com");
	$_arrayLength = count($_array);
 ?>
<h1><?php echo $_array['name'];?></h1>
<?php
	echo "<ul>";
		foreach($_array as $key => $item) {
			if ($key === 'name') continue;
			echo "<li>" . "My favourite " . $key . " is: " . $item . "</li>";
		}
	echo "</ul>";
?>

<?php
include ABSOLUTE_PATH . '/_includes/footer.inc.php';
?>

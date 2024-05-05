
<?php
       
       include('include/config.php');
       include('header.php');
       
        ?>  

<body>
<?php

	

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'people':
					$query = 'DELETE FROM people
							WHERE
							people_id = ' . $_GET['id'];
						$result = mysqli_query($con, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "test_index.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
</html>
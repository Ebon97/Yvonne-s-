<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,'salon');

	if(isset($_POST['deletedata']))
	{
		$id= $_POST['delete_id'];

		$query = "DELETE FROM customer WHERE id='$id'";
		$query_run = mysqli_query($connection,$query);

		if($query_run)
		{
			echo "<script>alert('Data deleted!''); </script>";
			header('location:testingCustomer.php');
		}
		else
		{
			echo "<script>alert('Data NOT deleted!''); </script>";
		}

	}


?>
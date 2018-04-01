<?php 
include 'header.php';
include 'server.php'; 

if(isset($_POST['submit']) && $_POST['submit']) {
	


}
?>

<div class="container">
	<div class="group">
		<form action="" method="post">
			<div class="form-group">
				<input type="file" name="mp3">			
			</div>

			<div class="form-group">
				<input type="submit" name="submit" value="Submit">		
			</div>
		</form>
	</div>
</div>

<?php include 'footer.php'; ?>
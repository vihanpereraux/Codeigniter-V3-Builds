<!-- Checking whether user is logged or not -->
<?php

	if(!($this->session->userdata('loggedin')))
	{
		redirect('Home/login');
	}

?>

<!-- Including the nav bar and main <head> links -->
<?php include 'partials/header.php' ?>

<!-- Getting username from session data -->
<div class="container mt-3">
	<h2>Good Morning 
		<?php echo $this->session->userdata('fname'). " " .$this->session->userdata('lname')  ?> </h2>
</div>

<!-- User Interface -->
<div class="container">

	<!-- codeigniter - form validation library(helper) -->
	<?php echo validation_errors(); ?>

	<!-- Article upload form -->
	<?php echo form_open('Post/uploadPost'); ?>	
		<div class="mt-5">
			<label for="exampleFormControlInput1" class="form-label">Post Title</label>
			<input type="text" name="post_title" class="form-control" id="exampleFormControlInput1" 
				placeholder="Enter your post title here">
		</div>

		<div class="mt-3">
			<label for="exampleFormControlTextarea1" class="form-label">Post Description</label>
			<textarea class="form-control" name="post_description" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
		
		<button type="submit" class="btn btn-primary mb-5 mt-3">Upload</button>
	<?php echo form_close(); ?>

	<!-- Displaying the content already available in db -->
	<?php 
		foreach($result as $key => $value)
		{
			//Each data diaplay
			//print_r($value);
			?>
				<div class="">
					<div class="card mb-5">
						<!-- <h5 class="card-header">Featured</h5> -->
						<div class="card-body">
						<h5 class="card-title"><?= $value['post_title']?></h5>
						<hr>
						<p class="card-text"><?= $value['post_description']?></p>
						<p class="card-text"><?= $value['created_on']?></p>
						<hr>
						<p class="card-text">Created by <?= $value['fname']?></p>
					</div>
				</div>
			<?php
		}
	?>

	<a href="<?php echo base_url('index.php/Logout/logoutUser'); ?>">Click here to logout</a>
</div>
	
	
<?php include 'partials/footer.php' ?>
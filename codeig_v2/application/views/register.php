<?php include 'partials/header.php' ?>

    <div class="container">
        <h2 class="mt-5">Register</h2>

        <?php 
            if($this->session->flashdata('msg'))
            {  
                echo "<h3>".$this->session->flashdata('msg')."</h3>";
            }
        ?>
        <hr>

        <!-- codeigniter - form validation library(helper) -->
        <?php echo validation_errors(); ?>

        <?php echo form_open('Register/registerUser'); ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fname">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lname">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="confirmpassword">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo form_close(); ?>
    </div>
        
<?php include 'partials/footer.php' ?>
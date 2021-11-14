<?php include 'partials/header.php' ?>

    <div class="container">
        <h2 class="mt-5">Login</h2>
        <hr>

        <!-- codeigniter - form validation library(helper) -->
        <?php echo validation_errors(); ?>
        
        <?php echo form_open('Login/loginUser'); ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo form_close(); ?>
    </div>
        
<?php include 'partials/footer.php' ?>
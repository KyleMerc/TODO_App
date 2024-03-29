<?php
session_start();
?>

<?php require "../template/header.php"; ?>
<h3 class="text-center">REGISTER</h3>

<?php if(isset($_SESSION["v_pass"]) && $_SESSION["v_pass"] == true) : ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
    <strong>Wrong Password</strong>

    <?php unset($_SESSION["v_pass"]); ?>
    </div>

<?php elseif(isset($_SESSION["v_user"]) && $_SESSION["v_user"] == true) : ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
    <strong>Username is already taken</strong>
    
    <?php unset($_SESSION["v_user"]); ?>
    </div>
<?php endif; ?>


    <form action="../../controller/Register.php" method="post">
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="">Confirm Password</label>
                <input type="password" name="confPassword" class="form-control">
            </div>
        </div>
        <button class="btn btn-primary btn-block" name="register" type="submit">REGISTER</button>
    </form> 
    <br />
    <a href="../../controller/Logout.php" class="btn btn-primary">Go back</a>
<?php require "../template/footer.php"; ?>
<?php include 'header.php'; ?>

<!-- user page -->
//make user profile page html
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <center>
                        <img src="../assets/img/user.png" class="img-responsive img-circle" style="width: 100px; height: 100px;">
                        <h3><?php echo $_SESSION['username']; ?></h3>
                        <h5><?php echo $_SESSION['level']; ?></h5>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Profile</h3>
                    <hr>
                    <form action="profile_proses.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $_SESSION['username']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="<?php echo $_SESSION['password']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <input type="text" name="level" class="form-control" value="<?php echo $_SESSION['level'];
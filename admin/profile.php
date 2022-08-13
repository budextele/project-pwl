<?php include 'header.php'; ?>

<!-- user page -->
<!--//make user profile page html -->
<div class="container">
	
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
				<form action="ganti_password_aksi.php" method="post">
					<div class="panel-body">
						<center>
							<img src="download.php" class="img-responsive" style="width: 200px;">
							<h3><?php echo $_SESSION['username']; ?></h3>
						
						<br/>
						<a href="imageUploadForm.php" class="btn btn-primary">ubah foto</a>
						</center>
					</div>
				</form>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Profile</h3>
                    <hr>
                    
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $_SESSION['username']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password_baru" placeholder="*******" readonly>
                        </div>
                        <br/>

						
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>
<div class="container">
    <div class="panel panel-default">
        <form action="uploadImage.php" method="post" enctype="multipart/form-data">
            <div class="panel-body">
                <center>
                    <label>Select Image File:</label>
                    <input type="file" name="image" class="form-control" accept="image/*" required>
                    <br>
                    <input type="submit" name="submit" value="Upload" class="btn btn-primary">
                </center    
            </div>
        </form>
</div>
</div>
<!-- Form Update & Check Session -->
<!DOCTYPE html>
<html>
<head>
	<title>Insert new Merchandise</title>
	
</head>
<body>
	
	
	<!-- If user has not logged in, Redirect to login.php -->
  
    <div class="title">
        <center>
          <h3>Insert</h3>
        </center>
      </div>
		<div class="container text-center update-form">
      
			<div class="errorMessage">
				<!-- Show Error Message -->
					<p style="color: red;">
          <?php 
						
            if(isset($_SESSION['error']))
            {
              echo $_SESSION['error'];
              unset($_SESSION['error']);
            }

          ?> 
          </p>
			</div>
			<form class="form-horizontal" method="POST" action="controller/doInserte.php" enctype="multipart/form-data">
			<input type="hidden" name="id"> <!-- id from selected product -->
            <div class="form-group">
              <label class="control-label col-sm-2" for="name">Name:</label>
              <div class="col-sm-10">
                <!-- Show selected brand in value input type -->
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Event Name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="date">Date:</label>
              <div class="col-sm-10">
				<!-- Show selected type in value input type -->
                <input type="date" class="form-control" id="date" name="date" placeholder="Enter Date">
              </div>
            </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="desc">Description:</label>
              <div class="col-sm-10">
				<!-- Show selected type in value input type -->
                <input type="text" class="form-control" id="desc" name="desc" placeholder="Enter Description">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="price">Price:</label>
              <div class="col-sm-10">
				<!-- Show selected price in value input type -->
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="image">Image:</label>
              <div class="col-sm-10">
                <input type="file" id="image" name="image">
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default">Submit</button></button>
            </div>
          </form>
		</div>
</body>
</html>
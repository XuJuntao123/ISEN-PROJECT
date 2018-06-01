<!DOCTYPE html>
<html>
<head>
	<title>Create Product</title>
</head>
<body>
	<div align="middle"><h1>Create Product</h1></div>
	<form action="index.php?controllers=product&method=make" method = "POST" enctype="multipart/form-data">
    <div class="container">
      <div class="form-group">
        <label><b>Product Name</b></label>
        <input class ="form-control" type="text" placeholder="Enter Product Name" name="name" required>
      </div>
      <div class="form-group">
        <label><b>Price</b></label>
        <input class ="form-control" type="text" placeholder="Enter Price" name="price" required>
      </div>
      <div class="form-group">
        <label><b>Description</b></label>
        <input class ="form-control" type="text" placeholder="Enter Product Description" name="description" required>
      </div>
      <div class="form-group">
        <label><b>Product Image</b></label>
        <input class ="form-control" type="file"  name="img" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Create Product</button>
      </div> 
    </div>
  </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="col-md-6">
    <h2>Create Item</h2>
      <a href="sales_order.php">Create order</a>

      <form class="form-horizontal" id="createItem" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label class="control-label col-sm-4" for="email">Item Code:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Enter item code" name="item_code" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="pwd">Item Name:</label>
        <div class="col-sm-6">          
          <input type="text" class="form-control" placeholder="Enter item name" name="item_name" required>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-4" for="pwd">UOM:</label>
        <div class="col-sm-6">
        <select class="form-control" name="uom">
            <option value="KG">KG</option>
            <option value="GM">GM</option>
            <option value="NOS">NOS</option>
            <option value="MTR">MTR</option>
            <option value="LTR">LTR</option>
        </select>          
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-4">Rate:</label>
        <div class="col-sm-6">          
          <input type="number" class="form-control" placeholder="Enter rate" name="item_rate" required>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-4">Image:</label>
        <div class="col-sm-6">
        <input type="file" class="form-control" name="image">          
        </div>
      </div>

      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10 text-center">
            <input type="hidden" name="createitem"></ins>
            <button type="submit" id="create_item" name="create_item" class="btn btn-success">Submit</button>
          </div>
      </div>
    </form>
  </div>
</div>
  <script src="assets/ajax.js"></script>

</body>
</html>

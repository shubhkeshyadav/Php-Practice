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
    <h2>Sales Order</h2>


      <a href="create_item.php">Create item</a>

      <form class="form-horizontal" id="makeorder" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label class="control-label col-sm-4" for="email">Client Code:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Enter client code" name="client_code" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="pwd">Client name:</label>
        <div class="col-sm-6">          
          <input type="text" class="form-control" placeholder="Enter client name" name="client_name" required>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-4" for="pwd">Contact Number:</label>
        <div class="col-sm-6">          
          <input type="text" class="form-control" placeholder="Enter Contact No" name="contact_no" required>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-4" for="pwd">Address:</label>
        <div class="col-sm-6">   
          <textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
        </div>
      </div>
      <h4>Item Detail</h4>
      <button id="addmore" type="button">Add More Items</button>
      <button id="delete">Delete Items</button>

      <input type="text" placeholder="Search Item" id="search_item">
      <div id="suggesstion-box"></div>

      <table class="table">
        <thead>
          <tr>
            <th>Checkbox</th>
            <th>S.N.</th>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>UOM</th>
            <th>Rate</th>
            <th>Qty</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody id="rows">
        </tbody>
      </table>

      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10 text-center">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
      </div>
    </form>
  </div>
</div>
  <script src="assets/ajax.js"></script>

</body>
</html>

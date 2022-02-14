<!DOCTYPE html>
<html>  
    <head>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>   

    </head>
    <body>
        <a href="user.php?action=useradd">
            <button style=" background-color: #4CAF50; color: white; padding: 15px 32px; font-size: 16px;margin-left:40%">Add New Record</button>
        </a>
        <table id="listing" class="display" style="width:100%">
        <h2>Listing</h2>
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Employee name</th>
                    <th>Email address</th>
                    <th>Contact Number</th>
                    <th>Gender</th>
                    <th>Department</th>
                    <th>Birthdate (dd-mm-YYYY)</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </body>
    <script>
        $(document).ready(function() {
            $('#listing').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": "index.php?action_type=userlist",
                "lengthMenu": [[3, 25, 50, -1], [3, 25, 50, "All"]],
                stateSave: false,
                'columnDefs': [ {
                    'targets': [0,7],
                    'orderable': false
                }],
                "aaSorting": []
            } );
        } );
    </script>
</html>


<html>  
    <body>
        <form method="post" action="server.php" enctype="multipart/form-data">
        <input type="file" required name="file">
        <input type="submit">
        </form>

        <?php
        
        $con = mysqli_connect("localhost","root","","image") or die('Unable To connect');
        $sql = 'select * from data';
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $img = $row['image'];
                ?>
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img); ?>" /> 
                <?php
            }
        }
        ?>

    </body>
</html>
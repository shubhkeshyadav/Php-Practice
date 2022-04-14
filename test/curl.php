<?php

$url = 'https://jsonkeeper.com/b/UA1B';

//  Initiate curl
$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Will dump a beauty json :3
$data = json_decode($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">           
  <table class="table">
    <thead>
      <tr>
        <th>image</th>
        <th>name</th>
        <th>cost</th>
        <th>like</th>
      </tr>
    </thead>
    <tbody>
        <?php

            if($data)
            {   
                $sCost  = [];
                $newData   = [];

                foreach($data as $obj)
                {
                    $sCost[]            = $obj->cost;
                    $newData[$obj->cost][]  = $obj;
                }

                sort($sCost);

                foreach($sCost as  $key => $val)
                {   
                   $arr = $newData[$val];

                   $nameArr = [];
                   $fNewArr = [];

                   foreach($arr as $obj)
                   {
                    $nameArr[] = $obj->name;
                    $fNewArr[$obj->name][] = $obj;
                    ?>
                        
                    <?php
                   }
                   sort($nameArr);
                   
                   foreach($nameArr as $key2 => $val2)
                   {
                       foreach($fNewArr[$val2] as $objNew)
                        {   
                            ?>
                                <tr>
                                    <td><img src="<?= $objNew->image ?>" width="100"></td>
                                    <td><?= $objNew->name ?></td>
                                    <td><?= $objNew->cost ?></td>
                                    <td><?= $objNew->like?$objNew->like:'--' ?></td>
                                </tr>
                            <?php
                        }
                    }

                }
            }
        ?>

    </tbody>
  </table>
</div>
</body>
</html>

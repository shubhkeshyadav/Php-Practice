<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add new record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .error
        {
            color:red;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            $detail = (object)$detail;
        ?>
        <h2>Edit record</h2>
            <form class="form-horizontal" autocomplete="off" method="post" id="add_user_frm">
                <div class="form-group">
                    <label class="control-label col-sm-2">Employee name:</label>
                    <div class="col-sm-10">
                        <input required type="text" class="form-control" placeholder="Employee name" name="employee_name" id="employee_name" value="<?= $detail->employee_name;?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2" >Email address:</label>
                    <div class="col-sm-10">          
                        <input required type="text" class="form-control" placeholder="Email address" name="email_address" id="email_address" value="<?= $detail->email_address;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" >Gender</label>
                    <div class="col-sm-10">          
                        <input required type="radio" value="male" id='male' name='gender' <?= ($detail->gender == 'male')?'checked':'';?>><label for='male'>&nbsp&nbspMale&nbsp&nbsp</label>
                        <input required  type="radio" value="female" id='female' name='gender' <?= ($detail->gender == 'female')?'checked':'';?>> <label for='female'>&nbspFemale</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2" >Contact number:</label>
                    <div class="col-sm-10">          
                        <input required type="text" class="form-control" placeholder="Contact number" name="contact_number" id="contact_number" value="<?= $detail->contact_number;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" >Address:</label>
                    <div class="col-sm-10">          
                        <input type="text" class="form-control" placeholder="Address" name="address" id="address" value="<?= $detail->address;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" >Joining date:</label>
                    <div class="col-sm-10">          
                        <input type="date" class="form-control" placeholder="Joining date" name="joining_date" id="joining_date" value="<?= $detail->joining_date;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" >Birthdate:</label>
                    <div class="col-sm-10">          
                        <input type="date" class="form-control" placeholder="Birthdate" name="birthdate" id="birthdate" value="<?= $detail->birthdate;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" >Department:</label>
                    <div class="col-sm-10">          
                        <select class="form-control" id="department" name="department">
                        <?php
                            if($departments)
                            {
                                foreach($departments as $department)
                                {   
                                    $selected = '';
                                    if($department['id'] == $detail->department)
                                    {
                                        $selected = 'selected="selected"';
                                    }
                                    echo '<option '.$selected.' value="'.$department['id'].'">'.$department['name'].'</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" >Education:</label>
                    <div class="col-sm-10">          
                        <select class="form-control" id="education" name="education">
                        <?php
                            if($educations)
                            {
                                foreach($educations as $education)
                                {   
                                    $selected = '';
                                    if($education['id'] == $detail->education)
                                    {
                                        $selected = 'selected="selected"';
                                    }
                                    echo '<option '.$selected.' value="'.$education['id'].'">'.$education['name'].'</option>';
                                }
                            }
                        ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" >Experience:</label>
                    <div class="col-sm-10">          
                        <input type="text" class="form-control" placeholder="Experience" name="experience" id="Experience" value="<?= $detail->experience;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" >Hobby:</label>
                    <div class="col-sm-10">          
                        <select class="form-control" id="hobby" name="hobby">
                        <?php
                            if($hobbies)
                            {
                                foreach($hobbies as $hobbie)
                                {   
                                    $selected = '';
                                    if($hobbie['id'] == $detail->hobby)
                                    {
                                        $selected = 'selected="selected"';
                                    }
                                    echo '<option '.$selected.' value="'.$hobbie['id'].'">'.$hobbie['name'].'</option>';
                                }
                            }
                        ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" >Photo:</label>
                    <div class="col-sm-10">  
                        <input type="file" accept="image/*" class="form-control" name="photo">
                        <input type="hidden" class="form-control" name="id" value="<?= $detail->id;?>">
                        <img width="100" src="uploads/<?= $detail->photo?$detail->photo:'no-image.jpg'; ?>">
                    </div>


                </div>

                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="add_btn">Submit</button>
                        <a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

<script>
        $(document).ready(function(){
            $('#add_user_frm').submit(function(evt){
                evt.preventDefault();
                $('.error').remove();
                var form = $("#add_user_frm");
                var formData = new FormData(form[0]);													

                $.ajax({
                    url     :   'user.php?action=edit&type=save',
                    type    :   'POST',
                    cache       : false,
                    contentType : false,
                    processData : false,
                    data    :   formData,
                    success :   function (data)
                    {   
                        var data = JSON.parse(data);
                        if(data.success == false && data.type == 'error')
                        {
                            $.each(data.errors,function(key,msg){
                                $('#'+key).after('<div class="error">'+msg+'</div>');
                            });
                        }
                        else if(data.success == true)
                        {
                            alert(data.msg);
                            window.location.href='index.php'
                        }
                        else
                        {
                            alert(data.msg);
                        }
                    },
                    error: function (xhr, httpStatusMessage, customErrorMessage){
                        alert('Error something went wrong');
                    }
                });
            });
        });
</script>

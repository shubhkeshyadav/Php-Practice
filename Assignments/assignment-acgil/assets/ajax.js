//$("#create_item" ).click(function() {

$(document).on('submit','#createItem',function(evt){
	evt.preventDefault();
	var form = $("#createItem");
	var formData = new FormData(form[0]);													

    $.ajax({
    url: 'server.php',
    type: 'POST',
    data: formData,
    success: function (data) {
       if(data == 'success')
       {
       	alert('Item created successfully');
       	location.reload();
       }
    },
    cache: false,
    contentType: false,
    processData: false
    });
});

$("#addmore" ).click(function() {
	var row = `<tr id="blanktr">
	        <td>---</td>
	        <td>---</td>
	        <td>---</td>
	        <td>---</td>
	        <td>---</td>
	        <td>---</td>
	        <td>---</td>
	        <td>---</td>
	      </tr>`;

	  $('#rows').append(row);
});

$("#search_item").keyup(function(){
	$.ajax({
		type: "POST",
		url: "server.php",
		data:'action=suggestion&keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
		}
		});
});


$(document).on('click','.item-li',function(){
    var id = $(this).data('id');

    $.ajax({
		type: "POST",
		url: "server.php",
		data:'action=select_item&id='+id,
		beforeSend: function(){
			
		},
		success: function(data){
			
			if ($('#blanktr').length)
			{
			 	$('#blanktr').html(data);
				$('#blanktr').removeAttr('id');
				$("#suggesstion-box").hide();
			}
			else
			{
				alert('Please add item ');
			}

			$('.srno').each(function(i, obj) {
				var sr = parseInt(i+1);
			    $(obj).html(sr);
			});
		}
	});
});

$(document).on('keyup','.qty',function(){
    var id = $(this).data('id');
    var qty = $(this).val();

    $.ajax({
		type: "POST",
		url: "server.php",
		data:'action=calculate_qty&qty='+qty+'&id='+id,
		beforeSend: function(){
			
		},
		success: function(amt){
			$('#amt'+id).val(amt);
		}
	});
});

$(document).on('click','#delete',function(){
   
   $('input[type=checkbox]').each(function () 
	{		
		if(this.checked)
		{
			$(this).parent().parent().remove();
		}

	});
});



$(document).on('submit','#makeorder',function(evt){
	evt.preventDefault();
	var formData = $('#makeorder').serialize();
	formData+='&action=create_order'
	$.ajax({
		type: "POST",
		url: "server.php",
		data:formData,
		beforeSend: function()
		{
			
		},
		success: function(data)
		{
			alert(data);
			location.reload();
		}
	});
});
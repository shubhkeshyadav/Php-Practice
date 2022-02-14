<?php

include 'functions.php';

//create an item
if(isset($_POST['createitem']))
{
	$arr = $_POST;

	$status = createItem($arr);

	if($status)
	{
		die('success');
	}
}

if(isset($_POST['action']) && $_POST['action'] == 'suggestion')
{	
	
	$html = '<ul style="margin-left:100px;list-style-type:none;">';

	$data = getSuggestion();

	if($data)
	{
		foreach($data as $id => $itemName)
		{
			$html .= '<li style="cursor: pointer;" class="item-li" data-id='.$id.'>'.$itemName.'<li>';
		}
	}

	$html .= '</ul>';

	echo $html;
}

if(isset($_POST['action']) && $_POST['action'] == 'select_item' && isset($_POST['id']) && $_POST['id'] > 0)
{	
	$id 	= $_POST['id'];
	$data 	= getItemDetail($id);

	$html = '';
	if($data)
	{	
		$id = $data['id'];
		$html = '
					
						<td><input type="checkbox" name="items[]" value="'.$id.'"></td>
						<td class="srno">1</td>
						<td>'.$data["item_code"].'</td>
						<td>'.$data["item_name"].'</td>
						<td>'.$data["uom"].'</td>
						<td>'.$data["item_rate"].'</td>
						<td><input required type="text" name="qty[]" class="qty" data-id="'.$data['id'].'"></td>
						<td><input required type="amount" name="amt[]" id="amt'.$id.'"></td>
						<td></td>
						<td></td>
					
				';
	}

	echo $html;exit;
}

if(isset($_POST['action']) && $_POST['action'] == 'calculate_qty' && isset($_POST['id']) && $_POST['id'] > 0)
{
	$id 	= $_POST['id'];
	$qty 	= (int)$_POST['qty'];

	$amount = '';

	if($qty)
	{
		$data 	= getItemDetail($id);

		if($data)
		{
			$rate = $data['item_rate'];
			$amount = $rate*$qty;
		}		
	}

	echo $amount;exit;
}

if(isset($_POST['action']) && $_POST['action'] == 'create_order')
{	
	$post = $_POST;

	$items = $post['items'];

	if(!$items)
	{
		die('Please select items');
	}

	$resp = createOrder();

	if($resp)
	{
		die('Order Created Successfully');
	}
	die('Error Unable to Create Order');
}

?>
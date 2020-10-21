<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate();
    $fata = get_data_id_data("users", "id", $_REQUEST['seller_id']);
    //print_r($fata);
    //print_r($pdo_auth);
?>

<form action="load_seller_message_handle.php" method="POST">
	<div class="form-group">
		<input type="text" name="price_offered" class="form-control" placeholder="Enter Price you want to offer" required="">
	</div>

	<div class="form-group">
		<select class="form-control"  required="" name="price_type">
			<option value="">Select Pricing Type</option>
			<option>Flat Rate</option>
			<option>Hourly Rate</option>
		</select>
	</div>

	<div class="form-group">
		<textarea  class="form-control" name="message" placeholder="Enter Message if any" required=""></textarea>
	</div>
	<input type="hidden" name="stuff_id" value="<?php echo $_REQUEST['stuff_id']; ?>" >
	<input type="hidden" name="seller_id" value="<?php echo $_REQUEST['seller_id']; ?>" >

	<input type="submit" class="btn btn-primary btn-icon-right" value="Request Transaction">

</form>
    
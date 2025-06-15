<?php
// Setup order data
$order_id = uniqid(); // Generate unique order ID
?>
<!DOCTYPE html>
<html>
<head>
    <title>PayHere Payment</title>
</head>
<body>

<h2>Simple PayHere Payment</h2>

<form method="post" action="https://sandbox.payhere.lk/pay/checkout">
    <input type="hidden" name="merchant_id" value="YOUR_MERCHANT_ID">
    <input type="hidden" name="return_url" value="http://localhost/return.php">
    <input type="hidden" name="cancel_url" value="http://localhost/cancel.php">
    <input type="hidden" name="notify_url" value="http://localhost/notify.php">

    <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
    <input type="hidden" name="items" value="Test Item">
    <input type="hidden" name="amount" value="100.00">
    <input type="hidden" name="currency" value="LKR">
    <input type="hidden" name="first_name" value="Dimuthu">
    <input type="hidden" name="last_name" value="Weerasinghe">
    <input type="hidden" name="email" value="dimuthu@example.com">
    <input type="hidden" name="phone" value="0771234567">
    <input type="hidden" name="address" value="Galle Road">
    <input type="hidden" name="city" value="Colombo">
    <input type="hidden" name="country" value="Sri Lanka">

    <button type="submit">Payment</button>
</form>

</body>
</html>


<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = $password = "";

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
// $name = test_input ( $_POST ["name"] );
$email = test_input ( $_POST ["email"] );
$password = test_input ( $_POST ["password"] );
// $website = test_input ( $_POST ["website"] );
// $comment = test_input ( $_POST ["comment"] );
// $gender = test_input ( $_POST ["gender"] );
}
function test_input($data) {
$data = trim ( $data );
$data = stripslashes ( $data );
$data = htmlspecialchars ( $data );
return $data;
}
?>

<script>
console.log('here');
console.log('hello: ' + '<?php echo $GLOBALS["email"] ?>');
</script>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="./css/img/favicon.png">
</head>
<body>
Welcome <?php echo $_POST["email"]; ?><br>
Your email address is: <?php echo $_POST["password"]; ?>
</body>
</html>

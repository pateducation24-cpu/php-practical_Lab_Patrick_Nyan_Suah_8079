<?php
$result = null;

error_reporting(0);

function add($a, $b) {
	return $a + $b;
}

function subtract($a, $b) {
	return $a - $b;
}

function multiply($a, $b) {
	return $a * $b;
}

function divide($a, $b) {
	if ($b == 0) {
		return "Cannot divide by zero";
	}
	return $a / $b;
}


	$num1 = (float) $_POST["num1"];
	$num2 = (float) $_POST["num2"];
	$operation = $_POST["operation"];

	switch ($operation) {
		case "add":
			$result = add($num1, $num2);
			break;
		case "subtract":
			$result = subtract($num1, $num2);
			break;
		case "multiply":
			$result = multiply($num1, $num2);
			break;
		case "divide":
			$result = divide($num1, $num2);
			break;
		default:
			$result = "Invalid operation";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<h2>User Defined Function Calculator</h2>
	<form method="post">
		<label>Number 1:</label>
		<input type="number" step="any" name="num1" required>
		<br><br>

		<label>Number 2:</label>
		<input type="number" step="any" name="num2" required>
		<br><br>

		<label>Operation:</label>
		<select name="operation">
			<option value="add">Add(+)</option>
			<option value="subtract">Subtract(-)</option>
			<option value="multiply">Multiply(*)</option>
			<option value="divide">Divide(/)</option>
		</select>
		<br><br>

		<button type="submit">Calculate</button>
	</form>

	<?php 
        if ($result !== null): ?>
		<h3>Result: <?php echo $result; 
    ?></h3>
	
    <?php endif; ?>
</body>
</html>

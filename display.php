<html>
<head>
<title>the code for php</title>
</head>

<body>

<?php
	$name = $_POST['name'];
	$Fname = $_POST['Fname'];
	$Mname = $_POST['Mname'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$college = $_POST['college'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];

?>

<table align=center>
	<tr>
	<td style="text-align:left">name: 
	<td><?php echo $name; ?>
	</tr>

	<tr>
	<td style="text-align:left">Father's name: 
	<td><?php echo $Fname; ?>
	</tr>

	<tr>
	<td style="text-align:left">Mother's name
	<td><?php echo $Mname; ?>
	</tr>

	<tr>
	<td style="text-align:left">Gender: 
	<td><?php echo $gender ?>
	</tr>

	<tr>
	<td style="text-align:left">Address:
	<td><?php echo $city ?>
	</tr>

	<tr>
	<td style="text-align:left">College:
	<td><?php echo $college ?>
	</tr>

	<tr>
	<td style="text-align:left">email:
	<td><?php echo $email ?>
	</tr>

	<tr>
	<td style="text-align:left">Contact:
	<td><?php echo $contact ?>
	</tr>
</table>
</body>
</html>
<?php

	if(isset($_POST['submit'])){
		$blood_group = $_POST['bloodGroup'];
		
		echo "<b>BLOOD GROUP: </b>".$bg;
	}

?>

<!DOCTYPE html>
<html>

<head>
    <title>HTML Form using PHP</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset style="width:300px">
            <legend><b>BLOOD GROUP</b></legend>
            <select name="bloodGroup" >
				<option value="A+" selected>A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
			</select>
			<hr>
			<input type="submit" name="submit" value="Submit">
        </fieldset>
        <br>
    </form>    
</body>

</html>
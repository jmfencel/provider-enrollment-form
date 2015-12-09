<!DOCTYPE html>
<html>
<head>
	<title>Provider Enrollment Form</title>
</head>
<body>
<form method="post" action="">
	Provider type: <br>
	<input type="checkbox" name="indi" value="i">Individual<br>
	<input type="checkbox" name="group" value="g">Group<br>
	<input type="checkbox" name="grpvdr" value="gp">Group Provider<br>
	<input type="checkbox" name="fac" value="f">Facility<br>
	Provider type: <br>
		<select name="prov_types" multiple size="4">
			<option value="i">Individual</option>
			<option value="g">Group</option>
			<option value="gp">Group Provider</option>
			<option value="f">Facility</option>
		</select><br>
</form>
</body>
</html>

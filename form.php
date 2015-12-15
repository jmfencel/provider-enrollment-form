<!DOCTYPE html>
<html>
<head>
	<title>Provider Enrollment Form</title>
</head>
<body>
<?php 
  if (isset($_POST['submit'])) {
    $ok = true;

    // check if Provider type is not selected
    if (!isset($_POST['prov_types']) || $_POST['prov_types'] === '') {
      $ok = false;
    }
    
    // check if State is selected
    if (!isset($_POST['state']) || $_POST['state'] === 'blank') {
      $ok = false;
    }

    if($ok) {
  	// process form
  	  printf('Provider type: %s
  		<br>Provider fist name: %s
  		<br>Provider last name: %s
  		<br>Degree: %s
  		<br>Address: %s
  		<br>City: %s
  		<br>State: %s
  		<br>Zip: %s
  		<br>County: %s
  		<br>Phone number: %s
  		<br>Fax number: %s
  		<br>Email: %s
  		<br>Particpates in Medicaid: %s
  		<br>Type I NPI: %s
  		<br>Type II NPI: %s
  		<br>Billing type: %s
  		<br>Billing number: %s
  		<br>Group name: %s
  		<br>Contact name: %s
  		<br>Contact title: %s',
  			htmlspecialchars($_POST['prov_types']),
  			htmlspecialchars($_POST['p_first']),
  			htmlspecialchars($_POST['p_last']),
  			htmlspecialchars($_POST['deg']),
  			htmlspecialchars($_POST['address']),
  			htmlspecialchars($_POST['city']),
  			htmlspecialchars($_POST['state']),
  			htmlspecialchars($_POST['zip']),
  			htmlspecialchars($_POST['county']),
  			htmlspecialchars($_POST['phone']),
  			htmlspecialchars($_POST['fax']),
  			htmlspecialchars($_POST['email']),
  			htmlspecialchars($_POST['medicaid']),
  			htmlspecialchars($_POST['npi_i']),
  			htmlspecialchars($_POST['npi_ii']),
  			htmlspecialchars($_POST['bill_type']),
  			htmlspecialchars($_POST['bill_info']),
  			htmlspecialchars($_POST['gn']),
  			htmlspecialchars($_POST['cn']),
  			htmlspecialchars($_POST['ct']));
      }
    }
?>
<form method="post" action="">
	Provider type: <br>
		<select name="prov_types" multiple size="4">
			<option value="i">Individual</option>
			<option value="g">Group</option>
			<option value="gp">Group Provider</option>
			<option value="f">Facility</option>
		</select><br>
	Provider first name: <input type="text" name="p_first"><br>
    Provider last name: <input type="text" name="p_last"><br>
    Degree: <select name="deg">
            <option value="blank"></option>
            <option value="md">MD</option>  
        </select><br>
    Address: <input type="text" name="address"><br>
    City: <input type="text" name="city"><br>
    State: <select name="state">
                    <option value="blank"></option>
                    <option value="fl">FL</option>
           </select><br>
    Zip: <input type="text" name="zip"><br>
    County: <input type="text" name="county"><br>
    Phone number: <input type="text" name="phone"><br>
    Fax number: <input type="text" name="fax"><br>
    Email: <input type="text" name="email"><br>
    Participates in Medicaid: 
    <input type="radio" name="medicaid" value="y">Yes
    <input type="radio" name="medicaid" value="n">No<br>
    Type I NPI: <input type="text" name="npi_i"><br>
    Type II NPI: <input type="text" name="npi_ii"><br>
    Billing info: <select name="bill_type">
                    <option value="blank"></option>
                    <option value="ssn">SSN</option>
                    <option value="tin">TIN</option>
			      </select><input type="text" name="bill_info"><br>
    Group name: <input type="text" name="gn"><br>
    Contact name: <input type="text" name="cn"><br>
    Contact title: <input type="text" name="ct"><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

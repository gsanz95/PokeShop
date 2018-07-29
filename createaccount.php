<?php

// Maintain login info for session
session_start();

//Includes for html page
include "sidebar.php";
include "config.php";

// Initialize values
$firstname = $lastname = $addr = $addr2 = $city = $state = $zip = $email = $password = $cardNum = $securityCd = $expMth = $expYr = $email_err ="";

// Register user
if (isset($_POST['register'])) {

	// Initialize errors
	$email_err = "";

	// Only process on POST, not GET
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$addr = $_POST["inputAddress"];
		$addr2 = $_POST["inputAddress2"];
		$city = $_POST["city"];
		$state = $_POST["state"];
		$zip = $_POST["zipCode"];
		$email = $_POST["emailsignin"];
		$password = $_POST["passwordsignin"];
		$cardNum = $_POST["cardnumber"];
		$securityCd = $_POST["cardSecurityCode"];
		$expMth = $_POST["cardmonth"];
		$expYr = $_POST["cardyear"];
		
		/*// MySQL credentials
		$servername = "pokemart.cpnngrjylxoa.us-east-2.rds.amazonaws.com";
		$username = "master";
		$serverpassword = "password123";
		$dbname = "pokemart";

		// Create connection
		$conn = mysqli_connect($servername, $username, $serverpassword, $dbname);

		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}*/
		
		// Check that email is unique
		$sql = "SELECT * FROM users WHERE email = '$email'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0){
		    $email_err = "<font color='red'>That email is already in use! Please use a different one.</font>";
		}
		
		else{
			// Insert new user into database
			$sql = "INSERT INTO users (firstname, lastname, inputAddress, inputAddress2, " .
				"city, state, zipCode, email, password, cardnumber, cardSecurityCode, " .
				"cardmonth, cardyear) VALUES ('$firstname', '$lastname', '$addr', '$addr2', " . 
				"'$city', '$state', '$zip', '$email', '$password', '$cardNum', '$securityCd', " .
				"'$expMth', '$expYr')";

			if (mysqli_query($conn, $sql)) {
		    	    // Store the email for use across webpages
		    	    $_SESSION['email'] = $email;

		    	    // Redirect to account page
		            header("Location: account.php");
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

		}

		// Close connection
		mysqli_close($conn);
	}
}

?>

<!-- Page Content -->
<div class="col-lg-10 h-100 col-sm-9 col-12">
    <div id="page-header" class="alert-heading">
        <h2 class="font-weight-bold pl-5 pt-5" aria-label="Create Account">Create Account</h2>
    </div>
    <div class="h-auto p-5">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstname">First Name:</label>
                    <input type="text" class="form-control" id="firstname" placeholder="John" name="firstname" value="<?php echo $firstname; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="lastname">Last Name:</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Appleseed" name="lastname" value="<?php echo $lastname; ?>">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="inputAddress" value="<?php echo $addr; ?>">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apt. #" name="inputAddress2" value="<?php echo $addr2; ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" placeholder="City" name="city" value="<?php echo $city; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="state">State</label>
                    <select id="state" class="form-control" name="state">
                        <option value="">Choose...</option>
                        <option value="AK">Alaska</option>
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="AZ">Arizona</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DC">District of Columbia</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="IA">Iowa</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MD">Maryland</option>
                        <option value="ME">Maine</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MO">Missouri</option>
                        <option value="MS">Mississippi</option>
                        <option value="MT">Montana</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="NE">Nebraska</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NV">Nevada</option>
                        <option value="NY">New York</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VA">Virginia</option>
                        <option value="VT">Vermont</option>
                        <option value="WA">Washington</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WV">West Virginia</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="zipCode">Zip</label>
                    <input type="text" class="form-control" id="zipCode" placeholder="12345" name="zipCode" value="<?php echo $zip; ?>">
                </div>

                <div class="form-group col-md-12">
                    <label for="emailsignin"> Email Address</label>
                    <input type="email" class="form-control" id="emailsignin" aria-describedby="emailHelp" placeholder="John@Appleseed.com" name="emailsignin" value="<?php echo $email; ?>" required>
    <?php if($email_err != "") { echo $email_err; } ?>
                </div>
                <div class="form-group col-md-12">
                    <label for="passwordsignin">Password:</label>
                    <input type="password" class="form-control" id="passwordsignin" placeholder="Password" required name="passwordsignin">
                </div>
                <div class="form-group col-md-7">
                    <label for="cardnumber">Card Number:</label>
                    <input type="text" class="form-control" id="cardnumber" placeholder="#### #### #### ####" name="cardnumber" required value="<?php echo $cardNum; ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="cardSecurityCode">Security Code:</label>
                    <input type="text" class="form-control" id="cardSecurityCode" name="cardSecurityCode" required value="<?php echo $securityCd; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="cardmonth">Expiration Date:</label>
                    <div class="input-group">
                        <input type="text" class="form-control col-md-4" id="cardmonth" placeholder="MM" name="cardmonth" required value="<?php echo $expMth; ?>">
                        <input type="text" class="form-control col-md-4" id="cardyear" placeholder="YYYY" name="cardyear" required value="<?php echo $expYr; ?>">
                    </div>
                </div>
                <div class="form-check col-md-12 pl-4 pb-2">
                    <input type="checkbox" class="form-check-input" id="checkagreement" name="checkagreement" required>
                    <label class="form-check-label" for="checkagreement">I agree to the Terms of Service</label>
                </div>
            </div>
            <button name="register" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php
include "footer.php";
?>

    <?php
    $message="";
    if(count($_POST)>0) {
    	$conn = mysqli_connect("localhost","root","","phppot_examples");
    	$result = mysqli_query($conn,"SELECT * FROM users WHERE user_name='" . $_POST["userName"] . "' and password = '". $_POST["password"]."'");
    	$count  = mysqli_num_rows($result);
    	if($count==0) {
    		$message = "Invalid Username or Password!";
    	} else {
    		$message = "You are successfully authenticated!";
    	}
    }
    ?>

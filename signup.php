<!--Cassidy && Dylan -->

<!DOCTYPE html>
  <head>
    <title>
	  Know your Pokemon!
	</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script src="validate.js">
	</script>
	<script src="cookies.js">
	</script>
	<script>
	  function validate(form){
		fail =  validateUsername(form.user.value)
		fail += validatePassword(form.pass.value)
        fail += validateEmail(form.mail.value)		
		
		if(fail == "")   return true
		else{alert(fail):return false}
	  }
	</script>
	<script src="TIAS.js">
	</script>
	<link rel = "stylesheet"
          type = "text/css"
          href = "TIAS.css" />
  </head>
  <body>
	<div class="pokedex"> 
	  <div class="top">
		  <div>
		  </div>
		  <div>
		  </div>
		  <div>
		  </div>
		  <div>
		  </div>
	  </div>
	  <div class="form">
	    <div class="info">
		  <form action="home.php" 
		        style="text-align:right" 
				method="post"
				onSubmit="return validate(this)">
		  Username: <input type="text" name="name"><br>
		  Password: <input type="password" name="pass"><br>
		  Email   : <input type="text" name="mail"><br>
		  Birthday: <input type="date" name="bday"><br>
		  <input type="submit" 
		         value="Sign Up"
				 onclick="setCookie('user', form.name.value, 1);
				          setCookie('pass', form.pass.value, 1);">
		  </form>
		</div>
		<div>
		</div>
	  </div>
	  <div class="buttons">
	    <button id="sign_up"> sign-up </button>
		<button id="login"> login </button>
	  </div>
	</div>
  </body>
</html>


<?php
require_once('login.php');
$conn = new mysqli($host, $user, $pass, $data);
if($conn->connect_error) die($conn -> connect_error);
if (isset($_POST['name']) &&
    isset($_POST['pass']) &&
    isset($_POST['mail']) &&
    isset($_POST['bday']))
    {
	 $uname  = get_post($conn, 'name');
	 $upass  = get_post($conn, 'pass');
	 $umail  = get_post($conn, 'mail');
	 $ubday  = get_post($conn, 'bday');
	 
	 $query  = "INSERT INTO user(username, password, permission_lvl, email, join_date) VALUES('$uname', '$upass', '1', '$umail', '2017-04-26')";
	 $result = $conn->query($query);
	 if(!$result) echo "hi";
         if($result) echo "bitch";
    }
	
	$result->close();
	$conn->close();
	
	function get_post($conn, $var){
		return $conn->real_escape_string($_POST[$var]);
	}
?>

<?php
	var_dump($_GET);
	var_dump($_POST);
	?>

<!DOCTYPE html>
<html>
<head>
	<title> My first form.</title>

</head>
	<body>
		<h2>Sign In</h2>
		<form method="POST" action="/my_first_html_form.php">
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text">
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="type here">
			</p>
			<p>
				<input type="submit" value="login">
			</p>
		</form>
		<hr>
		<h3>Test</h3>
		<form method="POST" action="/my_first_html_form.php">
			<div>
				<label for="username">TEST</label>
				<input placeholder="This is a test" id="username" name="username" type="text">
			</div>
			<div>
				<label for="password">Test 2</label>
				<input id="password" type="text">
			</div>
			<label for="email_body">Email</label>
			<textarea id="email_body" name="email_body" placeholder="content here"></textarea>
			<div>
				<button type="submit"> submit</button>
			</div>
		</form>
		<hr>
		<h1>Trip</h1>
		<form method="POST" action="/my_first-html_form.php">
			<div>
				<label for="from"> From</label>
				<input id="from" name="from" placeholder="last city">
			</div>
			<div>
				<label for="to">Destination</label>
				<input id="to" name="to" placeholder=" next city">
			</div>
			<div>
				<label for="transportation">Transportation</label>
				<textarea id="trasportation" name="transportation" placeholder="type of trasportion"></textarea>
			</div>
			<div>
				<button type="submit">Proceed</buttor>
			</div>
		</form>
		<hr>
		<h2>Have you ever had a gaming system before</h2>
		<div>
			<label>
				<input type="radio" name="q1" value="yes">
				yes
			</label>
			<label>
				<input type="radio" name="q1" value="no">
				No
			</label>
		</div>
		<p> What gaming systems do you have?</p>
		<form method="POST" action="/my_first_html_form.php">
			<div>
				<label><input type="checkbox" id="system1" name="system[]" value="ps4">Ps4</label>
				<label><input type="checkbox" id="system2" name="system[]" value="xbox one">Xbox one</label>
			</div>
			<div>
				<label for="os">Games systems</label>
				<select id="os" name="os[]" multiple>
					<option value="pc">Gaming computer</option>
					<option value="handheld">3ds</option>
					<option Value="old">Sega</option>
				</select>
			<div>
				<button type="submit">Finish Survey</button>
			</div>
		</form>
		<hr>
		<form method="Post" action="/my_first_html_form.php">
			<div>
				<label for="transmission">Select your transmission type:</label>
				<select id="transmission" name="transmission">
					<option value="1">Automatic</option>
					<option selected value="2">Manual</option>
				</select>
			</div>
			<div>
				<button type="submit">Submit</button>
			</div>
		</form>
		<hr>
		<form method="POST" action="/my_first_html_form.php">
			<div>
				<label for="swimming">Do you swim</label>
				<select id="swimming" name="swimming">
					<option value="0">no</option>
					<option value="1">Yes</option>
					<option value="2">Thats for scrubs!</option>
				</select>
			</div>
			<div>
				<button type="submit">Submit</button>
			</div>
		</form>
		<hr>
		<form method="POST" action="/my_first_html_form.php">
			<label for="os">What operating systems have you used? </label>
			<select id="os" name="os[]" multiple>
	  				 <option value="linus">Linux</option>
   				 <option value="osx">OS X</option>
   				 <option value="windows">Windows</option>
			</select>
		</form>
		<hr>
		<h2>Todays Self study</h2>
		<form method="POST" action="/my_first_html_form">
			<p> How should you write a form?</p>
			<div>
				<label><input type="radio" name="q1" value="1">start out with a label</label>
				<label><input type="radio" name="q1" value="2">start with form</label>
				<label><input type="radio" name="q1" value="3">start with a input</label>
			</div>
		</form>

	</body>
		</html>

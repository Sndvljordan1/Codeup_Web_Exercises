<!Doctype html>
<html>
<?php
  var_dump($_GET);
  var_dump($_POST);
?>
	<body>
		<h2>User Login</h2>

		<form method="GET" action="/my_first_form.php">
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="Username" autofocus>
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="Password">
			</p>
			<p>
				<button>Log in now</button>
			</p>
		</form>
		<h2>Compose an Email</h2>
		<form method="POST" action="/my_first_form.php">
			<p>
				<label for="recipient">To</label>
				<input id="recipient" type="text" name="email" placeholder="Email">
			</p>
			<p>
				<label for="from">From</label>
				<input id="from" type="email" name="email" placeholder="email">
			</p>
			<p>
				<label for="subject">Subject</label>
				<input type="text" id="subject" name="subject">
			</p>
			<p>
				<label for="email_body">Message</label>
				<textarea id="email_body" name="email_body" plaeholder="Content Here" rows="5" cols="40"></textarea>
			</p>
			<p>
				<input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>
				<label for="mailing_list">Save a copy to sent folder?</label>
			</p>
			<p>
				<button>Send</button>
			</p>
		</form>
		<h2>Multiple Choice Test</h2>
		<form method="POST" action="/my_first_form.php">
			<p>
				<h3>When does the narwhal bacon?</h3>
			</p>
			<p>
				<label>
					<input type="radio" name="t1" value="false">1 AM
				</label>
				<label >
					<input type="radio" name="t1" value="true">12 AM
				</label>
				<label>
					<input type="radio" name="t1" value="false">6 PM
				</label>
			</p>
			<p>
				<h3>Oppa ____!</h3>
			</p>
			<p>
				<label>
					<input type="radio" name="g1" value="false">Kawaii
				</label>
				<label>
					<input type="radio" name="g1" value="false">Desu
				</label>
				<label>
					<input type="radio" name="g1" value="true">Gangnam Style
				</label>
			</p>
			<p>
				<h3>What does the fox say?</h3>
			</p>
			<p>
				<label>
					<input type="checkbox" id="a5" name="n1[]" value="maybe">Woof
				</label>
				<label>
					<input type="checkbox" id="a1" name="n1[]" value="true">Ring-ding-ding-ding-ding
				</label>
				
				<label>
					<input type="checkbox" id="a3" name="n1[]" value="true">Ahee-ahee-ahee
				</label>
				<label>
					<input type="checkbox" id="a4" name="n1[]" value="false">Moo
				</label><label>
					<input type="checkbox" id="a2" name="n1[]" value="true">Wah-pa-pa-pa-pa-pa-pow
				</label>
				
			</p>
			<p>
				<label for="this">What is your primary language?</label>
				<select name="language" id="this">
					<option value="0" selected>English</option>
					<option value="1">Spanish</option>
					<option value="2">French</option>
					<option value="3">German</option>
					<option value="4">Japanese</option>
				</select>
			</p>
			<p>
				<label for="that">What other language can you speak?</label>
				<select id="that" name="language[]" multiple>
					<option value="0">English</option>
					<option value="1">Spanish</option>
					<option value="2">French</option>
					<option value="3">German</option>
					<option value="4">Japanese</option>
				</select>
			</p>
			<p>
				<label for="os">What operating systems have you used? </label>
				<select id="os" name="os[]" multiple>
					<option selected></option>
    				<option value="linus">Linux</option>
    				<option value="osx">OS X</option>
    				<option value="windows">Windows</option>
				</select>
			</p>
			<p>
				<label>
					<button>Execute</button>
				</label>
			</p>
		</form>
		<form method="GET" action="/my_first_form.php">
			<p>
				<h3>Select Testing</h3>
			</p>
			<p>
				<label for="ed">Have you gone to college?</label>
				<select name="schooling" id="ed">
					<option selected></option>
					<option value="1">Yes</option>
					<option value="0">No</option>
				</select>
			</p>
			<button>Enter</button>
		</form>
	</body>
</html>
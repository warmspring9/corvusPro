<!DOCTYPE html>
<html>
<head>
<title>User registry</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link href="stylesheets/logIn.css" rel="stylesheet" type="text/css">
<link href="stylesheets/form.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="login">
			<h1>User creation</h1>
<form method="post" action="dataAccess/createUser.php" required>
<input type="text" name="username" placeholder="username" required>
<input type="text" name="name" placeholder="name" required>
<input type="text" name="lastname" placeholder="last name" required>
<input type="password" name="password" placeholder="password" required>
<input type="url" name="photo" placeholder="photo" required>
<input type="email" name="email" placeholder="email" required>
<input type="submit" value="Submit">
</form>
</div>
</body>
</html>
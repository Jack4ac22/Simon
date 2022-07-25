<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css
">
	<title>Form</title>
</head>

<body>
	<?php if (isset($_POST['submitBTN'])) {
		$formErrors = false; // variabsle to check if there is any missing enetry;
	} ?>
	<form action="" method="post">
		<h2>Regestration form</h2>
		<p class="redText">* required field</p>
		<div class="firstName mb-3">
			<label for="firstName">First name</label>
			<input type="text" name="firstName" placeholder="enter your first name"> <span class="redText"> *</span>
			<?php if (isset($_POST['submitBTN'])) {
				if (empty($_POST['firstName'])) {
					$formErrors = true;
					echo '<br>' . '<div class="alert alert-danger" role="alert">' . 'First name is required!' . '</div>';
				}
			} ?>
		</div>
		<div class="lastName mb-3">
			<label for="lastName">Last name</label>
			<input type="text" name="lastName" placeholder="enter your Last name"><span class="redText"> *</span>
			<?php if (isset($_POST['submitBTN'])) {
				if (empty($_POST['lastName'])) {
					$formErrors = true;
					echo '<div class="alert alert-danger" role="alert">' . 'Last name is required!' . '</div>';
				}
			} ?>
		</div>
		<div class="mb-3">
			<label for="email">Email Adress</label>
			<input type="email" name="email" placeholder="enter your email address"><span class="redText"> *</span>
			<?php if (isset($_POST['submitBTN'])) {
				// Email entery error check
				$emailLength = strlen($_POST['email']);
				if ($emailLength < 8) {
					$formErrors = true;
					echo '<div class="alert alert-danger" role="alert">'  . 'Invalid email adress ,it is less than 8 charachters!' . '</div>';
				} else if ($emailLength > 50) {
					$formErrors = true;
					echo '<div class="alert alert-danger" role="alert">'  . 'Invalid email adress ,it is more than 50 charachters!' . '</div>';
				}
			} ?>
		</div>
		<div class="password mb-3">
			<div class="mb-3"> <label for="Passowrd">Enter your passowrd</label>
				<input type="password" name="password" placeholder="***********"><span class="redText"> *</span>
			</div>
			<div class="mb-3"><label for="passwordConfirm">Re-enter your password</label> <input type="password" name="passwordConfirm" placeholder="***********"><span class="redText"> *</span> </div>
			<?php if (isset($_POST['submitBTN'])) {
				// check password
				$passwordFirst = $_POST['password'];
				$passwordConfirm = $_POST['passwordConfirm'];
				$passwordLength = strlen($passwordFirst);
				if (
					$passwordFirst !=
					$passwordConfirm
				) {
					$formErrors = true;
					echo '<div class="alert alert-danger" role="alert">'  . 'Password confirmation does not mach the password!' . '</div>';
				};

				if ($passwordLength < 8) {
					$formErrors = true;
					echo '<div class="alert alert-danger" role="alert">'  . 'Password should be at least 8 charachters!' . '</div>';
				}
			} ?>
		</div>
		<div class="mb-3 form-check">
			<input type="checkbox" name="subscribe" class="form-check-input"> <label for="subscribe" class="form-check-label">Recieve our latest updates</label>
		</div>
		<button type="submit" name="submitBTN" class="submitBTN btn btn-primary">submit</button>
	</form>
</body>
<style>
	.redText {
		color: red;
	}

	form {
		width: 80%;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-content: center;
		align-items: flex-start;
	}

	body {
		display: flex;
		flex-direction: column;
		justify-content: flex-start;
		align-items: flex-start;
		align-content: center;
	}
</style>

</html>

<?php
if (isset($_POST['submitBTN'])) {
	if (isset($_POST['subscribe'])) {
		$subscribtionStatus = 'you are subscribed to our newsletter';
	} else {
		$subscribtionStatus =	'You are not subscribet to our newletter';
	};
	if ($formErrors == false) {

		echo '<div class="alert alert-success" role="alert">' .
			'<h4 class="alert-heading">' . 'Welcom ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . '</h4>' .
			'<hr>' .
			'<p class="mb-0">' . 'Your registered Email address is: ' . $_POST['email'] . '</p>' . '<hr>' . '<p class="mb-0">' . 'your password is: ' . $_POST['password'] . ' and the re-entery is: ' . $_POST['passwordConfirm'] . '</p>' . '<hr>' . '<p class="mb-0">' . $subscribtionStatus . '</p>' . '</div>';
	} else {
		echo '<div class="alert alert-warning" role="alert">' .
			'<h4 class="alert-heading">' . 'please fill the form correctly' . '</h4>'
			. '<hr>' . '<p>' . '<b>' . 'you have entered the following data: ' . '</b>' . '</p>'
			.  '<p>' . '<b>' . 'First Name: ' . '</b>' . $_POST['firstName'] . '</p>'
			. '<p>' . '<b>' . 'Last Name: ' . '</b>' . $_POST['lastName'] . '</p>'
			. '<p>' . '<b>' . 'Your registered Email address is: ' . '</b>' . $_POST['email'] . '</p>'
			. '<hr>'
			. '<p>' . '<b>' . 'your password is: ' . '</b>' . $_POST['password'] . '</p>'
			. '<p>' . '<b>' . ' and the re-entery is: ' . '</b>' . $_POST['passwordConfirm'] . '</p>' .  '<p>' . '<b>' . ' please verify' . '</b>' . '</p>' . '</div>';
	}
}
?>



<!-- 
	/*
-- Exercise :

- Part 1 :
Create a page "signin.php", with the following fields:
            - Last Name
            - First name
            - E-mail
            - Password
            - Confirmation of password
            - Checkbox "Subscribe to the newsletter"

When the form is being submitted, we will display the summary of what the user entered.

- Part 2 :

2. Add validations on the different fields of the form:
- The name and the first name are mandatory.
- The e-mail must be between 8 and 50 characters
- The fields "Password" and "Confirmation" must be identical and have at least 8 characters

BONUS: Make the form values ​​reappear with each submission, in case of error. */ -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form checker</title>
</head>
<?php $firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$formError = false;
function required($variable, $Message)
{
    if (isset($_POST['submitBTN'])) {
        if (empty($variable)) {
            $GLOBALS['formError'] = true;
            echo $Message . ' is required !!!';
        }
    }
}
function checkError()
{
    if ($GLOBALS['formError']  = true) {
        echo 'True';
    } else {
        echo "false";
    }
};
function emailCheck($string)
{
    if (strlen($string) < 8 || strlen($string) > 50) {
        $GLOBALS['formError'] = true;
        echo 'br' . 'Invalid Email address !!!' . '<br>' . 'email address should be 8-50 characters.';
    }
};
function passwordCheck($string)
{
    if (strlen($string) < 8) {
        $GLOBALS['formError'] = true;
        echo 'br' . 'Invalid password !!!' . '<br>' . 'password should be 8 characters atleast.';
    }
};
if (isset($_POST['submitBTN'])) {
}
echo '<pre>';
var_dump($_GET);
echo '</pre>';
?>

<body>
    <div class="formContainer">
        <form action="" method="post" class="form">
            <div class="firstNameContainer">
                <div class="firstNameElements"><label for="firstName">first name: </label> <input type="text" name="firstName"></div>
                <div class="firstNameError">
                    <?php
                    required($firstName, 'first name', $formError);
                    //checkError();
                    ?>
                </div>
            </div>
            <div class="lastNameContainer">
                <div class="lastNameElements"><label for="lastName">last name: </label> <input type="text" name="lastName"></div>
                <div class="lastNameError">
                    <?php
                    required($lastName, 'Last name', $formError)
                    //checkError();
                    ?>
                </div>
            </div>
            <div class="emailContainer">
                <div class="emailElements"><label for="email">email adress: </label> <input type="email" name="email"></div>
                <div class="emailError">
                    <?php
                    required($email, 'email adress', $formError);
                    emailCheck($email);
                    checkError();
                    ?>
                </div>
            </div>
            <div class="passwordsMainContainer">
                <div class="PasswordsContainer">
                    <div class="passwordFirstContainer">
                        <div class="passwordFirstElements"><label for="password1">password: </label> <input type="password" name="password1"></div>
                        <div class="passwordFirstError">
                            <?php
                            required($password1, 'password', $formError);
                            passwordCheck($password1);
                            // checkError();
                            ?>
                        </div>
                    </div>
                    <div class="PasswordSecondContainer">
                        <div class="passwordSecondElements"><label for="password2">Confirm: </label> <input type="password" name="password2"></div>
                        <div class="passwordSecondError">
                            <?php
                            required($password2, 'password', $formError);
                            passwordCheck($password2);
                            // checkError();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="newsContainer">
                    <div class="newsElements"><label for="news">Recieve our news letter </label> <input type="checkbox" name="news"></div>
                </div>
                <div class="paswordsMatchingError"></div>
            </div>
            <div class="buttonContainer"><button type="submit" name="submitBTN" class="submitBTN">submit</button></div>
        </form>

    </div>
</body>

</html>
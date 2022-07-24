<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form checker</title>
</head>
<?php
if (isset($_POST['submitBTN'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $subscribtionStatus;
    $formError = array(); // defining the error as an array so the check of existing error will be based on the length or the array which will contain the errores as values to be displayed in a message.
}
function required($variable, $Message, $input)
{
    if (isset($_POST['submitBTN'])) {
        if (empty($variable)) {
            $GLOBALS['formError'][] = $input;
            echo $Message . ' is required !!!';
        }
    }
}
function checkError($array)
{
    if (count($array)  > 0) {
        echo 'True';
    } else {
        echo "false";
    }
};
function emailCheck($string)
{
    if (strlen($string) < 8 || strlen($string) > 50) {
        $GLOBALS['formError'][] = "provided Email address is not valid.";
        echo '<br>' . 'Invalid Email address !!!' . '<br>' . 'email address should be 8-50 characters.';
    }
};
function passwordCheck($string, $Message)
{
    if (strlen($string) < 8) {
        $GLOBALS['formError'][] = $Message;
        echo '<br>' . 'Invalid password !!!' . '<br>' . 'password should be 8 characters atleast.';
    }
};
function formErrors($form)
{
    if (count($form) > 0) {
        if (count($form) < 2) {
            echo 'please correct the folowing error: ';
        } else {
            echo 'please correct the folowing errors: ';
        }
        foreach ($form as $key => $value) {
            echo  '<br>' . '-' . $value . ".";
        }
    } else {
        echo 'Thank you for filling all the fields.';
    }
};
function checkItemToDisplay($item, $title)
{
    if (!empty($item)) {
        echo '<br>' . $title . ' : ' . $item;
    }
};

?>

<body>
    <div class="formContainer">
        <form action="" method="post" class="form">
            <div class="firstNameContainer">
                <div class="firstNameElements"><label for="firstName">first name: </label> <input type="text" name="firstName"></div>
                <div class="firstNameError">
                    <?php
                    if (isset($_POST['submitBTN'])) {
                        required($firstName, 'first name', 'first name is not provided.');
                        //checkError();
                    }
                    ?>
                </div>
            </div>
            <div class="lastNameContainer">
                <div class="lastNameElements"><label for="lastName">last name: </label> <input type="text" name="lastName"></div>
                <div class="lastNameError">
                    <?php if (isset($_POST['submitBTN'])) {
                        required($lastName, 'Last name', 'last name is not provided.');
                        //checkError();
                    }
                    ?>
                </div>
            </div>
            <div class="emailContainer">
                <div class="emailElements"><label for="email">email adress: </label> <input type="email" name="email"></div>
                <div class="emailError">
                    <?php if (isset($_POST['submitBTN'])) {
                        required($email, 'email adress', 'Email address is not provided.');
                        emailCheck($email);
                        // checkError($formError);
                    }
                    ?>
                </div>
            </div>
            <div class="passwordsMainContainer">
                <div class="PasswordsContainer">
                    <div class="passwordFirstContainer">
                        <div class="passwordFirstElements"><label for="password1">password: </label> <input type="password" name="password1"></div>
                        <div class="passwordFirstError">
                            <?php
                            if (isset($_POST['submitBTN'])) {
                                required($password1, 'password', 'password');
                                passwordCheck($password1, 'pasword length');
                                //checkError($formError);
                            }
                            ?>
                        </div>
                    </div>
                    <div class="PasswordSecondContainer">
                        <div class="passwordSecondElements"><label for="password2">Confirm: </label> <input type="password" name="password2"></div>
                        <div class="passwordSecondError">
                            <?php
                            if (isset($_POST['submitBTN'])) {
                                required($password2, 'password', 'password');
                                passwordCheck($password2, 'passowrd re-entery length');
                                // checkError();
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="paswordsMatchingError">
                    <?php if (isset($_POST['submitBTN'])) {
                        if ($password1 != $password2) {
                            $formError[] = 'Passwords do not match.';
                        };
                    } ?>
                </div>
            </div>
            <div class="newsContainer">
                <div class="newsElements"><label for="news">Recieve our newsletter </label><input type="checkbox" name="news"></div>
                <?php if (isset($_POST['submitBTN'])) {
                    if ($_POST['news'] == 'on') {

                        $subscribtionStatus = 'you are subscribed to our newsletter';
                    } else {

                        $subscribtionStatus =    'You are not subscribet to our new letter';
                    };
                } ?>
            </div>
            <div class="buttonContainer"><button type="submit" name="submitBTN" class="submitBTN">submit</button>

            </div>
            <div class="FinalMessage">
                <?php if (isset($_POST['submitBTN'])) {
                    formErrors($formError);
                    echo '<br>';
                    if (count($formError) == 0) {
                        echo  '<p>' . 'Your regestration is completed, your enteries are:' . '</p>';
                    } else {
                        echo '<p>' . 'your enteries are: ' . ' <br>' . '</p>';
                    }
                    checkItemToDisplay($firstName, 'first name');
                    checkItemToDisplay($lastName, 'Last name');
                    checkItemToDisplay($email, 'email adress');
                    checkItemToDisplay($password1, 'password');
                    checkItemToDisplay($password2, 'password re-entery');
                    echo '<p>' . $subscribtionStatus . '</p>';
                } ?>
            </div>
        </form>

    </div>
</body>
<?php
echo '<pre>';
var_dump($_GET);
echo '</pre>';
?>

</html>
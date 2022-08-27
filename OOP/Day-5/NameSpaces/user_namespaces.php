<!-- name space is a vertual folder where it is easy to organise same folder
even if we have the same name used for different classes withought producing any problem. 
defining the namespace happens on the top of the file of the Class. then it is declared when we use the class in the other folder when awe creat an object using that class by adding the namespace defined follwed with backslash "\";
-->
<?php
require_once 'User.php';
require_once './external/User.php';
/*
$user_1 = new Personal\User();
$user_1->do_something();
echo '<br>';
$user_2 = new External\User();
$user_2->do_something();
*/

/*
we can define what we are going to use, 
use Internal\User;
use External\User as ExternalUser;

*/
<!-- cookies is uneversal, ie. it can be accessed from all the pages.
it is client side
it is just a file
it a amsll file so it can not hold a lot of informations.
remmember me 'stay connected' is done by cookies.
cookies have a life time, it can not stay there for long time by the law. 
uf the cookies is refreshed, it will restart the life time.
-->
<?php
//creat coockie
setcookie('userName', 'jack', time() + 20);
setcookie('email', 'jack4@ggm.com', time() + 40);

?>
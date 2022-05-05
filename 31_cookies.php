<?php

//cookeis is samll file store in user's browsers. when the same user request nest time it send cookeis too.

//set cookeis -0-

setcookie("catagory", "books", time() + 86400 *3, "/");

echo "cookeis is set";

?>
<?php

//better way to open a file this fuction gives more options than readfile() fuction
//fisrt we create a file poiter variable


$myfile = fopen("myfile.txt", "r");

if(!$myfile){
    die("unable open the file!!!");
}

echo fread($myfile, filesize("myfile.txt"));
fclose($myfile);//this is very important when we deploying the websites--

?>
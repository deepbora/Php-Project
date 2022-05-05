<?php

//fwrite is use for create a file and write that file
$myfile = fopen("myfile2.txt", "w");

fwrite($myfile, "this the main web developement part\n");

// fwrite($myfile, "this the main web developement part");
// fclose($myfile);

//appending--add end of the text a line
$myfile = fopen("myfile2.txt", "a");

fwrite($myfile, "this the main web developement part2\n");
// $myfile = fopen("myfile2.txt", "a");

// fwrite($myfile, "this the main web developement part2\n");
// $myfile = fopen("myfile2.txt", "r");
// echo fread($myfile, filesize("myfile2.txt"));


?>
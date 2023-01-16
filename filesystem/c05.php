<?php

$file = "c:\\Users\\jmras\\Desktop\\php\\filesystem\\files\\c05.txt";


file_put_contents($file, "Marcury\n");
file_put_contents($file, "Venus\n", FILE_APPEND);

//Append and lock_ex togather
// LOCK_EX for writing
// LOCK_SH for reading

// flock() for locking file with handle. We can use here LOCK_EX, LOCK_SH and others lock constant
file_put_contents($file, "Earth\n", FILE_APPEND | LOCK_EX);
















?>
<?php
$fileHandle = fopen('sarah.text', 'r+');
fclose($fileHandle);

/* 
   fopen(filename, mode, include_path, context)
   fread(handle, length)
   fwrite(handle, string, length)
   fseek(handle, offset, whence) => SEEK_SET, SEEK_CUR, SEEK_END

   modes:

   r: read only[file must exist]
   r+: read and write [file must exist]
   w: write only[open and clear the content] [creat the file if not exist]
   w+: write and read [open and clear the content] [creat the file if not exist]
   a: write only [open and write to the end of file ] [creat the file if not exist]
   a+: write and read [open and write to the end of file] [creat the file if not exist]
   x: write only [creat a new file ] [file must not be exist or give error]
   x+: write and read [creat a new file ] [file must not be exist or give error]

*/   
 
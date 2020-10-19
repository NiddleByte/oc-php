<html>
<head> Hello World ! php </head>
  <h1> This is Updated code </h1>
  <h2> IP :<?php echo exec("/sbin/ifconfig en1 | grep 'inet ' | cut -d ' ' -f2"); ?></h2>
</html>

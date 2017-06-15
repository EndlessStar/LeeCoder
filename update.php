<html>
<body>
<?php
    exec("cd e:\\XAMPP\\htdocs\\LeeCoder",$out);
    echo $out;

    exec("git pull",$out);
    echo $out;
?>
</body>
</html>

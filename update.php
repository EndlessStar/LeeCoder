<html>
<body>
<?php
    exec("cd e:\\XAMPP\\htdocs\\LeeCoder",$out);
    print_r($out);

    exec("git pull",$out);
    print_r($out);
?>
</body>
</html>

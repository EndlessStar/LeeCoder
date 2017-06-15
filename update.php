<html>
<body>
<?php
    exec("cd e:\\XAMPP\\htdocs\\LeeCoder",$out);
    echo "result: $out";

    exec("git pull",$out);
    echo "result: $out";
?>
</body>
</html>

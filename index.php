<!DOCTYPE html>
<html lang="en">
<head>
    <title>Start NG Test Class</title>
</head>
<body>
<?php
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        echo <pre>"Thank you " .$name. ", for your feedback."</pre>;
    }
    
?>
</body>
</html>
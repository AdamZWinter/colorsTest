<?php
if( !isset($_POST['colorPick']) ){
echo 'You did not select a color.';
}else{
$color = $_POST['colorPick'];
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submitted</title>
</head>
<body>

<?php

echo "You chose $color";
?>

</body>
</html>
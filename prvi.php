<!DOCTYPE html>
<html>
<body>

<?php
$naslov=$_POST['option'];
if(isset($_POST['option']))
{
    echo "
    <body>
        <title>
             $naslov
        </title>
    </body>";
}
else{
    echo "checkbox nije odabran";
}
?>

</body>
</html>

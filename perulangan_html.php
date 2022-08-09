<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <p>TUGAS 1</p>
 
 <p>
 <?php
 $i = 100;
 While($i >= 0)
 {
           echo "$i";
           echo "<br />";
           $i-=2;
 }
 ?>
 </p>


 <p>TUGAS 2</p>
 <p>
<?php
for ($i= 8; $i <= 100; $i=$i+10)
{
            echo $i;
            echo "<br />";
}
?>
</p>

</body>
</html>
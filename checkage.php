<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_GET['age_submit'])){
$age = $_GET['age'];
if($age > 18){
echo 'You are eligible';
}
else{
$rem = 18 - $age ;
echo 'sorry, you are not eligible' .$rem ;
}
}
else{

?>
<form action =''>
enter age : <input type='text' name= 'age'>
<input type= 'submit' value='Submit' name='age_submit'>
</form>
<?php
}
?>

</body>
</html>

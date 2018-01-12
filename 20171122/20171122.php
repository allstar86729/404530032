<form action="#" method="post"> 
height:<input type="text" name="tall">m<br> 
weight:<input type="text" name="weight">kg<br>
<form action="#" method="post" enctype="multipart/form-data"> 
<input type="file" name="file" id="file" /><br/>
<input type="submit" name="submit" />
</form>
<?php 
if(count($_POST)){
$tall = pow($_POST['tall'] / 100, 2); 
$weight = $_POST['weight']; 
$BMI = $weight / $tall; 
if($tall !=null && $weight !=null){
echo "height:".$_POST["tall"]."<br>";
echo "weight:".$_POST["weight"]."<br>";
echo "BMI:".$BMI;

} else{
echo 'please type in all information';
}
}

?> 
<?php
if($_FILES["file"]["error"]>0){
echo "wrong file type";
}else{
$filename = $_FILES["file"]["name"];
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
echo '<img src="upload/'.$filename.'"/>';
}
?>
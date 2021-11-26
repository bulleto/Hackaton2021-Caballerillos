<?php 
if(isset($_POST) && !empty($_POST)) {    
    $codesDir = "codes/";   
    $codeFile = date('d-m-Y-h-i-s').'.png';
        echo '<img class="img-thumbnail" src="https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl='.$_POST['formData'].'"/>';
} else {
    header('location:./');
}
?>

<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="proje.css" rel="stylesheet" />

</head>
    <body>
       <label><a class="btn btn-primary"href="index.php">Sitemizde dolaşın</a></label>
      

</body>
<?php

if(isset($_POST['giris']))
{
    $email=$_POST['email'];
    $sifre=$_POST['sifre'];
    if($email=="B191210801@sakarya.edu.tr" && $sifre=="karadenizsitesi")
    {
 

        $email=$_POST['email'];
        echo "<br>";
        echo "Hoşgeldiniz Sayın ".$email;?>
<div class="alert alert-success" role="alert">
  Başarıyla Giriş Yapıldı
</div>   
<div class="alert alert-info" role="alert">
Ödevimi İncelediğiniz İçin Teşekkür Ederim İyi Çalışmalar Sağlıklı Günler Dilerim.
</div>
<div class="container-fluid">
    <ul>
        <li>
    <a href="sehirim.html" class="btn btn-primary">Şehirim</a></li>
    <li> <a href="mirasim.html" class="btn btn-primary">Mirasim</a></li>
    <li>   <a href="mycv.html" class="btn btn-primary">Cv Sayfam</a></li>
    </ul>
    </div> 
   <?php }
    else
    {
        
        Header("Location:index.php?giris=no");
    }
}
?>
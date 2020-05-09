<?php 
if(isset($_POST['gonder']))
 {
    $ad=$_POST['ad'];
    $soyad=$_POST['soyad'];
    $email=$_POST['email'];
    $cinsiyet=$_POST['cinsiyet'];
    $departman=$_POST['departman'];
    $durum=$_POST['acil'];
    $mesaj=$_POST['mesaj'];
    
 }

?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <br>
    <div class="container-fluid">
      <h3>İletmiş Olduğunuz Mesaj Bilgileriniz.</h3>
      <a href="iletisim.html" class="btn btn-info">İletisim Sayfasina Geri Dön</a>
        <?php 
        if($_POST)
        {?>
            <table class="table" >

        <tr>
            <td>İsim</td>
            <td>Soyisim</td>
            <td>Mail</td>
            <td>Cinsiyet</td>
            <td>Departman</td>
            <td>Durumu</td>
            <td>Mesaj</td>
            <td>Sonucu</td>

        </tr>
        <tr>
            <td>
            <label class="alert alert-info"><?php echo $ad ?></label>
        </td>
        <td>
            <label class="alert alert-info"><?php echo $soyad ?></label>
        </td>
        <td>
            <label class="alert alert-info"><?php echo $email ?></label>
        </td>
        <td>
            <label class="alert alert-info"><?php echo $cinsiyet ?></label>
        </td>
        <td>
            <label class="alert alert-info"><?php echo $departman ?></label>
        </td>
        <td>
            <label class="alert alert-info"><?php echo $durum ?></label>
        </td>
        <td>
            <label class="alert alert-info"><?php echo $mesaj ?></label>
        </td>
        <td><a href="javascript:void(0)" class="btn btn-success">Gönderildi</a></td>
        </tr>




        </table>
       
    
<?php        }else {?>
 <label class="alert alert-warning">E-mail Bilgileriniz Boş Gelmektedir......!!!!!</label>
<?php }?>         

    

</div>
</body>
</html>
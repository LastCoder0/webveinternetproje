<!DOCTYPE html>
<html>
  <head>
    <title>Ordu-Karadeniz Yöresi</title>
    <link href="proje.css" rel="stylesheet" />
    <link href="slider.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8" />
  </head>
  <body>
    <script src="slider.js"></script>

    <div class="sayfa">
      <div class="ustResim"></div>
      <div class="solMenu">
        <ul class="menu">
        <li><a href="index.php">Anasayfa</a></li>
            <li><a href="mycv.html">Benim CV</a></li>
            <li><a href="hakkımda.html">Hakkımda</a></li>
            <li><a href="sehirim.html">Sehirim</a></li>
            <li><a href="mirasim.html">Mirasim</a></li>
            <li><a href="iletisim.html">İletişim</a></li>
        </ul>
      </div>
      <div class="icerik">
        <h2  class="renk">Ordu ve Karadeniz Yöresi</h2>

        <div class="slideshow-container " >
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="images/orduboztepe.jpg" style="width:100%;" />

            <div lass="text">Ordu Boztepe Manzarası</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="images/cambasiyayla.jpg" style="width:100%" />
            <div class="text">Çambasi Yaylasi</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="images/sahil.jpg" style="width:100%" />
            <div class="text">Sahil Ordu</div>
          </div>

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br />
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <div class="container" style="width:700px;height:700px;">
         <h2 style="text-align: center;">Ordu Hakkında Özet....</h2>
         <p >İlde birçok tiyatro ve sinema bulunmakta ve düzenli kültürel etkinlikler düzenlenmektedir. Ordu her ne kadar coğrafya kitaplarında Orta ve Doğu Karadeniz bölgelerinde toprağı olan ve her iki bölgeye ait bir il olarak geçmekteyse de(Yeni düzenlemede tamamı Doğu Karadeniz-Düzey1-2 bölgeleri) hemen hemen bütün kültürel özellikleriyle Doğu Karadeniz Bölgesi'ne ait bir ildir. İlde Türkmen/Çepni kültürü hakimdir.

          Ordu halk müziği ve geleneksel halk oyunları çevre illerle benzerlikler göstermektedir. Bağlama ,kemençe, davul-zurna,davul-klarnet (yöresel tabirle gırnata) gibi çalgıların bir arada kullanıldığı yörede oyunlar ilçeden ilçeye değişmekle birlikte karşılama ve horon ağırlıklıdır.
          
          Klarnet yani gırnata çalgısı davul ile birlikte daha çok Vona (Perşembe), Ordu Merkez, Gülyalı, Kabadüz, Ulubey ilçelerinde daha çok Ordu Karşılaması, Giresun Karşılaması, Giresun Sallaması, Gürcü Horonu, Perşembe Erkek Horonu, Sarhoş Karşılaması gibi oyunlara eşlik etmektedir. Kültürel özellikler açısından Ordu ve ilçeleri benzer özellikler gösterse de pek çok farklılıklar da içermektedir.</p>
</div>

      </div>
      <div class="mail">
        <form style="text-align:left;" class="form-group" action="giris.php" method="POST">
          <h3 style="text-align:center">Giriş Yapın</h3>
          <label>Email:B191210801@sakarya.edu.tr</label>
          <br>
          <span class="label label-default"  style="margin-left:25px;"> <b> E-mail:</b></span>
          <input type="text" name="email" style="width:250px;margin-left:15px;" class="form-control" placeholder="E-mail giriniz"required/>
          <br />
          <label>Sifre:karadenizsitesi</label>
          <span class="label label-default" style="margin-left:25px;"><b>Şifre:</b></span>
          <input type="password" name="sifre" class="form-control" style="width:250px;margin-left:15px;" placeholder="Sifre giriniz" required/>
          <br>
      <?php 
      if($_GET)
      {
        if($_GET['giris']=="no")
        {?>
        <div class="alert alert-danger" role="alert">
  E-mail  veya Şifreniz hatalıdır.</div>
       <?php }}?>
      
    
    <br>
          <button type="submit" name="giris"  style="margin-left:45px;" class="btn btn-info">Giriş Yap</button>
        </form>
      </div>
    </div>
  
    <div class="altalan" >
      <p>
        Bu site Ordu Yöresinin Hakkında Bir Tanıtım Sitesidir Bilgiler
        kopyalanamaz.
      </p>
      <p></p>
    </>
  </body>
</html>

<?php

    $isim =$_POST['isim'];
    $soyad =$_POST['soyad'];
    $mail =$_POST['mail'];
    $derece = $_POST['derece'];
    $bolge = $_POST['regions'];
    if(isset($_POST['istek']))
    {
        $istek =$_POST['istek'];
    }
    if(isset($_POST['check']))
    {
        $haber = "checked";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../nav.css">
        <link rel="stylesheet" href="iletisim_css.css">
        <link rel="stylesheet" href="../footer.css">
        <title>Başarılı Bir Şekilde Gönderildi</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="#"><b>Başarılı Bir Şekilde Gönderildi</b></a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="../index.html" class="nav-link ">Hakkımda</a></li>
                    <li class="nav-item "> 
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Şehrim
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="../sehrim/sehrim.html">Şehrim</a>
                      <a class="dropdown-item" href="../sehrim/mirasımız/mirasimiz.html">Mirasımız</a>
                    </div>
                  </li>
                    <li class="nav-item"><a href="../egitim bilgilerim/egitim bilgilerim.html" class="nav-link ">Eğitim Bilgilerim</a></li>
                    <li class="nav-item"><a href="iletisim.html" class="nav-link ">İletişim</a></li>
                    <li class="nav-item"><a href="../login/login.html" class="nav-link">Giriş Yap</a></li>
                </ul>
            </div>
              </nav>
        <section>

                <form action="">
                    <h3>GÖNDERİLEN FORM</h3>
                    <div class="container">
                        <input  class="input-class" type="text" placeholder="Ad" readonly value="<?php echo $isim ?>" >
                    </div>
                    <div class="container">
                        
                        <input  class="input-class" type="text" placeholder="Soyad" readonly value="<?php echo $soyad ?>">
                    </div>
                    <div class="container">
                        <input class="input-class" type="text" placeholder="E-Posta" readonly value="<?php echo $mail ?>">
                    </div>
                    <div class="container" >
                        <h4>Site Memnuniyetiniz</h4>
                        <div class="radio-cont">
                        <input type="radio" id="secilen" name="derece" value="Berbat" checked disabled>
                        <label for="secilen"><?php echo $derece ?></label>
                        </div>
                    </div>
                    <div class="container">
                        <h4>Yaşadığınız Bölgeyi Seçiniz</h4>
                        <div>
                            <select name="regions" id="regions" disabled>
                                <option value="secilen"><?php echo $bolge ?></option>

                                </select>
                        </div>
                    </div>
                    <div class="container">
                        <textarea class="input-class" name="istek" id="istek" maxlength="255" placeholder="Öneri ve Şikayetleriniz..."  readonly><?php echo $istek ?></textarea>
                    </div>
                    <div class="check">
                        <input type="checkbox" name="check" id="check" <?php if(isset($_POST['check']))  echo $haber ?> disabled> 
                        <label for="gonderilsin">Yeniliklerden haberdar olmak isterim</label>
                    </div>
                </form>
        </section>
        <script src="../bootstrap/js/jquery-3.4.1.slim.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script> 
        <script src="../bootstrap/js/fontawesome.js"></script> 
    </body>
</html>
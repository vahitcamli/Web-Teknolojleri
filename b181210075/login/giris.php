<?php
    $var = $_POST['mail-inpt'];
    $pass = $_POST['pass-inpt'];
    $ad = explode("@",$var);
    if($var != 'b181210075@sakarya.edu.tr')
    {
        header("Location:login.html");
    }
    else
    {
        if($pass == "23486445332")
        {
            ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../nav.css">
        <link rel="stylesheet" href="../footer.css">
        <title>Başarılı Giriş</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="#"><b>Başarılı Giriş</b></a>
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
                    <li class="nav-item"><a href="../iletisim/iletisim.html" class="nav-link">İletişim</a></li>
                    <li class="nav-item"><a href="login.html" class="nav-link active">Giriş Yap</a></li>
                </ul>
            </div>
              </nav>
              <header style="text-align:center;font-weight:bold;"><?php echo "Hoşgeldiniz  $ad[0]"; ?></header>
        <script src="../bootstrap/js/jquery-3.4.1.slim.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script> 
        <script src="../bootstrap/js/fontawesome.js"></script> 
    </body>
</html>


            <?php
        }
        else
        {
            header("Location:login.html");
        }
    }
?>


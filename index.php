<!-- <?php 
session_start();
require_once('database/database.php');
require_once('database/auth.php');
// $queryPenghargaan = "SELECT * FROM penghargaan ORDER BY id ASC";
// $resultPenghargaan = mysqli_query($connectDb, $queryPenghargaan);

// if (!$resultPenghargaan) {
//     die("Query failed: " . mysqli_error($connectDb));
// }

// while ($row = mysqli_fetch_assoc($resultPenghargaan)) {
//     print_r($row);
// }
error_reporting(E_ALL);
ini_set('display_errors', 1);
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap">
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <script>
    $(document).ready(function () {
        console.log($('.table').length);
        $('.table').DataTable();
    });
</script>


    <title>Kessoku band</title>
</head>
<body>
    <nav class="hero">
        <div class="overlay">
            <div class="container">
                <div class="logo">
                  <a href="#"><img src="gambar/logo.png" alt="Logo"></a>
                </div>
                <ul class="nav-links">
                  <li><a href="#home">Beranda</a></li>
                  <li><a href="#tentang">Tentang</a></li>
                  <li><a href="#members">Member</a></li>
                  <li><a href="#merch">Shop</a></li>
                  <li><a href="#penghargaan">penghargaan</a></li>
                  <li><a href="#contact">Kontak</a></li>
                  <li><a href="logout.php">Log Out</a></li>
                </ul>
              </div>
        </div>
    </nav>
    <div id="home" class="hero-center">
        <h2>Welcome To Our Band Website</h2>
        <p>Kessoku Band (結束バンド Kessoku Bando) adalah band unit utama Bocchi the Rock! seri. Nama "Kessoku Band" adalah plesetan dari "Kessoku" (kesatuan) dan "Kessoku Band" (pengikat kabel). Band telah ditarik sebagai pusat dari pekerjaan ini. Band unit ini didasarkan pada live house STARRY Shimokitazawa, di mana kakak perempuan Nijika, Seika, adalah manajer toko.</p>
        <a href="#tentang" class="btn">Learn More</a>
    </div>
    <!-- about -->
    <div id="tentang" class="about">
        <div class="container">
            <div class="wrapper">
                <div class="about-images">
                    <div class="imageone">
                        <img class="img-responsive" src="gambar/MV5BZTE3M2JkZjUtODQ4My00NzBlLTllZTctNDBlODcxNDU0MWNmXkEyXkFqcGdeQXVyNjc3NTI5MDY@._V1_.jpg" alt="foto 1">
                    </div>
                </div>
            <div class="about-decs">
                <h4>Tentang Kami</h4>
                <h2>Sejarah Singkat Tentang Band Kami</h2>
                <p>Awalnya band ini dibentuk oleh Nijika (drummer) dan Ryo (bassis), sebelum Kita bergabung sebagai gitaris dan vokalis. Namun, Kita tiba-tiba keluar dari band, memaksa Nijika untuk mencari pengganti, yang membuatnya merekrut Bocchi sebagai gitaris utama baru sebelum penampilan live mereka. </p>
                    <p>Dalam pementasannya, mereka hanya membawakan lagu-lagu instrumental karena masih kekurangan vokalis. Diketahui bahwa Ryo menamai band tersebut dengan kata "cable tie" dalam bahasa Jepang, dan dimaksudkan sebagai plesetan. Kita bergabung kembali dengan band setelah Bocchi merekrutnya kembali ke grup, dan menyelesaikan masalah kurangnya keterampilan yang menjadi alasan dia berhenti.</p>
            </div>
            </div>
        </div>
    </div>
    <!-- member -->
    <div id="mmembers" class="mmember">
    <h2> Member Kessoku Band </h2>
    </div>
    <div id="members" class="member">
        <div class="elfsight-app-85ea54d5-b988-46fb-b2a1-27b87717f715"></div>
    </div>
    <!-- merch -->
    <div id="merch" class="merchandise">
        <h2>merchandise</h2>
        <div class="container">
            <div class="product">
                <img src="gambar/nendroid.jpg" alt="Product Image">
                <h3>Nendroid Hitori Gotoh</h3>
                <p class="price">$29.99</p>
                <a href="#" class="btn">Buy Now</a>
            </div>
            <div class="product">
                <img src="gambar/nendroidn.jpg" alt="Product Image">
                <h3>Nendroid Nijika Ijichi</h3>
                <p class="price">$29.99</p>
                <a href="#" class="btn">Buy Now</a>
            </div>
            <div class="product">
                <img src="gambar/plushieryo.jpg" alt="Product Image">
                <h3>Plushie Ryo Yamada</h3>
                <p class="price">$49.99</p>
                <a href="#" class="btn">Buy Now</a>
            </div>
            <div class="product">
                <img src="gambar/nendroidkita.jpg" alt="Product Image">
                <h3>Nendroid Ikuyo Kita</h3>
                <p class="price">29.99</p>
                <a href="#" class="btn">Buy Now</a>
            </div>
            <div class="product">
                <img src="gambar/shirt.jpg" alt="Product Image">
                <h3>Baju Kessoku Band</h3>
                <p class="price">$9.99</p>
                <a href="#" class="btn">Buy Now</a>
            </div>
            <div class="product">
                <img src="gambar/habis.jpg" alt="Product Image">
                <h3>Nendroid Ryo Yamada</h3>
                <p class="price">$29.99</p>
            </div>
        </div>
    </div>
<!-- experience -->
<section id="penghargaan" class="tasi">
    <h2>Penghargaan Kami</h2>
    <div class="tcontainer">
        <br><br>
        <?php
        $queryPenghargaan = "SELECT * FROM experience ORDER BY id ASC";
        $resultPenghargaan = mysqli_query($connectDb, $queryPenghargaan);

        while ($dataPenghargaan = mysqli_fetch_array($resultPenghargaan)) :
        ?>
         <div class="col-md-4">
            <div class="kotak-penghargaan">
                <h3><?= $dataPenghargaan['title']; ?></h3>
                <p class="deskripsi"><?= $dataPenghargaan['description']; ?></p>
                <p class="date"><?= $dataPenghargaan['date_start']; ?></p>
                <p class="date"><?= $dataPenghargaan['date_end']; ?></p>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>


    <!-- kontak -->
    <section id="contact" class="contact">
        <div class="content">
            <h2>Hubungi Kami</h2>
            <p>Kalian bisa hubungi kami jika anda ingin kami tampil di acara anda atau anda juga bisa kirim mail kepada talent kami</p>    
        </div>
        <div class="Ccontainer">
            <div class="contact-left">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-pin" style="color: pink;"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Jepang, 〒155-0031 Tokyo, Setagaya City, Kitazawa, 2 Chome-6-10 仙田商会仙田ビル B1</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" style="color: pink;"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>+81 3-3466-7430</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-globe-asia" style="color: pink;"></i></div>
                        <div class="text">
                            <h3>Website</h3>
                            <p>http://www.loft-prj.co.jp/SHELTER/</p>
                    </div>
                </div>
            </div>
            <div class="contact-right">
                <div class="concontact">
                    <form action="pesantambah.php" method="post" class="datatamu">
                      <div class="row">
        
                        <div class="col1">
                          <input type="text" name="nama" class="form-control" placeholder="Nama Kamu" required>
                        </div>
        
                        <div class="col2">
                          <input type="email" class="form-control" name="email" placeholder="Email Kamu" required>
                        </div>
        
                        <div class="col4">
                            <textarea class="pesan" name="pesan" rows="6" placeholder="Pesan Kamu" required></textarea>
                        </div>

                        <button class="btn btn-danger" type="submit">Kirim Pesan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
            </section>
        </div>
        </div>
    </section>
</body>
<footer>2023 &copy; Kessoku Band. All Right Reserve</footer>
</html>
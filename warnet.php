<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Phoenix space</title>
    <link rel="stylesheet" href="./css/warnet.css" />
  </head>
  <body>
    <!--Pembuka-->
    <div class="hero">
      <div class="overlay">
        <div class="container">
          <div class="header">
            <img class="logophoenix" src="./img/phoenix.png" alt="" />
            <div class="logo">
              <h1><a href="">Phoenix Space</a></h1>
            </div>
            <div class="navbarmenu">
              <a href="#home">HOME</a>
              <a href="#about">ABOUT</a>
              <a href="#service">SERVICES</a>
              <a href="#pricelist">PRICE LIST</a>
              <a href="#feedback">FEEDBACK</a>
              <a href="#contact">CONTACT</a>
            </div>
          </div>
          <div id="home" class="hero-center">
            <h2>GAMING SPACE TERBAIK DAN TERSERU SEJAKARTA</h2>
            <p>
              Kamu nyari gaming space termurah dan terkeren sejakarta? di
              Phoenix gaming space kamu bisa mainin semua game yang kamu mau
              tanpa khawatir bakal ngelag!
            </p>
            <a href="" class="btn">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    <!--Pembuka-->

    <!--About-->
    <div class="about" id="about">
      <div class="container">
        <div class="wrapper">
          <div class="about-gambar">
            <div class="image-satu">
              <img
                class="img-responsive"
                src="./img/luis-villasmil-ITFwHdPEED0-unsplash.jpg"
                alt=""
              />
            </div>
            <div class="image-dua">
              <img
                class="img-responsive"
                src="./img/taylor-r-BVi74hFpZfc-unsplash.jpg"
                alt=""
              />
            </div>
          </div>
          <div class="about-deskripsi">
            <h4>Tentang kami</h4>
            <h2>Kami menyediakan layanan fasilitas game terbaik!</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus
              dolore nam quisquam, similique laborum iste!
            </p>
            <a href="" class="btn">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    <!--About-->

    <!--Layanan kami-->
    <div id="service" class="services">
      <div class="container">
        <div class="services-title">
          <h2>Layanan</h2>
        </div>
        <div class="wrapper">
          <div class="services-item">
            <img src="./img/fast-food.png" alt="" class="icon" />
            <h4>Makanan dan minuman</h4>
            <p>
              Tersedia banyak varian makanan dan minuman yang bisa dibeli dengan
              harga terjangkau
            </p>
          </div>
          <div class="services-item">
            <img src="./img/loss.png" alt="" class="icon" />
            <h4>Harga Terjangkau</h4>
            <p>
              Walaupun spesifikasi konsol/pc yang ditawarkan berkualitas namun
              harga yang diberikan tetap terjangkau
            </p>
          </div>
          <div class="services-item">
            <img src="./img/broom.png" alt="" class="icon" />
            <h4>Nyaman dan bersih</h4>
            <p>
              Kenyamanan dan kebersihan sangat diutamakan di gaming space kami!
              Setiap ruangan memiliki AC dan bangku yang nyaman
            </p>
          </div>
        </div>
      </div>
    </div>
    <!--Layanan kami-->

    <!--Price List-->
    <section id="pricelist" class="price">
      <h1 id="Price">Price list phoenix gaming space</h1>
      <p class="pricetext">
        Terdapat 4 kategori harga dengan kualitas yang berbeda yang bisa kamu
        pilih!
      </p>

      <div class="pricerow">
        <div class="pricecolumn">
          <img src="./img/pricelist1.jpg" />
          <div class="layer">
            <h3>
              REGULER<br />
              Rp6k/jam
            </h3>
          </div>
        </div>
        <div class="pricecolumn">
          <img src="./img/pricelist2.jpg" />
          <div class="layer">
            <h3>
              VIP<br />
              Rp9k/jam
            </h3>
          </div>
        </div>
        <div class="pricecolumn">
          <img src="./img/pricelist3.jpg" />
          <div class="layer">
            <h3>
              PAKET PAGI<br />
              Rp35k<br />
              06.00AM-12.00PM
            </h3>
          </div>
        </div>
        <div class="pricecolumn">
          <img src="./img/taylor-r-BVi74hFpZfc-unsplash.jpg" />
          <div class="layer">
            <h3>
              PAKET MALAM<br />
              Rp30k<br />
              23.00PM-06.00AM<br />
            </h3>
          </div>
        </div>
      </div>
    </section>
    <!--Price List-->

    <!--Feedback-->
    <div id="feedback" class="feedback">
      <form action="./php/saran.php" method="get">
        <h2 align="center">Beri kami saran</h2>
        <input
          class="input-field"
          type="text"
          name="nama"
          id=""
          placeholder="Masukkan nama anda"
        />
        <input
          class="input-field"
          type="text"
          name="email"
          id=""
          placeholder="Masukkan email anda"
        />
        <input
          class="input-field"
          type="text"
          name="subjek"
          id=""
          placeholder="Masukkan subjek anda"
        />
        <input
          class="input-field textarea-field"
          type="text"
          name="pesan"
          id=""
          placeholder="Masukkan pesan anda"
        />
        <input class="btn2" type="submit" />
      </form>
    </div>
    <!--feedback-->

    <!--Footer-->
    <div id="contact" class="footer">
      <div class="container2">
        <div class="row">
          <div class="footer-col">
            <h4>Bantuan</h4>
            <ul>
              <li><a href="#">Customer service</a></li>
              <li><a href="#">Laporan</a></li>
              <li><a href="#">Saran dan masukan</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Cabang</h4>
            <ul>
              <li><a href="#">Jakarta Pusat</a></li>
              <li><a href="#">Jakarta Selatan</a></li>
              <li><a href="#">Bandung</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Kontak</h4>
            <ul>
              <li>
                <a href="#"
                  ><i class="fa-brands fa-whatsapp">+62812123456</i></a
                >
              </li>
              <li>
                <a href="#"
                  ><i class="fab fa-instagram">@phoenixgamingspace</i></a
                >
              </li>
              <li>
                <a href="#"
                  ><i class="fab fa-twitter">phoenixgamingspace@gmail.com</i></a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script src="/js/warnet.js"></script>
    <!--Footer-->
  </body>
</html>

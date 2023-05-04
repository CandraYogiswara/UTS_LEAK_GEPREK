<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <!--CSS-->
  <link rel="stylesheet" href="style.css" />
  <!--font awesome-->
  <script src="https://kit.fontawesome.com/4654690b34.js" crossorigin="anonymous"></script>
</head>

<body>
  <!--start navbar and sidebar-->
  <nav class="navbar sticky-top nvbr">
    <div class="container-fluid">
      <!--burger button-->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--center menu-->
      <div class="justify-content-center">
        <div class="d-flex navbar">
          <div class="px-2 flex-fill">
            <a class="nav-link" href="matkul.php">Matakuliah</a>
          </div>
          <div class="px-2 flex-fill">
            <a class="nav-link" href="dosen.php">Dosen</a>
          </div>
          <div class="px-2 flex-fill">
            <a class="nav-link" href="ruangan.php">Ruangan</a>
          </div>
          <div class="px-2 flex-fill">
            <a class="nav-link fw-bold" href="mahasiswa.php">Mahasiswa</a>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <!--profile pic-->
        <a class="ml-2">
          <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" class="rounded-circle" height="35" width="35" alt="pp" />
        </a>
      </div>
      <!--off canvas-->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <!--header-->
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">UTS</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!--searchbox-->
        <div class="container">
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-dark" type="submit">Search</button>
          </form>
        </div>
        <!--dropwodwn-->
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="register-page.html">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">About</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!--end navbar and sidebar-->

  <main>
    <!--start content-->
    <div class="container flex vh-100">
      <section class="py-5">
        <!--1-->
        <div class="row align-items-center">
          <div class="col-md-6">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_puciaact.json" background="transparent" speed="1" style="width: 600px; height: 500px" loop autoplay></lottie-player>
          </div>
          <!--tulisan-->
          <div class="col-md-6 align-items-center">
            <h3 class="h4">Hallo</h3>
            <hr />
            <p>
              Selamat datang di web kami! Kami sangat senang Anda telah
              memilih untuk mengunjungi situs kami dan kami berharap Anda
              menemukan informasi yang berguna dan menarik di sini. Terima
              kasih telah berkunjung dan jangan ragu untuk kembali lagi di
              lain waktu!
            </p>
          </div>
        </div>
      </section>
    </div>
  </main>
  <section>
    <div class="container">
      <div class="row">
        <form action="prosesmahasiswa.php" method="POST" class="container" id="needs-validation" novalidate>
          <!--input email-->
          <div class="form-group mb-4">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email" />
          </div>
          <!--input nim-->
          <div class="form-group mb-4">
            <label for="exampleInputPassword1">NIM</label>
            <input name="nim" type="number" class="form-control" name="email" required placeholder="Masukan NIM" />
          </div>
          <!--input nama-->
          <div class="form-group mb-4">
            <label for="exampleInputPassword1">Nama Lengkap</label>
            <input name="nama" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama" />
          </div>
          <div class="row">
            <!--input jurusan-->
            <div class="col-md-6 mb-3">
              <label for="validationCustom01">Jurusan</label>
              <select name="jurusan" class="form-select" aria-label="Default select example">
                <option selected>Klik Untuk Pilih</option>
                <option value="001">Teknologi Informasi</option>
                <option value="002">Sistem Informasi</option>
                <option value="003">Sistem Komputer</option>
              </select>
            </div>
            <!--input nohp-->
            <div class="col-md-6 mb-3">
              <label for="validationCustom02">No HP</label>
              <input name="nohp" type="number" class="form-control" id="validationCustom02" placeholder="Masukann No HP" required />
            </div>
          </div>
          <div class="row">
            <!--input alamat-->
            <div class="col-md-6 mb-3">
              <label for="validationCustom01">Alamat</label>
              <input name="alamat" type="text" class="form-control" id="validationCustom01" placeholder="Masukan Alamat" required />
            </div>
            <!--input gender-->
            <div class="col-md-6 mb-3">
              <label for="validationCustom05">Jenis Kelamin</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" />
                <label class="form-check-label" for="flexRadioDefault1" value="1">
                  Laki-laki
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" checked />
                <label class="form-check-label" for="flexRadioDefault2" value="2">
                  Perempuan
                </label>
              </div>
            </div>
          </div>
          <!--button-->
          <div class="row container justify-content-center">
            <!--button-->
            <button input type="submit" value="simpan" class="btn btn-block mt-2 bg-primary btn-dark" role="button" style="width: 50%">
              Simpan
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!--start tabel-->
  <section>
    <table class="table container mt-4">
      <thead>
        <tr>
          <th scope="col">NIM</th>
          <th scope="col">Nama</th>
          <th scope="col">Kode Jurusan</th>
          <th scope="col">Gender</th>
          <th scope="col">Alamat</th>
          <th scope="col">No HP</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <?php
      include "koneksi.php";
      $qry = "SELECT * FROM mahasiswa";
      $exec = mysqli_query($con, $qry);

      while ($data = mysqli_fetch_assoc($exec)) {
      ?>
        <tr>
          <td><?= $data['nim'] ?></td>
          <td><?= $data['nama'] ?></td>
          <td><?= $data['jurusan'] ?></td>
          <td><?= $data['gender'] == 1 ? "Laki-Laki" : "Perempuan" ?></td>
          <td><?= $data['alamat'] ?></td>
          <td><?= $data['nohp'] ?></td>
          <td><?= $data['email'] ?></td>
          <td>
            <a href="editmahasiswa.php?nim=<?= $data['nim'] ?>"><button>Edit</button></a>
            <a href="deletemahasiswa.php?nim=<?= $data['nim'] ?>"><button>Delete</button></a>
          </td>
        </tr>
      <?php } ?>
    </table>
    <!--end tabel-->
    <div class="container flex justify-content-center"></div>
  </section>
  <!--end content-->

  <!-- start footer -->
  <footer class="text-center text-lg-start text-white fter">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Contact:</span>
      </div>
      <!-- Left -->
      <!-- Right -->
      <div>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
    <!-- Section: Links  -->
    <section>
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="fw-bold mb-4">UTS</h6>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore
              quas nisi assumenda, quod consequuntur repellendus, perspiciatis
              ipsum tenetur fugiat quae expedita beatae incidunt facere? Odit
              rerum hic eveniet ad doloribus?
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Nim Kelompok</h6>
            <p>
              <a href="#" class="text-reset">210040019</a>
            </p>
            <p>
              <a href="#" class="text-reset">210040006</a>
            </p>
            <p>
              <a href="#" class="text-reset">210040163</a>
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
            <p>
              <a href="#" id="scroll-to-top" class="text-reset">Scroll to top</a>
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Bali, Indonesia</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              idk@icloud.com
            </p>
            <p>
              <i class="fas fa-brands fa-whatsapp me-3"></i> 082-145-577-898
            </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  </footer>
  <!-- end footer -->
  <!--lottiefiles script-->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
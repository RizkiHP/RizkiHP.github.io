<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Icons Title -->
    <link rel="icon" href="img/icons.png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <title>My Portfolio | Rizki Hadi Prayitno</title>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">RHP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#home">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <section id="home" class="jumbotron text-center">
      <img src="img/foto.jpg" class="rounded-circle img-thumbnail" alt="Rizki Hadi Prayitno" width="200" height="200" />
      <h1 class="display-4">Rizki Hadi Prayitno</h1>
      <p class="lead">Web Developer</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,192L40,202.7C80,213,160,235,240,240C320,245,400,235,480,224C560,213,640,203,720,192C800,181,880,171,960,160C1040,149,1120,139,1200,144C1280,149,1360,171,1400,181.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- End Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col text-center mb-3">
            <h2 class="text-decoration-underline">Abuot Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4 mb-3">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint ipsam, explicabo rerum non obcaecati ab aspernatur maiores dignissimos dolorem molestiae?</p>
          </div>
          <div class="col-md-4 mb-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dicta, asperiores a cupiditate, expedita ab suscipit ex architecto nulla, sequi est sit ipsa. Dolorum, sapiente.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,192L40,202.7C80,213,160,235,240,240C320,245,400,235,480,224C560,213,640,203,720,192C800,181,880,171,960,160C1040,149,1120,139,1200,144C1280,149,1360,171,1400,181.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- End About -->

    <!-- Projects -->
    <section id="projects">
      <div class="container">
        <div class="row">
          <div class="col text-center mb-3">
            <h2 class="text-decoration-underline">My Projects</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mt-3">
            <div class="card">
              <img src="img/projects/1.jpg" class="card-img-top" alt="Projects 1" />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's content. Photo by <a href="https://unsplash.com/@xps?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">XPS</a> on
                  <a href="https://unsplash.com/@xps?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3">
            <div class="card">
              <img src="img/projects/2.jpg" class="card-img-top" alt="Projects 2" />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's content. Photo by <a href="https://unsplash.com/@xps?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">XPS</a> on
                  <a href="https://unsplash.com/@xps?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3">
            <div class="card">
              <img src="img/projects/3.jpg" class="card-img-top" alt="Projects 3" />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's content. Photo by <a href="https://unsplash.com/@xps?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">XPS</a> on
                  <a href="https://unsplash.com/@xps?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3">
            <div class="card">
              <img src="img/projects/4.jpg" class="card-img-top" alt="Projects 4" />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's content. Photo by <a href="https://unsplash.com/@xps?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">XPS</a> on
                  <a href="https://unsplash.com/@xps?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3">
            <div class="card">
              <img src="img/projects/5.jpg" class="card-img-top" alt="Projects 5" />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's content. Photo by <a href="https://unsplash.com/@xps?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">XPS</a> on
                  <a href="https://unsplash.com/@xps?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,192L40,202.7C80,213,160,235,240,240C320,245,400,235,480,224C560,213,640,203,720,192C800,181,880,171,960,160C1040,149,1120,139,1200,144C1280,149,1360,171,1400,181.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- End Projects -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col text-center mb-3">
            <h2 class="text-decoration-underline">Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap :</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="telp" class="form-label">Nomor Telepon :</label>
                <input type="text" class="form-control" id="telp" aria-describedby="telp" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan :</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="kirim" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0d6efd"
          fill-opacity="1"
          d="M0,192L40,202.7C80,213,160,235,240,240C320,245,400,235,480,224C560,213,640,203,720,192C800,181,880,171,960,160C1040,149,1120,139,1200,144C1280,149,1360,171,1400,181.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- End Contact -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-5">
      <p>Created with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="https://www.instagram.com/rizki_hp/" target="_blank" class="text-white fw-bold">Rizki Hadi Prayitno</a>.</p>
      <?php
        $filename = 'counter.txt'; //mendefinisikan nama file untuk menyimpan counter
 
        function counter() { //function counter
          global $filename;	//set global variabel $filename
        
          if (file_exists($filename)) {	//jika file counter.txt ada
            $value = file_get_contents($filename); //set value = nilai di notepad
          } else { //jika file counter.txt tidak ada maka akan membuat file counter.txt
            $value = 0; //kemudian set value = 0
          } 
          file_put_contents($filename, ++$value); //menuliskan kedalam file counter.txt value+1
        }
        counter(); //menjalankan function counter
      ?>

      <!-- Menampilakan Counter di Website -->
      <p>Total Visitor : <i class="bi bi-people-fill"></i> <?php echo file_get_contents($filename); ?></p>
    </footer>
    <!-- End Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

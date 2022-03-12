<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- external css -->
    <link type="text/css" rel="stylesheet" href="{!! asset('assets/style.css') !!}">

    <title>Home | Luthfi</title>
  </head>
  <body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: orange;" >
		<div class="container">
			<a class="navbar-brand" href="#">Portfolio Page</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Masterpieces</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" href="#">Service</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
	<!-- navbar end -->

    <!-- jumbotron -->
    <section class="jumbotron jumbotron-fluid text-center">
        <img src="{!! asset('storage/luthfi.png') !!}" width="180" class="rounded-circle img-thumbnail mt-5">
        <div class="container mt-4">
            <h1 class="display-6">Muhamad Luthfi Bangun Permadi</h1>
            <p class="lead">Backend Developer | Network Engineer</p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L40,181.3C80,203,160,245,240,229.3C320,213,400,139,480,128C560,117,640,171,720,181.3C800,192,880,160,960,176C1040,192,1120,256,1200,261.3C1280,267,1360,213,1400,186.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    <!-- jumbotron end -->

    <!-- about -->
    
    <section id="about">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row text-start justify-content-center fs-6">
                <div class="col-md-4">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure cum deserunt voluptatem reiciendis? Explicabo distinctio eius, exercitationem, fugit facilis hic veniam consequuntur iusto unde porro maxime quaerat earum odit tenetur sapiente doloremque et voluptatum in, cumque natus officia consequatur soluta fugiat magnam! Nemo labore pariatur maxime molestias? Quaerat quam magni ut deleniti aut quidem aperiam rem odit. Iure, reprehenderit quia!</p>
                </div>
                <div class="col-md-4">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium nostrum ea culpa hic delectus consectetur fuga aspernatur asperiores eum voluptatem distinctio esse totam ab beatae amet perferendis, repudiandae vel dignissimos facilis. Aspernatur dolor ad ducimus quisquam, ex sint id consectetur earum repellat sit itaque placeat fugiat dolorum, consequuntur rem iste. Dicta in earum ad maxime impedit.</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#faf79f" fill-opacity="1" d="M0,64L40,80C80,96,160,128,240,128C320,128,400,96,480,85.3C560,75,640,85,720,90.7C800,96,880,96,960,112C1040,128,1120,160,1200,149.3C1280,139,1360,85,1400,58.7L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    <!-- about end -->

    <!-- projects -->
    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4">
                    <h2>My Projects</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <img src="{!! asset('storage/projects/1.jpg') !!}" class="card-img-top" alt="project-1">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <img src="{!! asset('storage/projects/2.jpg') !!}" class="card-img-top" alt="project-2">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <img src="{!! asset('storage/projects/3.jpg') !!}" class="card-img-top" alt="project-3">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <img src="{!! asset('storage/projects/4.jpg') !!}" class="card-img-top" alt="project-4">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <img src="{!! asset('storage/projects/5.jpg') !!}" class="card-img-top" alt="project-5">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <img src="{!! asset('storage/projects/6.jpg') !!}" class="card-img-top" alt="project-6">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L40,112C80,128,160,160,240,186.7C320,213,400,235,480,245.3C560,256,640,256,720,224C800,192,880,128,960,133.3C1040,139,1120,213,1200,234.7C1280,256,1360,224,1400,208L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    <!-- projects end -->

    <!-- contact -->
    <section id="contact">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap:</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name"> 
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <label for="msg" class="form-label">Pesan:</label>
                            <textarea class="form-control" id="msg" rows="3" style="resize: none;" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->

    <!-- footer -->
    <footer class="bg-light text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #3b5998;"
              href="#!"
              role="button"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #55acee;"
              href="#!"
              role="button"
              ><i class="fab fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #dd4b39;"
              href="#!"
              role="button"
              ><i class="fab fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #ac2bac;"
              href="#!"
              role="button"
              ><i class="fab fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #0082ca;"
              href="#!"
              role="button"
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <!-- Github -->
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #333333;"
              href="#!"
              role="button"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: orange;color: black;">
          © 2020 Copyright:
          <a class="text-white" href="https://www.instagram.com/luthfibgn/">Muhamad Luthfi</a>
        </div>
        <!-- Copyright -->
    </footer>
    {{-- <footer>
        <p>Created with enthusiast by <a href="https://www.instagram.com/luthfibgn/">Muhamad Luthfi</a></p>
    </footer> --}}
    <!-- footer end -->
  </body>
</html>

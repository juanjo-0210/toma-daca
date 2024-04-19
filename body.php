<?php
include 'header.php';
include 'categoria.php';
$cat = new categoria;
?>



<div class="wrapper">





            <main class="container-fluid row">
                <section class="row col-lg-9" style="padding:3%">
                    <article class="col-4" style="width: 30rem">
                      <div class="card">  
  
                        <div id="carouselExampleControls" class="carousel slide"  data-bs-interval="false" >
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="https://placehold.co/600x350" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="https://placehold.co/600x350" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="https://placehold.co/600x350" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                       
                        <div class="card-body">
                            <h5 class="card-title">Producto</h5>
                            <p class="card-text text-truncate">Este es un producto de ejemplo Este es un producto de ejemplo Este es un producto de ejemplo</p>
                            <a href="#" class="btn btn-primary">Me Interesa</a>
                        </div>
                      </div> 

                    </article>

                    <article class="col-4" style="width: 30rem">
                      <div class="card">  

                        <div id="carouselExampleControls2" class="carousel slide" data-bs-interval="false" >
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="https://placehold.co/600x350" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="https://placehold.co/600x350" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="https://placehold.co/600x350" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                       
                        <div class="card-body">
                            <h5 class="card-title">Producto</h5>
                            <p class="card-text">Este es un producto de ejemplo</p>
                            <a href="#" class="btn btn-primary">Me Interesa</a>
                        </div>
                      </div> 

                    </article>

                    <article class="col-4" style="width: 30rem">
                      <div class="card">  

                        <div id="carouselExampleControls3" class="carousel slide" data-bs-interval="false">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="https://placehold.co/600x350" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="https://placehold.co/600x350" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="https://placehold.co/600x350" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                       
                        <div class="card-body">
                            <h5 class="card-title">Producto</h5>
                            <p class="card-text">Este es un producto de ejemplo</p>
                            <a href="#" class="btn btn-primary">Me Interesa</a>
                        </div>
                      </div> 

                    </article>

                </section>
                <aside class="col-3 d-none d-lg-block">
                    <h2>Categoria</h2>
                    <?php  $cat->getCategoria(); ?>
                </aside>
            </main>

            <footer>
                <section>  </section>
                <section></section>
                <section></section>
            </footer>
        </div>
                          
                          <script>
                            function hola(){
                             var dis = document.getElementById("carouselExampleControls3");
                               dis.setAttribute("data-bs-interval","1000");
                            }
                          </script>
        
    </body>
</html>
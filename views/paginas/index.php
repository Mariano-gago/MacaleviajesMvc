<section class="carrousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active banner">
                    <img src="build/img/carrousel-egipto.png" class=" d-block " alt="Banner 1">
                    <div class="carousel-caption d-none d-md-block banner-text">
                        <h5>Bienvenidos!!!</h5>
                        <p>Aqui encontraras todo lo necesario para tu proximo viaje</p>
                    </div>
                </div>
                <div class="carousel-item banner">
                    <img src="build/img/carrousel-glaciar.webp" class="d-block w-100"  alt="Banner 2">
                    <div class="carousel-caption d-none d-md-block banner-text">
                        <h5>vuelos</h5>
                        <p>Precios promocionales en todas las temporadas</p>
                    </div>
                </div>
                <div class="carousel-item banner">
                    <img src="build/img/carrousel-paisaje.webp" class="d-block w-100" alt="Banner 3">
                    <div class="carousel-caption d-none d-md-block banner-text">
                        <h5>Hoteles</h5>
                        <p>Te asesoramos de acuerdo a tu presupuesto</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <main>
        <section class="content">
            <div class="titulo">
                <h1 class="titulo-lineas">Destinos Destacados</h1>
            </div>
            <div class="cards">
                <?php 
                include 'listadoViajes.php';
                ?>               
            </div>
        </section>
    </main>

    <!-- Seccion de banner promocion-->
    <section class="banner-promos">
        <div class="promos content">       
                <figure class="snip0015">
                    <img src="/build/img/auto.jpg" alt="Alquiler Autsos"/>
                    <figcaption>
                        <h2>Alquiler de <span>autos</span></h2>
                        <p>Todas las opciones para vos!</p>
                        <a href="#"></a>
                    </figcaption>			
                </figure>
                
                <figure class="snip0015">
                    <img src="/build/img/MSC-Cruceros.jpg" alt="Cruceros"/>
                    <figcaption>
                        <h2><span>Cruceros</span></h2>
                        <p>Consultanos!!</p>
                        <a href="#"></a>
                    </figcaption>			
                </figure>
                <figure class="snip0015">
                    <img src="/build/img/previaje.jpg" alt="previaje"/>
                    <figcaption>
                        <h2><span>Previaje</span></h2>
                        <p>Te ayudamos a encontrar los comercios habilitados!</p>
                        <a href="#"></a>
                    </figcaption>			
                </figure>
        </div>
        
    </section>
    <section class="boxes">
            <div class="box content">
                <div class="box-card">
                    <div class="box-img">
                        <span class="iconify" data-icon="bxs:medal" style="color: #2a4c54;" data-width="50" data-height="50" data-rotate="180deg"></span>
                    </div>
                    <div class="box-descripcion">
                        <h3>Calidad de Servicio</h3>
                        <p>Con más de 10 años en el mercado, contamos con un equipo especializado que viaja asiduamente
                            para ofrecer las mejores recomendaciones sobre destinos, vuelos, hoteles y excursiones.
                        </p>
                    </div>
                </div> 

                <div class="box-card">
                    <div class="box-img">
                        <span class="iconify" data-icon="fluent:person-call-24-filled" style="color: #2a4c54;" data-width="50" data-height="50"></span>
                    </div>
                    <div class="box-descripcion">
                        <h3>Asistencia</h3>
                        <p>Estamos a tu disposición durante todo el viaje para brindar sugerencias, cuidar los detalles y resolver cualquier imprevisto.</p>
                    </div>
                </div>
                    
                <div class="box-card">
                    <div class="box-img">
                        <span class="iconify" data-icon="bx:credit-card" style="color: #2a4c54;" data-width="50" data-height="50"></span>
                    </div>
                    <div class="box-descripcion">
                        <h3>Financiacion</h3>
                        <p>Te asesoramos sobre las mejores promociones del mercado para que puedas realizar tus pagos de la mejor manera.</p>
                    </div>
                </div>
                
                <div class="box-card">
                    <div class="box-img">
                        <span class="iconify" data-icon="fontisto:paper-plane" style="color: #2a4c54;" data-width="50" data-height="50"></span>
                    </div>
                    <div class="box-descripcion">
                        <h3>Viajeros</h3>
                        <p>Somos viajeros al igual que tú. Expertos diseñadores de viaje. Personalizamos tus vacaciones en base a tus intereses y preferencias.</p>
                    </div>
                </div>
            </div>
    </section>
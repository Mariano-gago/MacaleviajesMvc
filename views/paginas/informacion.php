

<main>
    <section class="content">
        <?php foreach($viajes  as $destino):?>
        <div class="card mb-3 card-position" style="max-width: 100%;">
        
            <div class="row g-0">
                <div class="col-md-4">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                        
                            <div class="carousel-item active">
                                <img src="../../imagenes/<?php echo $destino->imagen1;?>" class="d-block w-100" alt="Imagen <?php echo $destino->destino;?>">
                            </div>
                            <div class="carousel-item">
                                <img src="../../imagenes/<?php echo $destino->imagen2;?>" class="d-block w-100" alt="Imagen <?php echo $destino->destino;?>">
                            </div>
                            <div class="carousel-item">
                                <img src="../../imagenes/<?php echo $destino->imagen3;?>" class="d-block w-100" alt="Imagen <?php echo $destino->destino;?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $destino->destino;?></h5>
                        <p class="card-text"><?php echo $destino->descripcion;?></p>
                        <p>Incluye:</p>
                        <div class="card-text">
                            <?php 
                            $opciones = [$destino->aereos, $destino->traslado, $destino->hotel, $destino->excursiones];
                            //debuger($opciones);
                            foreach($opciones as $opcion): ?>
                                <?php if($opcion != ''):?>
                                    <ul>
                                        <li><?php echo $opcion; ?></li> 
                                    </ul>                                            
                                <?php endif;?>
                            <?php endforeach;?>
                            <p class="precio"><span>U$D <?php echo $destino->precio;?></span></p>
                        </div>
                    </div>
                    <button type="button" id="button-consulta" value="<?php echo $destino->idViaje;?>" class="button button-celeste button-celeste__info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Envianos tu consulta!
                    </button>
                </div>
            </div>
            
        </div>
        <?php endforeach;?>
    </section>

    <?php foreach($viajes  as $destino):?>
    <div>
    
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        
                        <h5 class="modal-title" id="staticBackdropLabel"><?php echo $destino->idViaje;?>Consulta por Viaje a <?php echo $destino->destino;?></h5>
                        
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="formulario" action="/informacion" method="POST">
                            
                            <input type="text" hidden name="consulta[idViaje]" value="<?php echo $destino->idViaje;?>">
                            <input type="text" hidden name="consulta[destino]"  value="<?php echo $destino->destino;?>">
                            <input type="text" hidden name="consulta[descripcion]"  value="<?php echo $destino->descripcion;?>">
                        
                        
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" placeholder="Tu Nombre" name="consulta[nombre]" required>
            
                            <label for="apellido">Apellido</label>
                            <input type="text" id="apellido" placeholder="Tu Apellido" name="consulta[apellido]" required>
            
                            <label for="email">Email</label>
                            <input type="email" id="email" placeholder="Tu Email" name="consulta[email]" required>
                            
                            <label for="telefono">Telefono</label>
                            <input type="tel" id="telefono" placeholder="Tu Telefono" name="consulta[telefono]" required>
                            
                            <label for="mensaje">Consulta</label>
                            <textarea id="mensaje" name="consulta[mensaje]" required></textarea>
                            
                            <input type="submit" class="button button-verde" value="Enviar">

                            <button class="button button-rojo" data-bs-dismiss="modal">Cerrar</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>

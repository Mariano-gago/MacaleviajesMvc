<main>
        <div class="banner-destinos">
            <h1 class="titulo-nosotros">Destinos</h1>
        </div>

        <div class="content">

            <div class="titulo">
                <h2 class="titulo-lineas">Nacionales</h2>
            </div>
            <div class="cards">
                <!-- Card-->
                <?php foreach($viajes  as $viaje):?>
                    <?php if(strtoupper($viaje->continente) === "NACIONAL"):?>
                    <div class="content-card">
                        
                        
                        <picture>
                            <img class="img-card" src="/imagenes/<?php echo $viaje->imagen1;?>" alt="Imagen <?php echo $viaje->destino;?>">
                        </picture>
                        <div class="iconos">
                            <ul>
                                <li><img src="/imagenes/<?php echo $viaje->icono1;?>"></li>
                                <li><img src="/imagenes/<?php echo $viaje->icono2;?>"></li>
                                <li><img src="/imagenes/<?php echo $viaje->icono3;?>"></li>
                            </ul>
                        </div>
                        <div class="card-texto">
                            <h2><?php echo $viaje->destino;?></h2>
                            <p class="precio"><span>Desde </span>U$D<?php echo $viaje->precio;?></p>
                        </div>
                        <div >
                        
                            <a class="button-celeste" href="/informacion?destino=<?php echo $viaje->destino;?>">Ver Paquete</a>
                        </div>
                        
                    </div>
                    <?php endif;?>
                    <?php endforeach;?>
            </div>
            
            <div class="titulo">
                <h2 class="titulo-lineas">Internacionales</h2>
            </div>
            <div class="cards">
            <?php foreach($viajes  as $viaje):?>
                    <?php if(strtoupper($viaje->continente) === "INTERNACIONAL"):?>
                        <div class="content-card">
                        
                        
                        <picture>
                            <img class="img-card" src="/imagenes/<?php echo $viaje->imagen1;?>" alt="Imagen <?php echo $viaje->destino;?>">
                        </picture>
                        <div class="iconos">
                            <ul>
                                <li><img src="/imagenes/<?php echo $viaje->icono1;?>"></li>
                                <li><img src="/imagenes/<?php echo $viaje->icono2;?>"></li>
                                <li><img src="/imagenes/<?php echo $viaje->icono3;?>"></li>
                            </ul>
                        </div>
                        <div class="card-texto">
                            <h2><?php echo $viaje->destino;?></h2>
                            <p class="precio"><span>Desde </span>U$D<?php echo $viaje->precio;?></p>
                        </div>
                        <div >
                        
                            <a class="button-celeste" href="/informacion?destino=<?php echo $viaje->destino;?>">Ver Paquete</a>
                        </div>
                        
                    </div>
                <?php endif;?>
                <?php endforeach;?>
            </div>

            <div class="titulo">
                <h2 class="titulo-lineas">Caribe</h2>
            </div>
            <div class="cards">
                <!-- Card-->
                <?php foreach($viajes  as $viaje):?>
                    <?php if(strtoupper($viaje->continente) === "CARIBE"):?>
                    <div class="content-card">
                        
                        
                        <picture>
                            <img class="img-card" src="/imagenes/<?php echo $viaje->imagen1;?>" alt="Imagen <?php echo $viaje->destino;?>">
                        </picture>
                        <div class="iconos">
                            <ul>
                                <li><img src="/imagenes/<?php echo $viaje->icono1;?>"></li>
                                <li><img src="/imagenes/<?php echo $viaje->icono2;?>"></li>
                                <li><img src="/imagenes/<?php echo $viaje->icono3;?>"></li>
                            </ul>
                        </div>
                        <div class="card-texto">
                            <h2><?php echo $viaje->destino;?></h2>
                            <p class="precio"><span>Desde </span>U$D<?php echo $viaje->precio;?></p>
                        </div>
                        <div >
                        
                            <a class="button-celeste" href="/informacion?destino=<?php echo $viaje->destino;?>">Ver Paquete</a>
                        </div>
                        
                    </div>
                    <?php endif;?>
                    <?php endforeach;?>
            </div>

        </div>
    </main>

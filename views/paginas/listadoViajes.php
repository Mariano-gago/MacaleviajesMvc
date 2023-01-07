
<?php foreach($viajes as $viaje):?>
<div class="content-card">
    
    <picture>
        <img class="img-card" src="/imagenes/<?php echo $viaje->imagen1;?>" alt="Imagen <?php echo $viaje->destino;?>">
    </picture>
    <div class="iconos">
        <ul>
            <li><img src="../imagenes/<?php echo $viaje->icono1;?>"></li>
            <li><img src="../imagenes/<?php echo $viaje->icono2;?>"></li>
            <li><img src="../imagenes/<?php echo $viaje->icono3;?>"></li>
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
<?php endforeach;?>


<main>
    <div class="container-fluid">
        <h1>Administrador De MacaleViajes</h1>

        <?php 
        
        if($registrado):
            if($registrado === '1'):?>
                <p class="alerta exito">Viaje creado correctamente</p>
                <?php elseif($registrado === '2'):?>
                    <p class="alerta exito">Viaje actualizado correctamente</p>
                <?php elseif($registrado === '3'):?>
                    <p class="alerta exito">Viaje eliminado correctamente</p>
            <?php endif;?>
            <?php endif;?>
            <a class= "button button-verde radius" href="/viajes/crear">Nuevo Viaje</a>
            <section>
                <table class="viajes table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Destino</th>
                            <th>Precio</th>
                            <th>Iconos</th>
                            <th>Descripcion</th>
                            <th>Imagenes</th>
                            <th>Categoria</th>
                            <th>Continente</th>
                            <th>Aereos</th>
                            <th>Traslado</th>
                            <th>Hotel</th>
                            <th>Excursiones</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody> <!-- Muestra resultados base de datos-->
                        <?php foreach($viajes as $viaje):;?>
                        <tr>
                            <th><?php echo $viaje->idViaje;?></th>
                            <th><?php echo $viaje->destino;?></th>
                            <th>$<?php echo $viaje->precio;?></th>
                            <th>
                                <img src="../imagenes/<?php echo $viaje->icono1;?>" class="imagen-tabla">
                                <img src="../imagenes/<?php echo $viaje->icono2;?>" class="imagen-tabla">
                                <img src="../imagenes/<?php echo $viaje->icono3;?>" class="imagen-tabla">
                            </th>
                            <th><?php echo $viaje->descripcion;?></th>
                            <th>
                                <img src="../imagenes/<?php echo $viaje->imagen1;?>" class="imagen-tabla">
                                <img src="../imagenes/<?php echo $viaje->imagen2;?>" class="imagen-tabla">
                                <img src="../imagenes/<?php echo $viaje->imagen3;?>" class="imagen-tabla">
                            </th>
                            <th><?php echo $viaje->categoria;?></th>
                            <th><?php echo $viaje->continente;?></th>
                            <th><?php echo $viaje->aereos;?></th>
                            <th><?php echo $viaje->traslado;?></th>
                            <th><?php echo $viaje->hotel;?></th>
                            <th><?php echo $viaje->excursiones;?></th>
                            <th>
                                <form method="POST" class="w-100" action="/viajes/eliminar">
                                    <input type="hidden" name="id" value="<?php echo $viaje->idViaje;?>">
                                    <input class="button-rojo_block radius" type="submit" value="Eliminar">
                                </form>
                                
                                <a class="button-amarillo_block radius" href="/viajes/actualizar?id=<?php echo $viaje->idViaje;?>">Actualizar</a>
                            </th>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                    
                </table>
            </section>
        </div>

        
    </main>
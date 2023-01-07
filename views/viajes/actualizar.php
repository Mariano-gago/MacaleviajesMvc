<main class="content">
    <div>
        <h1>Actualizar Viaje</h1>
        <a href="/admin" class="button button-verde">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach;?>
        <form class="formulario" method="POST" enctype="multipart/form-data">
            <?php include __DIR__ . '/formulario.php' ?>
            <input type="submit" class="button button-verde" value="Actualizar Viaje">
        </form>
        
    </div>
</main>
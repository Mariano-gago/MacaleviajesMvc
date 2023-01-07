<main>
        <div class="titulo content">
            <h1 class="titulo-lineas">Iniciar Sesion</h1>
        </div>
        
            <?php foreach ($errores as $error): ?>
                <div class="alerta error">
                    <?php echo $error;?>
                </div>
            <?php endforeach;?>
        
        <section class="content">
            <form method="POST" action="/login" class="formulario content content-center">
                <fieldset>
                    <legend>Email y Password</legend>
    
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Tu Email" >
                    
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" >
                    
                </fieldset>

                <input type="submit" value="Iniciar Sesion" class="button button-celeste">
            </form>
        </section>
        
    </main>
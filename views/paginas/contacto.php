<main>
        <div class="imagen-contacto">
        </div>
        <div class="titulo">
            <h2 class="titulo-lineas">Contacto</h2>
        </div>
        
        <section class="content">
            <form class="formulario" action="/contacto" method="POST" >
                <fieldset>
                    <legend>Informacion Personal</legend>
    
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" placeholder="Tu Nombre" name="contacto[nombre]" required >
    
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" placeholder="Tu Apellido" name="contacto[apellido]" required>
    
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Tu Email" name="contacto[email]" required>
                    
                    <label for="telefono">Telefono</label>
                    <input type="tel" id="telefono" placeholder="Tu Telefono" name="contacto[telefono]">
                    
                    <label for="mensaje">Consulta</label>
                    <textarea id="mensaje" name="contacto[mensaje]" required></textarea>
                </fieldset>
                <input type="submit" value="Enviar" class="button-verde_block">
            </form>
        </section>
        
    </main>
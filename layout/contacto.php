<?php require('../layout/header.php') ?>

<h2>CONTACTENOS</h2>
<br>
<form action="../resultados/procesar_formulario.php" method="post">
        <label for="txtnomape">Nombres y Apellidos:</label>
        <input type="text" name="txtnomape" id="txtnomape" required><br>

        <label for="txtcorreo">Correo:</label>
        <input type="email" name="txtcorreo" id="txtcorreo" required><br>

        <label for="txttelefono">Teléfono:</label>
        <input type="tel" name="txttelefono" id="txttelefono" required><br>

        <label for="txtedad">Edad:</label>
        <input type="number" name="txtedad" id="txtedad" required><br>

        <label for="txtsexo">Sexo:</label>
        <select name="txtsexo" id="txtsexo" required>
            <option value="">Seleccionar</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="Otros">Otros</option>
        </select><br>

        <label for="txtnacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="txtnacimiento" id="txtnacimiento" required><br>

        <label for="txtgrado">Grado:</label>
        <select name="txtgrado" id="txtgrado" required>
            <option value="">Seleccionar</option>
            <option value="inicial">Inicial</option>
            <option value="primero">Primero de Primaria</option>
            <option value="segundo">Segundo de Primaria</option>
            <option value="tercero">Tercero de Primaria</option>
            <option value="cuarto">Cuarto de Primaria</option>
            <option value="quinto">Quinto de Primaria</option>
            <option value="sexto">Sexto de Primaria</option>
        </select><br>

        <input type="checkbox" name="consentimiento" id="consentimiento" required>
        <label for="consentimiento">Acepto los términos y condiciones</label>

        <br>
        <input type="submit" value="Enviar">
    </form>
    
<?php require('../layout/footer.php') ?>
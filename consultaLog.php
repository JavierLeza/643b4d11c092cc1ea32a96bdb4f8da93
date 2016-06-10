<form action="administrador.php?page=consultaLog" method="post">
    Realizar consulta por:
    <select id="consultaLog" name="consultaLog" onchange="cambiar_formulario()">
        <option selected value="id">Id del Log</option>
        <option value="fecha">Fecha</option>
        <option value="idusuario">Nombre de usuario</option>
        <option value="idsubasta">idSubasta</option>
        <option value="idproducto">idProducto</option>
    </select>
    <span id="consulta"> <input type='number' name='valor' step='1' min='1' required/></span>
    <input type="submit" name="enviarConsultaLog">
    
</form>

<script>
    function cambiar_formulario(){
        var consulta = document.getElementById("consulta");
        var tipoConsulta = document.getElementById("consultaLog").value;
       
        if(tipoConsulta == "fecha"){
            consulta.innerHTML = "<input type='datetime-local' name = 'valor' step='1' required/> ";
        }
        else if(tipoConsulta == "idusuario"){
            consulta.innerHTML = "<input type='text' name='valor' maxlength='20' required/>";
        }
        else{
            consulta.innerHTML = "<input type='number' name='valor' step='1' min='1' required/>";
        }
        
        
    }
</script>
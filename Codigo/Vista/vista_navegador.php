<nav class="topnav" id="myTopnav">
    <a href="menu.php" class="active">Home</a>
    <a href="menu.php" onclick="mostrarXML('Controlador/tablasEntrada.php');">Entrada</a>
    <div class="dropdown">
        <button class="dropbtn">Listas
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="#" onclick="mostrarXML('Controlador/tablasUsuarios.php');">Usuarios</a>
            <a href="#" onclick="mostrarXML('Controlador/tablasAdministrativos.php');">Administrativo</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Registro
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="#" onclick="abrirModal('modalRegUsu',true)">Usuarios</a>
            <a href="#" onclick="abrirModal('modalRegFun',true)">Administraivo</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn"><?php echo $usuario ?>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="Controlador/cerrar.php">Cerrar</a>
            <a href="#" onclick="abrirModal('editarFun',true)">Administrativo</a>
        </div>
    </div>
    
    <!--Se Picó el script-->
  <!-- Nuevo Dropdown para Vistas -->
<div class="dropdown">
    <button class="dropbtn">Vistas
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="menuVistas">
        <a value="normal">Vista Normal</a>
        <a value="daltonism">Vista Daltonismo</a>
        <a value="bw">Blanco y Negro</a>
    </div>
</div>

<!--Startea el script y una variable-->
<script>
var isDaltonismActive = false;

document.getElementById('menuVistas').addEventListener('click', function(event) {
    var selectedVista = event.target.getAttribute('value');

    // Desactiva todos los estilos primero
    document.getElementById('daltonismobw').disabled = true;
    document.getElementById('daltonismotablasbw').disabled = true;
    document.getElementById('tablasraras').disabled = true;
    document.getElementById('tablasNormal').disabled = true;
    document.getElementById('stylesheetNormal').disabled = true;
    document.getElementById('stylesheetDaltonism').disabled = true;

    // Activa los estilos según la vista seleccionada
    if (selectedVista === 'normal') {
        document.getElementById('stylesheetNormal').disabled = false;
    } else if (selectedVista === 'daltonism') {
        document.getElementById('stylesheetDaltonism').disabled = false;
        document.getElementById('tablasraras').disabled = false;
        document.getElementById('tablasNormal').disabled = true;
    } else if (selectedVista === 'bw') {
        document.getElementById('daltonismobw').disabled = false;
        document.getElementById('daltonismotablasbw').disabled = false;
    }

    isDaltonismActive = (selectedVista !== 'normal');
    
    // Cambia el estilo del enlace del "home" (si se utiliza el mismo estilo para el "home" en ambos modos)
    var homeLink = document.querySelector('.topnav a[href="index.php"]');
    if (isDaltonismActive) {
        homeLink.classList.add('active');
    } else {
        homeLink.classList.remove('active');
    }
});
</script>




    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="navResponsive()">&#9776;</a>
</nav>


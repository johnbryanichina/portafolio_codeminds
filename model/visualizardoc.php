<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar documentos</title>
    <link rel="stylesheet" href="../Styles/estilos.css">
    <script src="../js/app.js"></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="left">
            <img src="../img/LogoEquipo.png" alt="Logo">
                <a class="right" href="../index.html"> <h2>PORTAFOLIO</h2></a>
            </div>
            <div class="right">
                <a class="right" href="../index.html"> GESTIÓN DE PROYECTOS DE SOFTWARE </a>
            </div>
        </nav>
    </header>

    <main>
        <br>
        <center><h1>PROYECTO EZSHOP</h1></center><br>
        <h1 class="tituloSub">TABLA DE CONTENIDOS</h1>
        <div class="menu">
            <div class="menu-item" onclick="toggleMenu('gestion-submenu')">Definición del Alcance del Proyecto</div>
            <div id="gestion-submenu" class="sub-menu">
                <a href="#" onclick="openPDF('../documents/UNIDAD1/1CodeMinds_EstudioDeFactibilidad.pdf')">Estudio de Factibilidad</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD1/1CodeMinds_Acta_de_Constitucion_del_Proyecto.pdf')">Acta de Constitución del Proyecto</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD1/1CodeMinds_SOW.pdf')">Acuerdo de Trabajo</a>
               
            </div>

            <div class="menu-item" onclick="toggleMenu('requisitos-submenu')">Planificación del Proyecto</div>
            <div id="requisitos-submenu" class="sub-menu">
                <a href="#" onclick="openPDF('../documents/UNIDAD1/1CodeMinds_Plan_de_gestion_del_proyecto.pdf')">Plan de gestión del proyecto</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD2/CodeMinds_WBS.pdf')">Estructura de descomposición de trabajo (WBS)</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD2/CodeMinds_RACI.pdf')">Roles y Responsabilidades (RACI)</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD2/CodeMinds_Informe_Practica_de_Laboratorio1.pdf')">Calendarización de tareas</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD2/CodeMinds_P_DETALLADA.pdf')">Planificación detallada</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD2/CodeMinds_SCHEDULING.pdf')">Scheduling</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD2/CodeMinds_EstimacionDeEsfuerzo(COCOMO).pdf')">Estimación de esfuerzo (COCOMO)</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD2/CodeMinds _Actividad_19 - Estimación de esfuerzo puntos de función.pdf')">Estimación de esfuerzo puntos de función</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD2/CodeMinds_Informe_Practica_de_Laboratorio3.pdf')">Estimación de Costo</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD2/CodeMinds_Plan_De_Comunicacion_del_Proyecto.pdf')">Plan de comunicación del Proyecto</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD2/CodeMinds_Plan_de_control_de_Cambios.pdf')">Plan de control de cambios</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD2/CodeMinds_Plan_de_Calidad.pdf')">Plan de calidad</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD2/CodeMinds_Plan_de_gestion_de_Riesgos.pdf')">Plan de gestión de riesgos</a>
            </div>

            <div class="menu-item" onclick="toggleMenu('diseno-submenu')">Ejecución, Monitoreo y Control del Proyecto</div>
            <div id="diseno-submenu" class="sub-menu">
                <a href="#" onclick="openPDF('../documents/UNIDAD3/CodeMinds_Actividad_28_Valor_Ganado.pdf')">Valor ganado</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD3/CodeMinds_Actividad_29.pdf')">Seguimiento y Control de Riesgos</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD3/CodeMinds_Solicitud_de_Cambios.pdf')">Solicitud de cambios</a>
                <a href="#" onclick="openPDF('../documents/UNIDAD3/CodeMinds_Actividad_31.pdf')">Replanificación del Proyecto de Software</a>
            </div>

            <div class="menu-item" onclick="toggleMenu('construccion-submenu')">Cierre del Proyecto</div>
            <div id="construccion-submenu" class="sub-menu">
                <a href="#" onclick="openPDF('../documents/UNIDAD3/CodeMinds_Cierre_del_Proyecto.pdf')">Cierre del proyecto</a> 
            </div>
 

        <div id="pdfModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div class="pdf-viewer">
                <iframe id="pdfFrame" src=""></iframe>
            </div>
        </div>
    </div>

    </main>

    <footer class="footer">
        <p>©CodeMinds 2024</p>
    </footer>
 
</body>
</html>
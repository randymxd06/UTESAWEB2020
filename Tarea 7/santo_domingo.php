<?php $pagina = "Recinto Santo Domingo" ?>
<?php include_once "partes/partes_head.php" ?>

<!-- Este container es para centrar la página -->
<div class="container">

    <!-- Este row es para contener el menú y el contenido de las páginas -->
    <div class="row mt-3 mr-5">

        <?php include_once "partes/partes_menu.php" ?>

        <!-- Este col es para mostrar el contenido de las páginas -->
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">

            <img class="w-100 animate__fadeInDown animate__animated" style="border-radius: 9px; border-style: solid; border-color: black" src="images/santo_domingo.jpg" alt="Recinto de Santo Domingo">

            <div class="lead animate__fadeIn animate__animated animate__fast animate__delay-1s">
                <p>Máximo Gómez Esq. José Contreras, Santo Domingo de Guzmán, D. N. República Dominicana</p>
                <p><b>Teléfonos:</b> (809) 221-6221, 221-6320, 221-6419, 221-6515, 221-6614, 221-6730</p>
                <p><b>Fax:</b> (809) 682-0200</p>
                <p><b>Apartados de Correo:</b> 21423</p>

                <!-- Este es el nav que contiene el menú -->
                <nav class="nav nav-pills flex-column">

                    <div class="col-md-12">
                        <span class="lead" style="font-size: 22px"><b>Carreras</b></span>
                        <span>
                            <button id="btnMenu" class="btn animate__animated" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                                <i class="fa fa-bars" style="font-size: 23px" aria-hidden="true"></i>
                            </button>
                        </span>
                    </div>

                    <div class="collapse mt-3" id="collapseExample2">

                        <div class="card card-body">

                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <!--DWLayoutTable-->
                                <tbody>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFF00" height="19">
                                            <font size="3"><b>
                                                    <font size="1" face="Verdana, Arial, Helvetica, sans-serif"> Nombre</font>
                                                </b></font>
                                        </td>
                                        <td valign="middle" width="148" bgcolor="#FFFF00">
                                            <font size="3"><b>
                                                    <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Facultad</font>
                                                </b></font>
                                        </td>
                                        <td width="126" valign="middle" bgcolor="#FFFF00">
                                            <div align="center"><b>
                                                    <font face="Verdana, Arial, Helvetica, sans-serif" size="1">Duración</font>
                                                </b></div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">INFORMATICA</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> ARQUITECTURA E INGENIERIA </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">ING. CIVIL</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> ARQUITECTURA E INGENIERIA </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 13 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">ING. ELECTRICA</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> ARQUITECTURA E INGENIERIA </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">ING. ELECTRONICA</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> ARQUITECTURA E INGENIERIA </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">ING. INDUSTRIAL</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> ARQUITECTURA E INGENIERIA </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">ING. MECANICA</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> ARQUITECTURA E INGENIERIA </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">SISTEMAS COMPUTACIONALES</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> ARQUITECTURA E INGENIERIA </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">ADM. DE EMPRESAS</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS ECONOMICAS Y SOCIALES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">ADM. EMPRESAS TUR. Y HOT.</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS ECONOMICAS Y SOCIALES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">ADM. EMPRESAS TURIST</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS ECONOMICAS Y SOCIALES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">CIENCIAS POLITICAS</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 10 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">CIENCIAS SECRETARIALES</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS SECRETARIALES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 10 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">COMUNICACION SOCIAL</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">CONTADURIA PUBLICA</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS ECONOMICAS Y SOCIALES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">DERECHO</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">ECONOMIA</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS ECONOMICAS Y SOCIALES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 10 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">EDUC. MATEMATICA FISICA</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">EDUC. ADM. Y DIR. ESCOLAR</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">EDUC.PARA LA SALUD</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">EDUCACION MENC. LET.MOD.</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">EDUCACION BASICA</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 11 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">EDUCACION BASICA-PRIMER CICLO</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">EDUCACION INICIAL</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">EDUCACION MENCION PEDAGOG</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">EDUCACION NATURALES</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">EDUCACION PRIMARIA, PRIMER CICLO</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">EDUCACION SOCIALES</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">ESPAÑOL PARA EXTRANJEROS</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 3 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">INFORMATICA</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS ECONOMICAS Y SOCIALES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 10 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">LENGUAS MODERNAS</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">LENGUAS MODERNAS SABATINA</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 14 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">MEDICINA</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS DE LA SALUD </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 13 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">MERCADEO</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS ECONOMICAS Y SOCIALES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">OPTOMETRIA</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS DE LA SALUD </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFFFCC" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">PSICOLOGIA</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFFFCC">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFFFCC">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 12 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" valign="middle" bgcolor="#FFCC00" height="24">

                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1">TRABAJO SOCIAL</font>
                                        </td>

                                        <td valign="middle" bgcolor="#FFCC00">
                                            <font size="1" face="Arial, Helvetica, sans-serif"> CIENCIAS Y HUMANIDADES </font>
                                        </td>
                                        <td valign="middle" align="center" bgcolor="#FFCC00">
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="1"> 9 cuatrimestres</font>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td height="22"></td>
                                        <td width="18"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>

                    </div>

                </nav>

            </div>

        </div>

        <div class="col-md-1">

        </div>

    </div>

</div>

<hr>

<p style="text-align: right;">Derechos reservados (R), Marzo de 2020
    Santiago de los Caballeros, República Dominicana</p>

<?php include_once "partes/partes_footer.php" ?>
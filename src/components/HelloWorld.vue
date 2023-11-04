<template>
  <div class="hello">
    <h3 style="text-align: center">
      CONTRATO 031 - UNICESAR - ADQUISICION DE DOS (2) SOFTWARE QUE PERMITAN EL DESARROLLO DE SOLUCIONES MODULARES DE AUTOMATIZACION DE AULAS, CONTROL DE ACCESO Y SEGURIDAD DE LA UNIVERSIDAD POPULAR DEL CESAR –SEDE CAMPUS.
    </h3>
    <br>
    <hr>
    <br><br><br>
    <table style="width: 100%;" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <tbody>
          <tr class="row0">
            <td class="column0 style18 s style18" colspan="3">PRODUCTOS</td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 s">ITEM CONTRATO</td>
            <td class="column5 style6 s">ELEMENTOS RELACIONADOS</td>
            <td class="column6 style2 s">ARCHIVOS</td>
          </tr>
          <tr class="row1">
            <td class="column0 style19 s style19" colspan="3" rowspan="21">1.  CONTROL DE ACCESO (MODULOS, ITEM 9, 16. INSTALADO EN PC AUDIOVISUALES</td>
            <td class="column3 style20 s style22" rowspan="12">PEATONAL</td>
            <td class="column4 style5 n">1</td>
            <td class="column5 style7 s">&nbsp;- TORNIQUETE PEATONALES <i @click="verObservacion('Item 1')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(1)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row2">
            <td class="column4 style5 n">2</td>
            <td class="column5 style7 s">&nbsp;- TORNIQUETES DISCAPACITADOS <i @click="verObservacion('Item 2')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(2)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row3">
            <td class="column4 style5 n">3</td>
            <td class="column5 style7 s">&nbsp;- IMPRESORA SUBLIMACION CARNETIZACION RFID <i @click="verObservacion('Item 3')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(3)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row4">
            <td class="column4 style5 n">4</td>
            <td class="column5 style7 s">&nbsp;- TINTA A COLOR, BLANCO Y NEGRO. <i @click="verObservacion('Item 4')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(4)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row5">
            <td class="column4 style5 n">5</td>
            <td class="column5 style14 s">&nbsp;- TV 42 PULG, INCLUYE SOPORTE, OBRA CIVIL E INSTALACION <i @click="verObservacion('Item 5')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(5)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row6">
            <td class="column4 style5 n">6</td>
            <td class="column5 style14 s">&nbsp;- COMPUTADOR ESCRITORIO, OBRA CIVIL E INSTALACION. <i @click="verObservacion('Item 6')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(6)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row7">
            <td class="column4 style5 n">7</td>
            <td class="column5 style14 s">&nbsp;- UPS 1500 VATIOS <i @click="verObservacion('Item 7')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(7)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row8">
            <td class="column4 style5 n">8</td>
            <td class="column5 style14 s">&nbsp;- HARDWARE CONTROLADOR POR CARNET RFID <i @click="verObservacion('Item 8')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(8)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row9">
            <td class="column4 style5 n">9</td>
            <td class="column5 style15 s">&nbsp;- LICENCIA DE SOFTWARE DE REGISTRO Y CONTROL DE ACCESO TORNIQUETES PEATONAL Y DISCAPACITADOS <i  @click="verObservacion('Item 9')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(9)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row10">
            <td class="column4 style5 n">10</td>
            <td class="column5 style15 s">&nbsp;- SUMINISTRO DE CARNET EN BLANCO RFID  14500 <i @click="verObservacion('Item 10')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(10)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row11">
            <td class="column4 style5 n">36</td>
            <td class="column5 style15 s">&nbsp;- RACK METALICO(1 de 2) <i @click="verObservacion('Item 36')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(36)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row12">
            <td class="column4 style13 n">24</td>
            <td class="column5 style10 s">&nbsp;- SUMINISTRO DE ESCRITORIO DE VIDRIO MADERA Y COMPUTADOR TODO EN 1 COMO EQUIPO SERVIDOR CENTRAL, TABLE DE 11 PULG. CON PLAN DE DATOS, PARA LA SUPERVISION DE AULAS <i @click="verObservacion('Item 24')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(24)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row13">
            <td class="column3 style20 s style21" rowspan="9">VEHICULAR</td>
            <td class="column4 style5 n">12</td>
            <td class="column5 style7 s">&nbsp;- SUMINISTRO DE BRAZO O BARRA ELECTRO MECANICA, VEHICULOS <i @click="verObservacion('Item 12')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(12)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row14">
            <td class="column4 style5 n">13</td>
            <td class="column5 style7 s">&nbsp;- SUMINISTRO DE BRAZO O BARRA ELECTRO MECANICA, MOTOS <i @click="verObservacion('Item 13')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(13)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row15">
            <td class="column4 style5 n">14</td>
            <td class="column5 style7 s">&nbsp;- INSTALACION Y CONFIGURACION DE BRAZO O BARRERA ELECTROMECANICA <i @click="verObservacion('Item 14')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(14)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row16">
            <td class="column4 style5 n">15</td>
            <td class="column5 style10 s">&nbsp;- HARDWARE CONTROLADOR POR CARNET RDIF, INCLUYE SOPORTE METALICO EN ACERO INOXIDABLE <i @click="verObservacion('Item 15')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(15)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row17">
            <td class="column4 style5 n">16</td>
            <td class="column5 style7 s">&nbsp;- LICENCIA DE SOFTWARE DE REGISTRO Y CONTROL DE ACCESO VEHICULAR <i @click="verObservacion('Item 16')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(16)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row18">
            <td class="column4 style5 n">17</td>
            <td class="column5 style7 s">&nbsp;- COMPUTADOR DE ESCRITORIO, INCLUYE SOPORTE, OBRA CIVIL E INSTALACION <i @click="verObservacion('Item 17')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(17)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row19">
            <td class="column4 style5 n">18</td>
            <td class="column5 style7 s">&nbsp;- UPS 1200 WATTS <i @click="verObservacion('Item 18')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(18)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row20">
            <td class="column4 style5 n">19</td>
            <td class="column5 style7 s">&nbsp;- LECTOR RFID ENTRADA Y SALIDA VEHICULAR <i @click="verObservacion('Item 19')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(19)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row21">
            <td class="column4 style5 n">20</td>
            <td class="column5 style7 s">&nbsp;- TAG RFID PARA IDENTIFICACION VEHICULAR(PERSONAL ACTIVO) <i @click="verObservacion('Item 20')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(20)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row22">
            <td class="column0 style23 s style28" colspan="3" rowspan="4">2. SOFTWARE DE AUTOMATIZACION DE AULAS <i @click="verObservacion('Item 21')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column3 style29 n style30" colspan="2">21</td>
            <td class="column5 style7 s">&nbsp;- HARDWARE DE AUTOMATIZACION PARA CADA AULA DE CLASES <i style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(21)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row23">
            <td class="column3 style29 n style30" colspan="2">22</td>
            <td class="column5 style8 s">&nbsp;- OBRA CIVIL, ADAPTACION Y RESANE DE PAREDES. <i @click="verObservacion('Item 22')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(22)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row24">
            <td class="column3 style29 n style30" colspan="2">23</td>
            <td class="column5 style9 s">&nbsp;- SOFTWARE INTEGRAL DE CONTROL Y MONITOREO DE SEGURIDAD, SUPERVISION Y REPORTES ESTADISTICOS <i @click="verObservacion('Item 23')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(23)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row25">
            <td class="column3 style29 n style30" colspan="2">11</td>
            <td class="column5 style10 s">&nbsp;- LICENCIA DE SOFTWARE INTEGRAL DE VERIFICACION DE CUMPLIMIENTO DE HORARIOS DOCENTES Y ADMINISTRATIVOS <i @click="verObservacion('Item 24')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(11)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row26">
            <td class="column0 style31 s style39" colspan="3" rowspan="16">3. COMPONENTE DE CAMARAS DE SEGURIDAD</td>
            <td class="column3 style16 n style17" colspan="2">25</td>
            <td class="column5 style7 s">UPS DE 1200 VATIOS <i @click="verObservacion('Item 25')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(25)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row27">
            <td class="column3 style16 s style17" colspan="2">26, 27, 28, 29</td>
            <td class="column5 style7 s">&nbsp;- CAMARAS DE SEGURIDAD, Item 26, 27, 28, 29 <i @click="verObservacion('Item 26')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(26)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row28">
            <td class="column3 style16 n style17" colspan="2">30</td>
            <td class="column5 style7 s">&nbsp;- DVR DE ALMACENAMIENTO, Item 30 <i @click="verObservacion('Item 30')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(30)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row29">
            <td class="column3 style16 n style17" colspan="2">31</td>
            <td class="column5 style7 s">&nbsp;- DISCO DURO 2TB <i @click="verObservacion('Item 31')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row30">
            <td class="column3 style16 n style17" colspan="2">32</td>
            <td class="column5 style7 s">&nbsp;- CONECTORES MACHOS <i @click="verObservacion('Item 32')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row31">
            <td class="column3 style16 n style17" colspan="2">33</td>
            <td class="column5 style7 s">&nbsp;- FUENTES DE PODER, Item 33 <i @click="verObservacion('Item 33')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(33)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row32">
            <td class="column3 style16 n style17" colspan="2">34</td>
            <td class="column5 style7 s">&nbsp;- TELEVISOR DE 40 HMDI FULL HD <i @click="verObservacion('Item 34')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(34)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row33">
            <td class="column3 style16 n style17" colspan="2">35</td>
            <td class="column5 style7 s">&nbsp;- GABINETES METALICOs TIPO RACK <i @click="verObservacion('Item 35')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(35)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row34">
            <td class="column3 style16 n style17" colspan="2">36</td>
            <td class="column5 style7 s">&nbsp;- GABINETE METALICO (2 de 2) <i @click="verObservacion('Item 36')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(36)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row35">
            <td class="column3 style16 n style17" colspan="2">37</td>
            <td class="column5 style7 s">&nbsp;- UPS MOPNOFASICA DE 3 KVA <i @click="verObservacion('Item 37')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(37)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row36">
            <td class="column3 style16 n style17" colspan="2">38</td>
            <td class="column5 style11 s">&nbsp;- UPS MONOFASICA DE 1,5 <i @click="verObservacion('Item 38')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(38)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row37">
            <td class="column3 style16 n style17" colspan="2">39</td>
            <td class="column5 style11 s">&nbsp;- CABLE UTP CAT 6 100% COBRE <i @click="verObservacion('Item 39')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(39)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row38">
            <td class="column3 style16 n style17" colspan="2">40</td>
            <td class="column5 style11 s">&nbsp;- CABLE DUPLEX 2X16 <i @click="verObservacion('Item 40')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(40)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row39">
            <td class="column3 style16 n style17" colspan="2">41</td>
            <td class="column5 style11 s">&nbsp;- TUBERIA 3/4 EMT <i @click="verObservacion('Item 41')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(41)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row40">
            <td class="column3 style16 n style17" colspan="2">42</td>
            <td class="column5 style11 s">&nbsp;- INSTALACION DE PUNTOS DE CAMARAS <i @click="verObservacion('Item 42')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(42)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
          <tr class="row41">
            <td class="column3 style16 n style17" colspan="2">43</td>
            <td class="column5 style11 s">&nbsp;- INSTALACION Y CONFIGURACION DE LOS DVR <i @click="verObservacion('Item 43')" style="color:rgb(53, 150, 235); font-weight: bold; cursor: pointer;" class="far fa-question-circle"></i></td>
            <td class="column6 style3 s"><button @click="mostrarImagenes(43)" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-images"></i></button></td>
          </tr>
        </tbody>
    </table>

    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h2 style="width: 100%; text-align: center">Archivos Cargados</h2>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="slideshow-container" style="height: 600px">
              <div v-for="(item, index) in imagenes" :key="index" class="mySlides fade" style="text-align: center;">
                <template v-if="item.endsWith('.jpg') || item.endsWith('.png') || item.endsWith('.jfif')">
                  <h3 style="font-weight: bold; margin: 0;">{{ index+1 }} / {{ imagenes.length }}</h3>
                  <br>
                  <img :src="baseServidor+'Item ' + ItemSeleccionado + '/' + item" style="width:auto; height: 500px;">
                </template>
                <template v-else-if="item.endsWith('.mp4')|| item.endsWith('.mov')">
                  <h3 style="font-weight: bold; margin: 0;">{{ index+1 }} / {{ imagenes.length }}</h3>
                  <br>
                  <video controls :src="baseServidor+'Item ' + ItemSeleccionado + '/' + item" style="width:auto; height: 500px;"></video>
                </template>
                <template v-else>
                  <p>Archivo no compatible: {{ item }}</p>
                </template>
              </div>

              <a class="prev" @click="plusSlides(-1)">❮</a>
              <a class="next" @click="plusSlides(1)">❯</a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from 'axios';
import Swal from 'sweetalert2'

export default {
  name: 'HelloWorld',
  props: {
    msg: String
  },
  data() {
    return {
      ItemSeleccionado: 1,
      slideIndex: 1,
      imagenes: [],
      baseServidor: "http://rgl-ingenieria.com/visorphp/",
      //baseServidor: 'http://192.168.1.93/visorphp/',
      observacion: ""
    }
  },
  methods: {
    plusSlides(n) {
      this.showSlides(this.slideIndex += n);
    },
    currentSlide(n) {
      this.showSlides(this.slideIndex = n);
    },
    showSlides(n) {
      this.slideIndex = n;
      let i;
      let slides = document.getElementsByClassName("mySlides");
      if (n > slides.length) {this.slideIndex = 1}    
      if (n < 1) {this.slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      
      slides[this.slideIndex-1].style.display = "block";  
      console.log(slides[this.slideIndex-1]);
    },
    mostrarImagenes(item){
      this.verArchivos(item);
    },
    async verArchivos(itemVer) {
      this.ItemSeleccionado = itemVer;
      const response = await axios.get(this.baseServidor+'verarchivos.php?folderName=Item '+itemVer);
      this.imagenes = response.data;
      setTimeout(()=>{
        if(this.imagenes.length > 0){
          this.showSlides(1);
        }
      }, 500)
    },
    async verObservacion(itemVer) {
      const response = await axios.get(this.baseServidor+'verObservacion.php?itemVer='+itemVer);
      this.observacion = response.data;
      Swal.fire({
        title: this.observacion,
        text: '',
        icon: 'info',
        confirmButtonText: 'ok'
      });
    }
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}


.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  background-color: black;
  border: 4px solid white;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */

/* Fading animation */
.fade {
  opacity: 1;
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

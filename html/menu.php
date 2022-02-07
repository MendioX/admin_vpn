<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/menuStyle.css">
    <link rel="stylesheet" href="../css/nav_bar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">

</head>

<body>
    <script src="../js/nav_bar.js"></script>
    <?php include("../php/status.php"); ?>

    <div id="sideNavigation" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Agregar Usuarios</a>
        <a href="#">Telulares</a>
        <a href="#">Contact Us</a>
        <a href="#">About</a>
        <a href="#">Features</a>
        <a href="#">Contact Us</a>

      </div>
    
      <nav class="topnav">
        <a href="#" onclick="openNav()">
          <svg width="30" height="30" id="icoOpen">
              <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
              <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
              <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
          </svg>
        </a>
        <h3>Soporte de Sistemas</h3>
      </nav>
      
      <div id="main">
      
      <div class="grid_menu">


      <div class="card">
          <div class="card-child" id="c-c-one">
            
          
          <div class="cabecera"><H2>DDBB Sucursales</H2></div>
              <div id="hijo"><a href="">Alem</a></div>
              <div id="hijo"><a href="">Avellaneda</a></div>
              <div id="hijo"><a href="">Belgrano</a></div>
              <div id="hijo"><a href="">Constitucion</a></div>
              <div id="hijo"><a href="">Espora</a></div>
              <div id="hijo"><a href="">Rosales</a></div>
              <div id="hijo"><a href="">Rivadavia</a></div>
              <div id="hijo"><a href="">Internacional</a></div>
              <!--<div id="hijo"><a href="">Viamonte</a></div>
              <div id="hijo"><a href="">Viamonte PB</a></div>-->

          </div>
      </div>


      <div class="card">
          <div class="card-child" id="c-c-two">
            <div class="cabecera"><H2>Elastix/Issabel</H2></div>
            <div id="hijo"><div id="status"> inline </div><a href="https://192.168.0.1" target="_blank">192.168.45.250</a></div>
            <div id="hijo"><div id="status">  </div><a href="https://192.168.60.198" target="_blank">192.168.60.198</a></div>
            <div id="hijo"><div id="status">  </div><a href="https://192.168.20.250" target="_blank">192.168.20.250</a></div>
            <div id="hijo"><div id="status">  </div><a href="https://192.168.40.198" target="_blank">192.168.40.198</a></div>
            <div id="hijo"><div id="status">  </div><a href="https://192.168.16.250" target="_blank">192.168.16.250</a></div>
            <div id="hijo"><div id="status">  </div><a href="https://192.168.0.250" target="_blank">192.168.0.250 </a> </div>
            <div id="hijo"><div id="status">  </div><a href="https://192.168.15.250" target="_blank">192.168.15.250</a></div>
            <div id="hijo"><div id="status">  </div><a href="https://192.168.15.62" target="_blank">192.168.15.62</a> </div>
           <!-- <div id="hijo"><div id="status">  </div><a href="https://192.168.60.250" target="_blank">192.168.60.250 </a></div>
            <div id="hijo"><div id="status">  </div><a href="https://192.168.35.250" target="_blank">192.168.35.250 </a></div> -->
           
          </div>
      </div>



      <div class="card">
          <div class="card-child" id="c-c-three">
            <div class="cabecera"><H2>Telulares</H2></div>
          </div>
      </div>

      </div>

      </div> 


</body>
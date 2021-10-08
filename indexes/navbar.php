<div class="row">
    <div class="col-xl-12 offset-xl-0 offset-lg-0 offset-md-0 offset-sm-0 offset-0">
         <nav class="nav nav-pills nav-justified">
           <li <?php if ($mi_pagina=="index") echo " class='nav-item active'"; ?>>
            <a id="hojo" class="nav-link <?php if ($mi_pagina=="index") echo " active"; ?>" href="index.php">Inicio</a>
           </li>
           <li <?php if($mi_pagina == "Personajes") echo "class = 'nav-item active'";?>>
            <a id="hojo" class="nav-link <?php if ($mi_pagina=="Personajes") echo " active"; ?>" href="Personajes.php" >Personajes</a>
           </li>
           <li <?php if($mi_pagina == "villanos") echo "class='nav-item active'";?>>
            <a id="hojo" class="nav-link <?php if ($mi_pagina=="villanos") echo " active"; ?>" href="Villanos.php">Villanos</a>
           </li>
           <li <?php if($mi_pagina == "mapa") echo "class='nav-item active'";?>>
            <a id="hojo" class="nav-link <?php if ($mi_pagina=="mapa") echo " active"; ?> " href="mapa.php">Mapa</a>
          </li>
              <li class="nav-item dropdown">
                <a id="hojo" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Información Adicional
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a id="hojo" class="dropdown-item <?php if ($mi_pagina=="autor") echo " active"; ?>" href="autor.php">Autor</a>
                <a id="hojo" class="dropdown-item <?php if ($mi_pagina=="rodaje") echo " active"; ?>" href="rodaje.php">¿Dónde se rodó?</a>
            </div>
         </li>
        </nav>
    </div>
</div>
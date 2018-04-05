<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Donokasa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item active">
              <a class="nav-link" href="#">Inmuebles</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Noticias</a>
            </li>

			  
	
		<li class="nav-item dropdown active" id="onUser">   
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Mi usuario
        </a>
			
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			
			<form method="post" action="/inmobiliaria/" >
			<div id="Reset" Style="display:none;">	
		    <button type="button" class="dropdown-item" >Volver</button>
			<div class="dropdown-divider"></div>
			</div>
            <button type="button" class="dropdown-item" id="Register" >Registrarse</button>
            <button type="button" class="dropdown-item" id="Login" >Entrar</button>
            <input type="text" name="e" class="dropdown-item " id="Email" placeholder="Email address" required pattern='^[^@]+@[^@]+\.[^@]{2,3}$' minlength="8" maxlength="40" required Style="display:none;" required>
            <input type="text" name="u" class="dropdown-item " id="Username" Style="display:none;" placeholder="Username" pattern="[A-z0-9À-ž]{3,15}$" minlength="3" maxlength="15" >
            <input type="password" name="p" class="dropdown-item " id="Password" Style="display:none;" placeholder="Password" required pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,40}" minlength="8" maxlength="40" required>
            <input type="hidden" name="key" value="userLog" required>
			<div id="Submit" Style="display:none;">
			<div class="dropdown-divider"></div>
			<button type="submit" class="dropdown-item">Enviar</button>
			</div>
            </form>
			
		  <div id="Admin" Style="display:none;">
          <a class="dropdown-item" href="#">Administrar Usuarios</a>
		  <div class="dropdown-divider"></div>
		  </div>
			
		  <form method="post" action="/inmobiliaria/"  id="Exit" Style="display:none;">
		  <input type="hidden" name="key" value="userExit" required>
          <button type="submit" class="dropdown-item" >Salir</button>
		  </form>
        </div>    
		</li>
			  
            <li class="nav-item active">
              <a class="nav-link" href="#">Contacto</a>
            </li>
			  
          </ul>
        </div>
      </div>
    </nav>
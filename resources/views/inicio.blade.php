<!DOCTYPE html>
<html>
    <head>
        <title>CAE</title>
        <!-- Icono -->
        <link href="icono.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    </head>
	<body class="grey lighten-2">
	<form name="inicio">
		<div class="card-panel purple"></div>
		<div class="container">
			
			<div class="container" align="center">
				<div class="row">
					<div class="card-image">
						<img src="{{asset('images/log.png')}}">
					</div>
				</div>

				<br><br>
				<div class="row">
					<div class="col s4 m6">
						<div  class="card">
							<div class="card-content">
								<div class="card-title grey-text-accent-4" class="input-field col s12">Inicio de sesión</div>
								<div class="input-field col s6">
   									<input placeholder="Usuario" id="first_name" type="text" class="validate">
   								</div>
   								<div class="input-field col s6">
   									<input placeholder="Contraseña" id="first_name" type="password" class="validate">
   								</div>
								<div class="row">
									<div class="input-field col s4">
       									<button class="btn waves-effect purple" type="submit" name="action">Entrar</button>
       								</div>
       							</div>
							</div>
						</div>
					</div>
					<div class="col s4 m6">
						<div  class="card">	
							<div class="card-content">
								<div class="card-title grey-text-accent-4" class="input-field col s12">Llenado de solicitud</div>
								<br>
								<p>Al llenar la solicitud se tiene una semana para entregar el documento impreso con las firmas correspondientes. Si no es así se borrará el registro del sistema.</p>
									<div class="input-field col s4">
       									<button class="btn waves-effect purple" type="submit" name="action">Llenar</button>
       								</div><br><br><br>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div  class="card">
							
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		</div>
	</form>
	
	</body>
</html>
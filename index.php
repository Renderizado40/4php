<!DOCTYPE html>
<html>
<head>
	<title>Pagina Form</title>
	<style type="text/css">
		.registerForm{
			width: 40%;
			height: 20%;
			padding-bottom: 20px;
			border-radius: 5px;
			background-color: gray;
			box-shadow: 5px -5px teal;
			box-shadow: 2px 2px 2px 1px rgba(0,0,0,0,2);
		}
		.input-control{
			width: 100%;
		}
		.input-control label{
			color: white;
			font-family: sans-serif;

		}
		.input-control input{
			width: 100%;
			height: 20px;
		}
		#boton{
			margin: 4px 0 0 0;
		}
	</style>
</head>
<body>
	<h1>
		Hola
	</h1>
	<div class="registerForm">
		<fieldset>
			<form action="app/test.php" method="POST">
				<legend>
					Formulario
				</legend>
				<div class="input-control">
					<label>
						Primer numero
					</label>
					<input type="text" name="numberOne" placeholder="Numero">
				</div>
				<div class="input-control">
					<label>
						Segundo numero
					</label>
					<input type="text" name="numberTwo" placeholder="Numero">
				</div>
				<br>
				<div>
					<label>
						Operacion
					</label>
					<br>

					<select name="operacion">
						<option value="1">
							Suma
						</option>
						<option value="2">
							Resta
						</option>
						<option value="3">
							Multiplicacion
						</option>
						<option value="4">
							Division
						</option>
					</select>

				</div>

				<button id="boton">
					Enviar
				</button>
			</form>
		</fieldset>
	</div>
</body>
</html>
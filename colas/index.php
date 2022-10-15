<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Colas con JavaScript</title>
	<script src="prueba.js"></script>

	<script type="text/javascript">
		const queue = new Queue();
		function resp() {
			let op = document.getElementById('opcion').value;
			let elemento = 1;
			let cantidad = 0;
			switch (op) {
				case '1':
					cantidad = prompt("Tecle la cantidad de elementos a insertar:", "");
					for (let i = 1; i <= cantidad; i++) {
						elemento = prompt("Tecle un dato:", "");
						queue.enqueue(elemento);
					}

					break;
				case '2':
					if (queue.isEmpty() == true) {
						alert("Cola vacía");
					} else {
						alert("Los elementos de la cola son: " + queue.print());
					}

					break;
				case '3':
					buscar = prompt("Dato a buscar:", "");

					if (queue.search(buscar) > -1) {
						alert(buscar + " se encuentra en la posición: " + queue.search(buscar));
					} else {
						alert("El elemento " + buscar + ", NO se encuentra en el arreglo");
					}


					break;
				case '4':
					alert("Elemento a extraer: " + queue.dequeue());
					break;
				case '5':
					queue.size();
					if (queue.isEmpty() == false) {
						alert("Cantidad de elementos en la cola = " + queue.size());
					} else {
						alert("Cantidad de elementos en la cola=0 ¡Cola vacía!")
					};
					break;
				case '6':
					alert("Cantidad de elementos en la cola = " + queue.clean() + " Cola Vacía");

					break;
				case '7':
					alert("Gracias por usar mi aplicación :D");

					break;

			}
		}
	</script>

<body>
	<center>
		<h1>Aplicacion de colas en JavaScript y HTML</h1>
	</center>
	<hr><br>
	<ol>
		<li>Crear cola</li>
		<li>Mostrar elementos de la cola</li>
		<li>Buscar un elemento </li>
		<li>Extraer elemento de cola</li>
		<li>Cantidad de elementos en cola</li>
		<li>Limpiar cola</li>
		<li>Salir</li>


	</ol>
	<label for="opcion">Seleccione una opción del menú:</label>
	<input type="number" name="opcion" id="opcion" min='1' max='8'>
	<center><button type="button" id="btnEnviar" onclick="resp();">Enviar Selección</button></center>
</body>

</html>
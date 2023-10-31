// Elementos principales de la programación estructurada
// Variables, secuencias selectivas y repetitivas, ademas de las dobles o multiples

// ¿Qué ejercicio voy a realizar?
// Determina de entre 3 numeros ingresados, cuál es el mas cercano al numero
// en que Dios creó al hombre (del 1 al 7), y un 4 número que debe ser adivinado entre el 1 al 5.

// Este ejercicio será resuelto en JavaScript y en PHP

// Este archivo es JavaScript

var mainContainer = document.querySelector("#acertijos");

var numeroQueJesusUso = 6;

var numeroAleatorio = numeroAleatorio(1, 5);


function revisarNumeros(e) {
	var primer_n = document.querySelector("#numero_uno").value;
	var segundo_n = document.querySelector("#numero_dos").value;
	var tercer_n = document.querySelector("#numero_tres").value;

	if (primer_n == numeroQueJesusUso || segundo_n == numeroQueJesusUso || tercer_n == numeroQueJesusUso) {
		var numero_para_adivinar = prompt("Has acertado. Ahora, ¿Adivinarias un numero del uno al 5?");
		if (numeroAleatorio == numero_para_adivinar) {
			alert("¡Has adivinado!");
		} else {
			alert("Lo sentimos, el número era: " + numeroAleatorio)
		}
	} else {
		alert("Debes repasar las Santas Escrituras de nuestro Jesucristo");
	}
}

if(mainContainer != undefined || mainContainer != null){
	mainContainer.innerHTML = `
		<div class="basic_container">
			<div class="introduccion">
			En seis días creó Dios los cielos y la tierra. (Genesis 1)
			<br/>
			¿Nos dirías qué día creó Dios al hombre?
			</div>

			<br/>
			<br/>
			<form>
				<label>Posible día Numero uno</label>
				<input type="text" name="numero_uno" id="numero_uno">
				<br/>
				<label>Posible día Numero dos</label>
				<input type="text" name="numero_dos" id="numero_dos">
				<br/>
				<label>Posible día Numero tres</label>
				<input type="text" name="numero_uno" id="numero_tres">
				<br/>
				<button type="button" onclick="revisarNumeros(this)">Revisar</button>
			</form>
		</div>
	`;
}
  

<!-- Código creado por Reynald Manuel Rodriguez Ramirez; El 31 de Octubre del año 2023 -->
<script>
	// Código de JavaScript extraído de la página: programadorwebvalencia.com -- Muchas gracias para él o ella, bendiciones.
  	document.addEventListener('DOMContentLoaded', () => { 

    //===
    // VARIABLES
    //===
    const DATE_TARGET = new Date('08/02/2024 0:01 AM');
    // DOM for render
    const SPAN_DAYS = document.querySelector('span#days');
    const SPAN_HOURS = document.querySelector('span#hours');
    const SPAN_MINUTES = document.querySelector('span#minutes');
    const SPAN_SECONDS = document.querySelector('span#seconds');
    // Milliseconds for the calculations
    const MILLISECONDS_OF_A_SECOND = 1000;
    const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
    const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
    const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24

    //===
    // FUNCTIONS
    //===

    /**
    * Method that updates the countdown and the sample
    */
    function updateCountdown() {
        // Calcs
        const NOW = new Date()
        const DURATION = DATE_TARGET - NOW;
        const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
        const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
        const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
        const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
        // Thanks Pablo Monteserín (https://pablomonteserin.com/cuenta-regresiva/)

        // Render
        SPAN_DAYS.textContent = REMAINING_DAYS;
        SPAN_HOURS.textContent = REMAINING_HOURS;
        SPAN_MINUTES.textContent = REMAINING_MINUTES;
        SPAN_SECONDS.textContent = REMAINING_SECONDS;
    }

    //===
    // INIT
    //===
    updateCountdown();
    // Refresh every second
    setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);
});
</script>

<?php
function showModalWithInformation() {
	return <<<INPUT
	<div class="modal" id="main_modal" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">¡Bien Hecho!</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" id="body_text_container">
	        <p>Aquí verás un contador de los días meses años y horas para mi cumpleaños.</p>
			¿Te atreves a adivinar cuándo será?

			<section id="counter_massive_container" class="my_birthday_permanent_counter">
			    <p>
			        <span id="days"></span> días / <span id="hours"></span> horas / <span id="minutes"></span> minutos / <span id="seconds"></span> segundos
			    </p>
			</section>
			<fieldset>
				<form method="POST" action="">
					<label>Dia de mi cumpleasños</label>
					<input type="text" name="birthday" id="birthday">
					<button type="submit" class="btn btn-primary">Revisar si estoy bien</button>
				</form>
			</fieldset>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	INPUT;	
}

?>

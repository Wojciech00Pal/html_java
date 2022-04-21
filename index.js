			
			
				
$(document).ready(function () {	
	var rowIdx = 0;
$('#addBtn').on('click', function () {			 

var nip = document.getElementById("NIP").value;
var region=document.getElementById("REGION").value;
var nazwa = document.getElementById("NAZWA").value;
var date = document.getElementById("Data powstania").value;
var nrdomu = document.getElementById("Numer DOMU").value;				
var nrmieszkania = document.getElementById("Numer mieszkania").value;
var kolory =document.getElementById("KOLOR").value;
var vat =document.getElementById("VAT").value;
var uwagi=document.getElementById("Uwagi").value;
// jQuery button click event to add a row


// Adding a row inside the tbody.
$('#tbody').append(`<tr id="R${++rowIdx}">
	<td>
	<p> ${rowIdx}</p>
	</td>
	<td >
	<p> ${nip}</p>
	</td>
	<td >
	<p>${region}</p>
	</td>
	<td >
	<p>${nazwa}</p>
	</td>
	<td >
	<p>${date}</p>
	</td>
	<td >
	<p>${nrdomu}</p>
	</td>
	<td >
	<p>${nrmieszkania}</p>
	</td>
	<td >
	<p>${kolory}</p>
	</td>
	<td >
	<p>${vat}</p>
	</td>
	<td >
	<p>${uwagi}</p>
	</td>
	
	</tr>`);
});
});
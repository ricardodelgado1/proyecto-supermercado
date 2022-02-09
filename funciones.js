function calculartotal()
{
	var canminutos = document.getElementById("Cantidad");
	var valminutos = document.getElementById("Valor");
	var totalpagar = document.getElementById("Total");

	totalpagar.value = canminutos.value * valminutos.value;

}

window.onload = function()
{
    var canminutos = document.getElementById("Cantidad");
	var valminutos = document.getElementById("Valor");

	canminutos.onblur = calculartotal;
	valminutos.onblur = calculartotal;


}
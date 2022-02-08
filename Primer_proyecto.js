var usuario = prompt ("Cuanto pesas?");
var planeta = prompt ("elige un planeta\n 1 es marte, 2 es jupiter");
var peso = parseInt (usuario);
var g_tierra = 9.8;
var g_marte = 3.7;
var g_jupiter = 24.8;
var peso_final;
var nombre;

if (planeta == 1)
{
	peso_final = peso * g_marte / g_tierra;
	nombre = Marte;
}
else if (planeta == 2)
{
	peso_final = peso * g_jupiter / g_tierra;
	nombre = Jupiter;
}
else
{
	peso_final = 1000000;
	nombre = Tu estomago;
}
var peso_final = parseInt (peso_final);

document.write ("Tu peso en " + marte + " es " + peso_final + " kg");

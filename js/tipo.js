function categoria()
{
	var tipo = document.getElementById("tipo");
	var tipo1 = tipo.value;
	var tipo3 = document.getElementById("tipo1");
	var tipo4 = tipo3.value;
	var numeros = document.getElementById("numero");

	if(tipo1==1){
		tipo3.value=1;
		numeros.placeholder="Nit";
		numeros.maxLength="9";
		numeros.name="nit";
	}else if(tipo1==2){
		tipo3.value=2;
		numeros.maxLength="10";
		numeros.placeholder="Cedula";
		numeros.name="cedula";
	}
}
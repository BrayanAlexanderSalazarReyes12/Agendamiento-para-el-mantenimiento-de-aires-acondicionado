function categoria1()
{
	var tipo = document.getElementById("container");

	if(tipo.classList==""){
		tipo.className="sidebar-closed";
	}else{
		tipo.className="";
	}
}


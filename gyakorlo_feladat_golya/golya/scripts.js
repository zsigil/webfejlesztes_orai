function validNev(){
	var nev = document.form1.nev.value;
	var err = document.getElementById("err")
	if(nev==""){
		err.innerHTML = "miért üres?";
		return false;
	}
	else{
		err.innerHTML = "";
		return true;
	}
}
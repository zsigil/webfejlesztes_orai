function Validate(){
	var ret = true;
	var nev = document.urlap.nev.value;
	
	if(nev == ""){
		document.getElementById("Error").innerHTML = "A név mező nem lehet üres!";
		ret = false;
	}
	
	var user = document.urlap.user.value.length;
	if(user<4 || user>16){
		document.getElementById("Error2").innerHTML = "A felhasználónév legalább 4, legfeljebb 16 karakter lehet!"
		ret = false;
	}	
	
	return ret;
}
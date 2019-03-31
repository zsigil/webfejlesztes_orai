function Validate(){
	var ret = true;
	var nev = document.urlap.nev.value;
	var user = document.urlap.user.value;
	
	if(nev == ""){
		document.getElementById("Error").innerHTML = "A név mező nem lehet üres";
		ret = false;
	}
	
	if(user.length<4 || user.length>16){
		document.getElementById("Error2").innerHTML = "A felhasználónév legalább 4 , max 16 kar.";
		ret = false;
	}
	
	
	return ret;
}

function validName(){
	var nev = document.urlap.nev.value;
	if(nev!=""){
		document.getElementById("Error").innerHTML = "";
	}
	
}


function validUser(){
	var user = document.urlap.user.value;
	var err = document.getElementById("Error2");
	if(user.length>=4 && user.length<=16){
		err.innerHTML = "";
	}
	
}

function akcio(){
	var kupon = document.getElementById("kupon");
	var s = "Kuponkod: Glamour12345";
	
	if(kupon.innerHTML==""){
		alert("kaptál kupont!");
		kupon.innerHTML = s;
	}

}

function idiota(){
	
	var szam = document.getElementById("katt");
	console.log(szam.value);
	if(szam.innerHTML == ""){
		szam.innerHTML = 1;
	}else{
		var ujszam = +szam.innerHTML;
		ujszam++;
		szam.innerHTML = ujszam;
		
	}
}

function nullazz(){
	document.getElementById("katt").innerHTML = "";
}
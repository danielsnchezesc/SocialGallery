//muestra un alert si alguno de los campos no esta relleno
function primeravalidacion(){
	//trae el elemento nombre
	var nom = document.getElementById('user').value;
	//trae el elemento email
	var contra = document.getElementById('password').value;
	if (nom == '' || contra =='') {
		alert('Algun campo esta vacio!');
		return false;
	}else{
		return true;
	}
}


//segunda validacion 

function segundavalidacion(){
	var marca = document.getElementById('marca').value;
	var poten = document.getElementById('potencia').value;

	if (marca == '' || poten =='') {
		if (marca == '') {
			document.getElementById('marca').style.border = '2px solid red';
			document.getElementById('mensaje').innerHTML = 'El campo marca es obligatorio!';
			document.getElementById('mensaje').style.display = 'block'

		}else{
			document.getElementById('marca').style.border = '1px solid #ccc';
		}
		if (poten == '') {
			document.getElementById('potencia').style.border = '2px solid red';
			document.getElementById('mensaje').innerHTML = 'El campo potencia es obligatorio!';
			document.getElementById('mensaje').style.display = 'block';
		}else{
			document.getElementById('potencia').style.border = '1px solid #ccc';
		}
		return false;
		document.getElementById('mensaje').innerHTML = 'El campo marca y potencia son obligatorios!';
		document.getElementById('mensaje').style.display = 'block';
	}else{
		return true;
	}
}
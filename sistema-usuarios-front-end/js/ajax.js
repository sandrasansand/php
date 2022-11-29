function register(){

	var rg_username = document.querySelector('#rg_username').value;
	var rg_email = document.querySelector('#rg_email').value;
	var rg_pass1= document.querySelector('#rg_pass1').value;
	var rg_pass2= document.querySelector('#rg_pass2').value;

	email_expresion= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	usuario_expresion= /^[a-zA-Z0-9]+$/;
	//password_expresion= /^[a-zA-Z0-9]+$/;
	// at least one number, one lowercase and one uppercase letter
    // at least six characters
    password_expresion = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;

    if (rg_username == '') {
    	M.toast({html: 'El campo usuario no puede estar vacío'})
    }else if (!usuario_expresion.exec(rg_username)) {
    	M.toast({html: 'Usuario no válido, no se permiten caracteres especiales, ni espacios'})
    }
    if (rg_email == '') {
    	M.toast({html: 'El campo email no puede estar vacío'})
    }else if (!email_expresion.exec(rg_email) ) {
    	M.toast({html: 'Email no válido'})
    }

    if (rg_pass1 == '') {
    	M.toast({html: 'El campo password no puede estar vacío'})
    } else if (!password_expresion.exec(rg_pass1)) {
    	M.toast({html: 'Password incorrecto al menos un dígito/minúscula/letra mayúscula y tener al menos seis caracteres'})
    }

    if (rg_pass2 == '') {
    	M.toast({html: 'Confirme su password '})
    }else if (!password_expresion.exec(rg_pass2)) {
    	M.toast({html: 'Password incorrecto al menos un dígito/minúscula/letra mayúscula y tener al menos seis caracteres'})
    }
    if (rg_pass1 != rg_pass2) {
    	M.toast({html: 'Las contraseñas no coinciden '})
    }
    var ajax = new XMLHttpRequest();
    var URL = 'ajax/ajax.users.php';
    var method = 'POST';
    ajax.onreadystatechange = function() {
    	if (ajax.readyState == 4 && ajax.status == 200) {
    		var response = ajax.responseText;

			if (response == 'Email_no_valido') { //del lado del servidor
				M.toast({html: 'El email enviado no es válido'
			})
			}else if (response == 'Usuario_no_valido') { //del lado del servidor
				M.toast({html: 'El usuario enviado no es válido'
			})
			}else if (response == 'Password_no_valido') { //del lado del servidor
				M.toast({html: 'El password enviado no es válido'
			}) 
            }else if (response == 'campos vacíos') {
                    M.toast({html: 'Algunos de los campos están vacios'
                })
            }
        }
    };
    ajax.open(method, URL, true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send('user_name='+ rg_username + '& email=' + rg_email + '& password=' + rg_pass1);
}






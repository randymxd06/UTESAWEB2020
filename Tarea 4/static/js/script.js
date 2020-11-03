var datos = [];

function guardarDatos(){

    /*
    insp = document.getElementsByTagName('input');
    for(k in insp){
        if(insp[k].value == ''){
            alert("Error, debe llenar "+insp[k].id);   
        }
    }*/
    

    persona = {};
    persona.nombre = document.getElementById('nombre').value;
    persona.apellido = document.getElementById('apellido').value;
    persona.cedula = document.getElementById('cedula').value;
    persona.edad = document.getElementById('edad').value;
    persona.telefono = document.getElementById('telefono').value;
    if(persona.nombre != "" && persona.apellido != "" && persona.cedula != "" && persona.edad != "" && persona.telefono != ""){
        datos.push(persona);
        localStorage.setItem('datos', JSON.stringify(datos));
        mostrarDatos();
    }
    
}

function limpiar(){
    nombre = document.getElementById('nombre').value = "";
    apellido = document.getElementById('apellido').value = "";
    cedula = document.getElementById('cedula').value = "";
    edad = document.getElementById('edad').value = "";
    telefono = document.getElementById('telefono').value = "";
};

function mostrarDatos(){

    dest = document.getElementById('tbDatos');
    dest.innerHTML = "";
    
    for(k in datos){
    persona = datos[k];
    tr = document.createElement('tr');
    for(y in persona){
        td = document.createElement('td');
        td.innerHTML = persona[y];
        tr.appendChild(td);
    }
    dest.appendChild(tr);
    }

}

let btnGuardar = document.getElementById('btnGuardar');

btnGuardar.addEventListener('click', function(){
    validar();
    guardarDatos();
    limpiar(); 
});

function validar(){

    //Validacion del nombre//
    nombre = document.getElementById('nombre').value;

    if(nombre != ""){
        nombre = document.getElementById('nombre').classList.add('is-valid');
        nombre = document.getElementById('nombre').classList.remove('is-invalid')
        nombre = document.getElementById('divNombre').classList.add('valid-feedback');
        nombre = document.getElementById('divNombre').classList.remove('invalid-feedback');
        nombre = document.getElementById('spanNombre').textContent = "Todo Correcto";
    }else{
        nombre = document.getElementById('nombre').classList.add('is-invalid');
        nombre = document.getElementById('nombre').classList.remove('is-valid')
        nombre = document.getElementById('divNombre').classList.add('invalid-feedback');
        nombre = document.getElementById('divNombre').classList.remove('valid-feedback');
        nombre = document.getElementById('spanNombre').textContent = "Porfavor llenar este campo";
    }

    //Validacion del apellido//
    apellido = document.getElementById('apellido').value;

    if(apellido != ""){
        apellido = document.getElementById('apellido').classList.add('is-valid');
        apellido = document.getElementById('apellido').classList.remove('is-invalid')
        apellido = document.getElementById('divApellido').classList.add('valid-feedback');
        apellido = document.getElementById('divApellido').classList.remove('invalid-feedback');
        apellido = document.getElementById('spanApellido').textContent = "Todo Correcto";
    }else{
        apellido = document.getElementById('apellido').classList.add('is-invalid');
        apellido = document.getElementById('apellido').classList.remove('is-valid')
        apellido = document.getElementById('divApellido').classList.add('invalid-feedback');
        apellido = document.getElementById('divApellido').classList.remove('valid-feedback');
        apellido = document.getElementById('spanApellido').textContent = "Porfavor llenar este campo";
    }

    //Validacion de la cédula//
    cedula = document.getElementById('cedula').value;

    if(cedula != ""){
        cedula = document.getElementById('cedula').classList.add('is-valid');
        cedula = document.getElementById('cedula').classList.remove('is-invalid')
        cedula = document.getElementById('divCedula').classList.add('valid-feedback');
        cedula = document.getElementById('divCedula').classList.remove('invalid-feedback');
        cedula = document.getElementById('spanCedula').textContent = "Todo Correcto";
    }else{
        cedula = document.getElementById('cedula').classList.add('is-invalid');
        cedula = document.getElementById('cedula').classList.remove('is-valid')
        cedula = document.getElementById('divCedula').classList.add('invalid-feedback');
        cedula = document.getElementById('divCedula').classList.remove('valid-feedback');
        cedula = document.getElementById('spanCedula').textContent = "Porfavor llenar este campo";
    }

    //Validacion del edad//
    edad = document.getElementById('edad').value;

    if(edad != ""){
        edad = document.getElementById('edad').classList.add('is-valid');
        edad = document.getElementById('edad').classList.remove('is-invalid')
        edad = document.getElementById('divEdad').classList.add('valid-feedback');
        edad = document.getElementById('divEdad').classList.remove('invalid-feedback');
        edad = document.getElementById('spanEdad').textContent = "Todo Correcto";
    }else{
        edad = document.getElementById('edad').classList.add('is-invalid');
        edad = document.getElementById('edad').classList.remove('is-valid')
        edad = document.getElementById('divEdad').classList.add('invalid-feedback');
        edad = document.getElementById('divEdad').classList.remove('valid-feedback');
        edad = document.getElementById('spanEdad').textContent = "Porfavor llenar este campo";
    }

    //Validacion del telefono//
    telefono = document.getElementById('telefono').value;

    if(telefono != ""){
        telefono = document.getElementById('telefono').classList.add('is-valid');
        telefono = document.getElementById('telefono').classList.remove('is-invalid')
        telefono = document.getElementById('divTelefono').classList.add('valid-feedback');
        telefono = document.getElementById('divTelefono').classList.remove('invalid-feedback');
        telefono = document.getElementById('spanTelefono').textContent = "Todo Correcto";
    }else{
        telefono = document.getElementById('telefono').classList.add('is-invalid');
        telefono = document.getElementById('telefono').classList.remove('is-valid')
        telefono = document.getElementById('divTelefono').classList.add('invalid-feedback');
        telefono = document.getElementById('divTelefono').classList.remove('valid-feedback');
        telefono = document.getElementById('spanTelefono').textContent = "Porfavor llenar este campo";
    }

}

function cargarDatos(){
    tmp = localStorage.getItem('datos');
    if(tmp != null){
        datos = JSON.parse(tmp);
        mostrarDatos();
    }
}
    
var datos = [];
var bandera;

function guardarDatos(){

    /*
    insp = document.getElementsByTagName('input');
    for(k in insp){
        if(insp[k].value == ''){
            alert("Error, debe llenar "+insp[k].id);   
        }
    }
    */

    persona = {};
    persona.matricula = document.getElementById('matricula').value;
    persona.nombre = document.getElementById('nombre').value;
    persona.apellido = document.getElementById('apellido').value;
    persona.carrera = document.getElementById('carrera').value;
    persona.sexo = document.getElementById('sexo').value;
    persona.color = document.getElementById('color').value;
    if(persona.matricula != "" && persona.nombre != "" && persona.apellido != "" && persona.carrera != "" && persona.sexo != "" && persona.color != ""){
        datos.push(persona);
        localStorage.setItem('datos', JSON.stringify(datos));
        mostrarDatos();
    }
    
}

function limpiar(){
    matricula = document.getElementById('matricula').value = "";
    nombre = document.getElementById('nombre').value = "";
    apellido = document.getElementById('apellido').value = "";
    carrera = document.getElementById('carrera').value = "";
    sexo = document.getElementById('sexo').value = "";
    color = document.getElementById('color').value = "";
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

    //Validacion de la matricula
    matricula = document.getElementById('matricula').value;

    if(matricula != ""){
        matricula = document.getElementById('matricula').classList.add('is-valid');
        matricula = document.getElementById('matricula').classList.remove('is-invalid')
        matricula = document.getElementById('divMatricula').classList.add('valid-feedback');
        matricula = document.getElementById('divMatricula').classList.remove('invalid-feedback');
        matricula = document.getElementById('spanMatricula').textContent = "Todo Correcto";
    }else{
        matricula = document.getElementById('matricula').classList.add('is-invalid');
        matricula = document.getElementById('matricula').classList.remove('is-valid')
        matricula = document.getElementById('divMatricula').classList.add('invalid-feedback');
        matricula = document.getElementById('divMatricula').classList.remove('valid-feedback');
        matricula = document.getElementById('spanMatricula').textContent = "Porfavor llenar este campo";
    }

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

    //Validacion de la carrera//
    carrera = document.getElementById('carrera').value;

    if(carrera != ""){
        carrera = document.getElementById('carrera').classList.add('is-valid');
        carrera = document.getElementById('carrera').classList.remove('is-invalid')
        carrera = document.getElementById('divCarrera').classList.add('valid-feedback');
        carrera = document.getElementById('divCarrera').classList.remove('invalid-feedback');
        carrera = document.getElementById('spanCarrera').textContent = "Todo Correcto";
    }else{
        carrera = document.getElementById('carrera').classList.add('is-invalid');
        carrera = document.getElementById('carrera').classList.remove('is-valid')
        carrera = document.getElementById('divCarrera').classList.add('invalid-feedback');
        carrera = document.getElementById('divCarrera').classList.remove('valid-feedback');
        carrera = document.getElementById('spanCarrera').textContent = "Porfavor llenar este campo";
    }

    //Validacion del Sexo//
    sexo = document.getElementById('sexo').value;

    if(sexo != ""){
        sexo = document.getElementById('sexo').classList.add('is-valid');
        sexo = document.getElementById('sexo').classList.remove('is-invalid')
        sexo = document.getElementById('divSexo').classList.add('valid-feedback');
        sexo = document.getElementById('divSexo').classList.remove('invalid-feedback');
        sexo = document.getElementById('spanSexo').textContent = "Todo Correcto";
    }else{
        sexo = document.getElementById('sexo').classList.add('is-invalid');
        sexo = document.getElementById('sexo').classList.remove('is-valid')
        sexo = document.getElementById('divSexo').classList.add('invalid-feedback');
        sexo = document.getElementById('divSexo').classList.remove('valid-feedback');
        sexo = document.getElementById('spanSexo').textContent = "Porfavor llenar este campo";
    }

    //Validacion del color//
    color = document.getElementById('color').value;

    if(color != ""){
        color = document.getElementById('color').classList.add('is-valid');
        color = document.getElementById('color').classList.remove('is-invalid')
        color = document.getElementById('divColor').classList.add('valid-feedback');
        color = document.getElementById('divColor').classList.remove('invalid-feedback');
        color = document.getElementById('spanColor').textContent = "Todo Correcto";
    }else{
        color = document.getElementById('color').classList.add('is-invalid');
        color = document.getElementById('color').classList.remove('is-valid')
        color = document.getElementById('divColor').classList.add('invalid-feedback');
        color = document.getElementById('divColor').classList.remove('valid-feedback');
        color = document.getElementById('spanColor').textContent = "Porfavor llenar este campo";
    }

}

function cargarDatos(){
    tmp = localStorage.getItem('datos');
    if(tmp != null){
        datos = JSON.parse(tmp);
        mostrarDatos();
    }
}
    
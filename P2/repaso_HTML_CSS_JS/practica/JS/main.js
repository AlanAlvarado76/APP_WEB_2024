//esto es un comentario en js de una linea

/* este 
es un 
comentario de 
varias linea
*/

//variables
var nombre="Alan Alvarado Martínez";
var nombre2 = 'Neto Cachondo'
let nombre3 = "Jose Malacara";
let edad = 20;
let estatura = 1.80
let logico = true


//mostrar contenido de variables

console.log("Hola soy la consola y tu nombre es:" + nombre3); // a traves de consola

document.write("Hola soy la consola y tu nombre es:" + nombre3)
document.write("<hr><h2>hola soy la consola y tu nombre es: "+nombre3+"</h2>")

//como mostrar contenido getElementByID
let datos = document.getElementById("informacion");
datos.innerHTML = "Hola soy un contenido de innerHTML<br>";
datos.innerHTML += "<hr><h2>Hola soy otro contenido de innerHTML</hr></h2>";
datos.innerHTML += "<hr><h2>Mi edad es: "+edad+"</hr></h2>";
datos.innerHTML += `
    <hr>
    <h2>Mi edad es: ${edad}</h2>
    <h2>Mi nombre es: ${nombre}</h2>
    </hr>
`;

//condiciones
if (edad>=18)
datos.innerHTML=`<hr><h2>Soy mayor de edad</h2>`;
else
datos.innerHTML=`<hr><h2>Soy menor edad</h2>`;

//ciclos

for(let i=1; i<=5;i++)
{
    datos.innerHTML=`<hr><h2>For: Soy el numero: ${i}</h2>`;
}


let i = 1;
while (i<=5)
{
    datos.innerHTML=`<hr><h2>While: Soy el numero: ${i}</h2>`;
    i++;
}

i=1;
do{
    datos.innerHTML+=`<hr><h2>DoWhile: soy el numero: ${i}</h2>`;
    i++; 
} while (i<=5)

//funciones
// 1- funciones que no reciben parametros y no regresan valor
//2- funciones que no reciben parametros y si regresan valor
//3 funciones que si reciben parametros y no regresan valor
//4- funciones si reciben parametros y si regresan valor

//funciones
//1. Funciones que no resiven parametros y no regresan valor
function suma1()
{
    let n1=2;
    let n2=3;

    let sum=n1+n2;
    datos.innerHTML=`<hr><h2>La suma 1 es ${sum} </h2>`;
}

suma1();
//2. Funciones que no resiven parametros y regresan un valor
function suma2()
{
    let n1=7;
    let n2=3;

    let sum=n1+n2;
    return sum;
}

let sum=suma2();
datos.innerHTML+=`<hr><h2>La suma 2 es ${sum} </h2>`;

//3. Funciones que resiven parametros y no regresan valor
function suma3(numero1, numero2)
{
    let n1=numero1;
    let n2=numero2;

    let sum=n1+n2;
    datos.innerHTML+=`<hr><h2>La suma 3 es ${sum} </h2>`;

}

suma3(5,7)

//4. Funciones que resiven parametros y regresan un valor
function suma4(numero1, numero2)
{
    let n1=numero1;
    let n2=numero2;

    let sum1=n1+n2;
    return sum1;
}
let sum1=suma4(10, 7)
datos.innerHTML+=`<hr><h2>La suma 4 es ${sum1} </h2>`;

//arreglos

let animales = [];
animales[0] = "perro";
animales[1] = "gallina";
animales[2] = "Perico";

let animales2 =["Leon", "Tigre", "Elefante"];


for(let i= 0; i<animales.length;i++)
{
    datos.innerHTML+=`<hr><h2>El animal es:   ${animales[i]} </h2>`;
}

animales2.forEach(element => {
    datos.innerHTML+=`<hr><h2>El animal es:   ${element} </h2>`;
});



//alerta

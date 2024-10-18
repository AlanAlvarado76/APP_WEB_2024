function operacion()
{
    let n1, n2, tipo_ope, resultado, imprimir;

    n1 =parseFloat(document.getElementById("n1").value);
    n2 =parseFloat(document.getElementById("n2").value);

    tipo_ope =document.getElementById("tipo").value;

    if (isNumber(n1) && isNumber(n2))
    {
        switch(tipo_ope)
        {
                case '+':
                resultado = n1 + n2;
                break;
                case '-':
                resultado = n1 - n2;
                break;
                case '*':
                resultado = n1 * n2;
                break;
                case '/':
                if (n2 !== 0) {
                resultado = n1 / n2;
                } else {
                    resultado = "No se puede dividir por 0";
                }
                break;
        }

        imprimir = document.getElementById("result").innerHTML=`<h2>${n1} ${tipo_ope} ${n2} = ${resultado} </h2>`;

    }
    else
        alert("Ingrese un numero por favor... ");
    
    

    
}


function isNumber(n)
{
        return !isNaN(parseInt(n) && isFinite(n));
}
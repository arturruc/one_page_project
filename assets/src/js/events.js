
let x ="Event działa"

function mojaFunkcja() {
    document.getElementById("mojeid").innerHTML = x
}

function pierwsza(x) {

    x.style.height = "1200px"
    x.style.width = "1200px"
}

function druga(x){
    x.style.height = "600px"
    x.style.width = "600px"
}

document.getElementById("mojeid1").addEventListener("scroll", myFunction);

function myFunction () {
    document.getElementById("mojeid2").innerHTML = "teraz scrollujesz!"
}
 


function walidacja() {
    const inp1 = document.getElementById("pole1")
    
    if(!inp1.checkValidity()) {
        document.getElementById("info").innerHTML = inp1.validationMessage;

    }

    else {
        document.getElementById("info").innerHTML = "Wartosc ok"
    }

}


function alamakota () {

    var i = 5

    for (var i = 0; i < 10; i++) {
        console.log(i)
        document.write("Ala ma kota")
    }
}

function obiekty() {

    // const array = 
    // [
    //     {marka: "Ford" , model: "Mondeo" , rok_produkcji: 2010}
    //     {marka: "Mercedes" , model: "E220" , rok_produkcji: 2012}
    // ]
    const car = {marka: "Ford" , model: "Mondeo" , rok_produkcji: 2010}

    if (car.rok_produkcji > 2000) {
        document.getElementById("info").innerHTML = "Samochód nowszy niż 2000 rok"
    }
    else {
        document.getElementById("info").innerHTML = "Samochód starszy niż 2000 rok"
    }

    // if(array[1].car.rok_produkcji<2012) {
    //     document.getElementById("info").innerHTML = "Samochód starszy niż 2000 rok"
    // }
    // else {
    //     document.getElementById("info").innerHTML = "Samochód nowszy niż 2000 rok"
    // }
}

const array_cars = ["Audi", "BMW", "Mercedes", "Skoda"]

let i = 0;
let text = "";
while (array_cars[i]) {
    text += array_cars[i] + "&nbsp" ;
    console.log(array_cars[i])
    i++;
    
}
document.getElementById("info").innerHTML = text
function Valuuta() {
    let v=document.getElementById("val");
    let Colon=document.getElementById("Colon");
    let Dollar=document.getElementById("Dollar");
    let Hryvnia=document.getElementById("Hryvnia");
    let Pound=document.getElementById("Pound");
    let Yen=document.getElementById("Yen");

    if(Colon.checked){
        v.src="image/Colon.png";
    }
    if(Dollar.checked){
        v.src="image/Dollar.png";
    }
    if(Hryvnia.checked){
        v.src="image/Hryvnia.png";
    }
    if(Pound.checked){
        v.src="image/Pound.png";
    }
    if(Yen.checked){
        v.src="image/Yen.png";
    }
}
function arvuta(valuu, hind){
    return (valuu*hind).toFixed(2);
}
const Colon = 0.0017;
const Dollar = 0.87;
const Hryvnia = 0.02;
const Pound = 1.14;
const Yen = 0.0057;

function arvutaValuut(){
    let summ=document.getElementById('summ');
    let valuu=document.getElementById('valuu').value;
    let src=document.getElementById('val').getAttribute('src');
    if(src==="image/Colon.png"){
        summ.innerHTML=arvuta(valuu, Colon) + " euro";
    }
    if(src==="image/Dollar.png"){
        summ.innerHTML=arvuta(valuu, Dollar) + " euro";
    }
    if(src==="image/Hryvnia.png"){
        summ.innerHTML=arvuta(valuu, Hryvnia) + " euro";
    }
    if(src==="image/Pound.png"){
        summ.innerHTML=arvuta(valuu, Pound) + " euro";
    }
    if(src==="image/Yen.png"){
        summ.innerHTML=arvuta(valuu, Yen) + " euro";
    }
}
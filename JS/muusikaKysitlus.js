function muusikult() {
    let v=document.getElementById("vastus");
    let Nervy=document.getElementById("Nervy");
    let Eminem=document.getElementById("Eminem");
    let LDR=document.getElementById("Lana Del Rey");
    let Marino=document.getElementById("Marino");

    let valik="Sinu valitud muusikud: ";
    if(Nervy.checked){
        valik+=Nervy.value+", ";
    }
    if(Eminem.checked){
        valik+=Eminem.value+", ";
    }
    if(LDR.checked){
        valik+=LDR.value+", ";
    }
    if(Marino.checked){
        valik+=Marino.value+", ";
    }
    v.innerHTML=valik;
}
function Arvad() {
    let text=document.getElementById("text");
    let v1=document.getElementById("vastus1");
    v1.innerText= "Sinu arvamus: "+text.value;
}
function Tund(){
    let v2=document.getElementById("vastus2");
    let tund=document.getElementById("tund");

    v2.innerHTML="Sa kuulad muusikat " + tund.value + " tundi pأ¤evastund" + " punkti";
}
function vali() {
    let v3=document.getElementById("vastus3");
    let jah=document.getElementById("Jah");
    let ei=document.getElementById("Ei");

    if(jah.checked){
        v3.innerHTML=jah.value;
    }
    else if(ei.checked){
        v3.innerHTML=ei.value;
    }
    else{
        v3.innerHTML="Palun vali jah vأµi ei";
    }
}
function RadioJaamu() {
    let list=document.getElementById("raadiojaam");
    let v4=document.getElementById("vastus4");

    v4.innerText= "Sinu nimetatud jaamad:  "+list.value;
}
function valiStiil(){
    let v5=document.getElementById("vastus5");
    let stiil=document.getElementById("stiilid");

    if(stiil.selectedIndex!==0){
        v5.innerHTML="Sinu vastus: "+stiil.value;
    }
    else{
        v5.innerHTML="Tee ripploendi lahti ja vali";
    }
}

function puhasta() {
    let v=document.getElementById("vastus");
    let Nervy=document.getElementById("Nervy");
    let Eminem=document.getElementById("Eminem");
    let LDR=document.getElementById("Lana Del Rey");
    let Marino=document.getElementById("Marino");
    let text=document.getElementById("text");
    let v1=document.getElementById("vastus1");
    let v2=document.getElementById("vastus2");
    let tund=document.getElementById("tund");
    let v3=document.getElementById("vastus3");
    let jah=document.getElementById("Jah");
    let ei=document.getElementById("Ei");
    let list=document.getElementById("raadiojaam");
    let v4=document.getElementById("vastus4");
    let v5=document.getElementById("vastus5");
    let stiil=document.getElementById("stiilid");

    v.innerText="";
    Nervy.checked=false;
    Eminem.checked=false;
    LDR.checked=false;
    Marino.checked=false;
    text.value="Sisesta siia...";
    v1.innerText="";
    v2.innerText="";
    tund.value="";
    v3.innerText="";
    jah.checked=false;
    ei.checked=false;
    list.value="";
    v4.innerText="";
    v5.innerText="";
    stiil.value=0;
}
function salvesta() {
    let v=document.getElementById("vastus").value;
    let v1=document.getElementById("vastus1").value;
    let v2=document.getElementById("vastus2").value;
    let v3=document.getElementById("vastus3").value;
    let v4=document.getElementById("vastus4").value;
    let v5=document.getElementById("vastus5").value;
    let kokku = document.getElementById("kokkuvote");
    kokku.textHTML = 'Sa valisid: ' + v +v1+v2+v3+v4+v5;
}
function salvesta() {
    let v = document.getElementById("vastus").innerText;
    let v1 = document.getElementById("vastus1").innerText;
    let v2 = document.getElementById("vastus2").innerText;
    let v3 = document.getElementById("vastus3").innerText;
    let v4 = document.getElementById("vastus4").innerText;
    let v5 = document.getElementById("vastus5").innerText;

    let vastused = document.getElementById("vastused");

    vastused.innerHTML = v + "<br>" + v1 + "<br>" + v2 + "<br>" + v3 + "<br>" + v4 + "<br>" + v5 + "<br>";
}
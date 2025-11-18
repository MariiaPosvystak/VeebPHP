function juhuslikPilt() {
    //massiiv piltidest
    const image=[
        'image/1.png',
        'image/2.png',
        'image/3.png',
        'image/4.png',
    ];
    //html failis mأ¤أ¤ratud pilt ku id=pilt
    const pilt=document.getElementById('pilt');
    //Math.floor - أ¼mardamine
    //Math.random - juhuslik arv
    //pildid.length - elementide arv piltide massiivis
    const randomPilt=Math.floor(Math.random() * image.length);

    pilt.src = image[randomPilt];
}
function teeOmaValik(){
    let pilt=document.getElementById('pilt');
    let vastus=document.getElementById('vastus');
    let valikud=document.getElementById('valikud'); //mitu elemendi أ¼he nimega valikud

    //tsأ¼kl for
    for(let i=0;i<valikud.length;i++){
        //if(valik.selectedIndex=valikud[i].value){
        if(pilt.getAttribute('src')===valikud[i].value){
            vastus.innerHTML="أµige";
            vastus.style.color="green";
        }
        else {
            vastus.innerHTML="Mأµtle veel, sa vastasid valesti!";
            vastus.style.color="red";
        }
        //}
    }
}
function arvuta(kogus, hind){
    return (kogus*hind).toFixed(2);
    //toFixed(2) - vأµtab 2 numbre peale koma
}
const roosaHind = 1;
const orangeHind = 2.2;
const varviHind = 0;
const punaneHind = 2.3;

function arvutaPildiHind(){
    let summa=document.getElementById('summa');
    let kogus=document.getElementById('kogus').value;
    let src=document.getElementById('pilt').getAttribute('src');
    if(src==="image/1.png"){
        summa.innerHTML=arvuta(kogus, roosaHind) + "euro";
    }
    if(src==="image/2.png"){
        summa.innerHTML=arvuta(kogus, orangeHind) + "euro";
    }
    if(src==="image/3.png"){
        summa.innerHTML=arvuta(kogus, varviHind) + "euro";
    }
    if(src==="image/4.png"){
        summa.innerHTML=arvuta(kogus, punaneHind) + "euro";
    }
}
/* أœlesanne VeebiKalkulaator
Veebialkulaatori teema mأµtle isa vأ¤lja
1. radio-nupude valikust vahetub pilt. (
2. Kأ¼sitakse kogus ja nأ¤itakse lأµpphind mis sأµttub pildist ja kogusest
3. Lisa veel oma tingimus
4. Kui JS tأ¶أ¶tab, lisa CSS kujundust ja lisa WP uus leht ja pane JS koodikأ¤ima
*/
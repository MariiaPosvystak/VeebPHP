function PaevjaAeg() {
    const now = new Date();

    const kp = now.toLocaleDateString();
    const aeg = now.toLocaleTimeString();
    const kpaeg = now.toLocaleString();

    let p=document.getElementById("result");
    let a=document.getElementById("result2");
    let pa=document.getElementById("result3");

    p.innerHTML="Kuupäev: " + kp;
    a.innerHTML="Kellaaeg: " + aeg;
    pa.innerHTML="Kuupäev ja kellaaeg: " + kpaeg;

    console.log("Kuupäev: ", kp);
    console.log("Kellaaeg: ", aeg);
    console.log("Kuupäev ja kellaaeg: ", kpaeg);
}
function Minu_sp() {
    const before = new Date(2025, 9, 12);
    const now = new Date();
    const ms = before.getTime() - now.getTime();
    const paevad = ms / (1000 * 60 * 60 * 24); // sekundid * minutid * tunnid * pأ¤evad

    let sp=document.getElementById("spresult");

    sp.innerHTML=paevad + " jäänud kuni sünnipäev";

    console.log("Ajavahemik päevades: ", paevad);
}

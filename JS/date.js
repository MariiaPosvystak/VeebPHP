function PaevjaAeg() {
    const now = new Date();

    const kp = now.toLocaleDateString();
    const aeg = now.toLocaleTimeString();
    const kpaeg = now.toLocaleString();

    let p=document.getElementById("result");
    let a=document.getElementById("result2");
    let pa=document.getElementById("result3");

    p.innerHTML="Kuupأ¤ev: " + kp;
    a.innerHTML="Kellaaeg: " + aeg;
    pa.innerHTML="Kuupأ¤ev ja kellaaeg: " + kpaeg;

    console.log("Kuupأ¤ev: ", kp);
    console.log("Kellaaeg: ", aeg);
    console.log("Kuupأ¤ev ja kellaaeg: ", kpaeg);
}
function Minu_sp() {
    const before = new Date(2025, 9, 12);
    const now = new Date();
    const ms = before.getTime() - now.getTime();
    const paevad = ms / (1000 * 60 * 60 * 24); // sekundid * minutid * tunnid * pأ¤evad

    let sp=document.getElementById("spresult");

    sp.innerHTML=paevad + " jأ¤أ¤nud kuni sأ¼nnipأ¤ev";

    console.log("Ajavahemik pأ¤evades: ", paevad);
}

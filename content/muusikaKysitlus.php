<div id="mk">
    <h1>Muusika küsitlus</h1>
    <form name="MuusikaForm">
        <table id="kysitlus">
            <tr>
                <td>
                    <strong>Milliseid muusikuid/ansambleid sa tead?</strong>
                    <br>
                    <input type="checkbox" name="valik" id="Nervy" value="Nervy" onchange="muusikult()">
                    <label for="Nervy">Nervy</label>
                    <br>
                    <input type="checkbox" name="valik" id="Eminem" value="Eminem" onchange="muusikult()">
                    <label for="Eminem">Eminem</label>
                    <br>
                    <input type="checkbox" name="valik" id="Lana Del Rey" value="Lana Del Rey" onchange="muusikult()">
                    <label for="Lana Del Rey">Lana Del Rey</label>
                    <br>
                    <input type="checkbox" name="valik" id="Marino" value="Marino" onchange="muusikult()">
                    <label for="Marino">Marino</label>
                </td>
                <td>
                    <div id="vastus"></div>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="text"><b>Mida arvad muusika kuulamisest koolis? </b></label>
                    <br>
                    <textarea name="message" id="text" oninput="Arvad()">Sisesta siia...</textarea>
                </td>
                <td>
                    <div id="vastus1"></div>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tund"><b>Mitu tundi päevas sa kuulad muusikat? </b></label><br>
                    <input type="number" id="tund" name="tund" min="1" max="24" placeholder="tund" oninput="Tund()">
                </td>
                <td>
                    <div id="vastus2"></div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Kas sa kuulad raadiot?</strong>
                    <br>
                    <input type="radio" name="raadio" id="Jah" value="Raadio kuulamine: jah" onchange="vali()">
                    <label for="Jah">Jah</label>
                    <input type="radio" name="raadio" id="Ei" value="Raadio kuulamine: ei" onchange="vali()">
                    <label for="Ei">Ei</label>
                </td>
                <td>
                    <div id="vastus3"></div>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="raadiojaam"><b>Milliseid raadiojaamu oskad nimetada?</b></label>
                    <br>
                    <input list="raadiojaamu" name="raadio" id="raadiojaam" onchange="RadioJaamu()">
                    <datalist id="raadiojaamu">
                        <option value="Radio Nova">
                        <option value="Vikerraadio">
                        <option value="Sky Radio">
                        <option value="Russkoe Radio">
                        <option value="Europa Plus">
                    </datalist>
                </td>
                <td>
                    <div id="vastus4"></div>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="stiilid"><b>Millist muusikat sa kõige rohkem kuulad?</b></label>
                    <br>
                    <select id="stiilid" name="stiilid" onchange="valiStiil()">
                        <option value="">...</option>
                        <option value="Rock">Rock</option>
                        <option value="Pop">Pop</option>
                        <option value="Hip-hop">Hip-hop</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Räpp">Räpp</option>
                        <option value="Disko">Disko</option>
                    </select>
                </td>
                <td>
                    <div id="vastus5"></div>
                </td>
            </tr>
        </table>
        <br>
        <input id="b" type="button" value="Puhasta" onClick="puhasta()">
        <input id="b2" type="button" value="Salvesta" onClick="salvesta()">
        <br>
    </form>
</div>
<div id="vk">
    <h1>Vastused</h1>
    <p id="vastused"></p>
</div>

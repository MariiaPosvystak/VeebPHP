<h1>Random pilti näitamine</h1>
<table>
    <tr>
        <td>
            <input type="button" value="random pilt" onclick="juhuslikPilt()">
            <br>
            <img src="" alt="" id="pilt">
        </td>
        <td id="vastus">Vastus: </td>
        <td>
            <label for="valikud">Vali mida sa näed pildil</label>
            <br>
            <select name="valikud" id="valikud" onchange="teeOmaValik()">
                <option value="">--</option>
                <option value="pildid/1.png">roose pilt</option>
                <option value="pildid/2.png">orange pilt</option>
                <option value="pildid/3.png">värvi pilt</option>
                <option value="pildid/4.png">punane pilt</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="kogus">Pildid</label>
            <input type="number" id="kogus" min="1" max="100" value="10" onchange="arvutaPildiHind()">
        </td>
        <td>
            Summa:
        </td>
        <td id="summa">

        </td>
    </tr>
</table>
<h1>Valuutakalkulaator</h1>
<table>
    <tr>
        <td>
            <strong>Millist valuutat sa soovid lugeda? </strong>
            <br>
            <input type="radio" name="valuuta" id="Colon" value="" onchange="Valuuta()">
            <label for="Colon">Colon (Costa Rica)</label>
            <br>
            <input type="radio" name="valuuta" id="Dollar" value="" onchange="Valuuta()">
            <label for="Dollar">Dollar (USA)</label>
            <br>
            <input type="radio" name="valuuta" id="Hryvnia" value="" onchange="Valuuta()">
            <label for="Hryvnia">Grivna (Ukraina)</label>
            <br>
            <input type="radio" name="valuuta" id="Pound" value="" onchange="Valuuta()">
            <label for="Pound">Pound (Suurbritannia)</label>
            <br>
            <input type="radio" name="valuuta" id="Yen" value="" onchange="Valuuta()">
            <label for="Yen">Yen (Jaapan)</label>
        </td>
        <td>Valuut:</td>
        <td>
            <img src="" alt="" id="val">
        </td>
    </tr>
    <tr>
        <td>
            <label for="valuu">Arv: </label>
            <input type="number" id="valuu" min="1" max="100" value="10" onchange="arvutaValuut()">
        </td>
        <td>
            Summa:
        </td>
        <td id="summ">
        </td>
    </tr>
</table>

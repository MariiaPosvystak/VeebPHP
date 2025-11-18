<?php
echo "<h2>GIT Käsud</h2>";
echo "<ol>";
echo "<li>Repo loomine";
echo "<pre>git init</pre>";
echo "</li>";
?>
<li>Konfigureerimine
<pre>
    git config --global user.name "Mariia Posvystak"
    git config --global user.email "posvystakmariia@gmail.com"
    git config --global --list
</pre>
</li>
<li>
    Ssh võti loomine
    <pre>
        > ssh-keygen -o -t rsa -C "posvystakmariia@gmail.com"
        Overwrite (y/n)? y
        Enter passphrase (empty for no passphrase):
        Enter same passphrase again:
    </pre>
    id_rsa.pub võti kopeertakse githubi nagu deploy key
</li>
<li>
    Jälgimise lisamine ja commit'i tegemine
    <pre>

        git status
        git add .
        git commit -a -m "commiti tekst
    </pre>
</li>
<?php
echo "<li>GITHUB projektiga sidumine";
echo "<pre>";
echo "cd php1.tund
        git status
        git remote add origin git@github.com:MariiaPosvystak/VeebPHP.git
        git branch -M main
        git push -u origin main";
echo "</pre>";
echo "</li>";
echo "<li>Projekti kloonimine desktopi.<br>
 * Kontrolli et id_rsa võti on olemas .ssh kaustas <br>
 * GIT CMD on lahti ja <br>";
echo "<pre>";
echo "git clone git@github.com:MariiaPosvystak/VeebPHP.git";
echo "</pre>";
echo "</li>";
echo "</ol>";
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
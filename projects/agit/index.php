<title>Finobu | Projects Agit</title>
<?php
include('../../includes/head.php');
include('../../includes/navbar.php');
?>
<div class="container section p-5" style="padding-top: 120px">
<div id="header">

</div><!-- end header -->

<div class="wrapper">

    <section>
        <h1 id="-agit"><strong>♖ AGIT</strong></h1>
        <span class="credits left">Project maintained by <a href="https://github.com/nicodemus-opon">nicodemus-opon</a></span>

        <p>Agit is a CLI for automating Git Processes</p>

        <h2 id="installation">installation</h2>

        <h4 id="linux">Linux</h4>

        <div class="highlighter-rouge"><div class="highlight"><pre class="highlight"><code>git clone https://github.com/nicodemus-opon/agit.git ~/agit
cd ~/agit &amp;&amp; chmod +x agit.py
echo "alias agit='python3 ~/agit/agit.py'" &gt;&gt; ~/.bash_aliases
source ~/.bash_aliases
</code></pre></div></div>

        <h4 id="mac">Mac</h4>

        <div class="highlighter-rouge"><div class="highlight"><pre class="highlight"><code>git clone https://github.com/nicodemus-opon/agit.git ~/agit
cd ~/agit &amp;&amp; chmod +x agit.py
echo "alias agit='agit.py'" &gt;&gt; ~/.bash_profile &amp;&amp; source ~/.bash_profile
echo 'export PATH="$PATH:~/agit"' &gt;&gt; ~/.bash_profile &amp;&amp; source ~/.bash_profile
</code></pre></div></div>

        <h4 id="windows">Windows</h4>

        <div class="highlighter-rouge"><div class="highlight"><pre class="highlight"><code>¯\_(ツ)_/¯
</code></pre></div></div>

        <h2 id="usage">Usage</h2>
        <h3 id="initialize-repo-and-push-to-remote-repo">initialize repo and push to remote repo</h3>

        <div class="highlighter-rouge"><div class="highlight"><pre class="highlight"><code>agit init https://github.com/username/reponame.git
</code></pre></div></div>

        <h3 id="commit-and-push-changes">Commit and push changes</h3>

        <div class="highlighter-rouge"><div class="highlight"><pre class="highlight"><code>agit commit
</code></pre></div></div>

        <h3 id="realtime-commit-and-push-changes">Realtime Commit and push changes</h3>

        <div class="highlighter-rouge"><div class="highlight"><pre class="highlight"><code>agit serve
</code></pre></div></div>

        <h2 id="contributing">Contributing</h2>
        <p>Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.</p>

        <p>Please make sure to update tests as appropriate .</p>

        <h2 id="license">License</h2>
        <p><a href="https://choosealicense.com/licenses/mit/">MIT</a></p>


    </section>

</div>

</div>

<?php
include('../../includes/footer.php');
include('../../includes/end.php');

?>

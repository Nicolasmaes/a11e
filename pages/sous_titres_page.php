<?php include "../includes/header.php"; ?>

<div class="test">
    <img src="../assets/images/pictures/deafgroup.png" alt="" >
    <p class="text_sous_titres">
        Les sous-titres
    </p>

    <header>
        <img src="../assets/images/icons/logo-a11e-white.svg" alt="">

        <div class="menu_button">
            <div class="cross">x</div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="menu_mobile">
            <span>Interview</span>
            <span>Statistiques</span>
            <span>LSF</span>
            <span>Sous-titre</span>
        </div>

        <div class="menu_pc">
            <span>Interview</span>
            <span>Statistiques</span>
            <span>LSF</span>
            <span>Sous-titre</span>
        </div>
    </header>
</div>

<div class="margin">

    <main class="main__sous_titres_page">

        <p class="main__sous_titres_page__title_mobile">Les Sous-titres</p>

        <p>
            Historiquement au cinéma, tout commence avec les films muets. <br>
            Les situations et dialogues étaient retranscrits complètement à part sur des fonds noirs, en quittant la scène des yeux. <br><br>

            <a href="https://www.youtube.com/watch?v=DJcTeHsZ4m4" style="font-style: italic;"><span class="embed">Extrait  de film muet</span></a><br><br>

            On peut imaginer que ces films étaient et sont toujours agréables à regarder par des déficients auditifs. <br><br><br>


            Les sous-titres (ou closed-caption en anglais), sont les textes qui s'affichent durant une vidéo, pour y décrire l'audio, que ce soit les dialogues, les musiques, ou les sons ambiants. <br><br>

            La transcription designe le fait de transformer le son en texte. <br><br>

            Idéalement un sous-titre doit être visible au moins 1 seconde, comporter 2 lignes maximum et contenir 40 caractères par lignes maximum. Pour sous-titrer une vidéo nous-mêmes, il existe plusieurs formats de fichiers dont c'est le rôle. Les plus populaires sont les formats srt et vtt.
        </p>

        <p>
            <span style="font-weight: bold;">Ces fichier sont écrits de la manière suivante :</span> <br><br>

            WEBVTT - Ce fichier possède des répliques. <br><br>

            <span class="line-height">
                <span class="embed">14</span> <br>   
                <span class="embed">00:01:14.815 --> 00:01:18.114</span> <br> 
                <span class="embed">Quoi ?</span> <br>
                <span class="embed">Où sommes-nous ?</span> 
            </span><br><br><br>

            <span class="line-height">
                <span class="embed">15</span> <br>
                <span class="embed">00:01:18.171 --> 00:01:20.991</span> <br>
                <span class="embed">C'est le pays des grandes chauves-souris.</span> 
            </span><br><br><br>

            <span class="line-height">
                <span class="embed">16</span> <br>
                <span class="embed"> 00:01:21.058 --> 00:01:23.868</span> <br> 
                <span class="embed">[ Cris perçant de chauves-souris ]</span> <br>
                <span class="embed">Elles ne veulent pas aller dans vos cheveux. Elles attrapent les insectes.</span> 
            </span><br><br>

            Chaque sous-titre contient le timecode durant lequel il doit apparaître et le texte à afficher durant cette courte période. <br>
            Il est possible d'y inclure des commentaires pour faciliter le travail des intégrateurs web.
        </p>

        <p>
            <span style="font-weight: bold;">Ces fichiers s'intègrent de cette manière dans le fichier html d'un site web :</span> <br><br>

            <span class="line-height">
                <span class="embed">&#60video controls autoplay src="video.webm"&#62</span> <br>
                <span class="embed">&#60track default src="track.vtt"&#62</span> <br>
                <span class="embed">&#60/video&#62</span> 
            </span><br><br>

            Bien sûr, les navigateurs savent afficher les sous-titres. <br>
            Mais il est toujours possible pour les développeurs de personnaliser ces sous-titres dans le fichier CSS en ciblant les phrases précisément.  <br><br><br>


            <span class="embed">::cue(#\31) {color: yellow;}</span> <br><br>

            Cette ligne de CSS donnera la couleur jaune au texte numéro 31 dans le fichier.vtt. <br><br><br>

        
            De nos jours il est encore plus facile de sous-itrer des vidéos en passant par Youtube. <br>
            En effet, Youtube propose de sous-titrer directement les vidéos sur sa plateforme, en y ajoutant les sous-titres avec les timecodes. <br><br>

            Bien qu'aujourd'hui les ordinateurs savent sous-titrer des vidéos. Il reste tout de même plus commode de laisser ce trabail à un humain qui saura exactement décrire les sons ambiants et les dialogues sans forcément faire du mot à mot. <br><br>

            Il est aussi important de faire traduire les dialogues d'une langue à l'autre par un humain, car les expressions populaires (ainsi que les blagues) de chaque langue ne se traduisent pas mot à mot.
        </p>

        <div class="paragraphe">
            <span style="font-weight: bold;">Le pouvoir de la communauté</span><br><br> 

            Nous avons pu contacter l'équipe Addic7ed, qui fournit des sous-titres anglais pour un grand nombre de séries. <br>
            Ils nous ont dit qu'ils font ça pour les sourds en premier lieu. Leur équipe est composée de 40 personnes venant du monde entier. <br>
            Ce sont les utilisateurs qui s'occupent ensuite des traductions dans chaque pays. Ces derniers peuvent mettre en ligne leurs sous-titres dirtectement sur la plateforme Addic7ed.
        </div>

        <div class="paragraphe">
            <span style="font-weight: bold;">Un peu d'humour</span><br><br>

            Lors la transcription d'informations non-verbales, une situation peut donner lieu à des sous-titres plutôt cocasses, je vous laisse juger : <br><br>

            interview d'un nageur : « It’s been my dream since I was a little buoy » (buoy signifie bouée) <br><br>

            le robot dans star wars : « sad beep »<br><br>

            lors d'une situation tendue : « intensity insifies »<br><br>

            une journaliste à la télévision : « blah blah blah » <br><br>

            un personnage vexé : « screams internally »
        </div>
        
        
        <p> 
            <span style="font-weight: bold;"> Sources :</span> <br><br>
            
            <span style="font-style: italic;" class="line-height sources">
                <a href="https://en.wikipedia.org/wiki/Closed_captioning">Closed caption</a> 
                <a href="https://www.bloghoptoys.fr/masques-un-picto-pour-les-malentendants">Masques pour les malentendants</a>
                <a href="https://www.francetvinfo.fr/internet/telephonie/avec-l-application-rogervoice-les-personnes-sourdes-et-malentendantes-peuvent-appeler-avec-leur-telephone_2975031.html">RogerVoice</a>
                <a href="http://babylon-design.com/surdite-accessibilite-sourds-sur-internet/">BabylonDesign</a>
                <a href="https://www.amberscript.com/fr/accessibilite-numerique">AmberScript</a>
                <a href="https://www.addic7ed.com/">Addic7ed</a>
            </span>
        </p>
       

    </main>

</div>

<?php include "../includes/footer.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>a11e</title>
</head>

<body>
    <div class="margin">
    <div class="main_sous-titres">

       <h1>Les sous-titres</h1>

       <p>
            Historiquement au cinéma, tout commence avec les films muets. <br>
            Les situations et dialogues étaient retranscrits complètement à part sur des fonds noirs, en quittant la scène des yeux. <br><br>

            <a href="https://www.youtube.com/watch?v=DJcTeHsZ4m4">extrait  de film muet</a> <br><br>

            On peut imaginer que ces films étaient et sont toujours agréables à regarder par des déficients auditifs. <br><br>

            Les sous-titres (ou closed-caption en anglais), sont les textes qui s'affichent durant une vidéo, pour y décrire l'audio, que ce soit les dialogues, les musiques, ou les sons ambiants. 
            </p>

            <p>
            La transcription designe le fait de transformer le son en texte. <br><br>

            Idéalement un sous-titre doit être visible au moins 1 seconde, comporter 2 lignes maximum et contenir 40 caractères par lignes maximum. <br><br>

            Pour sous-titrer une vidéo nous-mêmes, il existe plusieurs formats de fichiers dont c'est le rôle. Les plus populaires sont les formats srt et vtt. <br><br> 
        </p>

        <p>
            Ces fichier sont écrits de la manière suivante : <br><br>

            WEBVTT - Ce fichier possède des répliques. <br><br>

            14 <br>
            00:01:14.815 --> 00:01:18.114 <br>
            Quoi? <br>
            Où sommes-nous? <br><br>

            15 <br>
            00:01:18.171 --> 00:01:20.991  <br>
            C'est le pays des grandes chauves-souris.<br><br>

            16  <br>
            00:01:21.058 --> 00:01:23.868 <br> 
            [ Cris perçant de chauves-souris ] <br> 
            Elles ne veulent pas aller dans vos cheveux. Elles attrapent les insectes.<br><br>

            Chaque sous-titre contient le timecode durant lequel il doit apparaître et le texte à afficher durant cette courte période. <br>
            Il est possible d'y inclure des commentaires pour faciliter le travail des intégrateurs web.
        </p>

            Ces fichiers s'intègrent de cette manière dans le fichier html d'un site web : 

            <video controls autoplay src="video.webm">
                <track default src="track.vtt">  
            </video>

Bien sûr, les navigateurs savent afficher les sous-titres.  
Mais il est toujours possible pour les développeurs de personnaliser ces sous-titres dans le fichier CSS en ciblant les phrases précisément.  

`::cue(#\31) {color: yellow;}`

Cette ligne de CSS donnera la couleur jaune au texte numéro 31 dans le fichier.vtt.

De nos jours il est encore plus facile de sous-itrer des vidéos en passant par Youtube.
En effet, Youtube propose de sous-titrer directement les vidéos sur sa plateforme, en y ajoutant les sous-titres avec les timecodes.

Bien qu'aujourd'hui les ordinateurs savent sous-titrer des vidéos. Il reste tout de même plus commode de laisser ce trabail à un humain qui saura exactement décrire les sons ambiants et les dialogues sans forcément faire du mot à mot.

Il est aussi important de faire traduire les dialogues d'une langue à l'autre par un humain, car les expressions populaires (ainsi que les blagues) de chaque langue ne se traduisent pas mot à mot.

## Le pouvoir de la communauté

Nous avons pu contacter l'équipe Addic7ed, qui fournit des sous-titres anglais pour un grand nombre de séries.
Ils nous ont dit qu'ils font ça pour les sourds en premier lieu. Leur équipe est composée de 40 personnes venant du monde entier.
Ce sont les utilisateurs qui s'occupent ensuite des traductions dans chaque pays. Ces derniers peuvent mettre en ligne leurs sous-titres dirtectement sur la plateforme Addic7ed.

## Un peu d'humour

Lors la transcription d'informations non-verbales, une situation peut donner lieu à des sous-titres plutôt cocasses, je vous laisse juger : 

interview d'un nageur : 

`It's been my dream since I was a little buoy`

makes "I don't know" sound

`screaming like a sissy`

le robot dans star wars :   
`sad beep`

lors d'une situation tendue :    
`intensity insifies`

une journaliste à la télévision :   
`blah blah blah`

un personnage vexé :   
`screams internally`

[Closed caption](https://en.wikipedia.org/wiki/Closed_captioning)
 ![](pictures/degres-automatisation.png)

[Masques pour les malentendants](https://www.bloghoptoys.fr/masques-un-picto-pour-les-malentendants)

 [RogerVoice](https://www.francetvinfo.fr/internet/telephonie/avec-l-application-rogervoice-les-personnes-sourdes-et-malentendantes-peuvent-appeler-avec-leur-telephone_2975031.html)

 [BabylonDesign](http://babylon-design.com/surdite-accessibilite-sourds-sur-internet/)

 [AmberScript](https://www.amberscript.com/fr/accessibilite-numerique)

 
 [Addic7ed](https://www.addic7ed.com/)
        </p>
    </div>

    </div>
    
</body>
</html>
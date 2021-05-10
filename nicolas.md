Les sous-titres

Historiquement au cinéma, tout commence avec les films muets.
Les situations et dialogues étaient retranscrits complètement à part sur des fonds noirs, en quittant la scène des yeux.

[extrait  de film muet](https://www.youtube.com/watch?v=DJcTeHsZ4m4)

On peut imaginer que ces films étaient et sont toujours agréables à regarder par des déficients auditifs.

Les sous-titres (ou closed-caption en anglais), sont les textes qui s'affichent durant une vidéo, pour y décrire l'audio, que ce soit les dialogues, les musiques, ou les sons ambiants.

La transcription designe le fait de transformer le son en texte.

Idéalement un sous-titre doit être visible au moins 1 seconde, comporter 2 lignes maximum et contenir 40 caractères par lignes maximum.

Pour sous-titrer une vidéo nous-mêmes, il existe plusieurs formats de fichiers dont c'est le rôle. Les plus populaires sont les formats srt et vtt.

Ces fichier sont écrits de la manière suivante :

`WEBVTT - Ce fichier possède des répliques.`

`14`   
`00:01:14.815 --> 00:01:18.114 `  
`Quoi? `   
`Où sommes-nous?`

`15`  
`00:01:18.171 --> 00:01:20.991`  
`C'est le pays des grandes chauves-souris.`

`16`  
`00:01:21.058 --> 00:01:23.868`  
`[ Cris perçant de chauves-souris ]`  
`Elles ne veulent pas aller dans vos cheveux. Elles attrapent les insectes.`

Chaque sous-titre contient le timecode durant lequel il doit apparaître et le texte à afficher durant cette courte période.
Il est possible d'y inclure des commentaires pour faciliter le travail des intégrateurs web.

Ces fichiers s'intègrent de cette manière dans le fichier html d'un site web : 

`<video controls autoplay src="video.webm">`  
`<track default src="track.vtt">`  
`</video>`

Bien sûr, les navigateurs savent afficher les sous-titres.  
Mais il est toujours possible pour les développeurs de personnaliser ces sous-titres dans le fichier CSS en ciblant les phrases précisément.  

`::cue(#\31) {color: yellow;}`

Cette ligne de CSS donnera la couleur jaune au texte numéro 31 dans le fichier.vtt.

De nos jours il est encore plus facile de sous-itrer des vidéos en passant par Youtube.
En effet, Youtube propose de sous-titrer directement les vidéos sur sa plateforme, en y ajoutant les sous-titres avec les timecodes.

Bien qu'aujourd'hui les ordinateurs savent sous-titrer des vidéos. Il reste tout de même plus commode de laisser ce trabail à un humain qui saura exactement décrire les sons ambiants et les dialogues sans forcément faire du mot à mot.

Il est aussi important de faire traduire les dialogues d'une langue à l'autre par un humain, car les expressions populaires (ainsi que les blagues) de chaque langue ne se traduisent pas mot à mot.

Lors la transcription d'informations non-verbales, une situation peut donner lieu à des sous-titres plutôt cocasses, je vous laisse juger : 

interview d'un nageur : 

It's been my dream since I was a little buoy

makes "I don't know" sound

screaming like a sissy

le robot dans star wars : 
sad beep

lors d'une situation tendue : 
intensity insifies

une journaliste à la télévision : 
blah blah blah

un personnage vexé : 
screams internally

[Closed caption](https://en.wikipedia.org/wiki/Closed_captioning)
 ![](pictures/degres-automatisation.png)

[Masques pour les malentendants](https://www.bloghoptoys.fr/masques-un-picto-pour-les-malentendants)

 [RogerVoice](https://www.francetvinfo.fr/internet/telephonie/avec-l-application-rogervoice-les-personnes-sourdes-et-malentendantes-peuvent-appeler-avec-leur-telephone_2975031.html)

 [BabylonDesign](http://babylon-design.com/surdite-accessibilite-sourds-sur-internet/)

 [AmberScript](https://www.amberscript.com/fr/accessibilite-numerique)

 insérer les sous-titres drôles via des balises img, mais avec le liens vers cette images

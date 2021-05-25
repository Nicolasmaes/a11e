# Projet « Accessibilité Numérique » - Cahier des Charges

> Ce cahier des charges est à destination de l'équipe de conception et de développement d'un service web. Tout ce qui n'est pas spécifié dans ce cahier des charges doit faire l'objet de propositions durant les phases de conception ou de développement, et doit être validé par le commanditaire pour pouvoir être intégré au produit fini. 

## Objectifs pédagogiques
- Contribuer à l'élaboration d'un cahier des charges ;
- Gérer un projet numérique collaboratif avec une méthodologie de gestion de projet :
    - Utiliser un *Kanban* pour organiser les tâches ;
    - Utiliser la méthodologie Gitflow pour la gestion du *repository* (*a minima* les branches *main*, *develop* et autant de *features* qu'il y a de pages et de fonctionnalités à développer)
- Produire des maquettes *desktop* & *mobile* et des prototypes d'interfaces Web ;
- Intégrer des pages Web en utilisant des technologies *front-end*  :
    - Utiliser les langages HTML, CSS et JavaScript ;
    - Utiliser la méthdologie BEM pour nommer les classes en HTML / CSS ;
    - [BONUS] Utiliser le peéprocesseur SASS ;
- Publier un site en ligne ;

> **Contraintes :** 
> - Interdiction d'utiliser Bootstrap ou un autre framework front durant la réalisation de ce projet : tout doit être codé vanilla !
> - L'***orthographe*** de toute information textuelle publiée doit être irréprochable ! C'est un critère d'évaluation aussi central que les marges intérieurs dans un travail de conception !

## Contexte

### Cadre du projet

Vous devez concevoir et développer un outil de communication numérique à caractère informatif, de type site web, sur le thème de l'« e-inclusion ».

Le site web s'articule autour de 2 axes et doit proposer :

- des informations de sensibilisation à destination du grand public présentant une altération de la perception impactant la navigation sur le web et posant donc des problématiques d'accessibilité numérique (ce volet sensibilisation s'appuiera de préférence sur des visuels : infographies, animations - les informations textuelles doivent être autant que possible réduites) ;
- des préconisations à destination des concepteurs et des développeurs pour connaître et intégrer des bonnes pratiques durant la réalisation de sites et d'applications web visant à solutionner les problématiques identifiées dans le cadre de l'axe « sensibilisation ».

### Définition et problématisation de la thématique

« L'accessibilité numérique est la mise à la disposition de tous les individus, quels que soient leur matériel ou logiciel, leur infrastructure réseau, leur langue maternelle, leur culture, leur localisation géographique, ou **leurs aptitudes physiques ou mentales**, des ressources numériques. »

« Une étude de 2016 montre que les sites internet des entreprises françaises sont encore trop peu accessibles pour les internautes handicapés »

Source : [L'article Wikipédia « Accessibilité numérique »](https://fr.wikipedia.org/wiki/Accessibilit%C3%A9_num%C3%A9rique)

### Livrables
- 19/05/2021 - Un dossier de conception, contenant *a minima* : 
    - Cadre du projet
        - l'objectif
        - le contexte du projet
        - présentation de l'équipe de réalisation (compétences et tâches attribuées)
        - le public cible
        - le(s) support(s) cible(s) (par exemple smartphone, ordinateur)
        - la prise en compte des normes et la législation en vigueur (ex. : mentions légales, droits d'auteur, droit à l'image, données personnelles, licence pour la publication du *repository* GitHub)
- Charte Graphique & UI KIT
- Planche de tendances
- Spécifications fonctionnelles
    - Arborescence
    - *Wireframes*
    - Maquettes *Desktop*
    - Maquettes *Mobile*
    - Maquette page « Mention légale »
    - *Screenshots* des prototypes *mobile* et *desktop* (avec relations entre les pages apparentes)
- Spécifications techniques [à compléter durant la suite du projet]
    - Technologies utilisées pour l'intégration (HTML / CSS / JavaScript)
    - Dispositifs spécifiquement liés à la problématique du sujet mis en place
    - .htaccess pour les redirections, page 404, etc.
- Référencement naturel : sitemap.xml, robots.txt

- 26/05/2021 - Un repository Github avec :
    -  une branche par page ou par fonctionnalité développée en JS ;
    - une branche *develop* permettant de fusionner le travail réalisé sur chaque branche au fur-et-à-mesure du développement ;
    - une branche *main* pour la version validée pour le passage en production ;
    - une *board* de gestion et de suivi de projet de type *kanban*, contenant des *cards* spécifiant :
        - la tâche à réalisée, 
        - la date de démarrage de la réalisation de cette tâche, 
        - les ressources humaines allouées,
        - la date de fin de réalisation ;

***Structure obligatoire du repository :***
> Lorsqu'un nom est suivi d'un slash, c'est qu'il s'agît d'un dossier, sinon c'est un fichier, et à l'exception de la licence et du .htacess, les fichiers ont une extension.

- index.php
- includes/
    - [nom-de-l-include].php (par exemple header.php, footer.php, sidebar.php, etc.)
- pages/
    - [nom-de-page].php (à part la page index.php, toutes les pages se trouveront dans ce répertoire)
    - legal-notice.php (la page de mentions légales)
- assets/
    - images/
        - icons/
            - [nom-de-l-icone].png
            - [nom-de-l-icone].svg
        - pictures/
            - main/ (pour des images communes à toutes les pages)
            - [nom-de-page]/ (pour des images spécifiques à une pages)
- styles/
    - main.css (le style commun à toutes les pages du site)
    - [nom-de-page].css (du style spécifique à une page en particulier)
    - [nom-du-composant].css (du style spécifique à un composant particulier)
- scripts/
    - main.js (scripts utiles au fonctionnement général)
    - [nom-de-la-fonctionnalité].js (script dédié à une seule fonctionnalité du site)
- .gitignore
- robots.txt (et humans.txt si vous le souhaitez)
- sitemap.xml
- .htacess
- README.md
- LICENCE


- 28/05/2021, après-midi - Revue de projet : 
    - Un dossier de conception sous forme de présentation ;
    - Un site web fonctionnel, hébergé sur un serveur, consultable en ligne et indexable par les moteurs de recherche ;

## Description des phases de réalisation du projet 

### Phase d’initialisation : constitution des groupes et détermination des sujets à traiter

- **Tâche 1 :** Constitution des groupes, composés de 3 membres (et un groupe de 4)
> Contrainte : Les groupes NE DOIVENT PAS être composés d'anciens binômes !
- **Tâche 2 :** Définition et attribution d'un sujet pour chacun des groupes. 
    - Piste de sujets : les types de handicaps pouvant affecter l'utilisation du web : 
        - auditif
        - cognitif
        - neurologique
        - physique
        - de la parole
        - visuel
    - Autres pistes de sujet : l'âge, l'illetrisme, l'« illelectronisme »
> Source à explorer : [Good Design Playbook](https://apf-conseil.com/good-design-playbook/good-design-playbook.pdf)

***ATTENTION*** **: Dans toutes les phases suivantes du projet, la problématique et les solutions spécifiquement liés à votre sujet doivent présidé à toutes vos propositions et réalisations !** 

#### Phase de lancement : préparation de l'environnement de travail collaboratif
- **Tâche 1 :** Procédez à l'élection d'un « Chef de projet » qui sera en charge de la coordination des différents acteurs sur le projet ; 
- **Tâche 2 :** Créez sur Github un *repository* du nom de votre projet dans la page organisation « Fire-Owl » pour héberger les versions de vos travaux ;
- **Tâche 3 :** Créez une *team* et invitez les collaborateurs à en faire partie, puis dans les *settings* du *repository*, ajoutez la *team* comme *collaborators* ;
- **Tâche 4 :** Créez un « *Project* » de type *kanban* classique (*to do*, *in progress*, *done*)  lié au *repository* et listez, organisez et répartissez toutes les tâches. Utilisez cet outil de gestion de projet tout au long de votre travail collaboratif. 
- **Tâche 5 :** Recherche informationnelle et analyse :
    - Trouvez des informations sur le thème choisi :
        - informations textuelles ;
        - informations chiffrées ;
    - Identifiez des acteurs communiquant sur le sujet ;
    - Si possible, réalisez un *benchmark* de site de sensibilisation et de prescription sur ce sujet ou sur d'autres sujets ; 
    - En vous appuyant sur les résultats de vos recherches, dégagez des axes de problématisation et définissez un périmètre bien défini, qui n'a pas forcément besoin d'être très ambitieux (un sujet restreint mais traité de façon exhaustive vaut mieux qu'un sujet large qu'on se contente de survoler)
    - Parmi les résultats de vos recherches, sélectionnez des informations pertinentes sur lesquelles vous souhaitez communiquer, organisez-les et hiérarchisez-les sur un support de présentation ;
    - Recherchez sur le web des illustrations, des graphismes et des visuels libres de droit que vous pourrez exploiter dans la phase de conception graphique (ex. : photos, dessins, icônes)
    - Soumettez le résultat de ce travail au commanditaire pour validation ;
- **Tâche 6 :** Créez le README.md à la racine de votre repository et listez les informations utiles, par exemple les liens vers les ressources utilisées, les crédits des médias mobilisés, etc. (c'est un document de travail qui évoluera tout au long de la vie de votre projet, alimentez-le régulièrement).

#### ​Phase de Conception
- **Tâche 1 :** Définissez l'identité de votre projet :
    - son nom,
    - son logotype
- **Tâche 2 :**  Hiérarchisez et créez une arborescence de site sur la base de contenus issus de vos recherches sur le sujet à traiter ;
- **Tâche 3 :** Concevez le *zoning* et le *wireframing* des pages de votre arborescence dans une logique de « gabarit » (ou *template* : la maquette d'une seule page donne la forme de plusieurs pages du même type) ;
    - Utilisez un logiciel de PAO/DAO (par exemple Adobe Illustrator, Pencil Project ou simplement PowerPoint) pour réaliser des schémas (*zoning*, *wireframe*) de l'interface, illustrant la position et le contenu des différents éléments (navigation, entête, contenu, pied de page)
    - Déclinez vos schémas pour différents types de périphériques (*desktop* & *mobile*)
    - Anticipez l'interactivité de vos pages Web (tracez des liens entre les éléments de vos schémas : tel bouton conduit à telle page, etc.)
- **Tâche 4 :** Produisez du contenu graphique : 
    - En utilisant le logiciel professionnel de traitement d'images Adobe Illustrator, réalisez des illustrations vectorielles (éléments d'interface, pictogrammes) ;
    - En utilisant le logiciel professionnel de traitement d'images Adobe Photoshop, effectuez des retouches, des recadrages, des sélections, des corrections colorimétriques, des photomontages, appliquez des effets spéciaux ;
    - À partir de différentes sources de données *big datas*, créez des infographies statiques de Data Visualisation ;
    - Élaborer une animation destinée à des sites web *desktop* et *mobile* à l'aide d'une application d'animation de type Adobe Spark (ou Crello) ;
> - ⚠️ Utilisez les différents éléments en respectant la législation des droits d'auteurs
> - ⚠️ Optimisez le poids et la qualité, sélectionnez le format d’enregistrement et définissez la taille des réalisations
> - ⚠️ Adaptez les réalisations aux différents supports de diffusion
- **Tâche 5 :** Composez une charte graphique et un UI KIT pour habiller les wireframe :
    - déterminez votre palette chromatique,
    - choisissez vos typographies,
    - rassemblez quelques illustrations (que vous utiliserez ou qui vous inspirent pour créez l'atmosphère graphique de votre site) dans une une planche de tendances,
    - concevez quelques éléments d'interface, par exemple :
        - des éléments de navigation ;
        - des boutons ou des Call To Action ;
        - des champs textuels ;
        - des icônes au format vectoriel ;
        - l'encadrement des illustrations et photos (par exemple circulaire, carré arrondi) ;
        - des exemples de charts pour la dataviz ;
        - des exemples de card ;
        - un exemple de slideshow ;
- **Tâche 6 :** Réalisez les *mockup desktop* & *mobile* des pages principales de votre site ;
> - ⚠️ N'oubliez pas de prendre en compte les problématiques d'accessibilité et d'ergonomie
> - ⚠️ N'oubliez pas non plus de concevoir la page de Mentions Légales

- **Tâche 7 :** Réalisez en utilisant un logiciel type Figma ou Adobe XD un prototype fonctionnel permettant de naviguer de pages en pages.

- **Tâche 8 :**  Sur la base de tout ce qui a été réalisé précédemment, produisez le dossier de conception.

#### ​Phase de Développement

> *PLOT TWIST* : Chaque groupe se voit confier le dossier de conception d'un autre groupe et sera chargé de développer un site web *high fidelity* conforme à ce qui figure dans le dossier de conception. Si des problématiques techniques rendent la réalisation de certains aspects du dossier de conception impossible, un consensus entre les deux équipes doit être trouvé.

- Intégrez les pages Web en HTML / CSS / JavaScript sur la base du dossier de conception ; 
    - Traduisez fidèlement l'UI KIT  en CSS ;
        - N'oubliez pas de renseigner les balises du !DOCTYPE : lang, meta desc, title, etc.
        - Développez votre site Web dans une logique *responsive design* en appliquant les principes du *mobile first* : les pages sont intégrées en version *mobile* puis adaptées pour la version *desktop* ;
    - Utilisez des balises HTML sémantiques
    - Prenez en compte les problématiques (basiques) d'accessibilités et de référencement naturel (textes alternatifs sur les images, title sur les images et les liens, etc.)

#### Phase d'exploitation

- Utiliser le SSH dans la console BASH ou l'outil de transfert de fichiers Filezilla pour héberger les fichiers sur le serveur
- Gérez les droits des fichiers et des dossiers
- Renseignez les fichiers robot.txt et sitemap.xml et placez-les à la racine du site
- Testez les pages en ligne dans différents navigateurs et sur différents périphériques
- Soumettez le site aux moteurs de recherche (par exemple en utilisant la Google Search Console)
- Apportez les améliorations pour optimiser les performances (ex. : temps de chargement, rapidité d'affichage)
- Soumettez le site réalisé à votre formateur :
    - Prenez acte des retours ;
    - Apportez d'éventuelles modifications suite à ces retours.
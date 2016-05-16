
#Site Minibu
##Design doc

Application en php + ajax, 2 pages

Mobile-first, device agnostic

###Partie publique (index.php)
* Logo
* Horaires (+ fermé/ouvert) (ass arr)
* Nombre de clients en temps réel (ajax) (int)
* Tarifs (les gens s'en foutent ptete) (ass arr)
* Localisation Google Maps
* Photo extérieur bâtiment ?
* Lien facebook (? pas de page fb apparemment)
  * ==> facebook feed carousel ?
* Contacter (réservation, etc)
* Login : Bouton Accès partie admin
  * Sur click :
     * afficher écran d'entrée du mdp
     * afficher bouton "ok" (post mdp)

###Partie admin (admin.php)
* Changer nombre de clients actuel (+ -)
* Changer horaires (+ fermé/ouvert)
* Ajouter champs pour vacances/jours fériés etc.
* Changer tarifs
  * Tableau item + tarif
* Changer contact
* Changer localisation Google Maps ?
* Changer mot de passe
* Log out

###To-do list
**Tâches prioritaires au sommet**

**Noms de fichiers en gras**

* Front-end
  * Créer variantes taille logo (*2) pour grands écrans
  * Créer favicons **favicon-(16/32/64/128).jpeg**
  * Décommenter balises meta favicon
  * Présenter données php
  * Créer page login
  * Tester login
  * Tester favicons
  * Animer logo ?
* Back-end 
  * Créer squelette de la page admin
  * Créer formulaire de contact
  * Créer formulaire de login admin
  * Upload version test sur [bastienmichaux.be/minibu](bastienmichaux.be/minibu)
* Fait
  * Squelette page index
  * Ajout logo

###Support
* IE 8
* Firefox ??
* Chrome osef
* Safari ??
* Opera ??
* iOS Safari ??
* Opera Mini ??
* Android Browser ??
* Chrome for Android ??
* Firefox for Android ??
* UC Browser for Android ??
* IE Mobile ??

###Ref couleurs
selon logo

###Ref fonts
* Master of Break (Chez Minibu)
* Franchise-Bold

###Idées design
n clients via lettres vieux réveille-matin
[exemple](https://upload.wikimedia.org/wikipedia/en/e/e3/Old_'75_clock_radio.jpg)



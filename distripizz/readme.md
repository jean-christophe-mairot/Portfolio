**_> DISTRIPIZZ_**

**Client :** Distripizz
**Equipe :**

    - Dev Back end : Jean Christophe Mairot
    - Dev Front end : Aimad Leban
    - Dev Front end : Zakari yaet
    - Tuteur : Pascal Moreno

**Description du projet:**

1. Réalisation d'une maquette et présentation à Distripizz : email mardi soir pour la maquette .
2. Validation mercredi 04 novembre du devis par Distripizz.
3. Demande de Distripizz : réalisation d'une one page pour les visiteurs de l'entreprise Distripizz (fabriquant et installateur de distributeurs de pizza).
4. Pour la navigation : 1 bouton contact (click + animation: ouverture d'un formulaire de contact ou déplacement dans le bas de la page d'accueil), un bouton tel(non-click + animation), titre distripizz (click-retour en haut de la page d'accueil), un bouton connexion/déconnexion (pour les colaborateur redirection vers une page de connexion), un bouton ou lien vers l'accueil. Le bouton change aprés la connexion et devient Déconnexion.
5. Dés que le collaborateur c'est identifié, il est redirigé vers une page de documentation.
6. Contenu de la page de documentation : 2 articles avec titre et paragraphe lorem
7. Création d'une base de donnée : renseignements collaborateurs, login et password.
8. Textes et images (format : .jpg, .svg, .gif, .png, les vidéos sont possibles) pour le contenu fourni par distripizz (attention penser à compter un jour pour l'integration des éléments. Si non fourni durant la phase de développement ce jours sera compté en supplément ajouter à la facturation finale).
9. Pour le logo : création du logo offert par nos soins pour une version 1.0 et 1/2 journée de retouche.
10. Nombre de jours ouvrés 8 à partir du mercredi 04/11/2020 et livrable au lundi 16 novembre 8h30.

**Validations des taches :**

- [x] realisation de la maquette jc/Aimed
- [x] Dossier ref : contenu txt du client, maquette.jpg, divers ref liens utile etc...
- [x] Dossier asset : css et js
- [x] Dossier img : divers images et video (bien nomé chaque images)
- [x] Dossier inc : include php

- [x] fonctions : contient les divers fonctions appelées dans le site en PHP
- [x] header : contient tous les elements du header avec la nav include dans chaque page
- [x] footer : contient tous les elements du footer include dans chaque page
- [x] init : contient tous la connexion à la bdd include dans chaque page

- [ ] 1 page d'accueil (index.php)
- [ ] 1 formulaire de creation de compte gestion admin(inscription.php) ( method="post" & name="nom_court_minuscule_sans_accents")
- [x] 1 login (page: login.php)(sign-in)
- [x] 1 base de données pdo (table collaborateurs : id name lastname email password)
- [x] messages d'alert champs non renseigné etc...
- [x] integration de bootstrap
- [ ] Option : gestion de session client/admin
- [ ] Option : gestion de cookies
- [ ] Option : gestion connexion/deconnexion

**Description des Branch :**

    - branch master : juste pour le pull et le push
    - branch front : c'est la branch pour la personne qui dev la partie front
    - branch back : c'est la branch pour la personne qui dev la partie back
    - branch éphémère : on peut créer suivant le besoins, des branch qui seront delete en fin de journée

**REF des manipulations git :**

**----------------création du lien au projet et premier push------------------**

1.  git config --global user.name "ton nom"
2.  git config --global user.email "adresse@gmail.com"
3.  git (pour voir toutes les fonction de git)
4.  git --version (donne la version de git)
5.  Créer un projet sur github (public/nom/description/..)
6.  Dans le répertoire du projet commande bash
7.  git init
8.  git add . (ou git add \*)
9.  git commit -m "... txt explication du commit"
10. on retourne dans github on récup le http du projet dans l'onglet/bouton code
11. bash vscode: git remote add origin http.............(de github)
12. git remote -v (verif)
13. git push origin master (on pousse vers github le projet)

**------------------------- travail sur les branch -----------------------------**

1.  git branch toto (crée la branch toto)
2.  git branch (donne une visu sur les branch présente)
3.  git checkout toto (on rentre sur la branch toto)
4.  git add index.html
5.  git commit -m "modif toto"
6.  git checkout master
7.  git merge toto
8.  git log (voir si le commit sur master)
9.  git branch -d toto (supprime une branch)
10. git branch (voir si c bon)
11. git push origin master

# TourIsen

IL FAUT INSTALLER SYMFONY

Pour le développement, tout se fait dans les dossiers suivants :

'/app/*' : Ceci est le dossier Cordova où l'on retrouve tous les dossiers du framework.
'/src/pages/*.js', '/src/app.js' et '/src/index.ejs' : Ce sont tous les fichiers du frontend. Tous sont génériques, donc un fichier .js équivaut à une page du site web. le fichier /src/pages/script.js est le fichier qui contient toutes les fonctions javascript fait attention a bien les déclarer pour pouvoir les appeler 
Pour pouvoir build votre projet et voir les modifications, voici les commandes à suivre dans l'ordre. Il faut tout d'abord se trouver dans le dossier "test" avec le terminal, puis exécuter les commandes suivantes :

'./node_modules/.bin/encore production'
'cp -R public/ app/www'
'cd app'
'cordova run browser'


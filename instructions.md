# Exercice : Création d'un gestionnaire de tâches simple en PHP

## Objectif
Développer une application web simple de gestion de tâches en PHP sans utiliser de base de données. L'application doit permettre d'ajouter des tâches, de les afficher et de les supprimer.

## Fonctionnalités requises
1. Une interface utilisateur avec Bootstrap (cf. screenshot)
2. Un formulaire pour ajouter de nouvelles tâches
3. Affichage des tâches existantes dans un format "carte"
4. Possibilité de supprimer des tâches
5. Stockage des tâches dans des fichiers texte

## Instructions techniques
1. Créez une page unique `index.php` qui contiendra à la fois l'interface utilisateur et la logique PHP
2. Utilisez Bootstrap pour la mise en page et les éléments d'interface
3. Pour le stockage des données :
    - Créez un dossier `tasks` à la racine de votre projet
    - Chaque tâche sera enregistrée dans un fichier texte séparé
    - Utilisez le timestamp comme nom de fichier pour garantir l'unicité
4. Implémentez les fonctionnalités suivantes :
    - Traitement du formulaire pour ajouter une tâche
    - Affichage des notifications de succès/suppression
    - Affichage de toutes les tâches existantes avec leur contenu
    - Fonctionnalité de suppression des tâches

## Structure attendue
- Une en-tête avec le titre de l'application et une brève description
- Un formulaire d'ajout de tâche
- Une zone d'affichage des tâches existantes sous forme de grille responsive
- Affichage du nombre total de tâches

## Contraintes
- N'utilisez pas de base de données
- Le code HTML des tâches sera interprété (permettant ainsi l'utilisation de balises HTML dans les tâches)
- La page doit être responsive et s'adapter aux différentes tailles d'écrans

## Bonus
- Ajoutez la possibilité de marquer une tâche comme terminée
- Ajoutez des dates de création aux tâches
- Implémentez un système de filtrage ou de tri des tâches

À vous de coder !
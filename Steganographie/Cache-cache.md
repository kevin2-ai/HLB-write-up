# Cache-cache

## Informations sur le challenge

-   **Nom :** Cache-cache
-   **Catégorie :** Stéganographie
-   **Objectif :** retrouver le flag dissimulé dans un document.
-   **Format du flag indiqué par l'énoncé :** `tulipe`
-   **Lien du CTF :** [Accéder au challenge
    Cache-cache](https://cybersecurite.forge.apps.education.fr/cyber-2-steganographie/3.Challenges/ressources_challenges_stegano/Cache-cache/cache-cache/)

## 1. Comprendre l'énoncé

Le challenge raconte que Guillaume et son équipe de cybersécurité
reçoivent un document curieux. Il faut retrouver le flag caché dans ce
document.

L'énoncé précise que le flag respecte le format `tulipe`. Il faut donc
rechercher une courte chaîne de caractères correspondant à ce format.

## 2. Examiner le document

À première vue, le document ne révèle pas clairement le flag. Il faut
alors envisager que le texte soit présent, mais rendu invisible par sa
mise en forme.

Dans ce challenge, le flag est écrit en **blanc sur un fond blanc**. Il
existe bien dans le document, mais il se confond avec l'arrière-plan :
on ne le distingue donc pas lors d'une lecture normale.

## 3. Révéler le texte caché

Une première méthode consiste à sélectionner tout le contenu du document
avec le raccourci clavier :

``` text
Ctrl + A
```

La sélection met en évidence le texte qui était invisible. On peut alors
repérer le flag.

Une deuxième méthode consiste à utiliser la fonction de recherche :

``` text
Ctrl + F
```

Puis à rechercher le mot :

``` text
flag
```

Cette recherche permet de localiser rapidement le texte recherché, même
lorsqu'il est écrit dans la même couleur que le fond.

## 4. Résultat

Le flag était simplement masqué par la mise en forme du document : texte
blanc sur fond blanc.

**Flag : `fleurdelys`**

## 5. Ce qu'il faut retenir

Ce challenge montre qu'une information cachée n'est pas nécessairement
chiffrée ou dissimulée dans les pixels d'une image. Elle peut être
présente directement dans un document, mais rendue difficile à voir par
un choix de couleur.

Face à un document qui semble vide ou suspect :

1.  sélectionner tout le contenu avec `Ctrl + A` ;
2.  rechercher des mots-clés comme `flag` avec `Ctrl + F` ;
3.  vérifier la couleur du texte et celle de l'arrière-plan ;
4.  ne pas se limiter à ce qui est immédiatement visible à l'écran.

**Leçon :** en stéganographie, il faut aussi examiner la présentation et
le formatage d'un document. Un texte invisible peut être simplement
caché à la vue, sans être réellement absent.

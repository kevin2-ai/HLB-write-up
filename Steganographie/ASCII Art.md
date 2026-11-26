# ASCII Art

## Informations sur le challenge

-   **Nom :** ASCII Art
-   **Catégorie :** Stéganographie
-   **Objectif :** retrouver l'adresse IPv4 dissimulée dans un fichier
    texte contenant un dessin en ASCII Art.
-   **Lien du CTF :** [Accéder au challenge ASCII
    Art](https://cybersecurite.forge.apps.education.fr/cyber-2-steganographie/3.Challenges/ressources_challenges_stegano/AsciiArt/ascii_art/)

## 1. Comprendre l'énoncé

Le challenge fournit un fichier nommé `ascii-art.txt`. Il faut retrouver
l'adresse IP cachée dans ce fichier. Le résultat attendu est une adresse
IPv4 au format décimal pointé, par exemple `192.168.10.137`.

Le fichier ressemble à un dessin constitué de nombreux caractères. Il ne
faut donc pas se limiter à regarder le dessin : certains caractères
peuvent aussi transporter une information.

## 2. Examiner le fichier

La première étape consiste à observer le contenu du fichier et les
caractères utilisés. On remarque notamment la présence de nombreux
symboles (`&`, `$`, `x`, `X`, `;`, `+`, `:`), mais aussi quelques
chiffres `0` et `1`.

En comptant les chiffres binaires dans le fichier, on en trouve :

-   17 fois le chiffre `0` ;
-   15 fois le chiffre `1`.

Cela fait **32 chiffres au total**. C'est un indice intéressant, car une
adresse IPv4 est composée de 32 bits : quatre groupes de 8 bits.

## 3. Extraire les bits

Dans le terminal, on peut récupérer uniquement les `0` et les `1` du
fichier avec cette commande :

``` bash
grep -o '[01]' ascii-art.txt | tr -d '\n'
```

Explication :

-   `grep` recherche un motif dans le fichier ;
-   `-o` affiche uniquement chaque caractère correspondant ;
-   `[01]` demande de rechercher les chiffres `0` ou `1` ;
-   `tr -d '\n'` supprime les retours à la ligne pour obtenir une seule
    suite de bits.

L'extraction, en conservant l'ordre de lecture du fichier (de haut en
bas et de gauche à droite), donne :

``` text
01110011000100011110000111001100
```

## 4. Découper la suite binaire

Une adresse IPv4 contient quatre octets. Un octet correspond à 8 bits.
Il faut donc découper la suite de 32 bits en quatre groupes :

``` text
01110011 00010001 11100001 11001100
```

## 5. Convertir chaque octet en décimal

Chaque groupe binaire doit être converti en nombre décimal.

  Groupe binaire     Valeur décimale
  ---------------- -----------------
  `01110011`                     115
  `00010001`                      17
  `11100001`                     225
  `11001100`                     204

On peut vérifier les conversions en utilisant les poids binaires
`128, 64, 32, 16, 8, 4, 2, 1`.

Par exemple, pour `01110011` :

`64 + 32 + 16 + 2 + 1 = 115`

On répète cette conversion pour les trois autres groupes.

## 6. Résultat

En assemblant les quatre valeurs décimales et en les séparant par des
points, on obtient l'adresse IPv4 :

``` text
115.17.225.204
```

**Flag : `115.17.225.204`**

## 7. Ce qu'il faut retenir

Ce challenge montre qu'un fichier qui semble uniquement contenir un
dessin peut cacher des données dans ses caractères.

La démarche à retenir :

1.  observer le fichier et repérer les caractères inhabituels ou rares ;
2.  vérifier si certains caractères peuvent représenter des données ;
3.  extraire les `0` et les `1` en respectant leur ordre ;
4.  regrouper les 32 bits en quatre octets de 8 bits ;
5.  convertir chaque octet en décimal pour reconstituer l'adresse IPv4.

La leçon importante est de commencer par examiner soigneusement le
fichier avant de lancer des outils spécialisés. Une observation simple
peut parfois révéler la méthode de dissimulation.

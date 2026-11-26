# I- Analyse des cookies et méthodes Get et POST envoyées coté client  (26/1172026)
## 1-  Méthode GET et Post de soumission: 
La méthode Get envoie les informations directement dans l'URL de la requête. Tandis que la méthodes get envoie les information dans le coeur de la requête(ces informations peuvent être intercepter)

## 2- Code de succès d'une requête:
Lorsqu'une requête est effectuée avec succès, elle renvoie le code 200=Ok  dans le cas contraire elle renvoie 404=Introuvable et souvent une redirection 302

## 3- les cookies sont des fichiers texte contenant de petits éléments de données codés, comme un nom d’utilisateur et un mot de passe, utilisés pour identifier votre ordinateur lorsque vous utilisez un réseau. Les cookies spécifiques sont utilisés pour identifier des utilisateurs en particulier et améliorer leur expérience de navigation sur Internet. Elle permet de faciliter la navigation sur certain site afin d'améliorer l'expérience utilisateur et d'éviter des reconnections à chaque fois qu'on part sur un site.
Elles sont cotés client.

    a- Danger avec les cookies:
    Ils sont modifiables
    L'accès aux informations dd'un cookies d'un utilisateur par un autres, permet de se connecter en se faisant passer pour un autres

## 4- Pratique: 
    Résolution du challenge : Cookie Monster Secret Recipe (Inspection et décodage de cookies : learn.cylabacademy.org; gchq.github.io)

    Objectif: Décoder le cookie laissé par le site dans notre navigateur
    -chercher le cookie
    -récupérer sa valeur
    -identifier le type d'encodage (Base64 : maj min chif egal, ASCII: nbr, Hex : 0<nbr>9, a<string>f )
    -décoder (en utilisant le site CyberChef)
    -récupère le flag que l'on dépose sur le site

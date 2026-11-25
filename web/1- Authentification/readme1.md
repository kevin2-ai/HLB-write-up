
# 1-1 Énumération des noms d'utilisateur via différentes réponses

| Champ | Valeur |
|-------|--------|
| **Plateforme** | PortSwigger Web Security Academy |
| **Topic** | _Authentification_ |
| **Niveau** | ☐ Apprentice  |
| **Lien du lab** | https://portswigger.net/web-security/authentication/password-based/lab-username-enumeration-via-different-responses|
| **Date** | 25/11/2026 |
| **Durée** | _15 min_ |
| **Outils** | Burp Suite Community (Proxy, Repeater, ...), navigateur, ... |
| **Résolu** | ☐ Seul  |

---

## 1. Objectif du lab

_Pour résoudre le laboratoire, énumérez un nom d'utilisateur valide, forcez brutalement le mot de passe de cet utilisateur, puis accédez à la page de son compte._

## 2. Rappel théorique

- **Vulnérabilité** : _L'Enumération : permet de réduire la liste de parmaètres de connexion à une liste minime en observant non seulement la taille de response du serveur mais aussi le code status_
- **Cause racine** : _Elle se remarque à cause de la réponse du serveur qui va répondre différemment en fonction des entés utilisateurs cela permettra ainsi de réduire en observant des paramètres de ses réponse(vitesse,taille,code, etc) de réduire la tier-list des valeur possibl_
- **Impact potentiel** : _confidentialité / intégrité_

## 3. Reconnaissance

_Comment as-tu compris où chercher ? Fonctionnalités de l'application, paramètres, cookies, requêtes intéressantes dans Burp._

- Point d'entrée repéré : `Interception de la requete POST /login`
- Comportement normal : `Retour normal d'invalidité du serveur et même code status et taille`
- Comportement anormal observé : `Taille de réponse et code statut différent`


## 4. Évaluation du risque (si cette faille existait en production)

| Critère | Évaluation |
|---------|------------|
| Facilité d'exploitation | Faible |
| Authentification requise | Oui  |
| Impact | Critique |
| Gravité globale | Importante |

## 5. À retenir

- 💡 Leçon principale : L'énumération est l'une des failles d'authentification les plus connues et dangereuse
- 🔁 Technique réutilisable : Oui à faire sur les sites des gens
- ❓ Question restée ouverte : Comment la patcher(Recherche personnel)

## 6. Références

- Cours de l'Academy : https://portswigger.net/web-security/...
- OWASP : ...
- Autres ressources utiles : 


## 7. Solutions 
- Username : oracle
- Password :  chelsea
# Author : Sn@k3w3b
---
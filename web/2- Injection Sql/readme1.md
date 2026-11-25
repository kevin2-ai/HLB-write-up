
# 1-1 Attaque UNION par injection SQL, récupération de données à partir d'autres tables

| Champ | Valeur |
|-------|--------|
| **Plateforme** | PortSwigger Web Security Academy |
| **Topic** | _Injection SQL_ |
| **Niveau** | ☐ Apprentice  |
| **Lien du lab** | https://portswigger.net/web-security/sql-injection/union-attacks/lab-retrieve-data-from-other-tables|
| **Date** | 25/11/2026 |
| **Durée** | _15 min_ |
| **Outils** | Burp Suite Community (Proxy, Repeater, ...), navigateur, ... |
| **Résolu** | ☐ Seul  |

---

## 1. Objectif du lab

_Pour résoudre le laboratoire, effectuez une attaque UNION par injection SQL qui récupère tous les noms d'utilisateur et mots de passe et utilisez les informations pour vous connecter en tant qu'administratorutilisateur._

## 2. Rappel théorique

- **Vulnérabilité** : _L'injection sql faille très important qui se remarqeu sur les requetes SQL_
- **Cause racine** : _Les requetes écrites mets en durs les parametres de celles-ci en dur dans le statement(écriture de la requete) et l'exécute comme ça_
- **Impact potentiel** : _confidentialité / intégrité/ accès frauduleux à différents compte/ etc_

## 3. Reconnaissance

_Comment as-tu compris où chercher ? Fonctionnalités de l'application, paramètres, cookies, requêtes intéressantes dans Burp._

- Point d'entrée repéré : `Interception de la requete de filtre GET /filter?category=Accessories`
- Comportement normal : `Réponse normal de la bd qui affiche les résultats du filtre`
- Comportement anormal observé : `Injection sql qui renvoi alors la liste des users et password de la table users`


## 4. Évaluation du risque (si cette faille existait en production)

| Critère | Évaluation |
|---------|------------|
| Facilité d'exploitation | Faible |
| Authentification requise | Oui  |
| Impact | Critique |
| Gravité globale | Importante |

## 5. À retenir

- 💡 Leçon principale : L'injection sql (UNION est très dangereuse)
- 🔁 Technique réutilisable : Oui à faire sur les sites des gens
- ❓ Question restée ouverte : Comment la patcher(Recherche personnel)

## 6. Références

- Cours de l'Academy : https://portswigger.net/web-security/...
- OWASP : ...
- Autres ressources utiles : 

## 7. Solutions
- J'ai oublié de noté ça aujourd'hui pammmmm

# Author : Sn@k3w3b
---
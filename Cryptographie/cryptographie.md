# Write-up : CryptoHack – « Hex »

- **Plateforme** : CryptoHack
- **Catégorie** : Cryptographie (Introduction to CryptoHack)
- **Défi** : Hex (5 points)
- **Outil utilisé** : Python 3

---

## 1. Énoncé

Quand on chiffre un message, le résultat est composé d'octets (*bytes*) qui ne sont pas tous des caractères ASCII imprimables. Pour les partager plus facilement, on les encode souvent en **hexadécimal** (base 16).

Le défi fournit un flag encodé sous forme de chaîne hexadécimale. Il faut la **décoder en octets** pour retrouver le flag.

Chaîne fournie :

```
63727970746f7b596f755f77696c6c5f62655f776f726b696e675f776974685f6865785f737472696e67735f615f6c6f747d
```

Indice donné par le site : en Python, la fonction `bytes.fromhex()` convertit de l'hexadécimal en octets, et la méthode `.hex()` fait l'inverse.

---

## 2. Notions à comprendre

- **L'hexadécimal** est un système de numération en base 16. Il utilise les chiffres `0-9` et les lettres `a-f`.
- **Un octet (byte) s'écrit avec 2 caractères hexadécimaux.** Par exemple, `63` en hexadécimal correspond à 99 en décimal, soit la lettre `c` dans la table ASCII.
- La chaîne fait donc deux fois plus de caractères que le message d'origine : 100 caractères hexadécimaux donnent 50 octets, donc 50 lettres.

---

## 3. Démarche

1. **Stocker la chaîne dans une variable.** Une chaîne de caractères doit être placée **entre guillemets** en Python.
2. **Vérifier sa longueur avec `len()`** pour confirmer qu'elle est paire (2 caractères = 1 octet).
3. **Convertir l'hexadécimal en octets** avec `bytes.fromhex()`.
4. **Décoder les octets en texte** avec `.decode()` pour les rendre lisibles.

---

## 4. Code

```python
hexa = "63727970746f7b596f755f77696c6c5f62655f776f726b696e675f776974685f6865785f737472696e67735f615f6c6f747d"

print(len(hexa))                # nombre de caractères hexadécimaux
octets = bytes.fromhex(hexa)    # hexadécimal -> octets
print(octets.decode())          # octets -> texte
```

---

## 5. Résultat

La longueur affichée est de 100 caractères, soit 50 octets.

Flag obtenu :

```
crypto{You_will_be_working_with_hex_strings_a_lot}
```

---

## 6. Erreurs rencontrées

| Erreur | Explication | Correction |
|---|---|---|
| Chaîne hexadécimale écrite sans guillemets | Python lève une `SyntaxError`, car il prend la chaîne pour du code | Mettre la chaîne entre guillemets `" "` |
| `bytes.from.hexa(...)` | Le nom de la fonction est incorrect | Écrire `bytes.fromhex(...)`, en un seul mot, sans point au milieu |
| Afficher directement le résultat de `fromhex()` | On obtient des octets bruts (`b'crypto{...}'`) et non du texte | Appeler `.decode()` pour obtenir une chaîne lisible |

---

## 7. Ce que j'ai appris

- `len()` permet de compter le nombre de caractères d'une chaîne.
- **1 octet = 2 caractères hexadécimaux.**
- `bytes.fromhex()` convertit une chaîne hexadécimale en octets.
- `.decode()` transforme des octets en texte lisible.
- La méthode `.hex()`, appelée sur un objet de type `bytes`, fait l'opération inverse : elle donne la représentation hexadécimale.
- L'hexadécimal est très courant en cryptographie, car il permet d'afficher des données binaires de façon lisible et portable.

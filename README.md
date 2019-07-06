# Super projet de Gallerie Cantonnais

## Présentation

Bienvenue à tous dans ce super projet de Gallerie Cantonnais, dans lequel le but est de nous amuser tout en progressant et en réalisant une gallerie d'images.

## Composition de l'équipe

Notre équipe de CHOC se compose de Sebouchou, Jessica, Julien, La Patate et Le Patate, Théo, Thibault et Gaétan. Bienvenue à eux !

## Structure nécessaire

- Page : Galerie photo
  - Contenu libre
  - 2 Normal Page Content:
    - 1 :
      - Plugin : 'galerie_photo'
      - Select function : 'Derniers albums'
    - 2 :
      - Plugin : 'galerie_photo'
      - Select function : 'Dernières photos'

- Sous-éléments de la page
  - Dossier : galerie photo (avec les données)
  - Page "Albums"
    - URL Alias : `tx_galerie_albums`
    - 1 Normal Page Content :
      - Plugin : 'galerie_photo'
      - Select function : 'Liste albums'
  - Page "Auteurs"
    - URL Alias : `tx_galerie_auteurs`
    - 1 Normal Page Content :
      - Plugin : 'galerie_photo'
      - Select function : 'Liste auteurs'
  - Page "Catégories"
    - URL Alias : `tx_galerie_categories`
    - 1 Normal Page Content :
      - Plugin : 'galerie_photo'
      - Select function : 'Liste catégories'
  - Page "Tags"
    - URL Alias : `tx_galerie_tags`
    - 1 Normal Page Content :
      - Plugin : 'galerie_photo'
      - Select function : 'Liste tags'

**IMPORTANT** : Pour chaque Page content du plugin, ne pas oublier d'ajouter le DOSSIER "galerie photo" en source de données.

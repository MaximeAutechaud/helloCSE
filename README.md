# Test technique HelloCSE

Voici mon application en réponse à votre test technique

## Installation

Clonez le repo

```bash
git clone
```

Entrez dans le repo

```bash
cd HelloCSE/
```

Installez les dépendances

```bash
composer install
```

Créez votre DB et créez un .env à partir du .env.exemple

```bash
cp .env.example .env
```

Replissez le .env avec vos informations de connexion puis jouez les migrations

```bash
php artisan migrate
```
```bash
php artisan db:seed
```

Enfin, lancez le serveur web 

```bash
php artisan serve
```

Vous pouvez désormais utiliser l'application

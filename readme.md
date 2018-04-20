# NoteApp REST

Servicios web consumidos por la aplicación móvil "NoteApp", desarrollada para
 el curso de Introducción al Desarrollo de Aplicaciones Móviles Híbridas con 
 Ionic 3, llevado a cabo en el LABSOL.
 
## Comandos básicos de Laravel

**Crear nuevo proyecto:**

```bash
composer create-project --prefer-dist laravel/laravel blog
```

**Crear migración:**

```bash
php artisan make:migration create_notes_table
```

**Crear modelo:**

```bash
php artisan make:model Note
```

**Crear controller:**

```bash
php artisan make:controller NotesController
```

## Instalar proyecto

**Clonar proyecto:**

```bash
git clone https://github.com/porfirioangel/NoteApp_REST.git
```

**Instalar dependencias:**

```bash
cd NoteApp_REST
composer install
```

**Crear archivo .env:**

```bash
cp .env.example .env
```

**Generar llave para la aplicación:**

```bash
php artisan key:generate
```

**Correr migraciones:**

```bash
php artisan migrate:fresh
```

**Correr proyecto:**

```bash
php artisan serve --host 0.0.0.0 --port 8000
```
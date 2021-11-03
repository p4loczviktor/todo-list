# Todo List megvalósítás

Palócz Viktor, 2021

## Leírás

A webalkalmazás egy "Task kezelő" alakalmazás megvalósítása Laravel keretrendszerben. Egy task rendelkezik egy címmel,
tartalommal valamint státusszal. Lehetséges új taskok létrehozása, meglévőek szerkesztése, státuszuk módosítása valamint
a törlésük.

## Telepítés

### Előfeltételek:

- [docker desktop](https://www.docker.com)
- [composer](https://getcomposer.org)
- [npm](https://www.npmjs.com)

### Menete

A parancsokat a projekt gyökeréből kell kiadni:
1. ```composer install``` parancs futtatása
2. ```npm install``` parancs futtatása
3. ```./vendor/bin/sail php artisan migrate:fresh``` parancs futtatása
4. ```./vendor/bin/sail up``` parancs futtatása

Ha minden lefutott, a weboldal a ```localhost``` címen elérhető.

## Telepítés után

Az adatbázis feltölthető dummy adatokkal a ```./vendor/bin/sail php artisan db:seed``` paranccsal. A parancs egyszeri
futtatása 10 darab új aktív taskot.

Az adatbázis ürítése egyszerű a ```./vendor/bin/sail php artisan migrate:fresh``` paranccsal.

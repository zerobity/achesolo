## Instalación y puesta a punto
1- Instalar docker
2- Visual studio code
3- Levantar mv: docker-compose up -d workspace nginx mysql 
4- Ir a la carpeta de laradock
5- Ejecutar workspace: docker-compose exec --user=laradock workspace bash
6- exit -- para salir del contenedor
7- docker ps -- para ver los procesos de docker corriendo

## Crear el Modelo
php artisan make:model Part -- Part es el nombre de la entidad
## Crear el Controlador
php artisan make:controller StoryController --StoryController es el nombre del controlador
## Debugger
dd($variable)-- debugger

## Cambios en la BD
Para hacer cambios en la BD, se debe modificar/crear el archivo de migration.
Luego correr el comando php artisan migrate:refresh --seed. Esto creará el modelo de acuerdo a lo que está en el migration y además hará una carga inicial con lo que esté en el seed.

## npm-vue
Correr npm install
npm run dev
npm run watch
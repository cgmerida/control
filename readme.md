

## Instalación:
Solo se debe correr estos comandos
Los comandos dentro de [] son opcionales
```bash
git clone https://github.com/cgmerida/control.git [nombre de la carpeta]
cd control o nombre de la carpeta 
composer install                   # Instala las dependencias (librerias) del backend
sudo chmod 777 storage/ -R         # Permisos de almacenamiento (linux)
cp .env.example .env               # Crear las variables de entorno, ABRIR EL ARCHIVO .ENV y configurar las variables. Appname y las configuraciones de base de datos.
php artisan key:generate           # Generar una nueva llave para Laravel
php artisan migrate:fresh --seed   # Correr las migraciones y llenar los usuarios para probar y los datos de las personas.
npm i                              # O yarn install para installar las dependencias de node(>= node 9.x)
npm run dev                        # Para compilar los archivos JS o usar npm run prod
```


## Ejecutar local:
- Local demo:  
`php artisan serve                  # Verifica la instalación (optional)`  
Open browser at [localhost:8000/admin](http://localhost:8000/admin) 

**Nota:**  
Usuario: test
Contraseña: 123456


***

## Paquetes incluidos:
#### Laravel (php):

* [Laravel Framework](https://github.com/laravel/laravel/) (5.7.*)
* [Forms & HTML](https://github.com/laravelcollective/html) : los formularios.


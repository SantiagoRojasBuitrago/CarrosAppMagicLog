# Instrucciones para ejecutar la aplicación

## Requisitos
- PHP 8.x
- Composer
- MySQL
- Node.js y NPM

## Instalación
1. Clonar el repositorio:
   ```bash
   git clone https://github.com/SantiagoRojasBuitrago/CarrosAppMagicLog
   ```

2. Instalar dependencias:
   ```bash
   composer install
   ```

3. Copiar el archivo de configuración:
   ```bash
   cp .env.example .env
   ```

4. Configurar la base de datos en el archivo `.env`.

5. Generar la clave de la aplicación:
   ```bash
   php artisan key:generate
   ```

6. Ejecutar migraciones:
   ```bash
   php artisan migrate --seed
   ```

## Ejecución
1. Iniciar el servidor:
   ```bash
   php artisan serve
   ```

2. Acceder en el navegador:
   ```
   http://127.0.0.1:8000
   ```



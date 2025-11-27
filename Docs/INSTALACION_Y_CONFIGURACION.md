# Guía de Instalación y Configuración - Future Work Laravel

## 📋 Requisitos Previos

Antes de comenzar, asegúrate de tener instalado:

- **PHP 8.4** o superior
- **Composer** (Gestor de dependencias de PHP)
- **Node.js** y **npm** (Para assets frontend)
- **MySQL** o **MariaDB** (Base de datos)
- **Apache** o **Nginx** (Servidor web)
- **Git** (Control de versiones)

### Opción Recomendada: Laragon (Windows)
Si estás en Windows, **Laragon** incluye todo lo necesario:
- PHP 8.4
- Apache
- MySQL
- Composer
- Node.js

## 🚀 Comandos de Instalación

### 1. Clonar o Verificar el Proyecto
```bash
# Si clonas desde repositorio
git clone https://github.com/tu-usuario/future-work-laravel.git
cd future-work-laravel

# Si ya tienes el proyecto
cd c:\laragon\www\future-work-laravel
```

### 2. Instalar Dependencias de PHP
```bash
# Instalar paquetes de Composer
composer install

# Si da error, forzar actualización
composer update
```

### 3. Instalar Dependencias de Node.js
```bash
# Instalar dependencias frontend
npm install

# O usar yarn si lo prefieres
yarn install
```

### 4. Configurar Variables de Entorno
```bash
# Copiar archivo de configuración
copy .env.example .env

# Generar clave de aplicación
php artisan key:generate
```

### 5. Configurar Base de Datos

Edita el archivo `.env` con tus datos de base de datos:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=future_work
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Crear Base de Datos
```sql
-- Ejecutar en MySQL/phpMyAdmin
CREATE DATABASE future_work CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 7. Ejecutar Migraciones y Seeders
```bash
# Ejecutar migraciones
php artisan migrate

# Ejecutar seeders (datos de prueba)
php artisan db:seed

# O ejecutar todo junto
php artisan migrate:fresh --seed
```

### 8. Crear Enlace Simbólico para Storage
```bash
php artisan storage:link
```

### 9. Compilar Assets Frontend
```bash
# Para desarrollo
npm run dev

# Para producción
npm run build

# Modo watch (actualización automática)
npm run watch
```

## 🔧 Comandos para Levantar el Servidor

### Opción 1: Servidor de Desarrollo de Laravel
```bash
# Levantar servidor en puerto 8000
php artisan serve

# Levantar en puerto específico
php artisan serve --port=8080

# Levantar con host específico
php artisan serve --host=0.0.0.0 --port=8000
```

### Opción 2: Con Laragon (Recomendado)
```bash
# 1. Abrir Laragon
# 2. Clic en "Start All"
# 3. Acceder a: http://future-work-laravel.test
```

### Opción 3: Con Apache/Nginx
Configurar virtual host apuntando a la carpeta `public/`

## 🛠️ Comandos de Desarrollo Útiles

### Caché y Optimización
```bash
# Limpiar cachés
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Limpiar todo
php artisan optimize:clear

# Optimizar para producción
php artisan optimize
```

### Base de Datos
```bash
# Rollback de migraciones
php artisan migrate:rollback

# Reset completo
php artisan migrate:fresh

# Ver estado de migraciones
php artisan migrate:status

# Crear nueva migración
php artisan make:migration nombre_de_la_migracion
```

### Comandos de Artisan
```bash
# Ver todas las rutas
php artisan route:list

# Crear controlador
php artisan make:controller NombreController

# Crear modelo
php artisan make:model NombreModelo

# Crear middleware
php artisan make:middleware NombreMiddleware

# Ver comandos disponibles
php artisan list
```

### Assets y Frontend
```bash
# Compilar assets para desarrollo
npm run dev

# Modo watch (auto-reload)
npm run watch

# Compilar para producción
npm run build

# Verificar errores de JavaScript
npm run lint
```

## 🌐 URLs de Acceso

Una vez levantado el servidor, puedes acceder a:

### Páginas Públicas
- **Inicio**: http://localhost:8000/ o http://future-work-laravel.test/
- **Información**: /informacion
- **Contacto**: /contacto
- **Ubicación**: /ubicacion
- **Bolsa de Trabajo**: /bolsa-trabajo

### Profesiones
- **Albañil**: /albanil
- **Arquitecto**: /arquitecto
- **Carpintero**: /carpintero
- **Electricista**: /electricista
- **Ingeniero Civil**: /ingeniero-civil
- **Jardinero**: /jardinero
- **Plomero**: /plomero
- **Diseñador de Interiores**: /diseñador-interiores
- **Escultor**: /escultor

### Panel Administrativo
- **Login**: /login
- **Dashboard Admin**: /admin/dashboard (requiere autenticación)
- **Gestión de Usuarios**: /admin/usuarios (requiere autenticación)

## 🔐 Usuarios por Defecto

Si ejecutaste los seeders, tendrás estos usuarios de prueba:

### Usuario Administrador
- **Email**: admin@futurework.com
- **Contraseña**: password123
- **Tipo**: Administrador

### Usuario Regular
- **Email**: usuario@futurework.com
- **Contraseña**: password123
- **Tipo**: Usuario

## 🐛 Solución de Problemas Comunes

### Error: "Class not found"
```bash
composer dump-autoload
```

### Error: "Key not specified"
```bash
php artisan key:generate
```

### Error: "Permission denied" (Linux/Mac)
```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

### Error: "Node modules not found"
```bash
rm -rf node_modules package-lock.json
npm install
```

### Error: "Database connection failed"
1. Verificar que MySQL esté ejecutándose
2. Revisar credenciales en `.env`
3. Verificar que la base de datos exista

### Error de assets (CSS/JS no cargan)
```bash
npm run dev
php artisan storage:link
```

## 📚 Estructura del Proyecto

```
future-work-laravel/
├── app/                    # Lógica de la aplicación
│   ├── Http/Controllers/   # Controladores
│   ├── Models/            # Modelos Eloquent
│   └── Providers/         # Service Providers
├── database/              # Migraciones y seeders
├── public/                # Archivos públicos
│   └── assets/           # CSS y JS compilados
├── resources/             # Recursos sin procesar
│   ├── views/            # Plantillas Blade
│   ├── js/               # JavaScript fuente
│   └── sass/             # SASS fuente
├── routes/                # Definición de rutas
├── storage/               # Archivos generados
└── Docs/                  # Documentación
```

## 🚀 ¡Listo para Desarrollar!

Una vez completados estos pasos, tu aplicación estará lista para desarrollo. 

Para cualquier duda, consulta la documentación oficial de Laravel: https://laravel.com/docs
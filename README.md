# Future Work - Sistema Web PHP

## 📋 Descripción
Sistema web completo desarrollado en PHP que incluye:
- ✅ Conexión a base de datos MySQL
- ✅ Sistema de autenticación (login/registro)
- ✅ Panel de control protegido
- ✅ Registro de sesiones de usuarios
- ✅ Diseño responsivo y moderno
- ✅ Estructura modular reutilizable

## 🚀 Instalación

### 1. Configurar la Base de Datos
1. Abrir phpMyAdmin en Laragon: `http://localhost/phpmyadmin`
2. Ejecutar el archivo `sitio_web/database.sql`
3. Esto creará la base de datos `future_work_db` con las tablas necesarias

### 2. Configurar el Proyecto
1. El proyecto ya está configurado para Laragon
2. Asegúrate de que esté en: `c:\laragon\www\pra 2.1\`

### 3. Acceder al Sistema
- **URL Principal:** `http://localhost/pra%202.1/sitio_web/`
- **Panel de Administración:** `http://localhost/pra%202.1/sitio_web/sistema/`

## 👥 Credenciales por Defecto

### Usuario Administrador
- **Email:** admin@futurework.com  
- **Contraseña:** admin123

## 📁 Estructura del Proyecto

```
sitio_web/
├── config/
│   └── database.php          # Configuración de BD
├── includes/
│   ├── header.php            # Header común
│   ├── nav.php              # Navegación
│   └── footer.php           # Footer común
├── sistema/
│   └── index.php            # Dashboard protegido
├── css/                     # Archivos CSS
├── images/                  # Imágenes
├── index.php               # Página principal
├── login.php               # Inicio de sesión
├── register.php            # Registro de usuarios
├── logout.php              # Cerrar sesión
├── informacion.php         # Página de información
├── contactos.php           # Página de contactos
├── bolsa-trabajo.php       # Bolsa de trabajo
├── ubicacion.php           # Ubicación
├── clientes.php            # Clientes
├── nuevos-clientes.php     # Nuevos clientes
└── database.sql            # Script de base de datos
```

## 🔐 Características de Seguridad

- **Contraseñas hasheadas** con password_hash() de PHP
- **Sesiones seguras** con verificación de usuario activo
- **Validación de formularios** tanto frontend como backend
- **Protección SQL Injection** usando prepared statements
- **Redirección automática** para usuarios no autenticados

## 📊 Base de Datos

### Tabla: usuarios
- `id` - ID único del usuario
- `nombre` - Nombre completo
- `email` - Email único
- `password` - Contraseña hasheada
- `fecha_registro` - Fecha de creación
- `ultimo_acceso` - Último inicio de sesión
- `activo` - Estado del usuario

### Tabla: sesiones
- `id` - ID único de la sesión
- `usuario_id` - Referencia al usuario
- `fecha_inicio` - Timestamp del login
- `ip_address` - IP del usuario
- `user_agent` - Información del navegador

## 🔧 Configuración

### Database (config/database.php)
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', ''); 
define('DB_NAME', 'future_work_db');
```

### Funcionalidades Principales
1. **Sistema de Login/Registro** - Completo con validaciones
2. **Dashboard Personalizado** - Panel con estadísticas del usuario
3. **Registro de Sesiones** - Historial de accesos del usuario
4. **Navegación Dinámica** - Menú que cambia según el estado de login
5. **Mensajes Flash** - Notificaciones para el usuario
6. **Diseño Responsivo** - Compatible con móviles y tablets

## 🎨 Personalización

### Cambiar Colores
Editar los archivos CSS en las páginas PHP o crear un archivo CSS global.

### Agregar Nuevas Páginas
1. Crear archivo PHP en `sitio_web/`
2. Usar la estructura:
```php
<?php
$page_title = "Título de la Página";
include 'includes/header.php';
?>
<!-- Contenido aquí -->
<?php include 'includes/footer.php'; ?>
```

### Modificar la Base de Datos
1. Editar `database.sql` 
2. Reimportar en phpMyAdmin
3. Actualizar las consultas en PHP según sea necesario

## 🛡️ Mantenimiento

### Logs de Sesiones
El sistema registra automáticamente:
- Cada inicio de sesión exitoso
- IP del usuario
- Navegador utilizado
- Fecha y hora

### Backup de Base de Datos
Regularmente exportar la base de datos desde phpMyAdmin.

## 🆘 Solución de Problemas

### Error de Conexión a BD
1. Verificar que Laragon esté ejecutándose
2. Confirmar que MySQL esté activo
3. Revisar credenciales en `config/database.php`

### No se muestran las imágenes
1. Verificar que las imágenes estén en `sitio_web/images/`
2. Comprobar permisos de archivos

### Problemas de sesión
1. Verificar que las sesiones PHP estén habilitadas
2. Limpiar cookies del navegador

---

**Desarrollado para Future Work** 🏢  
Sistema completo de gestión web con PHP y MySQL
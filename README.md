<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Documentación del proyecto (español)

Aquí encontrarás una pequeña documentación del trabajo realizado y los pasos para ejecutar el proyecto en tu máquina (comandos orientados a PowerShell en Windows).

### Qué se ha hecho

- Modelo: `app/Models/Producto.php` — modelo Eloquent que representa los productos.
- Migración: `database/migrations/2025_10_21_071902_ae_juanjose_AcebedoLara_create_productos_table.php` — crea la tabla `productos` con los campos necesarios.
- Seeder: `database/seeders/ProductoSeeder.php` — datos de ejemplo para la tabla `productos`.
- Vistas: `resources/views/layouts/` y `resources/views/productos/` — plantillas para mostrar los productos.
- Rutas y controlador: definidas en `routes/web.php` y en `app/Http/Controllers/` (controladores para listar/crear productos según lo requerido).

### Requisitos

- PHP (version compatible con la versión de Laravel usada).
- Composer.
- Node.js y npm (si quieres compilar los assets con Vite).

### Cómo ejecutar (PowerShell)

1. Instalar dependencias de PHP y JS:

```powershell
composer install
npm install
```

2. Copiar el archivo de entorno y generar la clave de aplicación:

```powershell
Copy-Item .env.example .env
php artisan key:generate
```

3. Ejecutar migraciones y seeders (crea la tabla `productos` y añade datos de ejemplo):

```powershell
php artisan migrate --seed
```

4. Compilar assets (opcional durante desarrollo):

```powershell
npm run dev
```

5. Levantar el servidor de desarrollo:

```powershell
php artisan serve --host=127.0.0.1 --port=8000
```

6. Abrir en el navegador: http://127.0.0.1:8000

### Comprobación rápida desde PowerShell

Puedes comprobar que la aplicación responde con una petición rápida:

```powershell
Invoke-RestMethod -Uri 'http://127.0.0.1:8000' -UseBasicParsing
```

Si recibes HTML como respuesta, la aplicación está levantada correctamente.

### Archivos relevantes

- `app/Models/Producto.php` — modelo.
- `database/migrations/2025_10_21_071902_ae_juanjose_AcebedoLara_create_productos_table.php` — migración.
- `database/seeders/ProductoSeeder.php` — seeder de ejemplo.
- `resources/views/productos/` — vistas relacionadas con productos.
- `routes/web.php` — rutas web del proyecto.

### Buenas prácticas aplicadas

En este proyecto se han seguido diversas buenas prácticas de desarrollo con Laravel:

#### 1. **Arquitectura MVC (Model-View-Controller)**
- **Modelo** (`Producto.php`): Representa la entidad de negocio y encapsula la lógica de acceso a datos.
- **Vista** (Blade templates): Separación clara de la presentación en `resources/views/`.
- **Controlador** (`ProductoController.php`): Gestiona la lógica de negocio y coordina entre modelo y vista.

#### 2. **Documentación de código**
- PHPDoc en clases, métodos y propiedades.
- Comentarios descriptivos que explican la funcionalidad de cada método.
- Identificación del autor con `@author Juan José Acebedo Lara`.

#### 3. **Tipado estricto (Type Hinting)**
- Parámetros y retornos de métodos con tipos explícitos: `function index(): View`, `function show(int $id): View`.
- Mejora la legibilidad, previene errores y facilita el autocompletado en IDEs.

#### 4. **Protección contra asignación masiva**
- Uso de `$fillable` en el modelo para definir qué campos son asignables masivamente.
- Prevención de vulnerabilidades de seguridad al controlar qué atributos se pueden llenar.

#### 5. **Type Casting de atributos**
- Uso de `$casts` para convertir automáticamente `precio` a decimal con 2 decimales y `stock` a entero.
- Garantiza consistencia en los tipos de datos.

#### 6. **Migraciones reversibles**
- Métodos `up()` y `down()` en las migraciones.
- Permite hacer rollback de cambios en la base de datos si es necesario.

#### 7. **Seeders para datos de prueba**
- `ProductoSeeder` proporciona datos de ejemplo para desarrollo y testing.
- Facilita las pruebas sin necesidad de introducir datos manualmente.

#### 8. **Rutas nombradas (Named Routes)**
- Uso de `->name('productos.index')` y `->name('productos.show')`.
- Facilita el mantenimiento: si cambia la URL, solo se modifica en un lugar.

#### 9. **Manejo de errores 404**
- Uso de `findOrFail()` en el controlador.
- Laravel lanza automáticamente una excepción 404 si el producto no existe.

#### 10. **Separación de responsabilidades**
- Cada clase tiene una única responsabilidad bien definida.
- Controlador gestiona la lógica, modelo gestiona los datos, vistas gestionan la presentación.

#### 11. **Nombres descriptivos**
- Variables, métodos y clases con nombres claros: `$productos`, `index()`, `show()`.
- Código autoexplicativo que reduce la necesidad de comentarios excesivos.

#### 12. **Plantillas Blade reutilizables**
- Layout principal (`app.blade.php`) que se extiende con `@extends` y `@yield`.
- Evita duplicación de código HTML en múltiples vistas.

#### 13. **Validación de datos**
- Estructura preparada para añadir validaciones en el controlador usando `Request` de Laravel.

#### 14. **Convenciones de nomenclatura de Laravel**
- Nombres de tablas en plural (`productos`), modelos en singular (`Producto`).
- Controladores con sufijo `Controller`.
- Vistas organizadas por entidad en carpetas (`productos/index.blade.php`).

#### 15. **Ordenación de resultados**
- `orderBy('nombre')` en el método `index()` para presentar productos alfabéticamente.
- Mejora la experiencia de usuario al mostrar datos ordenados.

Si necesitas que añada más detalles (diagramas, ejemplos de API, tests adicionales), dímelo y lo incorporo.

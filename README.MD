# Tienda Online con sistema de referidos
## Bug's
#### Ninguno de momento.
## To-do

 - [x] ~~Creación de vistas~~
 - [x] ~~Creación de migraciones~~
 - [x] ~~Registro e ingreso de usuarios~~
 - [x] ~~Verificación vía email de usuarios~~
 - [x] ~~Generación de enlace de referido~~
 - [x] ~~Registro vía enlace de referido~~
 - [x] ~~Roles de usuario~~
 - [x] ~~Creación de vistas administrativas~~
 - [x] ~~Creación, visualización y edición de productos vía administración~~
 - [x] ~~Edición y visualización de usuarios vía administración~~
 - [ ] Visualización y realización de compras vía panel administrativo
 - [ ] Registro de direcciones IP para evitar multicuentas
 - [ ] Visualización de top 100 de usuarios con más referidos activos
 - [ ] Mostrar referidos en perfil de usuario
 - [ ] Mostrar total de compras de referidos en perfil de usuario
 - [ ] Optimización de código
 - [ ] Adaptación de Laravel con Apache

## Acerca del proyecto
### Tienda online con sistema de referidos
Proyecto desarrollado en Laravel cuyo objetivo es administrar una red de referidos para la venta de productos vía internet, donde cada usuario gana un porcentaje cuando un referido del mismo compra un producto, generando así una malla con distintos niveles. Por los momentos el nivel máximo de referidos es 3.
### Uso:

 1. Registro en el sistema
 2. Verificación de cuenta vía correo electrónico
 3. Ingreso al sistema
 4. Adquisición de producto(s)
 5. Invitación a terceros con links de referencia
 6. Generación de red de referidos
 7. Obtención de porcentaje de compras realizadas por referidos

### Condiciones:

 - El usuario debe ser activo en la página, lo que requerirá al menos 1 (una) compra al mes.
 - Si pasa un mes y el usuario no ha realizado alguna compra, el sistema automáticamente lo marcará como "usuario inactivo", lo que detendrá sus ganancias hasta que este vuelva a cumplir la primera condición.

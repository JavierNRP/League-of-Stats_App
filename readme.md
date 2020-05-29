# League Of Stats ![leagueoflegends_94793.svg](https://bit.ly/3d1o5Rd)
Página web de estadísticas e información acerca del videojuego, League Of Legends. Desarrollada en Laravel 5.8 basada en PHP. Diseñada en base a páginas de referencia como [League Of Graphs](https://www.leagueofgraphs.com/es/) y [Mobafire](https://www.mobafire.com).

![imagen_previa.PNG](https://github.com/JavierNRP/League-of-Stats_App/blob/master/public/img/imagen_previa.PNG?raw=true)

## Ejecución
1. Descargar el [Proyecto](https://bit.ly/2LRsfzg) y descomprimir
2. Abrir con [Visual Studio Code](https://code.visualstudio.com) o algún editor de código
3. Es necesario tener una API key de [Riot Developer Portal](https://developer.riotgames.com) ya que sino no se podrá disfrutar de las funcionalidades al completo, será necesario registrarse (si eres usuario del LOL, podrás iniciar sesión directamente) y generar una nueva clave (duración máx. 24 horas). Una vez tengamos la llave deberemos hacer lo siguiente:
4. Abrir para editar cada uno de los siguientes archivos
```
.../public/js/stats.js
.../public/js/rotacion.js
.../public/js/status.js
```
5. En la primera línea de cada uno añadir la nueva **key**
```
const key = " ";
```
6. Guardar los cambios en cada archivo
7. Abrir la terminal del editor de código
8. Ejecutar el siguiente comando
```
php artisan serve
```
9. Abrir el navegador web y introducir la siguiente URL
```
http://127.0.0.1:8000
```

## Hecho con
* [Laravel](https://laravel.com) - El framework web utilizado
* [MySQL](https://www.mysql.com) - Administración de base de datos
* [HTML5](https://developer.mozilla.org/es/docs/HTML/HTML5) - Representación del contenido
* [CSS3](https://developer.mozilla.org/es/docs/Archive/CSS3) - Maquetación del diseño
* [JavaScript](https://developer.mozilla.org/es/docs/Web/JavaScript) - Funcionalidades y procesado de datos

## Autores

#### Jesús Orán Pérez

- Responsable del desarrollo Front-end
- Responsable de la gestión y recogida de datos [API RIOT](https://developer.riotgames.com)

#### Ayoze Amaro Estévez

- Responsable del desarrollo de la interfaz gráfica
- Responsable de la documentación base del proyecto

#### Javier Nicolás Rodríguez Pérez

- Responsable del desarrollo Back-end
- Responsable de la base de datos

# trabajo3-paw
## Guía de Ejecución:
<br>
En primer lugar, podemos mencionar que esta aplicación fue probada en Windows 10 Home, utilizando el siguiente software instalado: wamp server versión 3.2.0 - 64bit: PHP versión 7.3.12, MariaDB versión 10.4.10 y MySQL versión 8.0.18. <br>
También es importante aclarar un cambio necesario en uno de los archivos de configuración para poder cumplir con una de las consignas de este trabajo. La misma impone la restricción de que el sistema solo debe poder cargar imágenes de hasta 10 MB. Para hacer esto posible hay que cambiar en el archivo de configuración de php la directiva post_max_size (por defecto establecida en 8 MB). <br>
Para correr la aplicación se deben seguir los siguientes pasos: <br>
1. Posicionados en el path en el cual se aloja el proyecto, ejecutar el comando composer install el cual se va a encargar de administrar, descargar e instalar nuestras dependencias de manera automática. <br>
2. Luego ejecutamos la siguiente instrucción en la línea de comandos: php -S ip:[port] la cual va a levantar el servidor interno de php diseñado para ayudar al desarrollo de aplicaciones y/o llevar a cabo casos de prueba.

## Respuestas teóricas: 
<br>

**1. Extienda el sistema de gestión de turnos médicos para que los datos sean persistidos sobre una base de datos MySQL usando PDO. La generación del número de turno debe hacerse vía motor de base de datos. ¿Qué cambios hubo que realizar para la generación del id?**
<br>
En la resolución del trabajo práctico anterior, para generar el id que discrimina un turno de otro utilizamos la función uniqid propia del lenguaje. En cambio, en este práctico, la generación del mismo pasa a ser responsabilidad de la base de datos ya que tildamos dentro del campo id la opción AUTO_INCREMENT. Esto hace que el identificador se genere automáticamente cada vez que se inserta una nueva fila en la tabla (sumando de a 1 por defecto). <br>

**4. Cada acción del ABM debe ser registrada usando el Logger del framework. Cada log debe ser de tipo INFO y almacenar fecha y hora, operación (ABM), y turno afectado (id). En los casos de modificación y baja, almacene el registro completo. ¿Considera esto útil? ¿En qué casos puede llegar a utilizarse?**
<br>
El archivo de log en general es muy importante como fuente variada de información, me permite obtener estadísticas, mantener un historial de transacciones, realizar una auditoria, detectar posibles ataques, encontrar errores, etc.
El log info captura en este caso entradas al sistema, modificaciones y bajas. En estos dos últimos, se pide almacenar el registro completo, esto nos parece útil para los casos en los que debemos recuperar esos datos que fueron modificados o eliminados cuando no se debería. Por ejemplo, podrían llegar a utilizarse en el caso de querer volver a un estado anterior, ver el historial de un determinado registro, casos de recuperación, entre otros.
# sistema_votacion
software desarrollado en php para un sistema de votación 
Sistema  Votación:

El sistema de votación 1.0 se desarrolló usando el framework Dhtmlx para la grid
al igual que para la gráfica de estadísticas.

Procedemos a instalar dentro del localhost la carpeta sistema_votacion con todo su contenido
e instalamos en mysql la bd llamada votacion, en la que esta almacenado los datos relacionados con
el proyecto. El archivo esta dentro de la carpeta y se llama votacion.sql . Es importante tener en 
cuenta de dejar alli la carpeta que dice dhtmlxSuite, la cual contiene las libreiras para nuestra
aplicación.

La carpeta dhtmlxSuide hay que descomprimirla para poder que funcione la grid y la grafica, dejandola 
en el directorio que aparece junto a los programas

Iniciamos el xampp o el software que usamos para hacer desarrollos localmente  y vamos a la ruta
en la que pegamos la carpeta ej: localhost/sistema_votacion/

El sistema muestra un inicio de sesión, en este momento hay un usuario de prueba para loguearse:
Email: juan@gmail.com
Pass:       abcde

También aparece la opción de crear un nuevo líder en el que automaticamente se crea una clave encriptada 
por defecto "abcde" y contiene la opción de que el líder suba su foto, para que automaticamente
quede guardada en la base de datos. Este formulario tiene un sistema de validación para que el
líder llene todos los campos del formulario. Al crear el nuevo líder, se redirecciona al index para
que pueda iniciar sesión. Estos líderes quedan guardados en la tabla usuarios. 

Cuando llenamos el campo email y password para iniciar sesión, este hace una búsqueda en el programa
veracciones.php para verificar de que el líder existe en la base de datos. Si no existe o escribio
mal algun dato aparece un mensaje de error, pero si accede correctamente, este se redirecciona a
http://localhost/sistema_votacion/saludoinicial1.php en el que aparece un mensaje de bienvenida y
hace un cargue de  la grid en el programa grid.php en el que estan la lista de votantes.

En la grid aparece la opción de ingresar un votante, es necesario llenar todos los datos para poder
guardar la información, en este formulario tamibne se puede subir imagen de foto del votante. Hay un
campo muy importante y es el de escoger que lider esta ingresando al votante para llevar un control,el 
campo de barrio hace una consulta a la tabla barrios para mostrar las opciones, el puesto de votación hac elo mismo
buscando la tabla puestorotacion, al igual mesa con su respectiva tabla.

Esta grid tiene la opción de ordenar ascendente o descendentemente los campos de la tabla en la 
que se almacenan os votantes, y se puede hacer un filtro en los campos nombre y appellido para una
búsqueda mas sencilla. En esta parte del código se carga un archivo xml en el que se llama cada uno
de los campos de la tabla votante.

Al hacer click en Gráfica de votantes creamos una gráfica en nuestro código grafica.php escribiendo
"new dhtmlXChart" en la que creamos la barra y llamamos el xml1.php en el que hace una consulta
sql para contar cuantos visitantes se han registrado en total.

<?php
/*
NOTAS:
    - El usuario root tiene la capacidad de generar espacios.
    - Se usa XAMPP/phpmyadmin
    - Se crea la base de datos desde cero.
    - Se utiliza modelo vista controlador.
    - No se ha de implantar la funcionalidad de cambiar a día, semana o mes
    - Se mostrará solo por semana.
    - El usuario puede reservar en un rango de 15 días. Esto lo podrá cambiar el admin (pantalla de setttings).
    - Se puede reservar tantas horas como desee dentro de ese rango (15 días desde la fecha actual).
    - El root puede reservar las aulas y horas que quiera sin limitación.
    - Establecer los parámetros del año (clases, calendario, festivos teniendo en cuenta locadidad, fiestas nacionales, autónomas y locales, etc)
    - La aplicación de primeras estará limpia y el root irá asignando el calendario escolar.
    - Sábados y domingos no se puede reservar al igual que los días festivos.
    - Se puede reservar en el mismo día (en las horas siguientes a la actual)
    - El root debe de poder reservar de una tacada todos los días una franja horaria. Se ha de meter un concepto. El profesor asignado ya podrá editar el contenido
    de esas horas reservadas para él. Opción 'pasiempre' además de otras. _Book patterns.
    - Se tiene que podre crear aulas nuevas y modificarlas así como categorías (solo el root)
    - En los patios también se puede reservar.
    - En vez de horas tratarlo como sesiones (para reservar).
    - Poner las aulas que tu quieras, se pueden inventar. Cada aula tendrá su propio calendario de horas reservadas.
*/
?>

<?php
header("location:controladores/index.php");

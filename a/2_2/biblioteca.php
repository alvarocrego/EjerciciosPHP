<?php
/**
 * Bases de datos 2-2 - biblioteca.php
 *
 * @author    Bartolom� Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2012 Bartolom� Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2012-11-27
 * @link      http://www.mclibre.org
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

define("FORM_METHOD",         "get");           // Formularios se env�an con GET
//define("FORM_METHOD",         "post");        // Formularios se env�an con POST
define("MYSQL",               "MySQL");
define("SQLITE",              "SQLite");
define("MENU_PRINCIPAL",      "menuPrincipal"); // Men� principal
define("MENU_VOLVER",         "menuVolver");    // Men� Volver a inicio
define('CABECERA_CON_CURSOR', TRUE);            // Para funci�n cabecera()
define('CABECERA_SIN_CURSOR', FALSE);           // Para funci�n cabecera()
define("MAX_REG_TABLA",       20);              // N�mero m�ximo de registros en la tabla
$tamNombre    = 40;                        // Tama�o del campo Nombre
$tamApellidos = 60;                        // Tama�o del campo Apellidos
$recorta = array(
    "nombre"    => $tamNombre,
    "apellidos" => $tamApellidos);
$campos = array(
    "nombre",
    "apellidos");

$dbMotor = MYSQL;                        // Base de datos empleada
if ($dbMotor == MYSQL) {
    define("MYSQL_HOST", "mysql:host=localhost"); // Nombre de host MYSQL
    define("MYSQL_USUARIO", "root");      // Nombre de usuario de MySQL
    define("MYSQL_PASSWORD", "bitnami");         // Contrase�a de usuario de MySQL
    $dbDb    = "mclibre_base_datos_2_2";  // Nombre de la base de datos
    $dbTabla = $dbDb . ".tabla";          // Nombre de la tabla
} elseif ($dbMotor == SQLITE) {
    $dbDb    = "/tmp/mclibre/mclibre_base_datos_2_2.sqlite";  // Nombre de la base de datos
    $dbTabla = "tabla";                   // Nombre de la tabla
}

function conectaDb()
{
    global $dbMotor, $dbDb;

    try {
        if ($dbMotor == MYSQL) {
            $db = new PDO(MYSQL_HOST, MYSQL_USUARIO, MYSQL_PASSWORD);
            $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
        } elseif ($dbMotor == SQLITE) {
            $db = new PDO("sqlite:" . $dbDb);
        }
        return($db);
    } catch(PDOException $e) {
        cabecera("Error grave", MENU_PRINCIPAL, CABECERA_SIN_CURSOR);
        print "<p>Error: No puede conectarse con la base de datos.</p>\n";
        print "<p>Error: " . $e->getMessage() . "</p>\n";
        pie();
        exit();
    }
}

function recorta($campo, $cadena)
{
    global $recorta;

    $tmp = isset($recorta[$campo])
        ? substr($cadena, 0, $recorta[$campo])
        : $cadena;
    return $tmp;
}

function recoge($var, $var2="")
{
    $tmp = (isset($_REQUEST[$var]) && trim(strip_tags($_REQUEST[$var])) != "")
    ? strip_tags(trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "ISO-8859-1")))
    : strip_tags(trim(htmlspecialchars($var2, ENT_QUOTES, "ISO-8859-1")));
    if (get_magic_quotes_gpc()) {
        $tmp = stripslashes($tmp);
    }
    $tmp = recorta($var, $tmp);
    return $tmp;
}

function recogeMatriz($var)
{
    $tmpMatriz = array();
    if (isset($_REQUEST[$var]) && is_array($_REQUEST[$var])) {
        foreach ($_REQUEST[$var] as $indice => $valor) {
            $tmp = strip_tags(trim(htmlspecialchars($indice, ENT_QUOTES, "ISO-8859-1")));
            if (get_magic_quotes_gpc()) {
                $tmp = stripslashes($tmp);
            }
            $indiceLimpio = $tmp;

            $tmp = strip_tags(trim(htmlspecialchars($valor, ENT_QUOTES, "ISO-8859-1")));
            if (get_magic_quotes_gpc()) {
                $tmp = stripslashes($tmp);
            }
            $valorLimpio = $tmp;

            $tmpMatriz[$indiceLimpio] = $valorLimpio;
        }
    }
    return $tmpMatriz;
}


function recogeCampo($var, $var2)
{
    global $campos;

    foreach($campos as $campo) {
        if (isset($_REQUEST[$var]) && $_REQUEST[$var] == $campo) {
            return $campo;
        }
    }
    return $var2;
}

function recogeOrden($var, $var2)
{
    if (isset($_REQUEST[$var]) && $_REQUEST[$var] == 'ASC') {
        return "ASC";
    } elseif (isset($_REQUEST[$var]) && $_REQUEST[$var] == 'DESC') {
        return "DESC";
    } else {
        return $var2;
    }
}

function cabecera($texto, $menu, $conCursor)
{
    print "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
  <title>www.mclibre.org - Bases de datos 2-2 - $texto</title>
  <link href=\"mclibre_php_soluciones_proyectos_comun.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>\n\n";
    if ($conCursor) {
        print "<body onload=\"document.getElementById('cursor').focus()\">\n";
    } else {
        print "<body>\n";
    }
    print "<h1>Bases de datos 2-2 - $texto</h1>
<div id=\"menu\">
  <ul>\n";
    if ($menu == MENU_PRINCIPAL) {
           print "    <li><a href=\"insertar1.php\">A�adir registro</a></li>
    <li><a href=\"listar.php\">Listar</a></li>
    <li><a href=\"borrar1.php\">Borrar</a></li>
    <li><a href=\"buscar1.php\">Buscar</a></li>
    <li><a href=\"modificar1.php\">Modificar</a></li>
    <li><a href=\"borrartodo1.php\">Borrar todo</a></li>\n";
    } elseif ($menu == MENU_VOLVER) {
        print "    <li><a href=\"index.php\">P�gina inicial</a></li>\n";
    } else {
        print "    <li>Error en la selecci�n de men�</li>\n";
    }
    print "  </ul>
</div>

<div id=\"contenido\">\n";
}

function pie()
{
    print '</div>

<div id="pie">
<address>
  Este programa forma parte del curso "P�ginas web con PHP" disponible en <a
  href="http://www.mclibre.org/">http://www.mclibre.org</a><br />
  Autor: Bartolom� Sintes Marco<br />
  �ltima modificaci�n de este programa: 27 de noviembre de 2012
</address>
<p class="licencia">El programa PHP que genera esta p�gina est� bajo
<a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o
posterior</a>.</p>
</div>
</body>
</html>';
}

?>

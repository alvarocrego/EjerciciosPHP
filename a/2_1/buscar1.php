<?php
/**
 * Bases de datos 2-1 - buscar1.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2012 Bartolomé Sintes Marco
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

require_once "biblioteca.php";

$db = conectaDb();
cabecera("Buscar 1", MENU_VOLVER);

$consulta = "SELECT COUNT(*) FROM $dbTabla";
$result = $db->query($consulta);
if (!$result) {
    print "<p>Error en la consulta.</p>\n";
} elseif ($result->fetchColumn() == 0) {
    print "<p>No se ha creado todavía ningún registro.</p>\n";
} else {
    $consulta = "SELECT * FROM $dbTabla";
    $result = $db->query($consulta);
    if (!$result) {
        print "<p>Error en la consulta.</p>\n";
    } else {
        print "<form action=\"buscar2.php\" method=\"" . FORM_METHOD . "\">
  <p>Escriba el criterio de búsqueda (carácteres o números):</p>
  <table>
    <tbody>
      <tr>
        <td>Nombre:</td>
        <td><input type=\"text\" name=\"nombre\" size=\"$tamNombre\" "
        . "maxlength=\"$tamNombre\" /></td>
      </tr>
      <tr>
        <td>Apellidos:</td>
        <td><input type=\"text\" name=\"apellidos\" size=\"$tamApellidos\" "
        . "maxlength=\"$tamApellidos\" /></td>
      </tr>
    </tbody>
  </table>
  <p><input type=\"submit\" value=\"Buscar\" /></p>
</form>\n";
    }
}

pie();
?>
<?php
/**
 * Bases de datos 2-2 - insertar1.php
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

require_once "biblioteca.php";

$db = conectaDb();

$consulta = "SELECT COUNT(*) FROM $dbTabla";
$result = $db->query($consulta);
if (!$result) {
    cabecera('A�adir 1', MENU_VOLVER, CABECERA_SIN_CURSOR);
    print "<p>Error en la consulta.</p>\n";
} elseif ($result->fetchColumn() >= MAX_REG_TABLA) {
    cabecera('A�adir 1', MENU_VOLVER, CABECERA_SIN_CURSOR);
    print "<p>Se ha alcanzado el n�mero m�ximo de registros que se pueden "
        . "guardar.</p>\n<p>Por favor, borre alg�n registro antes.</p>\n";
} else {
    cabecera('A�adir 1', MENU_VOLVER, CABECERA_CON_CURSOR);
    print "<form action=\"insertar2.php\" method=\"" . FORM_METHOD . "\">
  <p>Escriba los datos del nuevo registro:</p>
  <table>
    <tbody>
      <tr>
        <td>Nombre:</td>
        <td><input type=\"text\" name=\"nombre\" size=\"$tamNombre\" "
        . "maxlength=\"$tamNombre\" id=\"cursor\" /></td>
      </tr>
      <tr>
        <td>Apellidos:</td>
        <td><input type=\"text\" name=\"apellidos\" size=\"$tamApellidos\" "
        . "maxlength=\"$tamApellidos\" /></td>
      </tr>
    </tbody>
  </table>
  <p><input type=\"submit\" value=\"A�adir\" /></p>
</form>\n";
}

$db = NULL;
pie();
?>

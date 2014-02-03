<?php
/**
 * Bases de datos 2-1 - borrar1.php
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
cabecera("Borrar 1", MENU_VOLVER);

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
        print "<form action=\"borrar2.php\" method=\"" . FORM_METHOD . "\">
  <p>Marque los registros que quiera borrar:</p>
  <table border=\"1\">
    <thead>
      <tr class=\"neg\">
        <th>Borrar</th>
        <th>Nombre</th>
        <th>Apellidos </th>
      </tr>
    </thead>
    <tbody>\n";
        foreach ($result as $valor) {
            print "      <tr>
        <td align=\"center\"><input type=\"checkbox\"".
      " name=\"id[$valor[id]]\" /></td>
        <td>$valor[nombre]</td>
        <td>$valor[apellidos]</td>
      </tr>\n";
        }
        print "    </tbody>\n  </table>
  <p><input type=\"submit\" value=\"Borrar\" /></p>
</form>\n";
    }
}

$db = NULL;
pie();
?>

<?php
/**
 * Bases de datos 2-2 - borrartodo1.php
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

cabecera("Borrar todo 1", MENU_VOLVER, CABECERA_SIN_CURSOR);

print "<form action=\"borrartodo2.php\" method=\"" . FORM_METHOD . "\">
  <p>�Est� seguro?</p>
  <p><input type=\"submit\" value=\"S�\" name=\"si\" />
    <input type=\"submit\" value=\"No\" name=\"no\" /></p>
</form>\n";

pie();
?>

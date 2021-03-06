<?php
/**
 * Bases de datos 2-2 - insertar2.php
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
cabecera("Borrar 2", MENU_VOLVER, CABECERA_SIN_CURSOR);

$id = recogeMatriz("id");

if (count($id) == 0) {
    print "<p>No se ha seleccionado ning�n registro.</p>\n";
} else {
    foreach ($id as $indice => $valor) {
        $consulta = "SELECT COUNT(*) FROM $dbTabla
            WHERE id=:indice";
        $result = $db->prepare($consulta);
        $result->execute(array(":indice" => $indice));
        if (!$result) {
            print "<p>Error en la consulta.</p>\n";
        } elseif ($result->fetchColumn() == 0) {
            print "<p>Registro no encontrado.</p>\n";
        } else {
            $consulta = "DELETE FROM $dbTabla
                WHERE id=:indice";
            $result = $db->prepare($consulta);
            if ($result->execute(array(":indice" => $indice))) {
                print "<p>Registro borrado correctamente.</p>\n";
            } else {
                print "<p>Error al borrar el registro.</p>\n";
            }
        }
    }
}

$db = NULL;
pie();
?>

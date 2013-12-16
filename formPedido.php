<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <h1>INFORMACION SOBRE EL PEDIDO</h1>
        <form action="recogerDatosPedido.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend class="principal">Datos Cliente</legend>
            <table>
                <tr><td>
                        <label class="rojo">CIF:</label><input type="text" name="cif" />
                    </td></tr>
                <tr><td>
                        <label class="rojo">Empresa:</label><input type="text" name="empresa" />
                    </td></tr>
                <tr><td>
                        <label class="rojo">Contacto:</label><input type="text" name="contacto" />
                    </td></tr>
                <tr><td>
                        <label class="rojo">E-mail:</label><input type="email" name="email" />
                    </td></tr>
                <tr><td>
                        <label class="rojo">Contraseña:</label><input type="password" name="contrasenya" />
                    </td></tr>
                <tr><td>
                        <br/>
                        <br/>
                        <label class="rojo">Descripcion:</label>
                    </td></tr>
                <tr><td>
                        <textarea rows="10" cols="50" name="descripcion"></textarea>
                    </td></tr>
                <tr><td>
                        <label class="rojo">Pedido </label><input type="file" name="pedido" />
                    </td></tr>
                <tr><td>
                        <input type="checkbox" name="clientePreferente" checked="checked"/><label class="rojo">Cliente preferente</label>
                    </td></tr>
            </table>
        </fieldset>
        <fieldset>
            <table>
                <tr>
                    <td>
                        <label class="rojo">Cantidad </label><input type="text" name="cantidad" /> €     <label class="rojo">Impuestos </label><select name="impuestos"><option value="21">21%</option><option value="10">10%</option><option value="4">4%</option></select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="rojo">Promocion </label><br/><input type="radio" name="promocion" value="ninguno" checked="checked"/><label>Ninguno</label><br/><input type="radio" name="promocion" value="Transporte gratuito"/><label>Transporte gratuito</label><br/><input type="radio" name="promocion" value="Descuento 5%"/><label>Descuento 5%</label>
                    </td>
                </tr>
            </table>
        </fieldset>
            <input type="submit" name="enviar"/><input type="reset" name="reset"/>
        </form>
    </body>
</html>

<?php
/*

  This file is part of 'webapp-visual-apache2'.

  Copyright 2012 Sergio Lindo - <sergiolindo.empresa@gmail.com>

  'webapp-visual-apache2' is free software: you can redistribute it and/or
  modify it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or (at your
  option) any later version.

  'webapp-visual-apache2' is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General
  Public License for more details.

  You should have received a copy of the GNU General Public License along with
  'webapp-visual-apache2'. If not, see <http://www.gnu.org/licenses/>.

*/

;

$LANG['es'] = 'Español';

$META_TITLE['es'] = 'Interfaz gráfica para la configuración de apache';
$MENU_BAR_TITLE['es'] = 'Barra de menú';
$MENU_BAR_HOSTS['es'] = 'Hosts';
$MENU_BAR_MODULES['es'] = 'Módulos';

$SECTION_HOSTS_TITLE['es'] = 'Configuración de hosts virtuales';

$SECTION_NEW_HOST_TITLE['es'] = 'Crear host virtual';
$SECTION_NEW_HOST_HOST_EXISTS['es'] = 'El host {{SERVER_NAME}} ya existe.';
$SECTION_NEW_HOST_NO_DOCUMENT_ROOT['es'] = 'No se ha podido crear el directorio {{DOCUMENT_ROOT}}.';
$SECTION_NEW_HOST_NO_LOGS_DIR['es'] = 'No se ha podido crear el subdirectorio {{DOCUMENT_ROOT}}/logs.';
$SECTION_NEW_HOST_NO_BACKUP['es'] = 'No se pudo crear una copia de seguridad del fichero /etc/apache2/ports.conf.';
$SECTION_NEW_HOST_FATAL_ERROR['es'] = 'Error crítico al modificar el fichero /etc/apache2/ports.conf. Apache puede dejar de funcionar. Debería restaurar la copia de seguridad /etc/apache2/ports.conf.backup.';
$SECTION_NEW_HOST_NOT_CREATED['es'] = 'Error al crear el fichero /etc/apache2/sites-available/{{SERVER_NAME}}.';
$SECTION_NEW_HOST_SUCCESS['es'] = 'Host {{SERVER_NAME}} creado.';

$SECTION_EDIT_HOST_TITLE['es'] = 'Editar host virtual';

$SECTION_DELETE_HOST_HOST_DOES_NOT_EXIST['es'] = 'El host {{SERVER_NAME}} no existe.';
$SECTION_DELETE_HOST_PORT_NO_BACKUP['es'] = 'No se pudo crear una copia de seguridad del fichero /etc/apache2/ports.conf.';
$SECTION_DELETE_HOST_PORT_FATAL_ERROR['es'] = 'Error crítico al modificar el fichero /etc/apache2/ports.conf. Apache puede dejar de funcionar. Debería restaurar la copia de seguridad /etc/apache2/ports.conf.backup.';
$SECTION_DELETE_HOST_HOST_NO_BACKUP['es'] = 'No se pudo crear una copia de seguridad del fichero /etc/apache2/sites-available/{{SERVER_NAME}}.';
$SECTION_DELETE_HOST_HOST_STILL_ACTIVATED['es'] = 'Host {{SERVER_NAME}} aún está activado.';
$SECTION_DELETE_HOST_HOST_NOT_REMOVED['es'] = 'No se pudo eliminar el fichero /etc/apache2/sites-available/{{SERVER_NAME}}.';
$SECTION_DELETE_HOST_SUCCESS['es'] = 'Host {{SERVER_NAME}} eliminado.';



$SECTION_MODS_TITLE['es'] = 'Configuración de módulos';

$BTN_ENABLE['es'] = 'Activar';
$BTN_DISABLE['es'] = 'Desactivar';
$BTN_SAVE_ENABLE_HOST['es'] = 'Guardar y activar';
$BTN_SAVE_HOST['es'] = 'Guardar';
$BTN_CANCEL_HOST['es'] = 'Cancelar';
$BTN_DELETE_HOST['es'] = 'Eliminar';

?>

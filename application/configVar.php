<?php

/*
 *
2 * -------------------------------------
 * Archivo con los datos de configuración
 * @autor juan2ramos
 * -------------------------------------
 *
 */

$config = Config::singleton();

$config->set('BaseUrl', 'http://algol.co');//Ruta del sitio
$config->set('DefaultControllers', 'index');// controlador por defecto
$config->set('DefaultLayout', 'default'); //vista inicial

$config->set('AppName', 'Algol');
$config->set('AppSlogan', '');
$config->set('AppCompany', 'Algol');
$config->set('SessionTime', 100);
$config->set('HASH_KEY', '4f6a6d832be79');

$config->set('DBHost', 'localhost');//Servidor
$config->set('DBUser', 'juantwor_algol');//Usuario base de datos  
$config->set('DBPass', 'XDUZmUQVW2la');// Contraseña
$config->set('DBName', 'juantwor_algol');// Base de datos
$config->set('DBChar', 'utf8');// Codificación
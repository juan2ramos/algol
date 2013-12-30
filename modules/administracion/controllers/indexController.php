<?php

/*
 *
 * -------------------------------------
 * Descripción de indexController
 * Controlador inicial
 * @autor juan2ramos
 * -------------------------------------
 *
 */

class indexController extends Controller {

    private $_login;

    public function __construct() {
         
        $this->_item = 'administracion';
        parent::__construct(); #llamado al constructor padre el cual tiene como  atributo vista.        
        //$this->_view->menu = $this->_menu;
        $this->_view->menu_admin = $this->menu('menuAdmin');


        $this->_login = $this->loadModel('login'); #carga el modelo.        
        $this->_view->titulo = 'Iniciar sesion';
        $this->metas(array('description' => 'Inicio'));
    }

    public function index() {
        (Session::get('autenticado'))? $this->redireccionar('administracion/principalAdmin'):FALSE;

        

        if ($this->getInt('enviar') == 1) {
            $this->_view->datos = $_POST;
            $arrayMsj = array();

            if (!$this->getAlphaNum('nombreusuario')) {
                $arrayMsj['errors'] = 'Debe introducir su nombre de usuario';
                $arrayMsj['label'] = 'nombreusuario';
                echo (json_encode($arrayMsj));
                exit;
            }

            if (!$this->getSql('contrasenia')) {

                $arrayMsj['errors'] = 'Debe introducir su password';
                $arrayMsj['label'] = 'contrasenia';
                echo (json_encode($arrayMsj));
                exit;
            }
            $hashKey = $this->_config->get('HASH_KEY');

            $_POST['contrasenia'] = Hash::getHash('sha1', $_POST['contrasenia'], $hashKey);

            $row = $this->_login->getUsuario(
                    $this->getAlphaNum('nombreusuario'), $this->getSql('contrasenia')
            );

            if (!$row) {
                $arrayMsj['errors'] = 'Usuario y/o password incorrectos';
                $arrayMsj['label'] = 'errorGeneral';
                echo (json_encode($arrayMsj));
                exit;
            }
            //$this->_login->getTipoUsuario();
            Session::set('autenticado', true);
            Session::set('rol', $row['id_rol']);
            Session::set('usuario', $row['nombreusuario']);
            Session::set('id_usuario', $row['id_usuario']);
            Session::set('tiempo', time());
            $arrayMsj['success'] = TRUE;
            $arrayMsj['url'] = '/administracion/principalAdmin';
            echo (json_encode($arrayMsj));
            exit;
        }
        $this->render(FALSE, 'admin', TRUE); 
    }
    public function cerrar()
    {
        Session::destroy();
        $this->redireccionar('administracion/');
    }

}

?>
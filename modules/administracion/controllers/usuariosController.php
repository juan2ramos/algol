<?php

class usuariosController extends Controller {

    private $Usuario;

    public function __construct() {
       
        
        
        
        $this->_item = "usuarios";
        parent::__construct();
        $this->_login = $this->loadModel('usuarios');        
        $this->_view->menuAdmin = $this->menu('menuAdmin');
        //$this->_principalAdmin = $this->loadModel('pricipalAdmin'); #carga el modelo.        
        $this->_view->titulo = 'Administracion de usuarios';
        $this->autentificar('admin');
        $this->metas(array('description' => 'Administrar todos los usuario de la platafomrma'));
    }

    public function index() {
        $render = ($_POST['render'] == 'render')?FALSE:TRUE;
        $this->render('usuarios','admin',$render);
    }

}
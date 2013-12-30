<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="es" class="no-js"> <!--<![endif]-->
    <head>

        <meta charset="utf-8">
        <title><?php if (isset($this->titulo)) echo $this->titulo; ?></title>

        <!-- Meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <?
        if (isset($this->meta)):
            foreach ($this->meta as $clave => $valor):
                ?>
                <meta name="<?php echo $clave ?>" content="<?php echo $valor ?>" />       
                <?
            endforeach;
        endif;
        ?> 

        <!-- JavaScript -->
        <?
        $countJsPublic = count($jsPublic);
        if (isset($jsPublic) && $countJsPublic):
            for ($i = 0; $i < $countJsPublic; $i++):
                if ($jsPublic[$i] == 'http://juan2ramos.com/public/js/html5shiv-printshiv.js'):
                    ?>        <!--[if lt IE 9]><script src="<?php echo $this->_config->get('BaseUrl'); ?>/public/js/html5shiv-printshiv.js" media="all"></script><![endif]--><?
            continue;
        endif;
                ?>        <script src="<?php echo $jsPublic[$i] ?>" type="text/javascript"></script><?
        echo '
';
    endfor;
endif;
        ?>        
        <!-- Estilos -->
        <link rel= "stylesheet" href="<?php echo $_layoutParams['ruta_css']; ?>style.css" />
        <?
        $countCss = count($css);
        if (isset($css) && $countCss):
            for ($i = 0; $i < $countCss; $i++):
                ?><link rel= "stylesheet" href="<?php echo $css[$i] ?>" ><?
        echo '
                                    ';
    endfor;
endif;
        ?>
        <!-- Humans -->        
        <link type="text/plain" rel="author" href="humans.txt" />  

    </head>

    <body><!--[if lt IE 7]>
            <p class="chromeframe">Estas utilizando un navegador  <strong>anticuado</strong> .Por favor ve a <a href="http://browsehappy.com/">actualiza tu navegador</a>y 
          obt&eacute;n la ultima versi&oacute;n de tu navegador prefrido.</p>
        <![endif]-->



        <header>
            <h1><? echo $this->_config->get('AppName') ?></h1>


        </header>
        <nav>
            <? if (isset($this->menu_admin)) echo $this->menu_admin ?> 
        </nav>
        <!--Menu-->


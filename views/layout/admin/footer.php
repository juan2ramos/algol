</section>
<?
$countJs = count($js);
if (isset($js) && $countJs):
    for ($i = 0; $i < $countJs; $i++):
        ?><script src="<?php echo $js[$i] ?>" type="text/javascript"></script><?
        echo '
';
    endfor;
endif;
?>

</body>

</html>
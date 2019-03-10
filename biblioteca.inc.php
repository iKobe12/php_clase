<?php
if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN')
    setlocale(LC_ALL, 'es-ES');
else
    setlocale(LC_ALL, 'es_ES');

    
function Date2Fecha($date)
{
    return date('d/m/Y', strtotime($date));
}


function Fecha2Cabecera($date)
{
    $fecha = strtotime($date);    
    return strftime('%d de %B de %Y', $fecha);
}

function Mostrar($a)
{
    echo '<pre>';
    var_dump($a);
    echo '</pre>';
}

function ConsoleLog($a)
{
    echo "<script>console.log('$a');
          </script>";
}

function Maximo()
{
    $max = -PHP_INT_MAX;

    foreach (func_get_args() as $arg) 
    {
        if ($arg > $max) 
        {
            $max = $arg;
        }
    }

    return $max;
}

function Minimo()
{
    $min = -PHP_INT_MIN;

    foreach (func_get_args() as $arg) 
    {
        if ($arg < $min) 
        {
            $min = $arg;
        }
    }
    
    return $min;
}

function logueado()
{
    if(!isset($_SESSION['logedin']))
        return false;

    if(!$_SESSION['logedin'])
        return false;
        
    if(time() - $_SESSION['logstart'] > (15 * 60))
    {
        session_unset();
        session_destroy();

        return false;
    }

    $_SESSION['logstart'] = time();

    return true;
}




?>
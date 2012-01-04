<?php
/* 
 * @actor : daniel <hidensoft@gmail.com>
 *
 */


require_once('pdate.php');


function sfPdate($date,$returned = 'Y-m-d h:i:s'){

    if (strlen($date) < 1) return '';

    $exploded = explode(' ',$date);

    $dated = explode('-',$exploded[0]);
    $timed = explode(':',$exploded[1]);

    $mktimed = mktime($timed[0],$timed[1],$timed[2],$dated[1],$dated[2],$dated[0]);


    return pdate($returned,$mktimed);

}
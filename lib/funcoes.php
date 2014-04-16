<?php
function verifica_entrada($string)
{
    if(preg_match_all('/\'/' ,$string))
    {
        return false;
    } else
    {
        return true;
    }

}
?>
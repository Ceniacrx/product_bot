<?php
//$message = "228,Компьютер,14990,3";
function getPreparedMessage($message)
{
    $message = explode(",", trim($message));
    if (count($message) != 4) return false;
    return $message;
}

function getArticleFromMessage($message)
{
    if (!getPreparedMessage($message)) return false;
    return getPreparedMessage($message)[0];
}

function getTitleFromMessage($message)
{
    if (!getPreparedMessage($message)) return false;
    return getPreparedMessage($message)[1];
}

function getPriceFromMessage($message)
{
    if (!getPreparedMessage($message)) return false;
    return getPreparedMessage($message)[2];
}

function getStockFromMessage($message)
{
    if (!getPreparedMessage($message)) return false;
    return getPreparedMessage($message)[3];
}

?>
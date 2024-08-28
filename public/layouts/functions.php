<?php
function variableExist ($variable, $status, $link)
{
    if (!isset($variable)) {
        $variable = null;
    }
    if (!$variable == $status) {
        header('Location: ' . $link);
    }
}

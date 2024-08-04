<?php
class Controller
{
    function render($view, $data = [])
    {
        extract($data);

        include "Views/$view.php";
    }
}

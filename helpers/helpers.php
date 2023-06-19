<?php

function view($viewPath, $data = [])
{
    // Extract the data variables into the current symbol table
    extract($data);
    // Include the view file
    include '../views/' . $viewPath . '.php';
}


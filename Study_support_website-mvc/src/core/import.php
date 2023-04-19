<?php
function import($module)
{
    if (!file_exists($module)) {
        echo $module.' not found!';
        exit();
    }
    require_once $module;
}

function importModel($model)
{
    import('app/models/'.$model.'Model.php');
}

function importController($controller)
{
    import('app/controller/'.$controller.'Controller.php');
}

function getPathView($view)
{
    return 'app/views/'.$view.'.php';
}

function renderView($view, $data=[], $layout='')
{
    if (!is_string($view)) {
        $view = (array) $view;
        extract($view);
    }
    
    if (!is_string($view)) {
        $data = (array) $data;
        extract($data);
    }
    require_once getPathView('layout/'.($layout!='' ? $layout : 'client_layout'));
}

<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;
use Model\Registro;

class DashboardController {

    public static function index(Router $router) {

        // Obtener ultimos registros
        $registros = Registro::get(5);
        foreach($registros as $registro) {
            $registro->usuario = Usuario::find($registro->usuario_id);
        }


        $router->render('admin/dashboard/index', [
            'titulo' => 'Panel Administración',
            'registros' => $registros
        ]);
    }

}
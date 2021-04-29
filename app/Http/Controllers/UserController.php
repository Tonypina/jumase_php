<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller{
    
    /**
     *  Controla el servicio que será mostrado
     *  
     *  @param servicio Servicio a mostrar
     */
    public function servicio($servicio){
        switch ($servicio) {
            case 'Administrados':
                return view('servicio', ['servicio' => 1]);
                
            case 'Virtualizacion':
                return view('servicio', ['servicio' => 2]);
                
            case 'Comunicaciones':
                return view('servicio', ['servicio' => 3]);
                
            case 'Ciberseguridad':
                return view('servicio', ['servicio' => 4]);
                
            case 'Microsoft':
                return view('servicio', ['servicio' => 5]);
                
            case 'MonitoreoDeRed':
                return view('servicio', ['servicio' => 6]);
            
            case 'Respaldo':
                return view('servicio', ['servicio' => 7]);
            
            case 'SeguridadFisica':
                return view('servicio', ['servicio' => 8]);
            
            case 'Telefonia':
                return view('servicio', ['servicio' => 9]);
            
            default:
                abort(404);
                break;
        }
    }
}
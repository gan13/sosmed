<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataModel;

class HomeController extends Controller
{
    
    public function index()
    {
        //return ' controller indextHalo GoodDamn!!';
        //# code...
        $dataModel = new DataModel();
        echo '<pre>';
        print_r ($dataModel->showData());
        echo '</pre>';
    }
    
}
?>

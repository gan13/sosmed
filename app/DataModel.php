<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataModel extends Model
{
    //
    public function showData()
    {
        # code...
        $data = array (
            'nama' => 'ganden',
            'email' => 'ganden@gan.com',
            'website' => 'http://ganstudio.com'
        );
        return $data ;
    }
}

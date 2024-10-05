<?php

namespace App\Traits;

trait ResponseTrait
{
    public function ApiResponse( $data = null , $massage = null , $status = null){
        
        $array = [
            'data' => $data,
            'massage' => $massage,
            '$status' => $status
        ];

        return response($array,$status) ;
    
    }


}
<?php

namespace App\Traits;

trait uploud_images
{
    public function uploud_image($req , $image_name ,$folder){
        $img = $req->file('image')->getClientOriginalName();
        
        $name = time().str_replace(' ' ,'_',$img);

        $path =  $req->file($image_name)->storeAs($folder,$name,'public_storage');

        return $path ;
    
    }


}

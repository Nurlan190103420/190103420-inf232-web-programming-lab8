<?php

namespace App\Http\Resources;

use illuminate\Http\Resources\Json\Resource;

class UserResource extends Resource
{
    
    
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' =>$this->name,
            'email' =>$this->email,
            'created_at' =>$this->created_at,
            'updated_at' =>$this->updated_at,
            ];
    }
}

Route::get('/user', function(){
   return new UserResource(User::find(1)); 
});
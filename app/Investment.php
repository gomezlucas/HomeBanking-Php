<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Investment extends Model
{


    protected $fillable = [
        'user_id', 'company' , 'actions' , 'value'];

public function User(){
    return $this->belongsTo(User::class);
}

}

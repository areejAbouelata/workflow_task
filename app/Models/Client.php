<?php

namespace App\Models;

use App\JobRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Client extends Model implements Authenticatable
{
    use AuthenticableTrait;

    public $fillable = ['name' , 'email' , 'password'];
    public $timestamps = true ;

    public function jobRequests()
    {
        return $this->hasMany(JobRequest::class);
    }
}


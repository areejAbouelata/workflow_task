<?php

namespace App;

use App\Models\Client;
use Brexis\LaravelWorkflow\Traits\WorkflowTrait;
use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
    use     WorkflowTrait;
    
    public $fillable = ['client_id' , 'specialization' , 'address' ,'start' , 'experience_years','desired_salary' ,'qualifications' , 'note' , 'status' ,];
    public $timestamps = true ;

    public function client()
    {
        return $this->belongsTo(Client::class) ;
    }

}

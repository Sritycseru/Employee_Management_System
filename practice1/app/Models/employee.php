<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class employee extends Model
{
    use HasFactory;
    protected $fillable=['id','name','job_title','joining_date','salary','email','mobile_no','address'];
}

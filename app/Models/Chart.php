<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    use HasFactory;
    //prtotected $table = 'charts'
    public $timestamps=false;
    protected $table = "charts";
    protected $fillable = ["type","amount"];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekapjob extends Model
{
    protected $table = 'rekapjobs';
    protected $primaryKey = 'r_id';
    protected $fillable = ['nama','job','waktu','waktu2','status'];
}

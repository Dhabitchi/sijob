<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekapjob extends Model
{
    protected $table = 'Rekapjobs';
    protected $primaryKey = 'r_id';
    protected $fillable = ['nama','job','waktu','waktu2'];
}

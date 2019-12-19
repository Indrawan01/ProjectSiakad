<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $primaryKey = 'id_mk';
    protected $fillable=['kode_mk','nama_mk','sks_mk','pengampu_mk','semester_mk'];
}

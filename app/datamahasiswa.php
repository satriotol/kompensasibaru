<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datamahasiswa extends Model
{
    protected $table = "datamahasiswa";
    protected $fillable = ['foto','nama','kelas','alamat','sakit','ijin','alpha'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{

    protected $table='doctors';
    protected $primarykey='id';
    protected $fillable=['name','phone','Speciality','image'];
    use HasFactory;
}

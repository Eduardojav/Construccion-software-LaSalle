<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Reporte extends  Model
{   public $timestamps = false;
    protected $table='report';
    protected $primaryKey ='id';
    protected $fillable = ['Id_Usuario','Reporte','tipo'];


}

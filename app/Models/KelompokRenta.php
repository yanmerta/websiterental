<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class KelompokRenta extends Model
{
 use HasFactory;
 public $primaryKey = 'id_kelompok_renta';
 protected $fillable = ['nama_kelompok'];

 public function rentals()
 {
 return $this->hasMany(Rental::class,'id_kelompok_renta','id_kelompok_renta');
 }
}
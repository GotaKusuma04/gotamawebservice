<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    protected $primaryKey = 'id_mobil';
    protected $fillable = ['nama_mobil', 'jumlah_mobil', 'harga'];
    static function getAutor(){
        $return=DB::table('mobil')
        ->join('barum','mobil.id_perusashaan','=','barum.id_perusashaan');
        return $return;
    }
}

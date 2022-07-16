<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    use HasFactory;
    protected $table = 'barum';
    protected $primaryKey = 'id_perusahaan';
    protected $fillable = ['id_perusahaan'];
}

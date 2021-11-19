<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [''];

    public $timestamps = false;

    public function getPetugas()
    {
        return $this->hasMany("App\Models\PetugasModel", "id", "id_role'");
    }
}

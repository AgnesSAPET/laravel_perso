<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    public function character()
  {
    return $this->hasMany(Character::class);
  }

  public static function getOne($id)
  {
      return Designer::find($id);
  }
}

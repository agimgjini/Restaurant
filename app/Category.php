<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;

class Category extends Model
{
    public $table = 'categories';

    public function menus(){
        return $this->hasMany(Menu::class);
    }
}

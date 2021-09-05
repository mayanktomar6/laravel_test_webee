<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'menu_items';

    protected $primaryKey = 'id';

    public $timestamps = false;
}

?>
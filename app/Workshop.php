<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $table = 'workshops';

    protected $primaryKey = 'id';

    public $timestamps = false;
}

?>
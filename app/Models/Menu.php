<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;
    
    protected $table = 'menu';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = array(
        'name',
        'url',
        'order',
        'menuid',
        'enabled',
    );
    protected $softDelete = true;
    protected $dates = ['deleted_at'];
}

<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Groups extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];
    public function group()
    {
        return $this->hasMany(Students::class);
    }
}
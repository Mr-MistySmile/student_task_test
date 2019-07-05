<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Groups extends Model
{
    protected $fillable = [
        'title',
        'description',
        'average_math',
        'average_rus',
        'average_eng'

    ];
    public function group()
    {
        return $this->hasMany(Students::class);
    }
}
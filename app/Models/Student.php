<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Оюутны хүснэгтүүд
    protected $fillable = ['firstname', 'lastname', 'birthday', 'gander', 'angi_id', 'phone', 'image'];

    // Ангитай холбоо
    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class, 'angi_id'); // 'angi_id' нь гадаад түлхүүр
    }
    public function class()
{
    return $this->belongsTo(SchoolClass::class, 'angi_id');
}

}

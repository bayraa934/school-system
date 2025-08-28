<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;

    // Ажиллуулах хүснэгтүүд
    protected $fillable = ['name'];

    // Олон оюутантай холбоо үүсгэх
    public function students()
    {
        return $this->hasMany(Student::class, 'angi_id'); // 'angi_id' гэж байгаа гадаад түлхүүр
    }
}

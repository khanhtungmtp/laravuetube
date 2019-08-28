<?php

namespace App;

// kế thừa từ Model tự tạo, ko dùng của laravel

class Channel extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

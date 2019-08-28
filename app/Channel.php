<?php

namespace App;

// kế thừa từ Model tự tạo, ko dùng của laravel

use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Channel extends Model implements HasMedia
{
    use HasMediaTrait;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Tạo ảnh thumb , hàm có sẳn của thư viện
    */
    public function registerMediaConversions(?Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->width(100)
            ->height(100);
    }

    public function image()
    {
        if ($this->media->first()) {
            return $this->media->first()->getFullUrl('thumb');
        }

        return null;
    }
}

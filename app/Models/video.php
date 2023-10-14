<?php

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Video extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['title', 'description'];
}
?>
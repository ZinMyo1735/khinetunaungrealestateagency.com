<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureCondo extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_id',
        'card_title_1',
        'card_title_2',
        'post_title',
        'header_text',
        'body_text_1',
        'body_text_2',
        'body_text_3',
        'body_text_4',
        'price',
        'dimension',
        'master_bedroom',
        'double_bedroom',
        'single_bedroom',
        'baths',
        'type',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        "title",
        "description",
        "slug",
        "published",
        "inStock",
        "price",
        "created_by",
        "updated_by",
        "deleted_by",
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    function product_images()
    {
        return $this->belongsTo(ProductImages::class);
    }

    function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    function category()
    {
        return $this->belongsTo(Categories::class);
    }
}

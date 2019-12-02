<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name', 'description', 'is_menu', 'status', 'slug', 'featured', 'parent_id', 'image', 'icon', 'menu_color'];


    public function setSlugAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    protected $casts = [
        'parent_id' => 'integer',
        'featured' => 'boolean',
        'status' => 'boolean',
        'is_menu' => 'boolean'
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }


    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Product extends Model
{
    use HasFactory, Sortable;

    public function category()
    {
        return $this->belongTo(Category::class);
    }

    public function reviews()
    {
        /*1つの商品には複数のレビューが付くので、hasMany()でReviewと紐づける */
        return $this->hasMany(Review::class);
    }

    /*中間テーブル*/
    public function favorited_users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function product()
    {
        /*複数のレビューが1つの商品に付くので、belongsTo()でproductと紐づける*/
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        /*複数のレビューが1人のユーザーには書けるので、belongsTo()でuserと紐づける */
        return $this->belongsTo(User::class);
    }
}

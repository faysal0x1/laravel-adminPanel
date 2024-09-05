<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogCategory;
use Illuminate\Support\str;


class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'desc', 'blog_category_id', 'created_by'];

    public function getShortDescAttribute(){
        return Str::limit($this->attributes['desc'], 50);
    }
    public function setNameAttribute($value){
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str::slug($value);
    }
    public function blogCategory(){
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }
    protected $guarded = [];
}

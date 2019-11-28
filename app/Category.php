<?php
  
namespace App;
   
use Illuminate\Database\Eloquent\Model;
   
class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category', 'description'
    ];

    public function movie() {
        return $this->belongsTo('App\Movie');
    }
}
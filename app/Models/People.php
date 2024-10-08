<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class People extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'image',
        'mobile',
        'position',
        'profile',
        'department',
        'slug' ,
    ];


    // protected static function boot()
    // {
    //     parent::boot();

    //     // Generate and save slug when creating a new person
    //     static::creating(function ($person) {
    //         $person->slug = Str::lower(Str::slug($person->name));
    //     });
    
    //     // Update the slug when updating a person's name
    //     static::updating(function ($person) {
    //         $person->slug = Str::lower(Str::slug($person->name));
    //     });
    // }

    // public function generateSlug()
    // {
    //     $this->slug = Str::slug($this->name); // Assuming 'name' is the column with the person's name.
    //     $this->save();
    // }

    // protected static function slugExists($slug, $id)
    // {
    //     return static::where('slug', $slug)->where('id', '<>', $id)->exists();
    // }

}

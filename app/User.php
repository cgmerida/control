<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Caffeinated\Shinobi\Models\Role;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'email', 'tel', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
     */
    public static function rules($update = false, $id = null)
    {
        $commun = [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'tel' => 'required|numeric|regex:/^[0-9]{8}$/',
            'email' => "required|string|email|max:255|unique:users,email,$id",
            'password' => 'nullable|confirmed',
        ];

        if ($update) {
            return $commun;
        }
        
        return array_merge($commun, [
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /*
    |------------------------------------------------------------------------------------
    | Attributes
    |------------------------------------------------------------------------------------
     */
    public function setPasswordAttribute($value = '')
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function getFullNameAttribute()
    {
        return "{$this->name} {$this->lastname}";
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }
}

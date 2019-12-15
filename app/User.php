<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\RecetteUser;
use Orangehill\IseedServiceProvider\users;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Recette()
    {
        return $this->hasMany('App\Recette');
    }


    public function Commentaire()
    {
        return $this->belongsToMany('App\Commentaire');
    }

        /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */

    public function getRememberTokenName()
    {
        return '';
    }

    public function bookmarks(){
        return $this->belongsToMany('App\Recette','recette_user','user_id','recette_id');
    }

    public function hasBookmark($id){
        return sizeof($this->belongsToMany('App\Recette','recette_user','user_id','recette_id')->where('recette_id', '=', $id)->get());
    }

}

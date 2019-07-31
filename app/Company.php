<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\CompanyResetPasswordNotification;

class Company extends Authenticatable
{
    use Notifiable;
    protected $guard = "company";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'companyname', 'phone' , 'companytype' , 'aboutme', 'website' , 'linkedin',  'address' , 'logo' ,'email', 'password',
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
    
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CompanyResetPasswordNotification($token));
    }

    public function jobposts()
    {
        return $this->hasMany('App\Jobpost');
    }



}

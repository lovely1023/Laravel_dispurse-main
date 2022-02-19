<?php

namespace App\Models;

use App\Mail\NewUserNotification;
use App\Notifications\UserRegistered;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Mail;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    
    // use AuthenticatesUsers;


    // protected $table = 'users';

    // protected $fillable = ['first_name','last_name','email','email_verified_at','password','company_name', 'payroll_provider','is_employee', 'remember_token'];
    
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function booted()
    {
        self::created(function(self $user) {
            $user->notify(new UserRegistered);
           Mail::to(config('notifications.new_signup_email'))->send(new NewUserNotification($user));
        });
    }

    public function getRoleAttribute()
    {
        return $this->is_employee ? 'employee' : 'employer';
    }
}

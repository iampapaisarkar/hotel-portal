<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Roles;
use App\Models\UserRoles;
use Auth;

class User extends Authenticatable
{
    use  HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'referral_code',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if(!Roles::where('code',$role)->exists()){
                    return false;
                }
                $mRole = Roles::where('code',$role)->first();
                if (UserRoles::where(['role_id'=>$mRole->id,'user_id'=>Auth::user()->id])->exists()) {
                    return true;
                }
            }
            return false;
        }
    }

    public function role() {
        return $this->hasOne(UserRoles::class,'user_id', 'id')
        ->join('roles', 'roles.id', 'user_roles.role_id')
        ->select('roles.code', 'roles.role', 'roles.id as role_id', 'user_roles.role_id', 'user_roles.user_id');
    }
}

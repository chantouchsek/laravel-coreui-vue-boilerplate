<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\HasApiTokens;
use League\OAuth2\Server\Exception\OAuthServerException;

class User extends Authenticatable
{
    use Notifiable,
        HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * Find the user identified by the given $identifier.
     *
     * @param $identifier email|name|staff_if
     * @return mixed
     */
    public function findForPassport($identifier)
    {
        return $this->orWhere('email', $identifier)
            ->orWhere('staff_id', $identifier)
            ->orWhere('name', $identifier)->first();
    }

    /**
     * @param $password
     * @return bool
     * @throws OAuthServerException
     */
    public function validateForPassportPasswordGrant($password)
    {
        //check for password
        if (Hash::check($password, $this->getAuthPassword())) {
            //is user active?
            if ($this->status) {
                return true;
            }
            throw new OAuthServerException('User account is not active', 6, 'account_inactive', 401);
        }
        return false;
    }

    /**
     * Generate Staff ID
     */
    public function generateStaffId()
    {
        $lastRecord = (new User)->orderBy('id', 'desc')->withTrashed()->first();
        return str_pad($lastRecord->id + 1, 7, "0", STR_PAD_LEFT);
    }
}

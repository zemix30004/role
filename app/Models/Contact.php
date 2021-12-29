<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Contact extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // public static function getContact()
    // {
    // $records = DB::table('contacts')->select('id', 'name', 'phone', 'email', 'message')->get()->toArray();
    // return $records;
    // }

    protected $fillable = ['name', 'phone', 'email', 'message'];

    // public function contacts()
    // {
    // return $this->hasMany(Contact::class);
    // }
}

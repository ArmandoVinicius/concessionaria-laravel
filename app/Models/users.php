<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

        // use HasFactory;

        use Notifiable;
        use SoftDeletes;
    
        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'usuarios';
    
        /**
         * Indicates if the model should be timestamped.
         *
         * @var bool
         */
        public $timestamps = true;
    
        /**
         * The attributes that are not mass assignable.
         *
         * @var array
         */
        protected $guarded = [
            'id',
        ];
    
        /**
         * The attributes that are hidden.
         *
         * @var array
         */
        protected $hidden = [
            'senha_user',
            'remember_token',
            'activated',
            'token',
        ];
    
        /**
         * The attributes that should be mutated to dates.
         *
         * @var array
         */
        protected $dates = [
            'created_at',
            'updated_at',
        ];
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'nome_user',
            'email_user',
            'senha_user',
            'activated',
            'token',
        ];
    
        /**
         * The attributes that should be cast to native types.
         *
         * @var array
         */
        protected $casts = [
            'id'                                => 'integer',
            'nome_user'                        => 'string',
            'email_user'                             => 'string',
            'senha_user'                          => 'string',
            'activated'                         => 'boolean',
            'token'                             => 'string',
        ];
    }
}

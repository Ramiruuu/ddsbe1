<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

    class User extends Model{
        protected $table = 'tbluser1';
        // column sa table
        protected $fillable = ['username', 'password','gender','jobid'];

        //public $timestamps = false;
        //protected $primaryKey = 'id';

        // Define relationship with UserJob
        public function userJob()
        {
            return $this->belongsTo(UserJob::class, 'jobid', 'jobid');
        }

        protected $hidden = ['password',];
 }
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     // Blog creation Procedure //
    // index - list all post
    // create - create a post
    // store - save a post
    // edit - edit a post
    // Update - update a post
    // Show - display a post
    // destroy - delete a post

    // Optional Parameters //
    // Some of the things you can do in the model //

    //Table name
    protected $table = 'posts'; //used to change table name
    //Primary key
    public $primaryKey = 'id'; //you 2change pri key field

    //timestamps
    public $timestamps = true; //used to enable to disable timestamps, default = true
}

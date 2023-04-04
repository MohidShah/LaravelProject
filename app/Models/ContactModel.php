<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;
    public $table = 'contactus';
	 
	public $fillable = ['name','phone','email','subject','message'];
	 
}

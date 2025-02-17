<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $table="tbl_grades";
    protected $primaryKey = 'grade_id';
    
    public $fillable = ['grade_name','salaireBase','status'];
}

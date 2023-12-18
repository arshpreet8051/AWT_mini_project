<?php

namespace App\Models;

use CodeIgniter\Model;

class student_model extends Model
{
    protected $table = 'student_table';
    protected $primaryKey = 'id';

    protected $useTimestamps = true; // Enable automatic timestamps

    protected $createdField  = 'created_at'; // Customize created_at column name if needed
    protected $updatedField  = 'updated_at'; // Customize updated_at column name if needed

    protected $allowedFields = ['course_code', 'branch_code', 'scheme_code', 'leet_status','semester','6_month_training','AICTE_RE','course_type','subject_title','m_code','theory/practical','elective_status','credits','internal_marks','external_marks','cbs_status','created_at','updated_at']; // Add other fields in your table

}

<?php

namespace App\Controllers;

use App\Models\student_model;
use App\Models\log_model;

class student_controller extends BaseController
{
    public function index(): string
    {
        return view('create_student');
    }

    public function insert()
{
    $data = [
        'course_code'      => $this->request->getVar('course_code'),
        'branch_code'      => $this->request->getVar('branch_code'),
        'scheme_code'      => $this->request->getVar('scheme_code'),
        'leet_status'      => $this->request->getVar('leet_status'),
        'semester'         => $this->request->getVar('semester'),
        '6_month_training' => $this->request->getVar('6_month_training'),
        'AICTE_RE'         => $this->request->getVar('AICTE_RE'),
        'course_type'      => $this->request->getVar('course_type'),
        'subject_title'    => $this->request->getVar('subject_title'),
        'm_code'           => $this->request->getVar('m_code'), 
        'theory/practical' => $this->request->getVar('theory/practical'), 
        'elective_status'  => $this->request->getVar('elective_status'),
        'credits'          => $this->request->getVar('credits'),
        'internal_marks'   => $this->request->getVar('internal_marks'),
        'external_marks'   => $this->request->getVar('external_marks'),
        'cbs_status'       => $this->request->getVar('cbs_status'),
    ];

    $model = new student_model(); 
    $model->insert($data);

    echo "<h1>Data sent successfully...</h1>";
}

public function show(){
    $model = new student_model();
    $data['courses'] = $model->findAll();
    return view('show_student',$data);
}

public function delete($id = null){
    $model = new student_model(); 
    $data['course'] = $model->where('id', $id)->delete();
    return redirect()->to(base_url('student_controller/show_student'));
}

public function edit($id = null){
    $model = new student_model();
    $data['course'] = $model->where('id', $id)->first();

    // Create an instance of the log_model
    $log_model = new log_model();

    // Insert the previous data into the new table
    $log_data = [
        'old_value' => json_encode($data['course']),
    ];

    $log_model->insert($log_data);

    // Return the update_student view
    return view('update_student', $data);
}

public function update(){
    $data = [
        'course_code'      => $this->request->getVar('course_code'),
        'branch_code'      => $this->request->getVar('branch_code'),
        'scheme_code'      => $this->request->getVar('scheme_code'),
        'leet_status'      => $this->request->getVar('leet_status'),
        'semester'         => $this->request->getVar('semester'),
        '6_month_training' => $this->request->getVar('6_month_training'),
        'AICTE_RE'         => $this->request->getVar('AICTE_RE'),
        'course_type'      => $this->request->getVar('course_type'),
        'subject_title'    => $this->request->getVar('subject_title'),
        'm_code'           => $this->request->getVar('m_code'), 
        'theory/practical' => $this->request->getVar('theory/practical'), 
        'elective_status'  => $this->request->getVar('elective_status'),
        'credits'          => $this->request->getVar('credits'),
        'internal_marks'   => $this->request->getVar('internal_marks'),
        'external_marks'   => $this->request->getVar('external_marks'),
        'cbs_status'       => $this->request->getVar('cbs_status'),
    ];

    $id = $this->request->getVar('id');
    $model = new student_model();
    $model->update($id,$data);
    return redirect()->to( base_url('student_controller/show_student') );
}

}
<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        return view('crud');
    }
    public function insert(){
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];
        $model = new UserModel();
        $model->insert($data);
        echo "<h1>Data sent successfully...</h1>";
    }
    public function show(){
        $model = new UserModel();
        $data['users'] = $model->findAll();
        return view('show',$data);
    }
    public function delete($id = null){
        $model = new UserModel();
        $data['user'] = $model->where('id', $id)->delete();
        return redirect()->to( base_url('Home/show') );
    }
    public function edit($id = null){
        $model = new UserModel();
        $data['user'] = $model->where('id',$id)->first();
        return view('edit',$data);
    }
    public function update(){
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];
        $id = $this->request->getVar('id');
        $model = new UserModel();
        $model->update($id,$data);
        return redirect()->to( base_url('Home/show') );
    }
    
    
}
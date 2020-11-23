<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\ApiController;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentApiController extends ApiController
{
    public function getById($id) {
        try{
            $student = Student::find($id);
            $this->setData($student);
            $this->setMessage('success');
        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $student = Student::create($data);
            $this->setData($student);
            $this->setMessage('success');

        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();

    }

    public function update($id, Request $request) {
        try {
            $data = $request->all();
            $student = Student::updateOrCreate(['id' => $id], $data);
            $this->setData($student);
            $this->setMessage('success');

        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();

    }
    public function delete($id) {
        try{
            $student = Student::find($id);
            $student -> delete();
            $this->setData('delete');
            $this->setMessage('success');
        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();
    }


}

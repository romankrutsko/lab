<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\ApiController;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherApiController extends ApiController
{
    public function getById($id) {
        try{
            $teacher = Teacher::find($id);
            $this->setData($teacher);
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
            $teacher = Teacher::create($data);
            $this->setData($teacher);
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
            $teacher = Teacher::updateOrCreate(['id' => $id], $data);
            $this->setData($teacher);
            $this->setMessage('success');

        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();

    }
    public function delete($id) {
        try{
            $teacher = Teacher::find($id);
            $teacher -> delete();
            $this->setData('delete');
            $this->setMessage('success');
        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();
    }

}

<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\ApiController;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentApiController extends ApiController
{
    public function getAll() {
        try {
            $departments = Department::all();
            $this->setData($departments);
            $this->setMessage('success');
        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }

        return $this->getResponse();
    }
    public function getById($id) {
        try{
            $department = Department::find($id);
            $this->setData($department);
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
            $department = Department::create($data);
            $this->setData($department);
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
            $department = Department::updateOrCreate(['id' => $id], $data);
            $this->setData($department);
            $this->setMessage('success');

        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();

    }
    public function delete($id) {
        try{
            $department = Department::find($id);
            $department -> delete();
            $this->setData('delete');
            $this->setMessage('success');
        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();
    }

}

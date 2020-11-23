<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\ApiController;
use App\Models\Discipline;
use Illuminate\Http\Request;

class DisciplineApiController extends ApiController
{
    public function getAll() {
        try {
            $disciplines = Discipline::all();
            $this->setData($disciplines);
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
            $discipline = Discipline::create($data);
            $this->setData($discipline);
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
            $discipline = Discipline::updateOrCreate(['id' => $id], $data);
            $this->setData($discipline);
            $this->setMessage('success');

        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();

    }
    public function delete($id) {
        try{
            $discipline = Discipline::find($id);
            $discipline -> delete();
            $this->setData('delete');
            $this->setMessage('success');
        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();
    }

}

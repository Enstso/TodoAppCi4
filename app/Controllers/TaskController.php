<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskModel;
use App\Entities\Task;


class TaskController extends BaseController
{
    public function __construct()
    {
        $this->helpers = ['form', 'url'];
        $this->taskModel = new TaskModel();
    }
    public function index()
    {

        $taskModel = new TaskModel();
        $tasks = $this->taskModel->orderBy('order')->findAll();
        $data['tasks'] = $tasks;
        $data['titre'] = "au boulot";
        return view('Task-index.php', $data);
    }

    public function create()
    {

        $data['titre'] = 'Nouvelle Tâche';
        return view('Task-Form.php', $data);
    }
    public function delete(int $id)
    {
        $this->taskModel->where(['id' => $id])->delete();
        return redirect()->to('/')->with('message', 'Tâche supprimée');
    }
    public function save(int $id = null)
    {

        $rules = $this->taskModel->getValidationRules();
        if (!$this->validate($rules)) {

            return  redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {

            $form_data = [
                'order' => $this->request->getPost('order'),
                'text' => $this->request->getPost('text')

            ];
            if (!is_null($id)) {
                $form_data['id'] = $id;
            }
            $task = new Task($form_data);
            $this->taskModel->save($task);
            return redirect()->to('/')->with('message', "Tâche sauvegardée");
        }
    }
    public function edit(int $id)
    {
        $data['titre'] = "Modifier tâche";
        $data['task'] = $this->taskModel->find($id);
        return view('Task-Form.php', $data);
    }
    public function done(int $id)
    {
        $this->taskModel->update($id, ['done' => '1']);
        return redirect()->to('/')->with('message', 'Tâche faite');
    }

    public function indexReorder()
    {
        $tasks = $this->taskModel->orderBy('order')->findAll();
        $index = 10;
        foreach ($tasks as $task) {
            $task->order = $index;
            $index += 10;
        }
        $data['tasks'] = $tasks;
        $data['titre'] = "Réordonner les tâches";
        return view('Task-indexReorder.php', $data);
    }

    public function SaveReorder()
    {
        $validation = \Config\Services::validation();
        $validation->setRule('order.*', 'ordre', 'required|numeric');
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        } else {
            $orders = $this->request->getPost('order[]');
            $ids = $this->request->getPost('id[]');
            $index = 0;
            foreach ($ids as $id) {
                $form_data = [
                    'order' => $orders[$index],
                    'id'    => $ids[$index],
                ];
                $task = new Task($form_data);
                $this->taskModel->save($task);
                $index++;
            }
            return redirect()->to('/')->with('message', "Tâches réorganisées");
        }
    }
}

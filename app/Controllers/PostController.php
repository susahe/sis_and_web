<?php
// app/Controllers/PostController.php
namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\Controller;

class PostController extends Controller
{
    public function index()
    {
        $data = [];
        helper(['form']);
        $postModel = new PostModel();
        $data['posts'] = $postModel->findAll();

        return view('posts/post_list', $data);
    }

    public function create()
    {
          helper(['form']);
        $postModel = new PostModel();

        if ($this->request->getMethod() === 'post') {

            $rules = [
                'title' => 'required|min_length[6]|max_length[150]',
                'content' => 'required|min_length[8]|max_length[255]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Title Not match'
                ]
            ];
            if (! $this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            }else{

            $data = [
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content')
            ];
            $postModel->insert($data);
            

                           return redirect()->to('/post');
        }
    }

        return view('posts/post_create');
    }

    public function edit($id)
    {
        $postModel = new PostModel();
        $data['post'] = $postModel->find($id);

           if ($this->request->getMethod() === 'post') {

            $rules = [
                'title' => 'required|min_length[6]|max_length[150]',
                'content' => 'required|min_length[8]|max_length[255]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Title Not match'
                ]
            ];
            if (! $this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            }else{

            $data = [
                'id' => $id ,
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content')
            ];
           
            $postModel->update($id, $data);

                        return redirect()->to('/post');
        }
}
        return view('posts/post_edit', $data);
    
}

    public function delete($id)
    {
        $postModel = new PostModel();
        $postModel->delete($id);

                    return redirect()->to('post');
    }
}

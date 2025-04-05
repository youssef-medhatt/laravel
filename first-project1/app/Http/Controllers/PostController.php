<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [
        [
            'id' => 1,
            'title' => 'Post 1',
            'desc' => 'this is post 1',
            'createdAt' => '12-3-2025',
            'createdBy' => 'Ahmed'
        ],
        [
            'id' => 2,
            'title' => 'Post 2',
            'desc' => 'this is post 2',
            'createdAt' => '2-4-2025',
            'createdBy' => 'Osama'
        ],
        [
            'id' => 3,
            'title' => 'Post 3',
            'desc' => 'this is post 3',

            'createdAt' => '4-4-2025',
            'createdBy' => 'Mahmoud'
        ]
    ];
    public function index()
    {
        return view('posts.index', [
            'posts' => $this->posts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();

        $newPost = [
            'id' => count($this->posts) + 1,
            'title' => $data['title'],
            'createdAt' => date('d-m-Y'),
            'createdBy' => $data['people']
        ];

        $this->posts[] = $newPost;

        return to_route('posts.index');
    }
    public function edit($id) {
        $foundPost = null;
        foreach ($this->posts as $post) {
            if ($post['id'] == $id) {
                $foundPost = $post;
            }

        }
        
        return view('posts.edit',[
            'post' => $foundPost
        ]);
    }
    public function update($id){
        return to_route('posts.index');
    }
    public function show($id){
        
        $foundPost = null;
        foreach ($this->posts as $post) {
            if ($post['id'] == $id) {
                $foundPost = $post;
            }

        }
        
        return view('posts.show',[
            'post' => $foundPost
        ]);
    }
}

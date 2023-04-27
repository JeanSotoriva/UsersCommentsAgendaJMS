<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserFormRequest;
use App\Http\Requests\UpdateUserFormRequest;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(Request $request){

        $filtro = $request->filtro;
        $users = $this->model->where(function($query) use ($filtro){
            if($filtro){
                $query->where('email', $filtro);
                $query->orwhere('name', 'LIKE', "%{$filtro}%");
            }
        })->paginate(5);

        return view('users.index', compact('users'));
    }

    public function show($id){
        if(!($user = $this->model->find($id))){
            return redirect()->route('users.index');
        };
        
        $user = $this->model->where('id', $id)->first();
        return view('users.show', compact('user'));
    }   

    public function create(){
        return view('users.create');
    }

    public function store(StoreUserFormRequest $request){
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $this->model->create($data);
        return redirect()->route('users.index')->withSuccess('success');
    }

    public function edit($id){
        if(!$user = $this->model->find($id)){
            return redirect()->route('users.edit');
        };
        return view('users.edit', compact('user'));
    }

    public function update(UpdateUserFormRequest $request, $id){
        if(!$user = $this->model->find($id)){
            return redirect()->route('users.edit');
        };
        $data = $request->only('name', 'email'); 
        if($request->password){
            $data['password'] = bcrypt($request->password);
        } 
        $user->update($data);
        return redirect()->route('users.index');
    }

    public function delete($id){
        if(!($user = $this->model->find($id))){
            return redirect()->route('users.index');
        };
        
        $user->delete();
        return redirect()->route('users.index');
    }   

}
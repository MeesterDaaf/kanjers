@extends('layouts.navigation.side-menu')

@section('head')
	<title>Users edit - Process Security</title>
@endsection

@section('content-modifier')
    content--dashboard
@endsection

@section('breadcrumb')
<a href="{{route('users.index')}}" class="breadcrumb">Users</a>	
<i data-feather="chevron-right" class="breadcrumb__icon"></i>
<a href="#" class="breadcrumb--active">edit</a>	
@endsection


@section('firstLevel')

@section('content')
<div class="container mx-auto">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="flex flex-row justify-center mt-3">
                    <form action="{{route('users.update', $user)}}" method="post" class="w-1/4">
                        @csrf
                        @method('put')
                        <div class="flex justify-between w-full">
                            <div class="flex flex-col">
                                <div class="flex flex-col mb-4">
                                    <label for="firstname" class="mb-2 uppercase font-bold text-lg text-white">Voornaam</label>
                                    <input type="text" name="firstname" id="firstname" class="border-2 p-2 rounded-md text-md w-60 focus:bg-white focus:ring-blue-500 focus:border-blue-500 focus:text-red-600" value="{{old('firstname', $user->firstname)}}">
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label for="lastname" class="mb-2 uppercase font-bold text-lg text-white">Achternaam</label>
                                    <input type="text" name="lastname" id="lastname" class="border-2 p-2 rounded-md text-md w-60 focus:bg-white focus:ring-blue-500 focus:border-blue-500 focus:text-red-600"  value="{{old('lastname', $user->lastname)}}">
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label for="email" class="mb-2 uppercase font-bold text-lg text-white">Email</label>
                                    <input type="text" name="email" id="email" class="border-2 p-2 rounded-md text-md w-60 focus:bg-white focus:ring-blue-500 focus:border-blue-500 focus:text-red-600"  value="{{old('email', $user->email)}}">
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label for="title" class="mb-2 uppercase font-bold text-lg text-white">Titel</label>
                                    <input type="text" name="title" id="title" class="border-2 p-2 rounded-md text-md w-60 focus:bg-white focus:ring-blue-500 focus:border-blue-500 focus:text-red-600"  value="{{old('title', $user->title)}}">
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex flex-row mb-4">
                                        <label class="inline-flex items-center mt-3 mr-4">
                                            <input type="radio" class="form-radio h-5 w-5" id="status_on" name="isActive" @if($user->isActive == 1) checked @endif value="1"><span class="ml-2 text-yellow-400">Actief</span>
                                        </label>
                                        <label class="inline-flex items-center mt-3">
                                            <input type="radio" class="form-radio h-5 w-5" id="status_off" name="isActive" @if($user->isActive == 0) checked @endif value="0"><span class="ml-2 text-yellow-400">Non Actief</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col mb-4 items-center justify-center">
                                    <label for="firstname" class="uppercase font-bold text-lg text-white">Rol</label>
                                    <div class="flex flex-col">
                                        @foreach($all_roles as $role)
                                        <label class="inline-flex items-center mt-3">
                                            <input type="radio" class="form-radio h-5 w-5 " id="{{$role->id}}" name="role" @if($user->roles->contains('name', $role->name) ) checked @endif value="{{$role->name}}"><span class="ml-2 text-yellow-400">{{$role->name}}</span>
                                        </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
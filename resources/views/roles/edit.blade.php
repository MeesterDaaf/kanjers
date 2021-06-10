@extends('layouts.app')
@section('main')
@php
    // dd($user->roles);
@endphp
<div class="container mx-auto">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="flex flex-row justify-center mt-3">
                    <form action="{{route('roles.update', $role)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="mt-4 mb-4">
                            <div class="flex flex-col mb-4">
                                <label for="title" class="mb-2 uppercase font-bold text-lg text-grey-darkest">Titel</label>
                                <input type="text" name="title" id="title" class="form-input" value="{{old('title', $role->name)}}" autofocus>
                            </div>
                            
                            <span class="text-gray-700">Beschikbare permissies</span>
                            <div class="mt-2">
                                @foreach ($permissions as $permission)
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox" name="permissions[]" id="{{$permission->id}}" value="{{$permission->name}}" @if($role->hasPermissionTo($permission->name)) checked @endif>
                                    <span class="ml-2">{{$permission->name}}</span>
                                  </label>
                            @endforeach
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
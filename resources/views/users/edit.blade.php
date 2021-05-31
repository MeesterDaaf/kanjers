@extends('layouts.app')
@section('main')
<div class="container mx-auto">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="flex flex-row justify-center mt-3">
                    <form action="{{route('users.update', $user)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="flex flex-col mb-4">
                            <label for="firstname" class="mb-2 uppercase font-bold text-lg text-grey-darkest">Voornaam</label>
                            <input type="text" name="firstname" id="firstname" class="form-input" value="{{old('firstname', $user->firstname)}}">
                        </div>
                        <div class="flex flex-col mb-4">
                            <label for="lastname" class="mb-2 uppercase font-bold text-lg text-grey-darkest">Achternaam</label>
                            <input type="text" name="lastname" id="lastname" class="form-input"  value="{{old('lastname', $user->lastname)}}">
                        </div>
                        <div class="flex flex-col mb-4">
                            <label for="email" class="mb-2 uppercase font-bold text-lg text-grey-darkest">Email</label>
                            <input type="text" name="email" id="email" class="form-input"  value="{{old('email', $user->email)}}">
                        </div>
                        <div class="flex flex-col mb-4">
                            <label for="title" class="mb-2 uppercase font-bold text-lg text-grey-darkest">Titel</label>
                            <input type="text" name="title" id="title" class="form-input"  value="{{old('title', $user->title)}}">
                        </div>
                        <div class="flex flex-col mb-4">
                            <div class="flex flex-row">
                                <label for="status_on">Actief</label>
                                <input type="radio" name="isActive" id="status_on" class="form-radio rounded text-pink-500 m-1" value="1" @if($user->isActive == 1) checked @endif>
                                <label for="status_off">Non Actief</label>
                                <input type="radio" name="isActive" id="status_off" class="form-radio rounded text-pink-500 m-1" value="0" @if($user->isActive == 0) checked @endif>
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
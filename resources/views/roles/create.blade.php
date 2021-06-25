@extends('layouts.main')
@section('main')
@php
    // dd($user->roles);
@endphp
<div class="container mx-auto">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="flex flex-row justify-center mt-3">
                    <form action="{{route('roles.store')}}" method="post">
                        @csrf
                        <div class="flex flex-col mb-4">
                            <label for="title" class="mb-2 uppercase font-bold text-lg text-grey-darkest">Titel</label>
                            <input type="text" name="title" id="title" class="form-input" value="{{old('title')}}" autofocus>
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
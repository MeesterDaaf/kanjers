@extends('layouts.app')
@section('main')
    
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      	<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
			<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
				@forelse ($roles as $role)
					<table class="min-w-full divide-y divide-gray-200">
						<thead class="bg-gray-50">
							<tr>
								<th scope="col" class="px-6 py-3 w-48 text-left font-medium bold uppercase ">
								{{$role->name}}
								</th>
								@foreach ($area as $area_item)
									<th>
										{{Str::ucfirst($area_item)}}
									</th>
								@endforeach
							</tr>
						</thead>
						<tbody class="bg-white divide-y divide-gray-200">
							<tr>
								<td class="">
									@can('edit-roles')
										<a href="{{route('roles.edit', $role)}}" class="bg-yellow-300 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
									@endcan
								</td>
								@foreach ($area as $area_item)
									<td class="text-center">
										@if ($role->hasPermit('index-'.$area_item))
											<div class="text-gray-50 bg-green-900 leading-normal py-2 px-4 rounded-md font-extrabold py-2 px-4">index </div>
										@else
											<div class="text-red-400">index</div>
										@endif
									</td>
								@endforeach
							</tr>
							<tr>
								<td class="">
									&nbsp;
								</td>
								@foreach ($area as $area_item)
									<td class="text-center">
										@if ($role->hasPermit('view-'.$area_item))
											<div class="text-gray-50 bg-green-900 leading-normal rounded-md font-extrabold py-2 px-4 ">view </div>
										@else
											<div class="text-red-400">view</div>
										@endif
									</td>
								@endforeach
							</tr>
							<tr>
								<td class="">
									&nbsp;
								</td>
								@foreach ($area as $area_item)
									<td class="text-center">
										@if ($role->hasPermit('create-'.$area_item))
											<div class="text-gray-50 bg-green-900 leading-normal rounded-md font-extrabold py-2 px-4 ">create </div>
										@else
											<div class="text-red-400">create</div>
										@endif
									</td>
								@endforeach
							</tr>
							<tr>
								<td class="">
									&nbsp;
								</td>
								@foreach ($area as $area_item)
									<td class="text-center">
										@if ($role->hasPermit('edit-'.$area_item))
											<div class="text-gray-50 bg-green-900 leading-normal rounded-md font-extrabold py-2 px-4 ">edit </div>
										@else
											<div class="text-red-400">edit</div>
										@endif
									</td>
								@endforeach
							
							</tr>
							<tr>
								<td class="">
									&nbsp;
								</td>
								@foreach ($area as $area_item)
									<td class="text-center">
										@if ($role->hasPermit('delete-'.$area_item))
											<div class="text-gray-50 bg-green-900 leading-normal rounded-md font-extrabold py-2 px-4 ">delete</div>
										@else
											<div class="text-red-400">delete</div>
										@endif
									</td>
								@endforeach
							</tr>
						</tbody>
					</table>
					@empty
				@endforelse
			</div>
			@can('create-roles')
            <div class="p-3">
                <a href="{{route('roles.create')}}" class="bg-green-900 text-white px-3 py-2 rounded text-sm font-medium">Maak nieuwe rol</a>

            </div>
			@endcan
        </div>
    </div>
</div>
@endsection
{{-- 
<td>
								
	@if($role->name != 'super-admin')
		@foreach ($role->permissions as $role_item)
			<span class="rounded-lg bg-green-900 m-3 p-2 text-gray-50">{{$role_item->name}}</span>
		@endforeach
	@elseif($role->name == 'super-admin')
		@foreach ($permissions as $item)
			<span class="rounded-lg bg-green-900 m-3 p-2 text-gray-50">{{$item->name}}</span>
		@endforeach
	@endif
</td>
<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
	@if($role->name != 'super-admin')
		@can('edit-roles')
			<a href="{{route('roles.edit', $role)}}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
		@endcan
		@can('delete-roles')
		<form action="{{route('roles.destroy', $role)}}" method="post" class="inline-block">
		@csrf
		@method('delete')
		<button class="text-indigo-600 hover:text-indigo-900">Delete</button>
		@endcan
	</form>
	@endif
</td>
</tr> --}}
@extends('layouts.app')
@section('main')
    
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      	<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
			<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
				<table class="min-w-full divide-y divide-gray-200">
					<thead class="bg-gray-50">
					<tr>
						<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
						Rolnaam
						</th>
						<th>
							Permissies
						</th>
						<th scope="col" class="relative px-6 py-3">
						    <span class="sr-only">Edit</span>
						</th>
					</tr>
					</thead>
					<tbody class="bg-white divide-y divide-gray-200">
						
						<tr>
							<td class="px-6 py-4 whitespace-nowrap">
								<div class="flex items-center">
                                    <div class="text-sm text-gray-900">{{$role->name}}</div>
								</div>
							</td>
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
						</tr>
						@empty
							
						@endforelse
					</tbody>
				</table>
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
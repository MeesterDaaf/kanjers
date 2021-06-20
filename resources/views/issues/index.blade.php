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
						    Type
						</th>
                        <th>
                            Datum
                        </th>
                        <th>
                            Tijd
                        </th>
                        <th>
                            Duur
                        </th>
                        <th>
                            Schade
                        </th>
                        <th>

                        </th>
						<th scope="col" class="relative px-6 py-3">
						    <span class="sr-only">Escaleer + </span>
						    <span class="sr-only">Downloaden -</span>
						</th>
					</tr>
					</thead>
					<tbody class="bg-white divide-y divide-gray-200">
						@forelse ($permissions as $permission)
						<tr>
							<td class="px-6 py-4 whitespace-nowrap">
								<div class="flex items-center">
                                    <div class="text-sm text-gray-900">{{$permission->name}}</div>
								</div>
							</td>
							<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
								<a href="{{route('permissions.edit', $permission)}}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
								<form action="{{route('permissions.destroy', $permission)}}" method="post" class="inline-block">
                                    @csrf
                                    @method('delete')
                                    <button class="text-indigo-600 hover:text-indigo-900">Delete</button>

                                </form>
							</td>
						</tr>
						@empty
							
						@endforelse
					</tbody>
				</table>
			</div>
            <div class="p-3">
                <a href="{{route('permissions.create')}}" class="bg-green-900 text-white px-3 py-2 rounded text-sm font-medium">Maak nieuwe Permissie</a>

            </div>
        </div>
    </div>
</div>
@endsection
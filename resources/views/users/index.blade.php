@extends('layouts.navigation.side-menu')

@section('head')
	<title>Users - Process Security</title>
@endsection

@section('content-modifier')
    content--dashboard
@endsection

@section('breadcrumb')
<a href="{{route('users.index')}}" class="breadcrumb">Users</a>	
<i data-feather="chevron-right" class="breadcrumb__icon"></i>
<a href="#" class="breadcrumb--active">index</a>	
@endsection

@section('content')
	<div class="relative">
		<div class="grid grid-cols-12 gap-6">
			<div class="col-span-12 z-10">
				<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
					<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
						<table class="table-auto min-w-full divide-y divide-gray-200">
							<thead class="text-white">
							<tr class="">
								<th scope="col" class="px-6 py-3 text-left text-base font-medium text-white-500 uppercase tracking-widest border border-gray-500">
								Name
								</th>
								<th scope="col" class="px-6 py-3 text-left text-base font-medium text-white-500 uppercase tracking-widest border border-gray-500">
									Email
									</th>
								<th scope="col" class="px-6 py-3 text-left text-base font-medium text-white-500 uppercase tracking-widest border border-gray-500">
								Title
								</th>
								<th scope="col" class="px-6 py-3 text-left text-base font-medium text-white-500 uppercase tracking-widest border border-gray-500">
								Status
								</th>
								<th scope="col" class="px-6 py-3 text-left text-base font-medium text-white-500 uppercase tracking-widest border border-gray-500">
								Role
								</th>
								<th scope="col" class="relative px-6 py-3 border border-gray-500">
								<span class="sr-only">Edit</span>
								</th>
							</tr>
							</thead>
							<tbody class="divide-y divide-gray-200">
								@forelse ($users as $user)
								<tr>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="flex-shrink-0 h-10 w-10">
												<img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
												</div>
												<div class="ml-4">
												<div class="text-sm font-medium text-white font-bold uppercase ">
													{{$user->firstname}} {{$user->lastname}}
												</div>
												
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="text-sm text-white">
											{{$user->email}}
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="text-sm text-white">{{$user->title}}</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<span class="px-2 inline-flex text-xs leading-5 font-semibold @if($user->isActive == 1) bg-green-100 text-green-800 @else bg-red-100 text-red-800 @endif">
											@if($user->isActive == 1) 
												Active <i data-feather="zap"></i>
											@else
												Non Active <i data-feather="zap-off"></i>
											@endif
										</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
										{{-- {{$user->getRoleNames()}} --}}
										@foreach($user->getRoleNames() as $role)
											<div class="px-2">{{$role}}</div>
										@endforeach
									</td>
									<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
										@can('edit-users')
											<a href="{{route('users.edit', $user)}}" class="
											bg-yellow-400 hover:bg-blue-700 text-blue-700 hover:text-yellow-400 font-bold py-2 px-4 rounded
											">Edit</a>
										@endcan
									</td>
								</tr>
								@empty
									
								@endforelse
									
						
				
							<!-- More people... -->
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
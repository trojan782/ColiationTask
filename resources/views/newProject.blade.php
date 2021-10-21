<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Add Project') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

            <form method="POST" action="/task">

                {{-- <div class="form-group">
                    <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Enter your task'></textarea>
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div> --}}
                <!-- component -->
	<form class="flex flex-col bg-white rounded shadow-lg p-12 mt-12 mx-auto" action="">
		<label class="font-semibold text-xs" for="title">Title</label>
		<input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text">
		<label class="font-semibold text-xs mt-3" for="desc">Description(optional)</label>
		<input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"type="text">
        <label class="font-semibold text-xs mt-3" for="desc">Task</label>
		<input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"type="text">
		<button class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Create Project</button>
	</form>
	<!-- Component End  -->
                {{-- <div class="form-group">
                    @csrf
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Task</button>
                </div> --}}
                {{-- {{ csrf_field() }} --}}
            </form>
        {{-- </div> --}}
    </div>
</div>
</x-app-layout>

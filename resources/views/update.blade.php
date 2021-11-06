<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <!-- component -->
                <form class="flex flex-col bg-white rounded shadow-lg p-12 mt-12 mx-auto" method="POST"
                    action="{{ route('update', ['id' => $task->id]) }}">
                    @csrf
                    <label class="font-semibold text-xs" for="title">Task</label>
                    <input
                        class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
                        type="text" name="task" value="{{ $task->task }}">
                    <button
                        class="flex items-center justify-center h-12 px-6 w-64 bg-purple-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700"
                        type="submit">Update Task</button>
                </form>
                <!-- Component End  -->
            </div>
        </div>
    </div>
</x-app-layout>

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cleaning {{ __('Tasks') }}
        </h2>
    </x-slot> --}}
<div class="py-12">
    {{-- @foreach ($tasks as $task)
    <div class="max-w-7xl mx-auto sm:px-4 lg:px-8 mb-4">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <div class="flex mb-4 items-center">
                <p class="w-full text-grey-darkest">{{ $task->task }}</p>
                <a class="flex-no-shrink p-2 ml-4 mr-2 border-2  bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                <a class="flex-no-shrink p-2 ml-2 border-2 rounded text-white bg-red-600 hover:text-white hover:bg-red-800" href="{{ route('delete', ['id' => $task->id]) }}">Delete</a>
            </div>
        </div>
    </div>
    @endforeach --}}

    {{-- @foreach ($tasks as $task) --}}

    {{-- <div class="max-w-7xl mx-auto sm:px-4 lg:px-8 mb-4">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                    <div class="flex mb-4 items-center" wire:sortable="updateTaskOrder">
                            <div wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}">
                                <h4 wire:sortable.handle>{{ $task->task }}</h4>

                            </div>

                            <a
                                class="flex-no-shrink p-2 ml-4 mr-2 border-2  bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            <a class="flex-no-shrink p-2 ml-2 border-2 rounded text-white bg-red-600 hover:text-white hover:bg-red-800"
                                href="{{ route('delete', ['id' => $task->id]) }}">Delete</a>
                    </div>
                </div>
            </div> --}}
    <!-- component -->
    <!-- responsive table-->
    <div class="mt-2">
        <table class="max-w-5xl mx-auto table-auto" wire:sortable="updateTaskOrder">
            <thead class="justify-between">
                <tr class="bg-purple-500">

                    <th class="px-16 py-2">
                        <span class="text-gray-100 font-semibold">Task</span>
                    </th>

                    <th class="px-16 py-2">
                        <span class="text-gray-100 font-semibold">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-gray-200">
                @foreach ($tasks as $task)
                    <tr class="bg-white border-b-2 border-gray-200" wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}">
                        <td>
                            <span class="text-center ml-2 font-semibold">{{ $task->task }}</span>
                        </td>
                        <td class="px-16 py-2">
                            <span class="text-yellow-500 flex">

                                 <a
                                class="flex-no-shrink p-2 ml-4 mr-2 border-2  bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"  href="{{ route('edit', ['id' => $task->id]) }}"">Edit</a>

                                 <a class="flex-no-shrink p-2 ml-2 border-2 rounded text-white bg-red-600 hover:text-white hover:bg-red-800"
                                href="{{ route('delete', ['id' => $task->id]) }}">Delete</a>
                            </span>
                @endforeach
                </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- @endforeach --}}
</div>
{{-- </x-app-layout> --}}
{{-- <ul wire:sortable="updateTaskOrder">
    @foreach ($tasks as $task)
        <li wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}">
            <h4 wire:sortable.handle>{{ $task->task }}</h4>
            <button wire:click="removeTask({{ $task->id }})">Remove</button>
        </li>
    @endforeach --}}

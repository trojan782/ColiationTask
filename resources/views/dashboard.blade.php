<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <!-- component -->
    <div class="grid grid-cols-3 gap-2">

        {{-- component beginng --}}
        @foreach ($projects as $project)

            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
                <div>
                    <h2 class="text-gray-800 text-2xl font-semibold">{{ $project->title }}</h2><sub>Total Task(s):
                        2</sub>
                    <p class="mt-2 text-gray-600">{{ $project->description }}</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="{{ route('viewtasks') }}" class="text-xl font-medium text-indigo-500">View Tasks</a>
                </div>

                <div class="flex justify-start">
                    <a href="{{ route('newtask') }}" class="text-xl font-medium text-indigo-500"><b>+</b>Add Task</a>
                </div>
            </div>
        @endforeach

        {{-- component ends --}}

         </div>
</x-app-layout>

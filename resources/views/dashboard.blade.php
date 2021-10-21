

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <!-- component -->
    <div class="grid grid-cols-3 gap-2">
<div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
  <div>
    <h2 class="text-gray-800 text-2xl font-semibold">Project Name</h2>
    <p class="mt-2 text-gray-600">Description...</p>
  </div>
  <div class="flex justify-end mt-4">
    <a href="#" class="text-xl font-medium text-indigo-500">View Tasks</a>
  </div>
</div>

<div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
  <div>
    <h2 class="text-gray-800 text-2xl font-semibold">Project Name</h2>
    <p class="mt-2 text-gray-600">Description...</p>
  </div>
  <div class="flex justify-end mt-4">
    <a href="#" class="text-xl font-medium text-indigo-500">View Tasks</a>
  </div>
</div>

<div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
  <div>
    <h2 class="text-gray-800 text-2xl font-semibold">Project Name</h2>
    <p class="mt-2 text-gray-600">Description...</p>
  </div>
  <div class="flex justify-end mt-4">
    <a href="#" class="text-xl font-medium text-indigo-500">View Tasks</a>
  </div>
</div>


    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>
            <a class="btn-back btn-sm" href="{{ route('projects.index') }}">
                {{ __('Back') }}
            </a>
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <table class="min-w-full">
                      <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                          Project Title
                        </th>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $project->title }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                          Description
                        </th>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $project->description }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                            Deadline
                        </th>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $project->deadline }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                            Status
                        </th>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ strtoupper($project->status) }}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
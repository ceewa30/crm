<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ request()->routeIs('projects.index') ? __('Project') : __('Trash') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">

            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <x-alert-success>
                        {{ session('success') }}
                    </x-alert-success>
                    @if(request()->routeIs('projects.index'))
                        <a href="{{ route('projects.create') }}" class="btn-back btn-sm mb-2">+ New Project</a>
                    @endif
                    <div class="overflow-hidden">
                      <table class="min-w-full">
                        <thead class="bg-white border-b">
                          <tr>
                            <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                                Project Title
                            </th>
                            <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                                Description
                            </th>
                            <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                                Deadline
                            </th>
                            <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                                Status
                            </th>
                            <th class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <table>
                                <tr colspan="3">
                                    <th class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                                        Action
                                    </th>
                                </tr>
                                </table>
                            </th>
                          </tr>
                        </thead>
                        @forelse ($projects as $project)
                        <tbody>
                          <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                           
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $project->title }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $project->description }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $project->deadline }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $project->status }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                               <table>
                                <tr>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <a 
                                            
                                                href="{{ route('projects.show', $project) }}"
                                             alt="Show"
                                        ><svg aria-hidden="true" focusable="false" data-prefix="fa" data-icon="eye-solid" class="w-7 h-7 fill-green-700 hover:fill-green-300" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM432 256c0 79.5-64.5 144-144 144s-144-64.5-144-144s64.5-144 144-144s144 64.5 144 144zM288 192c0 35.3-28.7 64-64 64c-11.5 0-22.3-3-31.6-8.4c-.2 2.8-.4 5.5-.4 8.4c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6z"/></svg></a>
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <a 
                                            @if(request()->routeIs('projects.index'))
                                                href="{{ route('projects.edit', $project) }}"
                                            
                                            @endif
                                        ><svg aria-hidden="true" focusable="false" data-prefix="fa" data-icon="bars-solid" class="w-7 h-7 fill-blue-700 hover:fill-blue-300" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        
                                            @if(request()->routeIs('projects.index'))
                                                <form action="{{ route('projects.destroy', $project) }}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fa" data-icon="trash-solid" class="w-7 h-7 fill-red-700 hover:fill-red-300" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                                                    </button>
                                                </form>
                                                
                                            @endif
                                    </td>
                                </tr>
                               </table>
                            </td>
                          </tr>
                        </tbody>
                        @empty
                            @if(request()->routeIs('projects.index'))
                                <div class="p-6 text-gray-900">
                                    <p>You have no clients yet.</p>
                                </div>
                            @else
                                <div class="p-6 text-gray-900">
                                    <p>No items in the Trash.</p>
                                </div>
                            @endif
                    
                        @endforelse
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            {{  $projects->links() }}
        </div>
    </div>
</x-app-layout>
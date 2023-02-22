<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('projects.update', $project) }}">
                    @method('put')
                    @csrf
                    <!-- Project Title -->
                    <div class="mt-4">
                        <x-input-label for="title" :value="__('Project Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $project->title)" required autofocus />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>
            
                    <!-- Description -->
                    <div class="mt-4">
                        <x-input-label for="description" :value="__('Description')" />
                        <x-textarea name="description" field="text" class="block mt-1 w-full" rows="10" placeholder="Project details ..." :value="@old('description', $project->description)"></x-textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <!-- Deadlline -->
                    <div class="mt-4">
                        <x-input-label for="deadlline" :value="__('Deadlline')" />
                        <x-date-input id="deadline" class="block mt-1 w-full" type="date" name="deadline" :value="old('deadline', $project->deadline)" required autofocus />
                        <x-input-error :messages="$errors->get('deadline')" class="mt-2" />
                    </div>

                    <!-- Assigned User -->
                    <div class="mt-4">
                        <x-input-label for="user_id" :value="__('Assigned User')" />   
                        <x-select-input id="user_id" class="block mt-1 w-full" :options="$users" name="user_id" required /> {{-- :selectedOptions="$selectedUsers" --}}   
                        <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
                    </div>

                    <!-- Assigned Client -->
                    <div class="mt-4">
                        <x-input-label for="client_id" :value="__('Assigned Client')" />
                        <x-select-input id="client_id" class="block mt-1 w-full" :options="$clients" name="client_id" :value="@old('client_id', $project->client_id)" required />   
                        <x-input-error :messages="$errors->get('client_id')" class="mt-2" />
                    </div>

                    <!-- Status -->
                    <div class="mt-4">
                        <x-input-label for="status" :value="__('Status')" />
                        <x-select id="status" class="block mt-1 w-full" :options="$status=App\Models\Project::STATUS" :value="@old('status', $project->status)" name="status" required />
                        <x-input-error :messages="$errors->get('status')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="btn-back btn-sm" href="{{ route('projects.index') }}">
                            {{ __('Back') }}
                        </a>
                        <x-primary-button class="ml-4">
                            {{ __('Update Project') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>

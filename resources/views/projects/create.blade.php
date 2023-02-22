<x-guest-layout>
    <form method="POST" action="{{ route('projects.store') }}">
        @csrf

        <!-- Project Title -->
        <div class="mt-4">
            <x-input-label for="project_title" :value="__('Project Title')" />
            <x-text-input id="project_title" class="block mt-1 w-full" type="text" name="project_title" :value="old('project_title')" required autofocus />
            <x-input-error :messages="$errors->get('project_title')" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />
            <x-textarea name="description" field="text" class="block mt-1 w-full" rows="10" placeholder="Project details ..." :value="@old('description')"></x-textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
        <!-- Deadlline -->
        <div class="mt-4">
            <x-input-label for="deadlline" :value="__('Deadlline')" />
            <x-date-input id="deadline" class="block mt-1 w-full" type="date" name="deadline" :value="old('deadline')" required autofocus />
            <x-input-error :messages="$errors->get('deadline')" class="mt-2" />
        </div>

         <!-- Assigned User -->
         <div class="mt-4">
            <x-input-label for="user_id" :value="__('Assigned User')" />
            <x-select-input id="user_id" class="block mt-1 w-full" type="text" :options="$users" name="user_id" required />   
            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
        </div>

         <!-- Assigned Client -->
         <div class="mt-4">
            <x-input-label for="client_id" :value="__('Assigned Client')" />
            <x-select-input id="client_id" class="block mt-1 w-full" type="text" :options="$clients" name="client_id" required />   
            <x-input-error :messages="$errors->get('client_id')" class="mt-2" />
        </div>

        <!-- Status -->
        <div class="mt-4">
            <x-input-label for="status" :value="__('Status')" />
            <x-select-input id="status" class="block mt-1 w-full" type="text" :options="$status=App\Models\Project::STATUS" name="status" required />
            <x-input-error :messages="$errors->get('client_state')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="btn-back btn-sm" href="{{ route('projects.index') }}">
                {{ __('Back') }}
            </a>
            <x-primary-button class="ml-4">
                {{ __('Create Project') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

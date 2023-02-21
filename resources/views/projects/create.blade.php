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
            <select class="block mt-1 w-full" name="user_id" id="user_id" required>
                @foreach($users as $id => $entry)
                    <option
                    value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
        </div>

         <!-- Assigned Client -->
         <div class="mt-4">
            <x-input-label for="client_id" :value="__('Assigned Client')" />
            <select class="block mt-1 w-full" name="client_id" id="client_id" required>
                @foreach($clients as $id => $entry)
                    <option
                    value="{{ $id }}" {{ old('client_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('client_id')" class="mt-2" />
        </div>

        <!-- Status -->
        <div class="mt-4">
            <x-input-label for="status" :value="__('Status')" />
            <select class="block mt-1 w-full" name="status" id="status" required>
                @foreach(App\Models\Project::STATUS as $status)
                    <option
                        value="{{ $status }}" {{ old('status') == $status ? 'selected' : '' }}>{{ ucfirst($status) }}</option>
                @endforeach
            </select>
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

<x-guest-layout>
    <form method="POST" action="{{ route('clients.store') }}">
        @csrf

        <!-- Contact Name -->
        <div class="mt-4">
            <x-input-label for="contact_name" :value="__('Contact Name')" />
            <x-text-input id="contact_name" class="block mt-1 w-full" type="text" name="contact_name" :value="old('contact_name')" required autofocus />
            <x-input-error :messages="$errors->get('contact_name')" class="mt-2" />
        </div>

        <!-- Contact Email -->
        <div class="mt-4">
            <x-input-label for="contact_email" :value="__('Contact Email')" />
            <x-text-input id="contact_email" class="block mt-1 w-full" type="email" name="contact_email" :value="old('contact_email')" required autofocus />
            <x-input-error :messages="$errors->get('contact_email')" class="mt-2" />
        </div>
        <!-- Contact Phone Number -->
        <div class="mt-4">
            <x-input-label for="contact_phone_number" :value="__('Contact Phone Number')" />
            <x-text-input id="contact_phone_number" class="block mt-1 w-full" type="text" name="contact_phone_number" :value="old('contact_phone_number')" required autofocus />
            <x-input-error :messages="$errors->get('contact_phone_number')" class="mt-2" />
        </div>

        <!-- Company Name -->
        <div class="mt-4">
            <x-input-label for="company_name" :value="__('Company Name')" />
            <x-text-input id="company_name" class="block mt-1 w-full" type="text" name="company_name" :value="old('company_name')" required />
            <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
        </div>

         <!-- Company Address -->
         <div class="mt-4">
            <x-input-label for="company_address" :value="__('Company Address')" />
            <x-text-input id="company_address" class="block mt-1 w-full" type="text" name="company_address" :value="old('company_address')" required />
            <x-input-error :messages="$errors->get('company_address')" class="mt-2" />
        </div>

         <!-- Company City -->
         <div class="mt-4">
            <x-input-label for="company_city" :value="__('Company City')" />
            <x-text-input id="company_city" class="block mt-1 w-full" type="text" name="company_city" :value="old('company_city')" required />
            <x-input-error :messages="$errors->get('company_city')" class="mt-2" />
        </div>

        <!-- Company State -->
        <div class="mt-4">
            <x-input-label for="company_state" :value="__('Company State')" />
            <x-text-input id="company_state" class="block mt-1 w-full" type="text" name="company_state" :value="old('company_state')" required />
            <x-input-error :messages="$errors->get('company_state')" class="mt-2" />
        </div>

         <!-- Company Zip Code -->
         <div class="mt-4">
            <x-input-label for="company_zip" :value="__('Company Zip')" />
            <x-text-input id="company_zip" class="block mt-1 w-full" type="text" name="company_zip" :value="old('company_zip')" required />
            <x-input-error :messages="$errors->get('company_zip')" class="mt-2" />
        </div>

         <!-- Company VAT -->
         <div class="mt-4">
            <x-input-label for="company_vat" :value="__('Company VAT')" />
            <x-text-input id="company_vat" class="block mt-1 w-full" type="text" name="company_vat" :value="old('company_vat')" required />
            <x-input-error :messages="$errors->get('company_vat')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="btn-back btn-sm" href="{{ route('clients.index') }}">
                {{ __('Back') }}
            </a>
            <x-primary-button class="ml-4">
                {{ __('Create client') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

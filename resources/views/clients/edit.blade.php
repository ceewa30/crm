<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('clients.update', $client) }}">
                    @method('put')
                    @csrf
                    <!-- Contact Name -->
                    <div class="mt-4">
                        <x-input-label for="contact_name" :value="__('Contact Name')" />
                        <x-text-input id="contact_name" class="block mt-1 w-full" type="text" name="contact_name" :value="old('contact_name', $client->contact_name)" required autofocus />
                        <x-input-error :messages="$errors->get('contact_name')" class="mt-2" />
                    </div>
            
                    <!-- Contact Email -->
                    <div class="mt-4">
                        <x-input-label for="contact_email" :value="__('Contact Email')" />
                        <x-text-input id="contact_email" class="block mt-1 w-full" type="email" name="contact_email" :value="old('contact_email', $client->contact_email)" required autofocus />
                        <x-input-error :messages="$errors->get('contact_email')" class="mt-2" />
                    </div>
                    <!-- Contact Phone Number -->
                    <div class="mt-4">
                        <x-input-label for="contact_phone_number" :value="__('Contact Phone Number')" />
                        <x-text-input id="contact_phone_number" class="block mt-1 w-full" type="text" name="contact_phone_number" :value="old('contact_phone_number', $client->contact_phone_number)" required autofocus />
                        <x-input-error :messages="$errors->get('contact_phone_number')" class="mt-2" />
                    </div>

                    <!-- Company Name -->
                    <div class="mt-4">
                        <x-input-label for="company_name" :value="__('Company Name')" />
                        <x-text-input id="company_name" class="block mt-1 w-full" type="text" name="company_name" :value="old('company_name', $client->company_name)" required />
                        <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
                    </div>
            
                     <!-- Client Address -->
                     <div class="mt-4">
                        <x-input-label for="company_address" :value="__('Client Address')" />
                        <x-text-input id="company_address" class="block mt-1 w-full" type="text" name="company_address" :value="old('company_address', $client->company_address)" required />
                        <x-input-error :messages="$errors->get('company_address')" class="mt-2" />
                    </div>
            
                     <!-- Client City -->
                     <div class="mt-4">
                        <x-input-label for="company_city" :value="__('Client City')" />
                        <x-text-input id="company_city" class="block mt-1 w-full" type="text" name="company_city" :value="old('company_city', $client->company_city)" required />
                        <x-input-error :messages="$errors->get('company_city')" class="mt-2" />
                    </div>
            
                    <!-- Client State -->
                    <div class="mt-4">
                        <x-input-label for="company_state" :value="__('Client State')" />
                        <x-text-input id="company_state" class="block mt-1 w-full" type="text" name="company_state" :value="old('company_state', $client->company_state)" required />
                        <x-input-error :messages="$errors->get('company_state')" class="mt-2" />
                    </div>
            
                     <!-- Client Zip Code -->
                     <div class="mt-4">
                        <x-input-label for="company_zip" :value="__('Client Zip')" />
                        <x-text-input id="company_zip" class="block mt-1 w-full" type="text" name="company_zip" :value="old('company_zip', $client->company_zip)" required />
                        <x-input-error :messages="$errors->get('company_zip')" class="mt-2" />
                    </div>
            
                     <!-- Client VAT -->
                     <div class="mt-4">
                        <x-input-label for="company_vat" :value="__('Client VAT')" />
                        <x-text-input id="company_vat" class="block mt-1 w-full" type="text" name="company_vat" :value="old('company_vat', $client->company_vat)" required />
                        <x-input-error :messages="$errors->get('company_vat')" class="mt-2" />
                    </div>
            
                    <div class="flex items-center justify-end mt-4">
                        <a class="btn-back btn-sm" href="{{ route('clients.index') }}">
                            {{ __('Back') }}
                        </a>
                        <x-primary-button class="ml-4">
                            {{ __('Update Client') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
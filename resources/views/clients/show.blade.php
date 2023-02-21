<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>
            <a class="btn-back btn-sm" href="{{ route('clients.index') }}">
                {{ __('Back') }}
            </a>
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <table class="min-w-full">
                      <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                          Contact Name
                        </th>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $client->contact_name }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                          Contact Email
                        </th>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $client->contact_email }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                            Contact Phone Number
                        </th>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $client->contact_phone_number }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                            Company Name
                        </th>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $client->company_name }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                            Company Address
                        </th>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $client->company_address }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                            Company City
                        </th>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $client->company_city }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                            Company State
                        </th>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $client->company_state }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                            Company Zipcode
                        </th>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $client->company_zip }}
                        </td>
                    </tr>
                    <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                        <th scope="col" class="text-sm font-small text-gray-900 px-6 py-4 text-left">
                          VAT
                        </th>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $client->company_vat }}
                        </td>
                      </tr>
                  </table>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
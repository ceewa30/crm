@if(session('success'))
    <div class="mb-4 py-4 border bg-green-200 text-green-700 rounded-md">
        {{ $slot }}
    </div>
@endif
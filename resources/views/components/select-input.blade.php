@props([
    'disabled' => false,
    'options' => []
    ])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm']) !!}>
    @foreach($options as $value => $label)
        <option value="{{ $value }}" isSelected($value)>{{ $label }}</option>
    @endforeach
</select>

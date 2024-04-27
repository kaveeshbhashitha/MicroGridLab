@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-dark-700']) }}>
    {{ $value ?? $slot }}
</label>

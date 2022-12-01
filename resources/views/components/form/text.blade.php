@if (empty($name))
    @php
        $name = 'text';
    @endphp
@endif

@if (empty($placeholder))
    @php
        $placeholder = preg_split('/[-\s_]/', $name);
        $placeholder = implode(' ', $placeholder);
        $placeholder = ucwords($placeholder);
    @endphp
@endif

@if (empty($class))
    @php
        $class = 'form-input';
    @endphp
@endif

@if (empty($value))
    @if (!empty(old($name)))
        @php
            $value = old($name);
        @endphp
    @else
        @php
            $value = '';
        @endphp
    @endif
@endif

@if (!empty($disabled) && $disabled === true)
    @php
        $disabled = true;
    @endphp
@else
    @php
        $disabled = false;
    @endphp
@endif

<input type="text" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}"
    class="{{ $class }}" @disabled($disabled)>

@if (empty($name))
    @php
        $name = 'email';
    @endphp
@endif

@if (empty($placeholder))
    @php
        $placeholder = ucwords($name);
    @endphp
@endif

@if (empty($class))
    @php
        $class = 'form-input';
    @endphp
@endif

<input type="email" name={{ $name }} placeholder={{ $placeholder }}
    @unless(empty(old($name)))
value={{ old($name) }}
@endunless class={{ $class }}>

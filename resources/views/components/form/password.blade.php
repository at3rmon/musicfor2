@if (empty($name))
    @php
        $name = 'password';
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

<input type="password" name={{ $name }} placeholder={{ $placeholder }} class={{ $class }}>

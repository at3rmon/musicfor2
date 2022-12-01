@if (empty($value))
    @php
        $value = 'Submit';
    @endphp
@endif
<input type="submit" class="form-submit" value="{{ $value }}">

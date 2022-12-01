@if (empty($value))
    @php
        $value = __('forms.general.submit');
    @endphp
@endif
<input type="submit" class="form-submit" value="{{ $value }}">

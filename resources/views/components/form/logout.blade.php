<form action={{ route('auth.destroy') }} method="post">
    @csrf
    <button type="submit" class="text-error">{{ __('forms.logout.submit') }}</button>
</form>

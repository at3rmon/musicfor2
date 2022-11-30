<form action={{ route('auth.destroy') }} method="post">
    @csrf
    <button type="submit" class="text-error">Logout</button>
</form>

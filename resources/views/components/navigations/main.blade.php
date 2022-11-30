<div class="navbar bg-neutral text-neutral-content">
    <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl" href="{{ route('home') }}">{{ config('app.name') }}</a>
    </div>
    <div class="flex-none">
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle w-16 h-16 avatar placeholder">
                <div class="bg-neutral-focus text-neutral-content rounded-full w-full h-full">
                    <span class="text-2xl">CB</span>
                </div>
            </label>
            <ul tabindex="0"
                class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-neutral text-neutral-content rounded-box w-auto">
                <li><a href="{{ route('home') }}" class="whitespace-nowrap">{{ auth()->user()->first_name }}'s
                        Profile</a></li>
                <li>
                    @include('components.form.logout')
                </li>
            </ul>
        </div>
    </div>
</div>

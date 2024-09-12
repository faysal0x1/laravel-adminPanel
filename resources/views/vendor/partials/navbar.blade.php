
<link href="{{ mix('laratrust.css', 'vendor/laratrust') }}" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-center h-16">
            <div class="flex items-center">
                <div class="">
                    <div class="flex items-baseline">
                        <a href="{{ url()->previous() }}" class="nav-button">← Go Back</a>

                        <a href="{{ route('laratrust.roles-assignment.index') }}"
                            class="ml-4 {{ request()->is('*roles-assignment*') ? 'nav-button-active' : 'nav-button' }}">
                            Roles & Permissions Assignment
                        </a>
                        <a href="{{ route('laratrust.roles.index') }}"
                            class="ml-4 {{ request()->is('*roles') ? 'nav-button-active' : 'nav-button' }}">
                            Roles
                        </a>
                        <a href="{{ route('laratrust.permissions.index') }}"
                            class="ml-4 {{ request()->is('*permissions*') ? 'nav-button-active' : 'nav-button' }}">
                            Permissions
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>

</nav>

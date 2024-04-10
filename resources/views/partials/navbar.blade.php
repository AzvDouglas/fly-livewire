    <!-- Navbar -->
    <nav class="py-4 bg-blue-600">
        <div class="container flex items-center justify-between px-4 mx-auto">
            <a href="#" class="inline-flex text-2xl font-bold text-white">
				<x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif
        </div>
    
    </nav>

<nav class="nav flex justify-between items-center p-4 shadow-sm px-10">
    <div>
        <a href="/" class="">
            <img src="{{ Vite::asset('resources/images/logo.jpg') }}" alt="site logo" class="w-[3rem]" />
        </a>
    </div>
    <div class="space-x-6 font-bold">
        <a href="/">Jobs</a>
        <a href="/salaries">Saleries</a>
        <a href="/companies">Companies</a>
        <a href="/carrers">Carrers</a>
    </div>
    @auth
        <div class="flex space-x-6 font-bold">
            <a href="/jobs/show">My Jobs</a>
            <a href="/jobs/create">Post a Job</a>
            <form method="POST" action="/logout">
                @csrf
                @method("DELETE")
                 
                <button>Log Out</button> 
            </form>
        </div>     
    @endauth

    @guest
        <div class="space-x-6 font-bold">
            <a href="/register">Sign Up</a>
            <a href="/login">Log In</a>
        </div>
    @endguest
    
</nav>

<div class="blog-masthead">
    <div class="d-flex flex-column container flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom">
    @if(auth()->check())
        <a class="my-0 mr-md-auto" href="/teams"><h5>NBA</h5></a>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-white" href="">{{ auth()->user()->name }}</a>  
            <a class="p-2 text-white" href="/logout">Logout</a>
            @else
            <a class="p-2 text-white" href="/login">Login</a>
            <a class="p-2 text-white" href="/register">Register</a>
            @endif
        </nav>
    </div>
</div>
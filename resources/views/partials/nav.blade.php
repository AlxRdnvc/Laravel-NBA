
<div class="blog-masthead">
    <div class="d-flex flex-column container flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom">
        @if(auth()->check())
        <a class="text-white" href="/teams"><h6 style="padding-right: 20px; color: #fff;">TEAMS</h6></a>
        <a class="text-white mr-md-auto" href="/news"><h6 style="padding-right: 20px; color: #fff;">NEWS</h6></a>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="text-white" href="" style="padding-right: 20px;">{{ auth()->user()->name }}</a>  
            <a class="text-white" href="/logout">Logout</a>
            @else
            <a class="text-white" href="/login">Login</a>
            <a class="text-white" href="/register">Register</a>
            @endif
        </nav>
    </div>
</div>
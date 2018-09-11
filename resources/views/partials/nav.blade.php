
<div class="blog-masthead">
    <ul class="nav nav nav-pills justify-content-center">
        @if(auth()->check())
        <li class="nav-item">
            <a class="nav-link" href="/teams"><h6>TEAMS</h6></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/news"><h6>NEWS</h6></a>
            </li>
        <li class="nav-item">
            <a class="nav-link" href="/news/create"><h6>ADD NEWS</h6></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=""><h6>{{ auth()->user()->name }}</h6></a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="/logout"><h6>LOGOUT</h6></a>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="/login"><h6>LOGIN</h6></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/register"><h6>REGISTER</h6></a>
        </li>
        @endif
    </ul>
</div>
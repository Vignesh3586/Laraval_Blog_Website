<header class="header-container w-100  bg-primary d-flex justify-content-between p-3 px-md-5" style="height: 10vh;">
        <h1>{{$title ?? 'Blog'}}</h1>
        <nav>
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item  bg-transparent border-0">Home</li>
                <li class="list-group-item  bg-transparent border-0">About</li>
                <li class="list-group-item  bg-transparent border-0"><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>
     </header>
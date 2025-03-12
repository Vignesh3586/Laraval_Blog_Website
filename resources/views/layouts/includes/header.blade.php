<header class="header">
        <h1 class="text-white">{{$title ?? 'BlogSpot'}}</h1>
        <nav class="navbar">
            <ul>
                <li><a href="{{route('posts.index')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>
     </header>
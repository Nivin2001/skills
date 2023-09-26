
    <nav id="nav">
        <ul class="main-menu nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                <ul class="dropdown-menu">

                    @foreach ($cats as $cat )

                    <li><a href="{{route('cat.show',$cat->id)}}">{{$cat->name}}</a></li>

                    @endforeach

                </ul>
            </li>
            {{-- <li><a href="{{route('contact.create')}}">Contact</a></li> --}}
            @guest
            <li><a href="{{url('login')}}">Sign In</a></li>
            <li><a href="{{ url('register') }}">Sign Up</a></li>
            @endguest

            @auth
            <li>
                <form action="{{url('logout')}}" method="post">
                    @csrf
                    <button class="btn logout-btn">Logout</button>
            </li>
            @endauth

                    <style>
                        /* تخصيص الخصائص */
                        .logout-btn {
            background-color: white; /* Set the background color to white */
            color:black; /* Set the text color to the desired color */
        font-weight: bold;
            padding: 10px 20px; /* Set padding as needed */
            border-radius: 4px; /* Round the edges of the button */
            font-size: 16px; /* Set the font size for the text inside the button */
            }



              </style>
        </ul>
    </nav>

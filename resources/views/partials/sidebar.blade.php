<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="\" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">AskM</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            @auth
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('dashmin/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth::user()->name}}</h6>
            </div> 
            @endauth
            @guest
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('anon.webp')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Anonymous Hacker</h6>
            </div>
            @endguest          
        </div>
        
        <div class="navbar-nav w-100">
            <a href="/" class="nav-item nav-link"><i class="fa fa-home me-2"></i>General</a>
            {{--<a href="/pertanyaan" class="nav-item nav-link"><i class="fa fa-home me-2"></i>Semua pertanyaan</a>--}}
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Kategori</a>
                <div class="dropdown-menu bg-transparent border-0">
                    @foreach ($kategori as $unitKategori)
                        <a href="#" class="nav-link dropdown-item my-2">{{$unitKategori->nama_kategori}}</a>
                    @endforeach 
                    
                </div>   
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
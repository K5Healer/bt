<section id="menu">
    <div class="container ">
        <nav class="navbar navbar-expand-md menu navbar-light ">
         <base href="{{ asset('trang-chu1') }}">
            <a class="navbar-brand" href="{{route('trang-chu1') }}">
                <img src="images/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse"
                data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('trang-chu1') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#info">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tiendo">Chính sách </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#matbang">Mặt bằng </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lienket">Liên kết vùng </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tin-tuc') }}">Tin tức </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Liên hệ </a>
                    </li>
                    <li class="item ">
                        <a class="link" href="#"><img src="images/phone.gif" alt="phone"><span id="phone">0836.515.515</span> </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <nav class="navbar navbar-expand-md menu navbar-light " id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('trang-chu1') }}">
                <img src="images/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse"
                data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('trang-chu1') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#info">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tiendo">Chính sách </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#matbang">Mặt bằng </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lienket">Liên kết vùng </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tin-tuc') }}">Tin tức </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Liên hệ </a>
                    </li>
                    <li class="item ">
                        <a class="link" href="#"><img src="images/phone.gif" alt="phone"><span id="phone">0812 340
                                999</span> </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
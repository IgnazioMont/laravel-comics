{{-- qui inseriamo l'header html condiviso fra le pagine --}}

<header>
    <div class="row1-header">
        <div class="dc-sites">
            <ul>
                <li>dc power<sup>tm</sup>  visa&reg;</li>
                <li><a href="#">additional dc sites <i class="fas fa-sort-down"></i></a></li>
            </ul>
        </div>
    </div>
    
    {{-- Navbar --}}
    <div class="row2-header">
        <nav>
            <div class="logo-nav">
                <img src="{{ asset("img/dc-logo.png")}}" alt="Logo">
            </div>

            <div class="menu-container">
                <ul>
                    <li><a href="#">Characters</a></li>
                    <li><a class="active" href="#">Comics</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Collectibles</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Fans</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Shop <i class="fas fa-sort-down"></i></li></a> 
                </ul>
            </div>

            <div class="search">Search <i class="fas fa-search"></i></div>
        </nav>
    </div>

    {{-- Jumbotron --}}
    <div class="jumbotron"></div>
</header>
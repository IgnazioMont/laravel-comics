{{-- Estendiamo il layout base --}}
@extends("layouts.app")


{{-- "head title" per la homepage--}}
@section("tag_title")
    Comics homepage
@endsection


{{-- style per la homepage (class="home" del main in scss) --}}
@section("main_classes")
    home
@endsection


{{-- Contenuto del MAIN --}}
@section("main_section")
    {{-- Comics section --}}
    <section class="bg-black">
        <div class="container">

            <div class="series">
                <a href="#"><h1>Current Series</h1></a>
            </div>
            

            <div class="boxes">
                @foreach ($comics as $comic)
                    <div class="single-box">
                        <div class="img-box">
                            <img src="{{ $comic["thumb"]}}" alt="{{ $comic["title"]}}">
                        </div>
                        <h5>{{ $comic["series"]}}</h5>
                    </div>
                @endforeach
            </div>
            
            <button>Load more</button>
        </div>
    </section>

    {{-- Contents section --}}
    <section class="contents">
        <div class="container">
            <ul>
                <li>
                    <a href="#">
                        <div class="icon-img">
                            <img src="{{ asset("img/buy-comics-digital-comics.png")}}" alt="Digital comics">
                        </div>
                        <h5>Digital Comics</h5>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="icon-img">
                            <img src="{{ asset("img/buy-comics-merchandise.png")}}" alt="Merchandise">
                        </div>
                        <h5>Digital Merchandise</h5>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="icon-img">
                            <img src="{{ asset("img/buy-comics-subscriptions.png")}}" alt="Subscription">
                        </div>
                        <h5>Subscription</h5>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="icon-img">
                            <img src="{{ asset("img/buy-comics-shop-locator.png")}}" alt="Shop locator">
                        </div>
                        <h5>Comic shop locator</h5>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="icon-img">
                            <img src="{{ asset("img/buy-dc-power-visa.svg")}}" alt="Visa">
                        </div>
                        <h5>DC power visa</h5>
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection
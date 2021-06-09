@extends("layouts.app")


{{-- "head title" per la singola pagina comic --}}
@section("tag_title")
    Comic detail
@endsection

{{-- Importiamo lo stile dalla classe "comic-detail" del MAIN --}}
@section("main_classes")
    comic-detail
@endsection

{{-- Contenuto del MAIN della singola pagina comic --}}
@section("main_section")
    <div class="comic-detail">

        {{-- Cover comic --}}
        <div class="blue-raw">
            <div class="wrapper cover">
                {{-- Chiamiamo le chiavi dal nuovo array "single_comic" --}}
                <div class="img-cover">
                    <img src="{{ $single_comic["thumb"] }}" alt="Cover">
                    <div class="gallery">View gallery</div>
                </div>
            </div>
        </div>

        {{-- Description --}}
        <div class="wrapper">
            <div class="description">
                <div class="col-left">
                    <h1>{{ $single_comic["title"] }}</h1>

                    <div class="details">
                        
                        <div class="price">
                            <ul>
                                <li>U.S. Price: <span>$19.99</span></li>
                                <li>AVAILABILITY</li>
                            </ul>
                        </div>

                        <div class="availability">
                            Check availability <i class="fas fa-sort-down"></i>
                        </div>
                    </div>
                </div>

                <div class="col-right">
                    <div class="adv">
                        {{-- <div class="adv-title">Advertisement</div>
                        <img src="{{ asset("img/show.jpg")}}" alt="Show"> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
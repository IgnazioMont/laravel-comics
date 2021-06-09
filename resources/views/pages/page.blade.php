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
                {{-- Left column - text --}}
                <div class="col-left">
                    <h1>{{ $single_comic["title"] }}</h1>

                    {{-- Green row --}}
                    <div class="details">
                        <div class="price">
                            <ul>
                                <li>U.S. Price: <span>{{ $single_comic["price"] }}</span></li>
                                <li>AVAILABLE</li>
                            </ul>
                        </div>

                        <div class="availability">
                            Check availability <i class="fas fa-sort-down"></i>
                        </div>
                    </div>

                    <div class="description-text">
                        <p>{{ $single_comic["description"] }}</p>
                    </div>
                </div>

                 {{-- Right column - adv --}}
                <div class="col-right">
                    <div class="adv">
                        <h4>Advertisement</h4>
                        <img src="{{ asset("img/show.jpg")}}" alt="Show">
                    </div>
                </div>
            </div>
        </div>

        {{-- Specs --}}
        <div class="talent-specs">
            <div class="wrapper details">

                <div class="col-left-talent">
                    <h3>Talent</h3>

                    <ul>
                        <li>
                            <div class="head-description">Art by:</div>
                            <p class="content">
                                @foreach ($single_comic['artists'] as $artist)
                                    <a href="#">{{ $artist }}</a>,
                                @endforeach
                            </p>
                        </li>

                        <li>
                            <div class="head-description">Written by:</div>
                            <p class="content">
                                @foreach ($single_comic['writers'] as $writers)
                                    <a href="#">{{ $writers }}</a>,
                                @endforeach
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="col-right-specs">
                    <h3>Specs</h3>

                    <ul>
                        <li>
                            <div class="head-description">Series</div>
                            <p class="content">
                                {{ $single_comic["series"] }}
                            </p>
                        </li>

                        <li>
                            <div class="head-description">U.S. Price:</div>
                            <p class="content">
                                {{ $single_comic["price"] }}
                            </p>
                        </li>

                        <li>
                            <div class="head-description">On Sale Date:</div>
                            <p class="content">
                                {{ $single_comic["sale_date"] }}
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
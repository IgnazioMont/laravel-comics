{{-- Estendiamo il layout base --}}
@extends("layouts.app")


{{-- head title per la homepage--}}
@section("tag_title")
    Comics homepage
@endsection


{{-- Contenuto del MAIN --}}
@section("main_section")
    <div class="bg-black">
        <div class="container">
            <div class="boxes">
                @foreach ($comics as $comic)
                    {{-- <div class="single-box">
                        <img src="" alt="Cover"> thumb
                        <h5>series</h5>
                    </div> --}}
                @endforeach
            </div>
        </div>
    </div>
@endsection
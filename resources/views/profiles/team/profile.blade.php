@extends('layouts.app')
@section('head')

@endsection
@section('content')
<div class="container-fluid bg-3 text-center">
    <div class="row">
        <div id="Bild1" class="col-sm-4">
            <h2>Jogge Dee Sauerkraut</h2>
            <img src="{{asset('storage/avatar.png')}}" alt="Image not found" onerror="this.onerror=null;this.src='{{asset('./storage/img/avatar.png')}}';" />
            <form>
                <textarea>Some text...</textarea>
            </form>
        </div>

        <div id="Bild2" class="col-sm-4">
            <h2>Miky Kröll</h2>
            <img src="{{asset('storage/avatar.png')}}" alt="Image not found" onerror="this.onerror=null;this.src='{{asset('./storage/img/avatar.png')}}';" />
            <form>
                <textarea>Some text...</textarea>
            </form>
        </div>

        <div id="Bild3" class="col-sm-4">
            <h2>Boran Cihan Polat</h2>
            <img src="{{asset('storage/avatar.png')}}" alt="Image not found" onerror="this.onerror=null;this.src='{{asset('./storage/img/avatar.png')}}';" />
            <form>
                <textarea>Some text...</textarea>
            </form>
        </div>
    </div>
</div>
@endsection
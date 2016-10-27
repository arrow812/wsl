
@extends('template')
@section('content')

    <h2>{{$type->name}}</h2>
    <p>{{$type->default_content}}</p>

     @foreach($type->posts as $post)

            <div class="vid_wrapper">
            <div align="left" class="embed-responsive-16by9">
                <!-- Copy & Pasted from YouTube -->
                <h3>{{$post->event}} {{$post->year}}</h3>
                <h3>Round {{$post->round}} Heat {{$post->heat}}</h3>
                <h3>{{$post->athelete_1}}</h3>

                <h3>Manuel loses Priority to Moore</h3>

                <p class="left">this text is default text from the rule book---<br>

                    152.07 The Priority Surfer will lose priority if in the opinion of the Head Judge or Priority Judge they:<br>
                    (a) Paddle in front of the non-Priority Surfer to deliberately impede them from catching a wave.<br>
                    (b) Position themselves in the take off zone to prevent another Surfer from catching a wave.<br>
                    (c) Use their priority by either paddling for or taking off on a wave to block their opponent when the Surfer with priority appears to have had no intention to score. In this situation priority can be awarded regardless of which Surfer reaches the take-off zone first after the Ride.</p>
                <video width="320" height="240" controls preload="auto">
                    <source src="video/BellsBeachHeat2.mp4" type="video/mp4" >
                </video>
            </div>
        </div>

     @endforeach


@endsection

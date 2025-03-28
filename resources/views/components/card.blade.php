@props(['color'=>'green', 'bgColor'=>'brown'])

<div {{$attributes
->merge(['lang'=>'en'])
->class("card card-text-$color card-bgColor-$bgColor")}} >
    <div {{ $title->attributes->class("card-header")}} >{{$title}}</div>
    @if ($slot->isEmpty())
       <p>please provide some content</p>
    @else
       {{$slot}}  
    @endif
    <div class="card-footer">{{$footer}}</div> 
</div>
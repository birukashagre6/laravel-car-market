@props(['title'=>'' ,'footerlinks'=>''])

<x-base-layout :$title>
   <x-layouts.header />
  {{$slot}}
    <footer>
        <a href="#">link1</a>
        <a href="#">link2</a>
        {{$footerlinks}}
    </footer>
</x-base-layout>   

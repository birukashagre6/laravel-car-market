@props(['title'=>'' ,'footerlinks'=>''])

<x-base-layout :$title>
   <x-layouts.header />
  {{$slot}}
   
</x-base-layout>   

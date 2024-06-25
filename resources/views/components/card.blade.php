
{{-- this way we can be able to add class props from where we are using this wrapper --}}
<div {{$attributes->merge(['class'=>'bg-gray-50 border border-gray-200 p-10 rounded'])}}>
  {{$slot}}
</div>
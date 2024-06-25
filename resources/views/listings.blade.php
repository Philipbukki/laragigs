<h1>{{$name}}</h1>

@foreach ($listings as $listing) 
    <p>{{$listing['id']}}</p> 
    <p>{{$listing['title']}}</p>  
    <p>{{$listing['description']}}</p>
@endforeach

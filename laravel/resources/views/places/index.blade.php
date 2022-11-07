@extends('layouts.app')
 
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">{{ __('places') }}</div>
               <div class="card-body">
                   <table class="table">
                       <thead>
                           <tr>
                               <td scope="col">ID</td>
                               <td scope="col">name</td>
                               <td scope="col">description</td>
                               <td scope="col">file_id</td>
                               <td scope="col">latitude</td>
                               <td scope="col">longitude</td>
                               <td scope="col">category_id</td>
                               <td scope="col">visibility_id</td>
                               <td scope="col">author_id</td>
                               <td scope="col">created_at</td>
                               <td scope="col">updated_at</td>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($places as $place)
                           <tr>
                               
                               <td><a href="{{ route('places.show',$place) }}">{{ $place->id }}</a></td>
                               <td>{{ $place->id }}</td>
                               <td>{{ $place->name }}</td>
                               <td>{{ $place->description }}</td>
                               <td>{{ $place->file_id }}</td>
                               <td>{{ $place->latitude }}</td>
                               <td>{{ $place->category_id }}</td>
                               <td>{{ $place->visibility_id }}</td>
                               <td>{{ $place->author_id }}</td>
                               <td>{{ $place->created_at }}</td>
                               <td>{{ $place->updated_at }}</td>

                               


                           </tr>
                           @endforeach
                       </tbody>
                   </table>
                   <a class="btn btn-primary" href="{{ route('places.create') }}" role="button">Add new place</a>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection


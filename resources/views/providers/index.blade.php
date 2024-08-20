@extends('layout/template')

@section('content')
 <h1>GalEdu Schoolarship Provider </h1>
 <a href="{{url('/providers/create')}}" class="btn btn-success">Create Book</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Name</th>
         <th>Email</th>
         <th>Phone</th>
         <th>Address</th>
         <th>Website</th>
        <!-- <th>Active</th>
         <th>Thumbs</th>-->
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($providers as $provider)
         <tr>
             <td>{{ $provider->id_provider }}</td>
             <td>{{ $provider->name }}</td>
             <td>{{ $provider->email }}</td>
             <td>{{ $provider->phone }}</td>
             <td>{{ $provider->address }}</td>
             <td>{{ $provider->website }}</td>
             <!--<td>
			 <input tabindex="1" type="checkbox" id="{{$provider}}" value="{{$provider->is_active}}">
			 </td>
             <td><img src="{{asset('img/'.$provider->image.'.jpg')}}" height="35" width="30"></td>
             <td><a href="{{url('providers',$provider->id)}}" class="btn btn-primary">Read</a></td>-->
             <td><a href="{{ route('providers.edit', $provider->id_provider) }}" class="btn btn-warning">Update</a></td>
             <td><a href="{{url('/providers/edit')}}" class="btn btn-danger">Delete</a></td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection
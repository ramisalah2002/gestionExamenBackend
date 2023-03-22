<h1>users list</h1>
@foreach($users as $user)
<p>{{$user->id}}</p>
<p>{{$user->nom}}</p>
<p>{{$user->prenom}}</p>
@endforeach

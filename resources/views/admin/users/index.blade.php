@extends ('layouts.dashlayout')

@section('content')

@foreach ($user as $users )

{{$users->user->title}}
    
@endforeach
    
@endsection
//

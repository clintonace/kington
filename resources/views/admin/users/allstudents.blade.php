
@extends ('layouts.dashlayout')

@section('content')


@foreach ($student as $students)
   {{$students->name}} 
@endforeach





                                 <div class="ec-vendor-card-body">
                                    <div class="ec-vendor-card-table">
                                        <table class="table ec-table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Reg date</th>
                                                    
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($student as $students)
                                                <tr>
                                                    <th scope="row"><span>{{$students->id}}</span></th>
                                                    
                                                    <td><span>{{$students->name}}</span></td>
                                                    <td><span>{{$students->email}}</span></td>
                                                    <td><span>{{$students->username}}</span></td>
                                                    <td><span>{{auth()->user()->created_at->format('d')}}</span></td>
                                                    <td>
                                                <div class="btn-group">
                                                    <a href=""> <button class="btn btn-primary">Edit</button></a>

                                                    <a href=""> <button class="btn btn-danger">Delete</button></a>
                                                </div>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>









@endsection

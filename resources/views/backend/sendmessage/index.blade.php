@extends('backend.layouts.app')

@section('content')
<div class="card">
    <h6 class="card-header">Message</h6>
    <div class="card-datatable table-responsive">
        <table class="datatables-demo table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($send_messages as $messages)
                <tr class="odd gradeX">
                    <td>{{ $messages->name }}</td>
                    <td>{{ $messages->email }}</td>
                    <td>{{ $messages->message }}</td>
                    {{-- <td><a href="{{ route('hosting_package.inventory', $hosting->id) }}"><i class="fas fa-server"></i></a></td> --}}
                    <td>
                        <form action="{{ route('sendMessage.destroy', $messages->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-round btn-danger" style="border: none; color: white">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
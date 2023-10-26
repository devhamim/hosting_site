@extends('backend.layouts.app')

@section('content')
<div class="card">
    <h6 class="card-header">Invantory</h6>
    <div class="card-datatable table-responsive">
        <table class="datatables-demo table table-striped table-bordered">
            <thead>
                <tr>
                    <th>package_id</th>
                    <th>month</th>
                    <th>year</th>
                    <th>price</th>
                    <th>link</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inventory_list as $inventory)
                <tr class="odd gradeX">
                    <td>{{ $inventory->package_id }}</td>
                    <td>{{ $inventory->month }}</td>
                    <td>{{ $inventory->year }}</td>
                    <td class="center">{{ $inventory->price }}</td>
                    <td class="center">{{ $inventory->link }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
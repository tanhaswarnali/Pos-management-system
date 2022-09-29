@extends('backend.mastaring.master')
  @section('swarnali')
     
  <table class="table">
            <tr>
                <th>#Sl No.</th>
                <th>Branch Name</th>
                <th>Branch Manager</th>
                <th>Branch Phone</th>
                <th>Branch Email</th>
                <th>Branch Status</th>
                <th colspan="2">Action</th>
            </tr>

            <?php $sl=1; ?>
            @foreach($branch as $branch)
            <tr><td>{{ $sl }}</td>
            <td>{{ $branch->br_name }}</td>
            <td>{{ $branch->br_manager }}</td>
            <td>{{ $branch->br_phone }}</td>
            <td>{{ $branch->br_email }}</td>
            <td>
                @if($branch->status==1)
                    <a href="{{ Route('status',$branch->id) }}" class="btn btn-success btn-sm">Active</a>
                @else
                    <a href="{{ Route('status',$branch->id) }}" class="btn btn-warning btn-sm">Inactive</a>
                @endif 
            </td>
            <td>
                <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </td>
            <?php $sl++; ?></tr>
            @endforeach




</table>




  @endsection
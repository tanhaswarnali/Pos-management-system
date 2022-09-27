@extends('backend.mastaring.master')
  @section('swarnali')
  <form action="{{ Route('branchstore') }}" method="POST">
        @csrf    
        <div class="col-md-6">
        <div class="form-group">
        <label >Branch Name:</label>
                <input  class="form-control" type="text" name="br_name" placeholder="Enter Branch Name">
                
            </div>
            <div class="form-group">
            <label >Branch Manager Name:</label>
                <input class="form-control" type="text" name="br_manager" placeholder="Enter Branch Manager Name">
                
            </div>
            
            <div class="form-group">
            <label >Phone:</label>
                <input  class="form-control" type="text" name="phone" placeholder="Enter Phone">
                
            </div>
            <div class="form-group">
            <label >Email:</label>
                <input  class="form-control" type="text" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
            <label >Status:</label>
                <select name="status" class="form-control">
                    <option value="">-----Select Status-----</option>
                    <option value="1">Active</option>
                    <option value="2">Inavctive</option>
                </select>
            </div>
           
            <button class="form-control btn btn-success">Save</button>
            </div>
        </form> 
  @endsection
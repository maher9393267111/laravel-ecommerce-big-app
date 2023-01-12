

@extends('vendor.vendor_dashboard')
@section('vendor')

@php
	$id = Auth::user()->id;
	$verdorId = App\Models\User::find($id);
	$status = $verdorId->status; 
@endphp
 
<div class="page-content">
sasasas


</div>

@endsection
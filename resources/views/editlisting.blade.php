@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header font-weight-bold font-size=1.4rem">Edit Listing<a href="/home" class="btn btn-outline-success btn-xs float-right">Back</a></div>

            <div class="card-body">
                {!! Form::open(['action' => ['ListingController@update', $listing->id], 'method' => 'POST']) !!}
                    {{ Form::bsText('name',$listing->name, ['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('website',$listing->website, ['placeholder' => 'Company Website']) }}
                    {{ Form::bsText('email',$listing->email, ['placeholder' => 'Contact Email']) }}
                    {{ Form::bsText('phone',$listing->phone, ['placeholder' => 'Contact Phone']) }}
                    {{ Form::bsText('address',$listing->address, ['placeholder' => 'Company Address']) }}
                    {{ Form::bsTextArea('bio',$listing->bio, ['placeholder' => 'About Business']) }}
                    {{ Form::hidden('_method', 'PUT') }}
                    {{ Form::bsSubmit('submit')}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
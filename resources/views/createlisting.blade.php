@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <p>*All fields are Required</p>
        <p>*Unavalaible fields should be written <strong color="danger">"Not Avialable"</strong></p>

        <div class="card">
            <div class="card-header">Create Listing<a href="/home" class="btn btn-outline-success btn-xs float-right">Back</a></div>

            <div class="card-body">
                {!! Form::open(['action' => 'ListingController@store', 'method' => 'POST']) !!}
                    {{ Form::bsText('name','', ['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('website','', ['placeholder' => 'Company Website']) }}
                    {{ Form::bsText('email','', ['placeholder' => 'Contact Email']) }}
                    {{ Form::bsText('phone','', ['placeholder' => 'Contact Phone']) }}
                    {{ Form::bsText('address','', ['placeholder' => 'Company Address']) }}
                    {{ Form::bsTextArea('bio','', ['placeholder' => 'Say Something About Business']) }}
                    {{ Form::bsSubmit('submit')}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

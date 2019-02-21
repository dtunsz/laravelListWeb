@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard <span class="float-right"><a href="/listings/create" class="btn btn-outline-success btn-xs">Add Listing</a></span></div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <h3>Your Business Listings</h3>
                @if(count($listings))
                    <table class="table table-stripped">
                        <tr>
                            <th>Business</th>
                            <td></td>
                            <td></td>
                        </tr>
                        @foreach ($listings as $listing)
                            <tr>
                            <td><a href="/listings/{{$listing->id}}" title="Preview Your listing">{{$listing->name}}</a></td>
                            <td><a href="/listings/{{ $listing->id }}/edit"  class="btn btn-outline-success btn-xs float-right" >Edit</a></td>
                            <td>{!! Form::open(['action' => ['ListingController@destroy', $listing -> id], 'method' => 'POST', 'class' =>'float-right', 'onsubmit' => 'return confirm("Are You Sure?")']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::bsSubmit('DELETE',['class' => 'btn btn-outline-danger']) }}
                                {!! Form::close() !!}</td>
                            </tr>    
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

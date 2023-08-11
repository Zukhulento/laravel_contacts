@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contact info</div>
                    <div class="card-body">
                        <p> Name: {{ $contact->name }}</p>
                        <p> Email: <a class="text-decoration-none " href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
                        <p> Phone number: <a class="text-decoration-none " href="tel:{{ $contact->phone_number }}">{{ $contact->phone_number }}</a></p>
                        <p> Age: {{ $contact->Age }}</p>
                        <p> Created at: {{ $contact->created_at }}</p>
                        <p> Last updated: {{ $contact->updated_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

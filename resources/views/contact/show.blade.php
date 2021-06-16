@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    showでええす！
                    {{ $contact->your_name }}
                    <br>
                    {{ $contact->title }}
                    <br>
                    {{ $contact->email }}
                    <br>
                    {{ $contact->url }}
                    <br>
                    {{ $gender }}
                    <br>
                    {{ $age }}
                    <br>
                    {{ $contact->contact }}
                    <form method="GET" action="{{ route("contact.edit", ["id" => $contact->id]) }}">
                        @csrf

                        <input class="btn btn-info" type="submit" value="変更する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

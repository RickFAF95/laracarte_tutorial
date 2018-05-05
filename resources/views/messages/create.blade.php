@extends('layouts.master', ['title' => 'Contact'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                <h2>Get In Touch</h2>
                <p class="text-muted">If you having trouble with this service, please <a href="mailto:rickfaf1@gmail.com">ask for help</a>.</p>
                {{--novalidate dans la balise form pour désactiver la validation js côté client--}}
                <form action="{{ route('contact.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                               placeholder="Name" required value="{{ old('name') }}"/>
                        {!! $errors->first('name', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                               placeholder="Email" required value="{{ old('email') }}"/>
                        {!! $errors->first('email', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <label for="msg" class="control-label sr-only">Message</label>
                        <textarea name="msg" id="msg" class="form-control {{ $errors->has('msg') ? 'is-invalid' : '' }}" rows="10" cols="10" placeholder="Message" required>{{ old('msg') }}</textarea>
                        {!! $errors->first('msg', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
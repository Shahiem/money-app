@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h4>register</h4>

    <form>
        @csrf
        @method('post')
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Name</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="text">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Email</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="text">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Password</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="text">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Confirm password</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="text">
            </div>
        </div>

        <button type="submit">send</button>
    </form>
@endsection
@extends('templates.principal')

@section('content')
<form method="post" action="{{ route('uploadEvent') }}">
    @csrf
    <div class="mb-3">
    <fieldset>
        <label for="eventName">Event:
            <input type="text" name="eventName" class="form-control">
        </label>
        <label for="eventPrice">Event Price:
            <input type="number" name="eventPrice" class="form-control">
        </label>
        <label for="eventDescription">Event Description: 
            <input name="eventDescription" type="text" class="form-control">
        </label>
        <label for="eventPlace">Place: 
            <input type="text" name="eventPlace" class="form-control">
        </label>
        <label for="eventTime">Time: 
            <input type="time" name="eventTime" class="form-control">
        </label>
        <label for="eventDate">Date: 
            <input type="date" name="eventDate" class="form-control">
        </label>
        <button type="submit">Submit</button>
    </fieldset>
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
</form>
@endsection('content')
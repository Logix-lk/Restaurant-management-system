<!DOCTYPE html>
<html lang="en">
@extends('includes.header')
<head>
    @include('includes.navbar')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/event.css">
    <title>Event Booking</title>
</head>
<body>
{!! Form::open(['url' => 'Event/submit']) !!}
<div class="container">
    <div class="row">
        <div class="col-md-12 Event event-reg">
            <h1>Event Registration</h1>
        </div>
    </div>
    <div class="row">
        <div class="eventForm">
            <div class="row event-form-wrap">
                <div class="divider"></div>
                <div class="col-md-6 left-side">
                    <div class="form-group">
                        {{Form::label('name','Name')}}
                        {{Form::text('name','',['class' => 'form-control','placeholder' => 'Enter your name'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('email','E-Mail Address')}}
                        {{Form::text('email','',['class' => 'form-control','placeholder' => 'Enter E-mail'])}}
                    </div>
                    <div>
                        {{Form::label('phone','Enter Phone Number')}}
                        {{Form::text('phone','',['class' => 'form-control','placeholder' => '07* *******'])}}
                    </div>
                    <div>
                        {{Form::label('date','Event Date')}}
                        {{Form::date('date', \Carbon\Carbon::now(), array('class' => 'form-control', 'required' => '')) }}
                    </div>
                    <div class="form-group">
                        {!! Form::label('time', 'Enter Event Start Time :') !!}
                        {!! Form::time('time',null, ['class' => 'form-control']) !!}
                        {{ $errors->first('time') }}
                    </div>
                </div>
            <div class="col-md-6 right-side">
                <div class="row">
                    <div class="col-md-12 submit-side">
                        <div class="form-group">
                            {{Form::label('message','Extra Details')}}
                            {{Form::textarea('message','',['class' => 'form-control','placeholder' => 'Enter other details about your event'])}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>






    </div>
{!! Form::close() !!}

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

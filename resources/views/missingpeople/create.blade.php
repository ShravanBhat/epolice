@extends('layouts.app')

@section('content')
    {!! Form::open(['action'=>'MissingpeoplesController@store','method'=>'POST','enctype'=>'multipart/data']) !!}
        <div class="form-group">
            {{Form::label('namec','Name of complaintant')}}
            {{Form::text('namec','',['class'=>'form-control','placeholder'=>' Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('anum', 'Aadhar number')}}
            {{Form::text('anum', '', ['class' => 'form-control', 'placeholder' => 'Enter Aadhar'])}}
        </div>
        <div class="form-group">
            {{Form::label('mnum', 'Mobile number')}}
            {{Form::text('mnum', '', ['class' => 'form-control', 'placeholder' => 'Enter Mobile number'])}}
        </div>
        <div class="form-group">
            {{Form::label('addr', 'Address')}}
            {{Form::text('addr', '', ['class' => 'form-control', 'placeholder' => 'Enter Address'])}}
        </div>
        <h1>Details of missing person</h1>
        <div class="form-group">
            {{Form::label('namem','Name of missing person')}}
            {{Form::text('namem','',['class'=>'form-control','placeholder'=>' Name'])}}
        </div>

        
        <div class="form-group">
            {{Form::label('age', 'Age')}}
            {{Form::text('age', '', ['class' => 'form-control', 'placeholder' => 'Age'])}}
        </div>
        <div class="form-group">
            {{Form::label('gen', 'Gender')}}
            {{Form::textarea('gen', '', ['class' => 'form-control', 'placeholder' => 'Gender'])}}
         </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Physical apperance '])}}
        </div>
        <div class="form-group">
            {{Form::label('loc', 'Last location')}}
            {{Form::text('loc', '', ['class' => 'form-control', 'placeholder' => 'Enter last location'])}}
         </div>
         <div class="form-group">
            {{Form::file('face_image')}}
    
         </div>
        
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
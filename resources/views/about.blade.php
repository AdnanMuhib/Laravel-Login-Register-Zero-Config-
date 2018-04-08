@extends('layout.app')

@section('title','about')
@section('body')
<?php  
        foreach ($users as $user) {
            echo "<br>".$user->name;
        }
?>
@endsection
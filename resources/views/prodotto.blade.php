@extends('layouts.app')
@section('title')
prodotto
@endsection
@section('main_content')

<p>{{ $prodotto['descrizione'] }}  </p>
    
@endsection
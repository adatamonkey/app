@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
  @parent
  詳細ページ
@endsection
@section('content')
  @if($items != null)
    @foreach($items as $item)
      <table>
        <tr>
          <th>Id: </th>
          <td>{{$item->id}}</td>
        </tr>
        <tr>
          <th>Name: </th>
          <td>{{$item->name}}</td>
        </tr>
        <tr>
          <th>Mail: </th>
          <td>{{$item->mail}}</td>
        </tr>
        <tr>
          <th>Age: </th>
          <td>{{$item->age}}</td>
        </tr>
      </table>
      <hr>
    @endforeach
  @endif
@endsection
@section('footer')
copyright 2019 yamada.
@endsection

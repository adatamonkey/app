@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <table>
    <tr>
      <th>Data</th><th>Board</th>
    </tr>
    @foreach($hasItems as $item)
      <tr>
        <td>{{$item->getData()}}</td>
        <td>
            <table>
              @foreach($item->boards as $obj)
                <tr><td>{{$obj->getData()}}</td></tr>
              @endforeach
            </table>
        </td>
      </tr>
    @endforeach
  </table>
  <div>
    <table>
      <tr>
        <th><th>Person</th></th>
      </tr>
      @foreach($noItems as $item)
      <tr>
        <th><td>{{$item->getData()}}</td></th>
      </tr>
      @endforeach
    </table>
  </div>
@endsection

@section('footer')
copyright 2019 yamada.
@endsection

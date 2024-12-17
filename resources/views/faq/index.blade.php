@extends('layouts.app')

@section('content')
<h1>FAQ</h1>
<table class="table">
    <thead>
        <tr>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($faqs as $item)
        <tr>
            <td>{{ $item->question }}</td>
            <td>{{ $item->answer }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
@extends('layouts.app')

@section('content')
    <h1>Feedback Submissions</h1>
    
    @if($feedbacks->isEmpty())
        <p>No feedback available.</p>
    @else
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($feedbacks as $feedback)
                    <tr>
                        <td>{{ $feedback->name }}</td>
                        <td>{{ $feedback->email }}</td>
                        <td>{{ $feedback->comment }}</td>
                        <td>{{ $feedback->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

@extends('layouts.app')

@section('content')

    <table class="table table-bordered justify-content-center" style="border-color:white;">
        <thead>
            <tr>
                <td class="text-white text-center col-1">Ammount</td>
                <td class="text-white text-center col-2">Sent To</td>
                <td class="text-white text-center col-3">Description</td>
                <td class="text-white text-center col-3">Date</td>
                <td class="text-white text-center col-3">Sent/Recieved</td>
            </tr>
        </thead>
        <tbody> 
            @foreach($transfers as $transfer)
            <tr>
                @if($transfer->user_id == Auth()->user()->id)
                <td class="text-white text-center">{{ $transfer->ammount }}</td>  
                <td class="text-white text-center">{{ $transfer->description }}</td>
                <td class="text-white text-center">{{ $transfer->User->name }}</td>
                <td class="text-white text-center">{{ $transfer->created_at }}</td>
                <td class="text-white text-center"> <strong>Sent</strong> </td>
            </tr>
            <tr>
                @endif
                @if($transfer->reciever_id == Auth()->user()->id)
                <td class="text-white text-center">{{ $transfer->ammount }}</td>  
                <td class="text-white text-center">{{ $transfer->description }}</td>
                <td class="text-white text-center">{{ $transfer->User->name }}</td>
                <td class="text-white text-center">{{ $transfer->created_at }}</td>
                <td class="text-white text-center"> <strong>Recieved</strong> </td>
                @endif
            <tr>
            @endforeach
        </tbody>
    </table>
@endsection
@extends('layouts.app')

@section('content')
<div><h3 class="text-center text-white">Transfer to another account!</h3></div>
    <div class="container col-8 offset-5">
        <div class="row">
                <form action="/transfer/{{ $senderID }}" method="POST">
                    <div class="form-group">
                    @csrf
                    <label class="text-white" for="id">Account id : </label>
                    <input class="form-control" type="number" name="id">

                    <label class="text-white" for="ammt">Ammount : </label>
                    <input class="form-control" type="number" name="ammt">

                    <label class="text-white" for="ammt">Description : </label>
                    <textarea class="form-control" name="description" id="description" cols="21" rows="5"></textarea>

                    <button class="form-control btn2 text-white">Submit</button>
                </div>
                </form>
        </div>
    </div>
@endsection
@extends('main')

@section('main_title')
    Review page title
@endsection

@section('main_content')
    <h1>Review page</h1>

    @if ($errors -> any())
        <div>
            <ul>
                @foreach ($errors -> all() as $item)
                    <li>{{ $item }}</li>   
                @endforeach
            </ul>
        </div>
    @endif
   
    <form style="display: flex; flex-direction: column; width: 30%" action="/review/check" method="POST">
        @csrf 
        <input style="margin: 5px" type="email" name="email" id="email" placeholder="enter email">
        <input style="margin: 5px" type="text" name="subject" id="subject" placeholder="enter subject">
        <textarea style="margin: 5px" name="message" id="message" cols="30" rows="10" placeholder="enter message "></textarea>
        <button style="margin: 5px" type="submit">Send</button>
    </form>

    <h2>All REVIEWS</h2>

    <div style="display: flex; flex-direction: column; width: 30%">
        @foreach ($reviews as $item)
            <div>{{ $item->subject }}</div>
        @endforeach
    </div>
@endsection

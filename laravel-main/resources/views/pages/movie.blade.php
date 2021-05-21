@extends('layouts.main-layout')

@section('content')
    <main>
        <section>
            <ul>
                <li>
                    <h3>Film details:</h3>
                </li>
                <li>
                    {{'Id: ' . $movie -> id}} 
                </li>
                <li>
                      {{'Title: ' . $movie -> title}} 
                </li>
                @if ($movie -> title != $movie -> original_title)
                    <li>
                        {{'Original title: ' . $movie -> original_title}} 
                    </li>
                @endif
                <li>
                    {{'Nationality: ' . $movie -> nationality}} 
                </li>
                <li>
                    {{'Date of release: ' . $movie -> date}} 
                </li>
                <li>
                    {{'Rating: ' . $movie -> vote}} 
                </li>
            </ul>
        </section>
    </main>
@endsection
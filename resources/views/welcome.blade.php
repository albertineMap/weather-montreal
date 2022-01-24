<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Weather</title>
        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

        <!-- Bootstrap -->
        <link rel="stylesheet" href = {{ asset("css/app.css") }} />
        <script src = "{{ asset("js/app.js") }}"></script>

    </head>

<body>
    <div>{{$forecast}}</div>
    @if(count($forecast)<0))
        </h3> Please reload the page</h3>
    @else
        <div class="container   text-center">
            <div class=" row ">
                    <h2>Weather of Montreal</h2>
            </div>
            <div class="row" id='current'>
                    <div class="row">
                        <h3 class="">{{$forecast[0]->time}}</h3>
                        {{-- <div id="icon"><img   src="{{$forecast[0]->icon}}"  ></div> --}}
                        <div id="icon"><img  src="https://openweathermap.org/img/wn/{{$forecast[0]->icon}}@2x.png" ></div>
                        <p><h5 class="">{{$forecast[0]->name}}</h5></p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="row">
                            <div class="col">Tempeture: {{$forecast[0]->tempeture}}</div>
                            <div class="col">Degree: {{$forecast[0]->degree}}</div>
                        </div>
                        <div class="row">
                            <div class="col">Feel like: {{$forecast[0]->feel_like}}</div>
                            <div class="col">Speed: {{$forecast[0]->speed}}</div>
                        </div>
                    </div><br/><br/>
                </div>
            </div>
            <div class=" d-flex text-center" id='table'>
                <table>
                    <tr>
                        @foreach ($forecast as $key => $data)
                            @if($key > 0)
                                <th>
                                    <div class="ro ">
                                        <div class="row ">
                                                <h4>{{$data->time}}</h4>
                                                <div id="icon"><img  src='https://openweathermap.org/img/wn/{{$data->icon}}@2x.png'  ></div>
                                                {{-- <div id="icon"><img src='https://openweathermap.org/img/wn/{{ $data->icon }}@2x.png'  ></div> --}}
                                                {{-- <div id="icon"><img   src="".{{$data->icon}}." "  ></div> --}}
                                                <p><h5>{{$data->name}}</h5></p>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div>Temp: {{$data->tempeture}}</div>
                                                <div>Degree: {{$data->degree}}</div>
                                            </div>
                                            <div class="col">
                                                <div> Feel like : {{$data->feel_like}}</span>
                                                <div>Speed: {{$data->speed}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                            @endif
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
    @endif
</body>

</html>

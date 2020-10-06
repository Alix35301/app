<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<table class="table-auto">
  <tbody>
  
    <tr>
    <th nowrap>Date</th>
                        @foreach ($conType as $conType)
                    <th>{{$conType->name}}</th>
                    @endforeach
        {{-- @foreach ($dates as $date) --}}
            {{-- <tr> --}}
                {{-- <td nowrap>
                {{date("d M Y",strtotime($date))}}
                </td>
                <td>fsd
                </td> --}}
                @foreach ($conType->data as $data)
                <tr>
                    <td>{{$data->rate}}</td>
                    </tr>
                @endforeach

            {{-- </tr> --}}
        {{-- @endforeach --}}
    </tr> 
    {{-- @foreach ($conType as $conType)
    
        <td>{{$conType->name}}</td>
        @foreach ($conType->data as $data)
            <td>{{$data->rate}}</td>
        @endforeach
    
    @endforeach --}}
    
  </tbody>
</table>
</body>
</html>

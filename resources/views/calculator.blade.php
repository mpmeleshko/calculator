<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Calculator') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div id="app">
    <main class="py-4">
        <div class="container">
            <form action="{{ route('calculate') }}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col">
                        <input type="number" step=any class="form-control" placeholder="First value" name="firstValue" value="{{ isset($result) ? $result : '' }}" required >
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="operation" required>
                            <option value="addition">+</option>
                            <option value="subtract">-</option>
                            <option value="multipl">*</option>
                            <option value="division">/</option>
                            <option value="expo">x^y</option>
                            <option value="average">avg</option>
                            <option value="max">max</option>
                            <option value="min">min</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="number" step=any class="form-control" placeholder="Second value" name="secondValue" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <button type="submit" class="btn btn-secondary btn-lg btn-block" id="equal">=</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

{{--<script>--}}
    {{--$('#equal').on('click', function (e) {--}}
        {{--e.preventDefault();--}}
        {{--console.log(123);--}}
        {{--let data = new FormData();--}}
        {{--let $this = $(this);--}}

        {{--$.ajax({--}}
            {{--type: 'POST',--}}
            {{--dataType: "json",--}}
            {{--contentType: false,--}}
            {{--processData: false,--}}
            {{--url: $this.attr('href'),--}}
            {{--data: data,--}}
            {{--success: function (data) {--}}
                {{--console.log(data);--}}
            {{--},--}}
            {{--error: function (data) {--}}

            {{--}--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}

</body>
</html>

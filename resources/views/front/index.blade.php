<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>@yield('title', 'Junior 15k')</title>
</head>
<body>
<div class="container-fluid h-100">
    <div class="row h-100">
        <div class="col-md ">test</div>
        <div class="col-md-4 right-side center-align">
            {!! Form::open(['route' => 'front.generate-cv', 'class' => 'center-yolo']) !!}
            <div class="form-group">
                {!! Form::text('name', null, ['placeholder' => 'Imię', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('surname', null, ['placeholder' => 'Nazwisko', 'class' => 'form-control']) !!}
            </div>


            <div class="form-check">
                <label class="form-check-label">
                    {!! Form::radio('salary', 1, ['id' => 'Huge']) !!}
                    Duże
                </label>
            </div>
            <div class="form-check">

                <label class="form-check-label">
                    {!! Form::radio('salary', 2, ['id' => 'normal']) !!}
                    Normalne
                </label>
            </div>
            <div class="form-check">

                <label class="form-check-label">
                    {!! Form::radio('salary', 3, ['id' => 'small']) !!}
                    Małe
                </label>
            </div>
            <hr/>

            <div class="form-check">

                <label class="form-check-label">
                    {!! Form::radio('test', false, ['id' => 'small']) !!}
                    Małe
                </label>
            </div>

            <div class="form-check">

                <label class="form-check-label">
                    {!! Form::radio('test', false, ['id' => 'small']) !!}
                    Małe
                </label>
            </div>

            <div class="form-check">

                <label class="form-check-label">
                    {!! Form::radio('test', false, ['id' => 'small']) !!}
                    Małe
                </label>
            </div>

            <hr/>
            <div class="form-check">
                <label class="form-check-label">
                    {!! Form::checkbox('git', false, ['id' => 'small']) !!}
                    Nie dawaj linka do gita bo po co.
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    {!! Form::checkbox('bootcamp', false, ['id' => 'small']) !!}
                    Bootcamp
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    {!! Form::checkbox('lay', false, ['id' => 'small']) !!}
                    Nakłam w CV
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    {!! Form::checkbox('interests', false, ['id' => 'small']) !!}
                    Zainteresowania
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    {!! Form::checkbox('clause', 1, ['id' => 'small']) !!}
                    Zapomnij klauzuli poufności
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    {!! Form::checkbox('experience', false, ['id' => 'small']) !!}
                    Doświadczenie sprzed 20 lat
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    {!! Form::checkbox('photo', false, ['id' => 'small']) !!}
                    Zdjęcie z imprezy
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    {!! Form::checkbox('js', false, ['id' => 'small']) !!}
                    Pomyl Java'e z JS
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    {!! Form::checkbox('js', false, ['id' => 'small']) !!}
                    Zapomnij numeru telefonu
                </label>
            </div>
            <button type="submit" class="btn btn-primary better-color">Wygeneruj</button>

            {!! Form::close() !!}
        </div>
    </div>
</div>
</body>
</html>


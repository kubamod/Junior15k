<div class="form-group">
    {!! Form::text('name', (isset($request->name))? $request->name : null, ['placeholder' => 'Imię', 'class' => 'form-control '.($errors->get('name')? ' is-invalid' : '')]) !!}
    <div class="invalid-feedback">
        @foreach ($errors->get('name') as $message)
            {{$message}}
        @endforeach
    </div>
</div>
<div class="form-group">
    {!! Form::text('surname', (isset($request->surname))? $request->surname : null, ['placeholder' => 'Nazwisko', 'class' => 'form-control'.($errors->get('surname')? ' is-invalid' : '')]) !!}
    <div class="invalid-feedback">
        @foreach ($errors->get('surname') as $message)
          {{$message}}
        @endforeach
    </div>
</div>

<div>Wyngarodzenie:</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::radio('salary', 1, ['id' => 'Huge']) !!}
        Duże (20k+ netto)
    </label>
</div>
<div class="form-check">

    <label class="form-check-label">
        {!! Form::radio('salary', 2, ['id' => 'normal']) !!}
        Normalne (15k netto)
    </label>
</div>
<div class="form-check">

    <label class="form-check-label">
        {!! Form::radio('salary', 3, ['id' => 'small']) !!}
        Małe (7-10k)
    </label>
</div>
<hr/>

Wiek:

<div class="form-check">

    <label class="form-check-label">
        {!! Form::radio('test', 1, ['id' => 'small']) !!}
        30-50
    </label>
</div>

<div class="form-check">

    <label class="form-check-label">
        {!! Form::radio('test', 1, ['id' => 'small']) !!}
        18-30
    </label>
</div>

<hr/>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('git', 1, (isset($request->git))? true : false, ['id' => 'small']) !!}
        Nie dawaj linka do gita bo po co.
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('bootcamp', 1,(isset($request->git))? true : false, ['id' => 'small']) !!}
        Bootcamp
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('lay', 1, (isset($request->lay))? true : false,['id' => 'small']) !!}
        Nakłam w CV
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('interests', 1,(isset($request->interests))? true : false, ['id' => 'small']) !!}
        Zainteresowania
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('clause', 1, (isset($request->clause))? true : false,['id' => 'small']) !!}
        Zapomnij klauzuli poufności
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('experience', 1,(isset($request->experience))? true : false, ['id' => 'small']) !!}
        Doświadczenie sprzed 20 lat
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('photo', 1, (isset($request->photo))? true : false,['id' => 'small']) !!}
        Zdjęcie z imprezy
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('js', 1, (isset($request->js))? true : false,['id' => 'small']) !!}
        Pomyl Java'e z JS
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('fogot_phone', 1,(isset($request->fogot_phone))? true : false, ['id' => 'small']) !!}
        Zapomnij numeru telefonu
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('email_z_dupy', 1,(isset($request->email_z_dupy))? true : false, ['id' => 'small']) !!}
        Email z dupy
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('polish_ci', 1,(isset($request->polish_ci))? true : false, ['id' => 'small']) !!}
        Nie dawaj polskich znaków
    </label>
</div>
<button type="submit" class="btn btn-primary better-color">Wygeneruj</button>

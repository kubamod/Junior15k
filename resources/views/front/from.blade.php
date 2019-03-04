<div class="form-group">
    {!! Form::text('name', null, ['placeholder' => 'Imię', 'class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::text('surname', null, ['placeholder' => 'Nazwisko', 'class' => 'form-control']) !!}
</div>

<div>Wyngarodzenie:</div>
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
        {!! Form::checkbox('git', 1, ['id' => 'small']) !!}
        Nie dawaj linka do gita bo po co.
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('bootcamp', 1, ['id' => 'small']) !!}
        Bootcamp
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('lay', 1, ['id' => 'small']) !!}
        Nakłam w CV
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('interests', 1, ['id' => 'small']) !!}
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
        {!! Form::checkbox('experience', 1, ['id' => 'small']) !!}
        Doświadczenie sprzed 20 lat
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('photo', 1, ['id' => 'small']) !!}
        Zdjęcie z imprezy
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('js', 1, ['id' => 'small']) !!}
        Pomyl Java'e z JS
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('fogot_phone', 1, ['id' => 'small']) !!}
        Zapomnij numeru telefonu
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('email_z_dupy', 1, ['id' => 'small']) !!}
        Email z dupy
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        {!! Form::checkbox('polish_ci', 1, ['id' => 'small']) !!}
        Nie dawaj polskich znaków
    </label>
</div>
<button type="submit" class="btn btn-primary better-color">Wygeneruj</button>

@extends('front.index')


@section('CV')
    <div class="cv">
        <div class="first-block">
            <div class="photo"></div>
            <div class="name-surname">
                <span class="name">{{$request->name}} {{$request->surname}}</span><br/>
                <span class="email">pussydestoryer@interia.pl</span><br/>
                @if($request->fogot_phone != 1)<span class="tel">Nr tel. <strong>+48 {{rand(100,999)}} {{rand(100,999)}} {{rand(100,999)}}</strong></span>@endif
                <br/>
                <br/>
                <span class="city"><span class="opacity">Miasto:</span> Radom</span><br/>
                <span class="city"><span class="opacity">Powiat:</span> Radomski</span><br/>

                @if ($request->git == 1)

                @else
                        <a href="#">GitHub</a>
                @endif
            </div>
        </div>
        <div class="first-block" style="margin-top: 10px">
            <div class="education row">
                <div class="col-sm-4">
                    <div class="line"></div>
                </div>
                <div class="col-sm ">
                    <span class="wyksztalcenie">Wykształcenie</span>

                    <div class="wyksztalcenie-kontener">
                        <div class="rok-edukacja">2018-2019</div>
                        <div class="uczelnia">Zawodówka nr 4</div>
                        <div class="kierunek">Budowlanka</div>
                    </div>

                    @if($request->bootcamp == 1)
                        <div class="wyksztalcenie-kontener mg-top">
                            <div class="rok-edukacja">09/2019- 10/2019</div>
                            <div class="uczelnia">Bootcamp</div>
                            <div class="kierunek">Full stack developer</div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="education row">
                <div class="col-sm-4">
                    <div class="line"></div>
                </div>
                <div class="col-sm ">
                    <span class="wyksztalcenie">Języki</span>

                    <div class="wyksztalcenie-kontener">
                        <div class="rok-edukacja">angielski: @if($request->lay == 1) Znakomity @else średni @endif</div>
                    </div>

                </div>
            </div>
            <div class="education row">
                <div class="col-sm-4">
                    <div class="line"></div>
                </div>
                <div class="col-sm ">
                    <span class="wyksztalcenie">Umiejętnośći</span>

                    <div class="wyksztalcenie-kontener">
                        <div class="umiejetnosci">
                            @if($request->lay == 1)Znakomita znajomość@else Znajomość @endif: HTML, CSS @if($request->lay == 1), Wzorce projektowe @endif
                        </div>
                    </div>

                </div>
            </div>

            @if($request->experience == 1)
                <div class="education row">
                    <div class="col-sm-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-sm ">
                        <span class="wyksztalcenie">Doświadczenie</span>

                        <div class="wyksztalcenie-kontener">
                            <div class="rok-edukacja">19{{rand(8,9)}}{{rand(1,9)}}- 20{{rand(0,1)}}{{rand(1,6)}}</div>
                            <div class="uczelnia">Kasjer</div>
                            <div class="kierunek">Sprzedaż batonów i browarów w nocnym</div>
                        </div>
                    </div>
                </div>
            @endif
                @if($request->clause != 1)
                <div class="klauzula">Wyrażam zgodę na przetwarzanie moich danych osobowych dla potrzeb rekrutacji (zgodnie z art. 6 ust. 1 lit. a Rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (ogólne rozporządzenie o ochronie danych)).
                </div>
            @endif




            {{--<div class="line"></div>--}}
            {{--<div class="education-text">Wykształcenie</div>--}}
            {{--<div class="cos">--}}
            {{--<div class="wyksztalcenie-blok">--}}
            {{--<div class="rok-edukacja">2018-2019</div>--}}
            {{--<div class="uczelnia">Zawodówka nr 4</div>--}}
            {{--<div class="kierunek">Budowlanka</div>--}}
            {{--</div>--}}
            {{--<div class="wyksztalcenie-blok">--}}
            {{--<div class="rok-edukacja">2018-2019</div>--}}
            {{--<div class="uczelnia">Bootcamp</div>--}}
            {{--<div class="kierunek">Kurs HTML/CSS</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="jezyki">
                <div class="line" style="top: 200px;"></div>
                <div class="education-text" style="top: 185px;">Znajomość języków</div>
                <div class="wyksztalcenie-blok" style="top: 215px">
                    <div class="rok-edukacja">Angielski: <strong>średni</strong></div>

                </div>
            </div>

            <div class="umiejetnosci">
                <div class="line" style="top: 270px;"></div>
                <div class="education-text" style="top: 185px;">Znajomość języków</div>
                <div class="wyksztalcenie-blok" style="top: 215px">
                    <div class="rok-edukacja">Angielski: <strong>średni</strong></div>

                </div>
            </div>--}}
        </div>
    </div>
@endsection

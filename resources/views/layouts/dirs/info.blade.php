@extends('main')
@section('title')
    @foreach($dirs as $dirs2)
        {{$dirs2->nameDir}}
    @endforeach
@endsection
@section('content')
<div class="container">
    <div class="col-md-offset-4" style="direction: rtl;">
        <div class="row">
            @foreach($dirs as $dirs)
            <h2>نام کارگردان: <b> {{$dirs->nameDir}} </b></h2>
            <?php /*فرم ارسال اطلاعات برای ثبت رای */?>
            <div>
                <form method="GET" class="content" action="<?= Url('Dirs/'.$dirs->idDir.'/info') ?>">
                    @if (Auth::guest())
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <button class="glyphicon glyphicon-star" value=1 name="avg" title="یک ستاره"/>1
                        <button class="glyphicon glyphicon-star" value=2 name="avg" title="دو ستاره"/>2
                        <button class="glyphicon glyphicon-star" value=3 name="avg" title="سه ستاره"/>3
                        <button class="glyphicon glyphicon-star" value=4 name="avg" title="چهار ستاره"/>4
                        <button class="glyphicon glyphicon-star" value=5 name="avg" title="پنج ستاره"/>5
                        <button class="glyphicon glyphicon-star" value=6 name="avg" title="شش ستاره"/>6
                        <button class="glyphicon glyphicon-star" value=7 name="avg" title="هفت ستاره"/>7
                        <button class="glyphicon glyphicon-star" value=8 name="avg" title="هشت ستاره"/>8
                        <button class="glyphicon glyphicon-star" value=9 name="avg" title="نه ستاره"/>9
                        <button class="glyphicon glyphicon-star" value=10 name="avg" title="ده ستاره"/>10
                        <button type="hidden" value={{$dirs->idDir}} name="idDir"/>
                     </a>
                     @else   
                        <button class="glyphicon glyphicon-star" value=1 name="avg" title="یک ستاره"/>1
                        <button class="glyphicon glyphicon-star" value=2 name="avg" title="دو ستاره"/>2
                        <button class="glyphicon glyphicon-star" value=3 name="avg" title="سه ستاره"/>3
                        <button class="glyphicon glyphicon-star" value=4 name="avg" title="چهار ستاره"/>4
                        <button class="glyphicon glyphicon-star" value=5 name="avg" title="پنج ستاره"/>5
                        <button class="glyphicon glyphicon-star" value=6 name="avg" title="شش ستاره"/>6
                        <button class="glyphicon glyphicon-star" value=7 name="avg" title="هفت ستاره"/>7
                        <button class="glyphicon glyphicon-star" value=8 name="avg" title="هشت ستاره"/>8
                        <button class="glyphicon glyphicon-star" value=9 name="avg" title="نه ستاره"/>9
                        <button class="glyphicon glyphicon-star" value=10 name="avg" title="ده ستاره"/>10
                        <input type="hidden" value={{$dirs->idDir}} name="idDir"/>
                     @endif
                </form>  
            </div>
            <br/>
            <img src="<?= Url('img/dir/'.$dirs->img) ?>" alt="{{$dirs->nameDir}}" height="400px" width="300px" style="border-radius: 10px;border: 2px solid #481e5c;" />
            <hr/>
            <p>
                فیلم ها:
                @foreach($films as $films)
                <a href="<?= Url('Films/'.$films->idFilm.'/info')?>">
                    {{$films->titleFilm}}
                </a> | &nbsp;
                @endforeach
            </p>
            <p>
                سریال ها:
                @foreach($seris as $seris)
                <a href="<?= Url('Seris/'.$seris->idSeri.'/info') ?>">
                    {{$seris->titleSeri}}
                </a> | &nbsp;
                @endforeach
            </p>
            <p>
                <span class="btn btn-danger">
                 امتیاز:{{$dirs->avg}}
                </span>
            </p>
            <p>
                <span class="btn btn-danger">              
                    تعداد آرا:{{$dirs->count}}
                </span>
            </p>
            <p>
                تاریخ تولد:{{$dirs->dateBirth}} &numsp;
                &numsp; محل تولد:{{$dirs->placeBirth}}
            </p>
            <p>
                توضیحات:{{$dirs->comment}}<br>
            </p>
            @endforeach
            <br/>
        </div>
    </div>
</div>
@endsection
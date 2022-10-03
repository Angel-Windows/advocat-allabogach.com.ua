@extends('layout.app')
@section('content')
    <section class="header">
        <div class="inf">
            <ul>
                <li>advocat.bogachalla@gmail.com</li>
                <li><img src="{{asset("res/icon/pin.png")}}" class="map_icon" alt="">Украина, Запорожье</li>
            </ul>
            <p>Социальные сети</p>
            <ul class="social_list">
                <li><img src="{{asset('res/Social/instagram.png')}}" alt=""></li>
                <li><img src="{{asset('res/Social/phone.png')}}" alt=""></li>
                <li><img src="{{asset('res/Social/telegram.png')}}" alt=""></li>
                <li><img src="{{asset('res/Social/tiktok.png')}}" alt=""></li>
            </ul>
        </div>
        <div class="banner">
            <div class="nav">
                <div class="logo"><img src="{{asset("res/Logo.png")}}" alt=""></div>
                <ul>
                    <li>О нас</li>
                    <li>Новости</li>
                    <li>Список</li>
                    <li>Контакты</li>
                    <li class="button">Свяжитесь с нами</li>
                </ul>
            </div>
            <div class="text slider">
                <div class="arrows">
                    <div class="hr hr_vert"></div>
                    <div class="hr hr_vert active"></div>
                    <div class="hr hr_vert"></div>
                </div>
                <em>Корпорпоративное право</em>
                <h2>ВОПРОСЫ <span>КОРПОРАТИВНОГО</span><br> ПРАВА</h2>
                <a href="#">Узнать больше</a>
            </div>
        </div>
    </section>
    <div class="about">
        <div class="text_wrapper">
            <div class="text">
                <h2>Обо мне</h2>
                <h3>КОНСУЛЬТАЦИЯ ПО ПОЛНОМУ АССОРТИМЕНТУ ВОПРОСОВ</h3>
                <p>Я являюсь адвокатом Совета адвокатов Запорожской области, регистрационный номер в реестре адвокатов
                    Запорожской области <span class="nowrap">— ЗП 002584.</span></p>
                <p>Все проблемы моих доверителей я рассматриваю строго индивидуально, изучая судебную и иную
                    правоприменительную практику до достижения конечного наиболее выгодного результата для моих
                    доверителей, не останавливаясь на полпути.</p>
                <em class="sign">Alla Bogach</em>
            </div>
        </div>
        <div class="img"><img src="{{asset('res/processed.jpeg')}}" alt=""></div>
    </div>
@stop

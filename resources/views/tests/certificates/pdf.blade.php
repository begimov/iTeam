<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <style>
        body {
            font-family: 'DejaVu Sans';
        }
        img {
            width: 100%;
            opacity: 0.6;
        }
        p {
            margin: 0px;
            text-align: center;
        }
        h1 {
            font-size: 28px;
            text-align: center;
            margin: 40px 0px;
            margin-bottom: 30px;
        }
        h2 {
            font-size: 16px;
            text-align: center;
            margin: 2px;
        }
        .center-block {
            width: 100%;
        }
        .name {
            font-size: 16px;
        }
        .who {
            margin-top: 0px;
            margin-right: 120px;

            text-align: right;
            font-size: 16px;
        }
        .who-div {
            margin-top: 15px;
        }
        .data {
            margin-top: 0px;
            margin-left: 120px;

            text-align: left;
            font-size: 16px;
        }
        .data-div {

        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="center-block">
            <img src="{{ asset('img/tests/certificates/head.png') }}">
        </div>
        <h1 style="color: #A60000"><b>СЕРТИФИКАТ</b></h1>
        <div class="center-block">
            <h2>Обладатель сертификата:</h2>
            <h2 class="name"><b>{{ $data['name'] }}</b></h2>
            <h2>Настоящий сертификат подтверждает участие в мастер-классе по теме</h2>
            <h2><b><i> «Как создать систему управления процессами за 4 месяца» </i></b></h2>
        </div>
        <div class="who-div">
            <p class="who">
                <i>
                    Управляющий партнер
                    <br>Консалтинговой компании iTeam
                    <br>Александр Кочнев
                </i>
            </p>
        </div>
        <div class="data-div">
            <p class="data">
                <i>
                    {{ $data['date'] }}
                </i>
            </p>
        </div>
        <div class="who-div" style="margin-top: 0px">
            <p class="who">
                <img src="{{ asset('img/tests/certificates/2.png') }}" style="width: 150px; opacity: 1; margin: 0px 0px;">
            </p>
        </div>
        <div class="who-div">
            <p class="who">
                <img src="{{ asset('img/tests/certificates/logo.png') }}" style="width: 150px; opacity: 1; margin: 31px 0px;">
            </p>
        </div>
        <div class="center-block">
            <img src="{{ asset('img/tests/certificates/contact.png') }}">
        </div>
    </div>
</div>
</body>
</html>
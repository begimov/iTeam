<html>
	<head>
		<title>СЕРТИФИКАТ</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<style>
			body {
				font-family: 'DejaVu Sans';
			}
		</style>
	</head>
	<body>
        <div style="position:absolute;top:0;right:0;color:#870100;"><b>{{ $data['date'] }}</b></div>
        <div align="center">
            <img src="{{ asset('img/tests/certificates/head.png') }}" width="100%" style="margin-top:-50px; margin-bottom:-130px;">
            <h1 style="color:#870100;">СЕРТИФИКАТ</h1>
            @if($data['name'])
                <h2><span style="color: #870100;">Обладатель сертификата</span><br><small>{{ $data['name'] }}</small></h2>
            @endif
            <h2>
                <span style="color: #870100;">
                    Настоящий сертификат подтверждает успешное завершение обучения и тестирования по теме
                </span><br>«{{ $data['theme'] }}»
            </h2>
            
            <h3 align="left">Итоговая оценка: {{ $data['score'] }}%</h3>
            <p align="right">
                Управляющий партнер Консалтинговой компании iTeam<br>Александр Кочнев<br>
                <img src="{{ asset('img/tests/certificates/signature.png') }}" style="width: 150px;margin-top:20px;">
            </p>
            
            <img src="{{ asset('img/tests/certificates/contact.png') }}" align="left" width="80%" style="position:absolute; bottom:0;margin-top:-100px;z-index:-99999;">
        </div>
    </body>
</html>



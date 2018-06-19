<html>
	<head>
		<title>Заказ № {{ generateOrderNumber($order->id) }}</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<style>
			body {
				font-family: 'DejaVu Sans';
			}
		</style>
	</head>
	<body style="font-size:11.8px;width:748px;line-height:1.1;margin:0 auto;color:#000;">
		<p><strong>ООО &quot;АйТим Менеджмент&quot;</strong></p>
		<p>Адрес: 123112, г. Москва, Пресненская набережная, дом 12, ММДЦ &quot;Москва Сити&quot;,<br />
		башня &quot;Федерация ВОСТОК&quot;, этаж 29, офис &quot;А 28&quot;, тел.: +7 (499) 110-26-84</p>
		<h3>Образец заполнения платежного поручения</h3>
		<table border="1" cellspacing="0">
			<tbody>
				<tr valign="middle">
					<td colspan="2" style="padding:1px 6px;"> ИНН 7703381761 </td>
					<td colspan="2" style="padding:1px 6px;"> КПП 770301001 </td>
					<td style="padding:1px 6px;"></td>
					<td style="padding:1px 6px;"></td>
				</tr>
				<tr valign="middle">
					<td colspan="4" rowspan="2" style="padding:1px 6px;"> Получатель 
					<br/> ООО &quot;АйТим Менеджмент&quot;
					</td>
					<td style="padding:1px 6px;"></td>
					<td style="padding:1px 6px;"></td>
				</tr>
				<tr valign="middle">
					<td style="padding:1px 6px;"> Сч. № </td>
					<td style="padding:1px 6px;"> 40702810202560001067 </td>
				</tr>
				<tr valign="middle">
					<td colspan="4" rowspan="2" style="padding:1px 6px;"> Банк получателя 
					<br/> АО &quot;АЛЬФА-БАНК&quot; г. Москва 
					</td>
					<td style="padding:1px 6px;"> БИК </td>
					<td style="padding:1px 6px;"> 044525593 </td>
				</tr>
				<tr valign="middle">
					<td style="padding:1px 6px;"> Сч. № </td>
					<td style="padding:1px 6px;"> 30101810200000000593 </td>
				</tr>
				
			</tbody>
		</table>
		<br>
		<h2 style="font-size: 18px">СЧЕТ-ДОГОВОР ОФЕРТА № {{ generateOrderNumber($order->id) }} от {{ now()->format('d/m/Y') }}</h2>
		<p>Исполнитель: ООО &quot;АйТим Менеджмент&quot;, ИНН 7703381761, КПП 770301001<br />
		Юридический адрес 123112, г. Москва, Пресненская набережная, дом 12,<br />
		ММДЦ &quot;Москва Сити&quot;, башня &quot;Федерация ВОСТОК&quot;, этаж 29, офис &quot;А 28&quot;<br />
		Заказчик: {{ $companyFullName = $businessEntity->name . ' ' . $data['company']['name'] }}<br />
		Плательщик: {{ $companyFullName }}</p>
		<table border="1" cellspacing="0" style="width:90%;">
			<tbody>
				<tr valign="middle">
					<td align="center" style="padding:1px 6px;"> № </td>
					<td align="center" style="padding:1px 6px;" colspan="2"> Наименование товара </td>
					<td align="center" style="padding:1px 6px;"> Ед. измерения </td>
					<td align="center" style="padding:1px 6px;"> Кол-во </td>
					<td align="center" style="padding:1px 6px;"> Цена, руб. </td>
					<td align="center" style="padding:1px 6px;"> Сумма, руб. </td>
				</tr>
				<tr valign="middle">
					<td align="center" style="padding:1px 6px;">1</td>
					<td align="left" style="padding:1px 6px;" colspan="2"> Информационные услуги по теме <br>&quot;{{ $order->product->name }}&quot; </td>
					<td align="center" style="padding:1px 6px;"> шт </td>
					<td align="center" style="padding:1px 6px;"> {{ $order->quantity }} </td>
					<td align="right" style="padding:1px 6px;"> {{ $order->price }} </td>
					<td align="right" style="padding:1px 6px;"> {{ $total = $order->price * $order->quantity }} </td>
				</tr>
				<tr valign="middle">
					<td align="right" colspan="6" style="padding:1px 6px;text-align:right"> Итого: </td>
					<td align="right" style="padding:1px 6px;"> {{ $total }} </td>
				</tr>
				<tr valign="middle">
					<td align="right" colspan="6" style="padding:1px 6px;text-align:right"><strong> Итого НДС: </strong></td>
					<td align="right" style="padding:1px 6px;"><strong> 0,00 </strong></td>
				</tr>
				<tr valign="middle">
					<td align="right" colspan="6" style="padding:1px 6px;text-align:right"><strong> Всего к оплате: </strong></td>
					<td align="right" style="padding:1px 6px;"><strong> {{ $total }} </strong></td>
				</tr>
			</tbody>
		</table>
		<p>Всего на сумму {{ $total }} руб.<br />
		{{-- <strong>{!! HTML::CaseNum2Str($data['sum']) !!}</strong><br /> --}}
		<p>
		<img style="width:500px;margin-bottom:-80px;" width="500" src="data:image/png;base64,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">
		</p>
		<p style="width:88%;color:#444444;">
		ДОГОВОР ОФЕРТА Настоящий счет одновременно является договором оферта в соответствии со ст. 435 ГК РФ. Настоящая оферта действительна и ее акцепт возможен в течение 5 (пяти) рабочих дней.  Оплата по настоящему счету со стороны Заказчика, означает его согласие со всеми условиями настоящего договора оферта, а также является фактическим заключением договора на оказание информационных услуг по теме &quot;{{ $order->product->name }}&quot;. Настоящий договор оферта вступает в силу с момента его оплаты Заказчиком и действует до исполнения всех обязательств по нему.				 
		<br/>
		АКТ ВЫПОЛНЕННЫХ РАБОТ Данный счет-договор оферта является актом выполненных работ. Если в течение 10 рабочих дней с момента предоставления Заказчику доступа к информационным материалам, что подтверждается уведомлением по электронной почте с адреса info@iteam.ru, Заказчик не предъявил претензии ООО "Айтим Менеджмент", акт считается подписанным со стороны Заказчика.
		<br/>
		ВНИМАНИЕ Данный документ предоставляется ООО "Айтим Менеджмент" только в электронном виде (на&nbsp;основании ст. 346.17 НК РФ, ст. 435 п.1 и 438 п. 3 ГК РФ).
		</p>		
	</body>
</html>
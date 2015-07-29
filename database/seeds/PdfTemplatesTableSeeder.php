<?php

use Illuminate\Database\Seeder;

class PdfTemplatesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('pdf_templates')->delete();
        
		\DB::table('pdf_templates')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Danh sách công ty',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:19:19',
				'updated_at' => '2015-07-23 13:41:47',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Danh sách sản phẩm',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>

<p style="text-align:center"><span style="font-size:28px"><strong>Danh S&aacute;ch Sản Phẩm</strong></span></p>

<p style="text-align:center"><span style="font-size:26px">{{$table_list}}</span></p>

<p>&nbsp;</p>
',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:22:28',
				'updated_at' => '2015-07-28 13:57:57',
			),
			2 => 
			array (
				'id' => 3,
				'name' => 'Đơn trả nhà cung cấp',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>

<p style="text-align:center"><span style="font-size:28px"><strong>Đơn&nbsp;Trả&nbsp;H&agrave;ng&nbsp;Số {{$id}}</strong></span><br />
<span style="font-size:18px"><strong>Ng&agrave;y: {{$date}}</strong></span></p>

<p><span style="font-size:18px"><strong>T&ecirc;n nh&agrave; cung cấp:</strong> {{$company_name}} - <strong>ĐC:</strong> {{$address}} - <strong>ĐT:</strong> {{$phone}}</span></p>

<p style="text-align:center"><span style="font-size:26px">{{$table_list}}</span></p>

<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="text-align:center; width:25%">&nbsp;</td>
<td style="text-align:center; width:25%"><span style="font-size:20px"><strong>Nợ cũ</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:20px"><strong>Toa mới</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:20px"><strong>Tổng cộng</strong></span></td>
</tr>
<tr>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center"><span style="font-size:20px"><strong>{{$no_cu}}</strong></span></td>
<td style="text-align:center"><span style="font-size:20px"><strong>{{$toa_moi}}</strong></span></td>
<td style="text-align:center"><span style="font-size:20px"><strong>{{$tong_cong}}</strong></span></td>
</tr>
</tbody>
</table>

<div style="text-align: center;">&nbsp;</div>

<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="text-align:center; width:25%"><span style="font-size:16px"><strong>Người nhận h&agrave;ng</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:16px"><strong>Người thu tiền</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:16px"><strong>Người lập</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:16px"><strong>Trưởng đơn vị</strong></span></td>
</tr>
<tr>
<td style="text-align:center"><span style="font-size:16px"><strong>(K&yacute;, họ t&ecirc;n)</strong></span></td>
<td style="text-align:center"><span style="font-size:16px"><strong>(K&yacute;, họ t&ecirc;n)</strong></span></td>
<td style="text-align:center"><span style="font-size:16px"><strong>(K&yacute;, họ t&ecirc;n)</strong></span></td>
<td style="text-align:center"><span style="font-size:16px"><strong>(K&yacute;, họ t&ecirc;n)</strong></span></td>
</tr>
<tr>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center"><br />
<br />
<br />
<br />
<span style="font-size:16px"><strong>Phan Thị Khuyến Hạnh</strong></span></td>
</tr>
</tbody>
</table>
',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:36:03',
				'updated_at' => '2015-07-28 11:50:32',
			),
			3 => 
			array (
				'id' => 4,
				'name' => 'Đơn mua hàng',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>

<p style="text-align:center"><span style="font-size:28px"><strong>Đơn Mua H&agrave;ng Số {{$id}}</strong></span><br />
<span style="font-size:18px"><strong>Ng&agrave;y: {{$date}}</strong></span></p>

<p><span style="font-size:18px"><strong>T&ecirc;n nh&agrave; cung cấp:</strong> {{$company_name}} - <strong>ĐC:</strong> {{$address}} - <strong>ĐT:</strong> {{$phone}}</span></p>

<p style="text-align:center"><span style="font-size:26px">{{$table_list}}</span></p>

<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="text-align:center; width:25%">&nbsp;</td>
<td style="text-align:center; width:25%"><span style="font-size:20px"><strong>Nợ cũ</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:20px"><strong>Toa mới</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:20px"><strong>Tổng cộng</strong></span></td>
</tr>
<tr>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center"><span style="font-size:20px"><strong>{{$no_cu}}</strong></span></td>
<td style="text-align:center"><span style="font-size:20px"><strong>{{$toa_moi}}</strong></span></td>
<td style="text-align:center"><span style="font-size:20px"><strong>{{$tong_cong}}</strong></span></td>
</tr>
</tbody>
</table>

<div style="text-align: center;">&nbsp;</div>

<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="text-align:center; width:25%"><span style="font-size:16px"><strong>Người nhận h&agrave;ng</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:16px"><strong>Người thu tiền</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:16px"><strong>Người lập</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:16px"><strong>Trưởng đơn vị</strong></span></td>
</tr>
<tr>
<td style="text-align:center"><span style="font-size:16px"><strong>(K&yacute;, họ t&ecirc;n)</strong></span></td>
<td style="text-align:center"><span style="font-size:16px"><strong>(K&yacute;, họ t&ecirc;n)</strong></span></td>
<td style="text-align:center"><span style="font-size:16px"><strong>(K&yacute;, họ t&ecirc;n)</strong></span></td>
<td style="text-align:center"><span style="font-size:16px"><strong>(K&yacute;, họ t&ecirc;n)</strong></span></td>
</tr>
<tr>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center"><br />
<br />
<br />
<br />
<span style="font-size:16px"><strong>Phan Thị Khuyến Hạnh</strong></span></td>
</tr>
</tbody>
</table>
',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:36:27',
				'updated_at' => '2015-07-28 11:50:26',
			),
			4 => 
			array (
				'id' => 5,
				'name' => 'Đơn hàng',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>

<p style="text-align:center"><span style="font-size:28px"><strong>Đơn H&agrave;ng {{$id}}</strong></span><br />
<span style="font-size:18px"><strong>Ng&agrave;y: {{$date}}</strong></span></p>

<p><span style="font-size:18px"><strong>T&ecirc;n nh&agrave; cung cấp:</strong> {{$company_name}} - <strong>ĐC:</strong> {{$address}} - <strong>ĐT:</strong> {{$phone}}</span></p>

<p style="text-align:center"><span style="font-size:26px">{{$table_list}}</span></p>

<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="text-align:center; width:25%">&nbsp;</td>
<td style="text-align:center; width:25%"><span style="font-size:22px"><strong>Nợ cũ</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:22px"><strong>Toa mới</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:22px"><strong>Tổng cộng</strong></span></td>
</tr>
<tr>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center"><span style="font-size:22px"><strong>{{$no_cu}}</strong></span></td>
<td style="text-align:center"><span style="font-size:22px"><strong>{{$toa_moi}}</strong></span></td>
<td style="text-align:center"><span style="font-size:22px"><strong>{{$tong_cong}}</strong></span></td>
</tr>
</tbody>
</table>

<div style="text-align: center;">&nbsp;</div>

<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="text-align:center; width:25%"><span style="font-size:16px"><strong>Người nhận h&agrave;ng</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:16px"><strong>Người thu tiền</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:16px"><strong>Người lập</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:16px"><strong>Trưởng đơn vị</strong></span></td>
</tr>
<tr>
<td style="text-align:center"><span style="font-size:16px"><strong>(K&yacute;, họ t&ecirc;n)</strong></span></td>
<td style="text-align:center"><span style="font-size:16px"><strong>(K&yacute;, họ t&ecirc;n)</strong></span></td>
<td style="text-align:center"><span style="font-size:16px"><strong>(K&yacute;, họ t&ecirc;n)</strong></span></td>
<td style="text-align:center"><span style="font-size:16px"><strong>(K&yacute;, họ t&ecirc;n)</strong></span></td>
</tr>
<tr>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center"><br />
<br />
<br />
<br />
<span style="font-size:16px"><strong>Phan Thị Khuyến Hạnh</strong></span></td>
</tr>
</tbody>
</table>
',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:36:43',
				'updated_at' => '2015-07-28 11:49:25',
			),
			5 => 
			array (
				'id' => 6,
				'name' => 'Đơn hàng đại lý trả',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>

<p style="text-align:center"><span style="font-size:28px"><strong>Đơn H&agrave;ng Đại L&yacute; Trả&nbsp;{{$id}}</strong></span><br />
<span style="font-size:18px"><strong>Ng&agrave;y: {{$date}}</strong></span></p>

<p><span style="font-size:18px"><strong>T&ecirc;n nh&agrave; cung cấp:</strong> {{$company_name}} - <strong>ĐC:</strong> {{$address}} - <strong>ĐT:</strong> {{$phone}}</span></p>

<p style="text-align:center"><span style="font-size:26px">{{$table_list}}</span></p>

<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="text-align:center; width:25%">&nbsp;</td>
<td style="text-align:center; width:25%"><span style="font-size:22px"><strong>Nợ cũ</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:22px"><strong>Toa mới</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:22px"><strong>Tổng cộng</strong></span></td>
</tr>
<tr>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center"><span style="font-size:22px"><strong>{{$no_cu}}</strong></span></td>
<td style="text-align:center"><span style="font-size:22px"><strong>{{$toa_moi}}</strong></span></td>
<td style="text-align:center"><span style="font-size:22px"><strong>{{$tong_cong}}</strong></span></td>
</tr>
</tbody>
</table>

<div style="text-align: center;">&nbsp;</div>

<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="text-align:center; width:25%"><span style="font-size:16px"><strong>Người nhận h&agrave;ng</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:16px"><strong>Người thu tiền</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:16px"><strong>Người lập</strong></span></td>
<td style="text-align:center; width:25%"><span style="font-size:16px"><strong>Trưởng đơn vị</strong></span></td>
</tr>
<tr>
<td style="text-align:center"><span style="font-size:16px"><strong>(K&yacute;, họ t&ecirc;n)</strong></span></td>
<td style="text-align:center"><span style="font-size:16px"><strong>(K&yacute;, họ t&ecirc;n)</strong></span></td>
<td style="text-align:center"><span style="font-size:16px"><strong>(K&yacute;, họ t&ecirc;n)</strong></span></td>
<td style="text-align:center"><span style="font-size:16px"><strong>(K&yacute;, họ t&ecirc;n)</strong></span></td>
</tr>
<tr>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center"><br />
<br />
<br />
<br />
<span style="font-size:16px"><strong>Phan Thị Khuyến Hạnh</strong></span></td>
</tr>
</tbody>
</table>
',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:37:01',
				'updated_at' => '2015-07-28 11:49:50',
			),
			6 => 
			array (
				'id' => 7,
				'name' => 'Danh sách đại lý trả',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>

<p style="text-align:center"><span style="font-size:28px"><strong>Danh S&aacute;ch Đại L&yacute; Trả</strong></span></p>

<p style="text-align:center"><span style="font-size:26px">{{$table_list}}</span></p>
',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:37:52',
				'updated_at' => '2015-07-28 13:58:10',
			),
			7 => 
			array (
				'id' => 8,
				'name' => 'Danh sách đơn hàng',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>

<p style="text-align:center"><span style="font-size:28px"><strong>Danh S&aacute;ch Đơn H&agrave;ng</strong></span></p>

<p style="text-align:center"><span style="font-size:26px">{{$table_list}}</span></p>
',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:38:01',
				'updated_at' => '2015-07-28 13:58:23',
			),
			8 => 
			array (
				'id' => 9,
				'name' => 'Danh sách mua hàng',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>

<p style="text-align:center"><span style="font-size:28px"><strong>Danh S&aacute;ch Mua&nbsp;H&agrave;ng</strong></span></p>

<p style="text-align:center"><span style="font-size:26px">{{$table_list}}</span></p>
',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:38:13',
				'updated_at' => '2015-07-28 13:57:55',
			),
			9 => 
			array (
				'id' => 10,
				'name' => 'Danh sách trả NCC',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>

<p style="text-align:center"><span style="font-size:28px"><strong>Danh S&aacute;ch Trả H&agrave;ng NCC</strong></span></p>

<p style="text-align:center"><span style="font-size:26px">{{$table_list}}</span></p>
',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:38:21',
				'updated_at' => '2015-07-28 13:58:02',
			),
			10 => 
			array (
				'id' => 11,
				'name' => 'Công nợ NCC',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:50:13',
				'updated_at' => '2015-07-23 13:41:22',
			),
			11 => 
			array (
				'id' => 12,
				'name' => 'Công nợ NCC tháng',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:50:45',
				'updated_at' => '2015-07-23 13:41:40',
			),
			12 => 
			array (
				'id' => 13,
				'name' => 'Công nợ NCC năm',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:50:52',
				'updated_at' => '2015-07-23 13:41:28',
			),
			13 => 
			array (
				'id' => 14,
				'name' => 'Công nợ KH năm',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:51:05',
				'updated_at' => '2015-07-23 13:41:08',
			),
			14 => 
			array (
				'id' => 15,
				'name' => 'Công nợ KH tháng',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:51:09',
				'updated_at' => '2015-07-23 13:41:15',
			),
			15 => 
			array (
				'id' => 16,
				'name' => 'Công nợ KH',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:51:14',
				'updated_at' => '2015-07-23 13:41:00',
			),
			16 => 
			array (
				'id' => 17,
				'name' => 'Doanh thu KH',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:51:44',
				'updated_at' => '2015-07-23 13:44:46',
			),
			17 => 
			array (
				'id' => 18,
				'name' => 'Doanh thu KH tháng',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:51:50',
				'updated_at' => '2015-07-23 13:44:52',
			),
			18 => 
			array (
				'id' => 19,
				'name' => 'Doanh thu KH năm',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:51:56',
				'updated_at' => '2015-07-23 13:45:05',
			),
			19 => 
			array (
				'id' => 20,
				'name' => 'Doanh số nhân viên',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:52:08',
				'updated_at' => '2015-07-23 13:42:31',
			),
			20 => 
			array (
				'id' => 21,
				'name' => 'Doanh số sản phẩm',
				'template' => '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
<tbody>
<tr>
<td style="height:151px; width:211px"><span style="font-size:20px"><img alt="" src="http://khuongnhi2.com/upload/64817163917fef09563ef756685a88d9.jpg" style="float:left; height:151px; width:191px" /></span></td>
<td style="vertical-align:baseline"><span style="font-size:20px"><strong>CƠ SỞ MAY KHƯƠNG NHI</strong></span><br />
<span style="font-size:16px">ĐC: 33/6 ĐƯỜNG SỐ 19, P5, G&Ograve; VẤP<br />
<strong>SHOP KHƯƠNG NHI</strong><br />
ĐC: 5 ĐINH TI&Ecirc;N HO&Agrave;NG, P3, B&Igrave;NH THẠNH - ĐT&nbsp;<strong>08.&nbsp;35171589</strong><br />
Li&ecirc;n hệ trực tiếp:&nbsp;<strong>KHƯƠNG NHI&nbsp;0903 681 447</strong><br />
Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;<strong>091 88 44 179</strong></span></td>
</tr>
</tbody>
</table>',
				'created_by' => 0,
				'updated_by' => 0,
				'created_at' => '2015-07-22 09:52:15',
				'updated_at' => '2015-07-23 13:42:41',
			),
		));
	}

}

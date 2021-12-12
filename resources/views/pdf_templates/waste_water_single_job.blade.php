<!doctype html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Sans Sinhala', sans-serif;
        }

    </style>
</head>

<body>
<div>
        <div style="clear:both;">
            <p style="margin-top: 0pt; margin-bottom: 0pt; text-align: left; line-height: normal; font-size: 10pt;">
                <strong><span> අනු</span></strong><strong>&nbsp;</strong><strong><span>අංකය</span></strong><strong>:
                    {{$invoice->quotation_no}}</strong></p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:normal;">&nbsp;</p>
        </div>
        <p style="margin-top:12pt; margin-bottom:8pt;">
            <br><br><br><br><br>{{$invoice->visiting->user_address}}<span style="width:33pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </span><span>දිනය</span> :<span style="width:6.87pt; display:inline-block;">&nbsp;</span>{{$invoice->created_at->format('Y-m-d')}}
        </p>
        <p style="margin-top:0pt; margin-bottom:8pt;">
            <span style="width:33pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </span><span>දු</span>. <span>ක</span> :<span
                style="width:8.74pt; display:inline-block;">&nbsp;</span>{{$invoice->visiting->contact_no}}
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        </p>

        <p style="margin-top: 12pt; margin-bottom: 8pt; text-align: left; line-height: 107%; font-size: 10pt;">
            <br><span>{{intval($invoice->wasteWaterSingleJobInvoices[0]['quantity'])}}දෙනෙකුගේ භාවිතයට වැසිකිලි පද්ධතියට පරවැව ඉදිකිරිම සඳහා
                ඇස්තමේන්තුව.</span></u></strong><u><span dir="rtl"
                    style="font-family:'Iskoola Pota'; font-weight:bold;">.</span></u></p>
        {{-- <table cellpadding="0" cellspacing="0"
            style="width:495.5pt; border:0.75pt solid #000000; border-collapse:collapse;"> --}}
            <table border="1" style="width:495.5pt; border:0.75pt solid #000000; border-collapse:collapse;">
            <tbody>
                <tr style="height:34.15pt;">
                    <td
                        style="width: 14.8485%; border-right-style: solid; border-right-width: 0.75pt; border-bottom-style: solid; border-bottom-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span style="font-family:'Iskoola Pota';">අනු</span><span dir="rtl"
                                style="font-weight:bold;">&nbsp;</span>අංකය</p>
                    </td>
                    <td
                        style="width: 28.1818%; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; border-bottom-style: solid; border-bottom-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span style="font-family:'Iskoola Pota';">විස්තරය</span></p>
                    </td>
                    <td
                        style="width:35.35pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span style="font-family:'Iskoola Pota';">ඒකකය</span></p>
                    </td>
                    <td
                        style="width:38.7pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span
                                    style="font-family:'Iskoola Pota';">ප්</span>&zwj;<span
                                    style="font-family:'Iskoola Pota';">රමාණය</span></p>
                    </td>
                    <td
                        style="width:61.85pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                           <span
                                    style="font-family:'Iskoola Pota';">එකක</span>&nbsp;<span
                                    style="font-family:'Iskoola Pota';">මිල</span></p>
                    </td>
                    <td
                        style="width:83.05pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span style="font-family:'Iskoola Pota';">මුදල</span></p>
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[1]['width']}} x {{$invoice->wasteWaterSingleJobInvoices[1]['height']}} x {{$invoice->wasteWaterSingleJobInvoices[1]['length']}}
                        &nbsp;<span>ප්‍රමාණයට කාමර ………. ග්‍රීස් ට්‍රැප් එකක් ඉදිකිරිම.</span></td>
                    <td><span>ගණන</span></td>
                    <td><span dir="rtl">{{$invoice->wasteWaterSingleJobInvoices[1]['quantity']}}</span></td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[1]['unit_price']}}</td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[1]['total']}}</td>
                </tr>
                <tr>
                    <td>02</td>
                    <td><span>අපජලය සදහා වැලිපෙරණය ඉදිකිරිම.</span></td>
                    <td><span>ගණන</span></td>
                    <td><span dir="rtl">{{$invoice->wasteWaterSingleJobInvoices[2]['quantity']}}</span></td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[2]['unit_price']}}</td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[2]['total']}}</td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[3]['width']}} x {{$invoice->wasteWaterSingleJobInvoices[3]['height']}} x {{$invoice->wasteWaterSingleJobInvoices[3]['length']}}
                        &nbsp;<span>ප්‍රමාණයට අපජලය සදහා අවශෝෂණ පරවැව ඉදිකිරිම.</span></td>
                    <td><span>ගණන</span></td>
                    <td><span dir="rtl">{{$invoice->wasteWaterSingleJobInvoices[3]['quantity']}}</span></td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[3]['unit_price']}}</td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[3]['total']}}</td>
                </tr>
                <tr>
                    <td>04</td>
                    <td><span>ප්‍රවාහන ගාස්තු</span></td>
                    <td><span>අයිතම</span></td>
                    <td><span dir="rtl">{{$invoice->wasteWaterSingleJobInvoices[4]['quantity']}}</span></td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[4]['unit_price']}}</td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[4]['total']}}</td>
                </tr>
                <tr>
                    <td>05</td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[5]['extra_item'] == '0' || $invoice->wasteWaterSingleJobInvoices[5]['extra_item']== '' || $invoice->wasteWaterSingleJobInvoices[5]['extra_item'] == 'null' ? '' : $invoice->wasteWaterSingleJobInvoices[5]['extra_item']}}</td>
                    <td></td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[5]['extra_item'] == '0' || $invoice->wasteWaterSingleJobInvoices[5]['extra_item']== '' || $invoice->wasteWaterSingleJobInvoices[5]['extra_item'] == 'null' ? '' : $invoice->wasteWaterSingleJobInvoices[5]['quantity']}}</td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[5]['extra_item'] == '0' || $invoice->wasteWaterSingleJobInvoices[5]['extra_item']== '' || $invoice->wasteWaterSingleJobInvoices[5]['extra_item'] == 'null' ? '' : $invoice->wasteWaterSingleJobInvoices[5]['unit_price']}}</td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[5]['extra_item'] == '0' || $invoice->wasteWaterSingleJobInvoices[5]['extra_item']== '' || $invoice->wasteWaterSingleJobInvoices[5]['extra_item'] == 'null' ? '' : $invoice->wasteWaterSingleJobInvoices[5]['total']}}</td>
                </tr>
                <tr>
                    <td>06</td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[6]['extra_item'] == '0' || $invoice->wasteWaterSingleJobInvoices[6]['extra_item']== '' || $invoice->wasteWaterSingleJobInvoices[6]['extra_item'] == 'null' ? '' : $invoice->wasteWaterSingleJobInvoices[6]['extra_item']}}</td>
                    <td></td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[6]['extra_item'] == '0' || $invoice->wasteWaterSingleJobInvoices[6]['extra_item']== '' || $invoice->wasteWaterSingleJobInvoices[6]['extra_item'] == 'null' ? '' : $invoice->wasteWaterSingleJobInvoices[6]['quantity']}}</td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[6]['extra_item'] == '0' || $invoice->wasteWaterSingleJobInvoices[6]['extra_item']== '' || $invoice->wasteWaterSingleJobInvoices[6]['extra_item'] == 'null' ? '' : $invoice->wasteWaterSingleJobInvoices[6]['unit_price']}}</td>
                    <td>{{$invoice->wasteWaterSingleJobInvoices[6]['extra_item'] == '0' || $invoice->wasteWaterSingleJobInvoices[6]['extra_item']== '' || $invoice->wasteWaterSingleJobInvoices[6]['extra_item'] == 'null' ? '' : $invoice->wasteWaterSingleJobInvoices[6]['total']}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4">මුළු එකතුව</td>
                    @php
                        $first=$invoice->wasteWaterSingleJobInvoices[5]['total'];
                        $second=$invoice->wasteWaterSingleJobInvoices[6]['total'];
                        if ($invoice->wasteWaterSingleJobInvoices[5]['extra_item'] == '0' || $invoice->wasteWaterSingleJobInvoices[5]['extra_item']== '' || $invoice->wasteWaterSingleJobInvoices[5]['extra_item'] == 'null') {
                            $first=0;
                        }
                        if ($invoice->wasteWaterSingleJobInvoices[6]['extra_item'] == '0' || $invoice->wasteWaterSingleJobInvoices[6]['extra_item']== '' || $invoice->wasteWaterSingleJobInvoices[6]['extra_item'] == 'null') {
                            $second=0;
                        }
                    @endphp
                    <td>{{floatval($invoice->wasteWaterSingleJobInvoices[1]['total'] + $invoice->wasteWaterSingleJobInvoices[2]['total'] + $invoice->wasteWaterSingleJobInvoices[3]['total'] + $invoice->wasteWaterSingleJobInvoices[4]['total']  + $first + $second)}}</td>
                </tr>
                {{-- <tr style="height:86.35pt;">
                    <td
                        style="width: 14.8485%; border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><br></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">01</span><span dir="ltr">.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><br></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">02.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><br></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">03.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">04.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td
                        style="width: 28.1818%; border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><br></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">{Width} x
                            {Height} x {Length}<span style="font-family:'Iskoola Pota';">ප්&zwj;රමාණයට
                                කාමර&nbsp;</span>&hellip;&hellip;&hellip;. <span
                                style="font-family:'Iskoola Pota';">ග්&zwj;රීස් ට්&zwj;රැප් එකක් ඉදිකිරිම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                                style="font-family:'Iskoola Pota';">අපජලය සදහා වැලිපෙරණය ඉදිකිරිම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">{Width} x
                        {Height} x {Length} <span style="font-family:'Iskoola Pota';">ප්&zwj;රමාණයට අපජලය සදහා
                                අවශෝෂණ පරවැව ඉදිකිරිම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                                style="font-family:'Iskoola Pota';">ප්&zwj;රවාහන ගාස්තු</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p
                            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:107%; font-size:10pt;">
                           <span style="font-family:'Iskoola Pota';">මුළු</span><span dir="rtl"
                                style="font-weight:bold;">&nbsp;</span>එකතුව</p>
                    </td>
                    <td
                        style="width:35.35pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                style="font-family:'Iskoola Pota';">ගණන</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><br></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                style="font-family:'Iskoola Pota';">ගණන</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><br></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                style="font-family:'Iskoola Pota';">ගණන</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                style="font-family:'Iskoola Pota';">අයිතම</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td
                        style="width:38.7pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">........</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">........</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">........</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">........</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td
                        style="width:61.85pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td
                        style="width:83.05pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                                style="height:0pt; text-align:left; display:block; position:absolute; z-index:3;"><br></span><strong>&nbsp;</strong>
                        </p>
                    </td>
                </tr> --}}
            </tbody>
        </table>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:107%; font-size:14pt;"><br></p>
        <p
            style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;text-align:justify;line-height:106%;font-size:16px;font-family:"Times New Roman",serif;'>
            <strong><span style='font-size:19px;line-height:106%;font-family:"Iskoola Pota",sans-serif;'>බැංකු විස්තර
                    :-</span></strong></p>
        <ul style="list-style-type: disc;">
            <li><span style='font-family:"Iskoola Pota",sans-serif;font-size:12.0pt;'>ගිණුමේ නම &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp;පරවැව ක්&zwj;රමය.</span></li>
            <li><span style='font-family:"Iskoola Pota",sans-serif;font-size:12.0pt;'>බැංකුවේ නම &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp;සම්පත් බැංකුව.</span></li>
            <li><span style='font-family:"Iskoola Pota",sans-serif;font-size:12.0pt;'>ශාඛාව &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -
                    &nbsp;පිළියන්දල.</span></li>
            <li><span style='font-family:"Iskoola Pota",sans-serif;font-size:12.0pt;'>ගිණුම් අංකය &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp;001910016616</span></li>
        </ul>
        <p
            style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;text-align:justify;line-height:normal;font-size:16px;font-family:"Times New Roman",serif;'>
            <strong><span style='font-size:19px;font-family:"Iskoola Pota",sans-serif;'>සැ. යු :-</span></strong></p>
        <ul style="list-style-type: disc;">
            <li><span style='font-family:"Iskoola Pota",sans-serif;font-size:12.0pt;'>ඔබ විසින් වැලි
                    <strong>කියුබ්&nbsp;</strong></span><strong><span
                        style="font-size:16px;">&hellip;&hellip;&nbsp;</span></strong><strong><span
                        style='font-family:"Iskoola Pota",sans-serif;font-size:12.0pt;'>ක්</span></strong><span
                    style='font-family:"Iskoola Pota",sans-serif;font-size:12.0pt;'>&nbsp;ලබා දිය යුතුය.</span></li>
        </ul>
        <ul style="list-style-type: disc;margin-left:0in;">
            <li><span style='font-family:"Iskoola Pota",sans-serif;font-size:12.0pt;'>ඇස්තමේන්තු ගත මුදලින් 50%ක
                    තැන්පතුවක් වැඩ ආරම්භ කිරීමට ප්&zwj;රථම අවශ්&zwj;ය වෙයි. වැඩ අවසන් වූ පසු ඉතිරි මුදල ගෙවිය
                    යුතුය.</span></li>
        </ul>
        <ul style="list-style-type: disc;">
            <li><span style='font-family:"Iskoola Pota",sans-serif;font-size:12.0pt;'>ඇස්තමේන්තුව වලංගු කාලය දින
                    45කි.</span></li>
            <li><span style='font-family:"Iskoola Pota",sans-serif;font-size:12.0pt;'>අපජල පද්ධතියේ ඉදිකිරීම් සදහා වසර
                    10ක වගකීමක් ඇත. ක්&zwj;රියාකාරීත්වය පවතිනුයේ නඩත්තුව මතය.</span></li>
            <li><span style='font-family:"Iskoola Pota",sans-serif;font-size:12.0pt;'>වල කැපීමේදී අපජල බටය
                    <strong>(2&rdquo; PVC බටය)</strong> මට්ටමේ සිට අඩි&nbsp;</span><span dir="RTL"
                    style='font-family:"Iskoola Pota",sans-serif;font-size:12.0pt;'>........</span><span
                    style='font-family:"Iskoola Pota",sans-serif;font-size:12.0pt;'>ක් හෝ ඊට ඉහලින් භූගත ජල මට්ටම පවතී
                    නම්, ඇස්තමේන්තුගත මිල ගණන් වෙනස් වනු ඇත.&nbsp;</span></li>
        </ul>
        <p
            style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:.5in;text-align:justify;font-size:16px;font-family:"Times New Roman",serif;line-height:115%;'>
            <span style="line-height:115%;">&nbsp;</span></p>
        <p
            style='margin-top:12.0pt;margin-right:0in;margin-bottom:0in;margin-left:0in;text-align:justify;line-height:115%;font-size:16px;font-family:"Times New Roman",serif;'>
            <span style='line-height:115%;font-family:"Iskoola Pota",sans-serif;'>කිසියම් ගැටළුවක් ඇතොත් ඕනෑම අවස්ථාවක
                පිළිතුරු සැපයීමට අප ඔබ වෙනුවෙන් කැපවී සිටින බවත්, ඒ සදහා අප හා සම්බන්ධ වන ලෙසත් දන්වමු.</span></p>
        <p
            style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;text-align:justify;line-height:115%;font-size:16px;font-family:"Times New Roman",serif;'>
            <span style="font-size:9px;line-height:115%;">&nbsp;</span></p>
        <p
            style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;text-align:justify;line-height:115%;font-size:16px;font-family:"Times New Roman",serif;'>
            <span style="font-size:9px;line-height:115%;">&nbsp;</span></p>
        <p
            style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;text-align:justify;line-height:115%;font-size:16px;font-family:"Times New Roman",serif;'>
            <span style="font-size:9px;line-height:115%;">&nbsp;</span></p>
        <p
            style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;text-align:justify;line-height:115%;font-size:16px;font-family:"Times New Roman",serif;'>
            <span style="font-size:9px;line-height:115%;">&nbsp;</span></p>
        <p
            style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;text-align:justify;line-height:106%;font-size:16px;font-family:"Times New Roman",serif;'>
            <span style="font-size:12px;line-height:106%;">&nbsp;</span></p>
        <p
            style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;text-align:justify;line-height:106%;font-size:16px;font-family:"Times New Roman",serif;'>
            <span dir="RTL"
                style='line-height:106%;font-family:"Iskoola Pota",sans-serif;'>....................................
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp;....................................</span></p>
        <p style="margin-top:12pt; margin-bottom:0pt; line-height:115%;"><span
                style="font-family:'Iskoola Pota';">කිසියම්</span> <span
                style="font-family:'Iskoola Pota';">ගැටළුවක්</span> <span
                style="font-family:'Iskoola Pota';">ඇතොත්</span> <span style="font-family:'Iskoola Pota';">ඕනෑම</span>
            <span style="font-family:'Iskoola Pota';">අවස්ථාවක</span> <span
                style="font-family:'Iskoola Pota';">පිළිතුරු</span> <span
                style="font-family:'Iskoola Pota';">සැපයීමට</span> <span style="font-family:'Iskoola Pota';">අප</span>
            <span style="font-family:'Iskoola Pota';">ඔබ</span> <span
                style="font-family:'Iskoola Pota';">වෙනුවෙන්</span> <span
                style="font-family:'Iskoola Pota';">කැපවී</span> <span style="font-family:'Iskoola Pota';">සිටින</span>
            <span style="font-family:'Iskoola Pota';">බවත්</span>, <span style="font-family:'Iskoola Pota';">ඒ</span>
            <span style="font-family:'Iskoola Pota';">සදහා</span> <span style="font-family:'Iskoola Pota';">අප</span>
            <span style="font-family:'Iskoola Pota';">හා</span> <span style="font-family:'Iskoola Pota';">සම්බන්ධ</span>
            <span style="font-family:'Iskoola Pota';">වන</span> <span style="font-family:'Iskoola Pota';">ලෙසත්</span>
            <span style="font-family:'Iskoola Pota';">දන්වමු</span>.</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:7pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:7pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:7pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:7pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:107%; font-size:9pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt;"><span dir="rtl">....................................</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </span><span
                dir="rtl">....................................</span></p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-indent:36pt;"><span>දිනය</span><span
                style="width:13.2pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">
                &nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span>අත්සන</span><span
                dir="rtl">&nbsp;</span></p>
    </div>
    
</body>

</html>

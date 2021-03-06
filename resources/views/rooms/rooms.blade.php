@extends('partials.nav_side')


@section('page_title', 'Gestion des pieces')

@section('css')
    <link rel="stylesheet" href="./css/plan_ch.css"/>
@stop

@section('content')


    <div class="row">
        <div class="col-lg-8 col-md-12 col-12 col-sm-12">
            <div class="card">

                <div class="card-body align-content-center text-center map">
                    {{--<div id="mapid">--}}
                    <svg version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                         y="0px" viewBox="0 0 740 458" xml:space="preserve">


<g id="Calque_30">
    <g id="XMLID_6_">
        <path id="XMLID_5_" fill="none" stroke="#000000" stroke-miterlimit="10" d="M730.1962,0l3.1446,449.4884l-104.2385,0.7292
			l-0.0646-9.2466l-100.0312,0.6998l0.0647,9.2466l-102.553,0.7175l-33.0538-38.4382l-47.92-0.5054L309.6515,449.09
			l-100.0371-0.1408l-0.0647-9.2466l-99.1847,1.5345l0.0647,9.2466l-100.0429-0.9814L8.3991,165.3802l195.8652-0.5296
			l-0.394-56.3201l362.3096-0.8534C566.1799,107.6771,562.6385,15.2883,730.1962,0z"/>
        <path id="XMLID_1_" fill="none" stroke="#000000" stroke-miterlimit="10" d="M345.5443,412.6914"/>

        <rect id="XMLID_8_" x="690.0532" y="296.5071" transform="matrix(-0.0071 -1 1 -0.0071 400.6451 1012.8564)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="26.2787" height="22.0121"/>

        <line id="XMLID_12_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="729.4368" y1="321.2361"
              x2="685.0601" y2="321.5466"/>

        <line id="XMLID_13_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="691.7175" y1="334.9912"
              x2="691.3272" y2="279.2061"/>
        <path id="XMLID_564_" fill="none" stroke="#000000" stroke-miterlimit="10" d="M729.5007,294.1894l-14.7319,0.1031
			l-23.8593,0.1669l-0.4061-16.9502l-1.6465-0.0584c0,0-11.9471,0.6767-11.8419,14.3961"/>
        <polyline id="XMLID_563_" fill="none" stroke="#000000" stroke-miterlimit="10" points="673.8728,291.8688 663.0996,291.9442
			662.817,251.5448 658.777,251.573 658.4536,205.3381 664.8646,205.2933 668.329,205.269 669.1013,251.5008 663.5278,251.649 		"/>

        <line id="XMLID_562_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="665.0091" y1="192.0887"
              x2="665.1014" y2="205.2916"/>
        <polyline id="XMLID_561_" fill="none" stroke="#000000" stroke-miterlimit="10" points="664.8946,175.7191 664.8082,163.3827
			729.8088,163.8791 729.601,251.7821 696.7454,252.0119 688.2637,260.4915 		"/>


        <line id="XMLID_23_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="600.658" y1="292.381" x2="566.9664"
              y2="292.6167"/>
        <polyline id="XMLID_20_" fill="none" stroke="#000000" stroke-miterlimit="10" points="579.5372,274.1993 579.4467,261.2527
			604.9442,261.0744 		"/>

        <line id="XMLID_24_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="586.3285" y1="205.8427"
              x2="604.5569" y2="205.7152"/>
        <path id="XMLID_22_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M566.9664,292.6167
			c-2.032-16.9338-15.4172-15.4421-15.4172-15.4421"/>
        <polyline id="XMLID_26_" fill="none" stroke="#000000" stroke-miterlimit="10" points="551.1802,277.4873 551.2867,292.7264
			548.0853,292.7488 547.6229,234.2645 		"/>
        <polygon id="XMLID_25_" fill="none" stroke="#000000" stroke-miterlimit="10" points="542.1899,234.3025 542.0866,219.5346
			547.3065,219.4981 552.5265,219.4616 552.6298,234.2295 		"/>
        <polyline id="XMLID_28_" fill="none" stroke="#000000" stroke-miterlimit="10" points="547.1985,204.0513 547.2153,206.4479
			547.3065,219.4981 		"/>

        <line id="XMLID_29_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="561.4902" y1="206.3484"
              x2="547.2153" y2="206.4479"/>


        <polyline id="XMLID_545_" fill="none" stroke="#000000" stroke-miterlimit="10" points="626.7014,205.5603 604.5569,205.7152
			605.9991,283.542 		"/>

        <rect id="XMLID_544_" x="598.3564" y="280.2855" transform="matrix(-0.007 -1 1 -0.007 324.5654 892.6836)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="14.3129" height="9.81"/>

        <line id="XMLID_543_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="651.2806" y1="205.3883"
              x2="658.4536" y2="205.3381"/>
        <path id="XMLID_542_" fill="none" stroke="#000000" stroke-miterlimit="10" d="M663.0996,291.9442l-4.04,0.0283l-0.1001-14.3125
			c0,0-9.963-2.4499-13.1563,14.4053c3.0972-0.0217-35.3354,0.2472-35.3354,0.2472"/>
        <polyline id="XMLID_541_" fill="none" stroke="#000000" stroke-miterlimit="10" points="622.8915,175.5441 622.8085,163.6765
			664.8082,163.3827 		"/>
        <polyline id="XMLID_540_" fill="none" stroke="#000000" stroke-miterlimit="10" points="606.5989,261.0628 630.5443,260.8953
			630.6349,273.8418 		"/>


        <polyline id="XMLID_31_" fill="none" stroke="#000000" stroke-miterlimit="10" points="546.6301,206.4523 492.3074,206.8321
			492.9111,293.1348 528.8587,292.8833 		"/>

        <line id="XMLID_32_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="506.0419" y1="270.4823"
              x2="492.7533" y2="270.5753"/>

        <line id="XMLID_33_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="547.6612" y1="270.1911"
              x2="544.8856" y2="270.2105"/>
        <polyline id="XMLID_27_" fill="none" stroke="#000000" stroke-miterlimit="10" points="544.0582,277.1989 544.1702,293.2007
			548.0883,293.1733 		"/>

        <rect id="XMLID_39_" x="491.5751" y="193.5902" transform="matrix(0.007 1 -1 0.007 694.5536 -300.5528)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="14.0662" height="11.6964"/>


        <line id="XMLID_36_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="519.2479" y1="279.4441"
              x2="519.1845" y2="270.3904"/>

        <line id="XMLID_37_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="522.1051" y1="270.3699"
              x2="515.8259" y2="270.4138"/>

        <rect id="XMLID_34_" x="437.0395" y="238.0742" transform="matrix(-0.007 -1 1 -0.007 247.9731 732.3231)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="101.1119" height="9.9302"/>

        <line id="XMLID_41_" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="505.239"
              y1="155.7037" x2="505.596" y2="206.7391"/>
        <path id="XMLID_35_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M528.8587,292.8833
			c1.795-16.9605,15.1997-15.6563,15.1997-15.6563"/>

        <line id="XMLID_521_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="535.6581" y1="107.7555"
              x2="535.802" y2="128.3212"/>
        <polyline id="XMLID_520_" fill="none" stroke="#000000" stroke-miterlimit="10" points="538.8266,155.4688 538.8881,164.2636
			548.5501,164.196 		"/>

        <line id="XMLID_519_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="504.4239" y1="107.974"
              x2="504.5678" y2="128.5397"/>
        <polyline id="XMLID_518_" fill="none" stroke="#000000" stroke-miterlimit="10" points="440.1268,108.4239 440.422,150.617
			440.7172,192.8101 412.3904,193.0083 412.2587,174.1877 418.2538,174.3418 417.6808,150.7761 		"/>
        <polyline id="XMLID_517_" fill="none" stroke="#000000" stroke-miterlimit="10" points="412.0332,141.9547 412.0952,150.8152
			440.422,150.617 		"/>

        <line id="XMLID_516_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="411.8992" y1="122.8042" x2="411.8"
              y2="108.622"/>
        <polygon id="XMLID_515_" fill="none" stroke="#000000" stroke-miterlimit="10" points="412.304,180.6546 392.4811,198.7478
			412.4296,198.6082 		"/>

        <line id="XMLID_514_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="440.6503" y1="183.2493"
              x2="412.3235" y2="183.4474"/>
        <polygon id="XMLID_513_" fill="none" stroke="#000000" stroke-miterlimit="10" points="412.8016,251.7927 412.5536,216.3417
			448.8844,216.0875 448.8926,217.2607 449.1324,251.5385 		"/>


        <line id="XMLID_511_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="412.8016" y1="251.7927"
              x2="448.8844" y2="216.0875"/>

        <line id="XMLID_509_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="412.5536" y1="216.3417"
              x2="449.1324" y2="251.5385"/>
        <polygon id="XMLID_508_" fill="none" stroke="#000000" stroke-miterlimit="10" points="413.09,293.0177 412.842,257.5667
			450.3141,257.3046 450.3223,258.4778 450.5621,292.7556 		"/>

        <line id="XMLID_507_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="413.09" y1="293.0177"
              x2="450.3141" y2="257.3046"/>

        <line id="XMLID_506_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="412.842" y1="257.5667"
              x2="450.5621" y2="292.7556"/>


        <line id="XMLID_504_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="441.8586" y1="207.1165"
              x2="441.9169" y2="215.452"/>

        <line id="XMLID_503_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="392.4811" y1="198.7478" x2="392.7"
              y2="230.0369"/>

        <line id="XMLID_502_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="441.9217" y1="216.1363"
              x2="392.6052" y2="216.4813"/>

        <line id="XMLID_501_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="451.0323" y1="293.7693"
              x2="410.3965" y2="294.0536"/>


        <polyline id="XMLID_56_" fill="none" stroke="#000000" stroke-miterlimit="10" points="325.545,295.9208 304.7992,276.268
			304.6631,256.8185 324.5028,229.7036 412.6484,229.8974 412.4733,293.022 410.3894,293.0366 		"/>
        <polyline id="XMLID_63_" fill="none" stroke="#000000" stroke-miterlimit="10" points="340.4778,279.0287 340.5823,293.9632
			393.1479,294.0585 		"/>

        <line id="XMLID_64_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="365.1387" y1="262.5316"
              x2="365.3589" y2="294.0081"/>

        <line id="XMLID_65_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="407.5054" y1="277.9742"
              x2="407.618" y2="294.0731"/>
        <path id="XMLID_66_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M406.8981,278.1742
			c0,0-11.5486-0.7029-13.7529,15.4964"/>
        <path id="XMLID_67_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M340.4778,279.0308
			c0,0-12.7299,0.6282-14.445,16.8866"/>


        <rect id="XMLID_244_" x="351.2201" y="305.3081" transform="matrix(-0.007 -1 1 -0.007 59.7664 674.4102)"
              fill="#EF4242" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" width="27.0349"
              height="4.4442"/>

        <rect id="XMLID_245_" x="206.0226" y="318.3517" transform="matrix(0.007 1 -1 0.007 536.5182 119.7774)"
              fill="#EF4242" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" width="3.8548"
              height="23.3587"/>

        <rect id="XMLID_246_" x="235.1761" y="400.0039" transform="matrix(-0.007 -1 1 -0.007 -161.4731 650.5408)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="14.1803" height="10.8802"/>
        <polyline id="XMLID_484_" fill="none" stroke="#000000" stroke-miterlimit="10" points="353.3203,108.1784 354.7302,202.6054
			332.6627,202.7598 323.0443,192.6809 313.3278,192.7489 		"/>
        <polyline id="XMLID_483_" fill="none" stroke="#000000" stroke-miterlimit="10" points="351.8703,206.4021 335.9037,206.5138
			335.8773,202.7373 		"/>

        <line id="XMLID_482_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="336.0661" y1="229.729"
              x2="336.0376" y2="225.6568"/>
        <path id="XMLID_481_" fill="none" stroke="#000000" stroke-miterlimit="10" d="M337.7535,222.1641"/>
        <path id="XMLID_480_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M351.576,207.2103
			c0,0,3.6794,9.6913-14.1219,15.0369"/>


        <line id="XMLID_75_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="296.4955" y1="108.576"
              x2="296.6295" y2="127.7256"/>

        <rect id="XMLID_72_" x="279.6738" y="135.0728" transform="matrix(0.007 1 -1 0.007 434.2059 -157.5368)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="33.5011" height="9.5717"/>
        <polyline id="XMLID_77_" fill="none" stroke="#000000" stroke-miterlimit="10" points="354.1738,165.3391 332.4019,165.4914
			326.543,174.5277 		"/>
        <polyline id="XMLID_68_" fill="none" stroke="#000000" stroke-miterlimit="10" points="297.6987,176.9049 297.8103,192.8574
			296.0701,192.8696 295.8164,156.6139 		"/>
        <path id="XMLID_79_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M313.3278,192.7489
			c0,0-0.9969-18.1218-15.629-15.8439"/>


        <polyline id="XMLID_469_" fill="none" stroke="#000000" stroke-miterlimit="10" points="291.9084,178.4559 292.0094,192.898
			296.2613,192.8683 296.0076,156.6126 		"/>
        <path id="XMLID_468_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M277.8962,194.9371
			c0,0-1.4775-17.364,14.0122-16.4813"/>

        <path id="XMLID_457_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10"
              d="M265.6551,189.6833"/>
        <polyline id="XMLID_456_" fill="none" stroke="#000000" stroke-miterlimit="10" points="232.373,108.4633 233.7961,202.9582
			265.744,202.3957 265.6823,193.5818 265.6479,188.6664 		"/>

        <line id="XMLID_455_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="276.19" y1="193.3388"
              x2="265.6811" y2="193.4123"/>
        <polyline id="XMLID_454_" fill="none" stroke="#000000" stroke-miterlimit="10" points="233.2359,165.7573 255.3162,165.6029
			261.2261,174.4588 		"/>
        <polyline id="XMLID_453_" fill="none" stroke="#000000" stroke-miterlimit="10" points="254.9735,202.81 255.5108,279.621
			247.9975,279.6736 248.0949,293.5952 263.1491,293.4898 224.8647,293.7577 224.7295,274.4221 		"/>

        <line id="XMLID_450_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="254.2249" y1="261.6471"
              x2="228.3153" y2="261.8283"/>

        <line id="XMLID_449_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="222.094" y1="284.6596"
              x2="221.9887" y2="269.6149"/>
        <path id="XMLID_448_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M208.1724,284.757
			c0,0,0.4749-15.041,12.4628-15.1326"/>
        <polyline id="XMLID_88_" fill="none" stroke="#000000" stroke-miterlimit="10" points="73.8276,165.2032 74.0995,204.0754
			235.4092,202.9298 		"/>

        <rect id="XMLID_90_" x="152.8723" y="146.2173" transform="matrix(0.007 1 -1 0.007 326.7503 6.2971)"
              fill="#67A571" stroke="#000000" stroke-miterlimit="10" width="14.6643" height="42.9068"/>

        <line id="XMLID_98_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="74.0995" y1="204.0754" x2="65.139"
              y2="204.1376"/>
        <polyline id="XMLID_440_" fill="none" stroke="#000000" stroke-miterlimit="10" points="13.6161,253.6972 42.1294,253.4977
			52.5112,262.3868 		"/>
        <polyline id="XMLID_439_" fill="none" stroke="#000000" stroke-miterlimit="10" points="9.2984,293.9195 52.7297,293.6157
			52.668,284.7901 52.6062,275.9646 		"/>

        <line id="XMLID_438_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="56.6235" y1="284.7625" x2="52.668"
              y2="284.7901"/>
        <polyline id="XMLID_437_" fill="none" stroke="#000000" stroke-miterlimit="10" points="71.5661,268.8289 71.6768,284.6572
			74.6631,284.6363 74.4171,249.4698 		"/>

        <rect id="XMLID_436_" x="50.2034" y="221.3506" transform="matrix(0.007 1 -1 0.007 299.1677 152.2958)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="45.396" height="10.8625"/>
        <path id="XMLID_435_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M56.6225,285.1576
			c0,0,0.4681-16.2274,14.9436-16.3286"/>


        <polyline id="XMLID_104_" fill="none" stroke="#000000" stroke-miterlimit="10" points="131.0474,207.1814 131.4346,262.5182
			131.5528,279.4191 		"/>
        <polyline id="XMLID_105_" fill="none" stroke="#000000" stroke-miterlimit="10" points="107.6469,262.0696 131.4317,262.1142
			156.9922,261.9354 		"/>
        <polyline id="XMLID_101_" fill="none" stroke="#000000" stroke-miterlimit="10" points="106.1744,276.4965 106.2999,294.4437
			131.6567,294.2663 		"/>

        <rect id="XMLID_106_" x="124.7253" y="281.577" transform="matrix(-0.007 -1 1 -0.007 -153.7583 420.9913)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="14.8476" height="10.5238"/>


        <line id="XMLID_102_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="104.3544" y1="285.7573"
              x2="104.2496" y2="270.7836"/>
        <path id="XMLID_103_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M90.2762,284.9221
			c0,0,2.7845-14.6015,13.9735-14.1385"/>
        <path id="XMLID_96_" fill="none" stroke="#000000" stroke-miterlimit="10" d="M74.6631,284.6363l14.3474-0.1004L74.6631,284.6363z
			"/>

        <rect id="XMLID_111_" x="176.0695" y="231.3261" transform="matrix(0.007 1 -1 0.007 428.1798 42.313)" fill="none"
              stroke="#000000" stroke-miterlimit="10" width="33.4307" height="10.8466"/>

        <line id="XMLID_418_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="192.2701" y1="203.2487"
              x2="192.3876" y2="220.0364"/>
        <polyline id="XMLID_417_" fill="none" stroke="#000000" stroke-miterlimit="10" points="192.6214,253.4663 192.8411,284.8642
			174.6451,284.9915 		"/>
        <polyline id="XMLID_416_" fill="none" stroke="#000000" stroke-miterlimit="10" points="157.4664,276.1377 157.5919,294.0849
			137.7222,294.2239 		"/>

        <line id="XMLID_415_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="159.3014" y1="269.3991"
              x2="159.4112" y2="285.0981"/>
        <path id="XMLID_414_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M174.6396,284.2023
			c0,0-2.3595-14.6538-14.4872-14.1458"/>


        <line id="XMLID_117_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="208.1724" y1="284.757"
              x2="192.8411" y2="284.8642"/>

        <rect id="XMLID_392_" x="221.4763" y="236.5424" transform="matrix(0.007 1 -1 0.007 499.2418 -20.3805)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="76.8129" height="9.2813"/>

        <rect id="XMLID_391_" x="256.2285" y="206.8529" transform="matrix(0.007 1 -1 0.007 479.0145 -49.7223)"
              fill="#EFE02A" stroke="#000000" stroke-miterlimit="10" width="16.629" height="18.9493"/>


        <polyline id="XMLID_389_" fill="none" stroke="#000000" stroke-miterlimit="10" points="274.2921,210.6032 276.4749,210.588
			276.3893,213.2339 276.4863,212.2069 279.7969,212.1837 279.7907,211.2924 281.2083,211.1006 281.2009,210.0455 		"/>
        <polyline id="XMLID_3_" fill="none" stroke="#000000" stroke-miterlimit="10" points="729.329,366.8341 698.7316,367.0482
			691.8596,355.3031 		"/>

        <line id="XMLID_124_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="666.8131" y1="449.9539"
              x2="666.5552" y2="413.0938"/>

        <rect id="XMLID_4_" x="642.631" y="384.3969" transform="matrix(0.007 1 -1 0.007 1050.5579 -278.0599)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="45.3079" height="11.0796"/>

        <line id="XMLID_127_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="663.3077" y1="321.6988"
              x2="663.6267" y2="367.2937"/>

        <line id="XMLID_128_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="659.2625" y1="320.9601"
              x2="667.1066" y2="320.9052"/>

        <line id="XMLID_129_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="667.2368" y1="339.4997"
              x2="667.112" y2="321.6721"/>

        <line id="XMLID_137_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="659.3871" y1="338.7877"
              x2="659.2625" y2="320.9601"/>
        <path id="XMLID_130_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M682.1371,322.0013
			c0,0,0.1297,18.5132-13.9095,17.4915"/>


        <polyline id="XMLID_378_" fill="none" stroke="#000000" stroke-miterlimit="10" points="666.5552,413.0938 606.407,413.0031
			605.8655,335.5918 		"/>

        <rect id="XMLID_371_" x="598.8454" y="323.0307" transform="matrix(0.007 1 -1 0.007 930.1855 -280.2867)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="14.7492" height="10.3676"/>
        <polyline id="XMLID_370_" fill="none" stroke="#000000" stroke-miterlimit="10" points="643.7237,320.5774 631.4522,320.6632
			630.6062,320.6692 611.3521,320.8038 		"/>

        <line id="XMLID_366_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="630.709" y1="335.418"
              x2="630.6058" y2="320.6692"/>
        <polyline id="XMLID_365_" fill="none" stroke="#000000" stroke-miterlimit="10" points="630.8323,353.0407 605.9887,353.2145
			580.4764,353.393 		"/>
        <path id="XMLID_364_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M644.1469,320.5744
			c0,0,0.5961,19.1941,14.6196,17.9761"/>
        <polyline id="XMLID_144_" fill="none" stroke="#000000" stroke-miterlimit="10" points="548.3637,330.1313 505.8139,330.4289
			494.1321,320.8833 494.2587,338.9734 505.8139,330.4289 		"/>
        <polyline id="XMLID_147_" fill="none" stroke="#000000" stroke-miterlimit="10" points="493.3835,319.7249 494.0415,413.7892
			540.5889,413.4635 606.407,413.0031 		"/>

        <rect id="XMLID_145_" x="493.3525" y="400.3977" transform="matrix(-0.007 -1 1 -0.007 97.8402 909.1675)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="13.9646" height="11.214"/>

        <rect id="XMLID_148_" x="517.5247" y="354.8746" transform="matrix(0.007 1 -1 0.007 899.2209 -169.7596)"
              fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" width="35.123" height="26.0249"/>

        <line id="XMLID_150_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="519.504"
              y1="387.0385" x2="518.9251" y2="349.2758"/>

        <line id="XMLID_149_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="518.9041"
              y1="383.6579" x2="494.5725" y2="383.8281"/>

        <line id="XMLID_151_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="518.8725"
              y1="379.1444" x2="493.8004" y2="379.3198"/>

        <line id="XMLID_152_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="519.2665"
              y1="374.9802" x2="493.7713" y2="375.1585"/>

        <line id="XMLID_158_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="519.2355"
              y1="370.537" x2="493.7402" y2="370.7154"/>

        <line id="XMLID_153_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="518.8781"
              y1="349.698" x2="493.3828" y2="349.8763"/>

        <line id="XMLID_154_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="519.3372"
              y1="362.3901" x2="493.8419" y2="362.5685"/>

        <line id="XMLID_155_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="519.3665"
              y1="366.5775" x2="493.8712" y2="366.7559"/>

        <line id="XMLID_157_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="519.2728"
              y1="353.1864" x2="493.7775" y2="353.3648"/>

        <line id="XMLID_156_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="519.3061"
              y1="357.947" x2="493.8108" y2="358.1253"/>

        <line id="XMLID_159_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="506.3444"
              y1="380.3603" x2="506.1734" y2="355.9229"/>

        <line id="XMLID_169_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="547.6036"
              y1="380.2658" x2="522.5315" y2="380.4412"/>

        <line id="XMLID_168_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="547.9977"
              y1="376.1016" x2="522.5024" y2="376.28"/>

        <line id="XMLID_167_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="547.9666"
              y1="371.6585" x2="522.4713" y2="371.8368"/>

        <line id="XMLID_165_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="548.0683"
              y1="363.5116" x2="522.573" y2="363.6899"/>

        <line id="XMLID_164_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="548.0976"
              y1="367.699" x2="522.6023" y2="367.8773"/>

        <line id="XMLID_163_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="548.0039"
              y1="354.3079" x2="522.5086" y2="354.4862"/>

        <line id="XMLID_162_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="548.0372"
              y1="359.0684" x2="522.5419" y2="359.2468"/>

        <line id="XMLID_161_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="535.0754"
              y1="381.4818" x2="534.9045" y2="357.0444"/>

        <rect id="XMLID_243_" x="218.0507" y="355.9099" transform="matrix(0.007 1 -1 0.007 602.8773 130.735)"
              fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" width="35.123" height="26.0249"/>

        <line id="XMLID_242_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="220.0301"
              y1="388.0738" x2="219.4512" y2="350.3111"/>

        <line id="XMLID_241_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="219.4302"
              y1="384.6932" x2="195.0986" y2="384.8634"/>

        <line id="XMLID_240_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="219.3986"
              y1="380.1797" x2="194.3265" y2="380.3551"/>

        <line id="XMLID_239_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="219.7926"
              y1="376.0155" x2="194.2974" y2="376.1938"/>

        <line id="XMLID_238_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="219.7616"
              y1="371.5723" x2="194.2663" y2="371.7507"/>

        <line id="XMLID_237_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="219.4042"
              y1="350.7332" x2="193.9089" y2="350.9116"/>

        <line id="XMLID_236_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="219.8633"
              y1="363.4254" x2="194.368" y2="363.6038"/>

        <line id="XMLID_235_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="219.8925"
              y1="367.6128" x2="194.3973" y2="367.7912"/>

        <line id="XMLID_234_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="219.7989"
              y1="354.2217" x2="194.3036" y2="354.4001"/>

        <line id="XMLID_233_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="219.8322"
              y1="358.9822" x2="194.3369" y2="359.1606"/>

        <line id="XMLID_232_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="206.8704"
              y1="381.3956" x2="206.6995" y2="356.9582"/>

        <line id="XMLID_231_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="248.1297"
              y1="381.3011" x2="223.0576" y2="381.4765"/>

        <line id="XMLID_230_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="248.5238"
              y1="377.1369" x2="223.0285" y2="377.3153"/>

        <line id="XMLID_229_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="248.4927"
              y1="372.6938" x2="222.9974" y2="372.8721"/>

        <line id="XMLID_228_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="248.5944"
              y1="364.5468" x2="223.0991" y2="364.7252"/>

        <line id="XMLID_227_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="248.6237"
              y1="368.7343" x2="223.1284" y2="368.9126"/>

        <line id="XMLID_226_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="248.53"
              y1="355.3432" x2="223.0347" y2="355.5215"/>

        <line id="XMLID_225_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="248.5633"
              y1="360.1037" x2="223.068" y2="360.282"/>

        <line id="XMLID_224_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="234.2708"
              y1="379.7315" x2="234.0999" y2="355.2941"/>

        <rect id="XMLID_160_" x="527.4401" y="318.5412" transform="matrix(0.007 1 -1 0.007 856.3073 -202.8615)"
              fill="#E72F2F" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" width="5.7128" height="22.375"/>

        <line id="XMLID_223_" fill="none" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" x1="220.0301"
              y1="388.0738" x2="193.5644" y2="388.2589"/>
        <polyline id="XMLID_310_" fill="none" stroke="#000000" stroke-miterlimit="10" points="600.4558,320.8801 580.25,321.0214
			580.4099,343.872 		"/>


        <line id="XMLID_308_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="577.9789" y1="329.0777"
              x2="578.0973" y2="346.0041"/>
        <path id="XMLID_307_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M562.5336,329.1858
			c0,0,3.409,18.4902,14.5057,16.8257"/>
        <polyline id="XMLID_306_" fill="none" stroke="#000000" stroke-miterlimit="10" points="561.6932,330.038 548.3637,330.1313
			548.8396,398.1539 		"/>

        <rect id="XMLID_305_" x="538.842" y="400.3969" transform="matrix(-0.007 -1 1 -0.007 143.9662 954.3354)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="13.9646" height="10.5792"/>

        <line id="XMLID_166_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="493.18" y1="320.89" x2="484.1879"
              y2="320.9529"/>

        <line id="XMLID_170_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="492.9796" y1="352.7356"
              x2="458.8096" y2="352.9747"/>

        <line id="XMLID_171_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="458.9051" y1="366.6215"
              x2="458.5869" y2="321.132"/>

        <line id="XMLID_172_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="464.1937" y1="321.0928"
              x2="442.5068" y2="321.2445"/>

        <line id="XMLID_173_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="493.6611" y1="389.6532"
              x2="465.5211" y2="389.8501"/>

        <line id="XMLID_174_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="494.0415" y1="413.7892"
              x2="494.2708" y2="446.5665"/>

        <line id="XMLID_175_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="427.3382" y1="451.6292"
              x2="427.0663" y2="412.7592"/>

        <line id="XMLID_177_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="422.5074" y1="320.6439"
              x2="422.9214" y2="379.8157"/>

        <line id="XMLID_178_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="426.4217" y1="320.6165"
              x2="414.1501" y2="320.7023"/>

        <rect id="XMLID_179_" x="408.6667" y="390.5735" transform="matrix(-0.007 -1 1 -0.007 31.8502 824.2007)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="32.9717" height="11.4255"/>

        <line id="XMLID_180_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="425.9061" y1="337.653"
              x2="425.7869" y2="320.6209"/>


        <path id="XMLID_182_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M441.4687,321.2518
			c0,0-1.2722,17.5708-15.5663,15.8723"/>

        <line id="XMLID_274_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="393.4643" y1="413.1968"
              x2="422.2014" y2="412.9957"/>

        <line id="XMLID_273_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="395.034" y1="340.5139"
              x2="394.8964" y2="320.837"/>

        <line id="XMLID_272_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="394.8964" y1="320.837"
              x2="359.9858" y2="321.0813"/>

        <line id="XMLID_271_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="365.604" y1="413.3917"
              x2="365.0556" y2="335.0107"/>

        <rect id="XMLID_270_" x="358.2361" y="322.8433" transform="matrix(-0.007 -1 1 -0.007 39.7543 695.5313)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="13.9646" height="10.3676"/>

        <line id="XMLID_269_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="391.3174" y1="353.6584"
              x2="365.399" y2="353.8398"/>

        <line id="XMLID_268_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="397.9858" y1="339.0121"
              x2="397.8585" y2="320.8163"/>
        <path id="XMLID_267_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M413.0922,320.7097
			c0,0-1.0178,20.8598-15.1041,18.6308"/>


        <line id="XMLID_189_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="345.5443" y1="412.6914"
              x2="307.3081" y2="412.9589"/>

        <line id="XMLID_192_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="359.9858" y1="321.0813"
              x2="340.4148" y2="321.2182"/>

        <line id="XMLID_193_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="340.4088" y1="320.3719"
              x2="340.548" y2="340.2603"/>

        <line id="XMLID_194_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="337.5223" y1="346.3118"
              x2="337.4024" y2="329.1739"/>

        <line id="XMLID_195_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="365.399" y1="353.8398"
              x2="340.6442" y2="354.0129"/>

        <rect id="XMLID_196_" x="294.0555" y="391.6284" transform="matrix(-0.007 -1 1 -0.007 -84.8984 709.7654)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="31.808" height="10.815"/>

        <line id="XMLID_197_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="308.355" y1="381.1428"
              x2="308.001" y2="330.5433"/>

        <line id="XMLID_198_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="321.6479" y1="330.4478"
              x2="303.3463" y2="330.5758"/>
        <path id="XMLID_200_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M336.3586,346.3199
			c0,0-13.4375-0.2234-14.1818-15.8758"/>


        <line id="XMLID_218_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="308.8304" y1="449.0888"
              x2="308.5775" y2="412.95"/>

        <line id="XMLID_213_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="289.0117" y1="330.6761"
              x2="282.5413" y2="330.7214"/>

        <line id="XMLID_212_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="282.5413" y1="330.7214"
              x2="282.8699" y2="377.6936"/>

        <line id="XMLID_210_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="304.0868" y1="330.5707"
              x2="304.1978" y2="346.4296"/>

        <line id="XMLID_209_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="275.3838" y1="389.9991"
              x2="247.5998" y2="390.1935"/>

        <line id="XMLID_208_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="282.6965" y1="352.9131"
              x2="247.3446" y2="353.7111"/>

        <line id="XMLID_207_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="247.3446" y1="353.7111"
              x2="247.5998" y2="390.1935"/>

        <line id="XMLID_206_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="248.0112" y1="449.0032"
              x2="247.9504" y2="440.3052"/>

        <line id="XMLID_205_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="247.8194" y1="421.5822"
              x2="247.5998" y2="390.1935"/>

        <line id="XMLID_188_" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="246.8822"
              y1="449.0016" x2="246.6928" y2="421.59"/>
        <path id="XMLID_187_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M289.0168,331.3914
			c0,0,4.8703,17.1754,15.181,15.0382"/>


        <polyline id="XMLID_219_" display="none" fill="none" stroke="#000000" stroke-miterlimit="10" points="248.5044,326.3055
			251.3954,326.2852 251.3954,326.2852 251.9892,327.5202 252.2234,326.5548 253.6001,326.5452 254.1095,327.7807
			254.8391,326.5365 257.7302,326.5163 		"/>

        <line id="XMLID_211_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="261.0112" y1="321.3993"
              x2="247.1192" y2="321.4965"/>

        <line id="XMLID_214_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="247.3446" y1="353.7111"
              x2="247.1192" y2="321.4965"/>

        <rect id="XMLID_215_" x="231.7679" y="322.6221" transform="matrix(0.007 1 -1 0.007 569.4731 88.8445)"
              fill="#EFE02A" stroke="#000000" stroke-miterlimit="10" width="16.4691" height="17.0714"/>


        <line id="XMLID_143_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="247.7558" y1="412.496"
              x2="190.3225" y2="412.8978"/>

        <line id="XMLID_142_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="193.4588" y1="329.8571"
              x2="193.9403" y2="398.6918"/>

        <line id="XMLID_141_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="222.3732" y1="330.2055"
              x2="231.4594" y2="330.142"/>

        <rect id="XMLID_140_" x="188.4142" y="400.5396" transform="matrix(-0.007 -1 1 -0.007 -208.8893 604.1094)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="14.1803" height="10.4631"/>

        <line id="XMLID_247_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="193.4588" y1="329.8571"
              x2="176.8116" y2="329.9736"/>

        <line id="XMLID_248_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="190.3225" y1="412.8978"
              x2="133.0337" y2="413.2986"/>

        <line id="XMLID_249_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="133.0337" y1="413.2986"
              x2="132.4684" y2="332.4866"/>

        <line id="XMLID_250_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="157.9345" y1="343.0474"
              x2="157.7733" y2="320.0052"/>

        <line id="XMLID_251_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="157.7733" y1="320.0052"
              x2="106.4813" y2="320.3641"/>

        <line id="XMLID_252_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="106.4961" y1="322.4803"
              x2="106.6209" y2="340.3257"/>

        <line id="XMLID_253_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="157.6387" y1="354.3387"
              x2="108.2948" y2="354.6839"/>

        <line id="XMLID_254_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="160.6801" y1="345.4821"
              x2="160.5724" y2="330.0872"/>

        <rect id="XMLID_255_" x="124.7202" y="322.6368" transform="matrix(0.007 1 -1 0.007 459.4005 193.1718)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="15.4321" height="10.5238"/>
        <path id="XMLID_257_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M174.9483,328.3345
			c0,0-1.6285,18.5325-14.2618,18.0759"/>


        <line id="XMLID_85_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="132.7787" y1="413.3004"
              x2="76.2601" y2="413.6957"/>

        <line id="XMLID_84_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="87.722" y1="330.4345" x2="71.9979"
              y2="330.5445"/>

        <line id="XMLID_83_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="71.9979" y1="330.5445" x2="72.1056"
              y2="345.9401"/>

        <line id="XMLID_82_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="75.2406" y1="367.1732" x2="74.9842"
              y2="330.5236"/>

        <line id="XMLID_81_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="104.7796" y1="346.529"
              x2="104.6738" y2="331.4161"/>

        <rect id="XMLID_78_" x="50.7075" y="384.997" transform="matrix(-0.007 -1 1 -0.007 -315.9481 467.1484)"
              fill="none" stroke="#000000" stroke-miterlimit="10" width="46.5285" height="10.8998"/>
        <path id="XMLID_70_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M104.0509,346.5341
			c0,0-10.3847,3.3631-14.7117-15.0107"/>


        <rect id="XMLID_61_" x="40.1717" y="295.6255" transform="matrix(0.007 1 -1 0.007 348.0669 251.3769)" fill="none"
              stroke="#000000" stroke-miterlimit="10" width="14.5819" height="10.6364"/>

        <rect id="XMLID_60_" x="153.3496" y="419.3846" transform="matrix(0.007 1 -1 0.007 601.8219 277.5427)"
              fill="#67A571" stroke="#000000" stroke-miterlimit="10" width="15.6316" height="44.8205"/>


        <circle id="XMLID_91_" cx="393.7027" cy="447.2701" r="6.4608"/>
        <circle id="XMLID_279_" cx="338.2313" cy="447.6581" r="6.4608"/>
        <path id="XMLID_53_" fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M71.3442,345.9454
			c0,0-11.8107,2.2626-14.3959-14.7506"/>

        <line id="XMLID_52_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="53.1796" y1="357.9263" x2="42.6092"
              y2="367.4015"/>

        <line id="XMLID_40_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="42.6092" y1="367.4015" x2="13.8617"
              y2="367.6026"/>

        <line id="XMLID_21_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="53.0528" y1="339.8058" x2="52.9509"
              y2="325.2277"/>

        <line id="XMLID_19_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="52.9509" y1="325.2277" x2="14.1184"
              y2="325.4994"/>

        <line id="XMLID_18_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="56.1134" y1="330.6556" x2="52.989"
              y2="330.6775"/>


        <line id="XMLID_112_" fill="none" stroke="#000000" stroke-miterlimit="10" x1="74.3333" y1="414.6667"
              x2="74.3333" y2="450.6667"/>
    </g>
</g>
                        <g id="chambres">
                            <rect onmouseover="chListHover(1)" onClick="chClicked(1)" id="ch_1" x="9.75" y="165.75" class="chambre" fill="none"
                                  width="63" height="127.5"/>
                            <rect onmouseover="chListHover(2)" onClick="chClicked(2)" id="ch_2" class="chambre" x="75.5" y="204.25" fill="none"
                                  width="55" height="79.25"/>
                            <rect onmouseover="chListHover(3)" onClick="chClicked(3)" id="ch_3" class="chambre" x="132" y="204" fill="none"
                                  width="59.75" height="81.5"/>
                            <rect onmouseover="chListHover(4)" onClick="chClicked(4)" id="ch_4" class="chambre" x="193.5" y="203" fill="none"
                                  width="60.6667"
                                  height="81.3333"/>
                            <polygon onmouseover="chListHover(5)" onClick="chClicked(5)" id="balcon_1" class="chambre" fill="none" points="74.5,165.6667 204.6667,165.3333 204.1667,108.8333 232,109.1667 233.3333,202.6667
		74.3333,203.6667 	"/>
                            <rect onmouseover="chListHover(6)" onClick="chClicked(6)" id="ch_6" class="chambre" x="234.5" y="109" fill="none"
                                  width="61.5" height="93.5"/>
                            <rect onmouseover="chListHover(7)" onClick="chClicked(7)" id="ch_7" class="chambre" x="297.5" y="108.8333"
                                  fill="none" width="56.25"
                                  height="92.6667"/>
                            <polygon onmouseover="chListHover(8)" onClick="chClicked(8)" id="ch_8" class="chambre" fill="none" points="440.25,108.25 440,150.25 417.5,150.5 418.25,173.5 411.75,173.5 411.5,181.25 392.75,199
		392.5,229.5 335.75,229.5 335.75,203.5 354.75,202.25 353.75,108.8333 	"/>
                            <rect onmouseover="chListHover(9)" onClick="chClicked(9)" id="sejour" class="chambre" x="440.5" y="108" fill="none"
                                  width="64.75"
                                  height="85.25"/>
                            <rect onmouseover="chListHover(10)" onClick="chClicked(10)" id="ch_10" class="chambre" x="663" y="163.5" fill="none"
                                  width="67.5" height="129"/>
                            <rect onmouseover="chListHover(11)" onClick="chClicked(11)" id="ch_11" class="chambre" x="604.5" y="205.5" fill="none"
                                  width="58.5" height="87"/>
                            <rect onmouseover="chListHover(12)" onClick="chClicked(12)" id="ch_12" class="chambre" x="547.5" y="206.5" fill="none"
                                  width="57" height="86"/>
                            <rect onmouseover="chListHover(13)" onClick="chClicked(13)" id="ch_13" class="chambre" x="492" y="207" fill="none"
                                  width="55.5" height="85.5"/>
                            <polygon onmouseover="chListHover(14)" onClick="chClicked(14)" id="terasse" class="chambre" fill="none" points="505.5,206 505.25,108 566,107.5 569,88 577.5,72.5 588.5,56.5 605.5,40 622,30.5 638,22
		663,13.5 688,6 717,0 730.5,0 730.5,163.5 663,163.5 665,205 	"/>
                            <polygon onmouseover="chListHover(15)" onClick="chClicked(15)" id="soins_1" class="chambre" fill="none"
                                     points="411,230 323.5,229 304,257.5 304,277 324,294.5 412,294 	"/>
                            <rect onmouseover="chListHover(16)" onClick="chClicked(16)" id="ch_16" class="chambre" x="11" y="325" fill="none"
                                  width="62.6667"
                                  height="124.6667"/>
                            <rect onmouseover="chListHover(17)" onClick="chClicked(17)" id="ch_17" class="chambre" x="75.3333" y="320" fill="none"
                                  width="57.3333"
                                  height="92.6667"/>
                            <rect onmouseover="chListHover(18)" onClick="chClicked(18)" id="ch_18" class="chambre" x="132.6667" y="330"
                                  fill="none" width="61"
                                  height="82.6667"/>
                            <rect onmouseover="chListHover(28)" onClick="chClicked(28)" id="escaliers_1" class="chambre" x="193.6667" y="328.3333"
                                  fill="none" width="54.6667"
                                  height="84.3333"/>
                            <rect onmouseover="chListHover(26)" onClick="chClicked(26)" id="balcon_2" class="chambre" x="73.6667" y="413.6667"
                                  fill="none" width="173"
                                  height="35.6667"/>
                            <rect onmouseover="chListHover(19)" onClick="chClicked(19)" id="ch_19" class="chambre" x="248.6667" y="351.6667"
                                  fill="none" width="59.3333"
                                  height="96.6667"/>
                            <rect onmouseover="chListHover(20)" onClick="chClicked(20)" id="ch_20" class="chambre" x="307.6667" y="331"
                                  fill="none" width="57.6667"
                                  height="81"/>
                            <rect onmouseover="chListHover(21)" onClick="chClicked(21)" id="ch_21" class="chambre" x="366" y="320.3333"
                                  fill="none" width="56.3333"
                                  height="92.6667"/>
                            <polygon onmouseover="chListHover(22)" onClick="chClicked(22)" id="ch_22" class="chambre" fill="none" points="458.25,322 422.3333,320.3333 423.5,412 428,412 427.25,450.5 494.5,451.5 493.75,352.75
		459.5,353.25 458.2799,322.7484 	"/>
                            <rect onmouseover="chListHover(29)" onClick="chClicked(29)" id="escaliers_2" class="chambre" x="495" y="330"
                                  fill="none" width="53"
                                  height="82.75"/>
                            <rect onmouseover="chListHover(23)" onClick="chClicked(23)"  id="ch_23" class="chambre" x="548" y="330" fill="none"
                                  width="58.5" height="83"/>
                            <rect onmouseover="chListHover(24)" onClick="chClicked(24)" id="ch_24" class="chambre" x="606.5" y="321" fill="none"
                                  width="56.8333" height="92"/>
                            <rect onmouseover="chListHover(25)" onClick="chClicked(25)" id="ch_25" class="chambre" x="666" y="321" fill="none"
                                  width="66.3333"
                                  height="129.6667"/>
                            <rect onmouseover="chListHover(27)" onClick="chClicked(27)" id="balcon_3" class="chambre" x="494" y="414" fill="none"
                                  width="173" height="36"/>
                            <rect onmouseover="chListHover(30)" onClick="chClicked(30)" id="couloir_1" class="chambre" x="9.3333" y="292.6667"
                                  fill="none" width="682"
                                  height="34.6667"/>
                            <polygon onmouseover="chListHover(31)" onClick="chClicked(31)" id="couloir_2" class="chambre" fill="none" points="265.25,193.25 322.25,193.25 332,203 332,230 325,230.25 305.25,255.75 304.75,276
		325.75,296 264.75,295.25 	"/>
                            <polygon onmouseover="chListHover(32)" onClick="chClicked(32)" id="couloir_3" class="chambre" fill="none"
                                     points="440.5,193.25 481.5,192.5 483,292 450,293.5 450,215.5 442.5,216 	"/>
                        </g>
</svg>

                </div>


            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-3 col-sm-4">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Liste des chambres</span>
                </div>
                <div class="card-body p-0 rooms-list">
                    <div class="scroll">
                        <div class="table-responsive">
                            <table class="table table-md">
                                <tbody>
                                @foreach($rooms as $r)
                                    <tr id="tr_{{$loop->iteration}}"
                                        class="{{$r->type == \App\Enums\PieceTypes::SOINS ? 'is-soins' : ''}} {{$r->isInterdite == 1 ? 'is-interdite' : ''}}"
                                        onmouseover="chListHover({{$loop->iteration}})">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$r->name}}</td>
                                        <td>
                                            <a class="btn btn-outline-info btn-sm edit-room-btn"
                                               data-id="{{$r->id}}"
                                               data-json_index="{{$loop->index}}"
                                               data-name="{{$r->name}}"
                                               data-is_interdite="{{$r->isInterdite}}"
                                               data-is_soins="{{$r->type == \App\Enums\PieceTypes::SOINS}}"
                                               data-remodal-target="room-edit"
                                               data-toggle="tooltip"
                                               data-original-title="Modifier le nom et le type de la piece">Modifier</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @include('rooms.edit_modal')


@stop

@section('js')
    <script>
        $('body').addClass("sidebar-mini")
    </script>
    <script src="./js/plan_ch.js"></script>
    <script>
        $(document).ready(function () {

            var height = $('.map').height();
            $('.rooms-list').height(height + 50);

            $('.edit-room-btn').click(function () {
                var btn = $(this);

                var id = btn.data('id');
                var name = btn.data('name');
                var isInterdite = btn.data('is_interdite');
                var isSoins = btn.data('is_soins');
                var jsonIndex = btn.data('json_index');

                $('#room-edit .id').val(id);
                $('#room-edit .name').val(name);
                $('#room-edit .is-interdite').prop('checked', isInterdite);
                $('#room-edit .is-soins').prop('checked', isSoins);
                var data = JSON.stringify(rooms[jsonIndex]);
                $('#room-edit .data').val(data);
            });
        })
    </script>
@stop

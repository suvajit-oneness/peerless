<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

    {{-- <link rel="stylesheet" href="{{ public_path('admin/dist/css/adminlte.min.css') }}"> --}}

    <style>
        .page-break {
            page-break-after: always;
        }
        @page { margin: 0px; }
        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            margin: 0;
            padding: 0;
        }
        /* .text-decoration-underline {
            text-decoration: underline;
        }
        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            margin-bottom: 0;
            }
        p {
            color: #1a202c;
            font-size: 12px;
        }
        .text-center {
            text-align: center
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        table td, table th {
            border: 1px solid #464646;
            text-align: left;
            padding: 8px;
        } */
    </style>



    <STYLE type="text/css">
        body {margin-top: 0px;margin-left: 0px;}
        
        #page_1 {position:relative; overflow: hidden;margin: 96px 0px 60px 47px;padding: 0px;border: none;width: 747px;}
        #page_1 #id1_1 {border:none;margin: 0px 0px 0px 2px;padding: 0px;border:none;width: 745px;overflow: hidden;}
        #page_1 #id1_2 {border:none;margin: 202px 0px 0px 348px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_1 #p1dimg1 {position:absolute;top:427px;left:0px;z-index:-1;width:692px;height:345px;}
        #page_1 #p1dimg1 #p1img1 {width:692px;height:345px;}
        
        
        
        
        #page_2 {position:relative; overflow: hidden;margin: 65px 0px 60px 49px;padding: 0px;border: none;width: 745px;}
        #page_2 #id2_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 745px;overflow: hidden;}
        #page_2 #id2_2 {border:none;margin: 113px 0px 0px 346px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        
        
        
        
        #page_3 {position:relative; overflow: hidden;margin: 48px 0px 37px 48px;padding: 0px;border: none;width: 746px;}
        #page_3 #id3_1 {border:none;margin: 2px 0px 0px 3px;padding: 0px;border:none;width: 743px;overflow: hidden;}
        #page_3 #id3_2 {border:none;margin: 0px 0px 0px 347px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_3 #p3dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:700px;height:978px;}
        #page_3 #p3dimg1 #p3img1 {width:700px;height:978px;}
        
        
        
        
        #page_4 {position:relative; overflow: hidden;margin: 49px 0px 37px 49px;padding: 0px;border: none;width: 745px;}
        #page_4 #id4_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 745px;overflow: hidden;}
        #page_4 #id4_2 {border:none;margin: 0px 0px 0px 346px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_4 #p4dimg1 {position:absolute;top:974px;left:1px;z-index:-1;width:698px;height:3px;font-size: 1px;line-height:nHeight;}
        #page_4 #p4dimg1 #p4img1 {width:698px;height:3px;}
        
        
        
        
        #page_5 {position:relative; overflow: hidden;margin: 46px 0px 37px 45px;padding: 0px;border: none;width: 749px;}
        #page_5 #id5_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 749px;overflow: hidden;}
        #page_5 #id5_2 {border:none;margin: 0px 0px 0px 350px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_5 #p5dimg1 {position:absolute;top:977px;left:5px;z-index:-1;width:698px;height:3px;font-size: 1px;line-height:nHeight;}
        #page_5 #p5dimg1 #p5img1 {width:698px;height:3px;}
        
        
        
        
        #page_6 {position:relative; overflow: hidden;margin: 45px 0px 37px 47px;padding: 0px;border: none;width: 747px;}
        #page_6 #id6_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 747px;overflow: hidden;}
        #page_6 #id6_2 {border:none;margin: 0px 0px 0px 348px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_6 #p6dimg1 {position:absolute;top:978px;left:3px;z-index:-1;width:698px;height:3px;font-size: 1px;line-height:nHeight;}
        #page_6 #p6dimg1 #p6img1 {width:698px;height:3px;}
        
        
        
        
        #page_7 {position:relative; overflow: hidden;margin: 43px 0px 37px 50px;padding: 0px;border: none;width: 744px;}
        #page_7 #id7_1 {border:none;margin: 0px 0px 0px 1px;padding: 0px;border:none;width: 743px;overflow: hidden;}
        #page_7 #id7_2 {border:none;margin: 0px 0px 0px 345px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_7 #p7dimg1 {position:absolute;top:980px;left:0px;z-index:-1;width:698px;height:3px;font-size: 1px;line-height:nHeight;}
        #page_7 #p7dimg1 #p7img1 {width:698px;height:3px;}
        
        
        
        
        #page_8 {position:relative; overflow: hidden;margin: 47px 0px 37px 50px;padding: 0px;border: none;width: 744px;}
        #page_8 #id8_1 {border:none;margin: 0px 0px 0px 1px;padding: 0px;border:none;width: 743px;overflow: hidden;}
        #page_8 #id8_2 {border:none;margin: 0px 0px 0px 345px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_8 #p8dimg1 {position:absolute;top:976px;left:0px;z-index:-1;width:698px;height:3px;font-size: 1px;line-height:nHeight;}
        #page_8 #p8dimg1 #p8img1 {width:698px;height:3px;}
        
        
        
        
        #page_9 {position:relative; overflow: hidden;margin: 39px 0px 37px 50px;padding: 0px;border: none;width: 744px;}
        #page_9 #id9_1 {border:none;margin: 0px 0px 0px 1px;padding: 0px;border:none;width: 743px;overflow: hidden;}
        #page_9 #id9_2 {border:none;margin: 0px 0px 0px 345px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_9 #p9dimg1 {position:absolute;top:984px;left:0px;z-index:-1;width:698px;height:3px;font-size: 1px;line-height:nHeight;}
        #page_9 #p9dimg1 #p9img1 {width:698px;height:3px;}
        
        
        
        
        #page_10 {position:relative; overflow: hidden;margin: 47px 0px 37px 47px;padding: 0px;border: none;width: 747px;}
        #page_10 #id10_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 747px;overflow: hidden;}
        #page_10 #id10_2 {border:none;margin: 0px 0px 0px 348px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_10 #p10dimg1 {position:absolute;top:976px;left:3px;z-index:-1;width:698px;height:3px;font-size: 1px;line-height:nHeight;}
        #page_10 #p10dimg1 #p10img1 {width:698px;height:3px;}
        
        
        
        
        #page_11 {position:relative; overflow: hidden;margin: 47px 0px 37px 48px;padding: 0px;border: none;width: 746px;}
        #page_11 #id11_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 746px;overflow: hidden;}
        #page_11 #id11_2 {border:none;margin: 0px 0px 0px 347px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_11 #p11dimg1 {position:absolute;top:976px;left:2px;z-index:-1;width:698px;height:3px;font-size: 1px;line-height:nHeight;}
        #page_11 #p11dimg1 #p11img1 {width:698px;height:3px;}
        
        
        
        
        #page_12 {position:relative; overflow: hidden;margin: 47px 0px 39px 51px;padding: 0px;border: none;width: 743px;}
        #page_12 #id12_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 743px;overflow: hidden;}
        #page_12 #id12_2 {border:none;margin: 43px 0px 0px 344px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        
        
        
        
        #page_13 {position:relative; overflow: hidden;margin: 45px 0px 39px 48px;padding: 0px;border: none;width: 746px;}
        #page_13 #id13_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 746px;overflow: hidden;}
        #page_13 #id13_2 {border:none;margin: 53px 0px 0px 347px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        
        
        
        
        #page_14 {position:relative; overflow: hidden;margin: 47px 0px 39px 48px;padding: 0px;border: none;width: 746px;}
        #page_14 #id14_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 746px;overflow: hidden;}
        #page_14 #id14_2 {border:none;margin: 22px 0px 0px 347px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        
        
        
        
        #page_15 {position:relative; overflow: hidden;margin: 46px 0px 36px 50px;padding: 0px;border: none;width: 744px;}
        #page_15 #id15_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 744px;overflow: hidden;}
        #page_15 #id15_2 {border:none;margin: 0px 0px 0px 345px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_15 #p15dimg1 {position:absolute;top:977px;left:0px;z-index:-1;width:698px;height:3px;font-size: 1px;line-height:nHeight;}
        #page_15 #p15dimg1 #p15img1 {width:698px;height:3px;}
        
        
        
        
        #page_16 {position:relative; overflow: hidden;margin: 45px 0px 38px 48px;padding: 0px;border: none;width: 746px;}
        #page_16 #id16_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 746px;overflow: hidden;}
        #page_16 #id16_2 {border:none;margin: 113px 0px 0px 347px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_16 #p16dimg1 {position:absolute;top:164px;left:243px;z-index:-1;width:453px;height:90px;}
        #page_16 #p16dimg1 #p16img1 {width:453px;height:90px;}
        
        
        
        
        #page_17 {position:relative; overflow: hidden;margin: 44px 0px 35px 48px;padding: 0px;border: none;width: 746px;}
        #page_17 #id17_1 {border:none;margin: 0px 0px 0px 153px;padding: 0px;border:none;width: 593px;overflow: hidden;}
        #page_17 #id17_2 {border:none;margin: 0px 0px 0px 3px;padding: 0px;border:none;width: 729px;overflow: hidden;}
        #page_17 #id17_2 #id17_2_1 {float:left;border:none;margin: 43px 0px 0px 0px;padding: 0px;border:none;width: 715px;overflow: hidden;}
        #page_17 #id17_2 #id17_2_2 {float:left;border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 14px;overflow: hidden;}
        #page_17 #id17_3 {border:none;margin: 0px 0px 0px 347px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_17 #p17dimg1 {position:absolute;top:79px;left:0px;z-index:-1;width:728px;height:903px;}
        #page_17 #p17dimg1 #p17img1 {width:728px;height:903px;}
        
        
        
        
        #page_18 {position:relative; overflow: hidden;margin: 0px 0px 37px 0px;padding: 0px;border: none;width: 794px;}
        #page_18 #id18_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 780px;overflow: hidden;}
        #page_18 #id18_1 #id18_1_1 {float:left;border:none;margin: 43px 0px 0px 0px;padding: 0px;border:none;width: 766px;overflow: hidden;}
        #page_18 #id18_1 #id18_1_2 {float:left;border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 14px;overflow: hidden;}
        #page_18 #id18_2 {border:none;margin: 109px 0px 0px 51px;padding: 0px;border:none;width: 743px;overflow: hidden;}
        #page_18 #id18_3 {border:none;margin: 0px 0px 0px 395px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_18 #p18dimg1 {position:absolute;top:105px;left:49px;z-index:-1;width:727px;height:921px;}
        #page_18 #p18dimg1 #p18img1 {width:727px;height:921px;}
        
        
        
        
        #page_19 {position:relative; overflow: hidden;margin: 105px 0px 37px 49px;padding: 0px;border: none;width: 745px;}
        
        #page_19 #p19dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:725px;height:921px;}
        #page_19 #p19dimg1 #p19img1 {width:725px;height:921px;}
        
        
        
        
        #page_20 {position:relative; overflow: hidden;margin: 44px 0px 37px 49px;padding: 0px;border: none;width: 745px;}
        #page_20 #id20_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 745px;overflow: hidden;}
        #page_20 #id20_2 {border:none;margin: 0px 0px 0px 346px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_20 #p20dimg1 {position:absolute;top:979px;left:1px;z-index:-1;width:698px;height:3px;font-size: 1px;line-height:nHeight;}
        #page_20 #p20dimg1 #p20img1 {width:698px;height:3px;}
        
        
        
        
        #page_21 {position:relative; overflow: hidden;margin: 42px 0px 37px 50px;padding: 0px;border: none;width: 744px;}
        #page_21 #id21_1 {border:none;margin: 0px 0px 0px 1px;padding: 0px;border:none;width: 743px;overflow: hidden;}
        #page_21 #id21_2 {border:none;margin: 0px 0px 0px 345px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_21 #p21dimg1 {position:absolute;top:981px;left:0px;z-index:-1;width:698px;height:3px;font-size: 1px;line-height:nHeight;}
        #page_21 #p21dimg1 #p21img1 {width:698px;height:3px;}
        
        
        
        
        #page_22 {position:relative; overflow: hidden;margin: 47px 0px 37px 50px;padding: 0px;border: none;width: 744px;}
        #page_22 #id22_1 {border:none;margin: 0px 0px 0px 1px;padding: 0px;border:none;width: 743px;overflow: hidden;}
        #page_22 #id22_2 {border:none;margin: 0px 0px 0px 345px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_22 #p22dimg1 {position:absolute;top:170px;left:0px;z-index:-1;width:721px;height:809px;}
        #page_22 #p22dimg1 #p22img1 {width:721px;height:809px;}
        
        
        
        
        #page_23 {position:relative; overflow: hidden;margin: 44px 0px 38px 0px;padding: 0px;border: none;width: 794px;}
        #page_23 #id23_1 {border:none;margin: 0px 0px 0px 308px;padding: 0px;border:none;width: 486px;overflow: hidden;}
        #page_23 #id23_2 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 776px;overflow: hidden;}
        #page_23 #id23_2 #id23_2_1 {float:left;border:none;margin: 6px 0px 0px 0px;padding: 0px;border:none;width: 762px;overflow: hidden;}
        #page_23 #id23_2 #id23_2_2 {float:left;border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 14px;overflow: hidden;}
        #page_23 #id23_3 {border:none;margin: 53px 0px 0px 291px;padding: 0px;border:none;width: 503px;overflow: hidden;}
        #page_23 #id23_4 {border:none;margin: 0px 0px 0px 48px;padding: 0px;border:none;width: 723px;overflow: hidden;}
        #page_23 #id23_4 #id23_4_1 {float:left;border:none;margin: 54px 0px 0px 0px;padding: 0px;border:none;width: 698px;overflow: hidden;}
        #page_23 #id23_4 #id23_4_2 {float:left;border:none;margin: 0px 0px 0px 14px;padding: 0px;border:none;width: 11px;overflow: hidden;}
        #page_23 #id23_5 {border:none;margin: 68px 0px 0px 49px;padding: 0px;border:none;width: 745px;overflow: hidden;}
        #page_23 #id23_6 {border:none;margin: 41px 0px 0px 395px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_23 #p23dimg1 {position:absolute;top:39px;left:46px;z-index:-1;width:726px;height:915px;}
        #page_23 #p23dimg1 #p23img1 {width:726px;height:915px;}
        
        #page_23 #p23inl_img1 {position:relative;width:119px;height:11px;}
        
        
        
        #page_24 {position:relative; overflow: hidden;margin: 0px 0px 39px 66px;padding: 0px;border: none;width: 728px;}
        #page_24 #id24_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 703px;overflow: hidden;}
        #page_24 #id24_1 #id24_1_1 {float:left;border:none;margin: 36px 0px 0px 0px;padding: 0px;border:none;width: 689px;overflow: hidden;}
        #page_24 #id24_1 #id24_1_2 {float:left;border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 14px;overflow: hidden;}
        #page_24 #id24_2 {border:none;margin: 118px 0px 0px 17px;padding: 0px;border:none;width: 711px;overflow: hidden;}
        #page_24 #id24_3 {border:none;margin: 334px 0px 0px 329px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_24 #p24dimg1 {position:absolute;top:102px;left:0px;z-index:-1;width:699px;height:587px;}
        #page_24 #p24dimg1 #p24img1 {width:699px;height:587px;}
        
        
        
        
        #page_25 {position:relative; overflow: hidden;margin: 0px 0px 39px 39px;padding: 0px;border: none;width: 755px;}
        #page_25 #id25_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 744px;overflow: hidden;}
        #page_25 #id25_1 #id25_1_1 {float:left;border:none;margin: 36px 0px 0px 0px;padding: 0px;border:none;width: 730px;overflow: hidden;}
        #page_25 #id25_1 #id25_1_2 {float:left;border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 14px;overflow: hidden;}
        #page_25 #id25_2 {border:none;margin: 19px 0px 0px 356px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_25 #p25dimg1 {position:absolute;top:291px;left:9px;z-index:-1;width:731px;height:250px;}
        #page_25 #p25dimg1 #p25img1 {width:731px;height:250px;}
        
        
        
        
        #page_26 {position:relative; overflow: hidden;margin: 79px 0px 38px 49px;padding: 0px;border: none;width: 745px;}
        #page_26 #id26_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 745px;overflow: hidden;}
        #page_26 #id26_2 {border:none;margin: 690px 0px 0px 346px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_26 #p26dimg1 {position:absolute;top:271px;left:1px;z-index:-1;width:668px;height:3px;font-size: 1px;line-height:nHeight;}
        #page_26 #p26dimg1 #p26img1 {width:668px;height:3px;}
        
        
        
        
        #page_27 {position:relative; overflow: hidden;margin: 44px 0px 39px 50px;padding: 0px;border: none;width: 744px;}
        #page_27 #id27_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 744px;overflow: hidden;}
        #page_27 #id27_2 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 727px;overflow: hidden;}
        #page_27 #id27_2 #id27_2_1 {float:left;border:none;margin: 24px 0px 0px 0px;padding: 0px;border:none;width: 702px;overflow: hidden;}
        #page_27 #id27_2 #id27_2_2 {float:left;border:none;margin: 0px 0px 0px 14px;padding: 0px;border:none;width: 11px;overflow: hidden;}
        #page_27 #id27_3 {border:none;margin: 15px 0px 0px 0px;padding: 0px;border:none;width: 744px;overflow: hidden;}
        #page_27 #id27_4 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 732px;overflow: hidden;}
        #page_27 #id27_4 #id27_4_1 {float:left;border:none;margin: 24px 0px 0px 0px;padding: 0px;border:none;width: 718px;overflow: hidden;}
        #page_27 #id27_4 #id27_4_2 {float:left;border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 14px;overflow: hidden;}
        #page_27 #id27_5 {border:none;margin: 111px 0px 0px 11px;padding: 0px;border:none;width: 648px;overflow: hidden;}
        #page_27 #id27_6 {border:none;margin: 75px 0px 0px 345px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_27 #p27dimg1 {position:absolute;top:314px;left:0px;z-index:-1;width:728px;height:611px;}
        #page_27 #p27dimg1 #p27img1 {width:728px;height:611px;}
        
        #page_27 #p27inl_img1 {position:relative;width:180px;height:11px;}
        
        
        
        #page_28 {position:relative; overflow: hidden;margin: 47px 0px 39px 80px;padding: 0px;border: none;width: 714px;}
        #page_28 #id28_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 714px;overflow: hidden;}
        #page_28 #id28_2 {border:none;margin: 913px 0px 0px 315px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        
        
        
        
        #page_29 {position:relative; overflow: hidden;margin: 47px 0px 39px 80px;padding: 0px;border: none;width: 714px;}
        #page_29 #id29_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 714px;overflow: hidden;}
        #page_29 #id29_2 {border:none;margin: 913px 0px 0px 315px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        
        
        
        
        #page_30 {position:relative; overflow: hidden;margin: 62px 0px 39px 70px;padding: 0px;border: none;width: 724px;}
        #page_30 #id30_1 {border:none;margin: 3px 0px 0px 7px;padding: 0px;border:none;width: 717px;overflow: hidden;}
        #page_30 #id30_2 {border:none;margin: 426px 0px 0px 325px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_30 #p30dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:283px;height:39px;}
        #page_30 #p30dimg1 #p30img1 {width:283px;height:39px;}
        
        
        
        
        #page_31 {position:relative; overflow: hidden;margin: 49px 0px 39px 48px;padding: 0px;border: none;width: 746px;}
        #page_31 #id31_1 {border:none;margin: 0px 0px 0px 189px;padding: 0px;border:none;width: 557px;overflow: hidden;}
        #page_31 #id31_2 {border:none;margin: 0px 0px 0px 1px;padding: 0px;border:none;width: 707px;overflow: hidden;}
        #page_31 #id31_2 #id31_2_1 {float:left;border:none;margin: 90px 0px 0px 0px;padding: 0px;border:none;width: 693px;overflow: hidden;}
        #page_31 #id31_2 #id31_2_2 {float:left;border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 14px;overflow: hidden;}
        #page_31 #id31_3 {border:none;margin: 78px 0px 0px 1px;padding: 0px;border:none;width: 745px;overflow: hidden;}
        #page_31 #id31_4 {border:none;margin: 118px 0px 0px 347px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_31 #p31dimg1 {position:absolute;top:108px;left:0px;z-index:-1;width:704px;height:623px;}
        #page_31 #p31dimg1 #p31img1 {width:704px;height:623px;}
        
        
        
        
        #page_32 {position:relative; overflow: hidden;margin: 66px 0px 37px 50px;padding: 0px;border: none;width: 744px;}
        #page_32 #id32_1 {border:none;margin: 0px 0px 0px 1px;padding: 0px;border:none;width: 743px;overflow: hidden;}
        #page_32 #id32_2 {border:none;margin: 0px 0px 0px 345px;padding: 0px;border:none;width: 399px;overflow: hidden;}
        
        #page_32 #p32dimg1 {position:absolute;top:957px;left:0px;z-index:-1;width:698px;height:3px;font-size: 1px;line-height:nHeight;}
        #page_32 #p32dimg1 #p32img1 {width:698px;height:3px;}
        
        
        
        
        .dclr {clear:both;float:none;height:1px;margin:0px;padding:0px;overflow:hidden;}
        
        .ft0{font: bold 19px 'Arial';text-decoration: underline;line-height: 22px;}
        .ft1{font: 13px 'Arial';line-height: 16px;}
        .ft2{font: bold 13px 'Arial';line-height: 16px;}
        .ft3{font: 13px 'Arial';line-height: 19px;}
        .ft4{font: 13px 'Arial';line-height: 18px;}
        .ft5{font: bold 19px 'Arial';line-height: 22px;}
        .ft6{font: 13px 'Arial';background-color: #ffff00;line-height: 16px;}
        .ft7{font: 9px 'Arial';line-height: 12px;}
        .ft8{font: bold 15px 'Arial';line-height: 18px;}
        .ft9{font: 1px 'Arial';line-height: 1px;}
        .ft10{font: bold 16px 'Arial';line-height: 19px;}
        .ft11{font: 14px 'Arial';line-height: 16px;}
        .ft12{font: 1px 'Arial';line-height: 4px;}
        .ft13{font: 1px 'Arial';line-height: 5px;}
        .ft14{font: 1px 'Arial';line-height: 9px;}
        .ft15{font: 1px 'Arial';line-height: 12px;}
        .ft16{font: 1px 'Arial';line-height: 3px;}
        .ft17{font: 1px 'Arial';line-height: 10px;}
        .ft18{font: 1px 'Arial';line-height: 15px;}
        .ft19{font: 1px 'Arial';line-height: 13px;}
        .ft20{font: 1px 'Arial';line-height: 14px;}
        .ft21{font: bold 13px 'Arial';line-height: 14px;}
        .ft22{font: 1px 'Arial';line-height: 6px;}
        .ft23{font: bold 27px 'Arial';line-height: 32px;}
        .ft24{font: italic bold 13px 'Arial';line-height: 16px;}
        .ft25{font: bold 13px 'Arial';margin-left: 3px;line-height: 16px;}
        .ft26{font: bold 13px 'Arial';line-height: 19px;}
        .ft27{font: bold 13px 'Arial';line-height: 22px;}
        .ft28{font: 13px 'Arial';line-height: 22px;}
        .ft29{font: bold 13px 'Arial';line-height: 21px;}
        .ft30{font: 13px 'Arial';line-height: 21px;}
        .ft31{font: bold 13px 'Arial';margin-left: 7px;line-height: 24px;}
        .ft32{font: bold 13px 'Arial';line-height: 24px;}
        .ft33{font: 13px 'Arial';line-height: 24px;}
        .ft34{font: 13px 'Arial';margin-left: 19px;line-height: 19px;}
        .ft35{font: 13px 'Arial';margin-left: 18px;line-height: 16px;}
        .ft36{font: 13px 'Arial';margin-left: 6px;line-height: 18px;}
        .ft37{font: 13px 'Arial';margin-left: 5px;line-height: 18px;}
        .ft38{font: bold 13px 'Arial';margin-left: 14px;line-height: 16px;}
        .ft39{font: 13px 'Arial';margin-left: 26px;line-height: 19px;}
        .ft40{font: 13px 'Arial';margin-left: 25px;line-height: 16px;}
        .ft41{font: 13px 'Arial';margin-left: 26px;line-height: 17px;}
        .ft42{font: 13px 'Arial';line-height: 17px;}
        .ft43{font: 13px 'Arial';margin-left: 10px;line-height: 16px;}
        .ft44{font: 13px 'Arial';margin-left: 9px;line-height: 16px;}
        .ft45{font: bold 13px 'Arial';line-height: 17px;}
        .ft46{font: 13px 'Arial';margin-left: 26px;line-height: 18px;}
        .ft47{font: 13px 'Arial';margin-left: 27px;line-height: 17px;}
        .ft48{font: bold 13px 'Arial';margin-left: 4px;line-height: 16px;}
        .ft49{font: 13px 'Arial';margin-left: 14px;line-height: 16px;}
        .ft50{font: 13px 'Arial';margin-left: 14px;line-height: 18px;}
        .ft51{font: 13px 'Arial';margin-left: 25px;line-height: 23px;}
        .ft52{font: 13px 'Arial';line-height: 23px;}
        .ft53{font: 13px 'Arial';margin-left: 14px;line-height: 24px;}
        .ft54{font: bold 13px 'Arial';line-height: 20px;}
        .ft55{font: 13px 'Arial';line-height: 20px;}
        .ft56{font: 12px 'Arial';line-height: 21px;}
        .ft57{font: 13px 'Arial';margin-left: 3px;line-height: 20px;}
        .ft58{font: bold 13px 'Arial';margin-left: 8px;line-height: 16px;}
        .ft59{font: 13px 'Arial';margin-left: 35px;line-height: 21px;}
        .ft60{font: 13px 'Arial';margin-left: 35px;line-height: 20px;}
        .ft61{font: 12px 'Arial';line-height: 20px;}
        .ft62{font: 13px 'Arial';margin-left: 31px;line-height: 21px;}
        .ft63{font: 13px 'Arial';margin-left: 29px;line-height: 21px;}
        .ft64{font: 13px 'Arial';margin-left: 31px;line-height: 24px;}
        .ft65{font: 13px 'Arial';margin-left: 29px;line-height: 16px;}
        .ft66{font: bold 13px 'Arial';line-height: 23px;}
        .ft67{font: 12px 'Arial';margin-left: 3px;line-height: 21px;}
        .ft68{font: 13px 'Arial';margin-left: 30px;line-height: 21px;}
        .ft69{font: 12px 'Arial';line-height: 15px;}
        .ft70{font: 13px 'Arial';margin-left: 27px;line-height: 16px;}
        .ft71{font: 12px 'Arial';margin-left: 28px;line-height: 21px;}
        .ft72{font: 13px 'Arial';margin-left: 28px;line-height: 21px;}
        .ft73{font: bold 13px 'Arial';margin-left: 5px;line-height: 16px;}
        .ft74{font: 13px 'Arial';margin-left: 28px;line-height: 20px;}
        .ft75{font: 13px 'Arial';margin-left: 16px;line-height: 16px;}
        .ft76{font: 13px 'Arial';margin-left: 16px;line-height: 20px;}
        .ft77{font: 13px 'Arial';margin-left: 9px;line-height: 21px;}
        .ft78{font: 13px 'Arial';margin-left: 6px;line-height: 16px;}
        .ft79{font: 12px 'Arial';margin-left: 6px;line-height: 25px;}
        .ft80{font: 12px 'Arial';line-height: 25px;}
        .ft81{font: 13px 'Arial';margin-left: 44px;line-height: 16px;}
        .ft82{font: 13px 'Arial';margin-left: 44px;line-height: 23px;}
        .ft83{font: 13px 'Arial';margin-left: 44px;line-height: 22px;}
        .ft84{font: 13px 'Arial';text-decoration: line-through;color: #fc0011;line-height: 23px;}
        .ft85{font: 13px 'Arial';margin-left: 17px;line-height: 22px;}
        .ft86{font: 13px 'Arial';color: #84c426;line-height: 22px;}
        .ft87{font: bold 13px 'Arial';margin-left: 12px;line-height: 16px;}
        .ft88{font: 13px 'Arial';margin-left: 40px;line-height: 18px;}
        .ft89{font: 13px 'Arial';margin-left: 29px;line-height: 18px;}
        .ft90{font: 13px 'Arial';margin-left: 28px;line-height: 22px;}
        .ft91{font: 13px 'Arial';margin-left: 33px;line-height: 20px;}
        .ft92{font: 13px 'Arial';margin-left: 33px;line-height: 21px;}
        .ft93{font: 13px 'Arial';margin-left: 33px;line-height: 16px;}
        .ft94{font: 13px 'Arial';margin-left: 27px;line-height: 19px;}
        .ft95{font: 13px 'Arial';margin-left: 27px;line-height: 20px;}
        .ft96{font: 13px 'Arial';margin-left: 45px;line-height: 19px;}
        .ft97{font: 13px 'Arial';margin-left: 38px;line-height: 19px;}
        .ft98{font: 13px 'Arial';margin-left: 38px;line-height: 20px;}
        .ft99{font: 13px 'Arial';margin-left: 38px;line-height: 16px;}
        .ft100{font: bold 13px 'Arial';margin-left: 6px;line-height: 16px;}
        .ft101{font: 13px 'Arial';margin-left: 16px;line-height: 21px;}
        .ft102{font: 13px 'Arial';margin-left: 16px;line-height: 17px;}
        .ft103{font: 13px 'Arial';margin-left: 17px;line-height: 19px;}
        .ft104{font: 13px 'Arial';margin-left: 34px;line-height: 19px;}
        .ft105{font: 13px 'Arial';margin-left: 35px;line-height: 19px;}
        .ft106{font: 13px 'Arial';margin-left: 34px;line-height: 20px;}
        .ft107{font: 13px 'Arial';margin-left: 34px;line-height: 16px;}
        .ft108{font: bold 13px 'Arial';margin-left: 28px;line-height: 20px;}
        .ft109{font: 13px 'Arial';margin-left: 32px;line-height: 19px;}
        .ft110{font: 13px 'Arial';line-height: 15px;}
        .ft111{font: 13px 'Arial';background-color: #ffff00;line-height: 15px;}
        .ft112{font: bold 13px 'Arial';background-color: #ffff00;line-height: 16px;}
        .ft113{font: 11px 'Arial';color: #999999;line-height: 14px;}
        .ft114{font: 13px 'Arial';background-color: #ffff00;margin-left: 34px;line-height: 16px;}
        .ft115{font: bold 13px 'Arial';text-decoration: underline;background-color: #ffff00;line-height: 16px;}
        .ft116{font: 13px 'Arial';margin-left: 32px;line-height: 16px;}
        .ft117{font: 1px 'Arial';line-height: 2px;}
        .ft118{font: 13px 'Arial';background-color: #ffff00;margin-left: 27px;line-height: 16px;}
        .ft119{font: 13px 'Arial';margin-left: 4px;line-height: 16px;}
        .ft120{font: 13px 'Arial';text-decoration: underline;background-color: #ffff00;line-height: 16px;}
        .ft121{font: 13px 'Arial';background-color: #ffff00;line-height: 14px;}
        .ft122{font: 13px 'Arial';line-height: 14px;}
        .ft123{font: bold 13px 'Arial';line-height: 15px;}
        .ft124{font: 1px 'Arial';line-height: 11px;}
        .ft125{font: 7px 'Arial';background-color: #ffff00;line-height: 7px;position: relative; bottom: 7px;}
        .ft126{font: 1px 'Arial';line-height: 8px;}
        .ft127{font: 1px 'Arial';line-height: 7px;}
        .ft128{font: bold 17px 'Arial';line-height: 19px;}
        .ft129{font: 13px 'Arial';margin-left: 26px;line-height: 23px;}
        .ft130{font: 12px 'Arial';margin-left: 22px;line-height: 22px;}
        .ft131{font: 12px 'Arial';line-height: 22px;}
        .ft132{font: 13px 'Arial';margin-left: 24px;line-height: 22px;}
        .ft133{font: 13px 'Arial';margin-left: 41px;line-height: 16px;}
        .ft134{font: 13px 'Arial';margin-left: 39px;line-height: 16px;}
        .ft135{font: 13px 'Arial';margin-left: 36px;line-height: 16px;}
        .ft136{font: 13px 'Arial';margin-left: 35px;line-height: 16px;}
        .ft137{font: 12px 'Arial';margin-left: 33px;line-height: 22px;}
        .ft138{font: 13px 'Arial';margin-left: 37px;line-height: 16px;}
        .ft139{font: 13px 'Arial';margin-left: 40px;line-height: 16px;}
        .ft140{font: bold 16px 'Arial';line-height: 23px;}
        .ft141{font: bold 16px 'Arial';background-color: #ffff00;line-height: 19px;}
        .ft142{font: 16px 'Arial';line-height: 18px;}
        .ft143{font: 16px 'Arial';background-color: #ffff00;line-height: 18px;}
        .ft144{font: 13px 'Arial';background-color: #ffff00;line-height: 18px;}
        .ft145{font: 13px 'Arial';text-decoration: underline;line-height: 16px;}
        .ft146{font: 5px 'Arial';color: #999999;line-height: 6px;}
        .ft147{font: bold 12px 'Arial';line-height: 15px;}
        .ft148{font: 13px 'Arial';margin-left: 8px;line-height: 19px;}
        .ft149{font: 13px 'Arial';background-color: #ffff00;line-height: 19px;}
        .ft150{font: bold 13px 'Arial';background-color: #ffff00;line-height: 19px;}
        .ft151{font: 12px 'Arial';line-height: 19px;}
        .ft152{font: 13px 'Arial';margin-left: 30px;line-height: 22px;}
        .ft153{font: 13px 'Arial';margin-left: 34px;line-height: 25px;}
        .ft154{font: 13px 'Arial';line-height: 25px;}
        .ft155{font: 13px 'Arial';margin-left: 30px;line-height: 16px;}
        .ft156{font: 12px 'Arial';background-color: #ffff00;line-height: 21px;}
        .ft157{font: 2px 'Arial';color: #999999;line-height: 2px;}
        .ft158{font: 13px 'Arial';margin-left: 6px;line-height: 19px;}
        .ft159{font: bold 21px 'Arial';line-height: 24px;}
        
        .p0{text-align: left;padding-left: 152px;margin-top: 0px;margin-bottom: 0px;}
        .p1{text-align: left;margin-top: 80px;margin-bottom: 0px;}
        .p2{text-align: left;margin-top: 19px;margin-bottom: 0px;}
        .p3{text-align: left;padding-right: 50px;margin-top: 19px;margin-bottom: 0px;}
        .p4{text-align: left;padding-right: 102px;margin-top: 15px;margin-bottom: 0px;}
        .p5{text-align: left;margin-top: 17px;margin-bottom: 0px;}
        .p6{text-align: left;padding-right: 53px;margin-top: 19px;margin-bottom: 0px;}
        .p7{text-align: left;padding-left: 2px;padding-right: 103px;margin-top: 16px;margin-bottom: 0px;text-indent: -1px;}
        .p8{text-align: left;padding-left: 10px;margin-top: 30px;margin-bottom: 0px;}
        .p9{text-align: left;padding-left: 11px;margin-top: 16px;margin-bottom: 0px;}
        .p10{text-align: left;padding-left: 10px;margin-top: 39px;margin-bottom: 0px;}
        .p11{text-align: left;padding-left: 11px;margin-top: 37px;margin-bottom: 0px;}
        .p12{text-align: left;padding-left: 11px;margin-top: 36px;margin-bottom: 0px;}
        .p13{text-align: left;margin-top: 0px;margin-bottom: 0px;}
        .p14{text-align: left;padding-left: 154px;margin-top: 0px;margin-bottom: 0px;}
        .p15{text-align: left;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p16{text-align: left;padding-left: 3px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p17{text-align: right;padding-right: 14px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p18{text-align: left;padding-left: 12px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p19{text-align: center;padding-left: 5px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p20{text-align: left;padding-left: 21px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p21{text-align: left;padding-left: 27px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p22{text-align: left;padding-left: 26px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p23{text-align: left;padding-left: 19px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p24{text-align: left;padding-left: 70px;margin-top: 17px;margin-bottom: 0px;}
        .p25{text-align: left;padding-left: 31px;margin-top: 12px;margin-bottom: 0px;}
        .p26{text-align: left;padding-left: 236px;margin-top: 0px;margin-bottom: 0px;}
        .p27{text-align: left;padding-left: 328px;margin-top: 22px;margin-bottom: 0px;}
        .p28{text-align: left;padding-left: 2px;margin-top: 12px;margin-bottom: 0px;}
        .p29{text-align: left;padding-left: 2px;margin-top: 3px;margin-bottom: 0px;}
        .p30{text-align: left;padding-left: 6px;margin-top: 7px;margin-bottom: 0px;}
        .p31{text-align: justify;padding-left: 6px;padding-right: 50px;margin-top: 7px;margin-bottom: 0px;}
        .p32{text-align: left;padding-left: 6px;margin-top: 5px;margin-bottom: 0px;}
        .p33{text-align: left;padding-left: 6px;margin-top: 0px;margin-bottom: 0px;}
        .p34{text-align: justify;padding-left: 6px;padding-right: 50px;margin-top: 6px;margin-bottom: 0px;}
        .p35{text-align: left;padding-left: 2px;margin-top: 15px;margin-bottom: 0px;}
        .p36{text-align: left;padding-left: 2px;margin-top: 16px;margin-bottom: 0px;}
        .p37{text-align: left;padding-left: 2px;margin-top: 19px;margin-bottom: 0px;}
        .p38{text-align: left;padding-left: 2px;margin-top: 14px;margin-bottom: 0px;}
        .p39{text-align: left;padding-left: 2px;margin-top: 5px;margin-bottom: 0px;}
        .p40{text-align: left;padding-left: 7px;margin-top: 18px;margin-bottom: 0px;}
        .p41{text-align: left;padding-left: 5px;margin-top: 2px;margin-bottom: 0px;}
        .p42{text-align: left;padding-left: 5px;margin-top: 3px;margin-bottom: 0px;}
        .p43{text-align: left;margin-top: 5px;margin-bottom: 0px;}
        .p44{text-align: justify;padding-right: 43px;margin-top: 2px;margin-bottom: 0px;}
        .p45{text-align: justify;padding-right: 44px;margin-top: 12px;margin-bottom: 0px;}
        .p46{text-align: left;margin-top: 2px;margin-bottom: 0px;}
        .p47{text-align: left;padding-left: 1px;padding-right: 71px;margin-top: 9px;margin-bottom: 0px;}
        .p48{text-align: justify;padding-right: 44px;margin-top: 11px;margin-bottom: 0px;}
        .p49{text-align: left;margin-top: 3px;margin-bottom: 0px;}
        .p50{text-align: left;padding-right: 34px;margin-top: 6px;margin-bottom: 0px;}
        .p51{text-align: justify;padding-right: 46px;margin-top: 3px;margin-bottom: 0px;}
        .p52{text-align: left;padding-left: 1px;padding-right: 49px;margin-top: 3px;margin-bottom: 0px;}
        .p53{text-align: left;padding-left: 38px;padding-right: 66px;margin-top: 7px;margin-bottom: 0px;text-indent: -37px;}
        .p54{text-align: left;padding-left: 38px;padding-right: 45px;margin-top: 7px;margin-bottom: 0px;text-indent: -37px;}
        .p55{text-align: left;padding-left: 38px;padding-right: 51px;margin-top: 8px;margin-bottom: 0px;text-indent: -37px;}
        .p56{text-align: left;padding-left: 38px;padding-right: 102px;margin-top: 7px;margin-bottom: 0px;text-indent: -37px;}
        .p57{text-align: left;padding-left: 1px;margin-top: 0px;margin-bottom: 0px;}
        .p58{text-align: left;padding-left: 3px;margin-top: 0px;margin-bottom: 0px;}
        .p59{text-align: justify;padding-left: 3px;padding-right: 51px;margin-top: 14px;margin-bottom: 0px;text-indent: -1px;}
        .p60{text-align: justify;padding-left: 3px;padding-right: 51px;margin-top: 10px;margin-bottom: 0px;text-indent: -1px;}
        .p61{text-align: left;padding-left: 2px;margin-top: 10px;margin-bottom: 0px;}
        .p62{text-align: left;padding-left: 47px;padding-right: 47px;margin-top: 12px;margin-bottom: 0px;text-indent: -45px;}
        .p63{text-align: left;padding-left: 2px;margin-top: 0px;margin-bottom: 0px;}
        .p64{text-align: left;padding-left: 2px;margin-top: 9px;margin-bottom: 0px;}
        .p65{text-align: justify;padding-left: 47px;padding-right: 44px;margin-top: 9px;margin-bottom: 0px;text-indent: -45px;}
        .p66{text-align: left;padding-left: 47px;padding-right: 48px;margin-top: 12px;margin-bottom: 0px;text-indent: -45px;}
        .p67{text-align: left;padding-left: 20px;margin-top: 17px;margin-bottom: 0px;}
        .p68{text-align: left;padding-left: 20px;margin-top: 6px;margin-bottom: 0px;}
        .p69{text-align: justify;padding-left: 47px;padding-right: 43px;margin-top: 13px;margin-bottom: 0px;text-indent: -45px;}
        .p70{text-align: left;padding-left: 47px;padding-right: 48px;margin-top: 7px;margin-bottom: 0px;text-indent: -45px;}
        .p71{text-align: left;padding-left: 2px;margin-top: 6px;margin-bottom: 0px;}
        .p72{text-align: left;padding-left: 46px;margin-top: 8px;margin-bottom: 0px;}
        .p73{text-align: left;padding-left: 47px;margin-top: 1px;margin-bottom: 0px;}
        .p74{text-align: justify;padding-left: 47px;padding-right: 48px;margin-top: 9px;margin-bottom: 0px;text-indent: -45px;}
        .p75{text-align: left;margin-top: 16px;margin-bottom: 0px;}
        .p76{text-align: left;padding-left: 47px;padding-right: 48px;margin-top: 13px;margin-bottom: 0px;text-indent: -45px;}
        .p77{text-align: justify;padding-left: 46px;padding-right: 48px;margin-top: 12px;margin-bottom: 0px;text-indent: -44px;}
        .p78{text-align: left;padding-left: 43px;padding-right: 46px;margin-top: 0px;margin-bottom: 0px;text-indent: -43px;}
        .p79{text-align: left;margin-top: 1px;margin-bottom: 0px;}
        .p80{text-align: left;margin-top: 10px;margin-bottom: 0px;}
        .p81{text-align: left;padding-left: 58px;padding-right: 83px;margin-top: 27px;margin-bottom: 0px;text-indent: -43px;}
        .p82{text-align: left;padding-left: 58px;margin-top: 3px;margin-bottom: 0px;}
        .p83{text-align: left;padding-left: 15px;margin-top: 4px;margin-bottom: 0px;}
        .p84{text-align: left;padding-left: 58px;padding-right: 64px;margin-top: 21px;margin-bottom: 0px;text-indent: -43px;}
        .p85{text-align: left;padding-left: 15px;margin-top: 0px;margin-bottom: 0px;}
        .p86{text-align: left;padding-left: 15px;margin-top: 18px;margin-bottom: 0px;}
        .p87{text-align: left;padding-left: 58px;margin-top: 9px;margin-bottom: 0px;}
        .p88{text-align: justify;padding-left: 60px;padding-right: 48px;margin-top: 17px;margin-bottom: 0px;text-indent: -44px;}
        .p89{text-align: justify;padding-left: 60px;padding-right: 48px;margin-top: 16px;margin-bottom: 0px;text-indent: -44px;}
        .p90{text-align: left;padding-left: 4px;margin-top: 5px;margin-bottom: 0px;}
        .p91{text-align: justify;padding-left: 64px;padding-right: 46px;margin-top: 0px;margin-bottom: 0px;text-indent: -44px;}
        .p92{text-align: justify;padding-left: 63px;padding-right: 47px;margin-top: 16px;margin-bottom: 0px;text-indent: -44px;}
        .p93{text-align: justify;padding-left: 63px;padding-right: 43px;margin-top: 9px;margin-bottom: 0px;text-indent: -44px;}
        .p94{text-align: left;padding-left: 63px;padding-right: 48px;margin-top: 0px;margin-bottom: 0px;}
        .p95{text-align: left;padding-left: 15px;margin-top: 9px;margin-bottom: 0px;}
        .p96{text-align: justify;padding-left: 63px;padding-right: 47px;margin-top: 20px;margin-bottom: 0px;text-indent: -44px;}
        .p97{text-align: justify;padding-left: 67px;padding-right: 47px;margin-top: 5px;margin-bottom: 0px;text-indent: -48px;}
        .p98{text-align: justify;padding-left: 113px;padding-right: 46px;margin-top: 8px;margin-bottom: 0px;text-indent: -51px;}
        .p99{text-align: justify;padding-left: 113px;padding-right: 46px;margin-top: 6px;margin-bottom: 0px;text-indent: -51px;}
        .p100{text-align: left;padding-left: 111px;padding-right: 47px;margin-top: 0px;margin-bottom: 0px;}
        .p101{text-align: left;padding-left: 111px;padding-right: 47px;margin-top: 3px;margin-bottom: 0px;}
        .p102{text-align: justify;padding-left: 49px;padding-right: 48px;margin-top: 12px;margin-bottom: 0px;text-indent: -38px;}
        .p103{text-align: justify;padding-left: 49px;padding-right: 43px;margin-top: 15px;margin-bottom: 0px;text-indent: -38px;}
        .p104{text-align: justify;padding-left: 49px;padding-right: 49px;margin-top: 13px;margin-bottom: 0px;text-indent: -38px;}
        .p105{text-align: justify;padding-left: 49px;padding-right: 49px;margin-top: 5px;margin-bottom: 0px;text-indent: -38px;}
        .p106{text-align: justify;padding-left: 91px;padding-right: 49px;margin-top: 5px;margin-bottom: 0px;text-indent: -44px;}
        .p107{text-align: justify;padding-left: 91px;padding-right: 49px;margin-top: 6px;margin-bottom: 0px;text-indent: -44px;}
        .p108{text-align: justify;padding-left: 93px;padding-right: 43px;margin-top: 0px;margin-bottom: 0px;text-indent: -49px;}
        .p109{text-align: justify;padding-left: 50px;padding-right: 43px;margin-top: 13px;margin-bottom: 0px;text-indent: -38px;}
        .p110{text-align: left;padding-left: 93px;padding-right: 72px;margin-top: 18px;margin-bottom: 0px;text-indent: -44px;}
        .p111{text-align: left;padding-left: 93px;margin-top: 2px;margin-bottom: 0px;}
        .p112{text-align: left;padding-left: 93px;margin-top: 9px;margin-bottom: 0px;}
        .p113{text-align: left;padding-left: 49px;margin-top: 4px;margin-bottom: 0px;}
        .p114{text-align: left;padding-left: 93px;padding-right: 55px;margin-top: 7px;margin-bottom: 0px;}
        .p115{text-align: justify;padding-left: 50px;padding-right: 48px;margin-top: 24px;margin-bottom: 0px;text-indent: -38px;}
        .p116{text-align: justify;padding-left: 48px;padding-right: 44px;margin-top: 5px;margin-bottom: 0px;}
        .p117{text-align: justify;padding-left: 48px;padding-right: 48px;margin-top: 7px;margin-bottom: 0px;text-indent: -46px;}
        .p118{text-align: justify;padding-left: 48px;padding-right: 48px;margin-top: 8px;margin-bottom: 0px;text-indent: -46px;}
        .p119{text-align: justify;padding-left: 48px;padding-right: 48px;margin-top: 9px;margin-bottom: 0px;text-indent: -46px;}
        .p120{text-align: left;padding-left: 49px;margin-top: 12px;margin-bottom: 0px;}
        .p121{text-align: justify;padding-left: 48px;padding-right: 48px;margin-top: 20px;margin-bottom: 0px;text-indent: -48px;}
        .p122{text-align: justify;padding-left: 48px;padding-right: 48px;margin-top: 8px;margin-bottom: 0px;text-indent: -48px;}
        .p123{text-align: justify;padding-left: 51px;padding-right: 43px;margin-top: 11px;margin-bottom: 0px;text-indent: -45px;}
        .p124{text-align: left;padding-left: 6px;margin-top: 3px;margin-bottom: 0px;}
        .p125{text-align: justify;padding-left: 51px;padding-right: 46px;margin-top: 10px;margin-bottom: 0px;}
        .p126{text-align: justify;padding-left: 51px;padding-right: 47px;margin-top: 9px;margin-bottom: 0px;text-indent: -45px;}
        .p127{text-align: left;padding-left: 51px;padding-right: 47px;margin-top: 19px;margin-bottom: 0px;text-indent: -45px;}
        .p128{text-align: left;padding-left: 6px;margin-top: 2px;margin-bottom: 0px;}
        .p129{text-align: left;padding-left: 50px;padding-right: 47px;margin-top: 14px;margin-bottom: 0px;text-indent: -44px;}
        .p130{text-align: left;padding-left: 50px;padding-right: 47px;margin-top: 6px;margin-bottom: 0px;text-indent: -44px;}
        .p131{text-align: left;padding-left: 50px;padding-right: 47px;margin-top: 7px;margin-bottom: 0px;text-indent: -44px;}
        .p132{text-align: justify;padding-left: 50px;padding-right: 47px;margin-top: 7px;margin-bottom: 0px;text-indent: -44px;}
        .p133{text-align: left;padding-left: 3px;margin-top: 5px;margin-bottom: 0px;}
        .p134{text-align: left;padding-left: 54px;margin-top: 0px;margin-bottom: 0px;}
        .p135{text-align: left;padding-left: 107px;padding-right: 39px;margin-top: 15px;margin-bottom: 0px;text-indent: -53px;}
        .p136{text-align: left;margin-top: 21px;margin-bottom: 0px;}
        .p137{text-align: justify;padding-left: 81px;padding-right: 44px;margin-top: 35px;margin-bottom: 0px;text-indent: -81px;}
        .p138{text-align: left;padding-left: 81px;padding-right: 44px;margin-top: 13px;margin-bottom: 0px;text-indent: -81px;}
        .p139{text-align: justify;padding-left: 81px;padding-right: 44px;margin-top: 12px;margin-bottom: 0px;text-indent: -81px;}
        .p140{text-align: justify;padding-left: 81px;padding-right: 44px;margin-top: 14px;margin-bottom: 0px;text-indent: -81px;}
        .p141{text-align: left;padding-left: 35px;padding-right: 41px;margin-top: 14px;margin-bottom: 0px;text-indent: -35px;}
        .p142{text-align: left;padding-left: 5px;margin-top: 8px;margin-bottom: 0px;}
        .p143{text-align: justify;padding-left: 63px;padding-right: 59px;margin-top: 15px;margin-bottom: 0px;text-indent: -58px;}
        .p144{text-align: justify;padding-left: 63px;padding-right: 42px;margin-top: 7px;margin-bottom: 0px;text-indent: -58px;}
        .p145{text-align: justify;padding-left: 63px;padding-right: 43px;margin-top: 9px;margin-bottom: 0px;text-indent: -58px;}
        .p146{text-align: left;padding-left: 63px;padding-right: 50px;margin-top: 0px;margin-bottom: 0px;text-indent: -61px;}
        .p147{text-align: left;padding-left: 63px;padding-right: 50px;margin-top: 12px;margin-bottom: 0px;text-indent: -61px;}
        .p148{text-align: left;padding-left: 63px;padding-right: 49px;margin-top: 11px;margin-bottom: 0px;text-indent: -61px;}
        .p149{text-align: justify;padding-left: 63px;padding-right: 50px;margin-top: 12px;margin-bottom: 0px;text-indent: -61px;}
        .p150{text-align: left;padding-left: 63px;padding-right: 49px;margin-top: 17px;margin-bottom: 0px;text-indent: -61px;}
        .p151{text-align: justify;padding-left: 63px;padding-right: 50px;margin-top: 11px;margin-bottom: 0px;text-indent: -61px;}
        .p152{text-align: left;padding-left: 1px;margin-top: 12px;margin-bottom: 0px;}
        .p153{text-align: justify;padding-left: 65px;padding-right: 49px;margin-top: 15px;margin-bottom: 0px;text-indent: -64px;}
        .p154{text-align: justify;padding-left: 65px;padding-right: 49px;margin-top: 11px;margin-bottom: 0px;text-indent: -64px;}
        .p155{text-align: justify;padding-left: 64px;padding-right: 49px;margin-top: 9px;margin-bottom: 0px;text-indent: -64px;}
        .p156{text-align: justify;padding-left: 64px;padding-right: 49px;margin-top: 28px;margin-bottom: 0px;text-indent: -64px;}
        .p157{text-align: justify;padding-left: 64px;padding-right: 49px;margin-top: 11px;margin-bottom: 0px;text-indent: -64px;}
        .p158{text-align: left;margin-top: 27px;margin-bottom: 0px;}
        .p159{text-align: left;padding-left: 47px;padding-right: 41px;margin-top: 29px;margin-bottom: 0px;}
        .p160{text-align: justify;padding-left: 51px;padding-right: 55px;margin-top: 18px;margin-bottom: 0px;text-indent: 1px;}
        .p161{text-align: left;padding-left: 3px;margin-top: 6px;margin-bottom: 0px;}
        .p162{text-align: left;padding-left: 24px;margin-top: 12px;margin-bottom: 0px;}
        .p163{text-align: justify;padding-left: 51px;padding-right: 55px;margin-top: 18px;margin-bottom: 0px;text-indent: -26px;}
        .p164{text-align: left;padding-left: 51px;padding-right: 55px;margin-top: 5px;margin-bottom: 0px;text-indent: -26px;}
        .p165{text-align: justify;padding-left: 54px;padding-right: 60px;margin-top: 12px;margin-bottom: 0px;text-indent: -29px;}
        .p166{text-align: justify;padding-left: 54px;padding-right: 60px;margin-top: 8px;margin-bottom: 0px;text-indent: -29px;}
        .p167{text-align: left;padding-left: 3px;margin-top: 19px;margin-bottom: 0px;}
        .p168{text-align: left;margin-top: 33px;margin-bottom: 0px;}
        .p169{text-align: justify;padding-left: 60px;padding-right: 47px;margin-top: 13px;margin-bottom: 0px;text-indent: -60px;}
        .p170{text-align: justify;padding-left: 60px;padding-right: 47px;margin-top: 1px;margin-bottom: 0px;text-indent: -60px;}
        .p171{text-align: left;padding-left: 60px;padding-right: 47px;margin-top: 1px;margin-bottom: 0px;text-indent: -60px;}
        .p172{text-align: left;padding-left: 60px;padding-right: 46px;margin-top: 2px;margin-bottom: 0px;text-indent: -60px;}
        .p173{text-align: left;padding-left: 60px;padding-right: 47px;margin-top: 2px;margin-bottom: 0px;text-indent: -60px;}
        .p174{text-align: justify;padding-left: 60px;padding-right: 46px;margin-top: 0px;margin-bottom: 0px;text-indent: -60px;}
        .p175{text-align: justify;padding-left: 60px;padding-right: 46px;margin-top: 1px;margin-bottom: 0px;text-indent: -60px;}
        .p176{text-align: justify;padding-left: 60px;padding-right: 46px;margin-top: 7px;margin-bottom: 0px;text-indent: -60px;}
        .p177{text-align: justify;padding-left: 60px;padding-right: 46px;margin-top: 2px;margin-bottom: 0px;text-indent: -60px;}
        .p178{text-align: justify;padding-left: 60px;padding-right: 46px;margin-top: 3px;margin-bottom: 0px;text-indent: -60px;}
        .p179{text-align: left;padding-left: 65px;padding-right: 47px;margin-top: 5px;margin-bottom: 0px;text-indent: -65px;}
        .p180{text-align: justify;padding-left: 65px;padding-right: 46px;margin-top: 8px;margin-bottom: 0px;text-indent: -65px;}
        .p181{text-align: left;padding-left: 1px;margin-top: 6px;margin-bottom: 0px;}
        .p182{text-align: left;padding-left: 56px;padding-right: 108px;margin-top: 0px;margin-bottom: 0px;}
        .p183{text-align: left;margin-top: 45px;margin-bottom: 0px;}
        .p184{text-align: left;padding-left: 88px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p185{text-align: center;padding-left: 172px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p186{text-align: left;padding-left: 92px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p187{text-align: center;padding-left: 171px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p188{text-align: left;padding-left: 89px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p189{text-align: left;padding-left: 67px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p190{text-align: left;padding-left: 6px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p191{text-align: left;padding-left: 122px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p192{text-align: left;padding-left: 37px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p193{text-align: left;padding-left: 57px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p194{text-align: center;padding-right: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p195{text-align: center;padding-right: 4px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p196{text-align: center;padding-right: 3px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p197{text-align: left;padding-left: 56px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p198{text-align: left;padding-left: 9px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p199{text-align: left;padding-left: 55px;margin-top: 29px;margin-bottom: 0px;}
        .p200{text-align: left;padding-left: 59px;margin-top: 14px;margin-bottom: 0px;}
        .p201{text-align: left;padding-left: 4px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p202{text-align: left;padding-left: 139px;margin-top: 0px;margin-bottom: 0px;}
        .p203{text-align: left;padding-left: 21px;margin-top: 0px;margin-bottom: 0px;}
        .p204{text-align: left;padding-left: 21px;margin-top: 9px;margin-bottom: 0px;}
        .p205{text-align: left;padding-left: 21px;margin-top: 10px;margin-bottom: 0px;}
        .p206{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:830px;height:14px;}
        .p207{text-align: left;padding-left: 338px;margin-top: 0px;margin-bottom: 0px;}
        .p208{text-align: left;padding-left: 294px;margin-top: 4px;margin-bottom: 0px;}
        .p209{text-align: left;padding-left: 70px;margin-top: 21px;margin-bottom: 0px;}
        .p210{text-align: right;padding-right: 49px;margin-top: 18px;margin-bottom: 0px;}
        .p211{text-align: left;padding-left: 70px;margin-top: 0px;margin-bottom: 0px;}
        .p212{text-align: left;padding-left: 10px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p213{text-align: left;padding-left: 20px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p214{text-align: left;padding-left: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p215{text-align: left;padding-left: 109px;padding-right: 516px;margin-top: 25px;margin-bottom: 0px;text-indent: -40px;}
        .p216{text-align: left;padding-left: 69px;margin-top: 36px;margin-bottom: 0px;}
        .p217{text-align: left;padding-left: 87px;margin-top: 121px;margin-bottom: 0px;}
        .p218{text-align: left;padding-left: 40px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p219{text-align: left;padding-left: 18px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p220{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:920px;height:14px;}
        .p221{text-align: left;padding-left: 22px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p222{text-align: left;padding-left: 15px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p223{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:98px;height:14px;}
        .p224{text-align: left;padding-left: 346px;margin-top: 0px;margin-bottom: 0px;}
        .p225{text-align: left;padding-left: 291px;margin-top: 0px;margin-bottom: 0px;}
        .p226{text-align: left;padding-left: 196px;margin-top: 0px;margin-bottom: 0px;}
        .p227{text-align: justify;padding-left: 37px;padding-right: 39px;margin-top: 8px;margin-bottom: 0px;text-indent: -37px;}
        .p228{text-align: justify;padding-left: 37px;padding-right: 36px;margin-top: 2px;margin-bottom: 0px;}
        .p229{text-align: justify;padding-left: 37px;padding-right: 35px;margin-top: 2px;margin-bottom: 0px;text-indent: -37px;}
        .p230{text-align: left;padding-left: 37px;padding-right: 39px;margin-top: 2px;margin-bottom: 0px;text-indent: -36px;}
        .p231{text-align: justify;padding-left: 37px;padding-right: 39px;margin-top: 2px;margin-bottom: 0px;text-indent: -37px;}
        .p232{text-align: justify;padding-left: 37px;padding-right: 38px;margin-top: 2px;margin-bottom: 0px;text-indent: -36px;}
        .p233{text-align: left;padding-left: 36px;padding-right: 39px;margin-top: 3px;margin-bottom: 0px;text-indent: 1px;}
        .p234{text-align: justify;padding-left: 37px;padding-right: 39px;margin-top: 14px;margin-bottom: 0px;text-indent: -36px;}
        .p235{text-align: left;padding-left: 36px;padding-right: 513px;margin-top: 3px;margin-bottom: 0px;text-indent: 1px;}
        .p236{text-align: justify;padding-left: 37px;padding-right: 39px;margin-top: 13px;margin-bottom: 0px;text-indent: -36px;}
        .p237{text-align: left;padding-left: 37px;margin-top: 8px;margin-bottom: 0px;}
        .p238{text-align: left;padding-left: 37px;padding-right: 39px;margin-top: 8px;margin-bottom: 0px;text-indent: -37px;}
        .p239{text-align: left;padding-left: 283px;margin-top: 0px;margin-bottom: 0px;}
        .p240{text-align: left;padding-left: 60px;margin-top: 9px;margin-bottom: 0px;}
        .p241{text-align: left;padding-left: 46px;margin-top: 65px;margin-bottom: 0px;}
        .p242{text-align: left;padding-left: 44px;margin-top: 13px;margin-bottom: 0px;}
        .p243{text-align: left;padding-left: 44px;margin-top: 6px;margin-bottom: 0px;}
        .p244{text-align: left;padding-left: 44px;margin-top: 7px;margin-bottom: 0px;}
        .p245{text-align: left;padding-left: 97px;padding-right: 89px;margin-top: 7px;margin-bottom: 0px;text-indent: -53px;}
        .p246{text-align: left;padding-left: 42px;margin-top: 4px;margin-bottom: 0px;}
        .p247{text-align: left;padding-left: 42px;margin-top: 5px;margin-bottom: 0px;}
        .p248{text-align: left;padding-left: 42px;margin-top: 14px;margin-bottom: 0px;}
        .p249{text-align: left;padding-left: 101px;margin-top: 15px;margin-bottom: 0px;}
        .p250{text-align: left;padding-left: 42px;margin-top: 28px;margin-bottom: 0px;}
        .p251{text-align: left;padding-left: 42px;margin-top: 26px;margin-bottom: 0px;}
        .p252{text-align: left;padding-left: 269px;margin-top: 0px;margin-bottom: 0px;}
        .p253{text-align: left;padding-left: 12px;padding-right: 91px;margin-top: 24px;margin-bottom: 0px;}
        .p254{text-align: left;padding-left: 12px;margin-top: 0px;margin-bottom: 0px;}
        .p255{text-align: left;padding-left: 12px;margin-top: 37px;margin-bottom: 0px;}
        .p256{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:381px;height:14px;}
        .p257{text-align: left;padding-left: 260px;margin-top: 0px;margin-bottom: 0px;}
        .p258{text-align: left;padding-left: 555px;margin-top: 5px;margin-bottom: 0px;}
        .p259{text-align: right;padding-right: 11px;margin-top: 3px;margin-bottom: 0px;}
        .p260{text-align: left;padding-left: 555px;margin-top: 3px;margin-bottom: 0px;}
        .p261{text-align: left;padding-left: 49px;margin-top: 20px;margin-bottom: 0px;}
        .p262{text-align: left;padding-left: 49px;padding-right: 19px;margin-top: 2px;margin-bottom: 0px;}
        .p263{text-align: left;padding-left: 49px;margin-top: 0px;margin-bottom: 0px;}
        .p264{text-align: left;padding-left: 48px;margin-top: 18px;margin-bottom: 0px;}
        .p265{text-align: justify;padding-left: 48px;padding-right: 17px;margin-top: 2px;margin-bottom: 0px;}
        .p266{text-align: justify;padding-left: 49px;padding-right: 17px;margin-top: 0px;margin-bottom: 0px;}
        .p267{text-align: left;padding-left: 49px;margin-top: 68px;margin-bottom: 0px;}
        .p268{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:165px;height:14px;}
        .p269{text-align: left;padding-left: 1px;margin-top: 2px;margin-bottom: 0px;}
        .p270{text-align: left;padding-left: 1px;margin-top: 1px;margin-bottom: 0px;}
        .p271{text-align: justify;padding-right: 1px;margin-top: 2px;margin-bottom: 0px;}
        .p272{text-align: justify;padding-left: 1px;padding-right: 1px;margin-top: 0px;margin-bottom: 0px;}
        .p273{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:167px;height:11px;}
        .p274{text-align: left;padding-left: 63px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p275{text-align: left;padding-left: 235px;margin-top: 8px;margin-bottom: 0px;}
        .p276{text-align: left;padding-left: 2px;margin-top: 22px;margin-bottom: 0px;}
        .p277{text-align: left;padding-left: 2px;margin-top: 25px;margin-bottom: 0px;}
        .p278{text-align: justify;padding-right: 20px;margin-top: 37px;margin-bottom: 0px;}
        .p279{text-align: justify;padding-right: 18px;margin-top: 3px;margin-bottom: 0px;}
        .p280{text-align: justify;padding-right: 20px;margin-top: 3px;margin-bottom: 0px;}
        .p281{text-align: left;margin-top: 54px;margin-bottom: 0px;}
        .p282{text-align: left;margin-top: 23px;margin-bottom: 0px;}
        .p283{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:440px;height:14px;}
        .p284{text-align: left;margin-top: 6px;margin-bottom: 0px;}
        .p285{text-align: left;padding-left: 41px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p286{text-align: left;padding-left: 223px;margin-top: 21px;margin-bottom: 0px;}
        .p287{text-align: left;margin-top: 8px;margin-bottom: 0px;}
        .p288{text-align: left;padding-left: 1px;margin-top: 28px;margin-bottom: 0px;}
        .p289{text-align: left;padding-left: 1px;margin-top: 25px;margin-bottom: 0px;}
        .p290{text-align: left;padding-left: 8px;margin-top: 33px;margin-bottom: 0px;}
        .p291{text-align: left;padding-left: 8px;margin-top: 32px;margin-bottom: 0px;}
        .p292{text-align: left;padding-left: 7px;margin-top: 14px;margin-bottom: 0px;}
        .p293{text-align: left;padding-left: 9px;margin-top: 20px;margin-bottom: 0px;}
        .p294{text-align: left;padding-left: 9px;margin-top: 6px;margin-bottom: 0px;}
        .p295{text-align: left;padding-left: 9px;margin-top: 5px;margin-bottom: 0px;}
        .p296{text-align: left;padding-left: 9px;margin-top: 13px;margin-bottom: 0px;}
        .p297{text-align: left;padding-left: 9px;padding-right: 52px;margin-top: 6px;margin-bottom: 0px;}
        .p298{text-align: justify;padding-left: 50px;padding-right: 52px;margin-top: 10px;margin-bottom: 0px;text-indent: -41px;}
        .p299{text-align: justify;padding-left: 50px;padding-right: 52px;margin-top: 15px;margin-bottom: 0px;text-indent: -41px;}
        .p300{text-align: justify;padding-left: 50px;padding-right: 52px;margin-top: 13px;margin-bottom: 0px;text-indent: -41px;}
        .p301{text-align: justify;padding-left: 46px;padding-right: 46px;margin-top: 4px;margin-bottom: 0px;text-indent: -41px;}
        .p302{text-align: left;padding-left: 44px;padding-right: 67px;margin-top: 15px;margin-bottom: 0px;text-indent: -37px;}
        .p303{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:540px;height:14px;}
        .p304{text-align: left;padding-right: 48px;margin-top: 0px;margin-bottom: 0px;}
        .p305{text-align: left;margin-top: 68px;margin-bottom: 0px;}
        .p306{text-align: left;padding-left: 222px;margin-top: 10px;margin-bottom: 0px;}
        .p307{text-align: left;margin-top: 11px;margin-bottom: 0px;}
        .p308{text-align: left;margin-top: 42px;margin-bottom: 0px;}
        .p309{text-align: left;margin-top: 4px;margin-bottom: 0px;}
        .p310{text-align: left;margin-top: 24px;margin-bottom: 0px;}
        .p311{text-align: justify;padding-right: 4px;margin-top: 4px;margin-bottom: 0px;}
        .p312{text-align: justify;padding-right: 4px;margin-top: 0px;margin-bottom: 0px;}
        .p313{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:200px;height:11px;}
        .p314{text-align: right;padding-right: 130px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p315{text-align: left;padding-left: 13px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p316{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:200px;height:14px;}
        .p317{text-align: left;padding-left: 266px;margin-top: 0px;margin-bottom: 0px;}
        .p318{text-align: left;padding-left: 21px;margin-top: 32px;margin-bottom: 0px;}
        .p319{text-align: left;padding-right: 449px;margin-top: 0px;margin-bottom: 0px;}
        .p320{text-align: left;padding-left: 273px;margin-top: 27px;margin-bottom: 0px;}
        .p321{text-align: left;padding-left: 254px;margin-top: 26px;margin-bottom: 0px;}
        .p322{text-align: left;padding-left: 8px;margin-top: 7px;margin-bottom: 0px;}
        .p323{text-align: justify;padding-left: 1px;padding-right: 43px;margin-top: 36px;margin-bottom: 0px;}
        .p324{text-align: left;padding-left: 1px;margin-top: 19px;margin-bottom: 0px;}
        .p325{text-align: left;margin-top: 22px;margin-bottom: 0px;}
        .p326{text-align: left;padding-right: 23px;margin-top: 21px;margin-bottom: 0px;}
        .p327{text-align: left;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p327::after{display:inline-block;width:0;white-space:nowrap;content:"........................................................................."}
        .p328{text-align: left;padding-right: 23px;margin-top: 20px;margin-bottom: 0px;}
        .p329{text-align: left;padding-left: 17px;padding-right: 29px;margin-top: 19px;margin-bottom: 0px;text-indent: -17px;}
        .p330{text-align: left;padding-left: 17px;padding-right: 43px;margin-top: 19px;margin-bottom: 0px;text-indent: -17px;}
        .p331{text-align: left;margin-top: 38px;margin-bottom: 0px;}
        .p332{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:385px;height:14px;}
        .p333{text-align: left;margin-top: 72px;margin-bottom: 0px;}
        .p334{text-align: left;margin-top: 41px;margin-bottom: 0px;}
        .p335{text-align: left;padding-left: 200px;margin-top: 0px;margin-bottom: 0px;}
        
        .td0{border-left: #000000 1px solid;border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 35px;vertical-align: bottom;}
        .td1{border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 60px;vertical-align: bottom;}
        .td2{border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 165px;vertical-align: bottom;}
        .td3{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 373px;vertical-align: bottom;}
        .td4{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 61px;vertical-align: bottom;}
        .td5{border-left: #000000 1px solid;border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 35px;vertical-align: bottom;}
        .td6{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 225px;vertical-align: bottom;}
        .td7{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;}
        .td8{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 367px;vertical-align: bottom;}
        .td9{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 61px;vertical-align: bottom;}
        .td10{border-left: #000000 1px solid;border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 35px;vertical-align: bottom;}
        .td11{padding: 0px;margin: 0px;width: 225px;vertical-align: bottom;}
        .td12{padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;}
        .td13{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 367px;vertical-align: bottom;}
        .td14{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 61px;vertical-align: bottom;}
        .td15{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 60px;vertical-align: bottom;}
        .td16{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 165px;vertical-align: bottom;}
        .td17{padding: 0px;margin: 0px;width: 60px;vertical-align: bottom;}
        .td18{padding: 0px;margin: 0px;width: 165px;vertical-align: bottom;}
        .td19{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;}
        .td20{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;}
        .td21{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 230px;vertical-align: bottom;}
        .td22{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 598px;vertical-align: bottom;}
        .td23{padding: 0px;margin: 0px;width: 358px;vertical-align: bottom;}
        .td24{padding: 0px;margin: 0px;width: 252px;vertical-align: bottom;}
        .td25{padding: 0px;margin: 0px;width: 81px;vertical-align: bottom;}
        .td26{padding: 0px;margin: 0px;width: 111px;vertical-align: bottom;}
        .td27{padding: 0px;margin: 0px;width: 395px;vertical-align: bottom;}
        .td28{padding: 0px;margin: 0px;width: 191px;vertical-align: bottom;}
        .td29{padding: 0px;margin: 0px;width: 586px;vertical-align: bottom;}
        .td30{padding: 0px;margin: 0px;width: 506px;vertical-align: bottom;}
        .td31{padding: 0px;margin: 0px;width: 52px;vertical-align: bottom;}
        .td32{padding: 0px;margin: 0px;width: 583px;vertical-align: bottom;}
        .td33{padding: 0px;margin: 0px;width: 59px;vertical-align: bottom;}
        .td34{padding: 0px;margin: 0px;width: 232px;vertical-align: bottom;}
        .td35{padding: 0px;margin: 0px;width: 406px;vertical-align: bottom;}
        .td36{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 59px;vertical-align: bottom;}
        .td37{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 232px;vertical-align: bottom;}
        .td38{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 406px;vertical-align: bottom;}
        .td39{padding: 0px;margin: 0px;width: 281px;vertical-align: bottom;}
        .td40{padding: 0px;margin: 0px;width: 384px;vertical-align: bottom;}
        .td41{padding: 0px;margin: 0px;width: 0px;vertical-align: bottom;}
        .td42{padding: 0px;margin: 0px;width: 241px;vertical-align: bottom;}
        .td43{padding: 0px;margin: 0px;width: 271px;vertical-align: bottom;}
        .td44{padding: 0px;margin: 0px;width: 125px;vertical-align: bottom;}
        .td45{padding: 0px;margin: 0px;width: 396px;vertical-align: bottom;}
        .td46{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 241px;vertical-align: bottom;}
        .td47{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 153px;vertical-align: bottom;}
        .td48{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 118px;vertical-align: bottom;}
        .td49{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 125px;vertical-align: bottom;}
        .td50{padding: 0px;margin: 0px;width: 153px;vertical-align: bottom;}
        .td51{padding: 0px;margin: 0px;width: 118px;vertical-align: bottom;}
        .td52{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 396px;vertical-align: bottom;}
        .td53{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 123px;vertical-align: bottom;}
        .td54{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 432px;vertical-align: bottom;}
        .td55{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 117px;vertical-align: bottom;}
        .td56{padding: 0px;margin: 0px;width: 123px;vertical-align: bottom;}
        .td57{padding: 0px;margin: 0px;width: 432px;vertical-align: bottom;}
        .td58{padding: 0px;margin: 0px;width: 117px;vertical-align: bottom;}
        .td59{padding: 0px;margin: 0px;width: 493px;vertical-align: bottom;}
        .td60{padding: 0px;margin: 0px;width: 150px;vertical-align: bottom;}
        .td61{padding: 0px;margin: 0px;width: 489px;vertical-align: bottom;}
        .td62{border-left: #000000 1px solid;border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 224px;vertical-align: bottom;}
        .td63{padding: 0px;margin: 0px;width: 183px;vertical-align: bottom;}
        .td64{padding: 0px;margin: 0px;width: 313px;vertical-align: bottom;}
        .td65{padding: 0px;margin: 0px;width: 82px;vertical-align: bottom;}
        .td66{border-left: #000000 1px solid;border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 225px;vertical-align: bottom;}
        .td67{padding: 0px;margin: 0px;width: 166px;vertical-align: bottom;}
        .td68{padding: 0px;margin: 0px;width: 467px;vertical-align: bottom;}
        .td69{padding: 0px;margin: 0px;width: 195px;vertical-align: bottom;}
        .td70{padding: 0px;margin: 0px;width: 110px;vertical-align: bottom;}
        .td71{padding: 0px;margin: 0px;width: 452px;vertical-align: bottom;}
        .td72{padding: 0px;margin: 0px;width: 562px;vertical-align: bottom;}
        .td73{padding: 0px;margin: 0px;width: 486px;vertical-align: bottom;}
        .td74{padding: 0px;margin: 0px;width: 162px;vertical-align: bottom;}
        .td75{padding: 0px;margin: 0px;width: 208px;vertical-align: bottom;}
        .td76{padding: 0px;margin: 0px;width: 400px;vertical-align: bottom;}
        .td77{padding: 0px;margin: 0px;width: 602px;vertical-align: bottom;}
        .td78{padding: 0px;margin: 0px;width: 65px;vertical-align: bottom;}
        .td79{padding: 0px;margin: 0px;width: 285px;vertical-align: bottom;}
        .td80{padding: 0px;margin: 0px;width: 151px;vertical-align: bottom;}
        .td81{padding: 0px;margin: 0px;width: 223px;vertical-align: bottom;}
        
        .tr0{height: 35px;}
        .tr1{height: 4px;}
        .tr2{height: 26px;}
        .tr3{height: 5px;}
        .tr4{height: 41px;}
        .tr5{height: 31px;}
        .tr6{height: 24px;}
        .tr7{height: 32px;}
        .tr8{height: 9px;}
        .tr9{height: 28px;}
        .tr10{height: 33px;}
        .tr11{height: 12px;}
        .tr12{height: 25px;}
        .tr13{height: 23px;}
        .tr14{height: 3px;}
        .tr15{height: 44px;}
        .tr16{height: 10px;}
        .tr17{height: 15px;}
        .tr18{height: 22px;}
        .tr19{height: 21px;}
        .tr20{height: 29px;}
        .tr21{height: 13px;}
        .tr22{height: 38px;}
        .tr23{height: 14px;}
        .tr24{height: 19px;}
        .tr25{height: 6px;}
        .tr26{height: 20px;}
        .tr27{height: 17px;}
        .tr28{height: 27px;}
        .tr29{height: 18px;}
        .tr30{height: 47px;}
        .tr31{height: 49px;}
        .tr32{height: 30px;}
        .tr33{height: 55px;}
        .tr34{height: 61px;}
        .tr35{height: 2px;}
        .tr36{height: 60px;}
        .tr37{height: 72px;}
        .tr38{height: 16px;}
        .tr39{height: 11px;}
        .tr40{height: 37px;}
        .tr41{height: 8px;}
        .tr42{height: 7px;}
        .tr43{height: 40px;}
        .tr44{height: 80px;}
        .tr45{height: 34px;}
        
        .t0{width: 697px;margin-top: 54px;font: 13px 'Arial';}
        .t1{width: 691px;margin-top: 115px;font: bold 13px 'Arial';}
        .t2{width: 691px;margin-left: 2px;margin-top: 89px;font: bold 13px 'Arial';}
        .t3{width: 691px;margin-left: 6px;margin-top: 115px;font: bold 13px 'Arial';}
        .t4{width: 691px;margin-left: 4px;margin-top: 92px;font: bold 13px 'Arial';}
        .t5{width: 691px;margin-top: 129px;font: bold 13px 'Arial';}
        .t6{width: 691px;margin-top: 98px;font: bold 13px 'Arial';}
        .t7{width: 691px;margin-top: 187px;font: bold 13px 'Arial';}
        .t8{width: 691px;margin-left: 4px;margin-top: 134px;font: bold 13px 'Arial';}
        .t9{width: 691px;margin-left: 3px;margin-top: 133px;font: bold 13px 'Arial';}
        .t10{width: 691px;margin-left: 1px;margin-top: 224px;font: bold 13px 'Arial';}
        .t11{width: 697px;margin-top: 14px;font: 13px 'Arial';}
        .t12{width: 635px;margin-left: 57px;margin-top: 11px;font: 13px 'Arial';}
        .t13{width: 691px;margin-top: 117px;font: bold 13px 'Arial';}
        .t14{width: 697px;margin-left: 49px;font: 13px 'Arial';}
        .t15{width: 665px;margin-left: 69px;margin-top: 89px;font: 13px 'Arial';}
        .t16{width: 691px;font: bold 13px 'Arial';}
        .t17{width: 697px;margin-top: 16px;font: 13px 'Arial';}
        .t18{width: 691px;margin-left: 2px;margin-top: 397px;font: bold 13px 'Arial';}
        .t19{width: 691px;margin-left: 2px;margin-top: 245px;font: bold 13px 'Arial';}
        .t20{width: 691px;margin-top: 422px;font: bold 13px 'Arial';}
        .t21{width: 672px;margin-left: 10px;margin-top: 6px;font: 16px 'Arial';}
        .t22{width: 691px;margin-top: 150px;font: bold 13px 'Arial';}
        .t23{width: 643px;margin-left: 49px;margin-top: 50px;font: 13px 'Arial';}
        .t24{width: 639px;margin-top: 50px;font: 13px 'Arial';}
        .t25{width: 409px;margin-left: 2px;font: 13px 'Arial';}
        .t26{width: 647px;font: bold 13px 'Arial';}
        .t27{width: 393px;margin-left: 8px;font: 13px 'Arial';}
        .t28{width: 662px;margin-left: 2px;margin-top: 147px;font: bold 16px 'Arial';}
        .t29{width: 562px;margin-top: 19px;font: 13px 'Arial';}
        .t30{width: 648px;font: bold 13px 'Arial';}
        .t31{width: 604px;margin-left: 1px;margin-top: 40px;font: 13px 'Arial';}
        .t32{width: 608px;margin-left: 1px;margin-top: 58px;font: 13px 'Arial';}
        .t33{width: 667px;font: 13px 'Arial';}
        .t34{width: 659px;font: 13px 'Arial';}
        .t35{width: 691px;margin-top: 939px;font: bold 13px 'Arial';}
        table { width: 90%; border-collapse: collapse; border: 1px solid #000;font-size: 14px;}
        table td {padding: 10px; border: 1px solid #000;}
        table th {padding: 5px;text-align: left;}
    </STYLE>



</head>





<BODY>
    <DIV id="page_1">
    <DIV id="id1_1">

    <P class="p0 ft0">INSTRUCTIONS FOR FILLING AGREEMENT</P>
    <P class="p1 ft1">General Instructions :</P>
    <P class="p2 ft1">All applications to be filled in <SPAN class="ft2">English </SPAN>in CAPITAL LETTERS using Ballpoint pen only.</P>
    <P class="p3 ft3">Any amendments / overwriting / erasures/cuttings / hand written information in the blank space on any page should be countersigned.</P>
    <P class="p4 ft4">The signature of the Borrower / <NOBR>Co-Borrower /</NOBR> Guarantor should be the same on the Loan Agreement & Loan Application Form.</P>
    <P class="p5 ft1">All photocopies provided, to be <NOBR>self-attested /</NOBR> authenticated.</P>
    <P class="p6 ft4">All pages of Schedules, Loan Agreement and Annexures to be mandatorily signed by the Borrower / Co Borrower and Guarantor, as may be specifically mentioned.</P>
    <P class="p7 ft3">Deeds / agreements, as per format of PFSL, to be additionally executed with the Borrower(s) / Guarantor(s) as may be required under the terms of the Sanction Letter and appended to the Personal Loan Facility Agreement</P>

    <table style="margin-top: 20px;">
        <tr>
            <th colspan="2">For Office Use Only</th>
        </tr>
        <tr>
            <td>Customer ID:</td>
            <td></td>
        </tr>
        <tr>
            <td>Name of the Borrower:</td>
            <td></td>
        </tr>
        <tr>
            <td>Name of the Co-Borrower:</td>
            <td></td>
        </tr>
        <tr>
            <td>Name of the Guarantor:</td>
            <td></td>
        </tr>
        <tr>
            <td>Loan Application Number:</td>
            <td></td>
        </tr>
        <tr>
            <td>Loan Account Number:</td>
            <td></td>
        </tr>
    </table>
    </DIV>
    </DIV>


    <div class="page-break"></div>










    <DIV id="page_2">
    
    
    <DIV id="id2_1">
    <P class="p14 ft8">INDEX OF LEGAL DOCUMENTS FOR PERSONAL LOAN</P>
    <TABLE cellpadding=0 cellspacing=0 class="t0">
    <TR>
        <TD class="tr0 td0"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr0 td1"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr0 td2"><P class="p15 ft9">&nbsp;</P></TD>
        <TD colspan=2 class="tr0 td3"><P class="p15 ft10">NAME OF DOCUMENT</P></TD>
        <TD class="tr0 td4"><P class="p16 ft11">Page No.</P></TD>
    </TR>
    <TR>
        <TD class="tr1 td5"><P class="p15 ft12">&nbsp;</P></TD>
        <TD colspan=2 class="tr1 td6"><P class="p15 ft12">&nbsp;</P></TD>
        <TD class="tr1 td7"><P class="p15 ft12">&nbsp;</P></TD>
        <TD class="tr1 td8"><P class="p15 ft12">&nbsp;</P></TD>
        <TD class="tr1 td9"><P class="p15 ft12">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr2 td10"><P class="p17 ft1">1</P></TD>
        <TD colspan=2 class="tr2 td11"><P class="p18 ft2">LOAN AGREEMENT</P></TD>
        <TD class="tr2 td12"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr2 td13"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr2 td14"><P class="p19 ft1">3</P></TD>
    </TR>
    <TR>
        <TD class="tr3 td5"><P class="p15 ft13">&nbsp;</P></TD>
        <TD colspan=2 class="tr3 td6"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td7"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td8"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td9"><P class="p15 ft13">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr4 td10"><P class="p17 ft1">2</P></TD>
        <TD colspan=2 class="tr4 td11"><P class="p18 ft2">SCHEDULE OF AGREEMENT</P></TD>
        <TD class="tr4 td12"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr4 td13"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr4 td14"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr3 td5"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td15"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td16"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td7"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td8"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td9"><P class="p15 ft13">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr5 td10"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr5 td17"><P class="p18 ft1">(I)</P></TD>
        <TD class="tr5 td18"><P class="p15 ft1">Schedule - I</P></TD>
        <TD class="tr5 td19"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr5 td13"><P class="p20 ft1">Details of Borrower(s), Guarantor with</P></TD>
        <TD class="tr5 td14"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr6 td10"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr6 td17"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr6 td18"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr6 td19"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr6 td13"><P class="p20 ft1">date and place of execution</P></TD>
        <TD class="tr6 td14"><P class="p19 ft1">17</P></TD>
    </TR>
    <TR>
        <TD class="tr3 td5"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td15"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td16"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td20"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td8"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td9"><P class="p15 ft13">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr7 td10"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr7 td17"><P class="p18 ft1">(ii)</P></TD>
        <TD class="tr7 td18"><P class="p15 ft1">Schedule - II</P></TD>
        <TD class="tr7 td19"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr7 td13"><P class="p20 ft1">Key Facts of Loan Agreement</P></TD>
        <TD class="tr7 td14"><P class="p19 ft1">18</P></TD>
    </TR>
    <TR>
        <TD class="tr8 td5"><P class="p15 ft14">&nbsp;</P></TD>
        <TD class="tr8 td15"><P class="p15 ft14">&nbsp;</P></TD>
        <TD class="tr8 td16"><P class="p15 ft14">&nbsp;</P></TD>
        <TD class="tr8 td20"><P class="p15 ft14">&nbsp;</P></TD>
        <TD class="tr8 td8"><P class="p15 ft14">&nbsp;</P></TD>
        <TD class="tr8 td9"><P class="p15 ft14">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr9 td10"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr9 td17"><P class="p18 ft1">(iii)</P></TD>
        <TD class="tr9 td18"><P class="p15 ft1">Schedule - III</P></TD>
        <TD class="tr9 td19"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr9 td13"><P class="p20 ft1">Other Terms and Conditions of Sanction of Personal Loan</P></TD>
        <TD class="tr9 td14"><P class="p21 ft1">20</P></TD>
    </TR>
    <TR>
        <TD class="tr3 td5"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td15"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td16"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td20"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td8"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td9"><P class="p15 ft13">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr10 td10"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr10 td17"><P class="p18 ft1">(iv)</P></TD>
        <TD class="tr10 td18"><P class="p15 ft1">Schedule - IV</P></TD>
        <TD class="tr10 td19"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr10 td13"><P class="p20 ft1">Documents to be attached with Application for loan</P></TD>
        <TD class="tr10 td14"><P class="p22 ft1">21</P></TD>
    </TR>
    <TR>
        <TD class="tr11 td5"><P class="p15 ft15">&nbsp;</P></TD>
        <TD class="tr11 td15"><P class="p15 ft15">&nbsp;</P></TD>
        <TD class="tr11 td16"><P class="p15 ft15">&nbsp;</P></TD>
        <TD class="tr11 td20"><P class="p15 ft15">&nbsp;</P></TD>
        <TD class="tr11 td8"><P class="p15 ft15">&nbsp;</P></TD>
        <TD class="tr11 td9"><P class="p15 ft15">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr12 td10"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr12 td17"><P class="p18 ft1">(v)</P></TD>
        <TD class="tr12 td18"><P class="p15 ft1">Schedule <NOBR>–V</NOBR></P></TD>
        <TD class="tr12 td19"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr12 td13"><P class="p20 ft1">Facility Specific Documents to be attached with the</P></TD>
        <TD class="tr12 td14"><P class="p22 ft1">22</P></TD>
    </TR>
    <TR>
        <TD class="tr13 td10"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr13 td17"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr13 td18"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr13 td19"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr13 td13"><P class="p20 ft1">Loan Agreement</P></TD>
        <TD class="tr13 td14"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr14 td5"><P class="p15 ft16">&nbsp;</P></TD>
        <TD colspan=3 class="tr14 td21"><P class="p15 ft16">&nbsp;</P></TD>
        <TD class="tr14 td8"><P class="p15 ft16">&nbsp;</P></TD>
        <TD class="tr14 td9"><P class="p15 ft16">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr15 td10"><P class="p17 ft1">3</P></TD>
        <TD colspan=4 class="tr15 td22"><P class="p18 ft2">ANNEXURES OF OTHER LEGAL INSTRUMENTS EXECUTED BY BORROWER (S)</P></TD>
        <TD class="tr15 td14"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr6 td10"><P class="p15 ft9">&nbsp;</P></TD>
        <TD colspan=4 class="tr6 td22"><P class="p18 ft2">IN CONNECTION WITH LOAN AGREEMENT</P></TD>
        <TD class="tr6 td14"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr16 td5"><P class="p15 ft17">&nbsp;</P></TD>
        <TD class="tr16 td15"><P class="p15 ft17">&nbsp;</P></TD>
        <TD class="tr16 td16"><P class="p15 ft17">&nbsp;</P></TD>
        <TD class="tr16 td7"><P class="p15 ft17">&nbsp;</P></TD>
        <TD class="tr16 td8"><P class="p15 ft17">&nbsp;</P></TD>
        <TD class="tr16 td9"><P class="p15 ft17">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr2 td10"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr2 td17"><P class="p18 ft1">(v)</P></TD>
        <TD class="tr2 td18"><P class="p15 ft1">Annexure - I</P></TD>
        <TD class="tr2 td19"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr2 td13"><P class="p20 ft1">Demand Promissory Note</P></TD>
        <TD class="tr2 td14"><P class="p19 ft1">23</P></TD>
    </TR>
    <TR>
        <TD class="tr17 td5"><P class="p15 ft18">&nbsp;</P></TD>
        <TD class="tr17 td15"><P class="p15 ft18">&nbsp;</P></TD>
        <TD class="tr17 td16"><P class="p15 ft18">&nbsp;</P></TD>
        <TD class="tr17 td20"><P class="p15 ft18">&nbsp;</P></TD>
        <TD class="tr17 td8"><P class="p15 ft18">&nbsp;</P></TD>
        <TD class="tr17 td9"><P class="p15 ft18">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr18 td10"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr18 td17"><P class="p18 ft1">(vi)</P></TD>
        <TD class="tr18 td18"><P class="p15 ft1">Annexure - II</P></TD>
        <TD class="tr18 td19"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr18 td13"><P class="p20 ft1">Letter of Continuity to secure recovery</P></TD>
        <TD class="tr18 td14"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr19 td10"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr19 td17"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr19 td18"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr19 td19"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr19 td13"><P class="p20 ft1">of loan amount until completely paid off</P></TD>
        <TD class="tr19 td14"><P class="p19 ft1">24</P></TD>
    </TR>
    <TR>
        <TD class="tr3 td5"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td15"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td16"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td20"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td8"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td9"><P class="p15 ft13">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr20 td10"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr20 td17"><P class="p18 ft1">(vii)</P></TD>
        <TD class="tr20 td18"><P class="p15 ft1">Annexure - III</P></TD>
        <TD class="tr20 td19"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr20 td13"><P class="p20 ft1">Undertaking Cum Indemnity</P></TD>
        <TD class="tr20 td14"><P class="p19 ft1">25</P></TD>
    </TR>
    <TR>
        <TD class="tr8 td5"><P class="p15 ft14">&nbsp;</P></TD>
        <TD class="tr8 td15"><P class="p15 ft14">&nbsp;</P></TD>
        <TD class="tr8 td16"><P class="p15 ft14">&nbsp;</P></TD>
        <TD class="tr8 td20"><P class="p15 ft14">&nbsp;</P></TD>
        <TD class="tr8 td8"><P class="p15 ft14">&nbsp;</P></TD>
        <TD class="tr8 td9"><P class="p15 ft14">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr12 td10"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr12 td17"><P class="p18 ft1">(viii)</P></TD>
        <TD class="tr12 td18"><P class="p15 ft1">Annexure - IV</P></TD>
        <TD class="tr12 td19"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr12 td13"><P class="p20 ft1">Request for disbursement</P></TD>
        <TD class="tr12 td14"><P class="p19 ft1">27</P></TD>
    </TR>
    <TR>
        <TD class="tr21 td5"><P class="p15 ft19">&nbsp;</P></TD>
        <TD class="tr21 td15"><P class="p15 ft19">&nbsp;</P></TD>
        <TD class="tr21 td16"><P class="p15 ft19">&nbsp;</P></TD>
        <TD class="tr21 td20"><P class="p15 ft19">&nbsp;</P></TD>
        <TD class="tr21 td8"><P class="p15 ft19">&nbsp;</P></TD>
        <TD class="tr21 td9"><P class="p15 ft19">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr19 td10"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr19 td17"><P class="p18 ft1">(ix)</P></TD>
        <TD class="tr19 td18"><P class="p15 ft1">Annexure – V</P></TD>
        <TD class="tr19 td19"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr19 td13"><P class="p20 ft1">Borrower's request to employer for EMI deduction</P></TD>
        <TD class="tr19 td14"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr18 td5"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr18 td15"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr18 td16"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr18 td20"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr18 td8"><P class="p20 ft1">from salary</P></TD>
        <TD class="tr18 td9"><P class="p19 ft1">28</P></TD>
    </TR>
    <TR>
        <TD class="tr13 td10"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr13 td17"><P class="p18 ft1">(x)</P></TD>
        <TD class="tr13 td18"><P class="p15 ft1">Annexure - VI</P></TD>
        <TD class="tr13 td19"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr13 td13"><P class="p20 ft1">NACH Declaration</P></TD>
        <TD class="tr13 td14"><P class="p19 ft1">30</P></TD>
    </TR>
    <TR>
        <TD class="tr16 td5"><P class="p15 ft17">&nbsp;</P></TD>
        <TD colspan=3 class="tr16 td21"><P class="p15 ft17">&nbsp;</P></TD>
        <TD class="tr16 td8"><P class="p15 ft17">&nbsp;</P></TD>
        <TD class="tr16 td9"><P class="p15 ft17">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr22 td10"><P class="p17 ft1">4</P></TD>
        <TD colspan=4 class="tr22 td22"><P class="p18 ft2">VERNACULAR DECLARATION BY <NOBR>BORROWER-APPLICANT(S)</NOBR></P></TD>
        <TD class="tr22 td14"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr23 td10"><P class="p15 ft20">&nbsp;</P></TD>
        <TD colspan=4 class="tr23 td22"><P class="p18 ft21">VERNACULAR CERTIFICATE BY VERBAL TRANSLATOR AND</P></TD>
        <TD class="tr23 td14"><P class="p15 ft20">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr24 td10"><P class="p15 ft9">&nbsp;</P></TD>
        <TD colspan=2 class="tr24 td11"><P class="p18 ft2">INTERPRETER(IN ENGLISH)</P></TD>
        <TD class="tr24 td12"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr24 td13"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr24 td14"><P class="p19 ft1">31</P></TD>
    </TR>
    <TR>
        <TD class="tr8 td5"><P class="p15 ft14">&nbsp;</P></TD>
        <TD colspan=2 class="tr8 td6"><P class="p15 ft14">&nbsp;</P></TD>
        <TD class="tr8 td7"><P class="p15 ft14">&nbsp;</P></TD>
        <TD class="tr8 td8"><P class="p15 ft14">&nbsp;</P></TD>
        <TD class="tr8 td9"><P class="p15 ft14">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr7 td10"><P class="p17 ft1">5</P></TD>
        <TD colspan=2 class="tr7 td11"><P class="p23 ft2">MISCELLANEOUS DOCUMENTS</P></TD>
        <TD class="tr7 td12"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr7 td13"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr7 td14"><P class="p19 ft1">32</P></TD>
    </TR>
    <TR>
        <TD class="tr25 td5"><P class="p15 ft22">&nbsp;</P></TD>
        <TD class="tr25 td15"><P class="p15 ft22">&nbsp;</P></TD>
        <TD class="tr25 td16"><P class="p15 ft22">&nbsp;</P></TD>
        <TD class="tr25 td7"><P class="p15 ft22">&nbsp;</P></TD>
        <TD class="tr25 td8"><P class="p15 ft22">&nbsp;</P></TD>
        <TD class="tr25 td9"><P class="p15 ft22">&nbsp;</P></TD>
    </TR>
    </TABLE>
    </DIV>
    <DIV id="id2_2">
    <P class="p13 ft7">2</P>
    </DIV>
    </DIV>
    <DIV id="page_3">
    <DIV id="p3dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAArwAAAPSCAIAAAAWUZ6KAAAQFklEQVR4nO3ZQWrDUBAFQU/w/a88WWQTyKaxId9CVSd4CGlo0Dzgsnb39ASAG3k+XF6uaWZOTwC4l6/TAwCAaxANAEAiGgCARDQAAIloAAAS0QAAJKIBAEhEAwCQiAYAIBENAEAiGgCARDQAAIloAAAS0QAAJKIBAEhEAwCQiAYAIBENAEAiGgCAZE4PgNft7ukJADcyzi4AUPg9AQAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkogEASEQDAJCIBgAgEQ0AQCIaAIBENAAAiWgAABLRAAAkz9MDgA81M6cn/IfdPT2Bj3CTF/5N8/PBeFj85ZgC8Ns3E5EcnEIigGcAAAAASUVORK5CYII=" id="p3img1"></DIV>
    
    
    <DIV class="dclr"></DIV>
    <DIV id="id3_1">
    <P class="p13 ft1">100/- Non Judicial Stamp to be affixed</P>
    <P class="p24 ft23">PERSONAL LOAN FACILITY AGREEMENT</P>
    <P class="p25 ft8">This Personal Loan Agreement is made and executed at the place and date stated in the</P>
    <P class="p26 ft8"><NOBR>Schedule-I</NOBR> hereunder written</P>
    <P class="p27 ft8">Between</P>
    <P class="p28 ft1"><SPAN class="ft2">PEERLESS FINANCIAL SERVICES LTD</SPAN>., a Public Limited Company incorporated under Companies Act, 1956 (2013)</P>
    <P class="p29 ft1">and having its Registered Office at Peerless Bhavan, 3 Esplanade East, Kolkata - 700069 (West Bengal). (CIN:</P>
    <P class="p29 ft1">U65993WB1988PLC044077) here inafter referred to as <SPAN class="ft2">“PFSL” / “LENDER</SPAN>” (which expression shall unless the context</P>
    <P class="p29 ft1">otherwise requires, include its successors and assigns) of the <SPAN class="ft2">FIRST PART</SPAN>.</P>
    <P class="p30 ft2">And</P>
    <P class="p31 ft1">The Borrower and <NOBR>Co-Borrower,</NOBR> Indian inhabitants, whose names and addresses are stated in the <NOBR><SPAN class="ft2">Schedule-I</SPAN></NOBR><SPAN class="ft2"> </SPAN>hereto and hereinafter referred to as “Borrower” and <NOBR>“Co-borrower”</NOBR> (which expression shall unless the context otherwise requires, include his/her/their heir(s), successor(s), executor(s), administrator(s) and permitted assigns of the <SPAN class="ft2">SECOND PART</SPAN>.</P>
    <P class="p32 ft1">he Borrower(s), and the Lender shall hereinafter be referred to individually as<SPAN class="ft2">“Party” </SPAN>or collectively as <SPAN class="ft2">“Parties”</SPAN>.</P>
    <P class="p30 ft1"><SPAN class="ft2">WHEREAS </SPAN>PFSL, being a <NOBR>Non-Banking</NOBR> Financial Company, registered with RBI, is engaged in the business of lending</P>
    <P class="p33 ft1">in India.</P>
    <P class="p34 ft1"><SPAN class="ft2">WHEREAS </SPAN>the Borrower(s) has/have approached the Lender to provide a loan as per terms specified in <SPAN class="ft2">Schedule II</SPAN>, where in the Guarantor agrees to extend his /her /their guarantee for the due performance and observance of the Terms and Conditions of the Agreement disclosed in <SPAN class="ft2">Schedule II & Schedule III </SPAN>here of by the Borrowers(s).The Borrower(s) has /have completed, signed and for warded to the Lender the Personal Application Formduly <NOBR>filled-in</NOBR> (which is the basis of this Agreement) attaching the documents mentioned in <NOBR><SPAN class="ft2">Schedule-IV</SPAN></NOBR><SPAN class="ft2"> </SPAN>of the Personal Loan Facility Agreement.</P>
    <P class="p28 ft2">NOW THEREFORE THIS AGREEMENT WITNESSETH AND THE PARTIES HERETO AGREE AS FOLLOWS:-</P>
    <P class="p35 ft24">1 Definitions and Interpretations</P>
    <P class="p36 ft1">1.1 In this Agreement, the following capitalized words shall have the following meanings:</P>
    <P class="p37 ft1"><SPAN class="ft2">“BORROWER” </SPAN>Borrower being an individual, includes his / her/their heirs, administrators, executors and legal</P>
    <P class="p29 ft1">representative(s);</P>
    <P class="p38 ft1"><SPAN class="ft2">“EQUATED MONTHLY INSTALLMENT”</SPAN>or“EMI”shall mean the amount payable every month on such date / s specified</P>
    <P class="p29 ft1">in the <NOBR>Schedule-II</NOBR> for the term of the Loan by the Borrower(s) to PFSL to amortize the Loan comprising interest and</P>
    <P class="p29 ft1">principal, or as the case maybe, only principal or interest;</P>
    <P class="p38 ft1"><SPAN class="ft2">“GUARANTOR</SPAN>” means the individual or legal entity that provides guarantee on behalf of the Borrower(s) towards</P>
    <P class="p29 ft1">repayment of Outstanding Amount under the facility;</P>
    <P class="p35 ft1"><SPAN class="ft2">“INTEREST RATE” </SPAN>means the rate at which PFSL shall compute and apply interest on the Loan, as stated in the</P>
    <P class="p39 ft1"><NOBR><SPAN class="ft2">Schedule-II</SPAN></NOBR><SPAN class="ft2"> </SPAN>or as maybe amended from time to time by PFSL in accordance with agreement;</P>
    <P class="p40 ft1"><SPAN class="ft2">“DEFAULT INTEREST RATE” </SPAN>means the rate as stated in the <NOBR><SPAN class="ft2">Schedule-II</SPAN></NOBR><SPAN class="ft2"> </SPAN>or as maybe amended by PFSL from time</P>
    <P class="p41 ft1">to time at which PFSL shall compute and apply interest on all amounts not paid when due for payment and /or</P>
    <P class="p42 ft1">reimbursement by the Borrower(s) to PFSL.</P>
    <TABLE cellpadding=0 cellspacing=0 class="t1">
    <TR>
        <TD class="tr6 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p43 ft2">For PFSL</P>
    </DIV>
    <DIV id="id3_2">
    <P class="p13 ft7">3</P>
    </DIV>
    </DIV>
    <DIV id="page_4">
    <DIV id="p4dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAroAAAACCAIAAAA4meh/AAAANElEQVRYhe3UsQkAIBADQLP/0G9h84WdoIV3E4QQkqoaAE2S1xFu8H4snwz+kI7YcKMAdBN9LgkAqUwevwAAAABJRU5ErkJggg==" id="p4img1"></DIV>
    
    
    <DIV id="id4_1">
    <P class="p13 ft1"><SPAN class="ft2">“</SPAN><SPAN class="ft25">LOAN” </SPAN>means the principal amount of Loan sanctioned and disbursed by PFSL to the Borrower(s) (as specified in the</P>
    <P class="p44 ft3"><NOBR><SPAN class="ft26">Schedule-II</SPAN></NOBR><SPAN class="ft26"> </SPAN>in terms of this Agreement and shall include dues outstanding thereunder including interests, costs, charges, expenses and all other amounts due in accordance with this Agreement if the context so requires.</P>
    <P class="p45 ft3"><SPAN class="ft26">“PREPAYMENT” </SPAN>means premature repayment of the Loan in part or in full by the Borrower(s) ahead of the repayment tenor specified in the <NOBR><SPAN class="ft26">Schedule-II.</SPAN></NOBR></P>
    <P class="p46 ft1"><SPAN class="ft2">“PREPAYMENT CHARGES” </SPAN>means charges levied by PFSL for prepayment as specified in the <NOBR><SPAN class="ft2">Schedule-II.</SPAN></NOBR></P>
    <P class="p47 ft1"><SPAN class="ft2">“PURPOSE OF LOAN” </SPAN>means that the Loan has been availed by the Borrower(s) for the purpose as stated in the <NOBR><SPAN class="ft2">Schedule-II</SPAN></NOBR><SPAN class="ft2"> </SPAN>hereto.</P>
    <P class="p45 ft3"><SPAN class="ft26">“REPAYMENT” </SPAN>means the repayment of the principal amount of loan, interest thereon and/or any charges, premiums, expenses, fees or other dues payable in terms of this Agreement.</P>
    <P class="p48 ft3"><SPAN class="ft26">“SALARY” </SPAN>shall mean annual accumulated sum made by the present or future employer to the Borrower(s) and shall also include fee, commission, perquisite, advance, annual accretion credited to the balance, excluding bonus, gratuity, annuity, if any.</P>
    <P class="p48 ft3"><SPAN class="ft26">“SECURITY” </SPAN>shall mean a pledge / mortgage created in favour of PFSL on such Secured Assets of the Borrower(s) (whether moveable or immoveable), from time to time, for securing the Borrower's Dues as per terms of Sanction Letter and / or as stipulated under Schedule II.</P>
    <P class="p49 ft1"><SPAN class="ft2">“SCHEDULE” </SPAN>means the Schedules to this Agreement which is/are part and parcel of the agreement;</P>
    <P class="p50 ft28"><SPAN class="ft27">“LOAN DOCUMENTS”/ “ LOAN AGREEMENTS” </SPAN>mean and include, but not restricted to,(i) Loan Application Form (ii) Facility Sanction Letter or the Letter Of Intent (LOI) issued by the Lender (iii) Personal Loan Facility Agreement together with its <SPAN class="ft27">Schedules I - V</SPAN>, (iv) Demand Promissory Note <SPAN class="ft27">(Annexure I) </SPAN>,(v) Continuing Security Letter <SPAN class="ft27">(Annexure II)</SPAN>, (vi) Undertaking regarding payment of differential stamp duty applicable on all documents <SPAN class="ft27">(Annexure III) </SPAN>, (vii) Request for Disbursement <SPAN class="ft27">( Annexure IV)</SPAN>, (viii) Borrower's request to employer for EMI deduction from salary <SPAN class="ft27">( Annexure V)</SPAN></P>
    <P class="p51 ft30">NACH Declaration <SPAN class="ft29">( Annexure VI) </SPAN>(ix) Facility Specific Agreements together with its Schedules and Annexures as may be required under the Personal Loan Facility Agreement from the list Provided in <SPAN class="ft29">Schedule V </SPAN>and any other documents , correspondences , agreement including all correspondences by way of email or otherwise exchanged between the Parties.</P>
    <P class="p52 ft33"><SPAN class="ft2">1</SPAN><SPAN class="ft31">"MARGIN SHORTFALL" </SPAN>means where the accumulated salary / professional income is inadequate to meet Margin Requirement as mentioned in <NOBR><SPAN class="ft32">Schedule-II</SPAN></NOBR><SPAN class="ft32"> </SPAN>and is computed as Margin Requirement less value of accumulated salary Margin.</P>
    <P class="p53 ft3"><SPAN class="ft1">1.1</SPAN><SPAN class="ft34">In this Agreement, singular shall include plural and the masculine gender, shall include the feminine or neuter gender.</SPAN></P>
    <P class="p54 ft3"><SPAN class="ft1">1.2</SPAN><SPAN class="ft34">Any expressions not defined herein,if defined within the General Clauses Act,1897,shall carry the same meaning as assigned to it under the said Act</SPAN></P>
    <P class="p55 ft3"><SPAN class="ft1">1.3</SPAN><SPAN class="ft34">In this Agreement, headings are for convenience only and shall not affect interpretation except to the extent that the context otherwise requires.</SPAN></P>
    <P class="p56 ft3"><SPAN class="ft1">1.4</SPAN><SPAN class="ft34">Any reference to Article, Clause or Schedule shall be deemed to be a reference to an Article, Clause or Schedule of this Agreement.</SPAN></P>
    <P class="p55 ft3"><SPAN class="ft1">1.5</SPAN><SPAN class="ft34">Any reference to any enactment or statutory provision is a reference to it as it may have been, or may from time to time be amended, modified, consolidated or </SPAN><NOBR>re-enacted.</NOBR></P>
    <P class="p57 ft1"><SPAN class="ft1">1.6</SPAN><SPAN class="ft35">The arrangement of Clauses in this Agreement shall have no bearing on their interpretation.</SPAN></P>
    <TABLE cellpadding=0 cellspacing=0 class="t2">
    <TR>
        <TD class="tr6 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p39 ft2">For PFSL</P>
    </DIV>
    <DIV id="id4_2">
    <P class="p13 ft7">4</P>
    </DIV>
    </DIV>
    <DIV id="page_5">
    <DIV id="p5dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAroAAAACCAIAAAA4meh/AAAANElEQVRYhe3UsQkAIBADQLP/0G9h84WdoIV3E4QQkqoaAE2S1xFu8H4snwz+kI7YcKMAdBN9LgkAqUwevwAAAABJRU5ErkJggg==" id="p5img1"></DIV>
    
    
    <DIV id="id5_1">
    <P class="p58 ft2">2 PFSL's Agreement to lend and Borrowers' Agreement to borrow</P>
    <P class="p59 ft4"><SPAN class="ft1">2.1</SPAN><SPAN class="ft36">PFSL agrees, based on the Borrowers' request, representations, warranties, covenants, and undertakings as contained herein and in the application for Loan, to lend to the Borrower(s) and the Borrower(s) agree(s) to borrow from PFSL, the Loan on the terms and conditions as fully set out in this Agreement and Schedule here to.</SPAN></P>
    <P class="p60 ft4"><SPAN class="ft1">2.2</SPAN><SPAN class="ft37">The relationship between PFSL and the Borrower(s) as lender and Borrower(s) shall commence from the Application Form received from the Borrower(s) for grant of loan and issuance of Sanction Letter/ Letter of Intent by PFSL and shall subsist until all monies due and payable by the Borrower(s) to PFSL under this Agreement, shall have been fully paid to and received by PFSL.</SPAN></P>
    <P class="p61 ft2"><SPAN class="ft2">3</SPAN><SPAN class="ft38">Mode of Disbursement</SPAN></P>
    <P class="p62 ft3"><SPAN class="ft1">3.1</SPAN><SPAN class="ft39">PFSL shall disburse the Loan in the manner given in </SPAN><SPAN class="ft26">Schedule II </SPAN>hereto. PFSL shall credit the Loan amount to the designated Bank Account, details provided in the <NOBR><SPAN class="ft26">Schedule-II</SPAN>,</NOBR> by the Borrower(s).</P>
    <P class="p63 ft2">4 Interests, Fees and Costs</P>
    <P class="p64 ft1"><SPAN class="ft1">4.1</SPAN><SPAN class="ft40">The Borrower (s) shall be jointly and severally liable to pay interest on the loan at the rate specified in </SPAN><SPAN class="ft2">Schedule- II.</SPAN></P>
    <P class="p65 ft42"><SPAN class="ft1">4.2</SPAN><SPAN class="ft41">Interest, which is part of EMI, if not paid on due date, then interest shall be and added to the principal and shall be treated as an advance to the Borrower(s) and PFSL may be entitled to charge interest at the aforesaid rate on the account of the debit balance inclusive of interest not paid by the Borrower(s) and hence capitalized as aforesaid.</SPAN></P>
    <P class="p63 ft1"><SPAN class="ft1">4.3</SPAN><SPAN class="ft40">PFSL shall be entitled to change the rate of interest and/ or rests and/ or penal interest, as per policy of PFSL,</SPAN></P>
    <P class="p66 ft42"><SPAN class="ft1">4.4</SPAN><SPAN class="ft41">The interest on the Loan shall accrue from the date of the PFSL's disbursement of the Loan to the Borrower and shall be computed:</SPAN></P>
    <P class="p67 ft1"><SPAN class="ft1">4.4.1</SPAN><SPAN class="ft43">Taking the basis of 365 days in a year/ 366 days for a leap year and calculated at monthly rests;</SPAN></P>
    <P class="p68 ft1"><SPAN class="ft1">4.4.2</SPAN><SPAN class="ft44">At the Interest Rate as state din the </SPAN><NOBR><SPAN class="ft2">Schedule-II</SPAN></NOBR><SPAN class="ft2"> </SPAN>or as may be specified/ amended by PFSL from time to time.</P>
    <P class="p69 ft42"><SPAN class="ft1">4.5</SPAN><SPAN class="ft41">The Borrower(s) agree(s) and acknowledge(s) that the Loan shall bear Documentation Charges, Processing Fees and other fees, charges including but not limited to Interest Tax, Stamp Duty, late payment charges, cheque return charges, administrative charges, Insurance costs and such other charges as mentioned in the </SPAN><NOBR><SPAN class="ft45">Schedule-II</SPAN>,</NOBR> which the Borrower(s) shall reimburse to PFSL in addition to the Loan and the interest accrued thereon.</P>
    <P class="p70 ft4"><SPAN class="ft1">4.6</SPAN><SPAN class="ft46">The Borrower(s) shall also bear and reimburse separately to PFSL the costs and expenses involved or incurred by PFSL in the recovery of the Loan, if the Loan or any part thereof, when due is not paid by the Borrower(s).</SPAN></P>
    <P class="p71 ft1"><SPAN class="ft1">4.7</SPAN><SPAN class="ft40">All amounts in default for payment (i.e. not paid by the Borrower(s) when due to PFSL) including arrears of EMI,</SPAN></P>
    <P class="p72 ft1">interests, fees, charges, taxes and costs will attract Default Interest at the rate/ amount(s) specified in the</P>
    <P class="p73 ft2">Schedule II.</P>
    <P class="p74 ft42"><SPAN class="ft1">4.8</SPAN><SPAN class="ft47">The Borrower(s) is/are aware that the list of charges in Schedule II hereto is not exhaustive and can be changed and fresh/new charges can be added to, anytime and from time to time prospectively, at the sole and absolute discretion of PFSL and such charges shall be binding on the Borrower(s).</SPAN></P>
    <P class="p75 ft2"><SPAN class="ft2">5</SPAN><SPAN class="ft48">Conditions Precedent to Disbursement of Loan</SPAN></P>
    <P class="p76 ft42"><SPAN class="ft1">5.1</SPAN><SPAN class="ft41">PFSL shall not disburse any amount under the Loan unless the following conditions are complied with to the complete satisfaction of PFSL:</SPAN></P>
    <P class="p63 ft1"><SPAN class="ft1">5.1.1</SPAN><SPAN class="ft49">The Loan Agreement is duly executed and delivered to PFSL by the Borrower(s);</SPAN></P>
    <P class="p77 ft4"><SPAN class="ft1">5.1.2</SPAN><SPAN class="ft50">The Borrower(s) procure(s) in favour of PFSL, a irrevocable and unconditional Guarantee as maybe required by PFSL at its sole discretion, of such person as maybe approved by PFSL, for guaranteeing repayment of the Loan with interest and all other amounts payable in respect there of</SPAN></P>
    <TABLE cellpadding=0 cellspacing=0 class="t3">
    <TR>
        <TD class="tr6 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p32 ft2">For PFSL</P>
    </DIV>
    <DIV id="id5_2">
    <P class="p13 ft7">5</P>
    </DIV>
    </DIV>
    <DIV id="page_6">
    <DIV id="p6dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAroAAAACCAIAAAA4meh/AAAANElEQVRYhe3UsQkAIBADQLP/0G9h84WdoIV3E4QQkqoaAE2S1xFu8H4snwz+kI7YcKMAdBN9LgkAqUwevwAAAABJRU5ErkJggg==" id="p6img1"></DIV>
    
    
    <DIV id="id6_1">
    <P class="p78 ft4"><SPAN class="ft1">5.1.3</SPAN><SPAN class="ft50">The Borrower(s) submit(s) to the satisfaction of PFSL, a certificate of employment from his/ her/ their employer and his/her/their Financial Statements, in the case of Borrower(s) being a salaried person;</SPAN></P>
    <P class="p79 ft1"><SPAN class="ft1">5.1.4</SPAN><SPAN class="ft49">Any other document or undertaking as PFSL may require at its sole discretion.</SPAN></P>
    <P class="p80 ft1"><SPAN class="ft1">5.1.5</SPAN><SPAN class="ft49">Paid Documentation Charges and Processing Fees for processing and sanction of Loan</SPAN></P>
    <P class="p81 ft52"><SPAN class="ft1">5.2</SPAN><SPAN class="ft51">PFSL may not, having disbursed any amount, disburse any further amount under the Loan Agreement, unless the following conditions are complied with, in the sole discretion of PFSL, before such further</SPAN></P>
    <P class="p82 ft1">disbursement:</P>
    <P class="p83 ft1"><SPAN class="ft1">5.2.1</SPAN><SPAN class="ft49">No event of default as specified in </SPAN><SPAN class="ft2">Clause 9 </SPAN>hereinafter shall have occurred;</P>
    <P class="p84 ft33"><SPAN class="ft1">5.2.2</SPAN><SPAN class="ft53">The Borrower(s) shall have produced evidence of the utilization of prior disbursements and also in respect of proposed disbursements;</SPAN></P>
    <P class="p85 ft1"><SPAN class="ft1">5.2.3</SPAN><SPAN class="ft49">The Borrower(s) shall have produced his/her /their periodic financial statements; and</SPAN></P>
    <P class="p86 ft1"><SPAN class="ft1">5.2.4</SPAN><SPAN class="ft49">The Borrower(s) shall have produced all other documents or writings as required by PFSL at its sole</SPAN></P>
    <P class="p87 ft1">discretion.</P>
    <P class="p83 ft2">6.i. Repayment / Prepayment in case of Salaried Individuals of Preferred Corporates.</P>
    <P class="p88 ft33">6.i.1 In consideration of the Lender extending the“Loan”,the Borrower(s) and the Guarantor shall jointly and severally repay the Loan along with Interest in accordance with the Repayment Schedule set out in <SPAN class="ft32">Schedule II </SPAN>of this Agreement. The Borrowers' Employer(s) shall deduct the EMI amount from the Borrowers' salary and credit the EMI amount directly into the Lender's Bank Account specified in <SPAN class="ft32">Schedule II </SPAN>hereof (here in after referred to a “the Lender's Bank Account”) every month. In the event of cessation of the Borrowers' service with the Borrowers' employer(s) by way of resignation, voluntary retirement, termination of service or any other way whatsoever before the loan is repaid in full in terms of <SPAN class="ft32">Schedule II </SPAN>hereof, the Agreement will at the discretion of the Lender stand terminated and the Borrowers' employer(s) will, without any reference to or consent to the Borrower(s),deduct from the final settlement amount of the Borrower(s) the maximum possible amount towards recovery of the amount payable on the loan on the date of cessation of service including outstanding loan amount, interest, penal interest, costs, charges, expenses, tax, fees, levies, duties, cess etc. and credit the amount so deducted directly into the Lender's bank account towards repayment of the loan. No further notice, intimation or reminder shall be issued to the Borrower(s) or the Borrowers' employer(s) regarding its obligation to credit the EMI amount into the Lender's bank account. The Borrower(s) agree(s) and undertake(s) that it will be the responsibility and obligation of the Borrower(s) to pay EMI on the loan on due date and other amounts due and payable to the Lender, and any default of the Borrowers' employer(s) in paying EMI will be a default of the Borrower in performing his obligations hereunder;</P>
    <P class="p89 ft33">6.i.2 Not with standing anything contrary or conflicting herein or in any other facility document the Lender shall have the right to review the loan account and revise the terms thereof anytime on its own or upon the request of the Borrower(s) in such manner as deemed fit by the Lender whereupon the repayment of the outstanding loan will be subject to the revised terms & conditions;</P>
    <TABLE cellpadding=0 cellspacing=0 class="t4">
    <TR>
        <TD class="tr6 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p90 ft2">For PFSL</P>
    </DIV>
    <DIV id="id6_2">
    <P class="p13 ft7">6</P>
    </DIV>
    </DIV>
    <DIV id="page_7">
    <DIV id="p7dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAroAAAACCAIAAAA4meh/AAAANElEQVRYhe3UsQkAIBADQLP/0G9h84WdoIV3E4QQkqoaAE2S1xFu8H4snwz+kI7YcKMAdBN9LgkAqUwevwAAAABJRU5ErkJggg==" id="p7img1"></DIV>
    
    
    <DIV id="id7_1">
    <P class="p91 ft55">6.i.3 The Borrower(s) and/or Guarantor agree(s) and undertake(s) that in the event of the Borrowers' employer(s) committing default or delay in payment of EMI on the loan or payment of the outstanding amount in the event of cessation of service of the Borrower(s) with the Borrowers' employer(s) for any reason whatsoever, the Lender will be entitled to : (i) demand payment of the overdue EMI/EMI in default or the outstanding amount, as the case may be, from the Borrower(s) and the Borrower(s) will forthwith pay the EMI amount or such outstanding amount to the Lender; (ii) to charge Penal Interest / Delayed Payment Charge on the overdue EMI / EMI in default at the rate specified in <SPAN class="ft54">Schedule II </SPAN>herein below, or at a rate as may be determined by the Lender from time to time, for the period of delay or default, and the Borrower(s) will separately pay the penal interest to the Lender. The Penal Interest / Delayed Payment Charge shall be compounded on monthly basis. The payment of Penal interest / Delayed Payment Charges shall not absolve the Borrower(s) of any other obligation of the Borrower(s) hereunder or affect any other right & remedy of the Lender. Further, the Borrower(s) shall be liable for all costs, charges and expenses which the Lender may pay or incur in any way resulting from the above stated default or delay;</P>
    <P class="p92 ft55">6.i.4 All payments to be made by the Borrower(s) to the Lender under the Agreement, shall be made free and clear of and without any deduction for or on account of any tax. If the Borrower(s) is/are required to make such deduction, then the sum payable to the Lender shall be increased so that, after making such deductions, the Lender receives and retains (without any liability for such deduction) a sum equal to the sum which it would have received had such deductions not been made.</P>
    <P class="p93 ft56">6.i.5 The Borrower(s) agree(s), declare(s) and confirm(s) that notwithstanding any provisions of The Indian Contract Act1872 or any other Law or any terms & conditions hereof and /or of any other facility document, any payment</P>
    <P class="p94 ft55"><SPAN class="ft1">(s)</SPAN><SPAN class="ft57">made by the Borrower(s) under the loan account shall be appropriated in the manner & order as may be decided by the Lender in its sole and absolute discretion.</SPAN></P>
    <P class="p95 ft2"><SPAN class="ft2">6.</SPAN><SPAN class="ft58">ii- Repayment / Prepayment in case of Others:</SPAN></P>
    <P class="p96 ft30">6.ii.1. The Borrower(s) shall pay promptly, in full, the Pre EMIs (if applicable), EMIs and all other amounts payable under this Agreement without any demur, protest or default and without claiming any <NOBR>set-off</NOBR> or counter claim, on the respective Due Dates on which the same are due.</P>
    <P class="p97 ft55">6.ii.2. The Borrower(s) shall, prior to the first Date of Disbursement provide to PFSL, such of the following payment instruments as directed by PFSL (“Payment Instruments”):</P>
    <P class="p98 ft30"><SPAN class="ft1">(a)</SPAN><SPAN class="ft59">PDCs and UDCs issued by the Borrower(s) (if required by PFSL), which may be deposited by PFSL with a view to receiving payments on the Due Dates, as provided for in the terms of Repayment in </SPAN><SPAN class="ft29">Schedule II</SPAN>;</P>
    <P class="p99 ft55"><SPAN class="ft1">(b)</SPAN><SPAN class="ft60">A certified copy of the Standing Instructions issued by the Borrower(s), to PFSL / designated bank, of the Borrower(s) to transfer to the Lender on the Due Dates, the amounts which are required to be paid by the Borrower(s), as specified in terms of Repayment in </SPAN><SPAN class="ft54">Schedule II</SPAN>; A certified copy of the written ECS/ ACH mandate/other relevant mandate by the Borrower(s) to its designated bank requiring the designated bank to make payment to PFSL on the Due Dates as specified in the terms of Repayment in <SPAN class="ft54">Schedule II </SPAN>through the ECS scheme/any other platform or mechanism duly authorized in this regard including without limitation the National Electronic Clearing Service and duly acknowledged and accepted by the designated bank; or</P>
    <TABLE cellpadding=0 cellspacing=0 class="t5">
    <TR>
        <TD class="tr6 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p43 ft2">For PFSL</P>
    </DIV>
    <DIV id="id7_2">
    <P class="p13 ft7">7</P>
    </DIV>
    </DIV>
    <DIV id="page_8">
    <DIV id="p8dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAroAAAACCAIAAAA4meh/AAAANElEQVRYhe3UsQkAIBADQLP/0G9h84WdoIV3E4QQkqoaAE2S1xFu8H4snwz+kI7YcKMAdBN9LgkAqUwevwAAAABJRU5ErkJggg==" id="p8img1"></DIV>
    
    
    <DIV id="id8_1">
    <P class="p100 ft4">The borrower can also repay using other modes of payments, which may include, Immediate Money Payment System (“IMPS”), Real Time Gross System (“RTGS”), National Electronic Fund Transfer</P>
    <P class="p101 ft42">(“NEFT”), United Payment Interface ( “ UPI” ) eg BHIM, Pay TM, Gpay, direct cash deposit in the Lender's bank account, as may be acceptable or required by PFSL, from time to time.</P>
    <P class="p102 ft55">6.ii.3. The Borrower(s) hereby irrevocably and unconditionally undertake(s) that the Borrower(s) shall not issue instructions for PFSL not to encash any of the Payment Instruments and shall not issue any instruction to stop payment in respect of such Payment Instruments to the relevant bank or institution. If the Borrower(s) do(es) issue any such instructions, the same shall be considered null and void and such act shall be construed as breach of this Agreement. In the event of any dishonour of a Payment Instrument, without prejudice to the other rights of PFSL, the Borrower(s) shall be liable to pay to the Lender additional interest /charges at the rate mentioned in this Agreement or such other amount as may be stipulated by the Lender from time to time in accordance with its policy and guidelines. The Borrower(s) hereby confirm(s) that the Borrower(s) shall always ensure that sufficient funds are available in the account to which the said PDCs/ UDCs/ ECS/ ACH relate to enable the Lender to present the same for encashment. The Borrower(s) is/are aware of the fact that the dishonour of the PDC(s)/ UDC(s)/ ECS/ ACH so issued by the Borrower(s) and presented by PFSL for payment would constitute an offence under Section 138 of the Negotiable Instruments Act,1881 and the Lender may take such action against the Borrower(s) as may be advised upon such dishonour including (without limitation) levy of such dishonour charges as may be specified by the Lender.</P>
    <P class="p103 ft61">6.ii.4. The Borrower(s) acknowledge(s) that the Payment Instruments submitted in terms of Clauses mentioned above (Mode of Payment, Time, Place etc), shall be delivered to the Lender for the discharge of the Outstanding Balance (or part thereof). It is however clarified, that the mere hand over of the Payment Instruments will not discharge the Borrower(s) from its primary obligation of ensuring that the amounts due to the Lender on a particular Due Date are paid to the Lender on such Due Date. The Borrower(s) shall also be entitled to make payments of the amount due to the Lender on the respective Due Dates in the form of pay orders/ demand drafts on any debit instructions, provided that payments are made subject to compliance with the requirements (including without limitation the submission of any forms and documents), if any, imposed by the Lender in this regard.</P>
    <P class="p104 ft30">6.ii.5. In the event that the Borrower(s) is/are required by the Lender to deposit PDCs/ UDC(s)/ ECS/ ACH and inchoate cheques for fulfilling the Borrowers' payment obligations in relation to the Loan, any PDCs/ UDC(s)/ ECS/ ACH and inchoate cheques so deposited, shall be compliant with applicable regulatory requirement sunder applicable laws.</P>
    <P class="p105 ft30">6.ii.6. The Borrower(s) hereby irrevocably and unconditionally nominate(s), constitute(s), appoint(s) and authorise(s) the Lender acting through any of its officers, agents as the Borrowers' true and lawful attorney to act on the Borrowers' behalf and at the Borrower(s)' cost and risk to do, execute and perform all or any of the following acts, deeds, matters and things that is to say:</P>
    <P class="p106 ft30"><SPAN class="ft1">(I)</SPAN><SPAN class="ft62">To fill up the dates (and/or the amounts of the cheque(s) and/or such other details as may be necessary in the cheques submitted to the Lender by the Borrower(s) from time to time, so as to pay the Outstanding Balance(s) from time to time to the Lender and to deposit the same towards repayment of the Borrowers' dues towards the said Loan, without notices to the Borrower(s) in this regard.</SPAN></P>
    <P class="p107 ft30"><SPAN class="ft1">(ii)</SPAN><SPAN class="ft63">To appoint or engage any agent, courier agencies, correspondent banks for ensuring safe holding of PDCs/ inchoate cheques /UDCs and having the same picked up, processed and cleared at the Borrower's risks and costs.</SPAN></P>
    <TABLE cellpadding=0 cellspacing=0 class="t6">
    <TR>
        <TD class="tr6 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p43 ft2">For PFSL</P>
    </DIV>
    <DIV id="id8_2">
    <P class="p13 ft7">8</P>
    </DIV>
    </DIV>
    <DIV id="page_9">
    <DIV id="p9dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAroAAAACCAIAAAA4meh/AAAANElEQVRYhe3UsQkAIBADQLP/0G9h84WdoIV3E4QQkqoaAE2S1xFu8H4snwz+kI7YcKMAdBN9LgkAqUwevwAAAABJRU5ErkJggg==" id="p9img1"></DIV>
    
    
    <DIV id="id9_1">
    <P class="p108 ft33"><SPAN class="ft1">(iii)</SPAN><SPAN class="ft64">To do all such other acts, deeds and things necessary to ensure payment of the Outstanding Balance(s) from time to time to the Lender. The Borrower(s) here by further agree(s) to ratify and confirm all and whatsoever that the Lender shall do or cause to be done in or about the premises by virtue of the powers herein given. The Borrower(s) confirm(s) that the authority and powers hereby given to the Lender are for consideration and are irrevocable under Section 202 of the Contract Act,1872 and such authority /power shall survive the Borrowers' death.</SPAN></P>
    <P class="p109 ft33">6.ii.7. The Borrower(s) hereby agree(s), acknowledge(s) and confirm(s) that the authority given by the Borrower(s) to the Lender above to fill in the requisite details in the cheques deposited by the Borrower with the Lender is as permitted under the provisions of Section 20 of the Negotiable Instruments Act, 1881 and the same does not amount to an alteration of the cheques given by the Borrower(s) to the Lender. The Borrower(s) however, agrees and confirms that in the event the acts of the Lender in filling the cheques as aforesaid are construed by any court, tribunal, authority or other person or forum, judicial, <NOBR>quasi-judicial,</NOBR> <NOBR>non-judicial,</NOBR> governmental, semi- governmental or <NOBR>non-governmental</NOBR> to be an alteration:-</P>
    <P class="p110 ft33"><SPAN class="ft1">(I)</SPAN><SPAN class="ft64">the Borrower (s) hereby expressly provide(s) his/ her/ their consent for such alteration and here by confirm (s) that by reason of such alteration, the cheques shall/ should not be construedto</SPAN></P>
    <P class="p111 ft1">be void or otherwise unenforceable and the Borrower(s) hereby unconditionally agree(s) to honour</P>
    <P class="p112 ft1">such cheques when presented for payment; and</P>
    <P class="p113 ft1"><SPAN class="ft1">(ii)</SPAN><SPAN class="ft65">the Borrower (s) hereby confirm(s) that such alteration is made to record the common intention</SPAN></P>
    <P class="p114 ft30">of the Lender and the Borrower(s), where common intention is to fill in the cheques / instruments with the amounts that may be due by the Borrower(s) to the Lender from time to time.</P>
    <P class="p115 ft52">6.ii.8. The Borrower(s) hereby confirm(s) that the Borrower(s) shall always ensure that sufficient funds are available in the account to which the cheques /other mandates relate, so that the cheques /other mandates when presented by PFSL are honoured by the Bank . The Borrower(s) is/are aware of the fact that the dishonour of any of the cheques / other mandates so issued by the Borrower(s) and presented by Lender for paymentwould constitute an offence under ( Section 138 of the Negotiable Instruments Act, 1881 , Section 25 of the Payments & Settlement Act, 2007), (Indian Penal Code) or any other relevant Act of the land and the Lender may take such action against the Borrower(s) as may be advised upon such dishonour including (without limitation) levy of such charges as may be specified by the Lender in this regard. All the provisions set out in this <SPAN class="ft66">Clause 6 </SPAN>shall apply mutatis mutandis to any form of cheques that may be issued by the Borrower(s) in favour of the Lender in discharge of debt owed by the Borrower(s) to the Lender. It is also further agreed and understood that <NOBR>non-presentation</NOBR> of the Cheque/ ACH mandate or any of them on part of the Lender for any reason whatsoever, shall not in any manner affect the liability of the Borrowers in respect of the loan.</P>
    <TABLE cellpadding=0 cellspacing=0 class="t7">
    <TR>
        <TD class="tr6 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p43 ft2">For PFSL</P>
    </DIV>
    <DIV id="id9_2">
    <P class="p13 ft7">9</P>
    </DIV>
    </DIV>
    <DIV id="page_10">
    <DIV id="p10dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAroAAAACCAIAAAA4meh/AAAANElEQVRYhe3UsQkAIBADQLP/0G9h84WdoIV3E4QQkqoaAE2S1xFu8H4snwz+kI7YcKMAdBN9LgkAqUwevwAAAABJRU5ErkJggg==" id="p10img1"></DIV>
    
    
    <DIV id="id10_1">
    <P class="p13 ft1">6.ii.9. The Borrower(s) shall not without the prior written consent of the Lender (a) issue any stop payment instructions or</P>
    <P class="p116 ft56"><SPAN class="ft1">(b)</SPAN><SPAN class="ft67">change/close the bank account from which the PDCs /UDC (s)/ inchoate cheques were issued or(c) change the authorised signatory of the Borrowers' account(s) from which the PDC(s) /UDC(s) /inchoate cheques were issued. The Borrower(s) further agree(s) and understand(s) that in the event the PDC(s) /UDC(s) / inchoate cheques are lost in transit / misplaced, or for any reason the Lender is not able to put any cheque(s) in clearing, the Borrower(s) shall forthwith give replacement PDC(s) / UDC(s) / inchoate cheques to the Lender upon its written request.</SPAN></P>
    <P class="p117 ft30">6.ii.10. The Borrower(s) hereby agree(s) and undertake(s) that the obligation of the Borrower, to make payment of the EMIs and the PEMIs is unconditional and absolute, and shall not be affected or prejudiced by any reason including without limitation as a result of any <NOBR>non-payment</NOBR> or short payment resulting on <NOBR>en-cashing</NOBR> any of the Payment Instruments.</P>
    <P class="p118 ft30">6.ii.11. Upon repayment of the Outstanding Balances in full, the Lender shall not deposit any PDCs, inchoate cheques and/or UDCs which remain in its possession.</P>
    <P class="p118 ft30">6.ii.12. On any of the respective Due Dates, the Lender shall be entitled to encash or require the transfer of the amounts due to the Lender under this Agreement, by utilising any of the Payment Instruments which are deposited by the Borrower(s), as mentioned in <SPAN class="ft29">Clause 6.ii.2 </SPAN>(Mode of Payment, Time, Place) above, without any requirement of intimating or sending a notice to the Borrower(s) of its encashing of the relevant Payment Instrument. The Borrower(s) here by agree (s) and undertake (s) that the Borrower(s) shall ensure that adequate sums are present in the bank account (s) of the Borrower(s) which are linked to the Payment Instruments provided by the Borrower(s) to the Lender to enable the Lender to encash the Payment Instruments for receipt of the payments due from the Borrower (s) on each of the Due Dates of its <NOBR>en-cashing</NOBR> of the relevant Payment Instrument.</P>
    <P class="p119 ft55">6.ii.13. Only on realisation of the amounts due by any mode as above, the Lender shall credit the account of the Borrower(s).</P>
    <P class="p119 ft30">6.ii.14. If any payment under this Agreement is required to be made on a day which is not a Business Day or within a period which ends on a day which is not a Business Day then the Borrower (s) shall be required to make the payment on the immediately succeeding Business Day.</P>
    <P class="p79 ft2">7. Lender's Rights</P>
    <P class="p120 ft1">The Lender being PFSL</P>
    <P class="p121 ft30"><SPAN class="ft1">7.1</SPAN><SPAN class="ft68">in the event it is unwilling to continue the Loan on account of regulatory or other reasons, have the sole right at anytime during the tenor of this Agreement to recall the entire or part of the Loan without assigning any reason there of and shall be payable in full by the Borrower to PFSL forthwith upon a demand in this regard by PFSL.</SPAN></P>
    <P class="p122 ft30"><SPAN class="ft1">7.2</SPAN><SPAN class="ft68">have the sole right to amend at any time and from time to time any of the terms & conditions of this Agreement including but not limited to revising/rescheduling the repayment terms / amount of EMI or any other amounts outstanding thereunder, revision of Interest Rate (including the Default Interest Rate), any other charges or fees, periodicity of compounding of interest, method of effecting credit of the repayments, without assigning any reason and notify such change/ revision/ amendment to the Borrower(s). The Borrower(s) will be bound by such change/ revision and the Borrower(s) agree(s) that such revision/ change/ amendment shall become applicable from date of such revision in the records of PFSL;</SPAN></P>
    <TABLE cellpadding=0 cellspacing=0 class="t8">
    <TR>
        <TD class="tr6 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p90 ft2">For PFSL</P>
    </DIV>
    <DIV id="id10_2">
    <P class="p13 ft7">10</P>
    </DIV>
    </DIV>
    <DIV id="page_11">
    <DIV id="p11dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAroAAAACCAIAAAA4meh/AAAANElEQVRYhe3UsQkAIBADQLP/0G9h84WdoIV3E4QQkqoaAE2S1xFu8H4snwz+kI7YcKMAdBN9LgkAqUwevwAAAABJRU5ErkJggg==" id="p11img1"></DIV>
    
    
    <DIV id="id11_1">
    <P class="p33 ft1"><SPAN class="ft69">7.3</SPAN><SPAN class="ft70">have the right to inspect books of accounts and other records maintained by the Borrower (s); and</SPAN></P>
    <P class="p123 ft56"><SPAN class="ft69">7.4</SPAN><SPAN class="ft71">be entitled to disclose any information about the Borrower(s), his/ her/ their account relationship with PFSL and/ or any default committed by him/ her/ them in repayment of amounts (whether such in formation is provided by the Borrower(s) or obtained by PFSL itself and whether in form of repayment conduct, rating or defaults) to its head office, other branch offices, affiliated entities, Reserve Bank of India, or such other Credit Information Bureaus like CIBIL etc , its Auditors, as PFSL may, in its sole and exclusive discretion, deem fit and proper. PFSL shall also be entitled to seek and receive any information as it deems fit in connection with the Loan and/or the Borrower(s) from any third party; and</SPAN></P>
    <P class="p124 ft1"><SPAN class="ft69">7.5</SPAN><SPAN class="ft70">be entitled to require the Borrower (s), in the event of the Borrower(s) opting to resign or retire from his/ her</SPAN></P>
    <P class="p125 ft30">/their current employment prior to the age of superannuation or is /are discharged or removed from service before such date for any reason whatsoever, to instruct his /her /their employer(s) to remit the entire dues or termination benefits (including compensation) in the liability account maintained with PFSL</P>
    <P class="p32 ft1"><SPAN class="ft69">7.6</SPAN><SPAN class="ft70">have the right to store financial data of the Borrower(s). This includes data which is not kept within accounts of PFSL.</SPAN></P>
    <P class="p126 ft30"><SPAN class="ft69">7.7</SPAN><SPAN class="ft72">have a right to apply and/ or appropriate and/ or </SPAN><NOBR>set-off</NOBR> any credit balance of the Borrower(s) or any monies/ assets (including but not limited to property, assets, securities, shares, stocks, and the like) belonging to the Borrower(s) coming in the hands of PFSL towards the repayment of Loan upon occurrence of Event of Default. However, PFSL shall not be obliged to exercise any right given to it herein.</P>
    <P class="p46 ft2"><SPAN class="ft2">8.</SPAN><SPAN class="ft73">Borrowers' Representations, Warranties, Covenants, Indemnification and Undertakings</SPAN></P>
    <P class="p127 ft55"><SPAN class="ft69">8.1</SPAN><SPAN class="ft74">The Borrower(s) here by represent (s)/ warrant(s) to covenants/ undertake (s) throughout the subsistence of this Agreement, with PFSL that</SPAN></P>
    <P class="p30 ft1"><SPAN class="ft69">8.1.1</SPAN><SPAN class="ft75">the information provided in the application for the Loan and as contained herein is complete and true in all respects;</SPAN></P>
    <P class="p128 ft1"><SPAN class="ft69">8.1.2</SPAN><SPAN class="ft75">there are no threatened or pending claims, demands, litigation or liquidation proceedings against the Borrower (s);</SPAN></P>
    <P class="p30 ft1"><SPAN class="ft69">8.1.3</SPAN><SPAN class="ft75">the Borrower (s) shall utilize the Loan for the purpose for which it is granted and for no other purpose whatsoever;</SPAN></P>
    <P class="p129 ft55"><SPAN class="ft69">8.1.4</SPAN><SPAN class="ft76">the Borrower(s) shall repay to PFSL the Loan in accordance with the Repayment Terms as mentioned in </SPAN><SPAN class="ft54">Schedule II </SPAN>herein.</P>
    <P class="p130 ft55"><SPAN class="ft69">8.1.5</SPAN><SPAN class="ft76">the Borrower(s) shall at all times maintain sufficient balance in the Loan Repayment Account to ensure payment of each EMI;</SPAN></P>
    <P class="p33 ft1"><SPAN class="ft69">8.1.6</SPAN><SPAN class="ft75">any dispute about interest computation shall not entitle the Borrower(s) to withhold payment of an EMI;</SPAN></P>
    <P class="p129 ft55"><SPAN class="ft69">8.1.7</SPAN><SPAN class="ft76">the Borrower(s) shall provide to PFSL its financial statement and other information and documents concerning his employment, profession, business or utilization of Loan as PFSL may require from time to time;</SPAN></P>
    <P class="p131 ft55"><SPAN class="ft69">8.1.8</SPAN><SPAN class="ft76">the Borrower(s) shall, within 7 (seven) days of the event, inform PFSL of any likely change in his/ her employment and/ or residential /office address;</SPAN></P>
    <P class="p130 ft55"><SPAN class="ft69">8.1.9</SPAN><SPAN class="ft76">the Borrower(s) shall not, during the tenure of this Agreement, avail of or obtain any further loan or facility for the same purpose without the prior written consent of PFSL;</SPAN></P>
    <P class="p132 ft30"><SPAN class="ft69">8.1.10</SPAN><SPAN class="ft77">the Borrower(s) shall ensure that none of the Payment Instrument, returned </SPAN><NOBR>dis-honoured</NOBR> for any reason whatsoever and is aware that in such an event cheque/ instrument <NOBR>dis-honour</NOBR> charges will be payable by him/ her/ them to PFSL as specified in <SPAN class="ft29">Schedule II</SPAN></P>
    <P class="p33 ft1"><SPAN class="ft69">8.1.11</SPAN><SPAN class="ft43">the Electronic Debit Instructions given to PFSL by the Borrower(s) pursuant to this Agreement:</SPAN></P>
    <TABLE cellpadding=0 cellspacing=0 class="t9">
    <TR>
        <TD class="tr6 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p133 ft2">For PFSL</P>
    </DIV>
    <DIV id="id11_2">
    <P class="p13 ft7">11</P>
    </DIV>
    </DIV>
    <DIV id="page_12">
    
    
    <DIV id="id12_1">
    <P class="p134 ft1"><SPAN class="ft1">8.1.11.1</SPAN><SPAN class="ft78">shall not be changed, modified or countermanded without prior written permission of PFSL;</SPAN></P>
    <P class="p135 ft80"><SPAN class="ft1">8.1.11.2</SPAN><SPAN class="ft79">if not acted upon by PFSL in which the account is maintained for whatever reason, then without prejudice to the rights of PFSL to recall the entire amount outstanding under the Loan, the Borrower(s) shall issue such revised instructions as maybe necessary to ensure payment to PFSL in terms of this Agreement and/or to issue and deliver PDCs for the balance outstanding under the Loan as per Schedule.</SPAN></P>
    <P class="p136 ft1"><SPAN class="ft1">8.1.12</SPAN><SPAN class="ft81">shall not stand surety or as guarantor for any third party liability or obligation till full repayment of the loan;</SPAN></P>
    <P class="p137 ft52"><SPAN class="ft1">8.1.13</SPAN><SPAN class="ft82">shall not leave India for employment or business or long stay or permanently, without first fully repaying the Personal Loan then outstanding, with interest and other dues, including prepayment charges, if any and shall keep himself aware of all the rules of PFSL, as pertaining to the Loan, and in force from time to time;</SPAN></P>
    <P class="p138 ft28"><SPAN class="ft1">8.1.14</SPAN><SPAN class="ft83">the Borrower(s) shall maintain, operate and fund the Loan Account, if any, till the whole of the Loan Amount, together with interest and charges thereon, is received in full by PFSL</SPAN></P>
    <P class="p139 ft52"><SPAN class="ft1">8.1.15</SPAN><SPAN class="ft82">The Borrower(s) undertake(s) that, if there is a breach of any of the representations or warranties provided hereunder, then, the Borrower(s) shall indemnify PFSL in respect of any reasonable costs and expenses suffered or incurred by PFSL which arises from the event or circumstance giving rise to any claim for breach of representation or warranty or any representation given by the Borrower(s) to PFSL in the Application for the Loan.</SPAN></P>
    <P class="p140 ft52"><SPAN class="ft1">8.1.16</SPAN><SPAN class="ft82">Repay the Loan and pay interest thereon, in the event of the Borrowers' employers committing delay or default in payment of EMI on the loan on due date or in payment of dues & outstanding amount on the loan in the event of cessation of the Borrower's service</SPAN><SPAN class="ft84">v</SPAN> for any reason whatsoever and directly pay to or reimburse the Lender with all other monies including penal interest, governmental charges, taxes, penalties, cess, duties, levies owing to the Lender according to the terms here of;</P>
    <P class="p141 ft28"><SPAN class="ft1">8.2</SPAN><SPAN class="ft85">The Borrower(s) confirm(s) that as per terms of Sanction Letter and / or that of </SPAN><SPAN class="ft27">Schedule II, </SPAN>it tender(s), in favour of PFSL, an irrevocable and unconditional guarantee by a Guarantor for the payment and discharge by the Borrower(s) to PFSL, of the sums, interest, all costs, charges and expenses and other monies due and payable by the Borrower(s) to PFSL under or in respect of the Facilities through execution of <SPAN class="ft27">Deed Of Guarantee </SPAN>as detailed in <SPAN class="ft27">Schedule V </SPAN>and annexed herein and as such the said Guarantor acknowledges and agrees to the terms of this Personal Loan Facility Agreement executed between the Parties<SPAN class="ft86">.</SPAN></P>
    <P class="p142 ft2"><SPAN class="ft2">9.</SPAN><SPAN class="ft87">Events of Default</SPAN></P>
    <P class="p143 ft4"><SPAN class="ft1">9.1</SPAN><SPAN class="ft88">PFSL may, by a written notice to the Borrower(s) and/or Guarantor, declare the Loan to have become due and payable forthwith upon occurrence (in the sole decision of PFSL) of any one or more of the following events:</SPAN></P>
    <P class="p144 ft4"><SPAN class="ft1">9.1.1</SPAN><SPAN class="ft89">The Borrower(s) and/ or Guarantor fail(s) to pay to PFSL any amount on or before due date and payable under this Agreement (including an EMI) or furnish the PDCs or any other document /agreement as may be required by PFSL from time to time.</SPAN></P>
    <P class="p145 ft28"><SPAN class="ft1">9.1.2</SPAN><SPAN class="ft90">The Borrower(s) and/or Guarantor fails to pay to any person other than PFSL any amount on or before due date and payable or any person other than PFSL may demand repayment of the loan or dues or liability of the Borrower to such person ahead of its repayment terms as previously agreed between such person and the Borrower</SPAN></P>
    </DIV>
    <DIV id="id12_2">
    <P class="p13 ft7">12</P>
    </DIV>
    </DIV>
    <DIV id="page_13">
    
    
    <DIV id="id13_1">
    <P class="p146 ft55"><SPAN class="ft1">9.1.3</SPAN><SPAN class="ft91">The Borrower(s) and /or Guarantor defaults in performing any of his/ her obligations under this Agreement or breaches any of the terms and conditions of this Agreement;</SPAN></P>
    <P class="p147 ft30"><SPAN class="ft1">9.1.4</SPAN><SPAN class="ft92">The Borrower(s) resign(s), retire(s) or is/are discharged or removed from the employment he/she/them was/were engaged in on the date of this Agreement;</SPAN></P>
    <P class="p148 ft55"><SPAN class="ft1">9.1.5</SPAN><SPAN class="ft91">Any of the information provided by the Borrower (s) to avail the Loan or any of the Representations and Warranties contained herein being found to be or becoming incorrect or untrue or false ;</SPAN></P>
    <P class="p149 ft30"><SPAN class="ft1">9.1.6</SPAN><SPAN class="ft92">If there is reasonable apprehension that the Borrower(s) and/or Guarantor is /are unable to pay his/her/their debts or any person other than PFSL commencing proceedings to declare the Borrower(s) insolvent or if the Borrower(s) become(s) bankrupt or insolvent or commit act of insolvency;</SPAN></P>
    <P class="p63 ft1"><SPAN class="ft1">9.1.7</SPAN><SPAN class="ft93">If any distrain or attachment of any assets of the Borrower(s) is effected ; and</SPAN></P>
    <P class="p150 ft30"><SPAN class="ft1">9.1.8</SPAN><SPAN class="ft92">PFSL, for any regulatory or other reasons, being unable or unwilling to continue the Loan, recalls by written notice the Loan and the Borrower (s) fail (s) to repay in accordance with the said notice.</SPAN></P>
    <P class="p151 ft30"><SPAN class="ft1">9.1.9</SPAN><SPAN class="ft92">Any </SPAN><NOBR>non-compliance</NOBR> by the Borrower(s) and/or the Guarantor of the terms & conditions of this Agreement or any other agreement entered into in respect of this Loan or any other financial assistance availed of by the Borrower from the Lender;</P>
    <P class="p63 ft1"><SPAN class="ft1">9.1.10</SPAN><SPAN class="ft40">Any concealment of any material document or event by the Borrower(s) /Guarantor;</SPAN></P>
    <P class="p152 ft1"><SPAN class="ft1">9.1.11</SPAN><SPAN class="ft70">Submission of any forged document by the Borrower(s) /Guarantor;</SPAN></P>
    <P class="p153 ft3"><SPAN class="ft1">9.1.12</SPAN><SPAN class="ft94">Failure by Borrower(s)/Guarantor to provide their KYC Documents and to do such other thing as may be required from time to time with respect to KYC/ AML directions of the Reserve Bank of India /Central / State Government.</SPAN></P>
    <P class="p154 ft55"><SPAN class="ft1">9.1.13</SPAN><SPAN class="ft95">If at any time the value of the accumulated salary / professional income falls so as to create a shortfall in the Margin, PFSL reserves its right to forthwith, without giving any notice whatsoever to the Borrower(s)/Guarantor invoke to recall the loan.</SPAN></P>
    <P class="p155 ft3"><SPAN class="ft1">9.2</SPAN><SPAN class="ft96">It is clarified that upon occurrence of an Event of Default, PFSL shall be entitled to adopt civil and/ or criminal proceedings against the Borrower(s) and/ or Guarantor including for dishonour of cheques under Section 138 of Negotiable Instruments Act 1881 or for rejection of ECS /ACH debit instruction under section 25 of Payments and Settlement Systems Act 2007.</SPAN></P>
    <P class="p43 ft2"><SPAN class="ft2">10.</SPAN><SPAN class="ft58">Assignment and Transfer</SPAN></P>
    <P class="p156 ft3"><SPAN class="ft1">10.1</SPAN><SPAN class="ft97">PFSL shall have an absolute right to sell or transfer (by way of assignment, securitization or otherwise) the whole or part of the Loan in such manner and on such terms and conditions as PFSL may decide at its sole discretion.</SPAN></P>
    <P class="p157 ft55"><SPAN class="ft1">10.2</SPAN><SPAN class="ft98">The Borrower(s) expressly agree(s), in the event of sale or transfer as aforesaid, to accept such person to whom the Loan is sold or transferred as his/her lender and make the repayment of the Loan to such person in the manner directed by PFSL.</SPAN></P>
    <P class="p13 ft1"><SPAN class="ft1">10.3</SPAN><SPAN class="ft99">The Borrower (s) shall not be entitled to transfer or assign any of his /her / their rights under this Agreement.</SPAN></P>
    <P class="p158 ft2"><SPAN class="ft2">11.</SPAN><SPAN class="ft100">Security</SPAN></P>
    <P class="p159 ft42">The Borrower(s) confirm(s) that as per terms of Sanction Letter and that of <SPAN class="ft45">Schedule II</SPAN>, Security is being tendered in favour of PFSL to secure due repayment, discharge and redemption of the Facility so advanced by PFSL to the Borrower , and necessary Facility Specific Documents as stipulated in <SPAN class="ft45">Schedule V </SPAN>are executed by the Borrower(s) and annexed herein.</P>
    </DIV>
    <DIV id="id13_2">
    <P class="p13 ft7">13</P>
    </DIV>
    </DIV>
    <DIV id="page_14">
    
    
    <DIV id="id14_1">
    <P class="p58 ft2">12. Indemnification</P>
    <P class="p160 ft55">The Borrower (s) and the Guarantor shall indemnify and hold the Lender and its directors, officers, employees, agents and advisers harmless against losses, claims, liabilities, or damages which are sustained as a result of any acts, errors, or omissions of the Borrower(s) and/or the Guarantor, their / its respective employees, agents, or assignees, or for improper performance or <NOBR>non-performance</NOBR> relating to this Agreement or any other document executed thereof in pursuance to this Agreement.</P>
    <P class="p161 ft2"><SPAN class="ft2">13.</SPAN><SPAN class="ft25">Term and Termination</SPAN></P>
    <P class="p162 ft1">a. This Agreement shall become effective on execution.</P>
    <P class="p163 ft30"><SPAN class="ft1">b.</SPAN><SPAN class="ft101">The Agreement shall stand terminated on the date the Borrower(s) has/have repaid the Loan Amount in full along with Interest, overdue interest, penal interest and other fees and charges as mentioned in this Agreement, and fulfilled all other obligations under the Agreement to the satisfaction of the Lender.</SPAN></P>
    <P class="p164 ft42"><SPAN class="ft1">c.</SPAN><SPAN class="ft102">The Borrower(s) do(es) not have the right to terminate this Agreement in any situation except with the written consent of the Lender, by repaying the entire amounts due to the Lender under this Agreement.</SPAN></P>
    <P class="p165 ft3"><SPAN class="ft1">d.</SPAN><SPAN class="ft103">Notwithstanding anything contrary contained herein the Lender may anytime at its sole and absolute discretion terminate, cancel or withdraw the loan or any part thereof without any liability and without having to provide any reason whereupon the outstanding amount including outstanding loan, interest accrued, penal interest and all other costs, charges,</SPAN></P>
    <P class="p166 ft3"><SPAN class="ft1">e.</SPAN><SPAN class="ft103">expenses, taxes, duties, levies, whatsoever incurred or suffered by the Lender in respect of the loan, and all other amounts payable on the loan shall be paid by the Borrower within a notice period of </SPAN><SPAN class="ft26">30 days </SPAN>failing which the Lender shall be entitled to exercise all its rights and remedies acquired hereby including rights accrued pursuant to the occurrence of an Event of Default as specified under <SPAN class="ft26">Clause 9 </SPAN>here inabove.</P>
    <P class="p167 ft2"><SPAN class="ft2">14.</SPAN><SPAN class="ft73">Severability</SPAN></P>
    <P class="p160 ft55">If any provision in this Agreement shall be found or be held to be invalid or unenforceable, then the meaning of said provision shall be construed, to the extent feasible, so as to render the provision enforceable, and, if no feasible interpretation would save such provision, it shall be severed from the remainder of this Agreementandinsuchanevent,thePartiesshallusebesteffortstonegotiate,ingoodfaith,asubstitute,valid and enforceable provision or agreement, which most nearly reflects the Parties' intent in entering into this Agreement.</P>
    <P class="p168 ft2"><SPAN class="ft2">15.</SPAN><SPAN class="ft73">Miscellaneous</SPAN></P>
    <P class="p169 ft3"><SPAN class="ft1">15.1</SPAN><SPAN class="ft104">The Parties agree that in any legal action or proceeding arising out of or in connection with this Agreement, entries made in the Books of Accounts maintained by PFSL shall be prima facie evidence of debt and of all amounts payable, as therein recorded, by Borrower(s) to PFSL;</SPAN></P>
    <P class="p170 ft3"><SPAN class="ft1">15.2</SPAN><SPAN class="ft104">If at any time any provision hereof is or becomes illegal, invalid or unenforceable in law, neither the legality, validity nor enforce- ability of the remaining provision hereof, nor the legality, validity or enforce ability of other provisions shall in anyway by affected or impaired there by.</SPAN></P>
    <P class="p170 ft3"><SPAN class="ft1">15.3</SPAN><SPAN class="ft104">The Parties agree that any delay or omission by PFSL in exercising any of its right, powers or remedies as the Lender of the Loan under this Agreement and other documents pursuant here to shall not impair the right, power or remedy or be construed as its waiver or acquiescence by PFSL.</SPAN></P>
    <P class="p171 ft3"><SPAN class="ft1">15.4</SPAN><SPAN class="ft104">The Parties confirm that this Agreement and its Schedule and any other documents executed pursuant to this Agreement shall represent one single Agreement between the Parties.</SPAN></P>
    <P class="p172 ft3"><SPAN class="ft1">15.5</SPAN><SPAN class="ft104">Any notice under this Agreement shall be in writing and sent to the address stated in the </SPAN><NOBR><SPAN class="ft26">Schedule-I</SPAN>.</NOBR> The Borrower(s) and Guarantor shall forthwith inform PFSL of any change in his/ her address.</P>
    <P class="p173 ft3"><SPAN class="ft1">15.6</SPAN><SPAN class="ft105">Arbitration and Jurisdiction: This Agreement shall be subject to Indian law and subject to the jurisdiction of courts having jurisdiction where the Registered Office of PFSL is situated.</SPAN></P>
    </DIV>
    <DIV id="id14_2">
    <P class="p13 ft7">14</P>
    </DIV>
    </DIV>
    <DIV id="page_15">
    <DIV id="p15dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAroAAAACCAIAAAA4meh/AAAANElEQVRYhe3UsQkAIBADQLP/0G9h84WdoIV3E4QQkqoaAE2S1xFu8H4snwz+kI7YcKMAdBN9LgkAqUwevwAAAABJRU5ErkJggg==" id="p15img1"></DIV>
    
    
    <DIV id="id15_1">
    <P class="p174 ft55"><SPAN class="ft1">15.7</SPAN><SPAN class="ft106">All disputes, differences and /or claim arising out of signing upon this Agreement whether during its subsistence or thereafter shall be settled by arbitration in accordance with the provisions of the </SPAN><SPAN class="ft54">Arbitration and Conciliation Act, 1996, </SPAN>or any statutory amendments thereof and shall be referred to the sole Arbitration of an Arbitrator to be nominated by PFSL. The award given by such an Arbitrator shall be final and binding on all the Parties to this Agreement. In the event of demise of such an Arbitrator to whom the matter has been originally referred or the Arbitrator recuses himself for being unable to act for any reason, the Lender, on being informed at the time of such demise of the Arbitrator or of his inability to act as Arbitrator, shall appoint another person to act as Arbitrator. Such a person shall be entitled to proceed with the reference from the stage at which it was left by his predecessor.</P>
    <P class="p175 ft55"><SPAN class="ft1">15.8</SPAN><SPAN class="ft106">Dispute for the purpose of Arbitration includes default committed by the Borrower(s) as per </SPAN><SPAN class="ft54">Clause 9 </SPAN>of this Agreement. It is a term of this Agreement that the venue of Arbitration proceedings shall be at <SPAN class="ft54">KOLKATA </SPAN>and the language shall be in <SPAN class="ft54">English.</SPAN></P>
    <P class="p49 ft1"><SPAN class="ft1">15.9</SPAN><SPAN class="ft107">All notices and other communications on PFSL and the Borrower(s) and Guarantor shall be as mentioned in</SPAN></P>
    <P class="p176 ft55"><SPAN class="ft1">15.10</SPAN><NOBR><SPAN class="ft108">Schedule-I</SPAN>.</NOBR> Authority to Share Information: Borrower(s) and Guarantor further authorize PFSL and/ orits Associates /Subsidiaries / Authorized Representatives /Agent/ Affiliates to verify any information / conduct survey at his/her/their office/ residence and/ or contact him/ her/ their family members, employer/ banker or Credit Information Bureau like CIBIL and also to conduct checks for all documents or other information including e KYC and PAN verification as required under policies of PFSL and Reserve Bank of India guidelines from time to time.</P>
    <P class="p177 ft55"><SPAN class="ft1">15.11</SPAN><SPAN class="ft74">Borrower (s) and Guarantor also have no objection if his/ her/ their personal information are shared/ uploaded with / to CIBIL / CERSAI or any other law enforcement agencies as may be required from time to time and also consent to receiving information from Central KYC Registry through SMS / email on the registered mobile number and email address as provided.</SPAN></P>
    <P class="p177 ft55"><SPAN class="ft1">15.12</SPAN><SPAN class="ft95">Borrower(s) and Guarantor confirm his/her/their understanding that the Documentation Charges and Processing Fees paid by him/her/them is </SPAN><NOBR>non-refundable</NOBR> under any circumstances whatsoever including but not limited to decline/part disbursement of the Loan.</P>
    <P class="p178 ft55"><SPAN class="ft1">15.13</SPAN><SPAN class="ft95">Borrower(s) and Guarantor expressly agree and authorize PFSL to communicate to him/ her/ them from time to time various features of products/ promotional offers, which offer significant benefits to its customer, and also transaction related alerts and may use the services of third party agencies for such communication.</SPAN></P>
    <P class="p179 ft3"><SPAN class="ft1">15.14</SPAN><SPAN class="ft109">The Borrower(s) and the Guarantor hereby declare that they are not tax resident in any other country other than India.</SPAN></P>
    <P class="p180 ft3"><SPAN class="ft1">15.15</SPAN><SPAN class="ft109">The Borrower(s) and the Guarantor have read the entire Agreement, constituting the above clauses including the Loan details and the terms of repayment, the fees and charges payable as clearly enumerated in the Schedule to this Agreement. The Borrower(s) and the Guarantor further confirm that the entire Agreement is filled in their presence and that the contents provided herein is explained in the language understood by the Borrower and the Guarantor(s). The Borrower and the Guarantor further confirm having executed the Agreement, received a copy of the same and agree to remit the dues in terms of the </SPAN><SPAN class="ft26">Schedule II </SPAN>hereunder.</P>
    <TABLE cellpadding=0 cellspacing=0 class="t10">
    <TR>
        <TD class="tr6 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p181 ft2">For PFSL</P>
    </DIV>
    <DIV id="id15_2">
    <P class="p13 ft7">15</P>
    </DIV>
    </DIV>
    <DIV id="page_16">
    <DIV id="p16dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcUAAABaCAIAAABG5NrxAAABVklEQVR4nO3UwQnEQADEsFz673muiBgWFqkCv/w8AHy27bftdAbADd7TAQCX8FOAhp8CNPwUoOGnAA0/BWj4KUDDTwEafgrQ8FOAhp8CNPwUoOGnAA0/BWj4KUDDTwEafgrQ8FOAhp8CNPwUoOGnAA0/BWj4KUDDTwEafgrQ8FOAhp8CNPwUoOGnAA0/BWj4KUDDTwEafgrQ8FOAhp8CNPwUoOGnAA0/BWj4KUDDTwEafgrQ8FOAhp8CNPwUoOGnAA0/BWj4KUDDTwEafgrQ8FOAhp8CNPwUoOGnAA0/BWj4KUDDTwEafgrQ8FOAhp8CNPwUoOGnAA0/BWj4KUDDTwEafgrQ8FOAhp8CNPwUoOGnAA0/BWj4KUDDTwEafgrQ8FOAhp8CNPwUoOGnAA0/BWj4KUDDTwEafgrQ8FOAhp8CNPwUoOGnAA0/BWj4KUBk2+kEgBv8AYlGCaeexa2/AAAAAElFTkSuQmCC" id="p16img1"></DIV>
    
    
    <DIV id="id16_1">
    <P class="p182 ft26">IN WITNESS WHEREOF the Parties hereto have executed / caused to be executed these presents the day and year first here in above written in the manner herein after appearing:</P>
    <P class="p183 ft10">For Borrower(s)</P>
    <TABLE cellpadding=0 cellspacing=0 class="t11">
    <TR>
        <TD class="tr26 td26"><P class="p15 ft1">Signed and</P></TD>
        <TD class="tr26 td27"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr26 td28"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr17 td26"><P class="p15 ft110">Delivered by the</P></TD>
        <TD class="tr17 td27"><P class="p15 ft18">&nbsp;</P></TD>
        <TD class="tr17 td28"><P class="p15 ft18">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr17 td26"><P class="p15 ft110">Borrower(s)</P></TD>
        <TD colspan=2 class="tr17 td29"><P class="p184 ft110">Mr./Ms.__<SPAN class="ft111">_____________</SPAN>_______________________ ______________________</P></TD>
    </TR>
    <TR>
        <TD class="tr27 td26"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr27 td27"><P class="p185 ft1">(Name of the Borrower)</P></TD>
        <TD class="tr27 td28"><P class="p186 ft1">(Signature)</P></TD>
    </TR>
    <TR>
        <TD class="tr28 td26"><P class="p15 ft9">&nbsp;</P></TD>
        <TD colspan=2 class="tr28 td29"><P class="p184 ft1">Mr./Ms.___<SPAN class="ft6">_____________</SPAN>______________________ ______________________</P></TD>
    </TR>
    <TR>
        <TD class="tr29 td26"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr29 td27"><P class="p187 ft1">(Name of the <NOBR>Co-Borrower)</NOBR></P></TD>
        <TD class="tr29 td28"><P class="p186 ft1">(Signature)</P></TD>
    </TR>
    <TR>
        <TD class="tr28 td26"><P class="p15 ft9">&nbsp;</P></TD>
        <TD colspan=2 class="tr28 td29"><P class="p188 ft1">Mr./Ms.____<SPAN class="ft6">______________</SPAN>____________________ ______________________</P></TD>
    </TR>
    <TR>
        <TD class="tr29 td26"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr29 td27"><P class="p187 ft1">(Name of the <NOBR>Co-Borrower)</NOBR></P></TD>
        <TD class="tr29 td28"><P class="p186 ft1">(Signature)</P></TD>
    </TR>
    <TR>
        <TD class="tr30 td26"><P class="p15 ft10">For Lender</P></TD>
        <TD class="tr30 td27"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr30 td28"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr15 td26"><P class="p15 ft1">Signed and</P></TD>
        <TD class="tr15 td27"><P class="p189 ft6"><SPAN class="ft1">________</SPAN>________________________<SPAN class="ft1">___________</SPAN></P></TD>
        <TD class="tr15 td28"><P class="p190 ft1">_________________________</P></TD>
    </TR>
    <TR>
        <TD class="tr17 td26"><P class="p15 ft110">Delivered by</P></TD>
        <TD class="tr17 td27"><P class="p191 ft110">(Name of the authorised signatory)</P></TD>
        <TD class="tr17 td28"><P class="p192 ft110">(Stamp /Signature)</P></TD>
    </TR>
    <TR>
        <TD class="tr17 td26"><P class="p15 ft110">Peerless Financial</P></TD>
        <TD class="tr17 td27"><P class="p15 ft18">&nbsp;</P></TD>
        <TD class="tr17 td28"><P class="p15 ft18">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr17 td26"><P class="p15 ft110">Services Ltd.</P></TD>
        <TD class="tr17 td27"><P class="p15 ft18">&nbsp;</P></TD>
        <TD class="tr17 td28"><P class="p15 ft18">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD colspan=2 class="tr29 td30"><P class="p15 ft1">by the hand of its Authorised signatory</P></TD>
        <TD class="tr29 td28"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr31 td26"><P class="p15 ft10">For Witness</P></TD>
        <TD class="tr31 td27"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr31 td28"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr2 td26"><P class="p193 ft1">Name</P></TD>
        <TD colspan=2 class="tr2 td29"><P class="p194 ft1">: ____________________________________________________________________________</P></TD>
    </TR>
    <TR>
        <TD class="tr32 td26"><P class="p193 ft1">Address</P></TD>
        <TD colspan=2 class="tr32 td29"><P class="p195 ft1">: _____________________________________________________________________________</P></TD>
    </TR>
    <TR>
        <TD class="tr32 td26"><P class="p193 ft1">City</P></TD>
        <TD colspan=2 class="tr32 td29"><P class="p196 ft1">: ______________________ Pin Code ______________________ State ___________________</P></TD>
    </TR>
    <TR>
        <TD colspan=2 class="tr30 td30"><P class="p197 ft1">Signed by Witness :____________________________________________</P></TD>
        <TD class="tr30 td28"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr12 td26"><P class="p198 ft10">For Witness</P></TD>
        <TD class="tr12 td27"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr12 td28"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr7 td26"><P class="p193 ft1">Name</P></TD>
        <TD colspan=2 class="tr7 td29"><P class="p194 ft1">: ____________________________________________________________________________</P></TD>
    </TR>
    <TR>
        <TD class="tr32 td26"><P class="p193 ft1">Address</P></TD>
        <TD colspan=2 class="tr32 td29"><P class="p195 ft1">: _____________________________________________________________________________</P></TD>
    </TR>
    <TR>
        <TD class="tr32 td26"><P class="p193 ft1">City</P></TD>
        <TD colspan=2 class="tr32 td29"><P class="p196 ft1">: ______________________ Pin Code ______________________ State ___________________</P></TD>
    </TR>
    </TABLE>
    <P class="p199 ft1">Signed by Witness :____________________________________________</P>
    <P class="p168 ft10">Read, understood & acknowledged by the Guarantor</P>
    <P class="p200 ft1">Name : ___<SPAN class="ft6">_______________________</SPAN>__________________________________________________</P>
    <TABLE cellpadding=0 cellspacing=0 class="t12">
    <TR>
        <TD class="tr28 td31"><P class="p15 ft1">Address</P></TD>
        <TD class="tr28 td32"><P class="p201 ft1">: ________<SPAN class="ft6">______________________</SPAN>_______________________________________________</P></TD>
    </TR>
    <TR>
        <TD class="tr6 td31"><P class="p15 ft1">City</P></TD>
        <TD class="tr6 td32"><P class="p201 ft1">: ____________<SPAN class="ft6">________</SPAN>__ Pin Code _____<SPAN class="ft6">____________</SPAN>_____ State _____<SPAN class="ft6">_________</SPAN>_____</P></TD>
    </TR>
    </TABLE>
    </DIV>
    <DIV id="id16_2">
    <P class="p13 ft7">16</P>
    </DIV>
    </DIV>
    <DIV id="page_17">
    <DIV id="p17dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAtkAAAOHCAIAAAB93Mj6AAATlklEQVR4nO3dUa7cthmAUf+FdpTsfwXOmtgHA0ZRx5qEzPirOuc8BEYkXg8Q5uKDOCJnrfUFACBy1R8AAHiMmfnZpe2nG1oEAPirfhYcN43y0nUyGAD4EO/7Use11poZ3xrhVzLlAJ7lrU8u/vW+Hw0A8JIWAQBKWgQAKGkRAKCkRQCAkhYBAEpaBAAoaREAoKRFAICSFgEASloEAChpEQCgpEUAgJIWAQBKWgQAOLXW2h6rRQCAkhYBAEpaBAAoaREAoKRFAICSFgEATs3M9lgtAgCUtAgAUNIiAEBpf3UHAPgc9zurzsz21qvXWutkPGww5QCe5eSrqS9ZowEASloEAChpEQCgpEUAgJIWAQBKWgQAKGkRAKCkRQCAkhYBAEpaBAAoaREAoKRFAICSFgEATp2ceKpFAICSFgEASloEAChpEQCgpEUAgJIWAQBOzcz2WC0CAJS0CABQ0iIAQEmLAACl/W+aAACf436X95nZ3gb+WmudjIcNphzAs5y8JvOSNRoAoKRFAICSFgEASloEAChpEQCgpEUAgJIWAQBKWgQAKGkRAKCkRQCAkhYBAEpaBAA4dXLKmBYBAEpaBAAoaREAoKRFAICSFgEASloEADg1M9tjtQgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQGn/DRwA4HPcn343M9vH411rrZPxsMGUA3iWk+1DXrJGAwCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAHDqZDdtLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAcGpmtsdqEQCgpEUAgJIWAQBKWgQAKGkRAKCkRQCAkhYBAEr7bwMDAJ/j/iTemdk+qvdaa52Mhw2mHMCznGxl9pI1GgCgpEUAgJIWAQBKWgQAKGkRAKCkRQCAkhYBAEpaBAAoaREA4NTJDpZaBAAoaREAoKRFAICSFgEASloEAChpEQDg1Mxsj9UiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBAaX+XNADgc6y1bq7OzP0NN6611sl42GDKATzLyRbvL1mjAQBKWgQAKGkRAKCkRQCAkhYBAEpaBAAoaREA4NTJTg1aBAAoaREAoKRFAICSFgEASloEAChpEQDg1MnheVoEAChpEQCgpEUAgJIWAQBKWgQAKGkRAKCkRQCAkhYBAEpaBAAoaREAoLS/YysA8DnWWjdXZ+b+hhvXWutkPGww5QCe5eS4mZes0QAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAnDp5O1KLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCcOjmwRosAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDa3z0eAPgca62bqzNzf8ONa611Mh42mHIAz3Jy9N1L1mgAgJIWAQBKWgQAKGkRAKCkRQCAUydvJGgRAKCkRQCAkhYBAEpaBAAoaREAoKRFAIBTJ5vEaxEAoKRFAICSFgEASloEAChpEQCgpEUAgJIWAQBKWgQAKGkRAKCkRQCAkhYBAEpaBAAoaREAoLR/qh4A8DnWWjdXZ+b+hhvXWutkPGww5QCeZeaNDy+s0QAAJS0CAJS0CABw6mTlXYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJw62QxNiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJT2T/gFAD7HWuvm6szc33DjWmudjIcNphzAs8y88eGFNRoAoKRFAIBTJ0+7tQgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAwKmTDUi0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQGn/hF8A4HOstb79YebP4+H7DX+XFgEAXttOjZes0QAApav+AADAY/xsgebLwYOTa601M+978AI/MuUAnuV7gvzst/dNo7xkjQYAKGkRAKCkRQCAkhYBAEpaBAAoaREAoKRFAICSFgEASloEAChpEQCgpEUAgJIWAQBKWgQAKGkRAKCkRQCAkhYBAEpaBAA4tdbaHqtFAICSFgEASloEAChpEQCgpEUAgNLUHwAAeID7N2VmZvtVmmutdTIeNphyAM8y88aHF9ZoAICSFgEASloEAChpEQCgpEUAgJIWAQBKWgQAKGkRAKCkRQCAkhYBAEpaBAAoaREAoKRFAICSFgEASloEAChpEQCgpEUAgFNrre2xWgQAKGkRAKCkRQCAkhYBAEpaBAAoaREA4NTMbI/VIgBAab9iAIDPcb+DyMxsbzFyrbVOxsMGUw7gWU6WYF6yRgMAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgDAqbXW9lgtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABwama2x2oRAKCkRQCA0v4TFQDgc9zvZjYz29udXWutk/GwwZQDeJaTr4O8ZI0GAChpEQCgpEUAgJIWAQBKWgQAKGkRAKCkRQCAkhYBAEpaBAAoaREAoKRFAICSFgEASloEAChpEQDg1Mnp61oEAChpEQCgpEUAgJIWAQBKWgQAKGkRAODUzGyP1SIAQEmLAAAlLQIAlLQIAFDa/6YJAPA57nd5n5ntbeCvtdbJeNhgygE8y8lrMi9ZowEASloEAChpEQCgpEUAgJIWAQBKWgQAKGkRAKCkRQCAkhYBAEpaBAAoaREAoKRFAIBTJ6eMaREAoKRFAICSFgEASloEAChpEQCgpEUAgFMzsz1WiwAAJS0CAJS0CABQ0iIAQEmLAACl/W+9AgCf4/7EmZnZPpLmWmudjIcNphzAs5y8svuSNRoAoKRFAICSFgEASloEAChpEQCgpEUAgJIWAQBKWgQAKGkRAKCkRQCAkhYBAE6dnOyhRQCAkhYBAEpaBAAoaREAoKRFAICSFgEATs3M9lgtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ2n8DBwD4HPen383M9vF411rrZDxsMOUAnuVk+5CXrNEAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAnDrZTVuLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCcmpntsVoEAChpEQCgpEUAgJIWAQBKWgQAKGkRAKCkRQCAkhYBAEr7O5MAAJ9jrXVzdWbub7hxrbVOxsMGUw7gWU62VX3JGg0AUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAnDrZNUqLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCcOjnIV4sAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAACl/V3SAIDPsda6uToz9zfcuNZaJ+NhgykH8CwnW7y/ZI0GAChpEQCgpEUAgJIWAQBKWgQAKGkRAKCkRQCAUyc7NWgRAKCkRQCAkhYBAEpaBAAoaREAoKRFAIBTJ4fnaREAoKRFAICSFgEASloEAChpEQCgpEUAgJIWAQBKWgQAKGkRAKCkRQCAkhYBAEr7u8cDAJ9jrXVzdWbub7hxrbVOxsMGUw7gWU6OvnvJGg0AUNIiAEBJiwAAJS0CAJS0CABw6uSNBC0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAHDqZJN4LQIAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQGl/93gA4HOstb794WdHz3y/4e/SIgDAa9up8ZI1GgCgpEUAgNK11pqZ9z14gR+ZcgDP8rPviPwjPBcBAEpX/QEAgMe4eUCy/cBbiwAAf9XPguNkEccaDQBQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAHBqrbU9VosAACUtAgCUpv4AAMADnKzC3LvWWjPzvr8AfmTKATzLzBsfXlijAQBKWgQAOHXy4ESLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCcWmttj9UiAEBJiwAAJS0CAJSm/gAAwAOcfCPk3rXWmpn3/QXwI1MO4Flm3vjwwhoNAHDqJFa0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgDAqbXW9lgtAgCUtAgAUNIiAEBJiwAAJS0CAJSm/gAAwAPcvykzM9uv0lxrrZPxsMGUA3iWmTc+vLBGAwCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJxaa22P1SIAQEmLAAAlLQIAlLQIAFDSIgBASYsAAKdmZn/sP/g5AID/V/dv7c7M9mu911rrZDxsMOUAnuXkscdL1mgAgJIWAQBKWgQAKGkRAKCkRQCAkhYBAEpaBAAoaREAoKRFAICSFgEASloEAChpEQCgpEUAgJIWAQBKWgQAKGkRAODUWmt7rBYBAEpaBAAoaREAoKRFAICSFgEASloEADg1M9tjtQgAUNqvGADgc9zvIDIz21uMXGutk/GwwZQDeJaTJZiXrNEAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAcGqttT1WiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAnJqZ7bFaBAAoaREAoKRFAIDS/uoOAPA57ndWnZntrVevtdbJeNhgygE8y8lXU1+yRgMAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAnDo58VSLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCcmpntG7QIAPB2Ny/9ahEA4L3++OOPm6taBAAoaREA4FeYmZdfKwEA+HPr1v0NX79+/f7PL1++fPvDd9daa2ZOtpGHv8uUA3iWf+R5xu+///49XP6TNRoA4I1edowWAQB+hR+fiHzLFC0CALzRzaL8t0taBAB4l/udRb7RIgDAe/32229/+u+t0QAAvfFOL7+eKQfwLC9/b//shvuB3656LgIAlLQIAPAuLx+KfNEiAMC7/bjd2X+u3WgRAOC9vn79enPVd1cJmHIAz/LW39ueiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAnPpxB5G/TosAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJT238ABAD7H/dl4J4fnXc7p5dcz5QCe5WT7kJes0QAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCcOtlNW4sAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJyame2xWgQAKGkRAKCkRQCAkhYBAEpaBAAo7X/rFQD4HPcnzszM9pE0nosAACUtAgCUtAgAULrWWidrPLDBlAN4lpNtVV/yXAQAKGkRAKCkRQCAkhYBAEpaBAAoaREAoKRFAICSFgEATp3sGqVFAICSFgEASloEAChpEQCgpEUAgJIWAQBOnRzkq0UAgJIWAQBKWgQAKGkRAKCkRQCAkhYBAEpaBAAoaREAoKRFAIDS/i5pAMDnWGvdXJ2Z+xtuXGutk/GwwZQDeJaTLd5fskYDAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgDAqZOdGrQIAFDSIgBASYsAACUtAgCUtAgAUNIiAMCpk8PztAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBAaX/HVgDgc6y1bq7OzP0NN67tkQDABzo5eubPf6AWAQBCvi8CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAUNIiAEBJiwAAJS0CAJS0CABQ0iIAQEmLAAAlLQIAlLQIAFDSIgBASYsAACUtAgCUtAgAULrqDwD875qZ+iP8Cmut+iPQ+5DZfu4d/7/M9x/qPwP/xS9oAH6BfwO+QuwqExjWsgAAAABJRU5ErkJggg==" id="p17img1"></DIV>
    
    
    <DIV id="id17_1">
    <P class="p202 ft5">SCHEDULE I</P>
    <P class="p13 ft5">DETAILS OF PARTIES TO THE AGREEMENT</P>
    </DIV>
    <DIV id="id17_2">
    <DIV id="id17_2_1">
    <P class="p203 ft112">Name of the Borrower</P>
    <P class="p204 ft112">Permanent Address</P>
    <P class="p205 ft112">PAN</P>
    <P class="p204 ft112">Officially Valid Documents</P>
    <P class="p204 ft112">Occupation</P>
    <P class="p204 ft112">Resident Status</P>
    <P class="p205 ft112">Date of birth</P>
    <P class="p204 ft112">Marital Status</P>
    <P class="p205 ft112">Highest Education</P>
    <P class="p204 ft112">Tel no / Email ID</P>
    <P class="p204 ft112">Name of the Co Borrower</P>
    <P class="p205 ft112">Permanent Address</P>
    <P class="p204 ft112">PAN</P>
    <P class="p204 ft112">Officially Valid Documents</P>
    <P class="p205 ft112">Occupation</P>
    <P class="p204 ft112">Resident Status</P>
    <P class="p204 ft112">Date of birth</P>
    <P class="p205 ft112">Marital Status</P>
    <P class="p204 ft112">Highest Education</P>
    <P class="p204 ft112">Tel no / Email ID</P>
    <P class="p205 ft112">Name of the Co Borrower</P>
    <P class="p204 ft112">Permanent Address</P>
    <P class="p204 ft112">PAN</P>
    <P class="p205 ft112">Officially Valid Documents</P>
    <P class="p204 ft112">Occupation Resident Status</P>
    <P class="p205 ft112">Date of Birth</P>
    <P class="p204 ft112">Marital Status</P>
    <P class="p204 ft112">Highest Education</P>
    <P class="p204 ft112">Tel no / Email ID</P>
    <P class="p205 ft112">Place of agreement</P>
    <P class="p204 ft112">Date of agreement</P>
    <TABLE cellpadding=0 cellspacing=0 class="t13">
    <TR>
        <TD class="tr20 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr20 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr20 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    <TR>
        <TD class="tr13 td23"><P class="p15 ft2">For PFSL</P></TD>
        <TD class="tr13 td24"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr13 td25"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    </TABLE>
    </DIV>
    <DIV id="id17_2_2">
    <!--[if lte IE 7]><P style="margin-left:0px;margin-top:0px;margin-right:-816px;margin-bottom:0px;" class="p206 ft113"><![endif]--><!--[if gte IE 8]><P style="margin-left:-816px;margin-top:0px;margin-right:0px;margin-bottom:816px;" class="p206 ft113"><![endif]--><![if ! IE]><P style="margin-left:-408px;margin-top:408px;margin-right:-408px;margin-bottom:408px;" class="p206 ft113"><![endif]>Borrower(s) to sign</P>
    </DIV>
    </DIV>
    <DIV id="id17_3">
    <P class="p13 ft7">17</P>
    </DIV>
    </DIV>
    <DIV id="page_18">
    <DIV id="p18dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAtgAAAOZCAIAAACrwsAvAAASHUlEQVR4nO3dUW7bShJAUdVAO0r2vwJnTf0+PBgMnhPF6Q5zZeecT9MlEEgoX7EpctZaNwCAwr3eAQDgA5iZH206OakhRACAn/tRbTwIlPe4H84DAJ/edRdy3C99deDVzDjQgA/q0nMW/7nupQEAHhMiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAA+9ZaJ+NCBADICBEAICNEAICMEAEAMkIEAMgIEQBg38ycjAsRACAjRACAzP12fFIFeA8HGsBb99vxPdGAn5oZBxrwQV36OcrSDACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAwL7DR4sLEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAfTNzMi5EAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAy93oHAHgKh1/C/EwOn+LGLxEiANxu/voSsTQDAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAsO/wnrxCBADICBEAICNEAICMEAEAMkIEAMgIEQBg38ycjAsRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAIB9a62TcSECAGSECACQESIAQEaIAAAZIQIAZIQIALBvZk7GhQgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAwL611sm4EAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQA2DczJ+NCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQBg31rrZFyIAAAZIQIAZIQIAJARIgBARogAABkhAgDsm5mTcSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIALBvrXUyLkQAgIwQAQAyQgQAyAgRACAjRACAjBABAPbNzMm4EAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQA2LfWOhkXIgBARogAABkhAgBkhAgAkBEiAEBGiAAA+2bmZFyIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgDsW2udjAsRACAjRACAjBABADJCBADICBEAICNEAIB9M3MyLkQAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABAPattU7GhQgAkBEiAEBGiAAAGSECAGSECACQESIAwL6ZORkXIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAA+9ZaJ+NCBADICBEAICNEAICMEAEAMkIEAMgIEQBg38ycjAsRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAIB9a62T8fld+wEAfFaHtfHA/dJXB17NjAMN+KBmLjxtYWkGAMgIEQAgI0QAgIwQAQD2HV5BIkQAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABAPattU7GhQgAkBEiAEBGiAAAGSECAGSECACQESIAwL6ZORkXIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAA+9ZaJ+NCBADICBEAICNEAICMEAEAMkIEAMgIEQBg38ycjAsRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyNxvx4+rAd7DgQbw1v12u6216t2AT25mHGjAB3Xp5yhLMwBARogAABkhAgBkhAgAsO/wAjghAgBkhAgAkBEiAEBGiAAAGSECAGSECACw7/C+q0IEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRAGDfWutkXIgAABkhAgBkhAgAkBEiAEBGiAAAGSECAOybmZNxIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAsG+tdTIuRACAjBABADJCBADICBEAICNEAICMEAEA9s3MybgQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADYt9Y6GRciAEBGiAAAGSECAGSECACQESIAQEaIAAD7ZuZkXIgAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAOxba52MCxEAICNEAICMEAEAMkIEAMgIEQAgI0QAgH0zczIuRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAy99vxzVmB93CgAbx1v91ua616N+CTmxkHGvBBXfo5ytIMAJARIgBARogAABkhAgBkhAgAkBEiAMC+w68EChEAICNEAICMEAEAMkIEAMgIEQAgI0QAgH2HT6IRIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAA+9ZaJ+NCBADICBEAICNEAICMEAEAMkIEAMgIEQBg38ycjAsRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAIB9a62TcSECAGSECACQESIAQEaIAAAZIQIAZIQIALBvZk7GhQgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAwL611sm4EAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQA2DczJ+NCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQBg31rrZFyIAAAZIQIAZIQIAJARIgBARogAABkhAgDsm5mTcSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIALBvrXUyLkQAgIwQAQAyQgQAyAgRACAjRACAjBABAPbNzMn4/fwlgPdwoAG85YwIAJC5345vRQL81Mw40IAP6tITus6IAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIALBvrXUyLkQAgIwQAQAyQgQAyAgRACAjRACAjBABAPbNzMm4EAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQA2LfWOhkXIgBARogAABkhAgBkhAgAkBEiAEBGiAAA+2bmZFyIAAAZIQIAZO71DgB8eIenpn+Lw5tKQUWIAJwSAbDN0gwAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkPH0XeCHnuHp9tfxyFz4LQ4PJSEC/JA/1cDVLM0AABkhAgBkhAgAkBEiAEBGiAAA+w6/XidEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQD2rbVOxoUIAJARIgBARogAABkhAgBkhAgAkBEiAMC+mTkZFyIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAcK0H9xoRIgDAtdZaP9okRACAC3379u3BViECAGSECABwuZn57pUiQgQAuNzLy8taa2b+tVJzr3YI+JdfeoLlgyu/AJ7Q169f11pv37uECDyRd+bF4UO3AZ6HpRkA4Cr/++D09oPW6yYhAgBc5cGJ3tdNQgQA2PcgNR7fQeSVEAEALvTly5fv/vx1aWZuLr+H683MTw+09/zOr/4mwLnt95zHg69bnREBADJCBADICBEA4BKPr2N93eqGZgDAvp9eQfL2F/7/J86IAAAXenl5ebDVt2bgT/CtGeDjes+XX7Zf3BkRACAjRACAjItV4Ym887G61mWAT0OIwLOQF8BfyNIMAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIA7Dt8TpYQAQAyQgQAyAgRACAjRACAjBABADJCBADYNzMn40IEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRAGDfWutkXIgAABkhAgBkhAgAkBEiAEBGiAAAGSECAOybmZNxIQIAZIQIAJC51zsA/Ncvnd48vIMQwJMQIvBE3pkXhyuyAM/D0gwAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkPPQOnoin2QF/GyECz+Kdj94FeCqH712WZgCAjBABADJCBADICBEAICNEAICMEAEA9h3ed0CIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgDsW2udjAsRACAz9Q4AAE/t8JzHY3PpqwMAn8bM989fnLSEEAEAMq4RAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAIHOvdwB4UjNT78KfsNaqd4HeX/K//dwVx8u8vqh/A/7FuzMAf8A/N+A59XdHDI0AAAAASUVORK5CYII=" id="p18img1"></DIV>
    
    
    <DIV id="id18_1">
    <DIV id="id18_1_1">
    <P class="p207 ft5">SCHEDULE II</P>
    <P class="p208 ft5">KEY FACTS THE LOAN</P>
    <P class="p209 ft6"><SPAN class="ft1">I.</SPAN><SPAN class="ft114">Nature of Loan</SPAN></P>
    <P class="p210 ft2">Rs. <SPAN class="ft112">____</SPAN><SPAN class="ft115">_________</SPAN><SPAN class="ft112">l</SPAN>akh (Rupees _<SPAN class="ft112">__________</SPAN>_lakh only)</P>
    <P class="p211 ft1"><SPAN class="ft69">ii.</SPAN><SPAN class="ft116">Sanctioned Loan Amount Sanction</SPAN></P>
    <TABLE cellpadding=0 cellspacing=0 class="t14">
    <TR>
        <TD class="tr18 td33"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr18 td34"><P class="p16 ft1">letter / Letter of intent reference</P></TD>
        <TD class="tr18 td35"><P class="p212 ft2">Reference no _<SPAN class="ft112">__________</SPAN>__ dated _<SPAN class="ft112">________</SPAN>_</P></TD>
    </TR>
    <TR>
        <TD class="tr1 td36"><P class="p15 ft12">&nbsp;</P></TD>
        <TD class="tr1 td37"><P class="p15 ft12">&nbsp;</P></TD>
        <TD class="tr1 td38"><P class="p15 ft12">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr10 td33"><P class="p213 ft1">iii.</P></TD>
        <TD class="tr10 td34"><P class="p214 ft6">Purpose of loan</P></TD>
        <TD class="tr10 td35"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr21 td36"><P class="p15 ft19">&nbsp;</P></TD>
        <TD class="tr21 td37"><P class="p15 ft19">&nbsp;</P></TD>
        <TD class="tr21 td38"><P class="p15 ft19">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr33 td33"><P class="p213 ft1">iv.</P></TD>
        <TD class="tr33 td34"><P class="p16 ft1">Repayment tenure</P></TD>
        <TD rowspan=2 class="tr34 td35"><P class="p212 ft1">___<SPAN class="ft6">__________________</SPAN>____from the date of disbursement</P></TD>
    </TR>
    <TR>
        <TD class="tr25 td33"><P class="p15 ft22">&nbsp;</P></TD>
        <TD class="tr25 td34"><P class="p15 ft22">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr35 td36"><P class="p15 ft117">&nbsp;</P></TD>
        <TD class="tr35 td37"><P class="p15 ft117">&nbsp;</P></TD>
        <TD class="tr35 td38"><P class="p15 ft117">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr36 td33"><P class="p213 ft1">v.</P></TD>
        <TD class="tr36 td34"><P class="p15 ft1">Rate of Interest</P></TD>
        <TD rowspan=2 class="tr37 td35"><P class="p212 ft112"><SPAN class="ft2">__</SPAN>__________________<SPAN class="ft2">_____% </SPAN><SPAN class="ft1">per annum (fixed)</SPAN></P></TD>
    </TR>
    <TR>
        <TD class="tr11 td33"><P class="p15 ft15">&nbsp;</P></TD>
        <TD class="tr11 td34"><P class="p15 ft15">&nbsp;</P></TD>
    </TR>
    </TABLE>
    <P class="p215 ft6"><SPAN class="ft1">vi.</SPAN><SPAN class="ft118">Processing & Documentation charges</SPAN></P>
    <P class="p216 ft6"><SPAN class="ft1">vii.</SPAN><SPAN class="ft119">(a) </SPAN>Security& Margin</P>
    <P class="p217 ft6"><SPAN class="ft1">(</SPAN>b) Guarantee</P>
    <TABLE cellpadding=0 cellspacing=0 class="t15">
    <TR>
        <TD class="tr19 td39"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr19 td40"><P class="p15 ft1">Repayable in_<SPAN class="ft120">__________</SPAN>(__<SPAN class="ft6">_________</SPAN>__) Equated Monthly</P></TD>
    </TR>
    <TR>
        <TD rowspan=2 class="tr9 td39"><P class="p15 ft1">viii. Repayment of principal and payment</P></TD>
        <TD class="tr23 td40"><P class="p15 ft122">Instalments (EMIs) of Rs.<SPAN class="ft121">___________</SPAN>_________________/-</P></TD>
    </TR>
    <TR>
        <TD class="tr23 td40"><P class="p15 ft122">(Rupees____<SPAN class="ft121">_____________</SPAN>____________________________</P></TD>
    </TR>
    <TR>
        <TD class="tr38 td39"><P class="p218 ft1">of interest</P></TD>
        <TD class="tr38 td40"><P class="p15 ft1">______________________________________________only)</P></TD>
    </TR>
    <TR>
        <TD class="tr29 td39"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr29 td40"><P class="p15 ft1">each, to be</P></TD>
    </TR>
    <TR>
        <TD class="tr28 td39"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr28 td40"><P class="p219 ft6">deducted from the Borrower's salary by the</P></TD>
    </TR>
    <TR>
        <TD class="tr17 td39"><P class="p15 ft18">&nbsp;</P></TD>
        <TD class="tr17 td40"><P class="p15 ft110">Borrower's employer on monthly basis and credited into the</P></TD>
    </TR>
    <TR>
        <TD class="tr27 td39"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr27 td40"><P class="p15 ft1">Lender's bank Account</P></TD>
    </TR>
    <TR>
        <TD class="tr28 td39"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr28 td40"><P class="p219 ft1"><SPAN class="ft6">directly debited from the</SPAN> Borrower's bank a/c and credited into</P></TD>
    </TR>
    <TR>
        <TD class="tr29 td39"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr29 td40"><P class="p15 ft1">lender's bank a/c as detailed in item no ( IX) here in below</P></TD>
    </TR>
    </TABLE>
    </DIV>
    <DIV id="id18_1_2">
    <!--[if lte IE 7]><P style="margin-left:0px;margin-top:0px;margin-right:-906px;margin-bottom:0px;" class="p220 ft113"><![endif]--><!--[if gte IE 8]><P style="margin-left:-906px;margin-top:0px;margin-right:0px;margin-bottom:906px;" class="p220 ft113"><![endif]--><![if ! IE]><P style="margin-left:-453px;margin-top:453px;margin-right:-453px;margin-bottom:453px;" class="p220 ft113"><![endif]>Borrower(s) to sign</P>
    </DIV>
    </DIV>
    <DIV id="id18_2">
    <TABLE cellpadding=0 cellspacing=0 class="t16">
    <TR>
        <TD class="tr6 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p43 ft2">For PFSL</P>
    </DIV>
    <DIV id="id18_3">
    <P class="p13 ft7">18</P>
    </DIV>
    </DIV>
    <DIV id="page_19">
    <DIV id="p19dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAtYAAAOZCAIAAAC1C/CcAAARH0lEQVR4nO3dS27cCBJAwc6BbiTf/wY+U85CgOGx25pWtktPhiKWLmWBIE3igcXP7O5fAADv66leAADgDzAzv/rodjpDggAA/9+vOuOVNHnd03kSAPgkHnHZxtODvhf43szY0YA/1IPOVvznEV8KAPA6CQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIAHC3u7dBCQIABCQIABCQIABAQIIAAAEJAgAEJAgAcDczt0EJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCABwt7u3QQkCAAQkCAAQkCAAQECCAAABCQIABCQIAHA3M7dBCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAcLe7t0EJAgAEJAgAEJAgAEBAggAAAQkCAAQkCABwNzO3QQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIAHC3u7dBCQIABCQIABCQIABAQIIAAAEJAgAEJAgAcDczt0EJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCABwt7u3QQkCAAQkCAAQkCAAQECCAAABCQIfyMw89O/5lTetSav9Hdgin8FTvQDA/3AwfX8v69ya/zhskT/LzNxuipEg8LG8aU92jP4tdvdNx1Cr/dFskU/CDzEAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQMCbcuFjedM7P28vyOYHb301vNX+aLbIJyFB4ANxJE1Y7R+NLfJJ+CEGAAhIEADg7nzWSoIAAAEJAgAEJAgAEJAgAEBAggAAAQkCANy96YGK35MgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAB3u3sblCAAQECCAAABCQIABCQIABCQIABAQIIAAHczcxuUIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAd7t7G5QgAEBAggAAAQkCAAQkCAAQkCAAQECCAAB3M3MblCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAHe7exuUIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAdzNzG5QgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAB3u3sblCAAQECCAAABCQIABCQIABCQIABAQIIAAHczcxuUIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAd7t7G5QgAEBAggAAAQkCAAQkCAAQkCAAQECCAAB3M3MblCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAHe7exuUIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAdzNzG5QgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAB3u3sblCAAQECCAAABCQIABCQIABCQIABAQIIAAHczcxuUIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAd7t7G5QgAEBAggAAAQkCAAQkCAAQkCAAQECCAAB3M3MblCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAHe7exuUIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAdzNzG5QgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAB3u3sblCAAQECCAAABCQIABCQIABCQIABAQIIAAHczcxuUIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAd7t7G5QgAEBAggAAAQkCAAQkCAAQkCAAQECCAAB3M3MblCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAMBDzMwrDy57es9FAQA+j9195VNnQQCAh/j69esrn0oQACAgQQCAB5qZvz0dIkEAgMd6fn7++bpUCQIAPNy3S1O/tYgEAQAe6If7Ynb3pULclAsA/Gav3wvzEiXOggAAd3/78I8vX748Pz+/Pji/GgZ+o5mxowF/qMMR7J+MOAsCAAQkCAAQkCAAwLt6uSNGggAAAQkCANz9/NjTv1690+XblaoSBAB4iJ/r5Ps7ZSQIABCQIADAQ/z8c8z3/yJBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEALjb3dugBAEAAhIEAAhIEAAgIEEAgIAEAQACEgQAuJuZ26AEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAC4293boAQBAAISBAAISBAAICBBAICABAEAAhIEALibmdugBAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQAuNvd26AEAQACEgQACEgQACAgQQCAgAQBAAISBAC4m5nboAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEALjb3dugBAEAAhIEAAhIEAAgMPUCAAAf2svVHjO/bIbb5SBzvooEAODMDzEAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAIGnegGAD2pm6kV4D7tbLwK9T/K//d/7vfvLvHydtc8PHJcBeKj/ApEDx1DjEakLAAAAAElFTkSuQmCC" id="p19img1"></DIV>
    
    
    <DIV class="dclr"></DIV>
    <TABLE cellpadding=0 cellspacing=0 class="t17">
    <TR>
        <TD class="tr18 td41"></TD>
        <TD class="tr18 td17"><P class="p18 ft1">ix.</P></TD>
        <TD class="tr18 td42"><P class="p15 ft1">Details of Lender's bank</P></TD>
        <TD colspan=2 class="tr18 td43"><P class="p15 ft1">Current Account No: <SPAN class="ft2">00080350003328</SPAN></P></TD>
        <TD class="tr18 td44"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr38 td41"></TD>
        <TD class="tr38 td17"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr38 td42"><P class="p15 ft1">account for credit of EMI</P></TD>
        <TD colspan=3 class="tr38 td45"><P class="p15 ft2"><SPAN class="ft1">Beneficiary: </SPAN>Peerless Financial Services Limited</P></TD>
    </TR>
    <TR>
        <TD class="tr17 td41"></TD>
        <TD class="tr17 td17"><P class="p15 ft18">&nbsp;</P></TD>
        <TD class="tr17 td42"><P class="p15 ft18">&nbsp;</P></TD>
        <TD colspan=3 class="tr17 td45"><P class="p15 ft123"><SPAN class="ft110">Name of bank & branch: </SPAN>HDFC Bank, Stephen House</P></TD>
    </TR>
    <TR>
        <TD class="tr29 td41"></TD>
        <TD class="tr29 td17"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr29 td42"><P class="p15 ft9">&nbsp;</P></TD>
        <TD colspan=2 class="tr29 td43"><P class="p15 ft2">Branch <SPAN class="ft1">IFSC Code</SPAN>: HDFC0000008</P></TD>
        <TD class="tr29 td44"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr39 td41"></TD>
        <TD class="tr39 td15"><P class="p15 ft124">&nbsp;</P></TD>
        <TD class="tr39 td46"><P class="p15 ft124">&nbsp;</P></TD>
        <TD class="tr39 td47"><P class="p15 ft124">&nbsp;</P></TD>
        <TD class="tr39 td48"><P class="p15 ft124">&nbsp;</P></TD>
        <TD class="tr39 td49"><P class="p15 ft124">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr0 td41"></TD>
        <TD class="tr0 td17"><P class="p18 ft1">x.</P></TD>
        <TD class="tr0 td42"><P class="p15 ft1">Date of credit of EMI into Lender’s</P></TD>
        <TD class="tr0 td50"><P class="p221 ft6">5<SPAN class="ft125">th</SPAN>of every month</P></TD>
        <TD class="tr0 td51"><P class="p15 ft6">2<SPAN class="ft125">nd </SPAN>of every month</P></TD>
        <TD class="tr0 td44"><P class="p222 ft6"><NOBR>Others------------</NOBR></P></TD>
    </TR>
    <TR>
        <TD class="tr27 td41"></TD>
        <TD class="tr27 td17"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr27 td42"><P class="p15 ft1">Bank Account</P></TD>
        <TD class="tr27 td50"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr27 td51"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr27 td44"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr35 td41"></TD>
        <TD class="tr35 td15"><P class="p15 ft117">&nbsp;</P></TD>
        <TD class="tr35 td46"><P class="p15 ft117">&nbsp;</P></TD>
        <TD colspan=3 class="tr35 td52"><P class="p15 ft117">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr40 td41"></TD>
        <TD class="tr40 td17"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr40 td42"><P class="p15 ft9">&nbsp;</P></TD>
        <TD colspan=3 class="tr40 td45"><P class="p15 ft1">Chargeable @..<SPAN class="ft6">...................%</SPAN> per annum over and above the</P></TD>
    </TR>
    <TR>
        <TD class="tr29 td41"></TD>
        <TD class="tr29 td17"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr29 td42"><P class="p15 ft9">&nbsp;</P></TD>
        <TD colspan=2 class="tr29 td43"><P class="p15 ft1">applicable interest rate. Penal interest will be</P></TD>
        <TD class="tr29 td44"><P class="p15 ft1">charged for the</P></TD>
    </TR>
    <TR>
        <TD class="tr24 td41"></TD>
        <TD class="tr24 td17"><P class="p18 ft1">xi.</P></TD>
        <TD class="tr24 td42"><P class="p15 ft1">Penal Interest/ Liquidation</P></TD>
        <TD colspan=3 class="tr24 td45"><P class="p15 ft1">period of default i.e. from the due date of Payment of EMI or</P></TD>
    </TR>
    <TR>
        <TD class="tr27 td41"></TD>
        <TD class="tr27 td17"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr27 td42"><P class="p15 ft1">damages</P></TD>
        <TD colspan=3 class="tr27 td45"><P class="p15 ft1">interest or any amount due to the date of actual payment.</P></TD>
    </TR>
    <TR>
        <TD class="tr41 td41"></TD>
        <TD class="tr41 td15"><P class="p15 ft126">&nbsp;</P></TD>
        <TD class="tr41 td46"><P class="p15 ft126">&nbsp;</P></TD>
        <TD class="tr41 td47"><P class="p15 ft126">&nbsp;</P></TD>
        <TD class="tr41 td48"><P class="p15 ft126">&nbsp;</P></TD>
        <TD class="tr41 td49"><P class="p15 ft126">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr19 td41"></TD>
        <TD class="tr19 td17"><P class="p18 ft1">xii.</P></TD>
        <TD class="tr19 td42"><P class="p15 ft1">Mode of Disbursement</P></TD>
        <TD class="tr19 td50"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr19 td51"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr19 td44"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr24 td41"></TD>
        <TD class="tr24 td17"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr24 td42"><P class="p15 ft9">&nbsp;</P></TD>
        <TD colspan=3 class="tr24 td45"><P class="p15 ft1">Online payment to bank account as detailed against item (xiii)</P></TD>
    </TR>
    <TR>
        <TD class="tr21 td41"></TD>
        <TD class="tr21 td15"><P class="p15 ft19">&nbsp;</P></TD>
        <TD class="tr21 td46"><P class="p15 ft19">&nbsp;</P></TD>
        <TD colspan=3 class="tr21 td52"><P class="p15 ft19">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr40 td41"></TD>
        <TD rowspan=2 class="tr15 td17"><P class="p18 ft1">xiii.</P></TD>
        <TD rowspan=2 class="tr15 td42"><P class="p15 ft1">Details of Borrower's bank account</P></TD>
        <TD colspan=3 class="tr40 td45"><P class="p15 ft1">Savings / Current Account No <SPAN class="ft6">:__________________________</SPAN></P></TD>
    </TR>
    <TR>
        <TD class="tr42 td41"></TD>
        <TD colspan=3 rowspan=2 class="tr27 td45"><P class="p15 ft6">Beneficiary : <SPAN class="ft120">________________________________________</SPAN></P></TD>
    </TR>
    <TR>
        <TD class="tr16 td41"></TD>
        <TD class="tr16 td17"><P class="p15 ft17">&nbsp;</P></TD>
        <TD rowspan=2 class="tr29 td42"><P class="p15 ft1">for loan disbursal</P></TD>
    </TR>
    <TR>
        <TD class="tr41 td41"></TD>
        <TD class="tr41 td17"><P class="p15 ft126">&nbsp;</P></TD>
        <TD colspan=3 rowspan=2 class="tr29 td45"><P class="p15 ft6">Name of bank & Branch :<SPAN class="ft120">______________________________</SPAN></P></TD>
    </TR>
    <TR>
        <TD class="tr16 td41"></TD>
        <TD class="tr16 td17"><P class="p15 ft17">&nbsp;</P></TD>
        <TD class="tr16 td42"><P class="p15 ft17">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr29 td41"></TD>
        <TD class="tr29 td17"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr29 td42"><P class="p15 ft9">&nbsp;</P></TD>
        <TD colspan=3 class="tr29 td45"><P class="p15 ft6">IFS Code <SPAN class="ft112">:</SPAN><SPAN class="ft120">________________________________________</SPAN></P></TD>
    </TR>
    <TR>
        <TD class="tr42 td41"></TD>
        <TD class="tr42 td15"><P class="p15 ft127">&nbsp;</P></TD>
        <TD class="tr42 td46"><P class="p15 ft127">&nbsp;</P></TD>
        <TD class="tr42 td47"><P class="p15 ft127">&nbsp;</P></TD>
        <TD class="tr42 td48"><P class="p15 ft127">&nbsp;</P></TD>
        <TD class="tr42 td49"><P class="p15 ft127">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr13 td41"></TD>
        <TD class="tr13 td17"><P class="p18 ft1">xiv.</P></TD>
        <TD class="tr13 td42"><P class="p214 ft6">Insurance</P></TD>
        <TD class="tr13 td50"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr13 td51"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr13 td44"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    </TABLE>
    <!--[if lte IE 7]><P style="margin-left:711px;margin-top:0px;margin-right:-795px;margin-bottom:0px;" class="p223 ft113"><![endif]--><!--[if gte IE 8]><P style="margin-left:627px;margin-top:0px;margin-right:-711px;margin-bottom:84px;" class="p223 ft113"><![endif]--><![if ! IE]><P style="margin-left:669px;margin-top:42px;margin-right:-753px;margin-bottom:42px;" class="p223 ft113"><![endif]>Borrower(s) to sign</P>
    <TABLE cellpadding=0 cellspacing=0 class="t18">
    <TR>
        <TD class="tr6 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p39 ft2">For PFSL</P>
    <P class="p224 ft7">19</P>
    </DIV>
    <DIV id="page_20">
    <DIV id="p20dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAroAAAACCAIAAAA4meh/AAAANElEQVRYhe3UsQkAIBADQLP/0G9h84WdoIV3E4QQkqoaAE2S1xFu8H4snwz+kI7YcKMAdBN9LgkAqUwevwAAAABJRU5ErkJggg==" id="p20img1"></DIV>
    
    
    <DIV id="id20_1">
    <P class="p225 ft128">SCHEDULE III</P>
    <P class="p226 ft5">OTHER TERMS AND CONDITIONS</P>
    <P class="p2 ft1"><SPAN class="ft1">I.</SPAN><SPAN class="ft65">Borrower(s) and the Guarantor shall jointly and severally repay the Loan along with Interest as set out in </SPAN><NOBR><SPAN class="ft2">Schedule-II;</SPAN></NOBR></P>
    <P class="p227 ft52"><SPAN class="ft1">II.</SPAN><SPAN class="ft129">In the event of cessation of the Borrowers' service with the Borrowers' employer(s) before the loan is repaid in full it will be the responsibility and obligation of the Borrower(s) to pay and in the event of the Borrowers' employer(s) committing default or delay in payment of EMI on the loan or payment of the outstanding amount in the event of</SPAN></P>
    <P class="p228 ft52">cessation of service of the Borrower (s) with the Borrowers' employer(s) for any reason whatsoever, the Lender will be entitled to demand payment of the overdue EMI/EMI in default or the outstanding amount, as the case may be, from the Borrower(s) and the Borrower(s) will forthwith pay the EMI amount or such outstanding amount to the Lender.</P>
    <P class="p229 ft131"><SPAN class="ft1">III.</SPAN><SPAN class="ft130">Lender shall have the right to review the loan account and revise the terms thereof anytime on its own or upon the request of the Borrower(s) and the repayment of the outstanding loan will be subject to the revised terms & conditions;</SPAN></P>
    <P class="p230 ft52">IV. Any amount to the Lender under the Agreement by the borrower(s), shall be made free and clear of and with out any deduction for or on account of any tax.;</P>
    <P class="p231 ft52"><SPAN class="ft69">V.</SPAN><SPAN class="ft129">Any </SPAN><NOBR>post-dated</NOBR> cheques (PDC) and undated chequez s (UDC) issued by the Borrower (s) (if required by PFSL), which as being authorised to fill up with date may be deposited by PFSL with a view to receiving payments on the Due Dates, as provided for in the terms of Repayment in Schedule II;</P>
    <P class="p232 ft28">VI. Borrower(s) shall always ensure that sufficient funds are available in the account to which the said PDCs/ UDCs/ ECS/ ACH relate to enable the Lender to present the same for encashment. In the event of any dishonour of a Payment</P>
    <P class="p233 ft1">Instrument, without prejudice to the other rights of PFSL, the Borrower(s) shall be liable to pay to the Lender additional Interest/charges;</P>
    <P class="p234 ft28">VII. In the event the Lender is unwilling to continue the Loan on account of regulatory or other reasons and/ or if any event of default occurs, the Lender shall have the sole right during tenor of this Agreement to recall the entire or part of the</P>
    <P class="p235 ft1">loan without assigning any reason Whatsoever;</P>
    <P class="p236 ft52">VIII. The Borrower(s) shall not leave India for employment or business or long stay or Permanently, without first fully repaying the personal loan then outstanding with interest and other dues including any other charges as pertaining to the Loan;</P>
    <P class="p46 ft1">IX. Liability of the Guarantor shall be <NOBR>co-terminus</NOBR> with that of the Borrower(s) and Acknowledgement of Liability by the</P>
    <P class="p237 ft1">Borrower is binding on the Guarantor till such time the liability is discharged to the full satisfaction of the Lender;</P>
    <P class="p238 ft28"><SPAN class="ft1">X.</SPAN><SPAN class="ft132">Any other obligations, warranties, guarantee expressed by Borrower(s) or Guarantor in any clauses and/orSchedules of the Personal Loan Facility Agreement;</SPAN></P>
    <TABLE cellpadding=0 cellspacing=0 class="t19">
    <TR>
        <TD class="tr6 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p39 ft2">For PFSL</P>
    </DIV>
    <DIV id="id20_2">
    <P class="p13 ft7">20</P>
    </DIV>
    </DIV>
    <DIV id="page_21">
    <DIV id="p21dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAroAAAACCAIAAAA4meh/AAAANElEQVRYhe3UsQkAIBADQLP/0G9h84WdoIV3E4QQkqoaAE2S1xFu8H4snwz+kI7YcKMAdBN9LgkAqUwevwAAAABJRU5ErkJggg==" id="p21img1"></DIV>
    
    
    <DIV id="id21_1">
    <P class="p239 ft5">SCHEDULE IV</P>
    <P class="p240 ft5">DOCUMENTS TO BE ATTACHED WITH APPLICATION FOR LOAN</P>
    <P class="p241 ft8">Please ( ) Tick Whichever Applicable</P>
    <P class="p242 ft1"><SPAN class="ft1">(I)</SPAN><SPAN class="ft133">Salary Certificate from current Employer;</SPAN></P>
    <P class="p242 ft1"><SPAN class="ft1">(ii)</SPAN><SPAN class="ft134">Proof of identity;</SPAN></P>
    <P class="p243 ft1"><SPAN class="ft1">(iii)</SPAN><SPAN class="ft135">Proof of current residential & official address;</SPAN></P>
    <P class="p244 ft1"><SPAN class="ft1">(iv)</SPAN><SPAN class="ft136">Latest three months' Bank Statement (where salary / income is credited or accumulated);</SPAN></P>
    <P class="p243 ft1"><SPAN class="ft1">(v)</SPAN><SPAN class="ft99">Salary slips for last three months preceding application date;</SPAN></P>
    <P class="p243 ft1"><SPAN class="ft1">(vi)</SPAN><SPAN class="ft136">Two passport size photographs ;</SPAN></P>
    <P class="p245 ft131"><SPAN class="ft69">(vii)</SPAN><SPAN class="ft137">Certified copy of standing Instructions/ Signed ECS / ACH mandate/other relevant mandate to designated bank, of the Borrower(s) to transfer to the Lender on the Due Dates, the amounts which are required to be paid by the Borrower(s), as specified in terms of Repayment in Schedule II;</SPAN></P>
    <P class="p246 ft1"><SPAN class="ft1">(viii)</SPAN><SPAN class="ft116">Copies of last 2 years' ITR ;</SPAN></P>
    <P class="p247 ft1"><SPAN class="ft1">(ix)</SPAN><SPAN class="ft138">Signature Verification by banker (as per PFSL format)</SPAN></P>
    <P class="p247 ft1"><SPAN class="ft1">(x)</SPAN><SPAN class="ft139">Proof of other income</SPAN></P>
    <P class="p248 ft1"><SPAN class="ft1">(xi)</SPAN><SPAN class="ft138">Proof of assets (copy of registered deed of house property / statement of accounts of</SPAN></P>
    <P class="p249 ft1">mutual fund / insurance policy / statement of demat account)</P>
    <P class="p250 ft1"><SPAN class="ft1">(xii)</SPAN><SPAN class="ft107">Guarantor's net worth certificate (as per PFSL format)</SPAN></P>
    <P class="p251 ft1"><SPAN class="ft69">(xiii)</SPAN><SPAN class="ft116">Others (please specify)_________________________________________________________</SPAN></P>
    <TABLE cellpadding=0 cellspacing=0 class="t20">
    <TR>
        <TD class="tr6 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p43 ft2">For PFSL</P>
    </DIV>
    <DIV id="id21_2">
    <P class="p13 ft7">21</P>
    </DIV>
    </DIV>
    <DIV id="page_22">
    <DIV id="p22dimg1">
    <IMG src="data:image/png;base64,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" id="p22img1"></DIV>
    
    
    <DIV id="id22_1">
    <P class="p252 ft5">SCHEDULE V</P>
    <P class="p253 ft140">FACILITY SPECIFIC DOCUMENTS EXECUTED BY BORROWER(S) / GUARANTOR (S) TO BE CONSIDERED PART & PARCEL OF THE</P>
    <P class="p254 ft10">PERSONAL LOAN FACILITY AGREEMENT DATED___<SPAN class="ft141">_______</SPAN>___________________</P>
    <P class="p255 ft141">Please ( tick<SPAN class="ft10"> )</SPAN></P>
    <TABLE cellpadding=0 cellspacing=0 class="t21">
    <TR>
        <TD class="tr7 td53"><P class="p21 ft142">Sr no</P></TD>
        <TD class="tr7 td54"><P class="p15 ft142">Deed / document name</P></TD>
        <TD class="tr7 td55"><P class="p15 ft143">Dated</P></TD>
    </TR>
    <TR>
        <TD class="tr20 td56"><P class="p21 ft142">1.</P></TD>
        <TD class="tr20 td57"><P class="p15 ft142">Deed of Personal Guarantee</P></TD>
        <TD class="tr20 td58"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr3 td53"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td54"><P class="p15 ft13">&nbsp;</P></TD>
        <TD class="tr3 td55"><P class="p15 ft13">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr9 td56"><P class="p21 ft142">2.</P></TD>
        <TD class="tr9 td57"><P class="p15 ft142">Deed of Pledge of Moveable Properties</P></TD>
        <TD class="tr9 td58"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr19 td56"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr19 td57"><P class="p15 ft142">(Shares , Bonds , Debentures , Mutual Funds)</P></TD>
        <TD class="tr19 td58"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr41 td53"><P class="p15 ft126">&nbsp;</P></TD>
        <TD class="tr41 td54"><P class="p15 ft126">&nbsp;</P></TD>
        <TD class="tr41 td55"><P class="p15 ft126">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr6 td56"><P class="p21 ft142">3.</P></TD>
        <TD class="tr6 td57"><P class="p15 ft142">Deed of Mortgage of Inmoveable Properties</P></TD>
        <TD class="tr6 td58"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr19 td56"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr19 td57"><P class="p15 ft142">(Land , House , Warehouse)</P></TD>
        <TD class="tr19 td58"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr14 td53"><P class="p15 ft16">&nbsp;</P></TD>
        <TD class="tr14 td54"><P class="p15 ft16">&nbsp;</P></TD>
        <TD class="tr14 td55"><P class="p15 ft16">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr32 td56"><P class="p21 ft142">4.</P></TD>
        <TD class="tr32 td57"><P class="p15 ft142">Power of Attorney</P></TD>
        <TD class="tr32 td58"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr24 td53"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr24 td54"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr24 td55"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr7 td56"><P class="p21 ft142">5.</P></TD>
        <TD class="tr7 td57"><P class="p15 ft142">Deed of Assignment</P></TD>
        <TD class="tr7 td58"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr19 td56"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr19 td57"><P class="p15 ft142">(Insurance Policy , Fixed Deposit)</P></TD>
        <TD class="tr19 td58"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    </TABLE>
    <!--[if lte IE 7]><P style="margin-left:705px;margin-top:0px;margin-right:-1072px;margin-bottom:0px;" class="p256 ft113"><![endif]--><!--[if gte IE 8]><P style="margin-left:338px;margin-top:0px;margin-right:-705px;margin-bottom:367px;" class="p256 ft113"><![endif]--><![if ! IE]><P style="margin-left:521px;margin-top:184px;margin-right:-888px;margin-bottom:183px;" class="p256 ft113"><![endif]>Borrower(s) to sign</P>
    <TABLE cellpadding=0 cellspacing=0 class="t22">
    <TR>
        <TD class="tr6 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p43 ft2">For PFSL</P>
    </DIV>
    <DIV id="id22_2">
    <P class="p13 ft7">22</P>
    </DIV>
    </DIV>
    <DIV id="page_23">
    <DIV id="p23dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAtYAAAOTCAIAAAAUkNP6AAARBUlEQVR4nO3dXW4aSRSAUe6IHeH9r8CsqeaBiDj+YYim4cPmnIeEmFZ05UTiU1V3edZaOwCA+9rXAwAA38zMfPXW9UsbEgQA+DtfdcaFNPnon42GAQD4CxIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgMCsteoZAICnYxUEAAhIEAAgIEEAgIAEAQACEgQACEgQAGAbM3P9xRIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEADgVi787FwJAgDcylrrq7ckCABwE8fj8cK7EgQACEgQAGAbn267zMynd4RIEADghl5fX9daHytEggAAN/Ty8rJ7s0BybhEJAgDc0LvdmfOKyD6aBwD4sS4/C3OKEqsgAMDGDofD4XC4fI0EAQC2cb7P47QK8lWFnC6TIABAQIIAAIG5cHg7AMD1Zn51xfnFhcusggAAAQkCAGzs0+NQT84LJBIEANjeWuvd6SCnHxbz+5hU94IAAJt4dwvIxztC3n7FKggAcBMflznefkWCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQe0AwABqyAAQECCAAABCQIABCQIABCQIABAQIIAANuYmesvliAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAYNZa9QwAwNOxCgIABCQIABCQIABAQIIAAAEJAgAEJAgAsI2Zuf5iCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEZq1VzwAAPB2rIABAQIIAAAEJAgAEJAgAEJAgAEBAggAA25iZ6y+WIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBg1lr1DADA07EKAgAEJAgAEJAgAEBAggAAAQkCAAQkCACwjZm5/mIJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQGBfDwAAfD9/dQTI53/DWmuTUQAArmcjBgAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgMC+HgCARzEz9QgPYa1Vj/AUJAgAv/n01WF3YyMGAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgMB+t9vNTD0Gf1hr1SMAwG3tdz7wAIC7sxEDAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQGBfDwDAA5mZeoTYWqse4VmM7zUAcH82YgCAgAQBAAISBAAISBAAIOCJGIBvw+MqP4nHQTwRAwAEbMQAAIGnXtOzAgQAFRsxAEDARgwAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAANubmcsXSBAA4FYuhIgEAQACEgQACEgQAOBW1lrH4/HTtyQIALC919fX04vD4TAzx+Px3X0h+2IqAOCJrLVOv87M6fXOKggAkJAgAMCWTtsuLy8vH986L4Hsdrt5+wcAgP/ptNvyds/lU1ZBAIDt/ecahwQBAAI2YgCAgFUQACAgQQCA+zkfUCZBAIA7OR6PjiYDAG7o3XHsp8NCDofD+SsOaAcAbu7jSSGeiAEAAjZiAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAI7OsBAHgUM1OP8BDWWvUIT0GCAPCbT18ddjc2YgCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAISBAAICBBAICABAEAAhIEAAhIEAAgIEEAgIAEAQACEgQACEgQACAgQQCAgAQBAAISBAAI7E+/zUw7B++steoRAOCGfiWIDzwA4J5sxAAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQkCAAQECCAAABCQIABCQIABCQIABAQIIAAAEJAgAEJAgAEJAgAEBAggAAAQkCAAQkCAAQ2NcDAPBAZqYeIbbWqkd4FuN7DQDcn40YACAgQQCAgAQBAAISBAAISBAAICBBAICAc0EAvgcndvwkTsTYvT0X5Mf/5/bvDQCP418RXuKrw0zPzAAAAABJRU5ErkJggg==" id="p23img1"></DIV>
    
    
    <DIV id="id23_1">
    <P class="p13 ft5">ANNEXURE I</P>
    </DIV>
    <DIV id="id23_2">
    <DIV id="id23_2_1">
    <P class="p257 ft8">DEMAND PROMISSORY NOTE</P>
    <P class="p258 ft1">Place : _<SPAN class="ft6">_________</SPAN>__________</P>
    <P class="p259 ft1">Dated : <SPAN class="ft6">_________</SPAN>_________</P>
    <P class="p260 ft1">Rs.__<SPAN class="ft6">_____________</SPAN>_______/-</P>
    <P class="p261 ft1">ON DEMAND, I / We_<SPAN class="ft6">_____________________________________</SPAN>_, unconditionally and irrevocably promise to pay</P>
    <P class="p262 ft4">Peerless Financial Services Limited (PFSL), having their Registered Office at Peerless Bhavan, 3, Esplanade East, Kolkata – 700 069, or order for value received the sum of Rs__<SPAN class="ft144">______________________</SPAN>___________________</P>
    <P class="p263 ft1">(Rupees<SPAN class="ft145">)</SPAN>__<SPAN class="ft6">______________________</SPAN>_________________________________only with interest there on at the rate of</P>
    <P class="p264 ft1">__<SPAN class="ft6">__________________</SPAN>___% Per annum__<SPAN class="ft6">__________</SPAN>_ with rests along with all costs, charges, expenses, taxes,</P>
    <P class="p265 ft4">cess, levies, duties and penalty (ies) or at such rate as PFS may from time to time fix or at a rate which may from time to time be as signed by PFSL for value received. I/ We also agree that this note may be assigned/ pledged/ hypo the cated to any one as required by PFSL, the lender, without notice tome / us.</P>
    <P class="p266 ft4">Presentment for payment and requirement of prior notice and protest of this Note are hereby unconditionally and irrevocably waived.</P>
    <P class="p267 ft1">Signature of Borrower</P>
    <TABLE cellpadding=0 cellspacing=0 class="t23">
    <TR>
        <TD class="tr18 td59"><P class="p15 ft1">Co Borrower</P></TD>
        <TD class="tr18 td60"><P class="p222 ft1">Cross signature on</P></TD>
    </TR>
    <TR>
        <TD class="tr27 td59"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr27 td60"><P class="p15 ft1">Revenue Stamp of Re.1/-</P></TD>
    </TR>
    </TABLE>
    </DIV>
    <DIV id="id23_2_2">
    <!--[if lte IE 7]><P style="margin-left:0px;margin-top:0px;margin-right:-151px;margin-bottom:0px;" class="p268 ft113"><![endif]--><!--[if gte IE 8]><P style="margin-left:-151px;margin-top:0px;margin-right:0px;margin-bottom:151px;" class="p268 ft113"><![endif]--><![if ! IE]><P style="margin-left:-76px;margin-top:76px;margin-right:-75px;margin-bottom:75px;" class="p268 ft113"><![endif]>Borrower(s) to sign</P>
    </DIV>
    </DIV>
    <DIV id="id23_3">
    <P class="p13 ft8">DEMAND PROMISSORY NOTE</P>
    </DIV>
    <DIV id="id23_4">
    <DIV id="id23_4_1">
    <P class="p13 ft1">ON DE MAND, I / We,_<SPAN class="ft6">________________</SPAN>unconditionally and irrevocably promise to pay Peerless Financial Services</P>
    <P class="p269 ft1">Limited (PFSL), having their Registered Office at Peerless Bhavan, 3, Esplanade East,</P>
    <P class="p270 ft1">Kolkata – 700 069, or order for value received the sum of Rs_____<SPAN class="ft6">__________</SPAN>______________________________</P>
    <P class="p269 ft1">(Rupees<SPAN class="ft145">)</SPAN>____<SPAN class="ft6">___________</SPAN>__________________________________________only with interest there on at the rate of</P>
    <P class="p2 ft1">________<SPAN class="ft6">_________</SPAN>% Perannum with ___________rests along with all costs, charges, expenses, taxes, cess, levies,</P>
    <P class="p271 ft4">duties and penalty (ies) or at such rate as PFSL may from time to time fix or at a rate which may from time to time be Assigned by PFSL for value received. I / We also agree that this note may be assigned /pledged/ hypo the cated to any one as required by PFSL, the lender, without notice tome / us.</P>
    <P class="p272 ft4">Presentment for payment and requirement of prior notice and protest of this Note are hereby unconditionally and irrevocably waived.</P>
    </DIV>
    <DIV id="id23_4_2">
    <!--[if lte IE 7]><P style="margin-left:0px;margin-top:0px;margin-right:-156px;margin-bottom:0px;" class="p273 ft146"><![endif]--><!--[if gte IE 8]><P style="margin-left:-156px;margin-top:0px;margin-right:0px;margin-bottom:156px;" class="p273 ft146"><![endif]--><![if ! IE]><P style="margin-left:-78px;margin-top:78px;margin-right:-78px;margin-bottom:78px;" class="p273 ft146"><![endif]><IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAB9CAYAAAB015n6AAAAYElEQVRYhe3UMQoAIQxE0ZnF+185227nEBBc8q2fMYV8V5XSsyTJdnTD6WTb9cQ7SAKDL8fx5z+7xt8wKQCPxnSjhekGeDSmGy1MN8CjMd1oYboBHo3pRguf7cb6PrPDLxtNHfMVs6XpAAAAAElFTkSuQmCC" id="p23inl_img1">Borrower(s) to sign</P>
    </DIV>
    </DIV>
    <DIV id="id23_5">
    <P class="p13 ft1">Signature of Borrower</P>
    <TABLE cellpadding=0 cellspacing=0 class="t24">
    <TR>
        <TD class="tr18 td61"><P class="p15 ft1">Co Borrower</P></TD>
        <TD class="tr18 td60"><P class="p222 ft1">Cross signature on</P></TD>
    </TR>
    <TR>
        <TD class="tr27 td61"><P class="p15 ft9">&nbsp;</P></TD>
        <TD class="tr27 td60"><P class="p15 ft1">Revenue Stamp of Re.1/-</P></TD>
    </TR>
    </TABLE>
    </DIV>
    <DIV id="id23_6">
    <P class="p13 ft7">23</P>
    </DIV>
    </DIV>
    <DIV id="page_24">
    <DIV id="p24dimg1">
    <IMG src="data:image/png;base64,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BgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoCkGAKApBgCgKQYAoL1cPQDwG8zM1SP8G3b36hG43k2+2n/db/9+8XnnA34uA/DG32IShElVQxYcAAAAAElFTkSuQmCC" id="p24img1"></DIV>
    
    
    <DIV id="id24_1">
    <DIV id="id24_1_1">
    <TABLE cellpadding=0 cellspacing=0 class="t25">
    <TR>
        <TD class="tr32 td62"><P class="p16 ft1">10/- Non Judicial Stamp to be affixed</P></TD>
        <TD class="tr7 td63"><P class="p274 ft5">ANNEXURE II</P></TD>
    </TR>
    </TABLE>
    <P class="p275 ft8">CONTINUING SECURITY LETTER</P>
    <P class="p86 ft147">(This Continuing Security Letter executed at the place and date stated in the Schedule I therein under written)</P>
    <P class="p276 ft1">Peerless Financial Services Limited</P>
    <P class="p63 ft1">Peerless Bhavan,</P>
    <P class="p63 ft1">3, Esplanade East</P>
    <P class="p63 ft1">Kolkata – 700 069</P>
    <P class="p277 ft1">Dear Sir,</P>
    <P class="p278 ft3"><SPAN class="ft1">I</SPAN><SPAN class="ft148">/ We ____</SPAN><SPAN class="ft149">__________________</SPAN>__________________________, enclose Demand Promissory Note dated____________for <SPAN class="ft26">Rs.</SPAN>_____<SPAN class="ft149">___________/</SPAN>- <SPAN class="ft26">(Rupees_</SPAN><SPAN class="ft150">_____________</SPAN><SPAN class="ft26">__________________) Only </SPAN>payable</P>
    <P class="p13 ft1">and dated___________ for <SPAN class="ft2">Rs.</SPAN>___<SPAN class="ft6">__________</SPAN>___/- <SPAN class="ft2">(Rupees </SPAN><SPAN class="ft112">____________</SPAN><SPAN class="ft2">_______________) Only </SPAN>on</P>
    <P class="p279 ft151">demand, which is given by me / us as Security for repayment of the loan Granted to me/ us by PFSL, the Lender, by execution of Personal Loan Agreement dated_______________, together with interest and other amounts due there</P>
    <P class="p13 ft1">under and which may here after become due and payable by me / us to PFSL.</P>
    <P class="p280 ft55">Not with standing the fact that the out standing loan amount may be reduced from time to time or extinguished, the Promise to pay shall be a continuing Promise till the payment of the entire outstanding amount by me / us to the satisfaction of the Lender.</P>
    <P class="p281 ft1">Thanking You</P>
    <P class="p282 ft1">Yours Faithfully,</P>
    </DIV>
    <DIV id="id24_1_2">
    <!--[if lte IE 7]><P style="margin-left:0px;margin-top:0px;margin-right:-426px;margin-bottom:0px;" class="p283 ft113"><![endif]--><!--[if gte IE 8]><P style="margin-left:-426px;margin-top:0px;margin-right:0px;margin-bottom:426px;" class="p283 ft113"><![endif]--><![if ! IE]><P style="margin-left:-213px;margin-top:213px;margin-right:-213px;margin-bottom:213px;" class="p283 ft113"><![endif]>Borrower(s) to sign</P>
    </DIV>
    </DIV>
    <DIV id="id24_2">
    <TABLE cellpadding=0 cellspacing=0 class="t26">
    <TR>
        <TD class="tr6 td64"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td65"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p284 ft2">For PFSL</P>
    </DIV>
    <DIV id="id24_3">
    <P class="p13 ft7">24</P>
    </DIV>
    </DIV>
    <DIV id="page_25">
    <DIV id="p25dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAtsAAAD5CAIAAAB56W7rAAAFRklEQVR4nO3dMW7bQBBA0UzgG9n3P4F5pk0hwBBiWwkTUj+O3itciFssXBAfIy41a61vAACpp3oDAMBXNTM3ru6aeigSAOAP3WiO27Hy3ve/3gwAwN9SJABAT5EAAD1FAgD0FAkA0FMkAEBPkQAAPUUCAPQUCQDQUyQAQE+RAAA9RQIA9BQJANBTJABAT5EAAD1FAgD0Zq1V7wEAeHRmJABAT5EAAD1FAgD0FAkA0FMkAEBPkQAAx5uZXesVCQDQUyQAQE+RAAA9RQIA9BQJANBTJABAT5EAAD1FAgD0FAkA0FMkAEBPkQAAPUUCAPQUCQDQUyQAQE+RAAA9RQIA9BQJANCbtVa9BwDg0ZmRAAA9RQIA9BQJANBTJABAT5EAAD1FAgAcb2Z2rVckAEBPkQAAPUUCAPQUCQDQUyQAQE+RAAA9RQIA9BQJANBTJABAT5EAAD1FAgD0FAkA0FMkAEBPkQAAPUUCAPQUCQDQUyQAQG/WWvUeAIBHZ0YCAPQUCQDQUyQAQE+RAAA9RQIA9BQJAHC8mdm1XpEAAD1FAgD0FAkA0FMkAEBPkQAAPUUCAPQUCQDQUyQAQE+RAAA9RQIA9BQJANBTJABAT5EAAD1FAgD0FAkA0FMkAEBPkQAAvVlr1XsAAB6dGQkA0FMkAEBPkQAAPUUCAPQUCQDQUyQAwPFmZtf6p5P28aG9m4O7cQz+ztwN4FRf8Z521yL5iv8g4AzuBsBPfGsDAPQUCQDQUyQAQE+RAAA9RQIA9BQJANBTJABAT5EAAD1FAgD0FAkA0FMkAEBPkQAAPUUCAPQUCQDQUyQAQG/WWvUeAIBHZ0YCAPQUCQDQUyQAQE+RAAA9RQIA9BQJAHC8mdm1XpEAAD1FAgD0FAkA0FMkAEBPkQAAPUUCAPQUCQDQUyQAQE+RAAA9RQIA9BQJANBTJABAT5EAAD1FAgD0FAkA0FMkAEBPkQAAPUUCABxvrfXTJzNzY70iAQDu4fX19cbVeZ8wAACHm5m11uXv+6tmJABAT5EAAHe1bdv7DxUJAHAPb8+RPD8/z8y2bdfPuj5FuwIA/mefPS9ycbl0vcCMBAC4n89OBSsSAOB0N15GcmkURQIAnGvbtl++bUSRAADnenl5+eUab0gDAI53/WTr7adcL8xIAICeIgEAznV7QOKsDQDwr1AkAMDpPjv9+3YMxztbAYDTffirv9efmJEAAI23X7r55vQvAHCG3znxe82MBADoKRIAoKdIAICeIgEAeooEAOg5awMA9MxIAICeIgEAeooEAOgpEgCgp0gAgJ4iAQCONzO71isSAKCnSACAniIBAHqKBADoKRIAoKdIAICeIgEAeooEAOgpEgCgp0gAgJ4iAQB6igQA6CkSAKCnSACAniIBAHqKBADoKRIAoDdrrXoPAMCjMyMBAHqKBADoKRIAoKdIAICeIgEAeooEADjezOxar0gAgJ4iAQB6igQA6CkSAKCnSACAniIBAHqKBADoKRIAoKdIAICeIgEAeooEAOgpEgCgp0gAgJ4iAQB6igQA6CkSAKCnSACA3qy16j0AAI/OjAQA6CkSAKCnSACAniIBAHqKBADoKRIA4Hgzs2u9IgEAeooEAOgpEgCgp0gAgJ4iAQB6igQA6CkSAKCnSACAniIBAHqKBADoKRIAoKdIAICeIgEAeooEAOgpEgCgp0gAgJ4iAQB6s9aq9wAAPDozEgCgp0gAgJ4iAQB6igQA6CkSAKCnSACA483MrvWKBADoKRIAoKdIAICeIgEAeooEAOgpEgCg91RvAAD4wvae8v3MD19cf9w4NJ52AAAAAElFTkSuQmCC" id="p25img1"></DIV>
    
    
    <DIV id="id25_1">
    <DIV id="id25_1_1">
    <TABLE cellpadding=0 cellspacing=0 class="t27">
    <TR>
        <TD class="tr32 td66"><P class="p201 ft1">50/- Non Judicial Stamp to be affixed</P></TD>
        <TD class="tr7 td67"><P class="p285 ft5">ANNEXURE III</P></TD>
    </TR>
    </TABLE>
    <P class="p286 ft8"><NOBR>UNDERTAKING-CUM-INDEMNITY</NOBR></P>
    <P class="p287 ft2">(This Undertaking Cum Indemnity executed at the place and date stated in the Schedule I therein under written )</P>
    <P class="p288 ft1">Peerless Financial Services Limited</P>
    <P class="p57 ft1">Peerless Bhavan,</P>
    <P class="p57 ft1">3, Esplanade East</P>
    <P class="p57 ft1">Kolkata – 700 069</P>
    <P class="p289 ft1">Dear Sir,</P>
    <P class="p290 ft2">Re: Loan Account No__<SPAN class="ft112">__________</SPAN>________Personal Loan Rs._<SPAN class="ft112">______________</SPAN>_____________________</P>
    <P class="p291 ft2">( Rupees ____<SPAN class="ft112">______________________</SPAN>____________) Only</P>
    <P class="p292 ft1">I/ We ,<SPAN class="ft6">_______________</SPAN>_______________('<SPAN class="ft2">the Borrower'</SPAN>) and___<SPAN class="ft6">____________________</SPAN>________________</P>
    <P class="p293 ft1"><SPAN class="ft145">_______________________</SPAN>(“<SPAN class="ft2">the Co borrower”) </SPAN>refer to the Personal Loan Facility Agreement dated__________</P>
    <P class="p294 ft1">executed by me/ us in favour of Peerless Financial Services Limited pursuant to the sanction of Loan of</P>
    <P class="p295 ft2">Rs._____<SPAN class="ft112">_______________</SPAN>_____/- <SPAN class="ft1">(</SPAN>Rupees <SPAN class="ft112">_______________</SPAN>____) Only <SPAN class="ft1">by PFSL vide Letter of Intent No.</SPAN></P>
    <P class="p296 ft1">_______<SPAN class="ft6">__________</SPAN>______dated____<SPAN class="ft6">______</SPAN>_.</P>
    <P class="p297 ft30">In consideration of PFSL agreeing at my/our request to rely on the said Personal Loan Facility Agreement, I/we do here by irrevocably and unconditionally agree and undertake as follows :</P>
    <P class="p298 ft30"><SPAN class="ft1">1.</SPAN><SPAN class="ft68">If at any time hereafter any stamp authority or other appropriate authority shall levy or require payment of any stamp duty/ differential stamp duty, interest or penalty or any other amount in the nature of stamp duty on the said Personal Loan Facility Agreement, I/ we shall forthwith upon receiving a demand from such authority or from you, pay to such authority or deposit with you the amount of stamp duty/ differential stamp duty/ interest/ penalty or any other amount in the nature of stamp duty so claimed in respect of the said Personal Loan Facility Agreement;</SPAN></P>
    <P class="p299 ft30"><SPAN class="ft1">2.</SPAN><SPAN class="ft68">I / we shall make such payment/deposit irrespective of whether any proceeding by way of appeal, review, revision or representation challenging the levy or demand of any such stamp duty or differential stamp duty or penalty or otherwise may have been filed by me or any other person or that may be otherwise pending before any Court, Tribunal or other authority whatsoever;</SPAN></P>
    <P class="p300 ft28"><SPAN class="ft1">3.</SPAN><SPAN class="ft152">I / we hereby confirm that a certificate by an authorized official of PFSL as to the amount levied or payable or to be deposited as aforesaid shall be binding upon me/ us and shall be conclusive evidence of the amount of my/ our liability;</SPAN></P>
    <P class="p301 ft154"><SPAN class="ft1">4.</SPAN><SPAN class="ft153">I/ we hereby unconditionally agree to indemnify PFSL and keep PFSL, its officers and employees indemnified at all times in respect of any additional / differential stamp duty, interest and penalty and off, from and against any loss, damage, liabilities, costs, charges and expenses, whatsoever, which PFSL may incur or suffer or be put to in any manner whatsoever by reason of PFSL having agreed at my / our request to rely on the said Personal Loan Facility Agreement;</SPAN></P>
    <P class="p302 ft1"><SPAN class="ft1">5</SPAN><SPAN class="ft155">I / we hereby confirm that I / we have been duly authorized and empowered in all respects to execute this Letter of </SPAN><NOBR>Undertaking-cum-Indemnity</NOBR> and I /we am/ are fully aware that on the basis thereof PFSL has agreed to execute the said Personal Loan Facility Agreement against my / our salary.</P>
    </DIV>
    <DIV id="id25_1_2">
    <!--[if lte IE 7]><P style="margin-left:0px;margin-top:0px;margin-right:-526px;margin-bottom:0px;" class="p303 ft113"><![endif]--><!--[if gte IE 8]><P style="margin-left:-526px;margin-top:0px;margin-right:0px;margin-bottom:526px;" class="p303 ft113"><![endif]--><![if ! IE]><P style="margin-left:-263px;margin-top:263px;margin-right:-263px;margin-bottom:263px;" class="p303 ft113"><![endif]>Borrower(s) to sign</P>
    </DIV>
    </DIV>
    <DIV id="id25_2">
    <P class="p13 ft7">25</P>
    </DIV>
    </DIV>
    <DIV id="page_26">
    <DIV id="p26dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAApsAAAADCAIAAABTWlM0AAAANElEQVRYhe3YsQ0AIAwDQSyx/8phAfoocDfBF66cqloAwHC7OwDgI0m6E3iWbXHhuQEY5wDLagYEl8yLygAAAABJRU5ErkJggg==" id="p26img1"></DIV>
    
    
    <DIV id="id26_1">
    <P class="p304 ft28">This Letter of Undertaking- <NOBR>cum-Indemnity</NOBR> shall remain in force till the entire principal amount of the Loan together with interest and all other moneys payable in respect thereof shall be paid off to PFSL in full.</P>
    <P class="p305 ft1">Yours faithfully,</P>
    <TABLE cellpadding=0 cellspacing=0 class="t28">
    <TR>
        <TD class="tr20 td68"><P class="p15 ft10">Signature of Borrower</P></TD>
        <TD class="tr20 td69"><P class="p15 ft10">Signature of Co Borrower</P></TD>
    </TR>
    </TABLE>
    </DIV>
    <DIV id="id26_2">
    <P class="p13 ft7">26</P>
    </DIV>
    </DIV>
    <DIV id="page_27">
    <DIV id="p27dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAtgAAAJjCAIAAAC5vPHkAAALf0lEQVR4nO3dwWoiQRRAUd/g/3+Z/1SzEEQ0mvRge8l4zirEYniLDFyquq1Zax0AAAp/6gEAgP/WzDxfIEQAgIwQAQAyQgQA2NeTAxohAgDsa631qEWECACwl9PpdP3DzNwUyXh9FwDYycxtaZxD5PJLOyIAwPvcdIkQAQB28ei5kOsWESIAwOvdH8rcLzgIEQBgDz98CFWIAAB7+TZHvDUDAGTsiAAAGSECAOzi26t3D0IEAHi/S6MIEQBgF19eMeObVQGAN7l/J+Zy+8zZ8Y3DAACf6GZf5LpOvL4LAGQczQAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkDnWAwAAv8zMPPl0rfXzf0qIAADbPEmN541yz9EMAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkZq1VzwAAfCg7IgBARogAABkhAgBkhAgAkBEiAEBGiAAALzMzm9YLEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAza616BgDgQ9kRAQAyQgQAyAgRACAjRACAjBABADJCBAB4mZnZtF6IAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAAJlZa9UzAAAfyo4IAJARIgBARogAABkhAgBkhAgAkBEiAMDLzMym9UIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQB2NDNPPhUiAEBGiAAAL7PW2rReiAAAu3t0QCNEAIDdrbW+bBEhAgDs6HQ6Xf8wM9dFMlvPcgAAfm7mNjbOIXL+pR0RAOCtrrtEiAAAL3PzIMijZ1QvLSJEAIBd3B/K3C8QIgDALn7yHKoQAQB29DxHhAgA0FhrCREAICNEAIC9PL969yBEAIDEuVGECACwly+vmPHNqgDAm9y/NXO5feZwOBzfOwwA8Ilu9kUudSJEAIDdPfo2EUczAEBGiAAAGSECAGSECACQESIAQEaIAACZeX45LwDAfuyIAAAZIQIAZIQIAJARIgBARogAABkhAgC8zM0tu98SIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBm1lr1DADAh7IjAgBkhAgAkBEiAEBGiAAAGSECAGSECADwMjOzab0QAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAjBABADKz1qpnAAA+lB0RACAjRACAjBABADJCBADICBEAICNEAICXmZlN64UIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkJm1Vj0DAPCh7IgAABkhAgBkhAgAkBEiAEBGiAAAGSECALzMzGxaL0QAgIwQAQAyQgQAyAgRACAjRACAjBABADJCBADICBEAICNEAICMEAEAMkIEAMgIEQAgI0QAgIwQAQAyQgQAyAgRACAjRACAzKy16hkAgA9lRwQAyBzrAQCA32dmHn206bDF0QwAkHE0AwBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEBGiAAAGSECAGSECACQESIAQEaIAAAZIQIAZIQIAJARIgBARogAABkhAgBkhAgAkBEiAEDmWA8A8EFmph6B/9Zaqx7hX/gvwRd+6V8zAL/OXwStnRLttdtiAAAAAElFTkSuQmCC" id="p27img1"></DIV>
    
    
    <DIV id="id27_1">
    <P class="p239 ft5">ANNEXURE IV</P>
    <P class="p306 ft10">REQUEST FOR DISBURSEMENT</P>
    <P class="p307 ft2">(This Request for Disbursement executed at the place and date stated in the Schedule I therein under written)</P>
    <P class="p308 ft1">Peerless Financial Services Limited</P>
    <P class="p309 ft1">Peerless Bhavan</P>
    <P class="p309 ft1">3, Esplanade East</P>
    <P class="p309 ft1">Kolkata <NOBR>–700069.</NOBR></P>
    <P class="p310 ft1">Dear Sir,</P>
    </DIV>
    <DIV id="id27_2">
    <DIV id="id27_2_1">
    <P class="p13 ft1">Re: Loan Account No _<SPAN class="ft6">________________</SPAN>______________________________ Request for disbursement of</P>
    <P class="p309 ft6"><SPAN class="ft1">sanctioned loan of </SPAN>Rs. ________________________/-</P>
    <P class="p309 ft1">( Rupees____<SPAN class="ft6">_____________</SPAN>_ ______________________________________) Only</P>
    <P class="p309 ft1">This is with reference to your Letter Of Intent No.____<SPAN class="ft6">__________</SPAN>__________dated_<SPAN class="ft6">_____</SPAN>_ conveying sanction of the</P>
    <P class="p311 ft56">subject facility. I / We have since completed all the formalities regarding documentation of the facility in terms of the Personal Loan Facility Agreement dated ____<SPAN class="ft156">_________</SPAN>___ executed between you and me/ us . I / us now request you to</P>
    <P class="p312 ft30">disburse the loan after deduction of Processing fees, Documentation charges etc. as stipulated in the Letter of ln tent under the sanctioned facility. You may also adjust the disbursal amount with the Insurance Premium amount for onward payment to the Insurer .</P>
    </DIV>
    <DIV id="id27_2_2">
    <!--[if lte IE 7]><P style="margin-left:0px;margin-top:0px;margin-right:-189px;margin-bottom:0px;" class="p313 ft157"><![endif]--><!--[if gte IE 8]><P style="margin-left:-189px;margin-top:0px;margin-right:0px;margin-bottom:189px;" class="p313 ft157"><![endif]--><![if ! IE]><P style="margin-left:-95px;margin-top:95px;margin-right:-94px;margin-bottom:94px;" class="p313 ft157"><![endif]><IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAC9CAYAAABlP4dOAAAAdUlEQVRoge3aMQrAMAxDUan0/ld2p+6qodCinynDw3gIf4pnRuk5YinplCTb0Xina9ieR2uAwR/H8eN/d42/YVIArsZ0Y4XpBrga040Vphvgakw3VphugKsx3VhhugGuxnRjhekGuBrTjRWmG+BqfN6X5NfCBZK8Jm+stjRaAAAAAElFTkSuQmCC" id="p27inl_img1">Borrower(s) to sign</P>
    </DIV>
    </DIV>
    <DIV id="id27_3">
    <P class="p13 ft1">The bank details for remittance of funds are as under</P>
    </DIV>
    <DIV id="id27_4">
    <DIV id="id27_4_1">
    <P class="p13 ft1">Bank Account Name : _____<SPAN class="ft6">_______________</SPAN>_____________________</P>
    <TABLE cellpadding=0 cellspacing=0 class="t29">
    <TR>
        <TD class="tr9 td70"><P class="p15 ft1">Account Number</P></TD>
        <TD class="tr9 td71"><P class="p18 ft1">: ________<SPAN class="ft6">_______________</SPAN>_________________ (Saving Bank Account)</P></TD>
    </TR>
    <TR>
        <TD colspan=2 class="tr0 td72"><P class="p15 ft1">Bank Name /Branch : ______________<SPAN class="ft6">_____________</SPAN>______________</P></TD>
    </TR>
    <TR>
        <TD class="tr43 td70"><P class="p15 ft1">Address</P></TD>
        <TD class="tr43 td71"><P class="p314 ft1">:___________________<SPAN class="ft6">_____________</SPAN>_________</P></TD>
    </TR>
    <TR>
        <TD class="tr43 td70"><P class="p15 ft1">IFS Code</P></TD>
        <TD class="tr43 td71"><P class="p315 ft1">: __________<SPAN class="ft6">________________</SPAN>______________</P></TD>
    </TR>
    <TR>
        <TD class="tr36 td70"><P class="p15 ft1">Thanking You,</P></TD>
        <TD class="tr36 td71"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    <TR>
        <TD class="tr44 td70"><P class="p15 ft1">Yours Faithfully</P></TD>
        <TD class="tr44 td71"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    </TABLE>
    </DIV>
    <DIV id="id27_4_2">
    <!--[if lte IE 7]><P style="margin-left:0px;margin-top:0px;margin-right:-186px;margin-bottom:0px;" class="p316 ft113"><![endif]--><!--[if gte IE 8]><P style="margin-left:-186px;margin-top:0px;margin-right:0px;margin-bottom:186px;" class="p316 ft113"><![endif]--><![if ! IE]><P style="margin-left:-93px;margin-top:93px;margin-right:-93px;margin-bottom:93px;" class="p316 ft113"><![endif]>Borrower(s) to sign</P>
    </DIV>
    </DIV>
    <DIV id="id27_5">
    <TABLE cellpadding=0 cellspacing=0 class="t30">
    <TR>
        <TD class="tr6 td73"><P class="p15 ft2">Signature of Borrower</P></TD>
        <TD class="tr6 td74"><P class="p15 ft2">Signature of Co Borrower</P></TD>
    </TR>
    </TABLE>
    </DIV>
    <DIV id="id27_6">
    <P class="p13 ft7">27</P>
    </DIV>
    </DIV>
    <DIV id="page_28">
    
    
    <DIV id="id28_1">
    <P class="p317 ft5">ANNEXURE V</P>
    <P class="p282 ft10">BORROWER'S REQUEST TO EMPLOYER FOR EMI DEDUCTION FROM SALARY</P>
    <P class="p318 ft2">Original document to be affixed with signature of the Borrower(s) and authorization of Employer</P>
    </DIV>
    <DIV id="id28_2">
    <P class="p13 ft7">28</P>
    </DIV>
    </DIV>
    <DIV id="page_29">
    
    
    <DIV id="id29_1">
    <P class="p317 ft5">ANNEXURE V</P>
    <P class="p282 ft10">BORROWER'S REQUEST TO EMPLOYER FOR EMI DEDUCTION FROM SALARY</P>
    <P class="p318 ft2">Original document to be affixed with signature of the Borrower(s) and authorization of Employer</P>
    </DIV>
    <DIV id="id29_2">
    <P class="p13 ft7">29</P>
    </DIV>
    </DIV>
    <DIV id="page_30">
    <DIV id="p30dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARsAAAAnCAIAAACwgHsUAAAAk0lEQVR4nO3VwQmAQBAEwV3zz/kMwgZFqiKYTzM7M+ecAR7b3bcnwL/s+CiI7O719gb4FUVBSVFQUhSUFAUlRUFJUVBSFJQUBSVFQUlRUFIUlBQFJUVBSVFQUhSUFAUlRUFJUVBSFJQUBSVFQUlRUFIUlBQFJUVBSVFQUhSUFAUlRUFJUVBSFJQUBSVFQUlRAHzVDcGBBkl+73EWAAAAAElFTkSuQmCC" id="p30img1"></DIV>
    
    
    <DIV class="dclr"></DIV>
    <DIV id="id30_1">
    <P class="p319 ft1">To be signed by all holders of bank account, if mode of operation of Bank Account is 'Joint'</P>
    <P class="p320 ft5">ANNEXURE VI</P>
    <P class="p321 ft10">NACH DECLARATION</P>
    <P class="p322 ft2">(This NACH Declaration is executed at the place and date stated in the Schedule I therein under written )</P>
    <P class="p323 ft61">I /We hereby authorise Peerless Financial Services Limited to debit my / our bank account, based on the instructions as agreed and signed by me / us . I/ we also authorize Peerless Financial Services Limited to recover the deferred instalments/ EMIs / interests / charges etc. in future through NACH in as many EMIs / instalments as may be required, in case of restructuring / deferment / reschedulement / moratorium etc. of the credit facility granted to me/ us. I /we have understood that transaction charges may change due to changes in applicable transaction charges / statutory levies and I/we am/are authorized to cancel/ amend the mandate by appropriately communicating the cancellation / amendment request to Peerless Financial Services Limited or the bank where I / we have authorized the debit.</P>
    <P class="p324 ft1">For and on be half of __________________________________________</P>
    <TABLE cellpadding=0 cellspacing=0 class="t31">
    <TR>
        <TD class="tr28 td45"><P class="p15 ft1">Signature</P></TD>
        <TD class="tr28 td75"><P class="p214 ft1">Signature</P></TD>
    </TR>
    <TR>
        <TD class="tr45 td45"><P class="p15 ft1">Name _______________________</P></TD>
        <TD class="tr45 td75"><P class="p15 ft1">Name _______________________</P></TD>
    </TR>
    </TABLE>
    <TABLE cellpadding=0 cellspacing=0 class="t32">
    <TR>
        <TD class="tr28 td76"><P class="p15 ft1">Signature</P></TD>
        <TD class="tr28 td75"><P class="p15 ft1">Signature</P></TD>
    </TR>
    <TR>
        <TD class="tr45 td76"><P class="p15 ft1">Name _______________________</P></TD>
        <TD class="tr45 td75"><P class="p15 ft1">Name _______________________</P></TD>
    </TR>
    </TABLE>
    </DIV>
    <DIV id="id30_2">
    <P class="p13 ft7">30</P>
    </DIV>
    </DIV>
    <DIV id="page_31">
    <DIV id="p31dimg1">
    <IMG src="data:image/png;base64,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AQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAADIBAQBkAgIAyAQEAJAJCAAgExAAQCYgAIBMQAAAmYAAALI5egC+sbtHj8CTZq74bvq7/2Kv+TvlvP7w+/FfpbxvnuFMsOcAAAAASUVORK5CYII=" id="p31img1"></DIV>
    
    
    <DIV id="id31_1">
    <P class="p13 ft5">VERNACULAR DECLARATION</P>
    </DIV>
    <DIV id="id31_2">
    <DIV id="id31_2_1">
    <P class="p13 ft1">I,……………….………………………………………S/o/ W/o........................................................................residing at</P>
    <P class="p325 ft1">………………………………………………………………………………………………....do here by state and declare</P>
    <P class="p49 ft1">on solemn affirmation as under :</P>
    <P class="p136 ft69"><SPAN class="ft147">1(a) </SPAN>That the Borrower Mr./ Mrs./ Miss.....................................................................................................S /o / D/o /w/o</P>
    <P class="p43 ft1">…………………………………………… is my …..……….………………………….........................and I know him/her</P>
    <P class="p325 ft1">for the last …………….yrs/monthsand he/she signs in the vernacular language, I. e. in</P>
    <P class="p326 ft3">(name of language in which borrowers have signed) and the same has/ have been understood by him/ her. I have seen him signing during the normal course of business/ transactions.</P>
    <P class="p2 ft1"><SPAN class="ft2">1 (b) </SPAN>That the Co Borrower / Gurantor Mr./ Mrs./ Miss……………………………………………………............................</P>
    <TABLE cellpadding=0 cellspacing=0 class="t33">
    <TR>
        <TD class="tr18 td77"><P class="p327 ft69">S/o/ D/o/ w/o……………………………………………is my</P></TD>
        <TD class="tr18 td78"><P class="p15 ft1">and I know</P></TD>
    </TR>
    <TR>
        <TD class="tr29 td77"><P class="p15 ft1">him/her for the last …………….yrs/months and he /she signs in the vernacular language, i.e. in</P></TD>
        <TD class="tr29 td78"><P class="p15 ft9">&nbsp;</P></TD>
    </TR>
    </TABLE>
    <P class="p328 ft3">(name of language in which borrower have signed) and the same have been understood by him / her. I have seen him signing during the normal course of business/ transactions.</P>
    <P class="p329 ft3"><SPAN class="ft2">2.</SPAN><SPAN class="ft158">That I have read out and explained in vernacular, the contents and nature of the Application form, Loan Agreement along with the Schedules and all other documents signed by him/her for obtaining loan from PFSL. He/she is acknowledging the same.</SPAN></P>
    <P class="p330 ft3"><SPAN class="ft2">3.</SPAN><SPAN class="ft158">That he/she signing in the vernacular all the document sand the Agreements after understanding the same. His/ her signature is dully attested by me here in under:-</SPAN></P>
    <P class="p331 ft1">Solemnly affirmed at …………………………… on this day of…………………., 20.</P>
    </DIV>
    <DIV id="id31_2_2">
    <!--[if lte IE 7]><P style="margin-left:0px;margin-top:0px;margin-right:-371px;margin-bottom:0px;" class="p332 ft113"><![endif]--><!--[if gte IE 8]><P style="margin-left:-371px;margin-top:0px;margin-right:0px;margin-bottom:371px;" class="p332 ft113"><![endif]--><![if ! IE]><P style="margin-left:-186px;margin-top:186px;margin-right:-185px;margin-bottom:185px;" class="p332 ft113"><![endif]>Borrower(s) to sign</P>
    </DIV>
    </DIV>
    <DIV id="id31_3">
    <TABLE cellpadding=0 cellspacing=0 class="t34">
    <TR>
        <TD class="tr13 td79"><P class="p15 ft1">Signature of Borrower</P></TD>
        <TD class="tr13 td80"><P class="p15 ft1">Co borrower</P></TD>
        <TD class="tr13 td81"><P class="p15 ft1">Guarantor Signature of the Executant</P></TD>
    </TR>
    </TABLE>
    <P class="p333 ft1">Attested____________________</P>
    <P class="p334 ft1">Signature of the Executant Date :________________________________</P>
    </DIV>
    <DIV id="id31_4">
    <P class="p13 ft7">31</P>
    </DIV>
    </DIV>
    <DIV id="page_32">
    <DIV id="p32dimg1">
    <IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAroAAAACCAIAAAA4meh/AAAANElEQVRYhe3UsQkAIBADQLP/0G9h84WdoIV3E4QQkqoaAE2S1xFu8H4snwz+kI7YcKMAdBN9LgkAqUwevwAAAABJRU5ErkJggg==" id="p32img1"></DIV>
    
    
    <DIV id="id32_1">
    <P class="p335 ft159">MISCELLANEOUS DOCUMENTS</P>
    <TABLE cellpadding=0 cellspacing=0 class="t35">
    <TR>
        <TD class="tr6 td23"><P class="p15 ft2">Authorised Signatories</P></TD>
        <TD class="tr6 td24"><P class="p15 ft2">Borrower</P></TD>
        <TD class="tr6 td25"><P class="p15 ft2"><NOBR>Co-Borrower</NOBR></P></TD>
    </TR>
    </TABLE>
    <P class="p43 ft2">For PFSL</P>
    </DIV>
    <DIV id="id32_2">
    <P class="p13 ft7">32</P>
    </DIV>
    </DIV>
</BODY>




{{-- <body>
    <div class="container-fluid">
        <section>
            <h3 class="text-center text-decoration-underline mt-4 mb-5">INSTRUCTIONS FOR FILLING AGREEMENT</h3>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-12">
                    <p>General Instructions :</p>

                    <p>All applications to be filled in <strong>English</strong> in CAPITAL LETTERS using Ballpoint pen only.</p>
                    <p>Any amendments / overwriting / erasures/cuttings / hand written information in the blank space on any page should be countersigned.</p>
                    <p>The signature of the Borrower / Co-Borrower / Guarantor should be the same on the Loan Agreement & Loan
                    Application Form.</p>
                    <p>All photocopies provided, to be self-attested / authenticated.</p>
                    <p>All pages of Schedules, Loan Agreement and Annexures to be mandatorily signed by the Borrower / Co Borrower and Guarantor, as may be specifically mentioned.</p>
                    <p>Deeds / agreements, as per format of PFSL, to be additionally executed with the Borrower(s) / Guarantor(s) as
                    may be required under the terms of the Sanction Letter and appended to the Personal Loan Facility Agreement</p>
                </div>

                <br>

                <div class="col-12">
                    <table class="table table-sm">
                        <tr>
                            <td colspan="2"><h5>For Office Use Only</h5></td>
                        </tr>
                        <tr>
                            <td>
                                <p> <mark>Customer ID:</mark> </p>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p> <mark>Name of the Borrower:</mark> </p>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p> <mark>Name of the Co-Borrower:</mark> </p>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p> <mark>Name of the Guarantor:</mark> </p>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p> <mark>Loan Application Number:</mark> </p>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p> <mark>Loan Account Number:</mark> </p>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body> --}}
</html>
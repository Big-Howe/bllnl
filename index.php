<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>巴啦啦能量</title>
</head>
<body onload="yiyan();">
    <div class="head" id="head">
        <div class="head1" id="head1">
            <!-- <img src="dztz.jpg"  alt="DZTZSJ" /> -->
            <br/>
            <!-- 机选一注 - 1-->
            <label id="h1" class="hq">S</label>
            <label id="h2" class="hq">J</label>
            <label id="h3" class="hq">S</label>
            <label id="h4" class="hq">D</label>
            <label id="h5" class="hq">Z</label>

            <label id="l1" class="lq">T</label>
            <label id="l2" class="lq">Z</label>
            <br/><br/>
            
            <div  id="sc5" class="sc5">
            <!-- 机选五注 - 2 -->
            <label id="h6" class="hq"></label>
            <label id="h7" class="hq"></label>
            <label id="h8" class="hq"></label>
            <label id="h9" class="hq"></label>
            <label id="h10" class="hq"></label>

            <label id="l3" class="lq"></label>
            <label id="l4" class="lq"></label>
            <br/><br/>
            <!-- 机选五注 - 3 -->
            <label id="h11" class="hq"></label>
            <label id="h12" class="hq"></label>
            <label id="h13" class="hq"></label>
            <label id="h14" class="hq"></label>
            <label id="h15" class="hq"></label>

            <label id="l5" class="lq"></label>
            <label id="l6" class="lq"></label>
            <br/><br/>
            <!-- 机选五注 - 4 -->
            <label id="h16" class="hq"></label>
            <label id="h17" class="hq"></label>
            <label id="h18" class="hq"></label>
            <label id="h19" class="hq"></label>
            <label id="h20" class="hq"></label>

            <label id="l7" class="lq"></label>
            <label id="l8" class="lq"></label>
            <br/><br/>
            <!-- 机选五注 - 5 -->
            <label id="h21" class="hq"></label>
            <label id="h22" class="hq"></label>
            <label id="h23" class="hq"></label>
            <label id="h24" class="hq"></label>
            <label id="h25" class="hq"></label>

            <label id="l9" class="lq"></label>
            <label id="l10" class="lq"></label>
            <br/><br/>
            </div>
            <!-- 机选一注-->
            <button class="submit layui-btn" id="btn" type="submit" onclick="SC();">巴啦啦能量</button>
            <br/><br/>
            <!-- 机选五注-->
            <button class="submit layui-btn btn5" id="btn5" type="submit" onclick="SC5();">巴啦啦黑魔法</button>
            <br/><br/>
            <p id="hitokoto" class="hitokoto">:D 获取中...</p>
        </div>
    </div>
    <style type="text/css">
        body {background-color: #D7EAE4;}
        .hq{color: red;}
        .lq{color: blue;}
        .head{TEXT-ALIGN: center;} 
        .head1{margin-top: 250px;} 
        .btn5{margin-right: 5px;}
        .sc5{display: none;}
        .hitokoto{border-left: 5px solid #0073d8;border-right: 5px solid #0073d8;background-color: #C6E0E3;padding: 10px;text-align: center;color: #0073d8;margin: 5px 0 5px 0;}
        .layui-btn {display: inline-block;height: 38px;line-height: 38px;padding: 0 18px;background-color: #009688;color: #fff;white-space: nowrap;text-align: center;font-size: 14px;border: none;border-radius: 2px;cursor: pointer;}
    </style>
    <script type="text/javascript">
        //机选一注
        function SC()
        {
            document.getElementById("sc5").style.display="none";
            document.getElementById("head1").style.margin='250px 0px 0px 0px';

            //生成伪随机数
            function hq(Min,Max)
            {
                var Range = Max - Min;
                var Rand = Math.random();
                var num = Min + Math.round(Rand * Range);
                return num;
            }

            function lq(Min,Max)
            {
                var Range = Max - Min;
                var Rand = Math.random();
                var num = Min + Math.round(Rand * Range);
                return num;
            }

            var rh1 = hq(1,35);
            var rh2 = hq(1,35);
            var rh3 = hq(1,35);
            var rh4 = hq(1,35);
            var rh5 = hq(1,35);

            var rl1 = lq(1,12);
            var rl2 = lq(1,12);

            function sort(a, b)
            {
                return a - b
            }
            if ((rh1 > 9) && (rh2 > 9) && (rh3 > 9) && (rh4 > 9) && (rh5 > 9))
            {
                document.getElementById("btn").onclick();
            }else if((rh1 == rh2 || rh1 == rh3 || rh1 == rh4 || rh1 == rh5 || rh2 == rh3 || rh2 == rh4 || 
                    rh2 == rh5 || rh3 == rh4 || rh3 == rh5 || rh4 == rh5 || rl1 == rl2))
                {
                    document.getElementById("btn").onclick();
                }else if((rh1 > 20) && (rh2 > 20) && (rh3 > 20) && (rh4 > 20) || (rh1 > 20) && (rh2 > 20) && (rh3 > 20) && (rh5 > 20) ||
                        (rh1 > 20) && (rh2 > 20) && (rh4 > 20) && (rh5 > 20) || (rh1 > 20) && (rh3 > 20) && (rh4 > 20) && (rh5 > 20) ||
                        (rh2 > 20) && (rh3 > 20) && (rh4 > 20) && (rh5 > 20))
                {
                    document.getElementById("btn").onclick();
                }else
                    {
                        var hqsz = new Array()
                        hqsz[0] = rh1;
                        hqsz[1] = rh2;
                        hqsz[2] = rh3;
                        hqsz[3] = rh4;
                        hqsz[4] = rh5;

                        var lqsz = new Array()
                        lqsz[0] = rl1;
                        lqsz[1] = rl2;

                        var label=document.getElementById("h1");
                        label.innerText=(hqsz.sort(sort)[0]);
                        var label=document.getElementById("h2");
                        label.innerText=(hqsz.sort(sort)[1]);
                        var label=document.getElementById("h3");
                        label.innerText=(hqsz.sort(sort)[2]);
                        var label=document.getElementById("h4");
                        label.innerText=(hqsz.sort(sort)[3]);
                        var label=document.getElementById("h5");
                        label.innerText=(hqsz.sort(sort)[4]);

                        var label=document.getElementById("l1");
                        label.innerText=(lqsz.sort(sort)[0]);
                        var label=document.getElementById("l2");
                        label.innerText=(lqsz.sort(sort)[1]);

                        yiyan();
                    }
        }
        //机选五注
        function SC5()
        {
            document.getElementById("sc5").style.display="inline";
            document.getElementById("head1").style.margin='58px 0px 0px 0px';


            //生成伪随机数
            function hq(Min,Max)
            {
                var Range = Max - Min;
                var Rand = Math.random();
                var num = Min + Math.round(Rand * Range);
                return num;
            }

            function lq(Min,Max)
            {
                var Range = Max - Min;
                var Rand = Math.random();
                var num = Min + Math.round(Rand * Range);
                return num;
            }

            var rh1 = hq(1,35);
            var rh2 = hq(1,35);
            var rh3 = hq(1,35);
            var rh4 = hq(1,35);
            var rh5 = hq(1,35);
            var rh6 = hq(1,35);
            var rh7 = hq(1,35);
            var rh8 = hq(1,35);
            var rh9 = hq(1,35);
            var rh10 = hq(1,35);
            var rh11 = hq(1,35);
            var rh12 = hq(1,35);
            var rh13 = hq(1,35);
            var rh14 = hq(1,35);
            var rh15 = hq(1,35);
            var rh16 = hq(1,35);
            var rh17 = hq(1,35);
            var rh18 = hq(1,35);
            var rh19 = hq(1,35);
            var rh20 = hq(1,35);
            var rh21 = hq(1,35);
            var rh22 = hq(1,35);
            var rh23 = hq(1,35);
            var rh24 = hq(1,35);
            var rh25 = hq(1,35);

            var rl1 = lq(1,12);
            var rl2 = lq(1,12);
            var rl3 = lq(1,12);
            var rl4 = lq(1,12);
            var rl5 = lq(1,12);
            var rl6 = lq(1,12);
            var rl7 = lq(1,12);
            var rl8 = lq(1,12);
            var rl9 = lq(1,12);
            var rl10 = lq(1,12);

            function sort(a, b)
            {
                return a - b
            }

            if (((rh1 > 9) && (rh2 > 9) && (rh3 > 9) && (rh4 > 9) && (rh5 > 9)) || 
                ((rh6 > 9) && (rh7 > 9) && (rh8 > 9) && (rh9 > 9) && (rh10 > 9)) ||
                ((rh11 > 9) && (rh12 > 9) && (rh13 > 9) && (rh14 > 9) && (rh15 > 9)) || 
                ((rh16 > 9) && (rh17 > 9) && (rh18 > 9) && (rh19 > 9) && (rh20 > 9)) ||
                ((rh21 > 9) && (rh22 > 9) && (rh23 > 9) && (rh24 > 9) && (rh25 > 9)))
            {
                document.getElementById("btn5").onclick();
            }else if((rh1 == rh2 || rh1 == rh3 || rh1 == rh4 || rh1 == rh5 || rh2 == rh3 || rh2 == rh4 || rh2 == rh5 || rh3 == rh4 || rh3 == rh5 || rh4 == rh5 || rl1 == rl2) ||
                    (rh6 == rh7 || rh6 == rh8 || rh6 == rh9 || rh6 == rh10 || rh7 == rh8 || rh7 == rh9 || rh7 == rh10 || rh8 == rh9 || rh8 == rh10 || rh9 == rh10 || rl3 == rl4) ||
                    (rh11 == rh12 || rh11 == rh13 || rh11 == rh14 || rh11 == rh15 || rh12 == rh13 || rh12 == rh14 || rh12 == rh15 || rh13 == rh14 || rh13 == rh15 || rh14 == rh15 || rl5 == rl6) ||
                    (rh16 == rh17 || rh16 == rh18 || rh16 == rh19 || rh16 == rh20 || rh17 == rh18 || rh17 == rh19 || rh17 == rh20 || rh18 == rh19 || rh18 == rh20 || rh19 == rh20 || rl7 == rl8) ||
                    (rh21 == rh22 || rh21 == rh23 || rh21 == rh24 || rh21 == rh25 || rh22 == rh23 || rh22 == rh24 || rh22 == rh25 || rh23 == rh24 || rh23 == rh25 || rh24 == rh25 || rl9 == rl10))
                {
                    document.getElementById("btn5").onclick();
                }else if(((rh1 > 20) && (rh2 > 20) && (rh3 > 20) && (rh4 > 20) || (rh1 > 20) && (rh2 > 20) && (rh3 > 20) && (rh5 > 20) || (rh1 > 20) && (rh2 > 20) && (rh4 > 20) && (rh5 > 20) || (rh1 > 20) && (rh3 > 20) && (rh4 > 20) && (rh5 > 20) || (rh2 > 20) && (rh3 > 20) && (rh4 > 20) && (rh5 > 20)) ||
                        ((rh6 > 20) && (rh7 > 20) && (rh8 > 20) && (rh9 > 20) || (rh6 > 20) && (rh7 > 20) && (rh8 > 20) && (rh10 > 20) || (rh6 > 20) && (rh7 > 20) && (rh9 > 20) && (rh10 > 20) || (rh6 > 20) && (rh8 > 20) && (rh9 > 20) && (rh10 > 20) || (rh7 > 20) && (rh8 > 20) && (rh9 > 20) && (rh10 > 20)) ||
                        ((rh11 > 20) && (rh12 > 20) && (rh13 > 20) && (rh14 > 20) || (rh11 > 20) && (rh12 > 20) && (rh13 > 20) && (rh15 > 20) || (rh11 > 20) && (rh12 > 20) && (rh14 > 20) && (rh15 > 20) || (rh11 > 20) && (rh13 > 20) && (rh14 > 20) && (rh15 > 20) || (rh12 > 20) && (rh13 > 20) && (rh14 > 20) && (rh15 > 20)) ||
                        ((rh16 > 20) && (rh17 > 20) && (rh18 > 20) && (rh19 > 20) || (rh16 > 20) && (rh17 > 20) && (rh18 > 20) && (rh20 > 20) || (rh16 > 20) && (rh17 > 20) && (rh19 > 20) && (rh20 > 20) || (rh16 > 20) && (rh18 > 20) && (rh19 > 20) && (rh20 > 20) || (rh17 > 20) && (rh18 > 20) && (rh19 > 20) && (rh20 > 20)) ||
                        ((rh21 > 20) && (rh22 > 20) && (rh23 > 20) && (rh24 > 20) || (rh21 > 20) && (rh22 > 20) && (rh23 > 20) && (rh25 > 20) || (rh21 > 20) && (rh22 > 20) && (rh24 > 20) && (rh25 > 20) || (rh21 > 20) && (rh23 > 20) && (rh24 > 20) && (rh25 > 20) || (rh22 > 20) && (rh23 > 20) && (rh24 > 20) && (rh25 > 20)))
                {
                    document.getElementById("btn5").onclick();
                }else
                    {
                        var hqsz1 = new Array()
                        hqsz1[0] = rh1;
                        hqsz1[1] = rh2;
                        hqsz1[2] = rh3;
                        hqsz1[3] = rh4;
                        hqsz1[4] = rh5;

                        var hqsz2 = new Array()
                        hqsz2[0] = rh6;
                        hqsz2[1] = rh7;
                        hqsz2[2] = rh8;
                        hqsz2[3] = rh9;
                        hqsz2[4] = rh10;

                        var hqsz3 = new Array()
                        hqsz3[0] = rh11;
                        hqsz3[1] = rh12;
                        hqsz3[2] = rh13;
                        hqsz3[3] = rh14;
                        hqsz3[4] = rh15;

                        var hqsz4 = new Array()
                        hqsz4[0] = rh16;
                        hqsz4[1] = rh17;
                        hqsz4[2] = rh18;
                        hqsz4[3] = rh19;
                        hqsz4[4] = rh20;

                        var hqsz5 = new Array()
                        hqsz5[0] = rh21;
                        hqsz5[1] = rh22;
                        hqsz5[2] = rh23;
                        hqsz5[3] = rh24;
                        hqsz5[4] = rh25;

                        var lqsz1 = new Array()
                        lqsz1[0] = rl1;
                        lqsz1[1] = rl2;

                        var lqsz2 = new Array()
                        lqsz2[0] = rl3;
                        lqsz2[1] = rl4;

                        var lqsz3 = new Array()
                        lqsz3[0] = rl5;
                        lqsz3[1] = rl6;

                        var lqsz4 = new Array()
                        lqsz4[0] = rl7;
                        lqsz4[1] = rl8;

                        var lqsz5 = new Array()
                        lqsz5[0] = rl9;
                        lqsz5[1] = rl10;

                        var label=document.getElementById("h1");
                        label.innerText=(hqsz1.sort(sort)[0]);
                        var label=document.getElementById("h2");
                        label.innerText=(hqsz1.sort(sort)[1]);
                        var label=document.getElementById("h3");
                        label.innerText=(hqsz1.sort(sort)[2]);
                        var label=document.getElementById("h4");
                        label.innerText=(hqsz1.sort(sort)[3]);
                        var label=document.getElementById("h5");
                        label.innerText=(hqsz1.sort(sort)[4]);

                        var label=document.getElementById("h6");
                        label.innerText=(hqsz2.sort(sort)[0]);
                        var label=document.getElementById("h7");
                        label.innerText=(hqsz2.sort(sort)[1]);
                        var label=document.getElementById("h8");
                        label.innerText=(hqsz2.sort(sort)[2]);
                        var label=document.getElementById("h9");
                        label.innerText=(hqsz2.sort(sort)[3]);
                        var label=document.getElementById("h10");
                        label.innerText=(hqsz2.sort(sort)[4]);

                        var label=document.getElementById("h11");
                        label.innerText=(hqsz3.sort(sort)[0]);
                        var label=document.getElementById("h12");
                        label.innerText=(hqsz3.sort(sort)[1]);
                        var label=document.getElementById("h13");
                        label.innerText=(hqsz3.sort(sort)[2]);
                        var label=document.getElementById("h14");
                        label.innerText=(hqsz3.sort(sort)[3]);
                        var label=document.getElementById("h15");
                        label.innerText=(hqsz3.sort(sort)[4]);

                        var label=document.getElementById("h16");
                        label.innerText=(hqsz4.sort(sort)[0]);
                        var label=document.getElementById("h17");
                        label.innerText=(hqsz4.sort(sort)[1]);
                        var label=document.getElementById("h18");
                        label.innerText=(hqsz4.sort(sort)[2]);
                        var label=document.getElementById("h19");
                        label.innerText=(hqsz4.sort(sort)[3]);
                        var label=document.getElementById("h20");
                        label.innerText=(hqsz4.sort(sort)[4]);

                        var label=document.getElementById("h21");
                        label.innerText=(hqsz5.sort(sort)[0]);
                        var label=document.getElementById("h22");
                        label.innerText=(hqsz5.sort(sort)[1]);
                        var label=document.getElementById("h23");
                        label.innerText=(hqsz5.sort(sort)[2]);
                        var label=document.getElementById("h24");
                        label.innerText=(hqsz5.sort(sort)[3]);
                        var label=document.getElementById("h25");
                        label.innerText=(hqsz5.sort(sort)[4]);

                        var label=document.getElementById("l1");
                        label.innerText=(lqsz1.sort(sort)[0]);
                        var label=document.getElementById("l2");
                        label.innerText=(lqsz1.sort(sort)[1]);

                        var label=document.getElementById("l3");
                        label.innerText=(lqsz2.sort(sort)[0]);
                        var label=document.getElementById("l4");
                        label.innerText=(lqsz2.sort(sort)[1]);

                        var label=document.getElementById("l5");
                        label.innerText=(lqsz3.sort(sort)[0]);
                        var label=document.getElementById("l6");
                        label.innerText=(lqsz3.sort(sort)[1]);

                        var label=document.getElementById("l7");
                        label.innerText=(lqsz4.sort(sort)[0]);
                        var label=document.getElementById("l8");
                        label.innerText=(lqsz4.sort(sort)[1]);

                        var label=document.getElementById("l9");
                        label.innerText=(lqsz5.sort(sort)[0]);
                        var label=document.getElementById("l10");
                        label.innerText=(lqsz5.sort(sort)[1]);

                        yiyan();
                    }
        }

        function yiyan() 
        {
            var xhr = new XMLHttpRequest();
            xhr.open('get', 'https://v1.hitokoto.cn');
            xhr.onreadystatechange = function () 
            {
                if (xhr.readyState === 4) 
                {
                    var data = JSON.parse(xhr.responseText);
                    var hitokoto = document.getElementById('hitokoto');
                    var from = document.getElementById('hitokot');
                    hitokoto.innerText = "『" + data.hitokoto + "』" + "\n" + "---「" + data.from + "」";
                }
            }
            xhr.send();
        }
    </script>
</body>
</html>
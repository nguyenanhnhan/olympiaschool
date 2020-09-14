@extends('be/layouts/index')
@section('title')
Chart {{$location->name}}
@endsection
@section('style')

<style>
    #customers {
        border-collapse: collapse;
        width: 100%;
        text-align: center;
        /* width: 50%; */
    }

    #customers td,
    #customers th {
        border: 1px solid #00486e;
        padding: 8px;
    }


    .solid {
        border: 1px solid #00486e;
        padding: 10px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #00486e;
        color: white;
    }

    .b_ddd {
        border: 1px solid #ddd;
        padding: 5px;
    }

    .p_top10 {
        padding-top: 10px;
    }

    .p_top5 {
        padding-top: 5px;
    }

    .pd10 {
        padding: 30px;
    }

    /* Global */
    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }


    .container {
        position: relative;
    }

    /* Panels */
    .swipe {
        position: relative;
        width: 100%;
        height: 100%;
        /* "min-height" doesn't work on Firefox. */
        background: #eee;
        overflow-x: hidden;
    }

    .panel {
        position: absolute;
        width: 100%;
        min-height: 100%;
        top: 0;
        left: 0;
        padding: 20px;
    }

    .left {
        left: -100%;
    }

    .right {
        left: 100%;
    }

    /* Info */
    .info {
        position: absolute;
        width: 80%;
        max-width: 500px;
        bottom: 20%;
        left: 10%;
        pointer-events: none;
    }

    .inner {
        position: relative;
        padding: 1.66em 3em;
        background: #FFFFFF;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    .info:before {
        content: "";
        position: absolute;
        width: 65%;
        height: 80%;
        top: 0;
        left: 0;
        -webkit-transform: translate(-10px, -10px);
        -ms-transform: translate(-10px, -10px);
        -o-transform: translate(-10px, -10px);
        transform: translate(-10px, -10px);
        background: #E91E63;
        background: #3F51B5;
    }

    .buttons {
        position: absolute;
        bottom: -50px;
        right: 5%;
        pointer-events: all;
    }

    .buttons button {
        transition: ease .4s;
    }

    .btn-prev,
    .btn-next {
        width: 60px;
        height: 60px;
        margin-left: 10px;
        border: none;
        outline: none;
        border-radius: 60px;
        color: #FFFFFF;
        background: -webkit-linear-gradient(top, #F5515F, #E91E63);
        background: linear-gradient(to bottom, #F5515F, #E91E63);
        box-shadow: 0px 3px 15px 2px rgba(245, 81, 95, .8);
        cursor: pointer;
    }

    .buttons button:hover {
        box-shadow: 0px 3px 30px 3px rgba(245, 81, 95, .8);
    }

    .buttons button:disabled {
        box-shadow: 0px 1px 5px 0px rgba(245, 81, 95, .8);
        background: -webkit-linear-gradient(top, #E91E63, #F5515F);
        background: linear-gradient(to bottom, #E91E63, #F5515F);
        cursor: default;
    }

    /* Optional content */
    .optional {
        width: 80%;
        max-width: 680px;
        margin: 6em auto;
        padding: 2em 3em;
        box-shadow:
            0 3px 12px rgba(0, 0, 0, 0.16),
            0 3px 12px rgba(0, 0, 0, 0.23);
    }

    @media (max-width: 620px) {
        body {
            font-size: 13px;
            line-height: 1.5em;
        }

        .info {
            position: absolute;
            width: 100%;
            max-width: 100%;
            bottom: 0;
            right: 0;
        }

        .inner {
            padding: .5em 1.5em;
            box-shadow: none;
        }

        .buttons {
            display: none;
        }
    }
</style>
@endsection
@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Accordion</span>
                                </li>
                            </ul>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- accordion start-->
<div class="edu-accordion-area mg-b-15">
    <div class="container-fluid">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-md-offset-1">



            <?php
            echo 
            '
            <script type="text/javascript">
                window.onload = function () {
                    var chart_total = new CanvasJS.Chart("dingdong", {
                    title:{
                        text: "'.$location->name.'",
                        padding: 5,
                        borderThickness: 2,
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            color: "#44546a", 
                            dataPoints: '.$new_evaluations.'
                        }
                        ]
                    });
                    var chart2a = new CanvasJS.Chart("p2a", {
                    title:{
                        text: "'.$location->name.' - 2A",
                        padding: 5,
                        borderThickness: 2,
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p2a.'
                        }
                        ]
                    });
                    
                    var chart2b = new CanvasJS.Chart("p2b", {
                    title:{
                        text: "'.$location->name.' - 2B",
                        padding: 5,
                        borderThickness: 2,             
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p2b.'
                        }
                        ]
                    });
                    
                    var chart2c = new CanvasJS.Chart("p2c", {
                    title:{
                        text: "2C"              
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p2c.'
                        }
                        ]
                    });
                    
                    var chart2d = new CanvasJS.Chart("p2d", {
                    title:{
                        text: "2D"              
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p2d.'
                        }
                        ]
                    });
                    
                    var chart3a = new CanvasJS.Chart("p3a", {
                    title:{
                        text: "3A"              
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p3a.'
                        }
                        ]
                    });
                    
                    var chart3b = new CanvasJS.Chart("p3b", {
                    title:{
                        text: "3B"              
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p3b.'
                        }
                        ]
                    });
                    
                    var chart3c = new CanvasJS.Chart("p3c", {
                    title:{
                        text: "3C"              
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p3c.'
                        }
                        ]
                    });
                    
                    var chart3d = new CanvasJS.Chart("p3d", {
                    title:{
                        text: "3D"              
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p3d.'
                        }
                        ]
                    });
                    
                    var chart4a = new CanvasJS.Chart("p4a", {
                    title:{
                        text: "4A"              
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p4a.'
                        }
                        ]
                    });
                    
                    var chart4b = new CanvasJS.Chart("p4b", {
                    title:{
                        text: "4B"              
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p4b.'
                        }
                        ]
                    });
                    
                    var chart4c = new CanvasJS.Chart("p4c", {
                    title:{
                        text: "4C"              
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p4c.'
                        }
                    ],
                    option: {
                        ticks: {
                            beginAtZero:true
                        }
                    }
                    });
                    
    var total_detail = new CanvasJS.Chart("chartContainer2",
    {
        title:{
        text: "Breakdown"
        },
            data: [
        {
        name: "2a",
        showInLegend: true,
        type: "stackedColumn",
        dataPoints: '.$chart_p2a.'
        },  {
            name: "2b",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p2b.'
        },  {
            name: "2c",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p2c.'
        },  {
            name: "2d",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p2d.'
        },{
            type: "stackedColumn",
            dataPoints: '.$chart_p3a.'
        },  {
            type: "stackedColumn",
            dataPoints: '.$chart_p3b.'
        },  {
            type: "stackedColumn",
            dataPoints: '.$chart_p3c.'
        },  {
            type: "stackedColumn",
            dataPoints: '.$chart_p3d.'
        },{
        type: "stackedColumn",
        dataPoints: '.$chart_p4a.'
        },  {
            type: "stackedColumn",
            dataPoints: '.$chart_p4b.'
        },  {
            type: "stackedColumn",
            dataPoints: '.$chart_p4c.'
        },
        {
        type: "stackedColumn",
        dataPoints: '.$chart_teacher.'
        }, 
        ]
    });

                    chart_total.render();
                    total_detail.render();
                    chart2a.render();
                    chart2b.render();
                    chart2c.render();
                    chart2d.render();
                    chart3a.render();
                    chart3b.render();
                    chart3c.render();
                    chart3d.render();
                    chart4a.render();
                    chart4b.render();
                    chart4c.render();
                }
            </script>          
            ';
    ?>

            <div id="dingdong" style="height: 300px; width: 100%;"></div>

            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row" style="padding-top:50px;">
                        <div style="overflow-x:auto;">
                            <table
                                class="table table-striped table-bordered table-hover"
                                id="example-table" cellspacing="0" width="100%">
                                <thead>
                                    <tr
                                        style="color: #fff; text-align: center; background-color: #114275;">
                                        <th>Teacher</th>
                                        <th>2a</th>
                                        <th>2b</th>
                                        <th>2c</th>
                                        <th>2d</th>
                                        <th>3a</th>
                                        <th>3b</th>
                                        <th>3c</th>
                                        <th>3d</th>
                                        <th>4a</th>
                                        <th>4b</th>
                                        <th>4c</th>
                                        <th>total</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align:center; line-height: 120px">
                                    @foreach ($teacher as $value)
                                    @php
                                        
                    $evaluations = App\Evaluation::where('id_location', $location->id)->where('id_teacher', $value->id_teacher)->get();
                    // dd($evaluations);
                    
                    $p2a1 = $p2a2 = $p2a3 = 0;
                    $p2b1 = $p2b2 = $p2c = 0;
                    $p2d1 = $p2d2 = 0;
                    $p3a1 = $p3a2 = $p3a3 = $p3a4 = 0;
                    $p3b1 = $p3b2 = $p3c1 = $p3c2 = 0;
                    $p3d1 = $p3d2 = 0;
                    $p4a1 = $p4a2 = 0;
                    $p4b = $p4c =0;
                                    @endphp
                                    <tr>
                                    <td>{{$value->teacher->fullname}}</td>
                                    @foreach ($evaluations as $item)
                                            @php
                                                
                        $p2a1+= array_sum($item->part2a['p2a1']);
                        $p2a2+= array_sum($item->part2a['p2a2']);
                        $p2a3+= array_sum($item->part2a['p2a3']);
                        $total_p2a = $p2a1+$p2a2+$p2a3;
                        $p2b1+= array_sum($item->part2b['p2b1']);
                        $p2b2+= array_sum($item->part2b['p2b2']);
                        $total_p2b = $p2b1+$p2b2;
                        $p2d1+= array_sum($item->part2d['p2d1']);
                        $p2d2+= array_sum($item->part2d['p2d2']);
                        $total_p2d = $p2d1+$p2d2;
                        $p3a1+= array_sum($item->part3a['p3a1']);
                        $p3a2+= array_sum($item->part3a['p3a2']);
                        $p3a3+= array_sum($item->part3a['p3a3']);
                        $p3a4+= array_sum($item->part3a['p3a4']);
                        $total_p3a = $p3a1+$p3a2+$p3a3+$p3a4;
                        $p3b1+= array_sum($item->part3b['p3b1']);
                        $p3b2+= array_sum($item->part3b['p3b2']);
                        $total_p3b = $p3b1+$p3b2;
                        $p3c1+= array_sum($item->part3c['p3c1']);
                        $p3c2+= array_sum($item->part3c['p3c2']);
                        $total_p3c = $p3c1+$p3c2;
                        $p3d1+= array_sum($item->part3d['p3d1']);
                        $p3d2+= array_sum($item->part3d['p3d2']);
                        $total_p3d = $p3d1+$p3d2;
                        $p4a1+= array_sum($item->part4a['p4a1']);
                        $p4a2+= array_sum($item->part4a['p4a2']);
                        $total_p4a = $p4a1+$p4a2;
                        $p2c+= array_sum($item->part2c['p2c']);
                        $total_p2c = $p2c;
                        $p4b+= array_sum($item->part4b['p4b']);
                        $total_p4b = $p4b;
                        $p4c+= array_sum($item->part4c['p4c']);
                        $total_p4c = $p4c;
                        $total = $total_p2a + $total_p2b + $total_p2c + $total_p2d
                                + $total_p3a + $total_p3b + $total_p3c + $total_p3d
                                +  $total_p4a + $total_p4b + $total_p4c ;
                                            @endphp
                                    @endforeach
                                    <td>
                                        
                                        {{number_format($total_p2a/count($evaluations),2)}}
                                    </td>
                                    <td>
                                        
                                        {{number_format($total_p2b/count($evaluations),2)}}
                                    </td>
                                    <td>
                                        
                                        {{number_format($total_p2c/count($evaluations),2)}}
                                    </td>
                                    <td>
                                        
                                        {{number_format($total_p2d/count($evaluations),2)}}
                                    </td>
                                    <td>
                                        
                                        {{number_format($total_p3a/count($evaluations),2)}}
                                    </td>
                                    <td>
                                        
                                        {{number_format($total_p3b/count($evaluations),2)}}
                                    </td>
                                    <td>
                                        
                                        {{number_format($total_p3c/count($evaluations),2)}}
                                    </td>
                                    <td>
                                        
                                        {{number_format($total_p3d/count($evaluations),2)}}
                                    </td>
                                    <td>
                                        
                                        {{number_format($total_p4a/count($evaluations),2)}}
                                    </td>
                                    <td>
                                        
                                        {{number_format($total_p4b/count($evaluations),2)}}
                                    </td>
                                    <td>
                                        
                                        {{number_format($total_p4c/count($evaluations),2)}}
                                    </td>
                                    <td>
                                        
                                        {{number_format($total/count($evaluations),2)}}
                                    </td>
                                    
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="chartContainer2" style="height: 600px; width: 100%;"></div>
            </div>
<hr>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p2a" style="height: 300px; width: 50%;"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p2b" style="height: 300px; width: 50%;"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p2c" style="height: 300px; width: 50%;"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p2d" style="height: 300px; width: 50%;"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p3a" style="height: 300px; width: 50%;"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p3b" style="height: 300px; width: 50%;"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p3c" style="height: 300px; width: 50%;"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p3d" style="height: 300px; width: 50%;"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p4a" style="height: 300px; width: 50%;"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p4b" style="height: 300px; width: 50%;"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p4c" style="height: 300px; width: 50%;"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p4c" style="height: 300px; width: 50%;"></div>
            </div> --}}

        </div>
    </div>
</div>


<div class="container" style=" height: 300px;">

    <!-- Panels -->
    <div class="swipe">
        <div class="panel"
            data-img="http://payload100.cargocollective.com/1/9/296422/4317770/1%20-%20Landscape%201_o.jpg">
        </div>
        <div class="panel"
            data-img="http://payload100.cargocollective.com/1/9/296422/4317770/1%20-%20Landscape%208_o.jpg">
        </div>
        <div class="panel"
            data-img="http://payload100.cargocollective.com/1/9/296422/4317770/1%20-%20Landscape%209_o.jpg">
        
    <div class="info">
        <div class="inner">
            <h3>Simply swipe on any device!</h3>
            <p>Use this buttons or your fingers. No matter what you do, no matter which
                device you choose, the picture will swipe and swipe again!</p>
        </div>
    </div></div>
        <div class="panel"
            data-img="http://payload100.cargocollective.com/1/9/296422/4317770/2-%20Arquitectura%205_o.jpg">
        
            <div class="inner">
                <h3>Simply swipe on any device!</h3>
                <p>Use this buttons or your fingers. No matter what you do, no matter which
                    device you choose, the picture will swipe and swipe again!</p>
            </div></div>
        <div class="panel"
            data-img="http://payload100.cargocollective.com/1/9/296422/4317770/3%20-%20Interiores%201_o.jpg">
            <div class="inner">
                <h3>Simply swipe on any device!</h3>
                <p>Use this buttons or your fingers. No matter what you do, no matter which
                    device you choose, the picture will swipe and swipe again!</p>
            </div>
        </div>
    </div>

    <!-- Info -->
    <div class="info">
        <div class="buttons">
            <button class="btn-prev" disabled>&larr;</button>
            <button class="btn-next">&rarr;</button>
        </div>
    </div>

</div>
@endsection
@section('script')
<script>
    /*
===============================================================

Hi! Welcome to my little playground!

My name is Tobias Bogliolo. 'Open source' by default and always 'responsive',
I'm a publicist, visual designer and frontend developer based in Barcelona. 

Here you will find some of my personal experiments. Sometimes usefull,
sometimes simply for fun. You are free to use them for whatever you want 
but I would appreciate an attribution from my work. I hope you enjoy it.

===============================================================
*/
$(document).ready(function(){

//Swipe speed:
var tolerance = 100; //px.
var speed = 650; //ms.

//Elements:
var interactiveElements = $('input, button, a');
var itemsLength = $('.panel').length;
var active = 1;

//Background images:
for (i=1; i<=itemsLength; i++){
  var $layer = $(".panel:nth-child("+i+")");
  var bgImg = $layer.attr("data-img");
  $layer.css({
    "background": "url("+bgImg+") no-repeat center / cover"
  });
};

//Transitions:
setTimeout(function() {
  $(".panel").css({
    "transition": "cubic-bezier(.4,.95,.5,1.5) "+speed+"ms"
  });
}, 200);

//Presets:
$(".panel:not(:first)").addClass("right");

//Swipe:
function swipeScreen() {
  $('.swipe').on('mousedown touchstart', function(e) {

    var touch = e.originalEvent.touches;
    var start = touch ? touch[0].pageX : e.pageX;
    var difference;

    $(this).on('mousemove touchmove', function(e) {
      var contact = e.originalEvent.touches,
      end = contact ? contact[0].pageX : e.pageX;
      difference = end-start;
    });

    //On touch end:
    $(window).one('mouseup touchend', function(e) {
      e.preventDefault();

      //Swipe right:
      if (active < itemsLength && difference < -tolerance) {
        $(".panel:nth-child("+active+")").addClass("left");
        $(".panel:nth-child("+(active+1)+")").removeClass("right");
        active += 1;
        btnDisable();
      };

      // Swipe left:
      if (active > 1 && difference > tolerance) {
        $(".panel:nth-child("+(active-1)+")").removeClass("left");
        $(".panel:nth-child("+active+")").addClass("right");
        active -= 1;
        btnDisable();
      };

      $('.swipe').off('mousemove touchmove');
    });

  });
};
swipeScreen();

//Prevent swipe on interactive elements:
interactiveElements.on('touchstart touchend touchup', function(e) {
  e.stopPropagation();
});

//Buttons:
$(".btn-prev").click(function(){
  // Swipe left:
  if (active > 1) {
    $(".panel:nth-child("+(active-1)+")").removeClass("left");
    $(".panel:nth-child("+active+")").addClass("right");
    active -= 1;
    btnDisable();
  };
});

$(".btn-next").click(function(){
  //Swipe right:
  if (active < itemsLength) {
    $(".panel:nth-child("+active+")").addClass("left");
    $(".panel:nth-child("+(active+1)+")").removeClass("right");
    active += 1;
    btnDisable();
  };
});

function btnDisable() {
  if (active >= itemsLength) {
    $(".btn-next").prop("disabled", true);
    $(".btn-prev").prop("disabled", false);
  }
  else if (active <= 1) {
    $(".btn-prev").prop("disabled", true);
    $(".btn-next").prop("disabled", false);
  }
  else {
    $(".btn-prev, .btn-next").prop("disabled", false);
  };
};

});
</script>
<script src="be/js/charts/canvas.js"></script>
@endsection
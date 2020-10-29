@extends('be/layouts/index')
@section('title')
Chart
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
                        text: "Olympia",
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
                    
                    var chart1a = new CanvasJS.Chart("p1a", {
                    title:{
                        text: "1a",
                        padding: 5,
                        borderThickness: 2,
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p1a.'
                        }
                        ]
                    });
                    
                    var chart1b = new CanvasJS.Chart("p1b", {
                    title:{
                        text: "1b",
                        padding: 5,
                        borderThickness: 2,
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p1b.'
                        }
                        ]
                    });
                    
                    var chart1c = new CanvasJS.Chart("p1c", {
                    title:{
                        text: "1c",
                        padding: 5,
                        borderThickness: 2,
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p1c.'
                        }
                        ]
                    });

                    var chart2a = new CanvasJS.Chart("p2a", {
                    title:{
                        text: "2A",
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
                        text: "2B",
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
                    
                    var chart3e = new CanvasJS.Chart("p3e", {
                    title:{
                        text: "3e"              
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p3e.'
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
                    
                    var chart4d = new CanvasJS.Chart("p4d", {
                    title:{
                        text: "4d"              
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p4d.'
                        }
                    ],
                    option: {
                        ticks: {
                            beginAtZero:true
                        }
                    }
                    });
                    
                    var chart5a = new CanvasJS.Chart("p5a", {
                    title:{
                        text: "5A"              
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p5a.'
                        }
                        ]
                    });
                    
                    var chart5b = new CanvasJS.Chart("p5b", {
                    title:{
                        text: "5B"              
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p5b.'
                        }
                        ]
                    });
                    
                    var chart5c = new CanvasJS.Chart("p5c", {
                    title:{
                        text: "5C"              
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$chart_p5c.'
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
            name: "1a",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p1a.'
        },  {
            name: "1b",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p1b.'
        },  {
            name: "1c",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p1c.'
        }, {
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
        }, {
            name: "3a",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p3a.'
        },  {
            name: "3b",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p3b.'
        },  {
            name: "3c",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p3c.'
        },  {
            name: "3d",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p3d.'
        }, {
            name: "3e",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p3e.'
        }, {
            name: "4a",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p4a.'
        },  {
            name: "4b",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p4b.'
        },  {
            name: "4c",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p4c.'
        },  {
            name: "4d",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p4d.'
        }, {
            name: "5a",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p5a.'
        },  {
            name: "5b",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p5b.'
        },  {
            name: "5c",
            showInLegend: true,
            type: "stackedColumn",
            dataPoints: '.$chart_p5c.'
        },
        {
        type: "stackedColumn",
        dataPoints: '.$chart_teacher.'
        }, 
        ]
    });

                    chart_total.render();
                    total_detail.render();
                    chart1a.render();
                    chart1b.render();
                    chart1c.render();
                    chart2a.render();
                    chart2b.render();
                    chart2c.render();
                    chart3a.render();
                    chart3b.render();
                    chart3c.render();
                    chart3d.render();
                    chart3e.render();
                    chart4a.render();
                    chart4b.render();
                    chart4c.render();
                    chart4d.render();
                    chart5a.render();
                    chart5b.render();
                    chart5c.render();
                }
            </script>          
            ';
    ?>

            <div id="dingdong" style="height: 300px; width: 100%;"></div>


            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row" style="padding-top:50px;">
                        <div style="overflow-x:auto;">
                            <table class="table table-striped table-bordered table-hover" id="example-table"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr style="color: #fff; text-align: center; background-color: #114275;">
                                        <th>Teacher</th>
                                        <th>1a</th>
                                        <th>1b</th>
                                        <th>1c</th>
                                        <th>2a</th>
                                        <th>2b</th>
                                        <th>2c</th>
                                        <th>3a</th>
                                        <th>3b</th>
                                        <th>3c</th>
                                        <th>3d</th>
                                        <th>3e</th>
                                        <th>4a</th>
                                        <th>4b</th>
                                        <th>4c</th>
                                        <th>4d</th>
                                        <th>5a</th>
                                        <th>5b</th>
                                        <th>5c</th>
                                        <th>total</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align:center; line-height: 120px">
                                    @foreach ($teacher as $value)
                                    @php

                                    $evaluations = App\Evaluation::where('id_teacher', $value->id_teacher)->get();
                                    // dd($evaluations);

                                    $p1a = $p1b = $p1c = 0;
                                    $p2a = $p2b = $p2c = 0;
                                    $p3a = $p3b = $p3c = $p3d = $p3e = 0;
                                    $p4a = $p4b = $p4c = $p4d = 0;
                                    $p5a = $p5b = $p5c = 0;
                                    @endphp
                                    <tr>
                                        <td>{{$value->teacher->fullname}}</td>
                                        @foreach ($evaluations as $item)
                                        @php
                                        $p1a += array_sum($item->part1['p1a1']) + array_sum($item->part1['p1a2']) +
                                        array_sum($item->part1['p1a3']);
                                        $p1b += array_sum($item->part1['p1b1']) + array_sum($item->part1['p1b2']);
                                        $p1c += array_sum($item->part1['p1c']);
                                        $p2a += array_sum($item->part2['p2a1']) + array_sum($item->part2['p2a2']) +
                                        array_sum($item->part2['p2a3']);
                                        $p2b += array_sum($item->part2['p2b1']) + array_sum($item->part2['p2b2']);
                                        $p2c += array_sum($item->part2['p2c1']) + array_sum($item->part2['p2c2']) +
                                        array_sum($item->part2['p2c3']);
                                        $p3a += array_sum($item->part3['p3a1']) + array_sum($item->part3['p3a2']) +
                                        array_sum($item->part3['p3a3']);
                                        $p3b += array_sum($item->part3['p3b1']) + array_sum($item->part3['p3b2']) +
                                        array_sum($item->part3['p3b3']);
                                        $p3c += array_sum($item->part3['p3c1']) + array_sum($item->part3['p3c2']);
                                        $p3d += array_sum($item->part3['p3d1']) + array_sum($item->part3['p3d2']);
                                        $p3e += array_sum($item->part3['p3e1']);
                                        $p4a += array_sum($item->part4['p4a']);
                                        $p4b += array_sum($item->part4['p4b']);
                                        $p4c += array_sum($item->part4['p4c']);
                                        $p4d += array_sum($item->part4['p4d1']) + array_sum($item->part4['p4d2']);
                                        $p5a += array_sum($item->part5['p5a']);
                                        $p5b += array_sum($item->part5['p5b']);
                                        $p5c += array_sum($item->part5['p5c']);
                                        $total1 = $p1a + $p1b + $p1c
                                        +$p2a + $p2b + $p2c
                                        + $p3a + $p3b + $p3c + $p3d + $p3e
                                        + $p4a + $p4b + $p4c + $p4d
                                        +$p5a + $p5b + $p5c;
                                        @endphp
                                        @endforeach
                                        <td>
                                            {{number_format($p1a/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p1b/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p1c/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p2a/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p2b/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p2c/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p3a/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p3b/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p3c/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p3d/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p3e/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p4a/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p4b/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p4c/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p4d/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p5a/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p5b/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($p5c/count($evaluations),2)}}
                                        </td>
                                        <td>
                                            {{number_format($total1/count($evaluations),2)}}
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
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p1a" style="height: 300px; width: 50%;"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p1b" style="height: 300px; width: 50%;"></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p1c" style="height: 300px; width: 50%;"></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p2a" style="height: 300px; width: 50%;"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p2b" style="height: 300px; width: 50%;"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p2c" style="height: 300px; width: 50%;"></div>
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
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p3e" style="height: 300px; width: 50%;"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p4a" style="height: 300px; width: 50%;"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p4b" style="height: 300px; width: 50%;"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p4c" style="height: 300px; width: 50%;"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p4d" style="height: 300px; width: 50%;"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p5a" style="height: 300px; width: 50%;"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p5b" style="height: 300px; width: 50%;"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="p5c" style="height: 300px; width: 50%;"></div>
            </div>

        </div>
    </div>
</div>


@endsection
@section('script')
<script src="be/js/charts/canvas.js"></script>
@endsection
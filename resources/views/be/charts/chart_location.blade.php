@extends('be/layouts/index')
@section('title')
Chart all location
@endsection
@section('style')

<style>
    * margin 0 padding 0 box-sizing border-box:root font-size calc(.5vw + 1vh + .5vmin) body font 100 50%/1.5 'Roboto',
    sans-serif .intro position relative margin 2em padding .2em .6em cursor pointer // &:hover
    //   background rgba(96, 125, 139, 0.5);


    color #FFF font-size 2em max-width 26em h1 margin-bottom .5em line-height 1 font-weight 100 //===== #CrossFade =======

    #CrossFade background #FFF //no flash

    display flex align-items flex-end height 100vh overflow hidden position relative img position absolute min-width 100% min-height 100% height auto background #000 backface-visibility hidden opacity 0 transform scale(1.4) rotate(12deg) animation CrossFade 24s infinite &:nth-child(3) animation-delay 6s &:nth-child(2) animation-delay 12s &:nth-child(1) animation-delay 18s @keyframes CrossFade 25% opacity 1 transform scale(1) rotate(0) 40% opacity 0 //===== #CrossFadeMixin =======
    /* 

$duration = 12
$slides = 4
$step = $duration/$slides
setDelayRevers($duration, $slides)
  
  for index in (2..$slides)
    &:nth-child({index -1}) 
      animation-delay ($step*index)s

#CrossFade
  height 100vh
  overflow hidden
  position relative
  
  display flex
  img
    align-self center
    position absolute
    
    min-width 100%
    min-height 100%
    height auto
    
    backface-visibility hidden
    opacity 0
  
    transform scale(1.4) rotate(12deg)
    animation CrossFade ($duration)s infinite 
    setDelayRevers($duration, $slides)   
@keyframes CrossFade
  25%
    opacity 1
    transform scale(1) rotate(0)
  40%
    opacity 0
    
*/

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
                            #CrossFade
                            each img in [1043,1039,1017,929]
                            img(src='//unsplash.it/1600/900?image='+img, alt="img")
                            .intro
                            h1 Lorem ipsum dolor sit amet
                            p Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis impedit facilis
                            nesciunt quam vitae voluptatibus ullam vero.
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
                        text: "Total",
        padding: 5,
        borderThickness: 2,            
                    },
                    data: [              
                        {
                            indexLabel: "{y}",
                            type: "column",
                            dataPoints: '.$new_evaluations.',
                            color: "#44546a", 
                        }
                        ]
                    });
                    var chart2a = new CanvasJS.Chart("p2a", {
                    title:{
                        text: "2A"              
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
                        text: "2B"              
                    },
                    data: [              
                        {
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

            <div id="dingdong" style="height: 300px; width: 100%;">a</div>

            <div>
            </div>
            <div id="chartContainer2" style="height: 600px; width: 100%;">a</div>
            <div class="row">

                <div class="col-md-6" id="p2a" style="height: 300px; width: 50%;"></div>
                <div class="col-md-6" id="p2b" style="height: 300px; width: 50%;"></div>
            </div>
            <div class="row">

                <div class="col-md-6" id="p2c" style="height: 300px; width: 50%;"></div>
                <div class="col-md-6" id="p2d" style="height: 300px; width: 50%;"></div>
            </div>
            <div class="row">
                <div class="col-md-6" id="p3a" style="height: 300px; width: 50%;"></div>
                <div class="col-md-6" id="p3b" style="height: 300px; width: 50%;"></div>
            </div>
            <div class="row">
                <div class="col-md-6" id="p3c" style="height: 300px; width: 50%;"></div>
                <div class="col-md-6" id="p3d" style="height: 300px; width: 50%;"></div>
            </div>
            <div class="row">
                <div class="col-md-6" id="p4a" style="height: 300px; width: 50%;"></div>
                <div class="col-md-6" id="p4b" style="height: 300px; width: 50%;"></div>
            </div>
            <div class="row">
                <div class="col-md-6" id="p4c" style="height: 300px; width: 50%;"></div>
            </div>

        </div>
    </div>
</div>

@endsection
@section('script')

<script src="be/js/charts/canvas.js"></script>
@endsection
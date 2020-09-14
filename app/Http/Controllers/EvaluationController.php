<?php

namespace App\Http\Controllers;

use App\Evaluation;
use App\Schedule;
use App\Address;
use App\Teacher;
use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Mail\SendmailTeacher;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluations = Evaluation::all();
        return view('be/evaluation/draft', compact('evaluations'));
    }
    public function json()
    {
        $evaluation = Evaluation::find(23);
        $part2a = $evaluation['part2a'];
        $p2a1 = $part2a['2a1_basic'];
        $sum = array_sum($part2a);
        dd($evaluation);
        return response()->json($evaluation);
    }
    public function completed()
    {
        $evaluations = Evaluation::all();
        // $evalu = Evaluation::find(24);
        // $part2a = $evalu->part2a;
        // $key = array_keys($part2a);
        // $value = array_values($part2a);
        // $total = array_sum(array_intersect_key($part2a, array_flip($key)));
        // dd(array_sum($part2a));
        return view('be/evaluation/completed', compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function test(Request $rq)
    {
        $product = Evaluation::create($rq->all());
        dd($product);
        return redirect()->back();
    }
    public function store(Request $rq)
    {
        
        $this->validate($rq,[

        ],[

        ]);
        // try {
            $evaluation = new Evaluation();
            $evaluation->id_schedules = $rq->schedule;
            $evaluation->id_teacher = $rq->teacher;
            $evaluation->id_location = $rq->location;
            $evaluation->content = $rq->content;
            $evaluation->objective = $rq->objective;
            $evaluation->lesson_flow = $rq->lesson_flow;
            $evaluation->strengths = $rq->strengths;
            $evaluation->improvement = $rq->improvement;
            $evaluation->test = $rq->time;
        //     dd(date('Y-m-d',strtotime($rq->time)));

            $evaluation->part1 = [
                // 'part_1_1'=>$rq->part_1_1,
                // 'part_1_2'=>$rq->part_1_2,
                
                'p1_1' => [
                    'basic'=>$rq->part_1_1_basic,
                    'appro'=>$rq->part_1_1_appro,
                    'compe'=>$rq->part_1_1_compe,
                    'outst'=>$rq->part_1_1_outst,
                ],
                'p1_2' => [
                    'basic_1'=>$rq->part_1_2_1_basic,
                    'appro_1'=>$rq->part_1_2_1_appro,
                    'compe_1'=>$rq->part_1_2_1_compe,
                    'outst_1'=>$rq->part_1_2_1_outst,
                    'basic_2'=>$rq->part_1_2_2_basic,
                    'appro_2'=>$rq->part_1_2_2_appro,
                    'compe_2'=>$rq->part_1_2_2_compe,
                    'outst_2'=>$rq->part_1_2_2_outst,
                ]
            ];
            $evaluation->part2a = [
                'p2a1' => [
                    'basic'=>$rq->part_2a1_basic,
                    'appro'=>$rq->part_2a1_appro,
                    'compe'=>$rq->part_2a1_compe,
                    'outst'=>$rq->part_2a1_outst,
                ],
                'p2a2' => [
                    'basic'=>$rq->part_2a2_basic,
                    'appro'=>$rq->part_2a2_appro,
                    'compe'=>$rq->part_2a2_compe,
                    'outst'=>$rq->part_2a2_outst,
                ],
                'p2a3' => [
                    'basic'=>$rq->part_2a3_basic,
                    'appro'=>$rq->part_2a3_appro,
                    'compe'=>$rq->part_2a3_compe,
                    'outst'=>$rq->part_2a3_outst,
                ]
                
            ];
            $evaluation->part2b = [
                'p2b1' => [
                    'basic'=>$rq->part_2b1_basic,
                    'appro'=>$rq->part_2b1_appro,
                    'compe'=>$rq->part_2b1_compe,
                    'outst'=>$rq->part_2b1_outst,
                ],
                'p2b2' => [
                    'basic'=>$rq->part_2b2_basic,
                    'appro'=>$rq->part_2b2_appro,
                    'compe'=>$rq->part_2b2_compe,
                    'outst'=>$rq->part_2b2_outst,
                ]
            ];
            $evaluation->part2c = [
                'p2c1' => [
                    'basic'=>$rq->part_2c1_basic,
                    'appro'=>$rq->part_2c1_appro,
                    'compe'=>$rq->part_2c1_compe,
                    'outst'=>$rq->part_2c1_outst,
                ],
                'p2c2' => [
                    'basic_1'=>$rq->part_2c2_1_basic,
                    'appro_1'=>$rq->part_2c2_1_appro,
                    'compe_1'=>$rq->part_2c2_1_compe,
                    'outst_1'=>$rq->part_2c2_1_outst,
                    'basic_2'=>$rq->part_2c2_2_basic,
                    'appro_2'=>$rq->part_2c2_2_appro,
                    'compe_2'=>$rq->part_2c2_2_compe,
                    'outst_2'=>$rq->part_2c2_2_outst,
                ],
                'p2c3' => [
                    'basic'=>$rq->part_2c3_basic,
                    'appro'=>$rq->part_2c3_appro,
                    'compe'=>$rq->part_2c3_compe,
                    'outst'=>$rq->part_2c3_outst,
                ],
            ];
            $evaluation->part2d = [
                'p2d1' => [
                    'basic'=>$rq->part_2d1_basic,
                    'appro'=>$rq->part_2d1_appro,
                    'compe'=>$rq->part_2d1_compe,
                    'outst'=>$rq->part_2d1_outst,
                ],
                'p2d2' => [
                    'basic'=>$rq->part_2d2_basic,
                    'appro'=>$rq->part_2d2_appro,
                    'compe'=>$rq->part_2d2_compe,
                    'outst'=>$rq->part_2d2_outst,
                ]
            ];
            $evaluation->part3a = [
                'p3a1' => [
                    'basic'=>$rq->part_3a1_basic,
                    'appro'=>$rq->part_3a1_appro,
                    'compe'=>$rq->part_3a1_compe,
                    'outst'=>$rq->part_3a1_outst,
                ],
                'p3a2' => [
                    'basic'=>$rq->part_3a2_basic,
                    'appro'=>$rq->part_3a2_appro,
                    'compe'=>$rq->part_3a2_compe,
                    'outst'=>$rq->part_3a2_outst,
                ],
                'p3a3' => [
                    'basic'=>$rq->part_3a3_basic,
                    'appro'=>$rq->part_3a3_appro,
                    'compe'=>$rq->part_3a3_compe,
                    'outst'=>$rq->part_3a3_outst,
                ],
                'p3a4' => [
                    'basic_1'=>$rq->part_3a4_1_basic,
                    'appro_1'=>$rq->part_3a4_1_appro,
                    'compe_1'=>$rq->part_3a4_1_compe,
                    'outst_1'=>$rq->part_3a4_1_outst,
                    'basic_2'=>$rq->part_3a4_2_basic,
                    'appro_2'=>$rq->part_3a4_2_appro,
                    'compe_2'=>$rq->part_3a4_2_compe,
                    'outst_2'=>$rq->part_3a4_2_outst,
                ]
            ];
            $evaluation->part3b = [
                'p3b1' => [
                    'basic_1'=>$rq->part_3b1_1_basic,
                    'appro_1'=>$rq->part_3b1_1_appro,
                    'compe_1'=>$rq->part_3b1_1_compe,
                    'outst_1'=>$rq->part_3b1_1_outst,
                    'basic_2'=>$rq->part_3b1_2_basic,
                    'appro_2'=>$rq->part_3b1_2_appro,
                    'compe_2'=>$rq->part_3b1_2_compe,
                    'outst_2'=>$rq->part_3b1_2_outst,
                ],
                'p3b2' => [
                    'basic'=>$rq->part_3b2_basic,
                    'appro'=>$rq->part_3b2_appro,
                    'compe'=>$rq->part_3b2_compe,
                    'outst'=>$rq->part_3b2_outst,
                ]
            ];
            $evaluation->part3c = [
                'p3c1' => [
                    'basic_1'=>$rq->part_3c1_1_basic,
                    'appro_1'=>$rq->part_3c1_1_appro,
                    'compe_1'=>$rq->part_3c1_1_compe,
                    'outst_1'=>$rq->part_3c1_1_outst,
                    'basic_2'=>$rq->part_3c1_2_basic,
                    'appro_2'=>$rq->part_3c1_2_appro,
                    'compe_2'=>$rq->part_3c1_2_compe,
                    'outst_2'=>$rq->part_3c1_2_outst,
                ],
                'p3c2' => [
                    'basic'=>$rq->part_3c2_basic,
                    'appro'=>$rq->part_3c2_appro,
                    'compe'=>$rq->part_3c2_compe,
                    'outst'=>$rq->part_3c2_outst,
                ]
            ];
            $evaluation->part3d = [
                'p3d1' => [
                    'basic'=>$rq->part_3d1_basic,
                    'appro'=>$rq->part_3d1_appro,
                    'compe'=>$rq->part_3d1_compe,
                    'outst'=>$rq->part_3d1_outst,
                ],
                'p3d2' => [
                    'basic_1'=>$rq->part_3d2_1_basic,
                    'appro_1'=>$rq->part_3d2_1_appro,
                    'compe_1'=>$rq->part_3d2_1_compe,
                    'outst_1'=>$rq->part_3d2_1_outst,
                    'basic_2'=>$rq->part_3d2_2_basic,
                    'appro_2'=>$rq->part_3d2_2_appro,
                    'compe_2'=>$rq->part_3d2_2_compe,
                    'outst_2'=>$rq->part_3d2_2_outst,
                    'basic_3'=>$rq->part_3d2_3_basic,
                    'appro_3'=>$rq->part_3d2_3_appro,
                    'compe_3'=>$rq->part_3d2_3_compe,
                    'outst_3'=>$rq->part_3d2_3_outst,
                ]
            ];
            $evaluation->part4a = [
                'p4a1' => [
                    'basic'=>$rq->part_4a1_basic,
                    'appro'=>$rq->part_4a1_appro,
                    'compe'=>$rq->part_4a1_compe,
                    'outst'=>$rq->part_4a1_outst,
                ],
                'p4a2' => [
                    'basic_1'=>$rq->part_4a2_1_basic,
                    'appro_1'=>$rq->part_4a2_1_appro,
                    'compe_1'=>$rq->part_4a2_1_compe,
                    'outst_1'=>$rq->part_4a2_1_outst,
                    'basic_2'=>$rq->part_4a2_2_basic,
                    'appro_2'=>$rq->part_4a2_2_appro,
                    'compe_2'=>$rq->part_4a2_2_compe,
                    'outst_2'=>$rq->part_4a2_2_outst,
                ]

            ];
            $evaluation->part4b = [
                'p4b' => [
                    'basic'=>$rq->part_4b_basic,
                    'appro'=>$rq->part_4b_appro,
                    'compe'=>$rq->part_4b_compe,
                    'outst'=>$rq->part_4b_outst,
                ]
            ];
            $evaluation->part4c = [
                'p4c' => [
                    'basic'=>$rq->part_4c_basic,
                    'appro'=>$rq->part_4c_appro,
                    'compe'=>$rq->part_4c_compe,
                    'outst'=>$rq->part_4c_outst,
                ]
            ];
            $evaluation->author = Auth::user()->id;
            // dd($evaluation);
            $schedule = Schedule::find($rq->schedule);
            $schedule->booking = Auth::user()->id;
            // dd($schedule);
            $schedule->save();
            $evaluation->save();
            return redirect()->route('list_draft')->with('msg','Saved to draft');
        // } catch (\Exception  $ex) {
        //     return back()->withErrors($ex->getMessage());
        // }
    }

    
    public function complete(Request $rq)
    {
        
        $this->validate($rq,[

        ],[

        ]);
        // try {
            $evaluation = new Evaluation();
            $evaluation->id_schedules = $rq->schedule;
            $evaluation->id_teacher = $rq->teacher;
            $evaluation->id_location = $rq->location;
            $evaluation->content = $rq->content;
            $evaluation->objective = $rq->objective;
            $evaluation->lesson_flow = $rq->lesson_flow;
            $evaluation->strengths = $rq->strengths;
            $evaluation->improvement = $rq->improvement;
            $evaluation->test = $rq->time;
        //     dd(date('Y-m-d',strtotime($rq->time)));

        $evaluation->part1 = [
            // 'part_1_1'=>$rq->part_1_1,
            // 'part_1_2'=>$rq->part_1_2,
            
            'p1_1' => [
                'basic'=>$rq->part_1_1_basic,
                'appro'=>$rq->part_1_1_appro,
                'compe'=>$rq->part_1_1_compe,
                'outst'=>$rq->part_1_1_outst,
            ],
            'p1_2' => [
                'basic_1'=>$rq->part_1_2_1_basic,
                'appro_1'=>$rq->part_1_2_1_appro,
                'compe_1'=>$rq->part_1_2_1_compe,
                'outst_1'=>$rq->part_1_2_1_outst,
                'basic_2'=>$rq->part_1_2_2_basic,
                'appro_2'=>$rq->part_1_2_2_appro,
                'compe_2'=>$rq->part_1_2_2_compe,
                'outst_2'=>$rq->part_1_2_2_outst,
            ]
        ];
        $evaluation->part2a = [
            'p2a1' => [
                'basic'=>$rq->part_2a1_basic,
                'appro'=>$rq->part_2a1_appro,
                'compe'=>$rq->part_2a1_compe,
                'outst'=>$rq->part_2a1_outst,
            ],
            'p2a2' => [
                'basic'=>$rq->part_2a2_basic,
                'appro'=>$rq->part_2a2_appro,
                'compe'=>$rq->part_2a2_compe,
                'outst'=>$rq->part_2a2_outst,
            ],
            'p2a3' => [
                'basic'=>$rq->part_2a3_basic,
                'appro'=>$rq->part_2a3_appro,
                'compe'=>$rq->part_2a3_compe,
                'outst'=>$rq->part_2a3_outst,
            ]
            
        ];
        $evaluation->part2b = [
            'p2b1' => [
                'basic'=>$rq->part_2b1_basic,
                'appro'=>$rq->part_2b1_appro,
                'compe'=>$rq->part_2b1_compe,
                'outst'=>$rq->part_2b1_outst,
            ],
            'p2b2' => [
                'basic'=>$rq->part_2b2_basic,
                'appro'=>$rq->part_2b2_appro,
                'compe'=>$rq->part_2b2_compe,
                'outst'=>$rq->part_2b2_outst,
            ]
        ];
        $evaluation->part2c = [
            'p2c1' => [
                'basic'=>$rq->part_2c1_basic,
                'appro'=>$rq->part_2c1_appro,
                'compe'=>$rq->part_2c1_compe,
                'outst'=>$rq->part_2c1_outst,
            ],
            'p2c2' => [
                'basic_1'=>$rq->part_2c2_1_basic,
                'appro_1'=>$rq->part_2c2_1_appro,
                'compe_1'=>$rq->part_2c2_1_compe,
                'outst_1'=>$rq->part_2c2_1_outst,
                'basic_2'=>$rq->part_2c2_2_basic,
                'appro_2'=>$rq->part_2c2_2_appro,
                'compe_2'=>$rq->part_2c2_2_compe,
                'outst_2'=>$rq->part_2c2_2_outst,
            ],
            'p2c3' => [
                'basic'=>$rq->part_2c3_basic,
                'appro'=>$rq->part_2c3_appro,
                'compe'=>$rq->part_2c3_compe,
                'outst'=>$rq->part_2c3_outst,
            ],
        ];
        $evaluation->part2d = [
            'p2d1' => [
                'basic'=>$rq->part_2d1_basic,
                'appro'=>$rq->part_2d1_appro,
                'compe'=>$rq->part_2d1_compe,
                'outst'=>$rq->part_2d1_outst,
            ],
            'p2d2' => [
                'basic'=>$rq->part_2d2_basic,
                'appro'=>$rq->part_2d2_appro,
                'compe'=>$rq->part_2d2_compe,
                'outst'=>$rq->part_2d2_outst,
            ]
        ];
        $evaluation->part3a = [
            'p3a1' => [
                'basic'=>$rq->part_3a1_basic,
                'appro'=>$rq->part_3a1_appro,
                'compe'=>$rq->part_3a1_compe,
                'outst'=>$rq->part_3a1_outst,
            ],
            'p3a2' => [
                'basic'=>$rq->part_3a2_basic,
                'appro'=>$rq->part_3a2_appro,
                'compe'=>$rq->part_3a2_compe,
                'outst'=>$rq->part_3a2_outst,
            ],
            'p3a3' => [
                'basic'=>$rq->part_3a3_basic,
                'appro'=>$rq->part_3a3_appro,
                'compe'=>$rq->part_3a3_compe,
                'outst'=>$rq->part_3a3_outst,
            ],
            'p3a4' => [
                'basic_1'=>$rq->part_3a4_1_basic,
                'appro_1'=>$rq->part_3a4_1_appro,
                'compe_1'=>$rq->part_3a4_1_compe,
                'outst_1'=>$rq->part_3a4_1_outst,
                'basic_2'=>$rq->part_3a4_2_basic,
                'appro_2'=>$rq->part_3a4_2_appro,
                'compe_2'=>$rq->part_3a4_2_compe,
                'outst_2'=>$rq->part_3a4_2_outst,
            ]
        ];
        $evaluation->part3b = [
            'p3b1' => [
                'basic_1'=>$rq->part_3b1_1_basic,
                'appro_1'=>$rq->part_3b1_1_appro,
                'compe_1'=>$rq->part_3b1_1_compe,
                'outst_1'=>$rq->part_3b1_1_outst,
                'basic_2'=>$rq->part_3b1_2_basic,
                'appro_2'=>$rq->part_3b1_2_appro,
                'compe_2'=>$rq->part_3b1_2_compe,
                'outst_2'=>$rq->part_3b1_2_outst,
            ],
            'p3b2' => [
                'basic'=>$rq->part_3b2_basic,
                'appro'=>$rq->part_3b2_appro,
                'compe'=>$rq->part_3b2_compe,
                'outst'=>$rq->part_3b2_outst,
            ]
        ];
        $evaluation->part3c = [
            'p3c1' => [
                'basic_1'=>$rq->part_3c1_1_basic,
                'appro_1'=>$rq->part_3c1_1_appro,
                'compe_1'=>$rq->part_3c1_1_compe,
                'outst_1'=>$rq->part_3c1_1_outst,
                'basic_2'=>$rq->part_3c1_2_basic,
                'appro_2'=>$rq->part_3c1_2_appro,
                'compe_2'=>$rq->part_3c1_2_compe,
                'outst_2'=>$rq->part_3c1_2_outst,
            ],
            'p3c2' => [
                'basic'=>$rq->part_3c2_basic,
                'appro'=>$rq->part_3c2_appro,
                'compe'=>$rq->part_3c2_compe,
                'outst'=>$rq->part_3c2_outst,
            ]
        ];
        $evaluation->part3d = [
            'p3d1' => [
                'basic'=>$rq->part_3d1_basic,
                'appro'=>$rq->part_3d1_appro,
                'compe'=>$rq->part_3d1_compe,
                'outst'=>$rq->part_3d1_outst,
            ],
            'p3d2' => [
                'basic_1'=>$rq->part_3d2_1_basic,
                'appro_1'=>$rq->part_3d2_1_appro,
                'compe_1'=>$rq->part_3d2_1_compe,
                'outst_1'=>$rq->part_3d2_1_outst,
                'basic_2'=>$rq->part_3d2_2_basic,
                'appro_2'=>$rq->part_3d2_2_appro,
                'compe_2'=>$rq->part_3d2_2_compe,
                'outst_2'=>$rq->part_3d2_2_outst,
                'basic_3'=>$rq->part_3d2_3_basic,
                'appro_3'=>$rq->part_3d2_3_appro,
                'compe_3'=>$rq->part_3d2_3_compe,
                'outst_3'=>$rq->part_3d2_3_outst,
            ]
        ];
        $evaluation->part4a = [
            'p4a1' => [
                'basic'=>$rq->part_4a1_basic,
                'appro'=>$rq->part_4a1_appro,
                'compe'=>$rq->part_4a1_compe,
                'outst'=>$rq->part_4a1_outst,
            ],
            'p4a2' => [
                'basic_1'=>$rq->part_4a2_1_basic,
                'appro_1'=>$rq->part_4a2_1_appro,
                'compe_1'=>$rq->part_4a2_1_compe,
                'outst_1'=>$rq->part_4a2_1_outst,
                'basic_2'=>$rq->part_4a2_2_basic,
                'appro_2'=>$rq->part_4a2_2_appro,
                'compe_2'=>$rq->part_4a2_2_compe,
                'outst_2'=>$rq->part_4a2_2_outst,
            ]

        ];
        $evaluation->part4b = [
            'p4b' => [
                'basic'=>$rq->part_4b_basic,
                'appro'=>$rq->part_4b_appro,
                'compe'=>$rq->part_4b_compe,
                'outst'=>$rq->part_4b_outst,
            ]
        ];
        $evaluation->part4c = [
            'p4c' => [
                'basic'=>$rq->part_4c_basic,
                'appro'=>$rq->part_4c_appro,
                'compe'=>$rq->part_4c_compe,
                'outst'=>$rq->part_4c_outst,
            ]
        ];
            $evaluation->author = Auth::user()->id;
            $evaluation->editor = Auth::user()->id;
            $evaluation->status = "1";
            $schedule = Schedule::find($rq->schedule);
            $schedule->booking = Auth::user()->id;
            $schedule->save();
            // dd($evaluation);
        Mail::to($evaluation->teacher->email)->send(new SendmailTeacher($evaluation));
            $evaluation->save();
            $schedule = Schedule::find($rq->schedule);
            // dd($schedule);

            return redirect()->route('list_completed')->with('msg','complete!');
        // } catch (\Exception  $ex) {
        //     return back()->withErrors($ex->getMessage());
        // }
    }
    
    public function completed_evaluation(Request $rq)
    {
        $id = $rq->id;
        $evaluation = Evaluation::find($id);
        $evaluation->status = "1";
        $evaluation->editor = Auth::user()->id;
        // dd($evaluation->teacher->email);
        Mail::to($evaluation->teacher->email)->send(new SendmailTeacher($evaluation));
        $evaluation->save();
        return redirect('admin/evaluation/completed')->with('msg','oklah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schedule = Schedule::find($id);
        return view('be/schedules/evaluation', compact('schedule'));
    }
    public function view($id)
{
        $evalu = Evaluation::find($id);
        return view('be/evaluation/view', compact('evalu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evalu = Evaluation::find($id);
        return view('be/evaluation/edit', compact('evalu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq,$id)
    {
        $evaluation = Evaluation::find($id);
        $evaluation->content = $rq->content;
        $evaluation->objective = $rq->objective;
        $evaluation->lesson_flow = $rq->lesson_flow;
        $evaluation->strengths = $rq->strengths;
        $evaluation->improvement = $rq->improvement;
        $evaluation->test = $rq->time;

        $evaluation->part1 = [
            // 'part_1_1'=>$rq->part_1_1,
            // 'part_1_2'=>$rq->part_1_2,
            
            'p1_1' => [
                'basic'=>$rq->part_1_1_basic,
                'appro'=>$rq->part_1_1_appro,
                'compe'=>$rq->part_1_1_compe,
                'outst'=>$rq->part_1_1_outst,
            ],
            'p1_2' => [
                'basic_1'=>$rq->part_1_2_1_basic,
                'appro_1'=>$rq->part_1_2_1_appro,
                'compe_1'=>$rq->part_1_2_1_compe,
                'outst_1'=>$rq->part_1_2_1_outst,
                'basic_2'=>$rq->part_1_2_2_basic,
                'appro_2'=>$rq->part_1_2_2_appro,
                'compe_2'=>$rq->part_1_2_2_compe,
                'outst_2'=>$rq->part_1_2_2_outst,
            ]
        ];
        $evaluation->part2a = [
            'p2a1' => [
                'basic'=>$rq->part_2a1_basic,
                'appro'=>$rq->part_2a1_appro,
                'compe'=>$rq->part_2a1_compe,
                'outst'=>$rq->part_2a1_outst,
            ],
            'p2a2' => [
                'basic'=>$rq->part_2a2_basic,
                'appro'=>$rq->part_2a2_appro,
                'compe'=>$rq->part_2a2_compe,
                'outst'=>$rq->part_2a2_outst,
            ],
            'p2a3' => [
                'basic'=>$rq->part_2a3_basic,
                'appro'=>$rq->part_2a3_appro,
                'compe'=>$rq->part_2a3_compe,
                'outst'=>$rq->part_2a3_outst,
            ]
            
        ];
        $evaluation->part2b = [
            'p2b1' => [
                'basic'=>$rq->part_2b1_basic,
                'appro'=>$rq->part_2b1_appro,
                'compe'=>$rq->part_2b1_compe,
                'outst'=>$rq->part_2b1_outst,
            ],
            'p2b2' => [
                'basic'=>$rq->part_2b2_basic,
                'appro'=>$rq->part_2b2_appro,
                'compe'=>$rq->part_2b2_compe,
                'outst'=>$rq->part_2b2_outst,
            ]
        ];
        $evaluation->part2c = [
            'p2c1' => [
                'basic'=>$rq->part_2c1_basic,
                'appro'=>$rq->part_2c1_appro,
                'compe'=>$rq->part_2c1_compe,
                'outst'=>$rq->part_2c1_outst,
            ],
            'p2c2' => [
                'basic_1'=>$rq->part_2c2_1_basic,
                'appro_1'=>$rq->part_2c2_1_appro,
                'compe_1'=>$rq->part_2c2_1_compe,
                'outst_1'=>$rq->part_2c2_1_outst,
                'basic_2'=>$rq->part_2c2_2_basic,
                'appro_2'=>$rq->part_2c2_2_appro,
                'compe_2'=>$rq->part_2c2_2_compe,
                'outst_2'=>$rq->part_2c2_2_outst,
            ],
            'p2c3' => [
                'basic'=>$rq->part_2c3_basic,
                'appro'=>$rq->part_2c3_appro,
                'compe'=>$rq->part_2c3_compe,
                'outst'=>$rq->part_2c3_outst,
            ],
        ];
        $evaluation->part2d = [
            'p2d1' => [
                'basic'=>$rq->part_2d1_basic,
                'appro'=>$rq->part_2d1_appro,
                'compe'=>$rq->part_2d1_compe,
                'outst'=>$rq->part_2d1_outst,
            ],
            'p2d2' => [
                'basic'=>$rq->part_2d2_basic,
                'appro'=>$rq->part_2d2_appro,
                'compe'=>$rq->part_2d2_compe,
                'outst'=>$rq->part_2d2_outst,
            ]
        ];
        $evaluation->part3a = [
            'p3a1' => [
                'basic'=>$rq->part_3a1_basic,
                'appro'=>$rq->part_3a1_appro,
                'compe'=>$rq->part_3a1_compe,
                'outst'=>$rq->part_3a1_outst,
            ],
            'p3a2' => [
                'basic'=>$rq->part_3a2_basic,
                'appro'=>$rq->part_3a2_appro,
                'compe'=>$rq->part_3a2_compe,
                'outst'=>$rq->part_3a2_outst,
            ],
            'p3a3' => [
                'basic'=>$rq->part_3a3_basic,
                'appro'=>$rq->part_3a3_appro,
                'compe'=>$rq->part_3a3_compe,
                'outst'=>$rq->part_3a3_outst,
            ],
            'p3a4' => [
                'basic_1'=>$rq->part_3a4_1_basic,
                'appro_1'=>$rq->part_3a4_1_appro,
                'compe_1'=>$rq->part_3a4_1_compe,
                'outst_1'=>$rq->part_3a4_1_outst,
                'basic_2'=>$rq->part_3a4_2_basic,
                'appro_2'=>$rq->part_3a4_2_appro,
                'compe_2'=>$rq->part_3a4_2_compe,
                'outst_2'=>$rq->part_3a4_2_outst,
            ]
        ];
        $evaluation->part3b = [
            'p3b1' => [
                'basic_1'=>$rq->part_3b1_1_basic,
                'appro_1'=>$rq->part_3b1_1_appro,
                'compe_1'=>$rq->part_3b1_1_compe,
                'outst_1'=>$rq->part_3b1_1_outst,
                'basic_2'=>$rq->part_3b1_2_basic,
                'appro_2'=>$rq->part_3b1_2_appro,
                'compe_2'=>$rq->part_3b1_2_compe,
                'outst_2'=>$rq->part_3b1_2_outst,
            ],
            'p3b2' => [
                'basic'=>$rq->part_3b2_basic,
                'appro'=>$rq->part_3b2_appro,
                'compe'=>$rq->part_3b2_compe,
                'outst'=>$rq->part_3b2_outst,
            ]
        ];
        $evaluation->part3c = [
            'p3c1' => [
                'basic_1'=>$rq->part_3c1_1_basic,
                'appro_1'=>$rq->part_3c1_1_appro,
                'compe_1'=>$rq->part_3c1_1_compe,
                'outst_1'=>$rq->part_3c1_1_outst,
                'basic_2'=>$rq->part_3c1_2_basic,
                'appro_2'=>$rq->part_3c1_2_appro,
                'compe_2'=>$rq->part_3c1_2_compe,
                'outst_2'=>$rq->part_3c1_2_outst,
            ],
            'p3c2' => [
                'basic'=>$rq->part_3c2_basic,
                'appro'=>$rq->part_3c2_appro,
                'compe'=>$rq->part_3c2_compe,
                'outst'=>$rq->part_3c2_outst,
            ]
        ];
        $evaluation->part3d = [
            'p3d1' => [
                'basic'=>$rq->part_3d1_basic,
                'appro'=>$rq->part_3d1_appro,
                'compe'=>$rq->part_3d1_compe,
                'outst'=>$rq->part_3d1_outst,
            ],
            'p3d2' => [
                'basic_1'=>$rq->part_3d2_1_basic,
                'appro_1'=>$rq->part_3d2_1_appro,
                'compe_1'=>$rq->part_3d2_1_compe,
                'outst_1'=>$rq->part_3d2_1_outst,
                'basic_2'=>$rq->part_3d2_2_basic,
                'appro_2'=>$rq->part_3d2_2_appro,
                'compe_2'=>$rq->part_3d2_2_compe,
                'outst_2'=>$rq->part_3d2_2_outst,
                'basic_3'=>$rq->part_3d2_3_basic,
                'appro_3'=>$rq->part_3d2_3_appro,
                'compe_3'=>$rq->part_3d2_3_compe,
                'outst_3'=>$rq->part_3d2_3_outst,
            ]
        ];
        $evaluation->part4a = [
            'p4a1' => [
                'basic'=>$rq->part_4a1_basic,
                'appro'=>$rq->part_4a1_appro,
                'compe'=>$rq->part_4a1_compe,
                'outst'=>$rq->part_4a1_outst,
            ],
            'p4a2' => [
                'basic_1'=>$rq->part_4a2_1_basic,
                'appro_1'=>$rq->part_4a2_1_appro,
                'compe_1'=>$rq->part_4a2_1_compe,
                'outst_1'=>$rq->part_4a2_1_outst,
                'basic_2'=>$rq->part_4a2_2_basic,
                'appro_2'=>$rq->part_4a2_2_appro,
                'compe_2'=>$rq->part_4a2_2_compe,
                'outst_2'=>$rq->part_4a2_2_outst,
            ]

        ];
        $evaluation->part4b = [
            'p4b' => [
                'basic'=>$rq->part_4b_basic,
                'appro'=>$rq->part_4b_appro,
                'compe'=>$rq->part_4b_compe,
                'outst'=>$rq->part_4b_outst,
            ]
        ];
        $evaluation->part4c = [
            'p4c' => [
                'basic'=>$rq->part_4c_basic,
                'appro'=>$rq->part_4c_appro,
                'compe'=>$rq->part_4c_compe,
                'outst'=>$rq->part_4c_outst,
            ]
        ];
        $evaluation->editor = Auth::user()->id;
        $evaluation->status = "1";

        $schedule = Schedule::find($evaluation->schedule->id);
        $schedule->booking = Auth::user()->id;
        $schedule->save();
        // dd($evaluation);
        // dd($evaluation->schedule->teacher->email);
        Mail::to($evaluation->schedule->teacher->email)->send(new SendmailTeacher($evaluation));
        $evaluation->save();
        return redirect('admin/evaluation/completed')->with('msg','check mail ddi !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluation $evaluation)
    {
        //
    }
    
    
    public function ranking()
    {
        $addresses = Address::all();
        $teachers = Teacher::all();
        $schedules = Schedule::all();
        $evaluations = Evaluation::all();
        // dd($addresses);
        return view('be/evaluation/ranking', compact('addresses', 'teachers', 'schedules', 'evaluations'));
    }
    public function qqq()
    {
        return view('be/evaluation/ranking');
    }
    public function ranking_result(Request $rq)
    {
        $addresses = Address::all();
        $teachers = Teacher::all();
        $teacher = $rq->id_teacher;
        $ranking = Evaluation::where('id_teacher','like', "%{$teacher}%")->get();
        $p2a1 = $p2a2 = $p2a3 = 0;
        $p2b1 = $p2b2 = $p2c = 0;
        $p2d1 = $p2d2 = 0;
        $p3a1 = $p3a2 = $p3a3 = $p3a4 = 0;
        $p3b1 = $p3b2 = $p3c1 = $p3c2 = 0;
        $p3d1 = $p3d2 = 0;
        $p4a1 = $p4a2 = 0;
        $p4b = $p4c =0;
        // dd(count($ranking));
        if (count($ranking)>0) {
        
            foreach($ranking as $evaluation)
            {
                $p2a1+= array_sum($evaluation->part2a['p2a1']);
                $p2a2+= array_sum($evaluation->part2a['p2a2']);
                $p2a3+= array_sum($evaluation->part2a['p2a3']);
                $total_p2a = $p2a1+$p2a2+$p2a3;
                $p2b1+= array_sum($evaluation->part2b['p2b1']);
                $p2b2+= array_sum($evaluation->part2b['p2b2']);
                $total_p2b = $p2b1+$p2b2;
                $p2d1+= array_sum($evaluation->part2d['p2d1']);
                $p2d2+= array_sum($evaluation->part2d['p2d2']);
                $total_p2d = $p2d1+$p2d2;
                $p3a1+= array_sum($evaluation->part3a['p3a1']);
                $p3a2+= array_sum($evaluation->part3a['p3a2']);
                $p3a3+= array_sum($evaluation->part3a['p3a3']);
                $p3a4+= array_sum($evaluation->part3a['p3a4']);
                $total_p3a = $p3a1+$p3a2+$p3a3+$p3a4;
                $p3b1+= array_sum($evaluation->part3b['p3b1']);
                $p3b2+= array_sum($evaluation->part3b['p3b2']);
                $total_p3b = $p3b1+$p3b2;
                $p3c1+= array_sum($evaluation->part3c['p3c1']);
                $p3c2+= array_sum($evaluation->part3c['p3c2']);
                $total_p3c = $p3c1+$p3c2;
                $p3d1+= array_sum($evaluation->part3d['p3d1']);
                $p3d2+= array_sum($evaluation->part3d['p3d2']);
                $total_p3d = $p3d1+$p3d2;
                $p4a1+= array_sum($evaluation->part4a['p4a1']);
                $p4a2+= array_sum($evaluation->part4a['p4a2']);
                $total_p4a = $p4a1+$p4a2;
                $p2c+= array_sum($evaluation->part2c['p2c']);
                $total_p2c = $p2c;
                $p4b+= array_sum($evaluation->part4b['p4b']);
                $total_p4b = $p4b;
                $p4c+= array_sum($evaluation->part4c['p4c']);
                $total_p4c = $p4c;
    
                $total = $total_p2a + $total_p2b + $total_p2c + $total_p2d
                        + $total_p3a + $total_p3b + $total_p3c + $total_p3d
                        +  $total_p4a + $total_p4b + $total_p4c ;
                // $total+= array_sum($evaluation->part2a['p2a1']) + array_sum($evaluation->part2a['p2a2']);
            };
            return view('be/evaluation/ranking_result',
            compact('ranking', 'addresses','total', 'total_p2a', 'total_p2b', 'total_p2c',
                    'total_p2d', 'total_p3a', 'total_p3b', 'total_p3c', 'total_p3d', 'total_p4a',
                    'total_p4b','total_p2c', 'p2c', 'p4b','total_p4c', 'p4c', 'p2a1', 'p2a2', 'p2a3', 'p2b1', 'p2b2', 'p2d1',
                    'p2d2', 'p3a1', 'p3a2', 'p3a3', 'p3a4', 'p3b1', 'p3b2', 'p3c1', 'p3c2', 'p3d1', 'p3d2', 'p4a1', 'p4a2', 'teachers'));
        
        } else {
            return redirect()->route('ranking')->with('msg', 'khongco');
        }
            }
    public function chart(Request $rq)
    {
        $evaluations = Evaluation::all();
        $date_start = date("Y-m-d H:i:s",strtotime($rq->start));
        $date_end = date("Y-m-d H:i:s",strtotime($rq->end));
        $teachers = Teacher::whereDate('created_at', '>=', $date_start)->whereDate('created_at', '<=', $date_end)->get();
        $rq_location = $rq->id_location;
        $location = Address::find($rq_location);
        // dd($teachers);
        $teacher = Evaluation::where('id_location', $rq_location)
                                ->whereDate('updated_at', '>=', $date_start)
                                ->whereDate('updated_at', '<=', $date_end)
                                ->groupBy('id_teacher')
                                ->select('id_teacher')->get();
        // dd($teacher);
        if (count($teacher)>0) {
                foreach ($teacher as $value) {
                    $evaluations = Evaluation::where('id_location', $rq_location)->where('id_teacher', $value->id_teacher)->get();
                    // dd($evaluations);
                    // $evaluations = array();
                    // echo $evaluations .'<br>';
                    $p2a1 = $p2a2 = $p2a3 = 0;
                    $p2b1 = $p2b2 = $p2c = 0;
                    $p2d1 = $p2d2 = 0;
                    $p3a1 = $p3a2 = $p3a3 = $p3a4 = 0;
                    $p3b1 = $p3b2 = $p3c1 = $p3c2 = 0;
                    $p3d1 = $p3d2 = 0;
                    $p4a1 = $p4a2 = 0;
                    $p4b = $p4c =0;
                    foreach ($evaluations as $evaluation) {
                        // dd($evaluation);
                        $p2a1+= array_sum($evaluation->part2a['p2a1']);
                        $p2a2+= array_sum($evaluation->part2a['p2a2']);
                        $p2a3+= array_sum($evaluation->part2a['p2a3']);
                        $total_p2a = $p2a1+$p2a2+$p2a3;
                        $p2b1+= array_sum($evaluation->part2b['p2b1']);
                        $p2b2+= array_sum($evaluation->part2b['p2b2']);
                        $total_p2b = $p2b1+$p2b2;
                        $p2d1+= array_sum($evaluation->part2d['p2d1']);
                        $p2d2+= array_sum($evaluation->part2d['p2d2']);
                        $total_p2d = $p2d1+$p2d2;
                        $p3a1+= array_sum($evaluation->part3a['p3a1']);
                        $p3a2+= array_sum($evaluation->part3a['p3a2']);
                        $p3a3+= array_sum($evaluation->part3a['p3a3']);
                        $p3a4+= array_sum($evaluation->part3a['p3a4']);
                        $total_p3a = $p3a1+$p3a2+$p3a3+$p3a4;
                        $p3b1+= array_sum($evaluation->part3b['p3b1']);
                        $p3b2+= array_sum($evaluation->part3b['p3b2']);
                        $total_p3b = $p3b1+$p3b2;
                        $p3c1+= array_sum($evaluation->part3c['p3c1']);
                        $p3c2+= array_sum($evaluation->part3c['p3c2']);
                        $total_p3c = $p3c1+$p3c2;
                        $p3d1+= array_sum($evaluation->part3d['p3d1']);
                        $p3d2+= array_sum($evaluation->part3d['p3d2']);
                        $total_p3d = $p3d1+$p3d2;
                        $p4a1+= array_sum($evaluation->part4a['p4a1']);
                        $p4a2+= array_sum($evaluation->part4a['p4a2']);
                        $total_p4a = $p4a1+$p4a2;
                        $p2c+= array_sum($evaluation->part2c['p2c']);
                        $total_p2c = $p2c;
                        $p4b+= array_sum($evaluation->part4b['p4b']);
                        $total_p4b = $p4b;
                        $p4c+= array_sum($evaluation->part4c['p4c']);
                        $total_p4c = $p4c;
                        $total = $total_p2a + $total_p2b + $total_p2c + $total_p2d
                                + $total_p3a + $total_p3b + $total_p3c + $total_p3d
                                +  $total_p4a + $total_p4b + $total_p4c ;
                                // echo $total .'<br>';
                                $tb = $total/count($evaluations);
                    }
                    $chart_teacher[] = array('label' => $evaluation->teacher->fullname, 'y' => 0);
                    $chart_p2a[] = array('label' => $evaluation->teacher->fullname, 'y' => floatval(number_format($total_p2a/count($evaluations), 2)), 'toolTipContent'=> '2a: {y}');
                    $chart_p2b[] = array('label' => $evaluation->teacher->fullname, 'y' => floatval(number_format($total_p2b/count($evaluations), 2)), 'toolTipContent'=> '2b: {y}');
                    $chart_p2c[] = array('label' => $evaluation->teacher->fullname, 'y' => floatval(number_format($total_p2c/count($evaluations), 2)), 'toolTipContent'=> '2c: {y}');
                    $chart_p2d[] = array('label' => $evaluation->teacher->fullname, 'y' => floatval(number_format($total_p2d/count($evaluations), 2)), 'toolTipContent'=> '2d: {y}');
                    $chart_p3a[] = array('label' => $evaluation->teacher->fullname, 'y' => floatval(number_format($total_p3a/count($evaluations), 2)), 'toolTipContent'=> '3a: {y}');
                    $chart_p3b[] = array('label' => $evaluation->teacher->fullname, 'y' => floatval(number_format($total_p2b/count($evaluations), 2)), 'toolTipContent'=> '3b: {y}');
                    $chart_p3c[] = array('label' => $evaluation->teacher->fullname, 'y' => floatval(number_format($total_p3c/count($evaluations), 2)), 'toolTipContent'=> '3c: {y}');
                    $chart_p3d[] = array('label' => $evaluation->teacher->fullname, 'y' => floatval(number_format($total_p3d/count($evaluations), 2)), 'toolTipContent'=> '3d: {y}');
                    $chart_p4a[] = array('label' => $evaluation->teacher->fullname, 'y' => floatval(number_format($total_p4a/count($evaluations), 2)), 'toolTipContent'=> '4a: {y}');
                    $chart_p4b[] = array('label' => $evaluation->teacher->fullname, 'y' => floatval(number_format($total_p4b/count($evaluations), 2)), 'toolTipContent'=> '4b: {y}');
                    $chart_p4c[] = array('label' => $evaluation->teacher->fullname, 'y' => floatval(number_format($total_p4c/count($evaluations), 2)), 'toolTipContent'=> '4c: {y}');
                    $new_evaluations[] = array('label' => $evaluation->teacher->fullname, 'y' => floatval(number_format($tb, 2)));
                    // echo $new_evaluations .'<br>';
                    // dd($new_evaluations);
                };
                $new_evaluations = json_encode($new_evaluations);
                $chart_p2a = json_encode($chart_p2a);
                $chart_p2b = json_encode($chart_p2b);
                $chart_p2c = json_encode($chart_p2c);
                $chart_p2d = json_encode($chart_p2d);
                $chart_p3a = json_encode($chart_p3a);
                $chart_p3b = json_encode($chart_p3b);
                $chart_p3c = json_encode($chart_p3c);
                $chart_p3d = json_encode($chart_p3d);
                $chart_p4a = json_encode($chart_p4a);
                $chart_p4b = json_encode($chart_p4b);
                $chart_p4c = json_encode($chart_p4c);
                $chart_teacher = json_encode($chart_teacher);
                // dd($chart_p2a);
        
                // $new_evaluations = array();
                // $dataset = array(2010 => 240, 2011 => 73, 2012 => 12, 2013 => 240 ,2014 => 30);
                // $new_dataset = array();
        
        
            // foreach($teachers as $teacher) {
            //     $new_dataset[] = array('label' => $teacher->fullname, 'y' => $tb);
            // }
            // $new_dataset = json_encode($new_dataset);
            // dd($new_dataset);
            // foreach($evaluations as $evaluation){
                
            // $new_evaluations[] = array('label' => $evaluation->id_schedules, 'y' => $evaluation->id);
            //     // $point = array("label" => $value->fullname , "y" => $value->sale);
            //     // array_push($data_manager_points, $point);
            // }
            // $new_evaluations = json_encode($new_evaluations);
            // dd($new_evaluations);
            // $json_managers = json_encode($data_manager_points,JSON_NUMERIC_CHECK);
                return view('be.charts.chart_total',
                compact('new_evaluations', 'chart_teacher', 'teacher', 'location',
                'chart_p2a', 'chart_p2b', 'chart_p2c', 'chart_p2d',
                'chart_p3a', 'chart_p3b', 'chart_p3c', 'chart_p3d',
                'chart_p4a', 'chart_p4b', 'chart_p4c'
            ));
        } else {
            return redirect()->back()->with('msg', 'not found data!');
        }
        
    }

    
    
    public function chart_search()
    {
        $addresses = Address::all();
        return view('be/evaluation/chart_search', compact('addresses'));
    }


    public function chart_location()
    {
        // $evaluations = Evaluation::all();
        $location = Evaluation::groupBy('id_location')->select('id_location')->get();
        // dd($location);
        if ($location->isEmpty()) {
            return "fail";
        }
        foreach ($location as $value) {
            // echo $value->id_teacher .'<br>';
            
        $evaluations = Evaluation::where('id_location','like', "%{$value->id_location}%")->get();
        
        // $evaluations = array();
        // print_r($evaluations) .'<br>';
        $p2a1 = $p2a2 = $p2a3 = 0;
        $p2b1 = $p2b2 = $p2c = 0;
        $p2d1 = $p2d2 = 0;
        $p3a1 = $p3a2 = $p3a3 = $p3a4 = 0;
        $p3b1 = $p3b2 = $p3c1 = $p3c2 = 0;
        $p3d1 = $p3d2 = 0;
        $p4a1 = $p4a2 = 0;
        $p4b = $p4c =0;
        foreach ($evaluations as $evaluation) {
            $p2a1+= array_sum($evaluation->part2a['p2a1']);
            $p2a2+= array_sum($evaluation->part2a['p2a2']);
            $p2a3+= array_sum($evaluation->part2a['p2a3']);
            $total_p2a = $p2a1+$p2a2+$p2a3;
            $p2b1+= array_sum($evaluation->part2b['p2b1']);
            $p2b2+= array_sum($evaluation->part2b['p2b2']);
            $total_p2b = $p2b1+$p2b2;
            $p2d1+= array_sum($evaluation->part2d['p2d1']);
            $p2d2+= array_sum($evaluation->part2d['p2d2']);
            $total_p2d = $p2d1+$p2d2;
            $p3a1+= array_sum($evaluation->part3a['p3a1']);
            $p3a2+= array_sum($evaluation->part3a['p3a2']);
            $p3a3+= array_sum($evaluation->part3a['p3a3']);
            $p3a4+= array_sum($evaluation->part3a['p3a4']);
            $total_p3a = $p3a1+$p3a2+$p3a3+$p3a4;
            $p3b1+= array_sum($evaluation->part3b['p3b1']);
            $p3b2+= array_sum($evaluation->part3b['p3b2']);
            $total_p3b = $p3b1+$p3b2;
            $p3c1+= array_sum($evaluation->part3c['p3c1']);
            $p3c2+= array_sum($evaluation->part3c['p3c2']);
            $total_p3c = $p3c1+$p3c2;
            $p3d1+= array_sum($evaluation->part3d['p3d1']);
            $p3d2+= array_sum($evaluation->part3d['p3d2']);
            $total_p3d = $p3d1+$p3d2;
            $p4a1+= array_sum($evaluation->part4a['p4a1']);
            $p4a2+= array_sum($evaluation->part4a['p4a2']);
            $total_p4a = $p4a1+$p4a2;
            $p2c+= array_sum($evaluation->part2c['p2c']);
            $total_p2c = $p2c;
            $p4b+= array_sum($evaluation->part4b['p4b']);
            $total_p4b = $p4b;
            $p4c+= array_sum($evaluation->part4c['p4c']);
            $total_p4c = $p4c;
            $total = $total_p2a + $total_p2b + $total_p2c + $total_p2d
                    + $total_p3a + $total_p3b + $total_p3c + $total_p3d
                    +  $total_p4a + $total_p4b + $total_p4c ;
                    $tb = $total/count($evaluations);
                    // echo $total .'<br>';
        }
        // dd($total);
        $chart_teacher[] = array('label' => $evaluation->location->name, 'y' => 0);
        $chart_p2a[] = array('label' => $evaluation->location->name, 'y' => $total_p2a/count($evaluations), 'toolTipContent'=> '2a: {y}');
        $chart_p2b[] = array('label' => $evaluation->location->name, 'y' => $total_p2b/count($evaluations), 'toolTipContent'=> '2b: {y}');
        $chart_p2c[] = array('label' => $evaluation->location->name, 'y' => $total_p2c/count($evaluations), 'toolTipContent'=> '2c: {y}');
        $chart_p2d[] = array('label' => $evaluation->location->name, 'y' => $total_p2d/count($evaluations), 'toolTipContent'=> '2d: {y}');
        $chart_p3a[] = array('label' => $evaluation->location->name, 'y' => $total_p3a/count($evaluations), 'toolTipContent'=> '3a: {y}');
        $chart_p3b[] = array('label' => $evaluation->location->name, 'y' => $total_p3b/count($evaluations), 'toolTipContent'=> '3b: {y}');
        $chart_p3c[] = array('label' => $evaluation->location->name, 'y' => $total_p3c/count($evaluations), 'toolTipContent'=> '3c: {y}');
        $chart_p3d[] = array('label' => $evaluation->location->name, 'y' => $total_p3d/count($evaluations), 'toolTipContent'=> '3d: {y}');
        $chart_p4a[] = array('label' => $evaluation->location->name, 'y' => $total_p4a/count($evaluations), 'toolTipContent'=> '4a: {y}');
        $chart_p4b[] = array('label' => $evaluation->location->name, 'y' => $total_p4b/count($evaluations), 'toolTipContent'=> '4b: {y}');
        $chart_p4c[] = array('label' => $evaluation->location->name, 'y' => $total_p4c/count($evaluations), 'toolTipContent'=> '4c: {y}');
        $new_evaluations[] = array('label' => $evaluation->location->name, 'y' => $tb);
        // echo $new_evaluations .'<br>';
        // dd($chart_p2b);
        };
        
        $new_evaluations = json_encode($new_evaluations);
        $chart_p2a = json_encode($chart_p2a);
        $chart_p2b = json_encode($chart_p2b);
        $chart_p2c = json_encode($chart_p2c);
        $chart_p2d = json_encode($chart_p2d);
        $chart_p3a = json_encode($chart_p3a);
        $chart_p3b = json_encode($chart_p3b);
        $chart_p3c = json_encode($chart_p3c);
        $chart_p3d = json_encode($chart_p3d);
        $chart_p4a = json_encode($chart_p4a);
        $chart_p4b = json_encode($chart_p4b);
        $chart_p4c = json_encode($chart_p4c);
        $chart_teacher = json_encode($chart_teacher);
        // dd($chart_teacher);

        // $new_evaluations = array();
        // $dataset = array(2010 => 240, 2011 => 73, 2012 => 12, 2013 => 240 ,2014 => 30);
        // $new_dataset = array();

    // dd($new_dataset);
    // foreach($evaluations as $evaluation){
        
    // $new_evaluations[] = array('label' => $evaluation->id_schedules, 'y' => $evaluation->id);
    //     // $point = array("label" => $value->fullname , "y" => $value->sale);
    //     // array_push($data_manager_points, $point);
    // }
    // $new_evaluations = json_encode($new_evaluations);
    // dd($new_evaluations);
    // $json_managers = json_encode($data_manager_points,JSON_NUMERIC_CHECK);
        return view('be/charts/chart_location',
        compact('new_evaluations', 'chart_teacher',
        'chart_p2a', 'chart_p2b', 'chart_p2c', 'chart_p2d',
        'chart_p3a', 'chart_p3b', 'chart_p3c', 'chart_p3d',
        'chart_p4a', 'chart_p4b', 'chart_p4c'
    ));
    }


    public function test_send_email()
    {
        $evaluation = Evaluation::find(69);
        // dd($evaluation);
        Mail::to('datnt@ieg.vn')->cc(['duong.do@ieg.vn', 'hoa.tran@ieg.vn', 'dungntm@ieg.vn', 'tratonia.spicer@ieg.vn', 'james.williams@ieg.vn', 'rivers.moore@ieg.vn', 'peutrus.bornman@ieg.vn', 'trucchi.nguyen@ieg.vn'])->send(new SendmailTeacher($evaluation));
    }
}

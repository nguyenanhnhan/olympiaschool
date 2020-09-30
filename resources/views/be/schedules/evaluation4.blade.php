@extends('be/layouts/index')
@section('title')
Edit Evaluation
@endsection
@section('style')
<style>
    .solid {
        border: 1px solid #00486e;
        padding: 10px;
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

    table {
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid black;
        padding: 5px;
    }

    table,
    td {

        vertical-align: top;
    }

    .none-bot td {
        border-bottom: none !important;
    }

    .none-top td {
        border-top: none !important;
    }

    .basic {
        background-color: #d9ead3;
    }

    td .i-checks {
        vertical-align: bottom;
        text-align: center;
    }

    .tlink {
        position: relative;
        height: 100%;
    }

    .bimg {
        bottom: 0;
        position: absolute;
    }

    .appro {
        background-color: #b6d7a8;
    }

    .compe {
        background-color: #93c47d;
    }

    .outst {
        background-color: #6aa84f;
    }

    .empty-gray {
        background-color: #808080;
    }
    .note-popover .popover-content,
    .panel-heading.note-toolbar {
        display: none;
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
                                <li><span class="bread-blod">Evaluation criteria 4</span>
                                </li>
                            </ul>
                        </div>
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 solid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="tab-content-details mg-b-30">
                        <h2>Evaluation</h2>
                    </div>
                    <div class="tab-content-details mg-b-30">
                        <h3>{{$schedule->session->name}}/{{$schedule->teacher->fullname}}
                        </h3>
                    </div>
                </div>
            </div>
            <form method="post">
                {{ csrf_field() }}
                <input type="text" name="schedule" hidden value="{{$schedule->id}}">
                <input type="text" name="teacher" hidden value="{{$schedule->teacher->id}}">
                <input type="text" name="subject" hidden value="{{$schedule->id_subject}}">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2 pull-right pull-right-pro">Time:</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="data-custon-pick" id="data_1">
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" name="time" class="form-control"
                                                value="{{date('m/d/Y')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2 pull-right pull-right-pro">Lesson content:</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <textarea class="form-control" name="content" id="summernote1" rows="3"></textarea>
                                    {{-- <input type="text" name="content" ta class="form-control" /> --}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2 pull-right pull-right-pro">Objective:</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <textarea class="form-control" name="objective" id="summernote2" cols="30"
                                        rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <label class="login2 pull-right pull-right-pro">Lesson flow:</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <textarea class="form-control" name="lesson_flow" id="summernote3" cols="30"
                                        rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <label class="login2 pull-right pull-right-pro">Strengths:</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <textarea class="form-control" name="strengths" id="summernote4" cols="30"
                                        rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <label class="login2 pull-right pull-right-pro">Areas for
                                        improvement:</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <textarea class="form-control" name="improvement" id="summernote5"
                                        rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <table>
                    <thead>
                        <th></th>
                        <th></th>
                        <th width=20%>Basic(x1)</th>
                        <th width=20%>Approaching(x2)</th>
                        <th width=20%>Competent(x3)</th>
                        <th width=20%>Outstanding(x4)</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="6" style="background-color: #134f5c; color: #fff;">
                                <b>PART 1 - LESSON PLANNING / CRITERIA 4</b>
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td rowspan="6"><b>1. Lesson Planning</b></td>
                            <td rowspan="2"><b>1.1. Objectives</b></td>
                            <td class="basic">
                                <p class="login2 pull-left pull-left-pro">Lesson objective is aligned with level
                                    outcomes.</p>
                            </td>
                            <td class="appro">
                                <p class="login2 pull-left pull-left-pro">Objectives are performance-based </p>
                            </td>
                            <td class="compe">
                                <p class="login2 pull-left pull-left-pro">T anticipates problems and plans solutions.
                                </p>
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_1_1_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_1_1_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_1_1_compe" value="3">
                                </div>
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td rowspan="4"><b>1.2. Sequence & Balance</b></td>
                            <td class="basic">
                                <p class="login2 pull-left pull-left-pro">LP provides brief task description, task aim,
                                    and procedure.</p>
                            </td>
                            <td class="appro">
                                <p class="login2 pull-left pull-left-pro">Lesson is logically staged for each learning
                                    activity to contribute to achieve the lesson outcomes.</p>
                            </td>
                            <td class="compe">
                                <p class="login2 pull-left pull-left-pro">LP shows diagnostic, formative, or summative
                                    assessments </p>
                            </td>
                            <td class="outst">
                                <p class="login2 pull-left pull-left-pro">LP shows an innovative approach in integrating
                                    language skills with communication/ collaboration </p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_1_2_1_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_1_2_1_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_1_2_1_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_1_2_1_outst" value="4">
                                </div>
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td class="empty-gray">
                            </td>
                            <td class="appro">
                                <p class="login2 pull-left pull-left-pro">There is appropriate time allocation to
                                    learning activities and transitions.</p>
                            </td>
                            <td class="compe">
                                <p class="login2 pull-left pull-left-pro">LP shows differentiation principles to
                                    facilitate learning for multiple learner types.</p>
                            </td>
                            <td class="outst">
                                <p class="login2 pull-left pull-left-pro">LP shows an innovative approach in integrating
                                    language skills with creativity/critical thinking</p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="empty-gray">
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_1_2_2_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_1_2_2_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_1_2_2_outst" value="4">
                                </div>
                            </td>
                        </tr>
                        <!--part2-->
                        <tr>
                            <td colspan="6" style="background-color: #134f5c; color: #fff;"><b>PART 2 - CLASSROOM
                                    ENVIRONMENT</b></td>
                        </tr>
                        <tr class="none-bot">
                            <td rowspan="6"><b>2A. Managing Classroom Space, Materials & Procedures</b></td>
                            <td rowspan="2"><b>2A.1. Space</b></td>
                            <td class="basic">
                                <p class="login2 pull-left pull-left-pro">T checks/ ensures Ss' desks and chairs are
                                    arranged for safe movement.</p>
                            </td>
                            <td class="appro">
                                <p class="login2 pull-left pull-left-pro">T checks/ ensures classroom setup allows Ss to
                                    have access to instruction with limited distractions. </p>
                            </td>
                            <td class="empty-gray">
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2a1_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2a1_appro" value="2">
                                </div>
                            </td>
                            <td class="empty-gray">
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td rowspan="2"><strong>2A.2. Materials</strong> </td>
                            <td class="basic">
                                <p class="login2 pull-left pull-left-pro">T provides a variety of materials.</p>
                            </td>
                            <td class="appro">
                                <p class="login2 pull-left pull-left-pro">T provides visually appealing materials.</p>
                            </td>
                            <td class="compe">
                                <p class="login2 pull-left pull-left-pro">T adequately exploits each presented material
                                </p>
                            </td>
                            <td class="outst">
                                <p class="login2 pull-left pull-left-pro">T makes creative use of teaching aids that
                                    highly motivates and challenges Ss</p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2a2_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2a2_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2a2_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2a2_outst" value="4">
                                </div>
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td rowspan="2"><strong>2A.3. Procedures</strong> </td>
                            <td class="basic">
                                <p class="">T gives clear & orderly instructions for transitions and other routines </p>
                            </td>
                            <td class="appro">
                                <p class="login2 pull-left pull-left-pro">T executes transitions & other routines
                                    smoothly with minimal loss of instructional time.</p>

                            </td>
                            <td class="compe">
                                <p class="login2 pull-left pull-left-pro">Ss contribute to carrying out procedures</p>
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2a3_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2a3_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2a3_compe" value="3">
                                </div>
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>

                        <tr class="none-bot">
                            <td rowspan="4"><b>2B. Managing Student Behavior</b></td>
                            <td rowspan="2"><b>2B.1. Setting & Monitoring Rules/Expectations </b></td>
                            <td class="basic">
                                <p>
                                    T clearly states/ displays classroom rules, expectations.
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T demonstrates continuous active supervision across the classroom & activities.
                                </p>
                            </td>
                            <td class="empty-gray">
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2b1_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2b1_appro" value="2">
                                </div>
                            </td>
                            <td class="empty-gray">
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td rowspan="2"><strong>2B.2. Responding to & Fostering Student Behavior</strong> </td>
                            <td class="basic">
                                <p>
                                    T acknowledges Ss' positive behaviors.
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T frequently reminds Ss of expected positive behaviors.
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    T positively & effectively handles misbehaviors without hugely disrupting the class
                                    flow and attention.
                                </p>
                            </td>
                            <td class="outst">
                                <p>
                                    At least 80% Ss follow classroom procedures and show appropriate behavior.
                                </p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2b2_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2b2_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2b2_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2b2_outst" value="4">
                                </div>
                            </td>
                        </tr>

                        <tr class="none-bot">
                            <td rowspan="8"><b>2C. Building characters and promoting academic mindset</b></td>
                            <td rowspan="2"><b>2C. 1. Sense of belonging and interpersonal character</b></td>
                            <td class="basic">
                                <p>
                                    T builds rapport with students
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T demonstrates understanding of Ss & their interests
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    T shows sensitivity to Ss' inclinations.
                                </p>
                            </td>
                            <td class="outst">
                                <p>
                                    Most Ss naturally feel and show caring and empathy with peers and Ts
                                </p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2c1_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2c1_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2c1_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2c1_outst" value="4">
                                </div>
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td rowspan="4"><b>2C.2. Growth mindset, self-efficacy and intrapersonal character</b></td>
                            <td class="basic">
                                <p>
                                    T encourages Ss to keep going until they achieve the lesson objectives/ activities.
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T reinforces high expectations of student effort.
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    Most Ss achieve objectives of the lesson/ activities with T's support/
                                    encouragement.
                                </p>
                            </td>
                            <td class="outst">
                                <p>
                                    Most Ss in class remain at an activity by themselves to complete work of high
                                    quality
                                </p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2c2_1_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2c2_1_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2c2_1_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2c2_1_outst" value="4">
                                </div>
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td class="basic">
                                <p>
                                    T acknowledges Ss' effort and improvement.
                                </p>
                            </td>
                            <td class="empty-gray">
                            </td>
                            <td class="empty-gray">
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2c2_2_basic" value="1">
                                </div>
                            </td>
                            <td class="empty-gray">
                            </td>
                            <td class="empty-gray">
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>

                        <tr class="none-bot">
                            <td rowspan="2"><b>2C.3. Relevance and intellectual character</b></td>
                            <td class="basic">
                                <p>
                                    T shows interest in delivering the lesson.
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T explains the importance of learning/ subject/ lesson content
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    Most Ss demonstrate a genuine desire to understand the lesson
                                </p>
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2c3_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2c3_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_2c3_compe" value="3">
                                </div>
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>
                        {{-- part3 --}}

                        <tr>
                            <td colspan="6" style="background-color: #134f5c; color: #fff;"><b>PART 3 - INSTRUCTION</b>
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td rowspan="10"><b>3A. Communicating with Ss</b></td>
                            <td rowspan="2"><b>3A.1. Setting Objectives</b></td>
                            <td class="basic">
                                <p>
                                    T clearly states lesson objectives verbally/ in written form at the beginning/
                                    throughout the lesson.
                                </p>
                            </td>
                            <td class="appro">
                                <p class="login2 pull-left pull-left-pro">
                                    T helps Ss understand lesson objectives in relation to previous/ future learning.
                                </p>
                            </td>
                            <td class="empty-gray">
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a1_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a1_appro" value="2">
                                </div>
                            </td>
                            <td class="empty-gray">
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td rowspan="2"><strong>3A.2. Giving Instruction</strong> </td>
                            <td class="basic">
                                <p>
                                    T gives/demonstrates clear instructions for each teaching activity.
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T effectively uses ICQs to check Ss' understanding of instructions.
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    T gives detailed instructions of how to achieve satisfactory outcomes in each
                                    activity.
                                </p>
                            </td>
                            <td class="outst">
                                <p>
                                    Most Ss understand and demonstrate what standards are expected of them during each
                                    activity/task.
                                </p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a2_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a2_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a2_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a2_outst" value="4">
                                </div>
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td rowspan="2"><strong>3A.3. Content Delivery & Clarity</strong> </td>
                            <td class="basic">
                                <p class="">
                                    T explains the content correctly.
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T clearly answers Ss' clarification questions.
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    T uses written & verbal language appropriate to Ss' developmental age and
                                    background.</p>
                            </td>
                            <td class="outst">
                                <p>
                                    T explains content imaginatively.
                                </p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a3_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a3_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a3_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a3_outst" value="4">
                                </div>
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td rowspan="4"><strong>3A.4. Promoting the Use of English</strong> </td>
                            <td class="basic">
                                <p class="">
                                    T uses English mostly, only resorting to Vietnamese or the TA's translation when
                                    necessary.
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T provides correct examples of phrases/sentences containing target language.
                                </p>

                            </td>
                            <td class="compe">
                                <p>
                                    T raises Ss' awareness of stresses and intonations in the English language.
                                </p>
                            </td>
                            <td class="outst">
                                <p>
                                    Most Ss confidently use English in class
                                </p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a4_1_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a4_1_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a4_1_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a4_1_outst" value="4">
                                </div>
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td class="basic">
                                <p class="">
                                    T encourages Ss to only use English in class.
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T provides useful basic language so that Ss can effectively communicate in English
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    T uses activities with a logical progression to help Ss develop their abilities to
                                    use English.
                                </p>
                            </td>
                            <td class="outst">
                                <p>
                                    T takes advantage of impromptu exchanges in class to empower Ss to use English more
                                    effectively and/or creatively.
                                </p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a4_2_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a4_2_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a4_2_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3a4_2_outst" value="4">
                                </div>
                            </td>
                        </tr>

                        <tr class="none-bot">
                            <td rowspan="6"><b>3B. Engaging Ss in Learning</b></td>
                            <td rowspan="4"><b>3B.1. Student Engagement</b></td>
                            <td class="basic">
                                <p>
                                    T ensures Ss exhibit body postures indicating that they are paying attention
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T uses suitable lesson pacing that is neither dragged out nor rushed.
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    Most Ss actively work on most assignments rather than watching while their T "works"
                                </p>
                            </td>
                            <td class="outst">
                                <p>
                                    Most Ss are engaged in activities that require high-level cognitive/ knowledge
                                    dimension with content and English
                                </p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3b1_1_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3b1_1_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3b1_1_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3b1_1_outst" value="4">
                                </div>
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td class="basic">
                                <p>
                                    T gives Ss an opportunity for reflection to consolidate their learning after an
                                    activity/lesson.
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T gives Ss opportunities to explain their thought process as part of completing a
                                    task.
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    As Ss explain their thought process, T effectively facilitates the thought process
                                    for struggling Ss.
                                </p>
                            </td>
                            <td class="outst">
                                <p>
                                    As Ss explain their thought process, T effectively further challenges/broadens their
                                    thinking and understanding.
                                </p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3b1_2_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3b1_2_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3b1_2_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3b1_2_outst" value="4">
                                </div>
                            </td>
                        </tr>

                        <tr class="none-bot">
                            <td rowspan="2"><b>3B.2. Scaffolding & Differentiating Instruction</b></td>
                            <td class="basic">
                                <p>
                                    T uses a mix of student-grouping.</p>
                            </td>
                            <td class="appro">
                                <p>
                                    T gives differentiating materials and tasks for different groups based on abilities,
                                    learning preferences, personalities.
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    T effectively executes a variety of scaffolding or differentiation strategies to
                                    cater to the varied needs of Ss.
                                </p>
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3b2_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3b2_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3b2_compe" value="3">
                                </div>
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>

                        <tr class="none-bot">
                            <td rowspan="6"><b>3C. Using Questioning and Discussion Techniques</b></td>
                            <td rowspan="4"><b>3C.1. Low- & High-level Questioning</b></td>
                            <td class="basic">
                                <p>
                                    T gives concise and easy to understand questions.
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T gives open-ended questions that offer multiple possible answers.
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    T incorporates Ss' questions into the lesson, encouraging other Ss to discuss the
                                    questions at hand.
                                </p>
                            </td>
                            <td class="outst">
                                <p>
                                    Most Ss effectively initiate higher-order questions that are appropriate to their
                                    cognitive developmental stage.
                                </p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3c1_1_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3c1_1_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3c1_1_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3c1_1_outst" value="4">
                                </div>
                            </td>
                        </tr>

                        <tr class="none-bot">
                            <td class="basic">
                                <p>
                                    T uses wait time.
                                </p>
                            </td>
                            <td class="empty-gray">
                            </td>
                            <td class="empty-gray">
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3c1_2_basic" value="1">
                                </div>
                            </td>
                            <td class="empty-gray">
                            </td>
                            <td class="empty-gray">
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td rowspan="2"><strong>3C.2. Discussion</strong> </td>
                            <td class="basic">
                                <p>
                                    T creates opportunities for sharing of ideas among the whole class/groups.
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T allows Ss to connect their personal experiences with the subject at hand to
                                    generate interest and discussion.
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    T establishes a real-world connection between Ss and the subject to generate a
                                    class-level interest and productive discussions.
                                </p>
                            </td>
                            <td class="outst">
                                <p>
                                    Ss actively invite comments from classmates/ T during discussion and challenge one
                                    another's thinking.
                                </p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3c2_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3c2_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3c2_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3c2_outst" value="4">
                                </div>
                            </td>
                        </tr>

                        <tr class="none-bot">
                            <td rowspan="8"><b>3D. Using Assessment in Instruction & Feedback</b></td>
                            <td rowspan="2"><b>3D.1. Monitoring of Student Learning with Checks for Understanding</b>
                            </td>
                            <td class="basic">
                                <p>
                                    T assesses assumed prior knowledge of Ss at the beginning of lesson.
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T frequently uses formative assessment techniques to elicit information about
                                    student understanding.
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    T effectively addresses any misconceptions or misunderstanding throughout the lesson
                                    for most Ss.
                                </p>
                            </td>
                            <td class="outst">
                                <p>
                                    Most Ss effectively monitor their own understanding, either on their own initiative
                                    or as a result of tasks set by the T.
                                </p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3d1_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3d1_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3d1_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3d1_outst" value="4">
                                </div>
                            </td>
                        </tr>

                        <tr class="none-bot">
                            <td rowspan="6"><b>3D.2. Feedback to Students</b></td>
                            <td class="basic">
                                <p>
                                    T walks around classroom to monitor learning and/or participation.
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T supports struggling groups/Ss.
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    T gives appropriate feedback to class/group for level of instruction.
                                </p>
                            </td>
                            <td class="outst">
                                <p>
                                    Most Ss are aware of assessment criteria and able to assess themselves
                                </p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3d2_1_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3d2_1_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3d2_1_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3d2_1_outst" value="4">
                                </div>
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td class="basic">
                                <p>
                                    T shows attention to most Ss' works
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T encourages passive Ss to participate in activities/ discussions.
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    T gives appropriate feedback to support individual Ss in accordance with their
                                    needs.
                                </p>
                            </td>
                            <td class="outst">
                                <p>
                                    Most Ss are able to give constructive feedback to their peers without T's support.
                                </p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3d2_2_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3d2_2_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3d2_2_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3d2_2_outst" value="4">
                                </div>
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td class="basic">
                                <p>
                                    T acknowledges Ss' sharing/answers.
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T uses appropriate correction techniques
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    T effectively coaches Ss on how to assess themselves and/or give constructive
                                    feedback on their peers' work.
                                </p>
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3d2_3_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3d2_3_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_3d2_3_compe" value="3">
                                </div>
                            </td>
                            <td class="empty-gray">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="6" style="background-color: #134f5c; color: #fff;">
                                <b>PART 4 - REFLECTION AND RECEIVING FEEDBACK</b>
                            </td>
                        </tr>
                        <tr class="none-bot">
                            <td rowspan="2"><b></b></td>
                            <td rowspan="2"><b></b></td>
                            <td class="basic">
                                <p>
                                    T actively participates in post-observation discussion.
                                </p>
                            </td>
                            <td class="appro">
                                <p>
                                    T can identify strengths & weaknesses of the observed lesson during post-observation
                                    meeting with or without the observer's prompt.
                                </p>
                            </td>
                            <td class="compe">
                                <p>
                                    T can analyze what made areas of the lesson effective or less effective and offer
                                    suggestions/plans to improve themselves.
                                </p>
                            </td>
                            <td class="outst">
                                <p>
                                    There is evidence of effective reflection on feedback, as T establishes sound and
                                    concrete learning points that he/she can apply in future teaching.
                                </p>
                            </td>
                        </tr>
                        <tr class="none-top" style="text-align: center">
                            <td class="basic">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_4a1_basic" value="1">
                                </div>
                            </td>
                            <td class="appro">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_4a1_appro" value="2">
                                </div>
                            </td>
                            <td class="compe">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_4a1_compe" value="3">
                                </div>
                            </td>
                            <td class="outst">
                                <div class="i-checks">
                                    <input type="checkbox" name="part_4a1_outst" value="4">
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>

                <div class="row pd10">
                    <div class="admin-pro-accordion-wrap shadow-inner responsive-mg-b-30">

                        <div class="row pull-right">
                            <input type="submit" class="btn btn-primary mb-2"
                                onclick="return confirm('Are you sure you want to submit the evalution?')"
                                formaction="{{route('evaluation_complete')}}" value="complete">
                            <input type="submit" class="btn btn-primary"
                                onclick="return confirm('Are you sure you want to save to draft?')"
                                formaction="{{route('evaluation_save')}}" value="save to draft">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<!-- icheck JS ============================================ -->
<script src="be/js/icheck/icheck.min.js"></script>
<script src="be/js/icheck/icheck-active.js"></script>
<script src="be/js/datapicker/bootstrap-datepicker.js"></script>
<script src="be/js/datapicker/datepicker-active.js"></script>
@endsection
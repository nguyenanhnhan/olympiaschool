@extends('be/layouts/index')
@section('title')
View Evaluation
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
                                <li><span class="bread-blod">View Evaluation</span>
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
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-md-offset-1 solid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="tab-content-details mg-b-30">
                        <h2>Evaluation criteria {{$evalu->criteria->name}}</h2>
                    
                        <h4>{{$evalu->subject->name}}/{{$evalu->schedule->session->name}}/{{$evalu->teacher->fullname}}
                        </h4>
                    </div>
                </div>
            </div>
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
                                        <input type="text" name="time" class="form-control" value="{{$evalu->test}}">
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
                                <textarea class="form-control" name="content" id="summernote1" cols="30"
                                    rows="6">{!!$evalu->content!!}</textarea>
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
                                    rows="5">{!!$evalu->objective!!}</textarea>
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
                                    rows="5">{!!$evalu->lesson_flow!!}</textarea>
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
                                    rows="4">{!!$evalu->strengths!!}</textarea>
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
                                <textarea class="form-control" name="improvement" id="summernote5" cols="30"
                                    rows="4">{!!$evalu->improvement!!}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="panel-group edu-custon-design" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading accordion-head">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                PART 1 - PRE-REQUISITES</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse panel-ic collapse  in">
                        <div class="panel-body admin-panel-content animated bounce">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="i-checks pull-left">
                                        <label>Teacher is professional and shows respect to all
                                            learners.</label> <br>
                                        <label>Teacher displays solid knowledge of the subject.</label>
                                    </div>
                                    <div class="i-checks pull-right">
                                        <input type="checkbox" @if ($evalu->part1['part_1_1'] == 1)
                                        checked 
                                @else disabled
                                @else disabled
                                        @endif
                                        name="part_1_1" value="1">
                                        <br>
                                        <input type="checkbox" @if ($evalu->part1['part_1_2'] == 2)
                                        checked 
                                @else disabled
                                @else disabled
                                        @endif
                                        name="part_1_2" value="2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

<div class="row" style="overflow-x:auto;">

    <table>
        <thead>
            <th></th>
            <th></th>
            <th width=20%>C?? b???n</th>
            <th width=20%>Ph??t tri???n</th>
            <th width=20%>Th??nh th???c</th>
            <th width=20%>Xu???t s???c</th>
        </thead>
        <tbody>
            <tr>
                <td colspan="6" style="background-color: #134f5c; color: #fff;">
                    <b>PH???N 1: L???P K??? HO???CH & R??T KINH NGHI???M</b>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="8"><b>1A: So???n k??? ho???ch d???y h???c</b></td>
                <td rowspan="2"><b>1A.1. M???c ti??u b??i d???y</b></td>
                <td class="basic">
                    <p class="login2 pull-left pull-left-pro">M???c ti??u b??i h???c d???a tr??n chu???n ?????u ra.</p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">M???c ti??u b??i ???????c vi???t d???a tr??n nh???ng g?? h???c
                        sinh c?? th??? l??m ???????c (vd: d??ng c??c ?????ng t??? trong thang Bloom)</p>
                </td>
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1a1']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p1a1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1a1']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p1a1_appro" value="2">
                    </div>
                </td>
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="4"><b>1A.2. Thi???t k??? ho???t ?????ng v?? ti???n tr??nh d???y h???c</b></td>
                <td class="basic">
                    <p class="login2 pull-left pull-left-pro">V???i m???i b??i t???p/ ho???t ?????ng, k??? ho???ch d???y h???c
                        cung c???p: m?? t??? nhi???m v??? GV-HS, m???c ti??u v?? ti??u ch?? ho??n th??nh c???a b??i t???p/ho???t
                        ?????ng.</p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">B??i h???c ???????c ph??n chia h???p l?? v??? ti???n tr??nh
                        sao cho m???i ho???t ?????ng ?????u h??? tr??? vi???c ?????t m???c ti??u b??i h???c.</p>
                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">K??? ho???ch d???y h???c ????a ra c??c ????nh gi?? ban ?????u,
                        ????nh gi?? qu?? tr??nh ho???c t???ng k???t ????? ki???m so??t vi???c h???c c???a h???c sinh v???i nhi???u n??ng
                        l???c kh??c nhau xuy??n su???t bu???i h???c.</p>
                </td>
                <td class="outst">
                    <p class="login2 pull-left pull-left-pro">K??? ho???ch d???y h???c th??? hi???n m???t c??ch ti???p c???n
                        s??ng t???o trong vi???c t??ch h???p c??c ki???n th???c/ k??? n??ng chuy??n m??n v???i k??? n??ng giao ti???p
                        v??/ho???c h???p t??c, ????ng ???????c nh??n r???ng v?? h??? th???ng h??a.</p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1a2']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p1a2_1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1a2']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p1a2_1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1a2']['compe_1'] == 3)
                        checked
                        @else disabled
                        @endif name="p1a2_1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1a2']['outst_1'] == 4)
                        checked
                        @else disabled
                        @endif
                        name="p1a2_1_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td class="empty-gray">
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">C??c ho???t ?????ng v?? b?????c chuy???n ti???p ho???t ?????ng
                        ???????c ph??n b??? th???i gian h???p l??.</p>
                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">K??? ho???ch d???y h???c th??? hi???n c??c ph????ng ph??p d???y
                        h???c ph??n h??a, h??nh th???c t??? ch???c ph?? h???p, t???o ??i???u ki???n h???c t???p cho c??c d???ng h???c sinh
                        kh??c nhau.</p>
                </td>
                <td class="outst">
                    <p class="login2 pull-left pull-left-pro">K??? ho???ch d???y h???c th??? hi???n m???t c??ch ti???p c???n
                        s??ng t???o trong vi???c t??ch h???p c??c ki???n th???c/ k??? n??ng chuy??n m??n v???i t?? duy s??ng t???o
                        v??/ho???c t?? duy ph???n bi???n, ????ng ???????c nh??n r???ng v?? h??? th???ng h??a.</p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="empty-gray">
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1a2']['appro_2'] == 2)
                        checked
                        @else disabled
                        @endif name="p1a2_2_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1a2']['compe_2'] == 3)
                        checked
                        @else disabled
                        @endif name="p1a2_2_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1a2']['outst_2'] == 4)
                        checked
                        @else disabled
                        @endif
                        name="p1a2_2_outst" value="4">
                    </div>
                </td>
            </tr>

            <tr class="none-bot">
                <td rowspan="2"><b>1A.3. S??? h??a h???c li???u</b></td>
                <td class="basic">
                    <p class="login2 pull-left pull-left-pro">C??c gi??? h???c ?????u c?? nhi???m v???/ phi???u b??i t???p
                        tr?????c- trong-sau gi??? l??n l???p.</p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">X??y d???ng b??i gi???ng ??i???n t??? v??/ ho???c m???t ph???n
                        ho???t ?????ng d???y h???c ???????c c??ng ngh??? h??a.</p>
                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">Gi??o ??n th??? hi???n vi???c ??p d???ng c??ng ngh??? trong
                        c??ng t??c d???y h???c m???t c??ch linh ho???t, s??ng t???o, ????ng nh??n r???ng v?? h??? th???ng h??a.</p>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1a3']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p1a3_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1a3']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p1a3_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1a3']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p1a3_compe" value="3">
                    </div>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="4"><b>1B: Ki???n th???c chuy??n m??n v?? ph????ng ph??p s?? ph???m</b></td>
                <td rowspan="2"><b>1B.1. Ki???n th???c chuy??n m??n</b></td>
                <td class="basic">
                    <p class="login2 pull-left pull-left-pro">K??? ho???ch d???y h???c th??? hi???n gi??o vi??n c?? th??? x??c
                        ?????nh ???????c c??c kh??i ni???m v?? k??? n??ng quan tr???ng c???a m??n h???c/b??i h???c.</p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">N???i dung b??i h???c c?? ki???n th???c m??? r???ng, li??n h???
                        v???i th???c ti???n cu???c s???ng</p>
                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">N???i dung b??i h???c t??ch h???p c??c ki???n th???c n???i
                        m??n v?? li??n m??n</p>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1b1']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p1b1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1b1']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p1b1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1b1']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p1b1_compe" value="3">
                    </div>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="2"><b>1B.2. Ph????ng ph??p s?? ph???m</b></td>
                <td class="basic">
                    <p class="login2 pull-left pull-left-pro">
                        K??? ho???ch d???y h???c cho th???y c??c ph????ng ph??p gi???ng d???y ph?? h???p v???i n???i dung b??i h???c.
                    </p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">
                        K??? ho???ch d???y h???c cho th???y c??c ph????ng ph??p gi???ng d???y ph?? h???p v???i n??ng l???c c???a h???c
                        sinh.
                    </p>
                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">
                        Ph????ng ph??p gi???ng d???y s??? d???ng trong gi??o ??n ho??n to??n ph?? h???p v???i giai ??o???n ph??t
                        tri???n v?? ?????c ??i???m c???a ?????i t?????ng h???c sinh.
                    </p>
                </td>
                <td class="outst">
                    <p class="login2 pull-left pull-left-pro">
                        K??? ho???ch d???y h???c th??? hi???n m???t c??ch ti???p c???n s??ng t???o, linh ho???t c??c ph????ng ph??p d???y
                        h???c hi???n ?????i, truy???n t???i hi???u qu??? c??c ki???n th???c n???i m??n, li??n m??n, ????ng ???????c nh??n
                        r???ng v?? h??? th???ng h??a.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1b2']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p1b2_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1b2']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p1b2_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1b2']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p1b2_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1b2']['outst'] == 4)
                        checked
                        @else disabled
                        @endif name="p1b2_outst" value="4">
                    </div>
                </td>
            </tr>

            <tr class="none-bot">
                <td rowspan="2"><b>1C: R??t kinh nghi???m v?? ti???p nh???n ph???n h???i</b></td>
                <td rowspan="2"></td>
                <td class="basic">
                    <p class="login2 pull-left pull-left-pro">
                        Gi??o vi??n t??ch c???c tham gia vi???c r??t kinh nghi???m sau d??? gi???, c?? ghi ch??p l???i c??c ?????
                        xu???t s???a ?????i. (Vd: l???ng nghe nh???n x??t, ?????t c??u h???i ????? hi???u r?? v???n ?????, th???o lu???n v??
                        ghi ch?? n???u c???n.)
                    </p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">
                        Gi??o vi??n c?? th??? x??c ?????nh ??i???m m???nh v?? ??i???m y???u c???a bu???i h???c ???????c d??? gi??? trong cu???c
                        h???p r??t kinh nghi???m sau ????. (Vd: gi??o vi??n nh??n l???i ch???ng c??? v??? vi???c h???c c???a h???c
                        sinh qua c??c t??nh hu???ng c??? th??? trong l???p...)
                    </p>
                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">
                        Gi??o vi??n c?? th??? ph??n t??ch c??c nguy??n nh??n, y???u t??? t??c ?????ng ?????n s??? hi???u qu???/ k??m
                        hi???u qu??? c???a c??c ho???t ?????ng trong ti???t h???c.
                    </p>
                </td>
                <td class="outst">
                    <p class="login2 pull-left pull-left-pro">C?? ch???ng c??? cho th???y gi??o vi??n ???? ti???p nh???n
                        c??c nh???n x??t m???t c??ch hi???u qu???, khi gi??o vi??n thi???t l???p c??c ??i???m h???c t???p c??? th??? v??
                        r?? r??ng, c?? th??? ??p d???ng trong t????ng lai. (Vd: gi??o vi??n ??p d???ng ph????ng ph??p th???c
                        nghi???m ?????i ch???ng, c?? ghi ch??p trong h??? s?? d???y h???c...)</p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">

                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1c']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p1c_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1c']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p1c_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1c']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p1c_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part1['p1c']['outst'] == 4)
                        checked
                        @else disabled
                        @endif name="p1c_outst" value="4">
                    </div>
                </td>
            </tr>
            <!--part2-->
            <tr>
                <td colspan="7" style="background-color: #134f5c; color: #fff;">
                    <b>PH???N 2: X??Y D???NG V?? QU???N L?? M??I TR?????NG L???P H???C</b>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="6"><b>2A. Qu???n l?? kh??ng gian, quy tr??nh, t??i li???u v?? gi??o c???</b></td>
                <td rowspan="2"><b>2A.1. Kh??ng gian l???p h???c</b></td>
                <td class="basic">
                    <p class="login2 pull-left pull-left-pro">Gi??o vi??n ki???m tra v??/ho???c ?????m b???o b??n gh???
                        v??/ho???c gi??o c??? ???????c s???p x???p an to??n, thu???n ti???n cho vi???c di chuy???n.</p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">Gi??o vi??n ki???m tra v??/ho???c ?????m b???o c??ch b??? tr??
                        l???p h???c h???n ch??? g??y xao nh??ng cho h???c sinh trong qu?? tr??nh h???c.</p>
                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">Gi??o vi??n b??? tr??, t??? ch???c v?? s??? d???ng kh??ng
                        gian t???i ??u h??a s??? t????ng t??c trong l???p h???c (GV v???i HS, HS v???i HS,...).
                    </p>
                </td>
                <td class="outst">
                    <p class="login2 pull-left pull-left-pro">Gi??o vi??n b??? tr?? l???p h???c v?? s??? d???ng kh??ng gian
                        s??ng t???o, thu h??t h???c sinh v??o ho???t ?????ng d???y h???c, ????ng ???????c nh??n r???ng v?? h??? th???ng
                        h??a.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2a1']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p2a1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2a1']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p2a1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2a1']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p2a1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2a1']['outst'] == 4)
                        checked
                        @else disabled
                        @endif name="p2a1_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="2"><strong>2A.2. Qui tr??nh l???p h???c</strong> </td>
                <td class="basic">
                    <p class="login2 pull-left pull-left-pro">Gi??o vi??n ????a ra h?????ng d???n r?? r??ng v?? c?? tr??nh
                        t??? cho ph???n chuy???n ho???t ?????ng v?? c??c quy tr??nh kh??c trong l???p (VD: ph??t t??i li???u,
                        ch??o h???i, ngh??? gi???a gi???,...)</p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">Gi??o vi??n th???c hi???n ti???n tr??nh chuy???n ho???t
                        ?????ng v?? c??c quy tr??nh kh??c m???t c??ch tr??n tru v?? th???i gian gi???ng d???y b??? m???t kh??ng ???nh
                        h?????ng ?????n th???i l?????ng gi??? h???c.
                    </p>
                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">H???c sinh g??p ph???n t??? qu???n l?? nh??m, vi???c chuy???n
                        ho???t ?????ng, ph??n ph??t t??i li???u/gi??o c???, v??/ho???c c??c ho???t ?????ng kh??c trong quy tr??nh
                        l???p h???c.
                    </p>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2a2']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p2a2_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2a2']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p2a2_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2a2']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p2a2_compe" value="3">
                    </div>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="2"><strong>2A.3. Gi??o c??? v?? t??i li???u h???c t???p</strong> </td>
                <td class="basic">
                    <p class="">Gi??o vi??n s??? d???ng ??a d???ng c??c lo???i t??i li???u, bao g???m c??ng ngh???, ph???n
                        m???m/gi??o c??? s???.</p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">C??c t??i li???u ???????c thi???t k???/ tr??nh b??y r?? r??ng,
                        b???t m???t.</p>

                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">Gi??o vi??n khai th??c v?? s??? d???ng ????ng m???c t???ng
                        lo???i t??i li???u (v??? m???t ph??n b??? th???i gian, ????? bao qu??t l???p, khai th??c n???i dung) ????? h???
                        tr??? m???c ti??u c???a b??i h???c v?? t???ng ho???t ?????ng d???y h???c.</p>
                </td>
                <td class="outst">
                    <p class="login2 pull-left pull-left-pro">Gi??o vi??n s??? d???ng c??ng c??? gi???ng d???y v??/ ho???c
                        c??ng ngh??? s??ng t???o, c?? kh??? n??ng g??y h???ng th??, t?? m?? v?? th??? th??ch cao ?????i v???i h???c
                        sinh, ????ng ???????c nh??n r???ng v?? h??? th???ng h??a.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2a3']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p2a3_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2a3']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p2a3_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2a3']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p2a3_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2a3']['outst'] == 4)
                        checked
                        @else disabled
                        @endif name="p2a3_outst" value="4">
                    </div>
                </td>
            </tr>

            <tr class="none-bot">
                <td rowspan="4"><b>2B. Qu???n l?? h??nh vi h???c sinh</b></td>
                <td rowspan="2"><b>2B.1. Thi???t l???p v?? duy tr?? quy ?????nh, n??? n???p l???p h???c </b></td>
                <td class="basic">
                    <p>
                        Gi??o vi??n ph??? bi???n v??/ho???c tr??nh b??y m???t c??ch r?? r??ng c??c nguy??n t???c v?? mong ?????i
                        trong l???p h???c.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n li??n t???c bao qu??t, gi??m s??t l???p h???c v?? c??c ho???t ?????ng ????? ph??t hi???n c??c h??nh
                        vi kh??ng mong ?????i c???a h???c sinh, ?????m b???o duy tr?? vi???c th???c hi???n quy ?????nh, n??? n???p l???p
                        h???c.
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
                        <input type="checkbox" @if ($evalu->part2['p2b1']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p2b1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2b1']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p2b1_appro" value="2">
                    </div>
                </td>
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="2"><strong>2B.2. Ph???n h???i v?? c???ng c??? h??nh vi (l???i n??i, vi???c l??m) c???a h???c
                        sinh</strong> </td>
                <td class="basic">
                    <p>
                        Gi??o vi??n ghi nh???n nh???ng h??nh vi (l???i n??i, vi???c l??m) t??ch c???c c???a h???c sinh.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n th?????ng xuy??n nh???c nh??? h???c sinh th???c hi???n nh???ng h??nh vi t??ch c???c (l???i n??i,
                        vi???c l??m).
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n x??? l?? c??c h??nh vi kh??ng mong ?????i m???t c??ch t??ch c???c v?? hi???u qu??? (vd: chuy???n
                        h?????ng c??c h??nh vi kh??ng mong ?????i sang h??nh vi thay th???, ti???p c???n h???c sinh, t???m ng??ng
                        ho???t ?????ng c???a h???c sinh, n??i chuy???n v???i h???c sinh) m?? kh??ng l??m ???nh h?????ng qu?? l???n ?????n
                        s??? ch?? ?? c???a c??c h???c sinh kh??c v?? ti???n tr??nh c???a l???p h???c.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        H???u h???t h???c sinh tu??n theo qui t???c, ti???n tr??nh gi???ng d???y v?? lu??n th??? hi???n c??c h??nh
                        vi mong ?????i, ph?? h???p.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2b2']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p2b2_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2b2']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p2b2_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2b2']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p2b2_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2b2']['outst'] == 4)
                        checked
                        @else disabled
                        @endif name="p2b2_outst" value="4">
                    </div>
                </td>
            </tr>

            <tr class="none-bot">
                <td rowspan="8"><b>2C. X??y d???ng v??n h??a h???c t???p & t??nh c??ch h???c sinh</b></td>
                <td rowspan="2"><b>2C.1. Quan t??m & k???t n???i (T??nh c??ch ?????i ngo???i)</b></td>
                <td class="basic">
                    <p>
                        Gi??o vi??n th??m h???i v??? nh???ng s??? th??ch, m???i quan t??m v??/ho???c c??c tr???i nghi???m c?? nh??n
                        c???a h???c ngo??i l???p h???c v?? tr?????ng h???c.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n th??? hi???n s??? nh???y c???m ?????i v???i c??c xu h?????ng c?? nh??n c???a h???c sinh (vd: gi??o
                        vi??n kh??ng th??? hi???n th??nh ki???n ?????i v???i t??m t??nh, c?? t??nh, hay gi???i t??nh c???a h???c
                        sinh).
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n th??? hi???n s??? th???u hi???u h???c sinh v?? c??c s??? th??ch c???a h???c sinh th??ng qua
                        nh???ng t????ng t??c gi??o vi??n - h???c sinh trong su???t bu???i h???c.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Ph???n l???n h???c sinh c???m nh???n v?? th??? hi???n s??? quan t??m v?? c???m th??ng m???t c??ch t??? nhi??n
                        ?????i v???i b???n b?? v?? gi??o vi??n trong su???t bu???i h???c.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2c1']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p2c1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2c1']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p2c1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2c1']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p2c1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2c1']['outst'] == 4)
                        checked
                        @else disabled
                        @endif name="p2c1_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="4"><b>2C.2. N??? l???c v?? ki??n ?????nh (T??nh c??ch ?????i n???i)</b></td>
                <td class="basic">
                    <p>
                        Gi??o vi??n khuy???n kh??ch h???c sinh n??? l???c cho ?????n khi h???c sinh ?????t ???????c m???c ti??u gi???
                        h???c (ph?? h???p v???i b???n th??n).
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n h?????ng d???n, h??? tr??? th???c hi???n nhi???m v??? v?? m???c ti??u ho???t ?????ng ph?? h???p v???i
                        n??ng l???c c???a HS.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Ph???n l???n h???c sinh ?????t ???????c y??u c???u c???a b??i h???c v??/ ho???c c???a ho???t ?????ng.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Ph???n l???n h???c sinh ch?? t??m, t??? ho??n t???t nhi???m v???/ b??i t???p/ ho???t ?????ng ???????c giao v???i
                        ch???t l?????ng t???t nh???t trong kh??? n??ng c???a h???c sinh.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">

                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2c2']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p2c2_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2c2']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p2c2_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2c2']['compe_1'] == 3)
                        checked
                        @else disabled
                        @endif name="p2c2_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2c2']['outst_1'] == 4)
                        checked
                        @else disabled
                        @endif name="p2c2_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td class="basic">
                    <p>
                        Gi??o vi??n ghi nh???n n??? l???c v?? ti???n b??? c???a h???c sinh (b???ng c??? ch???, l???i n??i, ??nh m???t,
                        l???i nh???n x??t).
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
                        <input type="checkbox" @if ($evalu->part2['p2c2']['basic_2'] == 1)
                        checked
                        @else disabled
                        @endif name="p2c2_basic" value="1">
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
                <td rowspan="2"><b>2C.3. T?? m?? v?? ??am m?? (T??nh c??ch t?? duy)</b></td>
                <td class="basic">
                    <p>
                        Gi??o vi??n th??? hi???n s??? h???ng th?? & n??ng l?????ng t??ch c???c (vd: th??ng qua c??? ch???, gi???ng
                        n??i, ng??? ??i???u...) khi gi???ng b??i.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n l?? gi???i t???m quan tr???ng, ?? ngh??a c???a b??i h???c, c???a m??n h???c v??/ho???c c???a vi???c
                        h???c, ph??t tri???n b???n th??n n??i chung.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Ph???n l???n h???c sinh th??? hi???n s??? y??u th??ch h???c t???p t??? nhi??n v?? t??ch c???c, mu???n t??m hi???u
                        s??u/ r???ng h??n v??? n???i dung b??i h???c.
                    </p>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2c3']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p2c3_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2c3']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p2c3_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part2['p2c3']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p2c3_compe" value="3">
                    </div>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            {{-- part3 --}}

            <tr>
                <td colspan="7" style="background-color: #134f5c; color: #fff;"><b>PH???N 3: GI???NG D???Y</b>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="6"><b>3A. Giao ti???p v???i h???c sinh</b></td>
                <td rowspan="2"><b>3A.1. Thi???t l???p m???c ti??u</b></td>
                <td class="basic">
                    <p>
                        Gi??o vi??n ph??? bi???n m???c ti??u b??i h???c b???ng l???i v??/ ho???c vi???t ??? th???i ??i???m th??ch h???p,
                        ph?? h???p v???i ti???n tr??nh c???a ti???t h???c.
                    </p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">
                        Gi??o vi??n gi??p h???c sinh hi???u ???????c c??c m???c ti??u c???a bu???i h???c trong t????ng quan v???i
                        ki???n th???c ???? h???c tr?????c ???? v??/ ho???c s??? h???c sau n??y.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n th?????ng xuy??n h??? tr??? h???c sinh theo d??i ti???n ????? h???c d???a v??o m???c ti??u c???a b??i
                        gi???ng v??/ ho???c m???c ti??u c???a ho???t ?????ng.
                    </p>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3a1']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p3a1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3a1']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p3a1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3a1']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p3a1_compe" value="3">
                    </div>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="2"><strong>3A.2. H?????ng d???n th???c hi???n nhi???m v???</strong> </td>
                <td class="basic">
                    <p>
                        Gi??o vi??n ????a ra h?????ng d???n r?? r??ng cho t???ng ho???t ?????ng.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n s??? d???ng hi???u qu??? c??c c??u h???i ki???m tra kh??? n??ng ti???p thu h?????ng d???n, hi???u
                        nhi???m v??? (ICQ) c???a h???c sinh.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n ????a ra h?????ng d???n chi ti???t v??? ph????ng ph??p ????? ?????t ???????c k???t qu??? th???a m??n y??u
                        c???u trong m???i ho???t ?????ng.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Ph???n l???n h???c sinh hi???u v?? th???c hi???n ????ng nh???ng ti??u chu???n chuy??n m??n ???????c y??u c???u
                        trong m???i ho???t ?????ng/ b??i h???c.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3a2']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p3a2_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3a2']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p3a2_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3a2']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p3a2_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3a2']['outst'] == 4)
                        checked
                        @else disabled
                        @endif name="p3a2_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="2"><strong>3A.3. Truy???n ?????t n???i dung chuy??n m??n</strong> </td>
                <td class="basic">
                    <p class="">
                        Gi??o vi??n truy???n ?????t ch??nh x??c ki???n th???c c?? b???n.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n tr??? l???i nh???ng c??u h???i l??m r?? th???c m???c c???a h???c sinh m???t c??ch r?? r??ng.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n d??ng ng??n ng??? n??i, vi???t v?? ng??n ng??? h??nh th??? ph?? h???p v???i ????? tu???i ph??t
                        tri???n v?? ho??n c???nh c???a h???c sinh.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Gi??o vi??n gi???i th??ch n???i dung h???c m???t c??ch s??ng t???o v?? hi???u qu???. (vd: s??? d???ng ph??p
                        ???n d???, suy lu???n, so s??nh c??ng v???i v???n t??? v???ng phong ph?? ????? l??m sinh ?????ng n???i dung
                        b??i h???c)
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3a3']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p3a3_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3a3']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p3a3_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3a3']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p3a3_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3a3']['outst'] == 4)
                        checked
                        @else disabled
                        @endif name="p3a3_outst" value="4">
                    </div>
                </td>
            </tr>

            <tr class="none-bot">
                <td rowspan="10"><b>3B. Ph??t huy s??? tham gia c???a h???c sinh</b></td>
                <td rowspan="6"><b>3B.1. Thu h??t s??? quan t??m, tham gia c???a h???c sinh </b></td>
                <td class="basic">
                    <p>
                        Gi??o vi??n ?????m b???o h???c sinh c?? t?? th??? s???n s??ng ti???p nh???n, t???p trung v??o b??i gi???ng,
                        c??c ho???t ?????ng, c??c b???n trong l???p v?? t??i li???u d???y - h???c.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n s??? d???ng nh???p ????? b??i gi???ng ph?? h???p kh??ng qu?? d??n tr???i, ch???m ho???c g???p g??p.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Ph???n l???n h???c sinh ch??? ?????ng tham gia v??o c??c ho???t ?????ng h???c t???p thay v?? ch??? quan s??t
                        gi??o vi??n gi???ng b??i.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Khi h???c sinh gi???i th??ch qu?? tr??nh suy ngh?? c???a m??nh, gi??o vi??n ti???p t???c th??? th??ch
                        m???t c??ch hi???u qu???, m??? r???ng suy ngh??, hi???u bi???t c???a h???c sinh.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b1']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p3b1_1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b1']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p3b1_1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b1']['compe_1'] == 3)
                        checked
                        @else disabled
                        @endif name="p3b1_1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b1']['outst_1'] == 4)
                        checked
                        @else disabled
                        @endif name="p3b1_1_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td class="basic">
                    <p>
                        Gi??o vi??n ????a ra c??c ho???t ?????ng nh???m m???c ????ch kh??m ph?? (vd: ????? t???o ra ?? t?????ng m???i,
                        kh??m ph?? c??c c??u h???i v?? c??c kh??? n??ng, thi???t k??? v?? ??i???u tra s?? b???,...).
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n t???o c?? h???i cho h???c sinh gi???i th??ch v??? qu?? tr??nh t?? duy ????? ho??n th??nh nhi???m
                        v??? h???c.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Khi h???c sinh gi???i th??ch qu?? tr??nh suy ngh??, gi??o vi??n h??? tr??? v?? th??c ?????y t?? duy cho
                        c??c h???c sinh g???p kh?? kh??n.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Ph???n l???n h???c sinh c?? th??? gi???i th??ch t?? duy m???t c??ch hi???u qu???, b???ng nh???ng l???p lu???n
                        logic, b???ng ch???ng thuy???t ph???c (qua b??i vi???t v??/ho???c n??i).
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b1']['basic_2'] == 1)
                        checked
                        @else disabled
                        @endif name="p3b1_2_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b1']['appro_2'] == 2)
                        checked
                        @else disabled
                        @endif name="p3b1_2_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b1']['compe_2'] == 3)
                        checked
                        @else disabled
                        @endif name="p3b1_2_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b1']['outst_2'] == 4)
                        checked
                        @else disabled
                        @endif name="p3b1_2_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td class="basic">
                    <p>
                        Gi??o vi??n t???o c?? h???i cho h???c sinh suy ngh??, ????c k???t ????? c??ng c??? vi???c h???c sau m???i ho???t
                        ?????ng d???y/b??i h???c
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n t???o ra nh???ng t??nh hu???ng m???i v??/ ho???c c??c ho???t ?????ng m??? r???ng ????? h???c sinh ??p
                        d???ng c??c k??? n??ng/kh??i ni???m v???a h???c.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Ph???n l???n h???c sinh ???????c tham gia v??o c??c ho???t ?????ng b???c cao v??? chi???u ki???n th???c v??/ho???c
                        chi???u t?? duy (t????ng ??????ng v???i thang Bloom ho???c DoK).
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Ph???n l???n h???c sinh ch??? ?????ng giao ti???p, trao ?????i trong l???p h???c, v???i t???ng s??? th???i gian
                        n??i c???a h???c sinh chi???m h??n 50% ti???t h???c.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b1']['basic_3'] == 1)
                        checked
                        @else disabled
                        @endif name="p3b1_3_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b1']['appro_3'] == 2)
                        checked
                        @else disabled
                        @endif name="p3b1_3_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b1']['compe_3'] == 3)
                        checked
                        @else disabled
                        @endif name="p3b1_3_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b1']['outst_3'] == 4)
                        checked
                        @else disabled
                        @endif name="p3b1_3_outst" value="4">
                    </div>
                </td>
            </tr>

            <tr class="none-bot">
                <td rowspan="2"><b>3B.2. L??m vi???c nh??m</b></td>
                <td class="basic">
                    <p>
                        Gi??o vi??n s??? d???ng c??c c??ch ph??n chia nh??m h???c sinh kh??c nhau.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n s??? d???ng t??i li???u v??/ho???c ho???t ?????ng d???y h???c ph??n h??a cho c??c nh??m h???c sinh
                        kh??c nhau d???a tr??n n??ng l???c, ph????ng th???c h???c v?? t??nh c??ch.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n s??? d???ng hi???u qu??? nhi???u chi???n l?????c, k?? thu???t h?????ng d???n, ki???n t???o t?? duy v??
                        d???y h???c ph??n h??a ph?? h???p v???i nhu c???u kh??c nhau c???a h???c sinh. (vd: c??c ho???t ?????ng/b??i
                        t???p kh?? ???????c ????n gi???n h??a, d???y ch???m l???i, luy???n t???p th??m ho???c b??? qua; c??c ho???t
                        ?????ng/b??i t???p d??? ???????c t??ng ????? kh??)
                    </p>
                </td>
                <td class="outst">
                    <p>
                        H???c sinh ch??? ?????ng ????a ra c??c s??ng ki???n h???p l??, c?? c?? s??? ????? ??i???u ch???nh b??i h???c cho
                        ph?? h???p. vd: (1) s???a m???t b??i t???p sao cho h???p l?? v?? ph?? h???p v???i nhu c???u c???a b???n th??n,
                        (2) g???i ?? thay ?????i v??? m?? h??nh l??m vi???c nh??m, (3) g???i ?? thay ?????i ho???c b??? sung v??o c??c
                        t??i li???u (4) l???a ch???n l??m vi???c c?? nh??n, theo c???p, theo nh??m ho???c theo m???t h??nh th???c
                        kh??c.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b2']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p3b2_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b2']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p3b2_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b2']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p3b2_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b2']['outst'] == 4)
                        checked
                        @else disabled
                        @endif name="p3b2_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="2"><b>3B.3. D???y h???c ph??n h??a</b></td>
                <td class="basic">
                    <p>
                        Gi??o vi??n t???o c?? h???i l??m vi???c nh??m cho h???c sinh.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n h??? tr??? c??c nh??m h???c sinh g???p kh?? kh??n (vd: ????a ra g???i ??, t???o ??i???u ki???n cho
                        ti???n tr??nh ho???t ?????ng nh??m ???????c thu???n l???i).
                    </p>
                </td>
                <td class="compe">
                    <p>Gi??o vi??n ????ng g??p ?? ki???n ph??n t??ch, ph???n h???i v??? m???t chuy??n m??n/ h???c thu???t cho nh??m.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Ph???n l???n h???c sinh c?? th??? l??m vi???c ?????c l???p v?? hi???u qu??? trong nh??m m?? c???n ??t h??? tr??? t???
                        gi??o vi??n.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b3']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p3b3_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b3']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p3b3_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b3']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p3b3_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3b3']['outst'] == 4)
                        checked
                        @else disabled
                        @endif name="p3b3_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="6"><b>3C. ?????t c??u h???i & Th???o lu???n </b></td>
                <td rowspan="4"><b>3C.1. ?????t c??u h???i </b></td>
                <td class="basic">
                    <p>
                        Gi??o vi??n ?????t c??c c??u h???i s??c t??ch v?? d??? hi???u.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n ?????t c??c c??u h???i m???, v???i nhi???u kh??? n??ng tr??? l???i, ????? khai th??c hi???u bi???t c???a
                        h???c sinh (tuy v???n c?? th??? l?? nh???ng c??u h???i t?? duy b???c th???p).
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n t??ch h???p c??u h???i c???a h???c sinh v??o b??i h???c v?? ??i???u ph???i hi???u qu??? c??c h???c
                        sinh kh??c th???o lu???n nh???ng c??u h???i ????.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Ph???n l???n h???c sinh ch??? ?????ng ?????t ra c??c c??u h???i t?? duy b???c cao (qua b??i vi???t v??/ho???c
                        n??i) hi???u qu??? v?? ph?? h???p v???i giai ??o???n ph??t tri???n nh???n th???c c???a h???c sinh.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3c1']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p3c1_1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3c1']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p3c1_1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3c1']['compe_1'] == 3)
                        checked
                        @else disabled
                        @endif name="p3c1_1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3c1']['outst_1'] == 4)
                        checked
                        @else disabled
                        @endif name="p3c1_1_outst" value="4">
                    </div>
                </td>
            </tr>

            <tr class="none-bot">
                <td class="basic">
                    <p>Gi??o vi??n c?? th???i gian ch??? sau khi ?????t c??u h???i.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n ch??? ?????ng t???o nhi???u c?? h???i cho h???c sinh ?????t c??u h???i v?? h??? tr??? h???c sinh
                        c??ch ?????t c??u h???i.
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
                        <input type="checkbox" @if ($evalu->part3['p3c1']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p3c1_2_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3c1']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p3c1_2_appro" value="2">
                    </div>
                </td>
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="2"><strong>3C.2. Th???o lu???n</strong> </td>
                <td class="basic">
                    <p>
                        Gi??o vi??n t???o c?? h???i ????? h???c sinh ???????c chia s??? ?? t?????ng/ ?? ki???n trong l???p/nh??m.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n li??n h??? tr???i nghi???m c?? nh??n c???a h???c sinh v??o b??i h???c ????? t???o h???ng th?? cho
                        h???c sinh c??ng nh?? th??c ?????y ho???t ?????ng th???o lu???n.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n li??n h??? th???c ti???n cu???c s???ng/ th??? gi???i v??o b??i h???c nh???m t???o h???ng th?? cho c???
                        l???p c??ng nh?? th??c ?????y c??c ho???t ?????ng th???o lu???n hi???u qu???.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        H???c sinh ch??? ?????ng y??u c???u v?? ti???p nh???n nh???n x??t c???a b???n h???c/gi??o vi??n trong qu??
                        tr??nh th???o lu???n v?? ?????t c??u h???i th??c ?????y t?? duy cho b???n kh??c.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3c2']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p3c2_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3c2']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p3c2_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3c2']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p3c2_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3c2']['outst'] == 4)
                        checked
                        @else disabled
                        @endif name="p3c2_outst" value="4">
                    </div>
                </td>
            </tr>

            <tr class="none-bot">
                <td rowspan="6"><b>3D. ????nh gi?? trong h?????ng d???n v?? ph???n h???i </b></td>
                <td rowspan="2"><b>3D.1. Gi??m s??t vi???c h???c th??ng qua ki???m tra vi???c hi???u nhi???m v??? v?? ki???n
                        th???c c???a h???c sinh</b>
                </td>
                <td class="basic">
                    <p>
                        Gi??o vi??n ????nh gi?? ki???n th???c s???n c?? c???a h???c sinh tr?????c khi b???t ?????u b??i d???y (vd s???
                        d???ng b??i ki???m tra nhanh, ??i???m s???, v.v.).
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n th?????ng xuy??n s??? d???ng c??c k?? thu???t ????nh gi?? qu?? tr??nh (vd:c??c c??u h???i c??
                        ch??? ????ch-CCQs, v.v) ????? g???i ra c??c th??ng tin v??? s??? hi???u bi???t c???a h???c sinh.
                    </p>
                </td>
                <td class="compe">
                    <p>Gi??o vi??n gi???i quy???t hi???u qu??? b???t k?? hi???u bi???t hay quan ni???m sai l???m trong su???t qu??
                        tr??nh b??i h???c cho h???u h???t h???c sinh.
                    </p>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3d1']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p3d1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3d1']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p3d1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3d1']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p3d1_compe" value="3">
                    </div>
                </td>
                <td class="empty-gray">
                </td>
            </tr>

            <tr class="none-bot">
                <td rowspan="4"><b>3D.2.Ph???n h???i cho h???c sinh </b></td>
                <td class="basic">
                    <p>
                        Gi??o vi??n ch?? ?? ?????n b??i l??m (vi???t, n??i, s???n ph???m) c???a h???c sinh.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n khuy???n kh??ch c??c h???c sinh th??? ?????ng tham gia v??o c??c ho???t ?????ng/ th???o lu???n.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n ????a ra ?? ki???n ph???n h???i ph?? h???p ????? h??? tr??? c??c c?? nh??n h???c sinh theo nhu c???u
                        ri??ng c???a m???i h???c sinh. (vd. ch??? ra ??i???m m???nh, ??i???m y???u c???a c?? nh??n, v??/ho???c c??ch
                        th???c ????? c???i thi???n vi???c h???c d???a tr??n th??? hi???n c???a h???c sinh).
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Ph???n l???n h???c sinh n???m ???????c c??c ti??u ch?? ????nh gi?? v?? c?? th??? t??? ????nh gi?? b???n th??n theo
                        c??c ti??u ch?? ????.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3d2']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p3d2_1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3d2']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p3d2_1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3d2']['compe_1'] == 3)
                        checked
                        @else disabled
                        @endif name="p3d2_1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3d2']['outst_1'] == 4)
                        checked
                        @else disabled
                        @endif name="p3d2_1_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td class="basic">
                    <p>
                        Gi??o vi??n di chuy???n trong l???p ????? gi??m s??t vi???c h???c v??/ho???c s??? tham gia, c??c h??nh vi
                        c???a h???c sinh.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n s??? d???ng c??c ph????ng ph??p ch???a l???i ph?? h???p (b???ng l???i n??i, ch??? vi???t).
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n h?????ng d???n h???c sinh m???t c??ch hi???u qu??? v??? c??ch ????a ph???n h???i mang t??nh x??y
                        d???ng cho s???n ph???m/b??i l??m c???a b???n.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Ph???n l???n h???c sinh c?? th??? ????ng g??p ?? ki???n ph???n h???i mang t??nh x??y d???ng cho b???n m??
                        kh??ng c???n s??? h??? tr??? c???a gi??o vi??n.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3d2']['basic_2'] == 1)
                        checked
                        @else disabled
                        @endif name="p3d2_2_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3d2']['appro_2'] == 2)
                        checked
                        @else disabled
                        @endif name="p3d2_2_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3d2']['compe_2'] == 3)
                        checked
                        @else disabled
                        @endif name="p3d2_2_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3d2']['outst_2'] == 4)
                        checked
                        @else disabled
                        @endif name="p3d2_2_outst" value="4">
                    </div>
                </td>
            </tr>

            @if ($evalu->criteria_id == 1)
            <tr class="none-bot">
                <td rowspan="4"><b>3E. Ph??t tri???n n??ng l???c ?????c th?? b??? m??n </b></td>
                <td rowspan="4"><b>3E.1. Ti???ng Anh </b>
                </td>
                <td class="basic">
                    <p>
                        Gi??o vi??n ph???n l???n s??? d???ng Ti???ng Anh trong l???p h???c, ch??? s??? d???ng Ti???ng Vi???t ho???c
                        phi??n d???ch c???a tr??? gi???ng khi th???t s??? c???n thi???t, trong nh???ng t??nh hu???ng kh?? kh??n.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n cung c???p ng??n ng??? c?? b???n, h???u ??ch ????? h???c sinh c?? th??? giao ti???p, di???n ?????t
                        b???ng ti???ng Anh chuy??n ng??nh hi???u qu???.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n t???n d???ng t????ng t??c ng???u h???ng, trao quy???n cho h???c sinh s??? d???ng ti???ng Anh
                        hi???u qu??? v??/ho???c s??ng t???o h??n.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        H???u h???t h???c sinh s??? d???ng ti???ng Anh trong gi??? h???c v???i t???ng th???i gian s??? d???ng ti???ng
                        Anh ?????t h??n 80% b??i h???c.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p3e1_1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p3e1_1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['compe_1'] == 3)
                        checked
                        @else disabled
                        @endif name="p3e1_1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['outst_1'] == 4)
                        checked
                        @else disabled
                        @endif name="p3e1_1_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td class="empty-gray">
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n t???o nhi???u c?? h???i ph??t tri???n t??ch h???p c??c k??? n??ng Ti???ng Anh (nghe - n??i -
                        ?????c - vi???t).
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n th?????ng xuy??n nh???c nh??? v?? ??i???u ch???nh h???c sinh v??? ph??t ??m v?? ng??? ??i???u s???
                        d???ng Ti???ng Anh.
                    </p>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="empty-gray">
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['appro_2'] == 2)
                        checked
                        @else disabled
                        @endif name="p3e1_2_appro" value="4">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['compe_2'] == 3)
                        checked
                        @else disabled
                        @endif name="p3e1_2_compe" value="3">
                    </div>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            @elseif ($evalu->criteria_id == 2)
            <tr class="none-bot">
                <td rowspan="4"><b>3E. Ph??t tri???n n??ng l???c ?????c th?? b??? m??n </b></td>
                <td rowspan="4"><b>3E.2. X?? h???i </b>
                </td>
                <td class="basic">
                    <p>
                        Gi??o vi??n gi???i ngh??a c??c t??? ng???, kh??i ni???m, ?????nh ngh??a v??/ ho???c nh???ng thu???t ng??? m???i khi
                        c???n thi???t.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n cung c???p ng??n ng??? c?? b???n, h???u ??ch ????? h???c sinh c?? th??? giao ti???p, di???n ?????t b???ng
                        Ti???ng Vi???t hi???u qu???.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n s??? d???ng nh???ng c?? h???i, t??nh hu???ng ph??t sinh trong l???p h???c ????? gi??p h???c sinh ph??t
                        tri???n n??ng l???c ng??n ng??? m???t c??ch hi???u qu??? v??/ ho???c s??ng t???o.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Ph???n l???n h???c sinh li??n h??? ???????c n???i dung h???c v???i b???n th??n, cu???c s???ng v?? x?? h???i, v?? ????c
                        k???t ???????c nh???ng b??i h???c v??? nh???n th???c, suy ngh?? v?? th??i ?????.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p3e1_1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p3e1_1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['compe_1'] == 3)
                        checked
                        @else disabled
                        @endif name="p3e1_1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['outst_1'] == 4)
                        checked
                        @else disabled
                        @endif name="p3e1_1_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td class="empty-gray">
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n t???o nhi???u c?? h???i ph??t tri???n t??ch h???p c??c k??? n??ng ng??n ng??? (nghe - n??i - ?????c -
                        vi???t).
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n s??? d???ng nh???ng c?? h???i, t??nh hu???ng ph??t sinh trong l???p h???c ????? gi??p h???c sinh ph??t
                        tri???n c??c n??ng l???c ?????c th?? kh??c c???a b??? m??n m???t c??ch hi???u qu??? v??/ ho???c s??ng t???o.
                    </p>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="empty-gray">
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['appro_2'] == 2)
                        checked
                        @else disabled
                        @endif name="p3e1_2_appro" value="4">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['compe_2'] == 3)
                        checked
                        @else disabled
                        @endif name="p3e1_2_compe" value="3">
                    </div>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            @elseif ($evalu->criteria_id == 3)
            <tr class="none-bot">
                <td rowspan="4"><b>3E. Ph??t tri???n n??ng l???c ?????c th?? b??? m??n </b></td>
                <td rowspan="4"><b>3E.3. To??n </b>
                </td>
                <td class="basic">
                    <p>
                        Gi??o vi??n gi???i ngh??a c??c t??? ng???, kh??i ni???m, ?????nh ngh??a v??/ ho???c nh???ng thu???t ng??? m???i khi
                        c???n thi???t.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n cung c???p ng??n ng??? c?? b???n, h???u ??ch ????? h???c sinh c?? th??? giao ti???p, di???n ?????t b???ng
                        ng??n ng??? To??n h???c hi???u qu???.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n s??? d???ng nh???ng c?? h???i, t??nh hu???ng ph??t sinh trong l???p h???c ????? gi??p h???c sinh ph??t
                        tri???n n??ng l???c to??n h???c m???t c??ch hi???u qu??? v??/ ho???c s??ng t???o.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Ph???n l???n h???c sinh li??n h??? ???????c n???i dung h???c v???i cu???c s???ng v?? th??? gi???i, v?? ????c k???t, l??
                        gi???i ???????c nh???ng quy lu???t To??n h???c trong th???c t???.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p3e1_1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p3e1_1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['compe_1'] == 3)
                        checked
                        @else disabled
                        @endif name="p3e1_1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['outst_1'] == 4)
                        checked
                        @else disabled
                        @endif name="p3e1_1_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td class="empty-gray">
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n t???o nhi???u c?? h???i ph??t tri???n t??ch h???p c??c k??? n??ng to??n h???c.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n s??? d???ng nh???ng c?? h???i, t??nh hu???ng ph??t sinh trong l???p h???c ????? gi??p h???c sinh ph??t
                        tri???n c??c n??ng l???c ?????c th?? kh??c c???a b??? m??n m???t c??ch hi???u qu??? v??/ ho???c s??ng t???o.
                    </p>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="empty-gray">
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['appro_2'] == 2)
                        checked
                        @else disabled
                        @endif name="p3e1_2_appro" value="4">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['compe_2'] == 3)
                        checked
                        @else disabled
                        @endif name="p3e1_2_compe" value="3">
                    </div>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            @elseif ($evalu->criteria_id == 4)
            <tr class="none-bot">
                <td rowspan="4"><b>3E. Ph??t tri???n n??ng l???c ?????c th?? b??? m??n </b></td>
                <td rowspan="4"><b>3E.4. T??? nhi??n</b>
                </td>
                <td class="basic">
                    <p>
                        Gi??o vi??n gi???i ngh??a c??c t??? ng???, kh??i ni???m, ?????nh ngh??a v??/ ho???c nh???ng thu???t ng??? m???i khi
                        c???n thi???t.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n cung c???p ng??n ng??? c?? b???n, h???u ??ch ????? h???c sinh c?? th??? giao ti???p, di???n ?????t b???ng
                        ng??n ng??? khoa h???c hi???u qu???.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n s??? d???ng nh???ng c?? h???i, t??nh hu???ng ph??t sinh trong l???p h???c ????? gi??p h???c sinh ph??t
                        tri???n n??ng l???c nghi??n c???u khoa h???c m???t c??ch hi???u qu??? v??/ ho???c s??ng t???o.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Ph???n l???n h???c sinh li??n h??? ???????c n???i dung h???c v???i cu???c s???ng v?? x?? h???i, v?? ????c k???t ???????c
                        nh???ng b??i h???c v??? nh???n th???c, suy ngh?? v?? th??i ?????.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p3e1_1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p3e1_1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['compe_1'] == 3)
                        checked
                        @else disabled
                        @endif name="p3e1_1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['outst_1'] == 4)
                        checked
                        @else disabled
                        @endif name="p3e1_1_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td class="empty-gray">
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n t???o nhi???u c?? h???i ph??t tri???n t??ch h???p c??c k??? n??ng khoa h???c.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n s??? d???ng nh???ng c?? h???i, t??nh hu???ng ph??t sinh trong l???p h???c ????? gi??p h???c sinh ph??t
                        tri???n c??c n??ng l???c ?????c th?? kh??c c???a b??? m??n m???t c??ch hi???u qu??? v??/ ho???c s??ng t???o.
                    </p>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="empty-gray">
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['appro_2'] == 2)
                        checked
                        @else disabled
                        @endif name="p3e1_2_appro" value="4">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['compe_2'] == 3)
                        checked
                        @else disabled
                        @endif name="p3e1_2_compe" value="3">
                    </div>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            @else
            <tr class="none-bot">
                <td rowspan="4"><b>3E. Ph??t tri???n n??ng l???c ?????c th?? b??? m??n </b></td>
                <td rowspan="4"><b>3E.5. ATM </b>
                </td>
                <td class="basic">
                    <p>
                        Gi??o vi??n gi???i ngh??a c??c t??? ng???, kh??i ni???m, ?????nh ngh??a v??/ ho???c nh???ng thu???t ng??? m???i khi
                        c???n thi???t.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n cung c???p ng??n ng??? c?? b???n, h???u ??ch ????? h???c sinh c?? th??? giao ti???p, di???n ?????t b???ng
                        ng??n ng??? m??n h???c (ATM) hi???u qu???.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n s??? d???ng nh???ng c?? h???i, t??nh hu???ng ph??t sinh trong l???p h???c ????? gi??p h???c sinh ph??t
                        tri???n n??ng l???c ch??? ?????o c???a b??? m??n m???t c??ch hi???u qu??? v??/ ho???c s??ng t???o.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Ph???n l???n h???c sinh li??n h??? ???????c n???i dung h???c v???i b???n th??n, cu???c s???ng v?? x?? h???i, v?? ????c
                        k???t ???????c nh???ng b??i h???c v??? nh???n th???c, suy ngh?? v?? th??i ?????.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p3e1_1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p3e1_1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['compe_1'] == 3)
                        checked
                        @else disabled
                        @endif name="p3e1_1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['outst_1'] == 4)
                        checked
                        @else disabled
                        @endif name="p3e1_1_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td class="empty-gray">
                </td>
                <td class="appro">
                    <p>
                        Gi??o vi??n t???o nhi???u c?? h???i ph??t tri???n t??ch h???p c??c k??? n??ng trong m??n h???c.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Gi??o vi??n s??? d???ng nh???ng c?? h???i, t??nh hu???ng ph??t sinh trong l???p h???c ????? gi??p h???c sinh ph??t
                        tri???n c??c n??ng l???c ?????c th?? kh??c c???a b??? m??n m???t c??ch hi???u qu??? v??/ ho???c s??ng t???o.
                    </p>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="empty-gray">
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['appro_2'] == 2)
                        checked
                        @else disabled
                        @endif name="p3e1_2_appro" value="4">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part3['p3e1']['compe_2'] == 3)
                        checked
                        @else disabled
                        @endif name="p3e1_2_compe" value="3">
                    </div>
                </td>
                <td class="empty-gray">
                </td>
            </tr>
            @endif
            <tr>
                <td colspan="7" style="background-color: #134f5c; color: #fff;">
                    <b>PH???N 4: PH??T TRI???N CHUY??N M??N </b>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="4"><b>4A. Ho???t ?????ng ????o t???o </b></td>
                <td rowspan="4"><b></b></td>
                <td class="basic">
                    <p>
                        Tham gia ?????y ????? ch????ng tr??nh/ ho???t ?????ng ????o t???o v?? b???i d?????ng c???p to??n tr?????ng, c???p
                        h???c v?? t??? chuy??n m??n.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Ho??n th??nh t???t c??? c??c b??i t???p, nhi???m v??? c???a ch????ng tr??nh/ ho???t ?????ng ????o t???o v?? b???i
                        d?????ng c???p to??n tr?????ng, tr?????ng v?? t??? chuy??n m??n, ?????t m???c y??u c???u t???i thi???u c???a l???
                        tr??nh c?? nh??n.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        ??p d???ng hi???u qu??? c??c ki???n th???c, l?? thuy???t ???????c ????o t???o, b???i d?????ng trong c??ng t??c
                        gi???ng d???y v?? gi??o d???c.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Chia s??? tr???i nghi???m ??p d???ng c??c ki???n th???c, l?? thuy???t ???????c ????o t???o, b???i d?????ng v??/
                        ho???c nh???ng s??ng ki???n kinh nghi???m t??? nghi??n c???u/ ph??t tri???n, ????ng ???????c nh??n r???ng v??
                        h??? th???ng h??a (???????c ch???n v?? tr??nh b??y chia s??? c???p tr?????ng).
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4a']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p4a_1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4a']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p4a_1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4a']['compe_1'] == 3)
                        checked
                        @else disabled
                        @endif name="p4a_1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4a']['outst_1'] == 4)
                        checked
                        @else disabled
                        @endif name="p4a_1_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="compe">
                    <p>
                        Th??nh c??ng x??y d???ng h???c ph???n ????o t???o (module), ???????c ph?? duy???t v?? tri???n khai tr??n h???
                        th???ng.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Th??nh c??ng trong vi???c h??? tr??? c??c ?????ng nghi???p trong tr?????ng (kh??c t??? b??? m??n) tri???n
                        khai v?? ???????c ph???n h???i t??ch c???c.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4a']['compe_2'] == 3)
                        checked
                        @else disabled
                        @endif name="p4a_2_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4a']['outst_2'] == 4)
                        checked
                        @else disabled
                        @endif name="p4a_2_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="4"><b>4B. Sinh ho???t t??? chuy??n m??n </b></td>
                <td rowspan="4"><b></b></td>
                <td class="basic">
                    <p>
                        Tham gia ?????y ????? c??c l???ch sinh ho???t t??? chuy??n m??n.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Ho??n th??nh t???t c??? c??c nhi???m v??? chuy??n m??n ???????c ph??n c??ng c???a t??? chuy??n m??n.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        ????ng g??p x??y d???ng, tr??nh b??y n???i dung, chuy??n ????? cho ho???t ?????ng sinh ho???t t??? chuy??n
                        m??n.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Th??nh c??ng chia s??? c??c ph????ng ph??p d???y h???c ?????c th?? b??? m??n ???????c ??p d???ng th??nh c??ng,
                        s??ng t???o trong gi???ng d???y v???i c??c ?????ng nghi???p trong t??? b??? m??n (???????c ch???n v?? tr??nh b??y
                        chia s??? trong t??? b??? m??n).
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4b']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p4b_1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4b']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p4b_1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4b']['compe_1'] == 3)
                        checked
                        @else disabled
                        @endif name="p4b_1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4b']['outst_1'] == 4)
                        checked
                        @else disabled
                        @endif name="p4b_1_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="outst">
                    <p>
                        Th??nh c??ng trong vi???c h??? tr??? ??p d???ng th??nh c??ng c??c ph????ng ph??p d???y h???c ?????c th?? b???
                        m??n v???i c??c ?????ng nghi???p trong t??? b??? m??n, nh???n ???????c ph???n h???i t??ch c???c.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4b']['outst_2'] == 4)
                        checked
                        @else disabled
                        @endif name="p4b_2_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="2"><b>4C. Ho???t ?????ng nh?? tr?????ng </b></td>
                <td rowspan="2"><b></b></td>
                <td class="basic">
                    <p>
                        Tham gia ho???t ?????ng ph??t tri???n nh?? tr?????ng v??/ho???c tr???i nghi???m, d??? ??n h???c t???p, CLB, s???
                        ki???n,???
                    </p>
                </td>
                <td class="appro">
                    <p>
                        ????ng g??p x??y d???ng ho???t ?????ng ph??t tri???n nh?? tr?????ng v??/ho???c tr???i nghi???m, d??? ??n h???c
                        t???p, CLB, s??? ki???n,???
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Tri???n khai th??nh c??ng ho???t ?????ng ph??t tri???n nh?? tr?????ng v??/ho???c tr???i nghi???m, d??? ??n h???c
                        t???p, CLB, s??? ki???n,??? v?? nh???n ph???n h???i t??ch c???c t??? c??c nh??m ?????i t?????ng li??n quan.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        S???n s??ng h??? tr???, t?? v???n, ????o t???o ?????ng nghi???p th???c hi???n c??c ho???t ?????ng ph??t tri???n nh??
                        tr?????ng, tr???i nghi???m, d??? ??n h???c t???p, CLB, s??? ki???n, v.v ???? ???????c ph?? duy???t(quy tr??nh
                        h??a, h??? th???ng h??a, b??n giao ???????c).
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4c']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p4c_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4c']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p4c_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4c']['compe'] == 3)
                        checked
                        @else disabled
                        @endif name="p4c_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4c']['outst'] == 4)
                        checked
                        @else disabled
                        @endif name="p4c_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="8"><b>4D. Ph??t tri???n ch????ng tr??nh </b></td>
                <td rowspan="4"><b>4D.1. Chuy??n m??n </b></td>
                <td class="basic">
                    <p>
                        Tham gia x??y d???ng t??i li???u s??? d???ng cho l???p h???c (hand out, workshet, danh s??ch t??i
                        li???u tham kh???o,...).
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Tham gia x??y d???ng ????? c????ng m??n h???c (bao g???m ppct, gi??o ??n m???u) ???????c H??CM & Ban ph??t
                        tri???n ch????ng tr??nh ph?? duy???t.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Tham gia x??y d???ng ma tr???n, ????? ki???m tra ????nh gi?? m??n h???c ???????c ph?? duy???t, ????ng g??i v??
                        tri???n khai h??? th???ng.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        X??y d???ng, ????ng g??i h??? th???ng t??i li???u d???y h???c n???i b??? (????ng quy???n, in ???n) ???????c ph??
                        duy???t, tri???n khai to??n kh???i/ c???p.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4d1']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p4d1_1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4d1']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p4d1_1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4d1']['compe_1'] == 3)
                        checked
                        @else disabled
                        @endif name="p4d1_1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4d1']['outst_1'] == 4)
                        checked
                        @else disabled
                        @endif name="p4d1_1_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="outst">
                    <p>
                        X??y d???ng khung CT t???ng th??? to??n c???p ???????c ph?? duy???t v?? ??p d???ng cho to??n c???p h???c.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4d1']['outst_2'] == 4)
                        checked
                        @else disabled
                        @endif name="p4d1_2_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="4"><b>4D.2. Ch??? nhi???m/Advisor </b></td>
                <td class="basic">
                    <p>
                        Tham gia x??y d???ng ch??? ????? v?? t??i li???u s??? d???ng cho l???p ch??? nhi???m/advisor cho l???p h???c.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Tham gia x??y d???ng ????? c????ng m??n h???c (bao g???m ppct, gi??o ??n m???u) ???????c H??CM & Ban ph??t
                        tri???n ch????ng tr??nh ph?? duy???t.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Tham gia x??y d???ng ma tr???n, ????? ki???m tra ????nh gi?? m??n h???c ???????c ph?? duy???t, ????ng g??i v??
                        tri???n khai h??? th???ng.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        X??y d???ng, ????ng g??i h??? th???ng t??i li???u d???y h???c n???i b??? (????ng quy???n, in ???n) ???????c ph??
                        duy???t, tri???n khai to??n kh???i/ c???p.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4d2']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p4d2_1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4d2']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p4d2_1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4d2']['compe_1'] == 3)
                        checked
                        @else disabled
                        @endif name="p4d2_1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4d2']['outst_1'] == 4)
                        checked
                        @else disabled
                        @endif name="p4d2_1_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="outst">
                    <p>
                        X??y d???ng khung CT t???ng th??? to??n c???p ???????c ph?? duy???t v?? ??p d???ng cho to??n c???p h???c.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part4['p4d2']['outst_2'] == 4)
                        checked
                        @else disabled
                        @endif name="p4d2_2_outst" value="4">
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="7" style="background-color: #134f5c; color: #fff;">
                    <b>PH???N 5: C??NG T??C CH??? NHI???M & H??NH CH??NH </b>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="4"><b>5A. Qu???n l?? h??? s?? h???c sinh </b></td>
                <td rowspan="4"><b></b></td>
                <td class="basic">
                    <p>
                        Cung c???p ?????y ????? c??c ?????u m???c ph???n h???i trong h??? s?? h???c sinh.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Ph???n h???i v??? bi???u hi???n v?? ti???n b??? c???a h???c sinh trong h??? s??.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        T?? v???n ???????c c??c gi???i ph??p, h??? tr??? th???c hi???n gi???i ph??p th??nh c??ng, l??u h??? s?? k???t qu???
                        th???c hi???n gi??p h???c sinh li??n t???c ph??t tri???n.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        T?? v???n, ????o t???o ???????c ?????ng nghi???p ph???n h???i v?? t?? v???n h???c sinh li??n t???c ph??t tri???n, v??
                        nh???n ph???n h???i t??ch c???c t??? ?????ng nghi???p.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part5['p5a']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p5a_1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part5['p5a']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p5a_1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part5['p5a']['compe_1'] == 3)
                        checked
                        @else disabled
                        @endif name="p5a_1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part5['p5a']['outst_1'] == 4)
                        checked
                        @else disabled
                        @endif name="p5a_1_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="outst">
                    <p>
                        T???o ??i???m nh???n kh??c bi???t trong h??? s?? h???c sinh, gi??p h???c sinh c?? c?? h???i tham d??? c??c
                        cu???c thi Qu???c t???, d??nh h???c b???ng,??? v?? gi??nh ???????c c??c th??nh t??ch cao.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part5['p5a']['outst_2'] == 4)
                        checked
                        @else disabled
                        @endif name="p5a_2_outst" value="4">
                    </div>
                </td>
            </tr>

            <tr class="none-bot">
                <td rowspan="4"><b>5B. Giao ti???p v???i PHHS </b></td>
                <td rowspan="4"><b></b></td>
                <td class="basic">
                    <p>
                        Th???c hi???n ?????y ????? c??c y??u c???u ph???n h???i c???a c???p QL v??? giao ti???p v?? x??y d???ng m???i quan
                        h??? v???i PHHS.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Th???c hi???n k???p th???i c??c y??u c???u ph???n h???i c???a c???p QL v??? giao ti???p v?? x??y d???ng m???i quan
                        h??? v???i PHHS
                    </p>
                </td>
                <td class="compe">
                    <p>
                        PHHS h??i l??ng v???i th??ng tin, ph???n h???i, ???????c tham gia th???o lu???n bi???n ph??p gi???i quy???t
                        v???n ????? (n???u c??) c???a/v??? h???c sinh.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Gi???i quy???t m???i th???c m???c, khi???u n???i c???a PHHS m???t c??ch hi???u qu??? m?? kh??ng c???n s??? can
                        thi???p, h??? tr??? c???a c???p qu???n l?? tr???c ti???p.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="basic">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part5['p5b']['basic_1'] == 1)
                        checked
                        @else disabled
                        @endif name="p5b_1_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part5['p5b']['appro_1'] == 2)
                        checked
                        @else disabled
                        @endif name="p5b_1_appro" value="2">
                    </div>
                </td>
                <td class="compe">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part5['p5b']['compe_1'] == 3)
                        checked
                        @else disabled
                        @endif name="p5b_1_compe" value="3">
                    </div>
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part5['p5b']['outst_1'] == 4)
                        checked
                        @else disabled
                        @endif name="p5b_1_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="outst">
                    <p>
                        X??y d???ng k???ch b???n, n???i dung ????o t???o ph??? huynh ?????ng h??nh v???i c??c m???c ti??u gi??o d???c
                        c???a nh?? tr?????ng ???????c ph?? duy???t v?? tri???n khai tr??n h??? th???ng c?? hi???u qu???.
                    </p>
                </td>
            </tr>
            <tr class="none-top" style="text-align: center">
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
                <td class="outst">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part5['p5b']['outst_2'] == 4)
                        checked
                        @else disabled
                        @endif name="p5b_2_outst" value="4">
                    </div>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="2"><b>5C. H??? s?? s??? s??ch GV v?? s??? d???ng SO </b></td>
                <td rowspan="2"><b></b></td>
                <td class="basic">
                    <p>
                        Ho??n th??nh c??c ?????u m???c h??? s??, s??? s??ch, s??? d???ng SO theo quy ?????nh c???a t??? b??? m??n.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Ho??n th??nh ?????y ????? v?? ????ng th???i h???n c??c ?????u m???c h??? s??, s??? s??ch v?? s??? d???ng SO theo quy
                        ?????nh c???a v??n ph??ng tr?????ng.
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
                        <input type="checkbox" @if ($evalu->part5['p5c']['basic'] == 1)
                        checked
                        @else disabled
                        @endif name="p5c_basic" value="1">
                    </div>
                </td>
                <td class="appro">
                    <div class="i-checks">
                        <input type="checkbox" @if ($evalu->part5['p5c']['appro'] == 2)
                        checked
                        @else disabled
                        @endif name="p5c_appro" value="2">
                    </div>
                </td>
                <td class="empty-gray">
                </td>
                <td class="empty-gray">
                </td>
            </tr>
        </tbody>
    </table>
</div>

        </div>
    </div>
</div>
@endsection
@section('script')
<!-- icheck JS
		============================================ -->
<script src="be/js/icheck/icheck.min.js"></script>
<script src="be/js/icheck/icheck-active.js"></script>
<script src="be/js/datapicker/bootstrap-datepicker.js"></script>
<script src="be/js/datapicker/datepicker-active.js"></script>
@endsection
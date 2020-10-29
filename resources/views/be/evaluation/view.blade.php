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
            <th width=20%>Cơ bản</th>
            <th width=20%>Phát triển</th>
            <th width=20%>Thành thục</th>
            <th width=20%>Xuất sắc</th>
        </thead>
        <tbody>
            <tr>
                <td colspan="6" style="background-color: #134f5c; color: #fff;">
                    <b>PHẦN 1: LẬP KẾ HOẠCH & RÚT KINH NGHIỆM</b>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="8"><b>1A: Soạn kế hoạch dạy học</b></td>
                <td rowspan="2"><b>1A.1. Mục tiêu bài dạy</b></td>
                <td class="basic">
                    <p class="login2 pull-left pull-left-pro">Mục tiêu bài học dựa trên chuẩn đầu ra.</p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">Mục tiêu bài được viết dựa trên những gì học
                        sinh có thể làm được (vd: dùng các động từ trong thang Bloom)</p>
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
                <td rowspan="4"><b>1A.2. Thiết kế hoạt động và tiến trình dạy học</b></td>
                <td class="basic">
                    <p class="login2 pull-left pull-left-pro">Với mỗi bài tập/ hoạt động, kế hoạch dạy học
                        cung cấp: mô tả nhiệm vụ GV-HS, mục tiêu và tiêu chí hoàn thành của bài tập/hoạt
                        động.</p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">Bài học được phân chia hợp lý về tiến trình
                        sao cho mỗi hoạt động đều hỗ trợ việc đạt mục tiêu bài học.</p>
                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">Kế hoạch dạy học đưa ra các đánh giá ban đầu,
                        đánh giá quá trình hoặc tổng kết để kiểm soát việc học của học sinh với nhiều năng
                        lực khác nhau xuyên suốt buổi học.</p>
                </td>
                <td class="outst">
                    <p class="login2 pull-left pull-left-pro">Kế hoạch dạy học thể hiện một cách tiếp cận
                        sáng tạo trong việc tích hợp các kiến thức/ kỹ năng chuyên môn với kỹ năng giao tiếp
                        và/hoặc hợp tác, đáng được nhân rộng và hệ thống hóa.</p>
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
                    <p class="login2 pull-left pull-left-pro">Các hoạt động và bước chuyển tiếp hoạt động
                        được phân bổ thời gian hợp lý.</p>
                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">Kế hoạch dạy học thể hiện các phương pháp dạy
                        học phân hóa, hình thức tổ chức phù hợp, tạo điều kiện học tập cho các dạng học sinh
                        khác nhau.</p>
                </td>
                <td class="outst">
                    <p class="login2 pull-left pull-left-pro">Kế hoạch dạy học thể hiện một cách tiếp cận
                        sáng tạo trong việc tích hợp các kiến thức/ kỹ năng chuyên môn với tư duy sáng tạo
                        và/hoặc tư duy phản biện, đáng được nhân rộng và hệ thống hóa.</p>
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
                <td rowspan="2"><b>1A.3. Số hóa học liệu</b></td>
                <td class="basic">
                    <p class="login2 pull-left pull-left-pro">Các giờ học đều có nhiệm vụ/ phiếu bài tập
                        trước- trong-sau giờ lên lớp.</p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">Xây dựng bài giảng điện tử và/ hoặc một phần
                        hoạt động dạy học được công nghệ hóa.</p>
                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">Giáo án thể hiện việc áp dụng công nghệ trong
                        công tác dạy học một cách linh hoạt, sáng tạo, đáng nhân rộng và hệ thống hóa.</p>
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
                <td rowspan="4"><b>1B: Kiến thức chuyên môn và phương pháp sư phạm</b></td>
                <td rowspan="2"><b>1B.1. Kiến thức chuyên môn</b></td>
                <td class="basic">
                    <p class="login2 pull-left pull-left-pro">Kế hoạch dạy học thể hiện giáo viên có thể xác
                        định được các khái niệm và kỹ năng quan trọng của môn học/bài học.</p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">Nội dung bài học có kiến thức mở rộng, liên hệ
                        với thực tiễn cuộc sống</p>
                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">Nội dung bài học tích hợp các kiến thức nội
                        môn và liên môn</p>
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
                <td rowspan="2"><b>1B.2. Phương pháp sư phạm</b></td>
                <td class="basic">
                    <p class="login2 pull-left pull-left-pro">
                        Kế hoạch dạy học cho thấy các phương pháp giảng dạy phù hợp với nội dung bài học.
                    </p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">
                        Kế hoạch dạy học cho thấy các phương pháp giảng dạy phù hợp với năng lực của học
                        sinh.
                    </p>
                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">
                        Phương pháp giảng dạy sử dụng trong giáo án hoàn toàn phù hợp với giai đoạn phát
                        triển và đặc điểm của đối tượng học sinh.
                    </p>
                </td>
                <td class="outst">
                    <p class="login2 pull-left pull-left-pro">
                        Kế hoạch dạy học thể hiện một cách tiếp cận sáng tạo, linh hoạt các phương pháp dạy
                        học hiện đại, truyền tải hiệu quả các kiến thức nội môn, liên môn, đáng được nhân
                        rộng và hệ thống hóa.
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
                <td rowspan="2"><b>1C: Rút kinh nghiệm và tiếp nhận phản hồi</b></td>
                <td rowspan="2"></td>
                <td class="basic">
                    <p class="login2 pull-left pull-left-pro">
                        Giáo viên tích cực tham gia việc rút kinh nghiệm sau dự giờ, có ghi chép lại các đề
                        xuất sửa đổi. (Vd: lắng nghe nhận xét, đặt câu hỏi để hiểu rõ vấn đề, thảo luận và
                        ghi chú nếu cần.)
                    </p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">
                        Giáo viên có thể xác định điểm mạnh và điểm yếu của buổi học được dự giờ trong cuộc
                        họp rút kinh nghiệm sau đó. (Vd: giáo viên nhìn lại chứng cứ về việc học của học
                        sinh qua các tình huống cụ thể trong lớp...)
                    </p>
                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">
                        Giáo viên có thể phân tích các nguyên nhân, yếu tố tác động đến sự hiệu quả/ kém
                        hiệu quả của các hoạt động trong tiết học.
                    </p>
                </td>
                <td class="outst">
                    <p class="login2 pull-left pull-left-pro">Có chứng cứ cho thấy giáo viên đã tiếp nhận
                        các nhận xét một cách hiệu quả, khi giáo viên thiết lập các điểm học tập cụ thể và
                        rõ ràng, có thể áp dụng trong tương lai. (Vd: giáo viên áp dụng phương pháp thực
                        nghiệm đối chứng, có ghi chép trong hồ sơ dạy học...)</p>
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
                    <b>PHẦN 2: XÂY DỰNG VÀ QUẢN LÝ MÔI TRƯỜNG LỚP HỌC</b>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="6"><b>2A. Quản lý không gian, quy trình, tài liệu và giáo cụ</b></td>
                <td rowspan="2"><b>2A.1. Không gian lớp học</b></td>
                <td class="basic">
                    <p class="login2 pull-left pull-left-pro">Giáo viên kiểm tra và/hoặc đảm bảo bàn ghế
                        và/hoặc giáo cụ được sắp xếp an toàn, thuận tiện cho việc di chuyển.</p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">Giáo viên kiểm tra và/hoặc đảm bảo cách bố trí
                        lớp học hạn chế gây xao nhãng cho học sinh trong quá trình học.</p>
                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">Giáo viên bố trí, tổ chức và sử dụng không
                        gian tối ưu hóa sự tương tác trong lớp học (GV với HS, HS với HS,...).
                    </p>
                </td>
                <td class="outst">
                    <p class="login2 pull-left pull-left-pro">Giáo viên bố trí lớp học và sử dụng không gian
                        sáng tạo, thu hút học sinh vào hoạt động dạy học, đáng được nhân rộng và hệ thống
                        hóa.
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
                <td rowspan="2"><strong>2A.2. Qui trình lớp học</strong> </td>
                <td class="basic">
                    <p class="login2 pull-left pull-left-pro">Giáo viên đưa ra hướng dẫn rõ ràng và có trình
                        tự cho phần chuyển hoạt động và các quy trình khác trong lớp (VD: phát tài liệu,
                        chào hỏi, nghỉ giữa giờ,...)</p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">Giáo viên thực hiện tiến trình chuyển hoạt
                        động và các quy trình khác một cách trơn tru và thời gian giảng dạy bị mất không ảnh
                        hưởng đến thời lượng giờ học.
                    </p>
                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">Học sinh góp phần tự quản lý nhóm, việc chuyển
                        hoạt động, phân phát tài liệu/giáo cụ, và/hoặc các hoạt động khác trong quy trình
                        lớp học.
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
                <td rowspan="2"><strong>2A.3. Giáo cụ và tài liệu học tập</strong> </td>
                <td class="basic">
                    <p class="">Giáo viên sử dụng đa dạng các loại tài liệu, bao gồm công nghệ, phần
                        mềm/giáo cụ số.</p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">Các tài liệu được thiết kế/ trình bày rõ ràng,
                        bắt mắt.</p>

                </td>
                <td class="compe">
                    <p class="login2 pull-left pull-left-pro">Giáo viên khai thác và sử dụng đúng mực từng
                        loại tài liệu (về mặt phân bố thời gian, độ bao quát lớp, khai thác nội dung) để hỗ
                        trợ mục tiêu của bài học và từng hoạt động dạy học.</p>
                </td>
                <td class="outst">
                    <p class="login2 pull-left pull-left-pro">Giáo viên sử dụng công cụ giảng dạy và/ hoặc
                        công nghệ sáng tạo, có khả năng gây hứng thú, tò mò và thử thách cao đối với học
                        sinh, đáng được nhân rộng và hệ thống hóa.
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
                <td rowspan="4"><b>2B. Quản lý hành vi học sinh</b></td>
                <td rowspan="2"><b>2B.1. Thiết lập và duy trì quy định, nề nếp lớp học </b></td>
                <td class="basic">
                    <p>
                        Giáo viên phổ biến và/hoặc trình bày một cách rõ ràng các nguyên tắc và mong đợi
                        trong lớp học.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên liên tục bao quát, giám sát lớp học và các hoạt động để phát hiện các hành
                        vi không mong đợi của học sinh, đảm bảo duy trì việc thực hiện quy định, nề nếp lớp
                        học.
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
                <td rowspan="2"><strong>2B.2. Phản hồi và củng cố hành vi (lời nói, việc làm) của học
                        sinh</strong> </td>
                <td class="basic">
                    <p>
                        Giáo viên ghi nhận những hành vi (lời nói, việc làm) tích cực của học sinh.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên thường xuyên nhắc nhở học sinh thực hiện những hành vi tích cực (lời nói,
                        việc làm).
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên xử lý các hành vi không mong đợi một cách tích cực và hiệu quả (vd: chuyển
                        hướng các hành vi không mong đợi sang hành vi thay thế, tiếp cận học sinh, tạm ngưng
                        hoạt động của học sinh, nói chuyện với học sinh) mà không làm ảnh hưởng quá lớn đến
                        sự chú ý của các học sinh khác và tiến trình của lớp học.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Hầu hết học sinh tuân theo qui tắc, tiến trình giảng dạy và luôn thể hiện các hành
                        vi mong đợi, phù hợp.
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
                <td rowspan="8"><b>2C. Xây dựng văn hóa học tập & tính cách học sinh</b></td>
                <td rowspan="2"><b>2C.1. Quan tâm & kết nối (Tính cách đối ngoại)</b></td>
                <td class="basic">
                    <p>
                        Giáo viên thăm hỏi về những sở thích, mối quan tâm và/hoặc các trải nghiệm cá nhân
                        của học ngoài lớp học và trường học.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên thể hiện sự nhạy cảm đối với các xu hướng cá nhân của học sinh (vd: giáo
                        viên không thể hiện thành kiến đối với tâm tính, cá tính, hay giới tính của học
                        sinh).
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên thể hiện sự thấu hiểu học sinh và các sở thích của học sinh thông qua
                        những tương tác giáo viên - học sinh trong suốt buổi học.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Phần lớn học sinh cảm nhận và thể hiện sự quan tâm và cảm thông một cách tự nhiên
                        đối với bạn bè và giáo viên trong suốt buổi học.
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
                <td rowspan="4"><b>2C.2. Nỗ lực và kiên định (Tính cách đối nội)</b></td>
                <td class="basic">
                    <p>
                        Giáo viên khuyến khích học sinh nỗ lực cho đến khi học sinh đạt được mục tiêu giờ
                        học (phù hợp với bản thân).
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên hướng dẫn, hỗ trợ thực hiện nhiệm vụ và mục tiêu hoạt động phù hợp với
                        năng lực của HS.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Phần lớn học sinh đạt được yêu cầu của bài học và/ hoặc của hoạt động.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Phần lớn học sinh chú tâm, tự hoàn tất nhiệm vụ/ bài tập/ hoạt động được giao với
                        chất lượng tốt nhất trong khả năng của học sinh.
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
                        Giáo viên ghi nhận nỗ lực và tiến bộ của học sinh (bằng cử chỉ, lời nói, ánh mắt,
                        lời nhận xét).
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
                <td rowspan="2"><b>2C.3. Tò mò và đam mê (Tính cách tư duy)</b></td>
                <td class="basic">
                    <p>
                        Giáo viên thể hiện sự hứng thú & năng lượng tích cực (vd: thông qua cử chỉ, giọng
                        nói, ngữ điệu...) khi giảng bài.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên lý giải tầm quan trọng, ý nghĩa của bài học, của môn học và/hoặc của việc
                        học, phát triển bản thân nói chung.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Phần lớn học sinh thể hiện sự yêu thích học tập tự nhiên và tích cực, muốn tìm hiểu
                        sâu/ rộng hơn về nội dung bài học.
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
                <td colspan="7" style="background-color: #134f5c; color: #fff;"><b>PHẦN 3: GIẢNG DẠY</b>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="6"><b>3A. Giao tiếp với học sinh</b></td>
                <td rowspan="2"><b>3A.1. Thiết lập mục tiêu</b></td>
                <td class="basic">
                    <p>
                        Giáo viên phổ biến mục tiêu bài học bằng lời và/ hoặc viết ở thời điểm thích hợp,
                        phù hợp với tiến trình của tiết học.
                    </p>
                </td>
                <td class="appro">
                    <p class="login2 pull-left pull-left-pro">
                        Giáo viên giúp học sinh hiểu được các mục tiêu của buổi học trong tương quan với
                        kiến thức đã học trước đó và/ hoặc sẽ học sau này.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên thường xuyên hỗ trợ học sinh theo dõi tiến độ học dựa vào mục tiêu của bài
                        giảng và/ hoặc mục tiêu của hoạt động.
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
                <td rowspan="2"><strong>3A.2. Hướng dẫn thực hiện nhiệm vụ</strong> </td>
                <td class="basic">
                    <p>
                        Giáo viên đưa ra hướng dẫn rõ ràng cho từng hoạt động.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên sử dụng hiệu quả các câu hỏi kiểm tra khả năng tiếp thu hướng dẫn, hiểu
                        nhiệm vụ (ICQ) của học sinh.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên đưa ra hướng dẫn chi tiết về phương pháp để đạt được kết quả thỏa mãn yêu
                        cầu trong mỗi hoạt động.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Phần lớn học sinh hiểu và thực hiện đúng những tiêu chuẩn chuyên môn được yêu cầu
                        trong mỗi hoạt động/ bài học.
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
                <td rowspan="2"><strong>3A.3. Truyền đạt nội dung chuyên môn</strong> </td>
                <td class="basic">
                    <p class="">
                        Giáo viên truyền đạt chính xác kiến thức cơ bản.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên trả lời những câu hỏi làm rõ thắc mắc của học sinh một cách rõ ràng.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên dùng ngôn ngữ nói, viết và ngôn ngữ hình thể phù hợp với độ tuổi phát
                        triển và hoàn cảnh của học sinh.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Giáo viên giải thích nội dung học một cách sáng tạo và hiệu quả. (vd: sử dụng phép
                        ẩn dụ, suy luận, so sánh cùng với vốn từ vựng phong phú để làm sinh động nội dung
                        bài học)
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
                <td rowspan="10"><b>3B. Phát huy sự tham gia của học sinh</b></td>
                <td rowspan="6"><b>3B.1. Thu hút sự quan tâm, tham gia của học sinh </b></td>
                <td class="basic">
                    <p>
                        Giáo viên đảm bảo học sinh có tư thế sẵn sàng tiếp nhận, tập trung vào bài giảng,
                        các hoạt động, các bạn trong lớp và tài liệu dạy - học.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên sử dụng nhịp độ bài giảng phù hợp không quá dàn trải, chậm hoặc gấp gáp.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Phần lớn học sinh chủ động tham gia vào các hoạt động học tập thay vì chỉ quan sát
                        giáo viên giảng bài.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Khi học sinh giải thích quá trình suy nghĩ của mình, giáo viên tiếp tục thử thách
                        một cách hiệu quả, mở rộng suy nghĩ, hiểu biết của học sinh.
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
                        Giáo viên đưa ra các hoạt động nhằm mục đích khám phá (vd: để tạo ra ý tưởng mới,
                        khám phá các câu hỏi và các khả năng, thiết kế và điều tra sơ bộ,...).
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên tạo cơ hội cho học sinh giải thích về quá trình tư duy để hoàn thành nhiệm
                        vụ học.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Khi học sinh giải thích quá trình suy nghĩ, giáo viên hỗ trợ và thúc đẩy tư duy cho
                        các học sinh gặp khó khăn.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Phần lớn học sinh có thể giải thích tư duy một cách hiệu quả, bằng những lập luận
                        logic, bằng chứng thuyết phục (qua bài viết và/hoặc nói).
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
                        Giáo viên tạo cơ hội cho học sinh suy nghĩ, đúc kết để cúng cố việc học sau mỗi hoạt
                        động dạy/bài học
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên tạo ra những tình huống mới và/ hoặc các hoạt động mở rộng để học sinh áp
                        dụng các kỹ năng/khái niệm vừa học.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Phần lớn học sinh được tham gia vào các hoạt động bậc cao về chiều kiến thức và/hoặc
                        chiều tư duy (tương đương với thang Bloom hoặc DoK).
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Phần lớn học sinh chủ động giao tiếp, trao đổi trong lớp học, với tổng số thời gian
                        nói của học sinh chiếm hơn 50% tiết học.
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
                <td rowspan="2"><b>3B.2. Làm việc nhóm</b></td>
                <td class="basic">
                    <p>
                        Giáo viên sử dụng các cách phân chia nhóm học sinh khác nhau.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên sử dụng tài liệu và/hoặc hoạt động dạy học phân hóa cho các nhóm học sinh
                        khác nhau dựa trên năng lực, phương thức học và tính cách.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên sử dụng hiệu quả nhiều chiến lược, kĩ thuật hướng dẫn, kiến tạo tư duy và
                        dạy học phân hóa phù hợp với nhu cầu khác nhau của học sinh. (vd: các hoạt động/bài
                        tập khó được đơn giản hóa, dạy chậm lại, luyện tập thêm hoặc bỏ qua; các hoạt
                        động/bài tập dễ được tăng độ khó)
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Học sinh chủ động đưa ra các sáng kiến hợp lý, có cơ sở để điều chỉnh bài học cho
                        phù hợp. vd: (1) sửa một bài tập sao cho hợp lý và phù hợp với nhu cầu của bản thân,
                        (2) gợi ý thay đổi về mô hình làm việc nhóm, (3) gợi ý thay đổi hoặc bổ sung vào các
                        tài liệu (4) lựa chọn làm việc cá nhân, theo cặp, theo nhóm hoặc theo một hình thức
                        khác.
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
                <td rowspan="2"><b>3B.3. Dạy học phân hóa</b></td>
                <td class="basic">
                    <p>
                        Giáo viên tạo cơ hội làm việc nhóm cho học sinh.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên hỗ trợ các nhóm học sinh gặp khó khăn (vd: đưa ra gợi ý, tạo điều kiện cho
                        tiến trình hoạt động nhóm được thuận lợi).
                    </p>
                </td>
                <td class="compe">
                    <p>Giáo viên đóng góp ý kiến phân tích, phản hồi về mặt chuyên môn/ học thuật cho nhóm.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Phần lớn học sinh có thể làm việc độc lập và hiệu quả trong nhóm mà cần ít hỗ trợ từ
                        giáo viên.
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
                <td rowspan="6"><b>3C. Đặt câu hỏi & Thảo luận </b></td>
                <td rowspan="4"><b>3C.1. Đặt câu hỏi </b></td>
                <td class="basic">
                    <p>
                        Giáo viên đặt các câu hỏi súc tích và dễ hiểu.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên đặt các câu hỏi mở, với nhiều khả năng trả lời, để khai thác hiểu biết của
                        học sinh (tuy vẫn có thể là những câu hỏi tư duy bậc thấp).
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên tích hợp câu hỏi của học sinh vào bài học và điều phối hiệu quả các học
                        sinh khác thảo luận những câu hỏi đó.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Phần lớn học sinh chủ động đặt ra các câu hỏi tư duy bậc cao (qua bài viết và/hoặc
                        nói) hiệu quả và phù hợp với giai đoạn phát triển nhận thức của học sinh.
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
                    <p>Giáo viên có thời gian chờ sau khi đặt câu hỏi.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên chủ động tạo nhiều cơ hội cho học sinh đặt câu hỏi và hỗ trợ học sinh
                        cách đặt câu hỏi.
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
                <td rowspan="2"><strong>3C.2. Thảo luận</strong> </td>
                <td class="basic">
                    <p>
                        Giáo viên tạo cơ hội để học sinh được chia sẻ ý tưởng/ ý kiến trong lớp/nhóm.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên liên hệ trải nghiệm cá nhân của học sinh vào bài học để tạo hứng thú cho
                        học sinh cũng như thúc đẩy hoạt động thảo luận.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên liên hệ thực tiễn cuộc sống/ thế giới vào bài học nhằm tạo hứng thú cho cả
                        lớp cũng như thúc đẩy các hoạt động thảo luận hiệu quả.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Học sinh chủ động yêu cầu và tiếp nhận nhận xét của bạn học/giáo viên trong quá
                        trình thảo luận và đặt câu hỏi thúc đẩy tư duy cho bạn khác.
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
                <td rowspan="6"><b>3D. Đánh giá trong hướng dẫn và phản hồi </b></td>
                <td rowspan="2"><b>3D.1. Giám sát việc học thông qua kiểm tra việc hiểu nhiệm vụ và kiến
                        thức của học sinh</b>
                </td>
                <td class="basic">
                    <p>
                        Giáo viên đánh giá kiến thức sẵn có của học sinh trước khi bắt đầu bài dạy (vd sử
                        dụng bài kiểm tra nhanh, điểm số, v.v.).
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên thường xuyên sử dụng các kĩ thuật đánh giá quá trình (vd:các câu hỏi có
                        chủ đích-CCQs, v.v) để gợi ra các thông tin về sự hiểu biết của học sinh.
                    </p>
                </td>
                <td class="compe">
                    <p>Giáo viên giải quyết hiệu quả bất kì hiểu biết hay quan niệm sai lầm trong suốt quá
                        trình bài học cho hầu hết học sinh.
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
                <td rowspan="4"><b>3D.2.Phản hồi cho học sinh </b></td>
                <td class="basic">
                    <p>
                        Giáo viên chú ý đến bài làm (viết, nói, sản phẩm) của học sinh.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên khuyến khích các học sinh thụ động tham gia vào các hoạt động/ thảo luận.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên đưa ra ý kiến phản hồi phù hợp để hỗ trợ các cá nhân học sinh theo nhu cầu
                        riêng của mỗi học sinh. (vd. chỉ ra điểm mạnh, điểm yếu của cá nhân, và/hoặc cách
                        thức để cải thiện việc học dựa trên thể hiện của học sinh).
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Phần lớn học sinh nắm được các tiêu chí đánh giá và có thể tự đánh giá bản thân theo
                        các tiêu chí đó.
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
                        Giáo viên di chuyển trong lớp để giám sát việc học và/hoặc sự tham gia, các hành vi
                        của học sinh.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên sử dụng các phương pháp chữa lỗi phù hợp (bằng lời nói, chữ viết).
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên hướng dẫn học sinh một cách hiệu quả về cách đưa phản hồi mang tính xây
                        dựng cho sản phẩm/bài làm của bạn.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Phần lớn học sinh có thể đóng góp ý kiến phản hồi mang tính xây dựng cho bạn mà
                        không cần sự hỗ trợ của giáo viên.
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
                <td rowspan="4"><b>3E. Phát triển năng lực đặc thù bộ môn </b></td>
                <td rowspan="4"><b>3E.1. Tiếng Anh </b>
                </td>
                <td class="basic">
                    <p>
                        Giáo viên phần lớn sử dụng Tiếng Anh trong lớp học, chỉ sử dụng Tiếng Việt hoặc
                        phiên dịch của trợ giảng khi thật sự cần thiết, trong những tình huống khó khăn.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên cung cấp ngôn ngữ cơ bản, hữu ích để học sinh có thể giao tiếp, diễn đạt
                        bằng tiếng Anh chuyên ngành hiệu quả.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên tận dụng tương tác ngẫu hứng, trao quyền cho học sinh sử dụng tiếng Anh
                        hiệu quả và/hoặc sáng tạo hơn.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Hầu hết học sinh sử dụng tiếng Anh trong giờ học với tổng thời gian sử dụng tiếng
                        Anh đạt hơn 80% bài học.
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
                        Giáo viên tạo nhiều cơ hội phát triển tích hợp các kỹ năng Tiếng Anh (nghe - nói -
                        đọc - viết).
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên thường xuyên nhắc nhở và điều chỉnh học sinh về phát âm và ngữ điệu sử
                        dụng Tiếng Anh.
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
                <td rowspan="4"><b>3E. Phát triển năng lực đặc thù bộ môn </b></td>
                <td rowspan="4"><b>3E.2. Xã hội </b>
                </td>
                <td class="basic">
                    <p>
                        Giáo viên giải nghĩa các từ ngữ, khái niệm, định nghĩa và/ hoặc những thuật ngữ mới khi
                        cần thiết.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên cung cấp ngôn ngữ cơ bản, hữu ích để học sinh có thể giao tiếp, diễn đạt bằng
                        Tiếng Việt hiệu quả.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên sử dụng những cơ hội, tình huống phát sinh trong lớp học để giúp học sinh phát
                        triển năng lực ngôn ngữ một cách hiệu quả và/ hoặc sáng tạo.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Phần lớn học sinh liên hệ được nội dung học với bản thân, cuộc sống và xã hội, và đúc
                        kết được những bài học về nhận thức, suy nghĩ và thái độ.
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
                        Giáo viên tạo nhiều cơ hội phát triển tích hợp các kỹ năng ngôn ngữ (nghe - nói - đọc -
                        viết).
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên sử dụng những cơ hội, tình huống phát sinh trong lớp học để giúp học sinh phát
                        triển các năng lực đặc thù khác của bộ môn một cách hiệu quả và/ hoặc sáng tạo.
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
                <td rowspan="4"><b>3E. Phát triển năng lực đặc thù bộ môn </b></td>
                <td rowspan="4"><b>3E.3. Toán </b>
                </td>
                <td class="basic">
                    <p>
                        Giáo viên giải nghĩa các từ ngữ, khái niệm, định nghĩa và/ hoặc những thuật ngữ mới khi
                        cần thiết.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên cung cấp ngôn ngữ cơ bản, hữu ích để học sinh có thể giao tiếp, diễn đạt bằng
                        ngôn ngữ Toán học hiệu quả.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên sử dụng những cơ hội, tình huống phát sinh trong lớp học để giúp học sinh phát
                        triển năng lực toán học một cách hiệu quả và/ hoặc sáng tạo.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Phần lớn học sinh liên hệ được nội dung học với cuộc sống và thế giới, và đúc kết, lý
                        giải được những quy luật Toán học trong thực tế.
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
                        Giáo viên tạo nhiều cơ hội phát triển tích hợp các kỹ năng toán học.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên sử dụng những cơ hội, tình huống phát sinh trong lớp học để giúp học sinh phát
                        triển các năng lực đặc thù khác của bộ môn một cách hiệu quả và/ hoặc sáng tạo.
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
                <td rowspan="4"><b>3E. Phát triển năng lực đặc thù bộ môn </b></td>
                <td rowspan="4"><b>3E.4. Tự nhiên</b>
                </td>
                <td class="basic">
                    <p>
                        Giáo viên giải nghĩa các từ ngữ, khái niệm, định nghĩa và/ hoặc những thuật ngữ mới khi
                        cần thiết.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên cung cấp ngôn ngữ cơ bản, hữu ích để học sinh có thể giao tiếp, diễn đạt bằng
                        ngôn ngữ khoa học hiệu quả.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên sử dụng những cơ hội, tình huống phát sinh trong lớp học để giúp học sinh phát
                        triển năng lực nghiên cứu khoa học một cách hiệu quả và/ hoặc sáng tạo.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Phần lớn học sinh liên hệ được nội dung học với cuộc sống và xã hội, và đúc kết được
                        những bài học về nhận thức, suy nghĩ và thái độ.
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
                        Giáo viên tạo nhiều cơ hội phát triển tích hợp các kỹ năng khoa học.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên sử dụng những cơ hội, tình huống phát sinh trong lớp học để giúp học sinh phát
                        triển các năng lực đặc thù khác của bộ môn một cách hiệu quả và/ hoặc sáng tạo.
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
                <td rowspan="4"><b>3E. Phát triển năng lực đặc thù bộ môn </b></td>
                <td rowspan="4"><b>3E.5. ATM </b>
                </td>
                <td class="basic">
                    <p>
                        Giáo viên giải nghĩa các từ ngữ, khái niệm, định nghĩa và/ hoặc những thuật ngữ mới khi
                        cần thiết.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Giáo viên cung cấp ngôn ngữ cơ bản, hữu ích để học sinh có thể giao tiếp, diễn đạt bằng
                        ngôn ngữ môn học (ATM) hiệu quả.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên sử dụng những cơ hội, tình huống phát sinh trong lớp học để giúp học sinh phát
                        triển năng lực chủ đạo của bộ môn một cách hiệu quả và/ hoặc sáng tạo.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Phần lớn học sinh liên hệ được nội dung học với bản thân, cuộc sống và xã hội, và đúc
                        kết được những bài học về nhận thức, suy nghĩ và thái độ.
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
                        Giáo viên tạo nhiều cơ hội phát triển tích hợp các kỹ năng trong môn học.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Giáo viên sử dụng những cơ hội, tình huống phát sinh trong lớp học để giúp học sinh phát
                        triển các năng lực đặc thù khác của bộ môn một cách hiệu quả và/ hoặc sáng tạo.
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
                    <b>PHẦN 4: PHÁT TRIỂN CHUYÊN MÔN </b>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="4"><b>4A. Hoạt động đào tạo </b></td>
                <td rowspan="4"><b></b></td>
                <td class="basic">
                    <p>
                        Tham gia đầy đủ chương trình/ hoạt động đào tạo và bồi dưỡng cấp toàn trường, cấp
                        học và tổ chuyên môn.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Hoàn thành tất cả các bài tập, nhiệm vụ của chương trình/ hoạt động đào tạo và bồi
                        dưỡng cấp toàn trường, trường và tổ chuyên môn, đạt mức yêu cầu tối thiểu của lộ
                        trình cá nhân.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Áp dụng hiệu quả các kiến thức, lý thuyết được đào tạo, bồi dưỡng trong công tác
                        giảng dạy và giáo dục.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Chia sẻ trải nghiệm áp dụng các kiến thức, lý thuyết được đào tạo, bồi dưỡng và/
                        hoặc những sáng kiến kinh nghiệm tự nghiên cứu/ phát triển, đáng được nhân rộng và
                        hệ thống hóa (được chọn và trình bày chia sẻ cấp trường).
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
                        Thành công xây dựng học phần đào tạo (module), được phê duyệt và triển khai trên hệ
                        thống.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Thành công trong việc hỗ trợ các đồng nghiệp trong trường (khác tổ bộ môn) triển
                        khai và được phản hồi tích cực.
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
                <td rowspan="4"><b>4B. Sinh hoạt tổ chuyên môn </b></td>
                <td rowspan="4"><b></b></td>
                <td class="basic">
                    <p>
                        Tham gia đầy đủ các lịch sinh hoạt tổ chuyên môn.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Hoàn thành tất cả các nhiệm vụ chuyên môn được phân công của tổ chuyên môn.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Đóng góp xây dựng, trình bày nội dung, chuyên đề cho hoạt động sinh hoạt tổ chuyên
                        môn.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Thành công chia sẻ các phương pháp dạy học đặc thù bộ môn được áp dụng thành công,
                        sáng tạo trong giảng dạy với các đồng nghiệp trong tổ bộ môn (được chọn và trình bày
                        chia sẻ trong tổ bộ môn).
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
                        Thành công trong việc hỗ trợ áp dụng thành công các phương pháp dạy học đặc thù bộ
                        môn với các đồng nghiệp trong tổ bộ môn, nhận được phản hồi tích cực.
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
                <td rowspan="2"><b>4C. Hoạt động nhà trường </b></td>
                <td rowspan="2"><b></b></td>
                <td class="basic">
                    <p>
                        Tham gia hoạt động phát triển nhà trường và/hoặc trải nghiệm, dự án học tập, CLB, sự
                        kiện,…
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Đóng góp xây dựng hoạt động phát triển nhà trường và/hoặc trải nghiệm, dự án học
                        tập, CLB, sự kiện,…
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Triển khai thành công hoạt động phát triển nhà trường và/hoặc trải nghiệm, dự án học
                        tập, CLB, sự kiện,… và nhận phản hồi tích cực từ các nhóm đối tượng liên quan.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Sẵn sàng hỗ trợ, tư vấn, đào tạo đồng nghiệp thực hiện các hoạt động phát triển nhà
                        trường, trải nghiệm, dự án học tập, CLB, sự kiện, v.v đã được phê duyệt(quy trình
                        hóa, hệ thống hóa, bàn giao được).
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
                <td rowspan="8"><b>4D. Phát triển chương trình </b></td>
                <td rowspan="4"><b>4D.1. Chuyên môn </b></td>
                <td class="basic">
                    <p>
                        Tham gia xây dựng tài liệu sử dụng cho lớp học (hand out, workshet, danh sách tài
                        liệu tham khảo,...).
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Tham gia xây dựng đề cương môn học (bao gồm ppct, giáo án mẫu) được HĐCM & Ban phát
                        triển chương trình phê duyệt.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Tham gia xây dựng ma trận, đề kiểm tra đánh giá môn học được phê duyệt, đóng gói và
                        triển khai hệ thống.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Xây dựng, đóng gói hệ thống tài liệu dạy học nội bộ (đóng quyển, in ấn) được phê
                        duyệt, triển khai toàn khối/ cấp.
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
                        Xây dựng khung CT tổng thể toàn cấp được phê duyệt và áp dụng cho toàn cấp học.
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
                <td rowspan="4"><b>4D.2. Chủ nhiệm/Advisor </b></td>
                <td class="basic">
                    <p>
                        Tham gia xây dựng chủ đề và tài liệu sử dụng cho lớp chủ nhiệm/advisor cho lớp học.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Tham gia xây dựng đề cương môn học (bao gồm ppct, giáo án mẫu) được HĐCM & Ban phát
                        triển chương trình phê duyệt.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Tham gia xây dựng ma trận, đề kiểm tra đánh giá môn học được phê duyệt, đóng gói và
                        triển khai hệ thống.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Xây dựng, đóng gói hệ thống tài liệu dạy học nội bộ (đóng quyển, in ấn) được phê
                        duyệt, triển khai toàn khối/ cấp.
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
                        Xây dựng khung CT tổng thể toàn cấp được phê duyệt và áp dụng cho toàn cấp học.
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
                    <b>PHẦN 5: CÔNG TÁC CHỦ NHIỆM & HÀNH CHÍNH </b>
                </td>
            </tr>
            <tr class="none-bot">
                <td rowspan="4"><b>5A. Quản lý hồ sơ học sinh </b></td>
                <td rowspan="4"><b></b></td>
                <td class="basic">
                    <p>
                        Cung cấp đầy đủ các đầu mục phản hồi trong hồ sơ học sinh.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Phản hồi về biểu hiện và tiến bộ của học sinh trong hồ sơ.
                    </p>
                </td>
                <td class="compe">
                    <p>
                        Tư vấn được các giải pháp, hỗ trợ thực hiện giải pháp thành công, lưu hồ sơ kết quả
                        thực hiện giúp học sinh liên tục phát triển.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Tư vấn, đào tạo được đồng nghiệp phản hồi và tư vấn học sinh liên tục phát triển, và
                        nhận phản hồi tích cực từ đồng nghiệp.
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
                        Tạo điểm nhấn khác biệt trong hồ sơ học sinh, giúp học sinh có cơ hội tham dự các
                        cuộc thi Quốc tế, dành học bổng,… và giành được các thành tích cao.
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
                <td rowspan="4"><b>5B. Giao tiếp với PHHS </b></td>
                <td rowspan="4"><b></b></td>
                <td class="basic">
                    <p>
                        Thực hiện đầy đủ các yêu cầu phản hồi của cấp QL về giao tiếp và xây dựng mối quan
                        hệ với PHHS.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Thực hiện kịp thời các yêu cầu phản hồi của cấp QL về giao tiếp và xây dựng mỗi quan
                        hệ với PHHS
                    </p>
                </td>
                <td class="compe">
                    <p>
                        PHHS hài lòng với thông tin, phản hồi, được tham gia thảo luận biện pháp giải quyết
                        vấn đề (nếu có) của/về học sinh.
                    </p>
                </td>
                <td class="outst">
                    <p>
                        Giải quyết mọi thắc mắc, khiếu nại của PHHS một cách hiệu quả mà không cần sự can
                        thiệp, hỗ trợ của cấp quản lý trực tiếp.
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
                        Xây dựng kịch bản, nội dung đào tạo phụ huynh đồng hành với các mục tiêu giáo dục
                        của nhà trường được phê duyệt và triển khai trên hệ thống có hiệu quả.
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
                <td rowspan="2"><b>5C. Hồ sơ sổ sách GV và sử dụng SO </b></td>
                <td rowspan="2"><b></b></td>
                <td class="basic">
                    <p>
                        Hoàn thành các đầu mục hồ sơ, sổ sách, sử dụng SO theo quy định của tổ bộ môn.
                    </p>
                </td>
                <td class="appro">
                    <p>
                        Hoàn thành đầy đủ và đúng thời hạn các đầu mục hồ sơ, sổ sách và sử dụng SO theo quy
                        định của văn phòng trường.
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
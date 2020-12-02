
<table id="customers">
    <thead>
        <tr>
            <th style="background-color: #b6d7a8;">id</th>
            <th style="background-color: #b6d7a8;">Ma_lop</th>
            <th style="background-color: #b6d7a8;">Ngay_giang</th>
            <th style="background-color: #b6d7a8;">Block</th>
            <th style="background-color: #b6d7a8;">Môn</th>
            <th style="background-color: #b6d7a8;">Lớp</th>
            <th style="background-color: #b6d7a8;">nguoi danh gia</th>
            <th style="background-color: #b6d7a8;">tk nguoi danh gia</th>
            <th style="background-color: #b6d7a8;">gv</th>
            <th style="background-color: #b6d7a8;">Email gv</th>
            <th style="background-color: #b6d7a8;">uu diem</th>
            <th style="background-color: #b6d7a8;">nhuoc diem</th>
            <th style="background-color: #b6d7a8;">Lesson content</th>
            <th style="background-color: #b6d7a8;">Lesson flow</th>
            <th style="background-color: #b6d7a8;">Objective</th>
            <th style="background-color: #b6d7a8;">Strengths</th>
            <th style="background-color: #b6d7a8;">Areas for improvement</th>
            <th style="background-color: #b6d7a8;">Ten</th>
            <th style="background-color: #b6d7a8;">Diem</th>
            <th style="background-color: #b6d7a8;">IsDat</th>
        </tr>
    </thead>
    <tbody>
        @foreach($evaluations as $evaluation)
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1A.1</td>
            @if ($evaluation->part1['p1a1']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1a1']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1A.1</td>
            @if ($evaluation->part1['p1a1']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1a1']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1A.2</td>
            @if ($evaluation->part1['p1a2']['basic_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1a2']['basic_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1A.2</td>
            @if ($evaluation->part1['p1a2']['appro_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1a2']['appro_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1A.2</td>
            @if ($evaluation->part1['p1a2']['compe_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1a2']['compe_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1A.2</td>
            @if ($evaluation->part1['p1a2']['outst_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1a2']['outst_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1A.2</td>
            @if ($evaluation->part1['p1a2']['appro_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1a2']['appro_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1A.2</td>
            @if ($evaluation->part1['p1a2']['compe_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1a2']['compe_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1A.2</td>
            @if ($evaluation->part1['p1a2']['outst_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1a2']['outst_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1A.3</td>
            @if ($evaluation->part1['p1a3']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1a3']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1A.3</td>
            @if ($evaluation->part1['p1a3']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1a3']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1A.3</td>
            @if ($evaluation->part1['p1a3']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1a3']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1B.1</td>
            @if ($evaluation->part1['p1b1']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1b1']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1B.1</td>
            @if ($evaluation->part1['p1b1']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1b1']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1B.1</td>
            @if ($evaluation->part1['p1b1']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1b1']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1B.2</td>
            @if ($evaluation->part1['p1b2']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1b2']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1B.2</td>
            @if ($evaluation->part1['p1b2']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1b2']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1B.2</td>
            @if ($evaluation->part1['p1b2']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1b2']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1B.2</td>
            @if ($evaluation->part1['p1b2']['outst'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1b2']['outst'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1C</td>
            @if ($evaluation->part1['p1c']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1c']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1C</td>
            @if ($evaluation->part1['p1c']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1c']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1C</td>
            @if ($evaluation->part1['p1c']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1c']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>1C</td>
            @if ($evaluation->part1['p1c']['outst'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part1['p1c']['outst'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2A.1</td>
            @if ($evaluation->part2['p2a1']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2a1']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2A.1</td>
            @if ($evaluation->part2['p2a1']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2a1']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2A.1</td>
            @if ($evaluation->part2['p2a1']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2a1']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2A.1</td>
            @if ($evaluation->part2['p2a1']['outst'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2a1']['outst'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2A.2</td>
            @if ($evaluation->part2['p2a2']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2a2']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2A.2</td>
            @if ($evaluation->part2['p2a2']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2a2']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2A.2</td>
            @if ($evaluation->part2['p2a2']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2a2']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2A.3</td>
            @if ($evaluation->part2['p2a3']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2a3']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2A.3</td>
            @if ($evaluation->part2['p2a3']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2a3']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2A.3</td>
            @if ($evaluation->part2['p2a3']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2a3']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2A.3</td>
            @if ($evaluation->part2['p2a3']['outst'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2a3']['outst'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2B.1</td>
            @if ($evaluation->part2['p2b1']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2b1']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2B.1</td>
            @if ($evaluation->part2['p2b1']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2b1']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2B2</td>
            @if ($evaluation->part2['p2b2']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2b2']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2B2</td>
            @if ($evaluation->part2['p2b2']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2b2']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2B2</td>
            @if ($evaluation->part2['p2b2']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2b2']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2B2</td>
            @if ($evaluation->part2['p2b2']['outst'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2b2']['outst'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2C.1</td>
            @if ($evaluation->part2['p2c1']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2c1']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2C.1</td>
            @if ($evaluation->part2['p2c1']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2c1']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2C.1</td>
            @if ($evaluation->part2['p2c1']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2c1']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2C.1</td>
            @if ($evaluation->part2['p2c1']['outst'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2c1']['outst'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2C.2</td>
            @if ($evaluation->part2['p2c2']['basic_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2c2']['basic_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2C.2</td>
            @if ($evaluation->part2['p2c2']['appro_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2c2']['appro_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2C.2</td>
            @if ($evaluation->part2['p2c2']['compe_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2c2']['compe_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2C.2</td>
            @if ($evaluation->part2['p2c2']['outst_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2c2']['outst_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2C.2</td>
            @if ($evaluation->part2['p2c2']['basic_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2c2']['basic_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2C.3</td>
            @if ($evaluation->part2['p2c3']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2c3']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2C.3</td>
            @if ($evaluation->part2['p2c3']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2c3']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>2C.3</td>
            @if ($evaluation->part2['p2c3']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part2['p2c3']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3A.1</td>
            @if ($evaluation->part3['p3a1']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3a1']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3A.1</td>
            @if ($evaluation->part3['p3a1']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3a1']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3A.1</td>
            @if ($evaluation->part3['p3a1']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3a1']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3A.2</td>
            @if ($evaluation->part3['p3a2']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3a2']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3A.2</td>
            @if ($evaluation->part3['p3a2']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3a2']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3A.2</td>
            @if ($evaluation->part3['p3a2']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3a2']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3A.2</td>
            @if ($evaluation->part3['p3a2']['outst'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3a2']['outst'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3A.3</td>
            @if ($evaluation->part3['p3a3']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3a3']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3A.3</td>
            @if ($evaluation->part3['p3a3']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3a3']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3A.3</td>
            @if ($evaluation->part3['p3a3']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3a3']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3A.3</td>
            @if ($evaluation->part3['p3a3']['outst'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3a3']['outst'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.1</td>
            @if ($evaluation->part3['p3b1']['basic_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b1']['basic_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.1</td>
            @if ($evaluation->part3['p3b1']['appro_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b1']['appro_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.1</td>
            @if ($evaluation->part3['p3b1']['compe_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b1']['compe_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.1</td>
            @if ($evaluation->part3['p3b1']['outst_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b1']['outst_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.1</td>
            @if ($evaluation->part3['p3b1']['basic_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b1']['basic_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.1</td>
            @if ($evaluation->part3['p3b1']['appro_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b1']['appro_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.1</td>
            @if ($evaluation->part3['p3b1']['compe_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b1']['compe_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.1</td>
            @if ($evaluation->part3['p3b1']['outst_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b1']['outst_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.1</td>
            @if ($evaluation->part3['p3b1']['basic_3'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b1']['basic_3'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.1</td>
            @if ($evaluation->part3['p3b1']['appro_3'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b1']['appro_3'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.1</td>
            @if ($evaluation->part3['p3b1']['compe_3'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b1']['compe_3'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.1</td>
            @if ($evaluation->part3['p3b1']['outst_3'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b1']['outst_3'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.2</td>
            @if ($evaluation->part3['p3b2']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b2']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.2</td>
            @if ($evaluation->part3['p3b2']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b2']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.2</td>
            @if ($evaluation->part3['p3b2']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b2']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.2</td>
            @if ($evaluation->part3['p3b2']['outst'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b2']['outst'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.3</td>
            @if ($evaluation->part3['p3b3']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b3']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.3</td>
            @if ($evaluation->part3['p3b3']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b3']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.3</td>
            @if ($evaluation->part3['p3b3']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b3']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3B.3</td>
            @if ($evaluation->part3['p3b3']['outst'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3b3']['outst'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3C.1</td>
            @if ($evaluation->part3['p3c1']['basic_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3c1']['basic_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3C.1</td>
            @if ($evaluation->part3['p3c1']['appro_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3c1']['appro_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3C.1</td>
            @if ($evaluation->part3['p3c1']['compe_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3c1']['compe_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3C.1</td>
            @if ($evaluation->part3['p3c1']['outst_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3c1']['outst_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3C.1</td>
            @if ($evaluation->part3['p3c1']['basic_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3c1']['basic_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3C.1</td>
            @if ($evaluation->part3['p3c1']['appro_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3c1']['appro_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3C.2</td>
            @if ($evaluation->part3['p3c2']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3c2']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3C.2</td>
            @if ($evaluation->part3['p3c2']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3c2']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3C.2</td>
            @if ($evaluation->part3['p3c2']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3c2']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3C.2</td>
            @if ($evaluation->part3['p3c2']['outst'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3c2']['outst'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3D.1</td>
            @if ($evaluation->part3['p3d1']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3d1']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3D.1</td>
            @if ($evaluation->part3['p3d1']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3d1']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3D.1</td>
            @if ($evaluation->part3['p3d1']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3d1']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3D.2</td>
            @if ($evaluation->part3['p3d2']['basic_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3d2']['basic_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3D.2</td>
            @if ($evaluation->part3['p3d2']['appro_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3d2']['appro_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3D.2</td>
            @if ($evaluation->part3['p3d2']['compe_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3d2']['compe_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3D.2</td>
            @if ($evaluation->part3['p3d2']['outst_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3d2']['outst_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3D.2</td>
            @if ($evaluation->part3['p3d2']['basic_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3d2']['basic_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3D.2</td>
            @if ($evaluation->part3['p3d2']['appro_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3d2']['appro_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3D.2</td>
            @if ($evaluation->part3['p3d2']['compe_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3d2']['compe_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3D.2</td>
            @if ($evaluation->part3['p3d2']['outst_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3d2']['outst_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3E</td>
            @if ($evaluation->part3['p3e1']['basic_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3e1']['basic_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3E</td>
            @if ($evaluation->part3['p3e1']['appro_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3e1']['appro_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3E</td>
            @if ($evaluation->part3['p3e1']['compe_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3e1']['compe_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3E</td>
            @if ($evaluation->part3['p3e1']['outst_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3e1']['outst_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3E</td>
            @if ($evaluation->part3['p3e1']['appro_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3e1']['appro_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>3E</td>
            @if ($evaluation->part3['p3e1']['compe_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part3['p3e1']['compe_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4A</td>
            @if ($evaluation->part4['p4a']['basic_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4a']['basic_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4A</td>
            @if ($evaluation->part4['p4a']['appro_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4a']['appro_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4A</td>
            @if ($evaluation->part4['p4a']['compe_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4a']['compe_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4A</td>
            @if ($evaluation->part4['p4a']['outst_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4a']['outst_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4A</td>
            @if ($evaluation->part4['p4a']['compe_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4a']['compe_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4A</td>
            @if ($evaluation->part4['p4a']['outst_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4a']['outst_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4B</td>
            @if ($evaluation->part4['p4b']['basic_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4b']['basic_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4B</td>
            @if ($evaluation->part4['p4b']['appro_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4b']['appro_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4B</td>
            @if ($evaluation->part4['p4b']['compe_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4b']['compe_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4B</td>
            @if ($evaluation->part4['p4b']['outst_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4b']['outst_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4B</td>
            @if ($evaluation->part4['p4b']['outst_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4b']['outst_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4C</td>
            @if ($evaluation->part4['p4c']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4c']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4C</td>
            @if ($evaluation->part4['p4c']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4c']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4C</td>
            @if ($evaluation->part4['p4c']['compe'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4c']['compe'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4C</td>
            @if ($evaluation->part4['p4c']['outst'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4c']['outst'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4D.1</td>
            @if ($evaluation->part4['p4d1']['basic_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4d1']['basic_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4D.1</td>
            @if ($evaluation->part4['p4d1']['appro_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4d1']['appro_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4D.1</td>
            @if ($evaluation->part4['p4d1']['compe_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4d1']['compe_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4D.1</td>
            @if ($evaluation->part4['p4d1']['outst_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4d1']['outst_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4D.1</td>
            @if ($evaluation->part4['p4d1']['outst_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4d1']['outst_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4D.2</td>
            @if ($evaluation->part4['p4d2']['basic_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4d2']['basic_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4D.2</td>
            @if ($evaluation->part4['p4d2']['appro_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4d2']['appro_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4D.2</td>
            @if ($evaluation->part4['p4d2']['compe_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4d2']['compe_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4D.2</td>
            @if ($evaluation->part4['p4d2']['outst_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4d2']['outst_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>4D.2</td>
            @if ($evaluation->part4['p4d2']['outst_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part4['p4d2']['outst_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>5A</td>
            @if ($evaluation->part5['p5a']['basic_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part5['p5a']['basic_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>5A</td>
            @if ($evaluation->part5['p5a']['appro_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part5['p5a']['appro_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>5A</td>
            @if ($evaluation->part5['p5a']['compe_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part5['p5a']['compe_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>5A</td>
            @if ($evaluation->part5['p5a']['outst_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part5['p5a']['outst_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>5A</td>
            @if ($evaluation->part5['p5a']['outst_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part5['p5a']['outst_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>5B</td>
            @if ($evaluation->part5['p5b']['basic_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part5['p5b']['basic_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>5B</td>
            @if ($evaluation->part5['p5b']['appro_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part5['p5b']['appro_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>5B</td>
            @if ($evaluation->part5['p5b']['compe_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part5['p5b']['compe_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>5B</td>
            @if ($evaluation->part5['p5b']['outst_1'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part5['p5b']['outst_1'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>5B</td>
            @if ($evaluation->part5['p5b']['outst_2'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part5['p5b']['outst_2'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>5C</td>
            @if ($evaluation->part5['p5c']['basic'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part5['p5c']['basic'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->subject->code_name }}</td>
            <td>{{ $evaluation->test }}</td>
            <td>{{ $evaluation->schedule->id_session }}</td>
            <td>{{ $evaluation->subject->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>{!! $evaluation->content !!}</td>
            <td>{!! $evaluation->lesson_flow !!}</td>
            <td>{!! $evaluation->objective !!}</td>
            <td>{!! $evaluation->strengths !!}</td>
            <td>{!! $evaluation->improvement !!}</td>
            <td>5C</td>
            @if ($evaluation->part5['p5c']['appro'] == null)
            <td>0</td>
            <td>FALSE</td>
            @else
            <td>{{ $evaluation->part5['p5c']['appro'] }}</td>
            <td>TRUE</td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>

<table id="customers">
    <thead>
        <tr>
            <th style="background-color: #b6d7a8;">id</th>
            <th style="background-color: #b6d7a8;">Ten_co_so</th>
            <th style="background-color: #b6d7a8;">Ma_lop</th>
            <th style="background-color: #b6d7a8;">Ngay_giang</th>
            <th style="background-color: #b6d7a8;">nguoi danh gia</th>
            <th style="background-color: #b6d7a8;">tk nguoi danh gia</th>
            <th style="background-color: #b6d7a8;">gv</th>
            <th style="background-color: #b6d7a8;">Email gv</th>
            <th style="background-color: #b6d7a8;">uu diem</th>
            <th style="background-color: #b6d7a8;">nhuoc diem</th>
            <th style="background-color: #b6d7a8;">Ten</th>
            <th style="background-color: #b6d7a8;">Diem</th>
            <th style="background-color: #b6d7a8;">IsDat</th>
        </tr>
    </thead>
    <tbody>
        @foreach($evaluations as $evaluation)
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2A.1</td>
            <td>{{ $evaluation->part2a['p2a1']['basic'] }}</td>
            <td> @if ($evaluation->part2a['p2a1']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2A.1</td>
            <td>{{ $evaluation->part2a['p2a1']['appro'] }}</td>
            <td> @if ($evaluation->part2a['p2a1']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2A.1</td>
            <td>{{ $evaluation->part2a['p2a1']['compe'] }}</td>
            <td> @if ($evaluation->part2a['p2a1']['compe'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2A.1</td>
            <td>{{ $evaluation->part2a['p2a1']['outst'] }}</td>
            <td> @if ($evaluation->part2a['p2a1']['outst'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>


        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2A.2</td>
            <td>{{ $evaluation->part2a['p2a2']['basic'] }}</td>
            <td> @if ($evaluation->part2a['p2a2']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2A.2</td>
            <td>{{ $evaluation->part2a['p2a2']['appro'] }}</td>
            <td> @if ($evaluation->part2a['p2a2']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2A.2</td>
            <td>{{ $evaluation->part2a['p2a2']['compe'] }}</td>
            <td> @if ($evaluation->part2a['p2a2']['compe'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2A.2</td>
            <td>{{ $evaluation->part2a['p2a2']['outst'] }}</td>
            <td> @if ($evaluation->part2a['p2a2']['outst'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>


        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2A.3</td>
            <td>{{ $evaluation->part2a['p2a3']['basic'] }}</td>
            <td> @if ($evaluation->part2a['p2a3']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2A.3</td>
            <td>{{ $evaluation->part2a['p2a3']['appro'] }}</td>
            <td> @if ($evaluation->part2a['p2a3']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2A.3</td>
            <td>{{ $evaluation->part2a['p2a3']['compe'] }}</td>
            <td> @if ($evaluation->part2a['p2a3']['compe'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>

        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2B.1</td>
            <td>{{ $evaluation->part2b['p2b1']['basic'] }}</td>
            <td> @if ($evaluation->part2b['p2b1']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2B.1</td>
            <td>{{ $evaluation->part2b['p2b1']['appro'] }}</td>
            <td> @if ($evaluation->part2b['p2b1']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>

        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2B.2</td>
            <td>{{ $evaluation->part2b['p2b2']['basic'] }}</td>
            <td> @if ($evaluation->part2b['p2b2']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2B.2</td>
            <td>{{ $evaluation->part2b['p2b2']['appro'] }}</td>
            <td> @if ($evaluation->part2b['p2b2']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2B.2</td>
            <td>{{ $evaluation->part2b['p2b2']['compe'] }}</td>
            <td> @if ($evaluation->part2b['p2b2']['compe'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2B.2</td>
            <td>{{ $evaluation->part2b['p2b2']['outst'] }}</td>
            <td> @if ($evaluation->part2b['p2b2']['outst'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>


        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2C</td>
            <td>{{ $evaluation->part2c['p2c']['basic'] }}</td>
            <td> @if ($evaluation->part2c['p2c']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2C</td>
            <td>{{ $evaluation->part2c['p2c']['appro'] }}</td>
            <td> @if ($evaluation->part2c['p2c']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2C</td>
            <td>{{ $evaluation->part2c['p2c']['compe'] }}</td>
            <td> @if ($evaluation->part2c['p2c']['compe'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2C</td>
            <td>{{ $evaluation->part2c['p2c']['outst'] }}</td>
            <td> @if ($evaluation->part2c['p2c']['outst'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>

        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2D.1</td>
            <td>{{ $evaluation->part2d['p2d1']['basic'] }}</td>
            <td> @if ($evaluation->part2d['p2d1']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2D.1</td>
            <td>{{ $evaluation->part2d['p2d1']['appro'] }}</td>
            <td> @if ($evaluation->part2d['p2d1']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2D.1</td>
            <td>{{ $evaluation->part2d['p2d1']['compe'] }}</td>
            <td> @if ($evaluation->part2d['p2d1']['compe'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2D.1</td>
            <td>{{ $evaluation->part2d['p2d1']['outst'] }}</td>
            <td> @if ($evaluation->part2d['p2d1']['outst'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>

        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2D.2</td>
            <td>{{ $evaluation->part2d['p2d2']['basic'] }}</td>
            <td> @if ($evaluation->part2d['p2d2']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2D.2</td>
            <td>{{ $evaluation->part2d['p2d2']['appro'] }}</td>
            <td> @if ($evaluation->part2d['p2d2']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>2D.2</td>
            <td>{{ $evaluation->part2d['p2d2']['compe'] }}</td>
            <td> @if ($evaluation->part2d['p2d2']['compe'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>

        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.1</td>
            <td>{{ $evaluation->part3a['p3a1']['basic'] }}</td>
            <td> @if ($evaluation->part3a['p3a1']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.1</td>
            <td>{{ $evaluation->part3a['p3a1']['appro'] }}</td>
            <td> @if ($evaluation->part3a['p3a1']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>



        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.2</td>
            <td>{{ $evaluation->part3a['p3a2']['basic'] }}</td>
            <td> @if ($evaluation->part3a['p3a2']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.2</td>
            <td>{{ $evaluation->part3a['p3a2']['appro'] }}</td>
            <td> @if ($evaluation->part3a['p3a2']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.2</td>
            <td>{{ $evaluation->part3a['p3a2']['compe'] }}</td>
            <td> @if ($evaluation->part3a['p3a2']['compe'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.2</td>
            <td>{{ $evaluation->part3a['p3a2']['outst'] }}</td>
            <td> @if ($evaluation->part3a['p3a2']['outst'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>


        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.3</td>
            <td>{{ $evaluation->part3a['p3a3']['basic'] }}</td>
            <td> @if ($evaluation->part3a['p3a3']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.3</td>
            <td>{{ $evaluation->part3a['p3a3']['appro'] }}</td>
            <td> @if ($evaluation->part3a['p3a3']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.3</td>
            <td>{{ $evaluation->part3a['p3a3']['compe'] }}</td>
            <td> @if ($evaluation->part3a['p3a3']['compe'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.3</td>
            <td>{{ $evaluation->part3a['p3a3']['outst'] }}</td>
            <td> @if ($evaluation->part3a['p3a3']['outst'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>

        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.4</td>
            <td>{{ $evaluation->part3a['p3a4']['basic_1'] }}</td>
            <td> @if ($evaluation->part3a['p3a4']['basic_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.4</td>
            <td>{{ $evaluation->part3a['p3a4']['appro_1'] }}</td>
            <td> @if ($evaluation->part3a['p3a4']['appro_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.4</td>
            <td>{{ $evaluation->part3a['p3a4']['compe_1'] }}</td>
            <td> @if ($evaluation->part3a['p3a4']['compe_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.4</td>
            <td>{{ $evaluation->part3a['p3a4']['outst_1'] }}</td>
            <td> @if ($evaluation->part3a['p3a4']['outst_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.4</td>
            <td>{{ $evaluation->part3a['p3a4']['basic_2'] }}</td>
            <td> @if ($evaluation->part3a['p3a4']['basic_2'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.4</td>
            <td>{{ $evaluation->part3a['p3a4']['appro_2'] }}</td>
            <td> @if ($evaluation->part3a['p3a4']['appro_2'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.4</td>
            <td>{{ $evaluation->part3a['p3a4']['compe_2'] }}</td>
            <td> @if ($evaluation->part3a['p3a4']['compe_2'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3A.4</td>
            <td>{{ $evaluation->part3a['p3a4']['outst_2'] }}</td>
            <td> @if ($evaluation->part3a['p3a4']['outst_2'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>


        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3B.1</td>
            <td>{{ $evaluation->part3b['p3b1']['basic_1'] }}</td>
            <td> @if ($evaluation->part3b['p3b1']['basic_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3B.1</td>
            <td>{{ $evaluation->part3b['p3b1']['appro_1'] }}</td>
            <td> @if ($evaluation->part3b['p3b1']['appro_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3B.1</td>
            <td>{{ $evaluation->part3b['p3b1']['compe_1'] }}</td>
            <td> @if ($evaluation->part3b['p3b1']['compe_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3B.1</td>
            <td>{{ $evaluation->part3b['p3b1']['outst_1'] }}</td>
            <td> @if ($evaluation->part3b['p3b1']['outst_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3B.1</td>
            <td>{{ $evaluation->part3b['p3b1']['basic_2'] }}</td>
            <td> @if ($evaluation->part3b['p3b1']['basic_2'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3B.1</td>
            <td>{{ $evaluation->part3b['p3b1']['appro_2'] }}</td>
            <td> @if ($evaluation->part3b['p3b1']['appro_2'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3B.1</td>
            <td>{{ $evaluation->part3b['p3b1']['compe_2'] }}</td>
            <td> @if ($evaluation->part3b['p3b1']['compe_2'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3B.1</td>
            <td>{{ $evaluation->part3b['p3b1']['outst_2'] }}</td>
            <td> @if ($evaluation->part3b['p3b1']['outst_2'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>


        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3B.2</td>
            <td>{{ $evaluation->part3b['p3b2']['basic'] }}</td>
            <td> @if ($evaluation->part3b['p3b2']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3B.2</td>
            <td>{{ $evaluation->part3b['p3b2']['appro'] }}</td>
            <td> @if ($evaluation->part3b['p3b2']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3B.2</td>
            <td>{{ $evaluation->part3b['p3b2']['compe'] }}</td>
            <td> @if ($evaluation->part3b['p3b2']['compe'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3B.2</td>
            <td>{{ $evaluation->part3b['p3b2']['outst'] }}</td>
            <td> @if ($evaluation->part3b['p3b2']['outst'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>


        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3C.1</td>
            <td>{{ $evaluation->part3c['p3c1']['basic_1'] }}</td>
            <td> @if ($evaluation->part3c['p3c1']['basic_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3C.1</td>
            <td>{{ $evaluation->part3c['p3c1']['appro_1'] }}</td>
            <td> @if ($evaluation->part3c['p3c1']['appro_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3C.1</td>
            <td>{{ $evaluation->part3c['p3c1']['compe_1'] }}</td>
            <td> @if ($evaluation->part3c['p3c1']['compe_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3C.1</td>
            <td>{{ $evaluation->part3c['p3c1']['outst_1'] }}</td>
            <td> @if ($evaluation->part3c['p3c1']['outst_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3C.1</td>
            <td>{{ $evaluation->part3c['p3c1']['basic_2'] }}</td>
            <td> @if ($evaluation->part3c['p3c1']['basic_2'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>



        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3C.2</td>
            <td>{{ $evaluation->part3c['p3c2']['basic'] }}</td>
            <td> @if ($evaluation->part3c['p3c2']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3C.2</td>
            <td>{{ $evaluation->part3c['p3c2']['appro'] }}</td>
            <td> @if ($evaluation->part3c['p3c2']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3C.2</td>
            <td>{{ $evaluation->part3c['p3c2']['compe'] }}</td>
            <td> @if ($evaluation->part3c['p3c2']['compe'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3C.2</td>
            <td>{{ $evaluation->part3c['p3c2']['outst'] }}</td>
            <td> @if ($evaluation->part3c['p3c2']['outst'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>


        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3D.1</td>
            <td>{{ $evaluation->part3d['p3d1']['basic'] }}</td>
            <td> @if ($evaluation->part3d['p3d1']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3D.1</td>
            <td>{{ $evaluation->part3d['p3d1']['appro'] }}</td>
            <td> @if ($evaluation->part3d['p3d1']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3D.1</td>
            <td>{{ $evaluation->part3d['p3d1']['compe'] }}</td>
            <td> @if ($evaluation->part3d['p3d1']['compe'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3D.1</td>
            <td>{{ $evaluation->part3d['p3d1']['outst'] }}</td>
            <td> @if ($evaluation->part3d['p3d1']['outst'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>



        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3D.2</td>
            <td>{{ $evaluation->part3d['p3d2']['basic_1'] }}</td>
            <td> @if ($evaluation->part3d['p3d2']['basic_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3D.2</td>
            <td>{{ $evaluation->part3d['p3d2']['appro_1'] }}</td>
            <td> @if ($evaluation->part3d['p3d2']['appro_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3D.2</td>
            <td>{{ $evaluation->part3d['p3d2']['compe_1'] }}</td>
            <td> @if ($evaluation->part3d['p3d2']['compe_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3D.2</td>
            <td>{{ $evaluation->part3d['p3d2']['outst_1'] }}</td>
            <td> @if ($evaluation->part3d['p3d2']['outst_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3D.2</td>
            <td>{{ $evaluation->part3d['p3d2']['basic_2'] }}</td>
            <td> @if ($evaluation->part3d['p3d2']['basic_2'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3D.2</td>
            <td>{{ $evaluation->part3d['p3d2']['appro_2'] }}</td>
            <td> @if ($evaluation->part3d['p3d2']['appro_2'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3D.2</td>
            <td>{{ $evaluation->part3d['p3d2']['compe_2'] }}</td>
            <td> @if ($evaluation->part3d['p3d2']['compe_2'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3D.2</td>
            <td>{{ $evaluation->part3d['p3d2']['outst_2'] }}</td>
            <td> @if ($evaluation->part3d['p3d2']['outst_2'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3D.2</td>
            <td>{{ $evaluation->part3d['p3d2']['basic_3'] }}</td>
            <td> @if ($evaluation->part3d['p3d2']['basic_3'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3D.2</td>
            <td>{{ $evaluation->part3d['p3d2']['appro_3'] }}</td>
            <td> @if ($evaluation->part3d['p3d2']['appro_3'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>3D.2</td>
            <td>{{ $evaluation->part3d['p3d2']['compe_3'] }}</td>
            <td> @if ($evaluation->part3d['p3d2']['compe_3'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>

        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4A.1</td>
            <td>{{ $evaluation->part4a['p4a1']['basic'] }}</td>
            <td> @if ($evaluation->part4a['p4a1']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4A.1</td>
            <td>{{ $evaluation->part4a['p4a1']['appro'] }}</td>
            <td> @if ($evaluation->part4a['p4a1']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4A.1</td>
            <td>{{ $evaluation->part4a['p4a1']['compe'] }}</td>
            <td> @if ($evaluation->part4a['p4a1']['compe'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>


        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4A.2</td>
            <td>{{ $evaluation->part4a['p4a2']['basic_1'] }}</td>
            <td> @if ($evaluation->part4a['p4a2']['basic_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4A.2</td>
            <td>{{ $evaluation->part4a['p4a2']['appro_1'] }}</td>
            <td> @if ($evaluation->part4a['p4a2']['appro_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4A.2</td>
            <td>{{ $evaluation->part4a['p4a2']['compe_1'] }}</td>
            <td> @if ($evaluation->part4a['p4a2']['compe_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4A.2</td>
            <td>{{ $evaluation->part4a['p4a2']['outst_1'] }}</td>
            <td> @if ($evaluation->part4a['p4a2']['outst_1'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4A.2</td>
            <td>{{ $evaluation->part4a['p4a2']['appro_2'] }}</td>
            <td> @if ($evaluation->part4a['p4a2']['appro_2'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4A.2</td>
            <td>{{ $evaluation->part4a['p4a2']['compe_2'] }}</td>
            <td> @if ($evaluation->part4a['p4a2']['compe_2'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4A.2</td>
            <td>{{ $evaluation->part4a['p4a2']['outst_2'] }}</td>
            <td> @if ($evaluation->part4a['p4a2']['outst_2'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>

        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4B</td>
            <td>{{ $evaluation->part4b['p4b']['basic'] }}</td>
            <td> @if ($evaluation->part4b['p4b']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4B</td>
            <td>{{ $evaluation->part4b['p4b']['appro'] }}</td>
            <td> @if ($evaluation->part4b['p4b']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4B</td>
            <td>{{ $evaluation->part4b['p4b']['compe'] }}</td>
            <td> @if ($evaluation->part4b['p4b']['compe'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4B</td>
            <td>{{ $evaluation->part4b['p4b']['outst'] }}</td>
            <td> @if ($evaluation->part4b['p4b']['outst'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>

        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4C</td>
            <td>{{ $evaluation->part4c['p4c']['basic'] }}</td>
            <td> @if ($evaluation->part4c['p4c']['basic'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4C</td>
            <td>{{ $evaluation->part4c['p4c']['appro'] }}</td>
            <td> @if ($evaluation->part4c['p4c']['appro'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4C</td>
            <td>{{ $evaluation->part4c['p4c']['compe'] }}</td>
            <td> @if ($evaluation->part4c['p4c']['compe'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>
        <tr>
            <td>{{ $evaluation->id }}</td>
            <td>{{ $evaluation->location->name }}</td>
            <td>{{ $evaluation->schedule->class }}</td>
            <td>{{ $evaluation->schedule->time1 }}</td>
            <td>{{ $evaluation->user->name }}</td>
            <td>{{ $evaluation->user->email }}</td>
            <td>{{ $evaluation->teacher->fullname }}</td>
            <td>{{ $evaluation->teacher->email }}</td>
            <td></td>
            <td></td>
            <td>4C</td>
            <td>{{ $evaluation->part4c['p4c']['outst'] }}</td>
            <td> @if ($evaluation->part4c['p4c']['outst'] == null)
                FALSE
                @else
                TRUE
                @endif </td>
        </tr>

        @endforeach
    </tbody>
</table>
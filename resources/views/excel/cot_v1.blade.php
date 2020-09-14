<table>
    <thead>
        <tr style="font-weight: 800;">
            <th>id</th>
            <th>Ten_co_so</th>
            <th>Ma_lop</th>
            <th>Ngay_giang</th>
            <th>nguoi danh gia</th>
            <th>tk nguoi danh gia</th>
            <th>gv</th>
            <th>Email gv</th>
            <th>uu diem</th>
            <th>nhuoc diem</th>
            <div>
                <th>2A.1</th>
                <th>2A.1</th>
                <th>2A.1</th>
                <th>2A.1</th>
    
                <th>2A.2</th>
                <th>2A.2</th>
                <th>2A.2</th>
                <th>2A.2</th>
    
                <th>2A.3</th>
                <th>2A.3</th>
                <th>2A.3</th>
    
                <th>2B.1</th>
                <th>2B.1</th>
    
                <th>2B.2</th>
                <th>2B.2</th>
                <th>2B.2</th>
                <th>2B.2</th>
    
                <th>2C</th>
                <th>2C</th>
                <th>2C</th>
                <th>2C</th>
    
                <th>2D.1</th>
                <th>2D.1</th>
                <th>2D.1</th>
                <th>2D.1</th>
    
                <th>2D.2</th>
                <th>2D.2</th>
                <th>2D.2</th>
                
                <th>3B.1</th>
                <th>3B.1</th>
    
                <th>3B.2</th>
                <th>3B.2</th>
                <th>3B.2</th>
                <th>3B.2</th>
    
                <th>3B.3</th>
                <th>3B.3</th>
                <th>3B.3</th>
                <th>3B.3</th>
    
                <th>3A.4</th>
                <th>3A.4</th>
                <th>3A.4</th>
                <th>3A.4</th>
                <th>3A.4</th>
                <th>3A.4</th>
                <th>3A.4</th>
                <th>3A.4</th>
                
                <th>3B.1</th>
                <th>3B.1</th>
                <th>3B.1</th>
                <th>3B.1</th>
                <th>3B.1</th>
                <th>3B.1</th>
                <th>3B.1</th>
                <th>3B.1</th>
                
                <th>3B.2</th>
                <th>3B.2</th>
                <th>3B.2</th>
                <th>3B.2</th>
    
                <th>3C.1</th>
                <th>3C.1</th>
                <th>3C.1</th>
                <th>3C.1</th>
                <th>3C.1</th>
                
                <th>3C.2</th>
                <th>3C.2</th>
                <th>3C.2</th>
                <th>3C.2</th>
    
                <th>3D.1</th>
                <th>3D.1</th>
                <th>3D.1</th>
                <th>3D.1</th>
                
                <th>3D.2</th>
                <th>3D.2</th>
                <th>3D.2</th>
                <th>3D.2</th>
                <th>3D.2</th>
                <th>3D.2</th>
                <th>3D.2</th>
                <th>3D.2</th>
                <th>3D.2</th>
                <th>3D.2</th>
                <th>3D.2</th>
                
                <th>4A.1</th>
                <th>4A.1</th>
                <th>4A.1</th>
    
                <th>4A.2</th>
                <th>4A.2</th>
                <th>4A.2</th>
                <th>4A.2</th>
                <th>4A.2</th>
                <th>4A.2</th>
                <th>4A.2</th>
                
                <th>4B</th>
                <th>4B</th>
                <th>4B</th>
                <th>4B</th>
                
                <th>4C</th>
                <th>4C</th>
                <th>4C</th>
                <th>4C</th>
            </div>
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
            <td>{{ $evaluation->part2a['p2a1']['basic'] }}</td>
            <td>{{ $evaluation->part2a['p2a1']['appro'] }}</td>
            <td>{{ $evaluation->part2a['p2a1']['compe'] }}</td>
            <td>{{ $evaluation->part2a['p2a1']['outst'] }}</td>
            <td>{{ $evaluation->part2a['p2a2']['basic'] }}</td>
            <td>{{ $evaluation->part2a['p2a2']['appro'] }}</td>
            <td>{{ $evaluation->part2a['p2a2']['compe'] }}</td>
            <td>{{ $evaluation->part2a['p2a2']['outst'] }}</td>
            <td>{{ $evaluation->part2a['p2a3']['basic'] }}</td>
            <td>{{ $evaluation->part2a['p2a3']['appro'] }}</td>
            <td>{{ $evaluation->part2a['p2a3']['compe'] }}</td>
            
            <td>{{ $evaluation->part2b['p2b1']['basic'] }}</td>
            <td>{{ $evaluation->part2b['p2b1']['appro'] }}</td>
            <td>{{ $evaluation->part2b['p2b2']['basic'] }}</td>
            <td>{{ $evaluation->part2b['p2b2']['appro'] }}</td>
            <td>{{ $evaluation->part2b['p2b2']['compe'] }}</td>
            <td>{{ $evaluation->part2b['p2b2']['outst'] }}</td>
            
            <td>{{ $evaluation->part2c['p2c']['basic'] }}</td>
            <td>{{ $evaluation->part2c['p2c']['appro'] }}</td>
            <td>{{ $evaluation->part2c['p2c']['compe'] }}</td>
            <td>{{ $evaluation->part2c['p2c']['outst'] }}</td>
            
            <td>{{ $evaluation->part2d['p2d1']['basic'] }}</td>
            <td>{{ $evaluation->part2d['p2d1']['appro'] }}</td>
            <td>{{ $evaluation->part2d['p2d1']['compe'] }}</td>
            <td>{{ $evaluation->part2d['p2d1']['outst'] }}</td>
            <td>{{ $evaluation->part2d['p2d2']['basic'] }}</td>
            <td>{{ $evaluation->part2d['p2d2']['appro'] }}</td>
            <td>{{ $evaluation->part2d['p2d2']['compe'] }}</td>
            
            <td>{{ $evaluation->part3a['p3a1']['basic'] }}</td>
            <td>{{ $evaluation->part3a['p3a1']['appro'] }}</td>
            <td>{{ $evaluation->part3a['p3a2']['basic'] }}</td>
            <td>{{ $evaluation->part3a['p3a2']['appro'] }}</td>
            <td>{{ $evaluation->part3a['p3a2']['compe'] }}</td>
            <td>{{ $evaluation->part3a['p3a2']['outst'] }}</td>
            <td>{{ $evaluation->part3a['p3a3']['basic'] }}</td>
            <td>{{ $evaluation->part3a['p3a3']['appro'] }}</td>
            <td>{{ $evaluation->part3a['p3a3']['compe'] }}</td>
            <td>{{ $evaluation->part3a['p3a3']['outst'] }}</td>
            <td>{{ $evaluation->part3a['p3a4']['basic_1'] }}</td>
            <td>{{ $evaluation->part3a['p3a4']['appro_1'] }}</td>
            <td>{{ $evaluation->part3a['p3a4']['compe_1'] }}</td>
            <td>{{ $evaluation->part3a['p3a4']['outst_1'] }}</td>
            <td>{{ $evaluation->part3a['p3a4']['basic_2'] }}</td>
            <td>{{ $evaluation->part3a['p3a4']['appro_2'] }}</td>
            <td>{{ $evaluation->part3a['p3a4']['compe_2'] }}</td>
            <td>{{ $evaluation->part3a['p3a4']['outst_2'] }}</td>
            
            <td>{{ $evaluation->part3b['p3b1']['basic_1'] }}</td>
            <td>{{ $evaluation->part3b['p3b1']['appro_1'] }}</td>
            <td>{{ $evaluation->part3b['p3b1']['compe_1'] }}</td>
            <td>{{ $evaluation->part3b['p3b1']['outst_1'] }}</td>
            <td>{{ $evaluation->part3b['p3b1']['basic_2'] }}</td>
            <td>{{ $evaluation->part3b['p3b1']['appro_2'] }}</td>
            <td>{{ $evaluation->part3b['p3b1']['compe_2'] }}</td>
            <td>{{ $evaluation->part3b['p3b1']['outst_2'] }}</td>
            <td>{{ $evaluation->part3b['p3b2']['basic'] }}</td>
            <td>{{ $evaluation->part3b['p3b2']['appro'] }}</td>
            <td>{{ $evaluation->part3b['p3b2']['compe'] }}</td>
            <td>{{ $evaluation->part3b['p3b2']['outst'] }}</td>
            
            
            <td>{{ $evaluation->part3c['p3c1']['basic_1'] }}</td>
            <td>{{ $evaluation->part3c['p3c1']['appro_1'] }}</td>
            <td>{{ $evaluation->part3c['p3c1']['compe_1'] }}</td>
            <td>{{ $evaluation->part3c['p3c1']['outst_1'] }}</td>
            <td>{{ $evaluation->part3c['p3c1']['basic_2'] }}</td>
            <td>{{ $evaluation->part3c['p3c2']['basic'] }}</td>
            <td>{{ $evaluation->part3c['p3c2']['appro'] }}</td>
            <td>{{ $evaluation->part3c['p3c2']['compe'] }}</td>
            <td>{{ $evaluation->part3c['p3c2']['outst'] }}</td>
            
            <td>{{ $evaluation->part3d['p3d1']['basic'] }}</td>
            <td>{{ $evaluation->part3d['p3d1']['appro'] }}</td>
            <td>{{ $evaluation->part3d['p3d1']['compe'] }}</td>
            <td>{{ $evaluation->part3d['p3d1']['outst'] }}</td>
            <td>{{ $evaluation->part3d['p3d2']['basic_1'] }}</td>
            <td>{{ $evaluation->part3d['p3d2']['appro_1'] }}</td>
            <td>{{ $evaluation->part3d['p3d2']['compe_1'] }}</td>
            <td>{{ $evaluation->part3d['p3d2']['outst_1'] }}</td>
            <td>{{ $evaluation->part3d['p3d2']['basic_2'] }}</td>
            <td>{{ $evaluation->part3d['p3d2']['appro_2'] }}</td>
            <td>{{ $evaluation->part3d['p3d2']['compe_2'] }}</td>
            <td>{{ $evaluation->part3d['p3d2']['outst_2'] }}</td>
            <td>{{ $evaluation->part3d['p3d2']['basic_3'] }}</td>
            <td>{{ $evaluation->part3d['p3d2']['appro_3'] }}</td>
            <td>{{ $evaluation->part3d['p3d2']['compe_3'] }}</td>
            
            <td>{{ $evaluation->part4a['p4a1']['basic'] }}</td>
            <td>{{ $evaluation->part4a['p4a1']['appro'] }}</td>
            <td>{{ $evaluation->part4a['p4a1']['compe'] }}</td>
            <td>{{ $evaluation->part4a['p4a2']['basic_1'] }}</td>
            <td>{{ $evaluation->part4a['p4a2']['appro_1'] }}</td>
            <td>{{ $evaluation->part4a['p4a2']['compe_1'] }}</td>
            <td>{{ $evaluation->part4a['p4a2']['outst_1'] }}</td>
            {{-- <td>{{ $evaluation->part4a['p4a2']['basic_2'] }}</td> --}}
            <td>{{ $evaluation->part4a['p4a2']['appro_2'] }}</td>
            <td>{{ $evaluation->part4a['p4a2']['compe_2'] }}</td>
            <td>{{ $evaluation->part4a['p4a2']['outst_2'] }}</td>
            
            <td>{{ $evaluation->part4b['p4b']['basic'] }}</td>
            <td>{{ $evaluation->part4b['p4b']['appro'] }}</td>
            <td>{{ $evaluation->part4b['p4b']['compe'] }}</td>
            <td>{{ $evaluation->part4b['p4b']['outst'] }}</td>
            
            <td>{{ $evaluation->part4c['p4c']['basic'] }}</td>
            <td>{{ $evaluation->part4c['p4c']['appro'] }}</td>
            <td>{{ $evaluation->part4c['p4c']['compe'] }}</td>
            <td>{{ $evaluation->part4c['p4c']['outst'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
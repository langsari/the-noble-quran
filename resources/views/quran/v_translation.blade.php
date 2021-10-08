<div class="py-12">
        <div class="container">
            <div class="row">
                    <div class="card">
                        <div class="card-header">ตารางข้อมูลแผนก</div>
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                            
                           
                            <th scope="col">พนักงาน</th>
            
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($daftarsurah as $row)
                            <tr>
                             
                                <td>{{ $row->surah_indonesia}}</td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                       </table>

                    </div>
                </div>
            </div>
            </div>
            </div>   
         </div>


            

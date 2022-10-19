@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
            <div class="card">
                <div class="card-header">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
      <li class="nav-item">
      <a class="nav-link" href="{{ route('qurantafseers.index') }}">จัดการกุรอานตัฟซีร</a>
      </li>
     
      <li class="nav-item">
	  <a class="nav-link" href="{{ route('tafseers.index') }}">จัดการวิดีโอตัฟซีร</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{ route('showvdotafseer') }}">ตรวจสอบสถานะวิดีโอตัฟซีร</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('showtafseer') }}">ตรวจสอบสถานะตัฟซีร</a>
      </li>
    
   
    </ul>
</nav>
</div>

<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
</div>

<div class="container">
 <div class="row">
						<div class="col-md-12 d-flex">
							<div class="card card-table flex-fill">
							
								<div class="card-body">
									<div class="table-responsive table-bordered">
										<table class="table custom-table mb-0">
											<thead>
												<tr>
													<th>เดิม</th>
													<th>ใหม่</th>
													<th>สถานะ</th>
												
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
                                                    <p>ด้วยพระนามของอัลลอฮฺ ผู้ทรงกรุณาปราณี ผู้ทรงเมตตาเสมอ<p>
													</td>
													<td>ด้วยพระนามของอัลลอฮฺ ผู้ทรงกรุณาปราณี </td>
													<td>
														<div class="dropdown action-label">
															<a class="btn btn-danger btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-dot-circle-o text-success"></i> สถานะ
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> อนุมัติ</a>
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> ไม่อนุมัติ</a>
															</div>
														</div>
													</td>
													
												</tr>
												<tr>
													<td>
                                                    <p>การสรรเสริญทั้งหลายนั้น เป็นสิทธิของอัลลอฮฺผู้เป็นพระเจ้าแห่งสากลโลก<p>
													</td>
													<td>การสรรเสริญทั้งหลายนั้น </td>
													<td>
														<div class="dropdown action-label">
															<a class="btn btn-danger btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-dot-circle-o text-danger"></i> สถานะ
															</a>
															<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> อนุมัติ</a>
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> ไม่อนุมัติ</a>
															</div>
														</div>
													</td>
													
												</tr>
												<tr>
													<td>
                                                    <p>ผู้ทรงกรุณาปราณี ผู้ทรงเมตตาเสมอ<p>
													</td>
													<td>ผู้ทรงกรุณาปราณี</td>
													<td>
														<div class="dropdown action-label">
															<a class="btn btn-danger btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-dot-circle-o text-danger"></i> สถานะ
															</a>
															<div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> อนุมัติ</a>
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> ไม่อนุมัติ</a>
															</div>
														</div>
													</td>
													
												</tr>
												<tr>
													<td>
                                                    <p>ผู้ทรงอภิสิทธิ์แห่งวันตอบแทน<p>
													</td>
													<td>ผู้ทรงอภิสิทธิ์</td>
													<td>
														<div class="dropdown action-label">
															<a class="btn btn-danger btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-dot-circle-o text-success"></i>สถานะ
															</a>
															<div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> อนุมัติ</a>
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> ไม่อนุมัติ</a>
															</div>
														</div>
													</td>
													
												</tr>
												<tr>
													<td>
                                                    <p>ขอพระองค์ทรงแนะนำพวกข้าพระองค์ซึ่งทางอันเที่ยงตรง<p>
													</td>
													<td>ขอพระองค์ทรงแนะนำ</td>
													<td>
														<div class="dropdown action-label">
															<a class="btn btn-danger btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-dot-circle-o text-danger"></i> สถานะ
															</a>
															<div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> อนุมัติ</a>
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> ไม่อนุมัติ</a>
															</div>
														</div>
													</td>
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="clients.html">ดูทั้งหมด</a>
								</div>
                                
							</div>
                            </div>
@endsection

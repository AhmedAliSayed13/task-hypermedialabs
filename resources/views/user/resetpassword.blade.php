
@extends('employer.layouts.master')
@section('css')
@endsection
@section('content')
    <!-- Page Wrapper -->
                  <div class="content container-fluid">

					<div class="row">
                        <div class="col-lg-9" style="margin-left: 140px;">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title text-center">تغيير كلمة المرور</h4>
								</div>
								<div class="card-body">
									<form action="{{ route('employer.password.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
											<label class="col-form-label col-md-2">كلمة المرور القديمة </label>
											<div class="col-md-10">
												<input type="password" name="oldpassword" class="form-control @error('oldpassword') is-invalid @enderror">
                                                @error('oldpassword')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
										</div>

                                        <div class="form-group row">
											<label class="col-form-label col-md-2">كلمة المرور الجديدة</label>
											<div class="col-md-10">
												<input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
										</div>
                                        <div class="form-group row">
											<label class="col-form-label col-md-2">تاكيد كلمة المرور الجديدة</label>
											<div class="col-md-10">
												<input type="password" name="confirmed_password" class="form-control @error('confirmed_password') is-invalid @enderror">
                                                @error('confirmed_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
										</div>
                                        <button type="submit" class="btn btn-primary submit-btn">add</button>
									</form>
								</div>
							</div>

						</div>
					</div>

				  </div>

			<!-- /Main Wrapper -->

            @endsection
            @section('js')
            @endsection

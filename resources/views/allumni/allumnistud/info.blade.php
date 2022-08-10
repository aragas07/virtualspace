@extends('layouts.allumni', ['title' => 'Alumni', 'active'=>'info'])
@section('content')
<div class="content-wrapper">
    <div class="main-container">
        <div class="container-xl p-3">
            <div class="row justify-content-between align-items-center">
                <div class="col flex-shrink-0 mb-3 mb-md-0">
                    <h1 class="display-5 mb-0">Personal Info</h1>
                </div>
            </div>
        </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane">
                    <form action="database/auth.php" method="post" enctype="multipart/form-data">
                      <table class="col-md-12 m-bottom">
                        <tr>
                          <td class="ctd">
                            <button id="custom-btn" hidden type="button">CHOOSE IMAGE</button>
                            <input type="file" name="file" accept="image/x-png,image/gif,image/jpeg" hidden id="default-btn">
                          </td>
                          <td>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">First name</label>
                              <div class="col-sm-10">
                                <input class="form-control form-control-sm" disabled type="text" value="" name="fname" id="fname">
                              </div>    
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Middle name</label>
                              <div class="col-sm-10">
                                <input class="form-control form-control-sm" disabled type="text" value="" name="mname" id="mname">
                              </div>    
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Last name</label>
                              <div class="col-sm-10">
                                <input class="form-control form-control-sm" disabled type="text" value="" name="lname" id="lname">
                              </div>    
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Birth</label>
                              <div class="col-sm-10">
                                <input class="form-control form-control-sm" disabled type="date" value="" name="birth" id="birth">
                              </div>    
                            </div>
                          </td>
                        </tr>
                      </table>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Gender</label>
                          <div class="col-sm-4">
                            <input type="hidden" id="gendertext" value="">
                            <select name="gender" id="gender" disabled class="form-control form-control-sm">
                              <option value="1">Male</option>
                              <option value="0">Female</option>
                            </select>
                          </div>    
                          <label class="col-sm-2 col-form-label">Marital Status</label>
                          <div class="col-sm-4">
                            <input type="hidden" id="stattext" value="">
                            <select name="status" class="form-control form-control-sm" disabled id="status">
                              <option value="Single">Single</option>
                              <option value="Married">Married</option>
                              <option value="Separated">Separated</option>
                            </select>
                          </div>    
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Citizen</label>
                          <div class="col-sm-4">
                            <input class="form-control form-control-sm" type="text" disabled value="" name="citizen" id="citizen">
                          </div>    
                          <label class="col-sm-2 col-form-label">Zipcode</label>
                          <div class="col-sm-4">
                            <input class="form-control form-control-sm" type="text" disabled value="" name="zipcode" id="zipcode">
                          </div>    
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Religion</label>
                          <div class="col-sm-10">
                            <input class="form-control form-control-sm" type="text" disabled value="" name="religion" id="religion">
                          </div>    
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Address</label>
                          <div class="col-sm-10">
                            <input class="form-control form-control-sm" type="text" disabled value="" name="presaddress" id="presaddress">
                          </div>    
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Spouse</label>
                          <div class="col-sm-10">
                            <input class="form-control form-control-sm" type="text" disabled value="" name="spouse" id="spouse">
                          </div>    
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Contact #</label>
                          <div class="col-sm-10">
                            <input class="form-control form-control-sm" type="text" disabled value="" name="contact" id="contact">
                          </div>    
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Facebook</label>
                          <div class="col-sm-10">
                            <input class="form-control form-control-sm" type="text" disabled value="" name="facebook" id="facebook">
                          </div>    
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Twitter</label>
                          <div class="col-sm-10">
                            <input class="form-control form-control-sm" type="text" disabled value="" name="twitter" id="twitter">
                          </div>    
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Instagram</label>
                          <div class="col-sm-10">
                            <input class="form-control form-control-sm" type="text" disabled value="" name="instagram" id="instagram">
                          </div>    
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Course</label>
                          <div class="col-sm-10">
                            <input class="form-control form-control-sm" type="text" disabled value="" name="course" id="course">
                          </div>    
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Campus</label>
                          <div class="col-sm-4">
                            <input class="form-control form-control-sm" type="text" disabled value="" name="campus" id="campus">
                          </div>   
                          <label class="col-sm-2 col-form-label">Batch</label>
                          <div class="col-sm-4">
                            <input class="form-control form-control-sm" type="text" disabled value="" name="campus" id="campus">
                          </div>    
                        </div>
                      <input type="hidden" name="id" value="">
                      <input type="submit" value="Submit" class="btn btn-default" name="upd-pro" id="upd-pro" disabled>
                    </form>
                    <!-- /.post -->
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
          </div>
    </div>
</div>
@endsection
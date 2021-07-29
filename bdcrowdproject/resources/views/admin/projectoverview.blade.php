@extends('admin.layouts.app')

@section('AdminDashbordContent')
 <!-- Start app main Content -->
 <div class="main-content ">
                <section class="section ">
                    <div class="row py-4 ">
                        <div class="col-md-6">
                            <div class="form-group">

                                <select class="form-control select2">
                              
                                @foreach($overview_data as $row)
                                    <option value="{{$row->id}}" >{{ $row->project_name}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">

                            <button type="submit" class="btn btn-primary">See Overview</button>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group ">
                                                <label>project Overview:</label>

                                                <tbody id="service_table">

                                                    </tbody>
                                                <textarea  class="summernote">
                                                   
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-12">
                                            <div class="buttons pt-4">
                                                <a data-toggle="modal" data-target="#ChangeProjectOverviewmodel" href="#" class="btn btn-icon icon-left btn-primary"><i class="fas fa-upload"></i> Upload Overview</a>

                                                <a data-toggle="modal" data-target="#DeleteProjectOverviemodel" href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Delete Overview</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                </div>
            </div>


            !-- ------------------------ change btn model --------------- -->
        <div class="modal fade" tabindex="-1" role="dialog" id="ChangeProjectOverviewmodel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Do you want to change this Overview?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                       </button>
                        </div>
                    <div class="modal-body">
                        <p>Ii will change form your website</p>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Save Change</button>

                    </div>
                </div>
            </div>
        </div>
        <!-- ------------------------ Delete btn model --------------- -->
        <div class="modal fade" tabindex="-1" role="dialog" id="DeleteProjectOverviemodel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Do you want to Delete this Overvie?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                    </div>
                    <div class="modal-body">
                        <p>Ii will delete form your website</p>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

@endsection



@section('script')

@endsection
@extends('dashboard.layouts.master')
@section('title')
   Property create
@endsection
<!-- Left Panel -->
@include('dashboard.parts.sidebar')
<!-- /#left-panel -->
<!-- Right Panel -->
@section('content')

    <!-- Header-->


    <!-- /#header -->
    <!-- Content -->
    <div style="min-height: 80vh"  class="content">
        <!-- Animated -->
        <div class="animated fadeIn">


            <div class="card">
                <div class="card-header"> Property edit</div>
                @if($errors->any())

                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach
                        </ul>
                    </div>

                @endif

                <div class="card-body">

                    <form action=" {{route('dashboard.property.store')}}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Description:</strong>
                                    <textarea class="form-control" style="height:150px" name="description" ></textarea>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <strong>Price:</strong>
                                    <input type="text" name="price" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <strong>Property type:</strong>
                                    <input type="text" name="property_type" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <strong>Bedrooms count:</strong>
                                    <input type="text" name="bedrooms_count" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <strong>Bathrooms count:</strong>
                                    <input type="text" name="bathrooms_count" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <strong>Living area:</strong>
                                    <input type="text" name="living_area" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <strong>Full address:</strong>
                                    <input type="text" name="full_address" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Keywords:</strong>
                                    <input type="text" name="keywords" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Meta description:</strong>
                                    <textarea class="form-control" style="height:80px" name="meta_description" ></textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>


                </div>
            </div>

            <div class="modal fade none-border" id="event-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><strong>Add New Event</strong></h4>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#event-modal -->
            <!-- Modal - Calendar - Add Category -->
            <div class="modal fade none-border" id="add-category">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><strong>Add a category </strong></h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Category Name</label>
                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Choose Category Color</label>
                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                            <option value="success">Success</option>
                                            <option value="danger">Danger</option>
                                            <option value="info">Info</option>
                                            <option value="pink">Pink</option>
                                            <option value="primary">Primary</option>
                                            <option value="warning">Warning</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#add-category -->
        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>
    <!-- Footer -->

    <!-- /#right-panel -->
@endsection


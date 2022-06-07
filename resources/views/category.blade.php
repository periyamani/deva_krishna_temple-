@extends('layouts.adminview')

@section('pagestyles')

<link rel="stylesheet" href="{{URL::asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
<style>
.dz-processing {
    display: inline-block;
    width: 11.25rem;
}

.dz-message {
    margin: 1rem 0;
    font-weight: 500;
    text-align: center;
}

.border_style {
    border: 2px solid;
    border-style: dashed;
    /* cursor: pointer; */
    padding: 20px 25px 0px 25px;
}

.image_align {
    width: 7em;
    height: 7em;
    /* margin-right: 15px; */
    margin-bottom: 15px;
}

#output {
    /* display:none; */
}

.file_name {
    text-overflow: ellipsis;
    width: 100%;
    overflow: hidden;
    font-size: 13px;
    white-space: nowrap;
    padding: 0px 8px;
}

.hr_margin {
    margin: 5px 0;
    color: #d8dcdf;
}

.file_remove {
    padding: 3px 0px;
    width: 100%;
    font-size: 13px;
}

.file_remove:hover {
    color: #677788;
    background: rgba(38, 60, 85, .1);
}

.view_text_over {
    overflow: hidden;
}

.img_size {
    width: 100% !important;
    height: 120px !important;
    margin-bottom: 15px;
}

.edit_file_remove {
    padding: 0 39px;
}

.edit_file_remove:hover {
    padding: 0 39px;
    background: #d3d3d3d4;
}

.spinner_in {
    position: relative;
    top: 0px;
    left: -5px;
}

.star {
    color: red;
}
</style>
<link rel="stylesheet" href="{{URL::asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />


<link rel="stylesheet" href="{{URL::asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<!-- Vendors CSS -->
<link rel="stylesheet" href="{{URL::asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
<link rel="stylesheet" href="{{URL::asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
<link rel="stylesheet" href="{{URL::asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{URL::asset('assets/vendor/libs/quill/editor.css')}}" />
@stop

@section('content')

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default"
    data-assets-path="assets/" data-template="vertical-menu-template">
<!-- Content wrapper -->

<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">Category</span>
        </h4>


        <!-- Bootstrap modals -->
        <div class="card radius-15">
            <div class="card-body">
                <h5 class="card-header">Category <button type="button" class="btn btn-primary ms-3 add_model_op"><i
                            class="bx bx-plus me-sm-2"></i>Add New</button></h5>

                <!-- Complex Headers -->
                <div class="">
                    <!-- <h5 class="card-header">Complex Headers</h5> -->
                    <div class="card-datatable text-nowrap ">
                        <table class="dt-complex-header table table-bordered" style="border-color: #d4d8dd">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                        </table>
                    </div>
                </div>

            </div>

        </div>


        <!-- / model -->
        <!-- Modal -->

        <div class="modal fade" id="addmodel" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Add Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="festivelform">
                            <div class="row g-2 mb-3">

                                <div class="col-sm-12 mb-0">

                                    <label for="emailBasic" class="form-label">Title<span
                                            class="add_title star">*</span></label>
                                    <input type="text" id="emailBasic" required name="title" class="form-control">
                                </div>

                            </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary add_submit_btn" onclick="move()">Save</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="editmodel" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form id="Editform">
                        <div class="row g-2">

                            <div class="col-sm-12 mb-0">

                                <label for="emailBasic" class="form-label">Title<span
                                        class="edd_title star">*</span></label>
                                <input type="hidden" name="id">
                                <input type="text" id="edit_title" required name="title" class="form-control">
                            </div>

                        </div>




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary edit_submit_btn">Save</button>

                    </form>
                </div>

            </div>

        </div>
    </div>

    <input class="delete_option_active" value="active" type="hidden">



</html>

@endsection

@section('pageScript')
<!-- Vendors JS -->
<script src="{{URL::asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>

<!-- <script src="../../assets/js/forms-pickers.js"></script> -->

<script src="{{URL::asset('assets/vendor/libs/datatables/jquery.dataTables.js')}}"></script>

<script src="{{URL::asset('assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.js')}}"></script>
<!-- <script src="{{URL::asset('assets/vendor/js/bootstrap.js')}}"></script> -->

<script src="{{URL::asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{URL::asset('admin/js/category.js')}}"></script>


<script src="{{URL::asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{URL::asset('assets/vendor/libs/quill/quill.js')}}"></script>

<script src="{{URL::asset('assets/js/forms-editors.js')}}"></script>
<script>
function move() {
    var elem = document.getElementById("myBar");
    var width = 0;
    var id = setInterval(frame, 10);

    function frame() {
        if (width >= 100) {
            clearInterval(id);
        } else {
            width++;
            elem.style.width = width + '%';
            elem.innerHTML = width * 1 + '%';
        }
    }
}
</script>
@stop
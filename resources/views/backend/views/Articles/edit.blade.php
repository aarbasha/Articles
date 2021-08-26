@extends('backend.layouts.master')
@section('title', 'تعديل مقال ')
@section('css')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}>
    <!-- daterange picker -->
    <link rel="stylesheet" href={{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}>
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href={{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href={{ asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href={{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}>
    <!-- Select2 -->
    <link rel="stylesheet" href={{ asset('admin/plugins/select2/css/select2.min.css') }}>
    <link rel="stylesheet" href={{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}>
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href={{ asset('admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}>
    <!-- BS Stepper -->
    <link rel="stylesheet" href={{ asset('admin/plugins/bs-stepper/css/bs-stepper.min.css') }}>
    <!-- dropzonejs -->
    <link rel="stylesheet" href={{ asset('admin/plugins/dropzone/min/dropzone.min.css') }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset('admin/dist/css/adminlte.min.css') }}>

@endsection
@section('content')

    <div class="wrapper mt-5 p-2">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper mt-5">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>تعديل قسم</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                                <li class="breadcrumb-item active">تعديل قسم </li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title">bs-stepper</h3>
                                </div>
                                <div class="card-body p-0">
                                    <div class="bs-stepper">

                                        <div class="bs-stepper-content">
                                            <div class="card card-primary row">
                                                <div class="card-header float-right">
                                                    {{-- <h3 class="card-title">Quick Example</h3> --}}
                                                    <a href="{{ route('Articles.index') }}"
                                                        class="btn btn-primary float-right">
                                                        رجوع الى الخلف</a>
                                                </div>

                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form action="{{ route('Articles.update', $articles->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="card-body col-lg-12">
                                                        <div class="form-group">
                                                            <label for="title">عنوان المقال</label>
                                                            <input type="text" name="title" class="form-control" id="title"
                                                                value="{{ $articles->title }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="description">وصف المقال</label>
                                                            <input type="text" name="description" class="form-control"
                                                                id="description" value="{{ $articles->description }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>نوع المقال </label>
                                                            <select name="sections_id" class="form-control"
                                                                style="width: 100%;"
                                                                value="{{ $articles->sections_id }}">
                                                                <option value="" selected>  اختر القــسم   </option>
                                                                @foreach ($Sections as $Section)
                                                                    <option value="{{ $Section->id }}">
                                                                        {{ $Section->title }} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>نوع المقال </label>
                                                            <input type="text" disabled class="form-control"
                                                                 value="{{ $articles->section->title }}">
                                                        </div>
                                                        <!-- /.form-group -->

                                                        <!-- /.form-group -->
                                                        <div class="form-group ">
                                                            <label for="exampleInputPassword1">المقال</label>
                                                            <textarea name="article" class="form-control" id="" cols="30"
                                                                rows="10">{{ $articles->article }}</textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">تعديل المقال</button>
                                                    </div>

                                                </form>

                                                <div class="col-lg-6">
                                                    <div class="card card-default">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Dropzone.js <small><em>jQuery File
                                                                        Upload</em> like
                                                                    look</small></h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div id="actions" class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="btn-group w-100">
                                                                        <span class="btn btn-success col fileinput-button">
                                                                            <i class="fas fa-plus"></i>
                                                                            <span>Add files</span>
                                                                        </span>
                                                                        <button type="submit"
                                                                            class="btn btn-primary col start">
                                                                            <i class="fas fa-upload"></i>
                                                                            <span>Start upload</span>
                                                                        </button>
                                                                        <button type="reset"
                                                                            class="btn btn-warning col cancel">
                                                                            <i class="fas fa-times-circle"></i>
                                                                            <span>Cancel upload</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 d-flex align-items-center">
                                                                    <div class="fileupload-process w-100">
                                                                        <div id="total-progress"
                                                                            class="progress progress-striped active"
                                                                            role="progressbar" aria-valuemin="0"
                                                                            aria-valuemax="100" aria-valuenow="0">
                                                                            <div class="progress-bar progress-bar-success"
                                                                                style="width:0%;" data-dz-uploadprogress>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="table table-striped files" id="previews">
                                                                <div id="template" class="row mt-2">
                                                                    <div class="col-auto">
                                                                        <span class="preview"><img src="data:," alt=""
                                                                                data-dz-thumbnail /></span>
                                                                    </div>
                                                                    <div class="col d-flex align-items-center">
                                                                        <p class="mb-0">
                                                                            <span class="lead" data-dz-name></span>
                                                                            (<span data-dz-size></span>)
                                                                        </p>
                                                                        <strong class="error text-danger"
                                                                            data-dz-errormessage></strong>
                                                                    </div>
                                                                    <div class="col-4 d-flex align-items-center">
                                                                        <div class="progress progress-striped active w-100"
                                                                            role="progressbar" aria-valuemin="0"
                                                                            aria-valuemax="100" aria-valuenow="0">
                                                                            <div class="progress-bar progress-bar-success"
                                                                                style="width:0%;" data-dz-uploadprogress>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto d-flex align-items-center">
                                                                        <div class="btn-group">
                                                                            <button class="btn btn-primary start">
                                                                                <i class="fas fa-upload"></i>
                                                                                <span>Start</span>
                                                                            </button>
                                                                            <button data-dz-remove
                                                                                class="btn btn-warning cancel">
                                                                                <i class="fas fa-times-circle"></i>
                                                                                <span>Cancel</span>
                                                                            </button>
                                                                            <button data-dz-remove
                                                                                class="btn btn-danger delete">
                                                                                <i class="fas fa-trash"></i>
                                                                                <span>Delete</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.card -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
@endsection
@section('js')
    <!-- jQuery -->
    <script src={{ asset('admin/plugins/jquery/jquery.min.js') }}></script>
    <!-- Bootstrap 4 -->
    <script src={{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <!-- Select2 -->
    <script src={{ asset('admin/plugins/select2/js/select2.full.min.js') }}></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src={{ asset('admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}></script>
    <!-- InputMask -->
    <script src={{ asset('admin/plugins/moment/moment.min.js') }}></script>
    <script src={{ asset('admin/plugins/inputmask/jquery.inputmask.min.js') }}></script>
    <!-- date-range-picker -->
    <script src={{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}></script>
    <!-- bootstrap color picker -->
    <script src={{ asset('admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src={{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}></script>
    <!-- Bootstrap Switch -->
    <script src={{ asset('admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}></script>
    <!-- BS-Stepper -->
    <script src={{ asset('admin/plugins/bs-stepper/js/bs-stepper.min.js') }}></script>
    <!-- dropzonejs -->
    <script src={{ asset('admin/plugins/dropzone/min/dropzone.min.js') }}></script>
    <!-- AdminLTE App -->
    <script src={{ asset('admin/dist/js/adminlte.min.js') }}></script>
    <!-- AdminLTE for demo purposes -->
    <script src={{ asset('admin/dist/js/demo.js') }}></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
@endsection

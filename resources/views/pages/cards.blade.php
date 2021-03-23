@extends('layouts.back_base')
@section('content')

<form action="{{route('b_saveCard')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row">
        <div class="col-md-9">
            <div class="card card-block">
                <h3 class="box-title m-b-0">Añadir nueva card</h3>
                <p class="text-muted m-b-30 font-13"> Información básica </p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="">Título</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">URL</label>
                            <input type="url" name="slug" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Contenido</label>
                            <textarea name="body" id="ckeditor"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" style="float: right">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-block">
                <p class="text-muted m-b-30 font-13"> Clasificación y multimedia </p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="form-group bt-switch">
                            <label for="">Estado </label>
                            <input type="checkbox" name="status" value="a" checked data-on-color="success" data-off-color="danger" data-on-text="Activado" data-off-text="Desactivado">
                        </div>
                        <div class="form-group">
                            <label for="">Categoría</label>
                            <select class="selectpicker" name="category" data-style="form-control btn-secondary">
                                <option ></option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tags</label>
                            <input type="text" name="tags" data-role="tagsinput" name="" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Imagen</label>
                            <input type="file" name="file" id="input-file-now-custom-1" class="dropify" data-default-file="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection



@push('add_css')
    <link href="{{ asset('assets/bo/plugins/bootstrap-switch/bootstrap-switch.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/bo/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/bo/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/bo/plugins/dropify/dist/css/dropify.min.css')}}">
@endpush

@push('add_js')
    <script src="{{ asset('assets/bo/plugins/bootstrap-switch/bootstrap-switch.min.js')}}"></script>
    <script src="{{ asset('assets/bo/plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{ asset('assets/bo/plugins/dropify/dist/js/dropify.min.js')}}"></script>
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
@endpush

@push('add_scripts')
    <script>
        $('.dropify').dropify({
            messages: {
                'default': 'Arrastra o haz click',
                'replace': 'Drag and drop or click to replace',
                'remove':  'Remove',
                'error':   'Ooops, something wrong happended.'
            }
        });

        $(document).ready(function() {
            radioswitch.init()
        });

        $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
        var radioswitch = function() {
            var bt = function() {
                $(".radio-switch").on("switch-change", function() {
                    $(".radio-switch").bootstrapSwitch("toggleRadioState")
                }), $(".radio-switch").on("switch-change", function() {
                    $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
                }), $(".radio-switch").on("switch-change", function() {
                    $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
                })
            };
            return {
                init: function() {
                    bt()
                }
            }
        }();

        CKEDITOR.replace ( 'ckeditor' );
    </script>
@endpush
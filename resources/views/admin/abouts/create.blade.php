@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.about.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.abouts.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="image_1">{{ trans('cruds.about.fields.image_1') }}</label>
                <input class="form-control {{ $errors->has('image_1') ? 'is-invalid' : '' }}" type="text" name="image_1" id="image_1" value="{{ old('image_1', '') }}" required>
                @if($errors->has('image_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.about.fields.image_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="image_2">{{ trans('cruds.about.fields.image_2') }}</label>
                <input class="form-control {{ $errors->has('image_2') ? 'is-invalid' : '' }}" type="text" name="image_2" id="image_2" value="{{ old('image_2', '') }}" required>
                @if($errors->has('image_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.about.fields.image_2_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.feature.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.features.update", [$feature->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="icon">{{ trans('cruds.feature.fields.icon') }}</label>
                <input class="form-control {{ $errors->has('icon') ? 'is-invalid' : '' }}" type="text" name="icon" id="icon" value="{{ old('icon', $feature->icon) }}" required>
                @if($errors->has('icon'))
                    <div class="invalid-feedback">
                        {{ $errors->first('icon') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.feature.fields.icon_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="btn_link">{{ trans('cruds.feature.fields.btn_link') }}</label>
                <input class="form-control {{ $errors->has('btn_link') ? 'is-invalid' : '' }}" type="text" name="btn_link" id="btn_link" value="{{ old('btn_link', $feature->btn_link) }}" required>
                @if($errors->has('btn_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('btn_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.feature.fields.btn_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="content">{{ trans('cruds.feature.fields.content') }}</label>
                <textarea class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content" required>{{ old('content', $feature->content) }}</textarea>
                @if($errors->has('content'))
                    <div class="invalid-feedback">
                        {{ $errors->first('content') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.feature.fields.content_helper') }}</span>
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
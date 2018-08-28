@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Insert')}}</div>

                <div class="card-body">
                    {!! Form::open(['url'=>'update','files'=>true]) !!}
						{!! csrf_field() !!}

                        <div class="form-group row">
                            <label for="date" class="col-sm-1 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-3">
                                <input id="email" type="date" class="form-control" name="date" value="{{ $data->date }}" required autofocus>
                            </div>
							
                            <label for="max" class="col-md-1 col-form-label text-md-right">{{ __('Max') }}</label>

                            <div class="col-md-2">
                                <input id="max" type="text" class="form-control" name="max" value="{{ $data->max }}" required>
                            </div>
							
                            <label for="max" class="col-md-1 col-form-label text-md-right">{{ __('Min') }}</label>

                            <div class="col-md-2">
                                <input id="min" type="text" class="form-control" name="min" value="{{ $data->min }}" required>
                            </div>
							
							 <div class="col-md-2">
								<input type="hidden" name="id" value="{{ $data->id }}"/>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
								<a href="{{ url('/') }}" class="btn btn-primary">
									Back
								</a>
                            </div>
                        </div>
                    {!! Form::close() !!} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

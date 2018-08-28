@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Insert')}}</div>

                <div class="card-body">
                    {!! Form::open(['url'=>'insert','files'=>true]) !!}
						{!! csrf_field() !!}

                        <div class="form-group row">
                            <label for="date" class="col-sm-1 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-2">
                                <input id="email" type="date" class="form-control" name="date" value=" " required autofocus>
                            </div>
							
                            <label for="max" class="col-md-1 col-form-label text-md-right">{{ __('Max') }}</label>

                            <div class="col-md-2">
                                <input id="max" type="text" class="form-control" name="max" required>
                            </div>
							
                            <label for="max" class="col-md-1 col-form-label text-md-right">{{ __('Min') }}</label>

                            <div class="col-md-2">
                                <input id="min" type="text" class="form-control" name="min" required>
                            </div>
							
							 <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!} 
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8" align="center">
            <div class="card">
                <div class="card-header">{{ __('Data') }}</div>

                <div class="card-body">
                    <table style="border-collapse: collapse; width:100%">
						<tr align="center">
							<th style="border: 1px solid black; width:40%">Date</th>
							<th style="border: 1px solid black">Max</th>
							<th style="border: 1px solid black">Min</th>
							<th style="border: 1px solid black">Variance</th>
							<th style="border: 1px solid black" colspan="2">Action</th>
						</tr>
						@foreach($data as $get)
							<tr align="center">
								<td style="border: 1px solid black">{{ $get->date }}</td>
								<td style="border: 1px solid black">{{ $get->max }}</td>
								<td style="border: 1px solid black">{{ $get->min }}</td>
								<td style="border: 1px solid black">{{ $get->variance }}</td>
								<td style="border: 1px solid black"><a href="{{ url('edit/'.$get->id) }}" class="btn btn-primary">Edit</a></td>
								<td style="border: 1px solid black"><a href="{{ url('show/'.$get->id) }}" class="btn btn-primary">Show</a></td>
							</tr>
						@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

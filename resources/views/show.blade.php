@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" align="center">
            <div class="card">
                <div class="card-header">{{ __('Data') }}</div>

                <div class="card-body">
                    <table style="border-collapse: collapse; width:100%">
						<tr align="center">
							<th style="border: 1px solid black; width:40%">Date</th>
							<td style="border: 1px solid black">{{ $data->date }}</td>
						</tr>
						<tr align="center">
							<th style="border: 1px solid black">Max</th>
							<td style="border: 1px solid black">{{ $data->max }}</td>
						</tr>
						<tr align="center">
							<th style="border: 1px solid black">Min</th>
							<td style="border: 1px solid black">{{ $data->min }}</td>
						</tr>
						<tr align="center">
							<th style="border: 1px solid black">Variance</th>
							<td style="border: 1px solid black">{{ $data->variance }}</td>
						</tr>
						<tr align="center">
							<th style="border: 1px solid black" colspan="2"><a href="{{ url('/') }}" class="btn btn-primary">Back</a></th>
						</tr>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

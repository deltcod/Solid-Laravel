@extends('layouts.app')

@section('htmlheader_title')
	Apartat 3
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Apartat 3</div>

					<div class="panel-body">
						<div class="btn-group">
							<button type="button" class="btn btn-default">Left</button>
							<button type="button" class="btn btn-default">Middle</button>
							<button type="button" class="btn btn-default">Right</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

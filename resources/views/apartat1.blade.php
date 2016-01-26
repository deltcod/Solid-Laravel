@extends('layouts.app')

@section('htmlheader_title')
	Apartat 1
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Apartat 1</div>

					<div class="panel-body">
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Apartat1</strong> Alert body ...
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

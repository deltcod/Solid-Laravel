@extends('layouts.app')

@section('htmlheader_title')
	Apartat 2
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Apartat 2</div>

					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Hello World!</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Table Apartat 2</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

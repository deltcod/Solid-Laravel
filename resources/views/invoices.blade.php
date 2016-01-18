@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Invoices</h3>

						<div class="box-tools">
							<div class="input-group input-group-sm" style="width: 150px;">
								<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>Id</th>
								<th>Name</th>
								<th>Createt At</th>
								<th>Update At</th>
								<th>Total</th>
							</tr>

							@foreach($invoices as $invoice)
								<tr>
									<td>{{ $invoice->id }}</td>
									<td>{{ $invoice->name }}</td>
									<td>{{ $invoice->created_at }}</td>
									<td>{{ $invoice->updated_at }}</td>
									<td>{{ $invoice->totalAmmount }}</td>
								</tr>
							@endforeach

						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>
	</div>
@endsection

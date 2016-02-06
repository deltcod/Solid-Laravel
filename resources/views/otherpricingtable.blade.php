@extends('layouts.app')

@section('htmlheader_title')
	Other Pricing Table
@endsection


@section('main-content')
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h4 class="text-center">Standard commercial package</h4>
					</div>
					<div class="panel-body text-center">
						<p class="lead">
							<strong>$10 / month</strong>
						</p>
					</div>
					<ul class="list-group list-group-flush text-center">
						<li class="list-group-item">
							Personal Use
							<span class="glyphicon glyphicon-ok pull-right"></span>
						</li>
						<li class="list-group-item">
							Single Commercial License
							<span class="glyphicon glyphicon-ok pull-right"></span>
						</li>
						<li class="list-group-item">
							Multiple site Commercial license
							<span class="glyphicon glyphicon-remove pull-right"></span>
						</li>
						<li class="list-group-item">
							Technical Support
							<span class="glyphicon glyphicon-ok pull-right"></span>
						</li>
					</ul>
					<div class="panel-footer">
						<a class="btn btn-lg btn-block btn-info">Purchase</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 class="text-center">Premium commercial package</h4>
					</div>
					<div class="panel-body text-center">
						<p class="lead">
							<strong>$20 / month</strong>
						</p>
					</div>
					<ul class="list-group list-group-flush text-center">
						<li class="list-group-item">
							Personal Use
							<span class="glyphicon glyphicon-ok pull-right"></span>
						</li>
						<li class="list-group-item">
							Single Commercial License
							<span class="glyphicon glyphicon-ok pull-right"></span>
						</li>
						<li class="list-group-item">
							Multiple site Commercial license
							<span class="glyphicon glyphicon-ok pull-right"></span>
						</li>
						<li class="list-group-item">
							Technical Support
							<span class="glyphicon glyphicon-ok pull-right"></span>
						</li>
					</ul>
					<div class="panel-footer">
						<a class="btn btn-lg btn-block btn-primary">Purchase</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

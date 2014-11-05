@extends('layout/main')

@section('content')
	<div class="container">
	  	<div class="panel panel-default">
		  <div class="panel-body">
		    <div class="widget">
				<div class="widget-content border-bottom">
					<span class="pull-right text-muted">60%</span>
					My Albums
				</div>
				<div class="item-album item-animals">
					<a href="javascript:void(0)" class="widget-content themed-background-muted text-right clearfix">
						<img src="/assets/img/animals.jpg" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
						<h2 class="widget-heading h3 text-muted">Animals</h2>
						<div class="progress progress-striped progress-mini active">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
						</div>
					</a>
				</div>
				<div class="item-album item-tv">
					<a href="javascript:void(0)" class="widget-content themed-background-muted border-top text-right clearfix">
						<img src="/assets/img/cities.jpg" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
						<h2 class="widget-heading h3 text-muted">Cities</h2>
						<div class="progress progress-striped progress-mini active">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
						</div>
					</a>
				</div>
				<div class="item-album item-cities">
					<a href="javascript:void(0)" class="widget-content themed-background-muted border-top text-right clearfix">
						<img src="/assets/img/tv.jpg" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
						<h2 class="widget-heading h3 text-muted">TV</h2>
						<div class="progress progress-striped progress-mini active">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
						</div>
					</a>
				</div>
				<div class="widget-content widget-content-full border-top">
					<div class="row text-center">
						<div class="col-xs-6 push-inner-top-bottom border-right">
							<i class="fa fa-check-circle-o"></i> 89 Stickers Left
						</div>
						<div class="col-xs-6 push-inner-top-bottom">
							<i class="fa fa-clock-o"></i> 17 New Stickers
						</div>
					</div>
				</div>
			</div>
		  </div>
		</div>
	</div>
@stop


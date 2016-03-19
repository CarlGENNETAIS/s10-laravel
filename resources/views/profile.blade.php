@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h2>Mon profil</h2></div>
				<div class="panel-body">
					<div class="col-md-4">
						<strong> Nom d'utilisateur : </strong>
					</div>	
					<div class="col-md-6">
						{{$user->name}}
					</div>
					<div class="col-md-4">
						<strong> Adresse email : </strong>
					</div>	
					<div class="col-md-6">
						{{$user->email}}
					</div>
					<div class="col-md-4">
						<strong> Inscrit le : </strong>
					</div>	
					<div class="col-md-6">
						{{$user->created_at}}
					</div>
				</div>
				<div class="col-md-6 col-md-offset-4">
					<a class="btn btn-primary" href="{{ route('editProfile') }}" style="margin-top:20px">Modifier mon profil</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
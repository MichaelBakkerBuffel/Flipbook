@extends ('layouts.main')

@section('content')

	<div class="row row-fix">
		<div class="progressbar">
			<div class="bar">
				<p>25%</p>
			</div>
			<div class="triangle-down"></div>
		</div>
		<a href="#">
			<div class="mantelcheck-yes">
				<div class="mantelcheck-yes-text">
					<h1>Ja</h1>
					<p>Zorgt u voor iemand die extra hulp nodig heeft?</p>
				</div>
			</div>
		</a>
		<a href="#">
			<div class="mantelcheck-no">
				<div class="mantelcheck-no-text">
					<h1>Nee</h1>
					<p>Zorgt u voor iemand die extra hulp nodig heeft?</p>
				</div>
			</div>
		</a>
	</div>

@endsection
@extends('layouts.app')
@section('content')

<div class="container">
	<h2> Contactos </h2>
	<div class="row">
		<div class="col-lg-12 table-responsive">
			<table class="table table-striped table-hover">
				<thead class="table-dark">
					<tr align="center">
						<th>NOMBRE</th>
						<th>EMAIL</th>
						<th>ASUNTO</th>
						<th>MENSAJE</th>
					</tr>
				</thead>
				<tbody>
					@foreach($contacts as $contact)
						<tr align="center">
							<td> {{$contact->name}} </td>
							<td> {{$contact->email}} </td>
							<td> {{$contact->subject}} </td>
							<td> {{$contact->message}} </td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection
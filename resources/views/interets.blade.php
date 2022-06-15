@extends('layouts.app')


	


 @section('main')
<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal mb-10">


	<!--Container-->
	<div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">

		<!--Title-->
		<h1 class="flex items-center font-sans font-bold break-normal text-red-500 px-2 py-8 text-xl md:text-2xl">
			Centres d'intérèts
		</h1>

		<!--Card-->
		<div id='recipients' class="p-4 mt-6 lg:mt-0 rounded  bg-white">

			<a href="addinteret">
				<button class="bg-gray-800 text-white mb-4 "> Ajouter un intérèt</button>
			</a>


			<table id="example" class="stripe hover" style="width:50%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">Id</th>
						<th data-priority="2">interest</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($interest as $interet)

					<tr>
						<td class="text-center" >{{$interet->id}} </td>
						<td class="text-center">{{$interet->interet}} </td>
						<td class="p-4 text-center">
							<a href="/read/{{$interet->id}}" class="text-black hover:text-blue-400 mr-2">
								<i class="fa-solid fa-eye"></i>							
							</a>
							<a href="/" class="text-black hover:text-blue-400 mx-2">
								<i class="fa-solid fa-pen-to-square"></i>
							</a>
							<form action="/interets/{{$interet->id}}" method="post">
								@csrf
								@method('DELETE')
								<input type="hidden" name="id" value="{{$interet->id}}">
							<button  type="submit"   class="bg-red-600 shadow-lg shadow-red-600">
								delete
							</button>
							</form>	 
						</td>
				
					</tr>

					{{-- le 1er$interet dans le foreach correspond a la variable vert que tu creer dans le return de la fonction
					le 2eme ( celui apres le as ) c'est celui que tu utilise dans tes td --}}

					<!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->

					@endforeach
				</tbody>

			</table>


		</div>
		<!--/Card-->

	</div>
	

	<!--/container-->


	<!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {

			var table = $('#example').DataTable({
					responsive: true
				})
				.columns.adjust()
				.responsive.recalc();
		});
	</script>
@endsection



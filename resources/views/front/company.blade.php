<x-front-layout section="empresa">
	<h2 class="shadow-xl border border-gray-100 rounded-lg px-6 py-4 text-blue uppercase font-semibold font-bebas text-2xl tracking-wider mb-4">Rechazados</h2>
	<table class="table-auto w-full">
		<thead class="text-left text-black border-b-2 border-black text-lg">
			<tr>
				<th>Documento</th>
				<th>Estado</th>
				<th>Fecha de subida</th>
				<th></th>
			</tr>
		</thead>
		<tbody class="font-semibold leading-8">
			<tr>
				<td>CIF / NIF / NIE</td>
				<td><x-badge color="red">Rechazado</x-badge></td>
				<td>04/03/2022</td>
				
				<td><button>
					<img class="stroke-cyan-500" src="{{ Vite::asset('resources/images/buttons/add_company_white.svg') }}" alt="Teléfono MONDO Ibérica" width="20" height="20">	
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.32 20.13">
						<path d="M6.71,10.16h-2.23v-2.23c0-.41-.34-.75-.75-.75s-.75,.34-.75,.75v2.23H.75C.34,10.16,0,10.5,0,10.91s.34,.75,.75,.75H2.98v2.23c0,.41,.34,.75,.75,.75s.75-.34,.75-.75v-2.23h2.23c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75Z" style="fill:#F5FAFE;"/>
						<path d="M23.31,3.14H12.49c-.41,0-.75,.34-.75,.75v15.21c0,.41,.34,.75,.75,.75h10.82c.41,0,.75-.34,.75-.75V3.89c0-.41-.34-.75-.75-.75Zm-.75,15.21H13.24V4.64h9.32v13.71Z" style="fill:#F5FAFE;"/>
						<path d="M14.42,1.68h7.17c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75h-7.17c-.41,0-.75,.34-.75,.75s.34,.75,.75,.75Z" style="fill:#F5FAFE;"/>
						<path d="M15.52,7.69h1.02c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75h-1.02c-.41,0-.75,.34-.75,.75s.34,.75,.75,.75Z" style="fill:#F5FAFE;"/>
						<path d="M19.16,7.69h1.02c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75h-1.02c-.41,0-.75,.34-.75,.75s.34,.75,.75,.75Z" style="fill:#F5FAFE;"/>
						<path d="M16.64,9.14h-1.02c-.41,0-.75,.34-.75,.75s.34,.75,.75,.75h1.02c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75Z" style="fill:#F5FAFE;"/>
						<path d="M20.28,9.14h-1.02c-.41,0-.75,.34-.75,.75s.34,.75,.75,.75h1.02c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75Z" style="fill:#F5FAFE;"/>
						<path d="M15.52,14.02h1.02c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75h-1.02c-.41,0-.75,.34-.75,.75s.34,.75,.75,.75Z" style="fill:#F5FAFE;"/>
						<path d="M19.16,14.02h1.02c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75h-1.02c-.41,0-.75,.34-.75,.75s.34,.75,.75,.75Z" style="fill:#F5FAFE;"/>
						<path d="M16.64,15.47h-1.02c-.41,0-.75,.34-.75,.75s.34,.75,.75,.75h1.02c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75Z" style="fill:#F5FAFE;"/>
						<path d="M20.28,15.47h-1.02c-.41,0-.75,.34-.75,.75s.34,.75,.75,.75h1.02c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75Z" style="fill:#F5FAFE;"/>
					</svg>
				</button></td>
			</tr>
			<tr>
				<td>Escritura de constitución de empresa y apoderamiento</td>
				<td>Rechazado</td>
				<td>04/03/2022</td>
			</tr>
			<tr>
				<td>Alta Seguridad Social</td>
				<td>Rechazado</td>
				<td>04/03/2022</td>
			</tr>
		</tbody>
	</table>


</x-front-layout>
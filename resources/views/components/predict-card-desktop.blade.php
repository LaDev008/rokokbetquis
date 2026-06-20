<div class="d-flex flex-wrap">
	<div class="card d-none d-lg-flex bg-dark mb-3">
		<div class="card text-bg-dark card-img-top">
			<img src={{ asset($item->image) }} class="card-img mx-auto" alt="{{ $item->name }}"
				style="max-height: 200px; width: 300px;opacity: .4;min-height:120px;">
			<div class="card-img-overlay d-flex justify-content-center align-items-center flex-column">
				<h3 class="card-title text-center">PREDIKSI {{ $item->name }}</h3>
				<label>{{ date('d M Y', strtotime($item->updated_at->addDays(1))) }}</label>
			</div>
		</div>
		<div class="card-body py-0">
			<table class="w-100 table-dark table-hover table">
				<tbody>
					<tr>
						<td>BBFS</td>
						<td>: {{ $item->bbfs }}</td>
					</tr>
					<tr>
						<td>ANGKA MAIN</td>
						<td>: {{ $item->angka_main }}</td>
					</tr>
					<tr>
						<td>COLOK BEBAS</td>
						<td>: {{ $item->colok_bebas }}</td>
					</tr>
					<tr>
						<td>COLOK MACAU</td>
						<td>: {{ $item->colok_macau }}</td>
					</tr>
					<tr>
						<td>JAGA KEMBAR</td>
						<td>: {{ $item->twin }}</td>
					</tr>
					<tr>
						<td>SHIO</td>
						<td>: {{ $item->shio }}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

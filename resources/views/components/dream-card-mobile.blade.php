<div class="d-flex flex-wrap px-2 d-lg-none">
	<div class="card bg-dark mb-3">
		<div class="card text-bg-dark card-img-top">
			<img src={{ asset($item->image) }} class="card-img mx-auto" alt="Erek Erek"
				style="max-height: 400px;min-height:120px;aspect-ratio: 1/1">
		</div>
		<div class="card-body py-0">
			<table class="table-dark table-hover table">
				<tbody>
					<tr>
						<td>BUKU MIMPI</td>
						<td>: {{ $item->dreambook }}</td>
					</tr>
					<tr>
						<td>ANGKA TAFSIR MIMPI 2D - 2D/3D</td>
						<td>: {{ $item->dream_2d }}</td>
					</tr>
					<tr>
						<td>KODE ALAM</td>
						<td>: {{ $item->nature_code }}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

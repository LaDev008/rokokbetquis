<div class="neon-border col-lg col-12 d-flex flex-column gap-3 align-items-center p-5">
    <img src="{{ $site->image }}" alt="{{ $site->name }}" width="300px" height="150px" />

    <style>
        table td {
            font-family: 'Chakra Petch';
        }
    </style>
    <table class="table table-bordered text-white text-center align-middle">
        <tbody>
            <tr>
                <td class="w-50">Nama Situs</td>
                <td>{{ $site->name }}</td>
            </tr>
            <tr>
                <td>Link Situs</td>
                <td><a href="{{ $site->link }}" class="text-decoration-none text-white">{{ $site_link }}</a></td>
            </tr>
            <tr>
                <td>Minimal Deposit</td>
                <td>{{ $site->minimal_deposit }}</td>
            </tr>
            <tr>
                <td>Minimal Withdraw</td>
                <td>{{ $site->minimal_withdraw }}</td>
            </tr>
            <tr>
                <td>Minimal Betting</td>
                <td>{{ $site->minimal_bet }}</td>
            </tr>
            <tr>
                <td>DEPOSIT VIA BANK</td>
                <td>{{ $site->deposit_bank }}</td>
            </tr>
            <tr>
                <td>DEPOSIT VIA MOBILE</td>
                <td>{{ $site->deposit_ewallet }}</td>
            </tr>
            <tr>
                <td>BBFS</td>
                <td>{{ $site->bbfs }}</td>
            </tr>
            <tr>
                <td>Pelayanan</td>
                <td>{{ $site->service }}</td>
            </tr>
            <tr>
                <td>Promo Spesial</td>
                <td>{{ $site->top_promo }}</td>
            </tr>
            <tr>
                <td colspan="2"><a href="{{ $site->link }}" class="text-decoration-none"><button
                            class="neon-border bg-dark neon-text px-5 my-3">DAFTAR SEKARANG</button></a></td>
            </tr>
        </tbody>
    </table>
</div>

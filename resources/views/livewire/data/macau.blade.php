<div>
    <style>
        .custom-font {
            font-size: 1.25rem;
        }

        @media screen and (max-width: 992px) {
            .custom-font {
                font-size: .75rem;
            }
        }


    </style>
    <table class="table table-bordered table-dark table-hover text-center align-middle custom-font">
        <thead>
            <tr>
                <th colspan="7"
                    style="background: linear-gradient(to bottom, darkviolet, purple, rebeccapurple) !important">DATA
                    MACAU 30 HARI TERAKHIR</th>
            </tr>
        </thead>
        <tbody>
            {!! $table_content !!}
        </tbody>
    </table>
</div>

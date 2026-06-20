<div class="col-12 col-8">
    <div class="d-flex w-100 bg-light font-weight-bolder fs-1 justify-content-center">
        <label>PAITO HONGKONG</label>
    </div>

    <form id="selectForm">
        <div class="row no-gutters justify-content-center mt-3 mb-4">
            <div class="col-2 px-1"><input maxlength="1" placeholder="as"
                    class="cari form-control form-control-sm text-center" type="text" id="asc"
                    style="background:#FFF;" autocomplete="off"></div>
            <div class="col-2 px-1"><input maxlength="1" placeholder="kop"
                    class="cari form-control form-control-sm text-center" type="text" id="kopc"
                    style="background:#FFF;" autocomplete="off"></div>
            <div class="col-2 px-1"><input maxlength="1" placeholder="kepala"
                    class="cari form-control form-control-sm text-center" type="text" id="kepalac"
                    style="background:#FFF;" autocomplete="off"></div>
            <div class="col-2 px-1"><input maxlength="1" placeholder="ekor"
                    class="cari form-control form-control-sm text-center" type="text" id="ekorc"
                    style="background:#FFF;" autocomplete="off"></div>
            <div class="col-2 px-1"><button id="rb" type="button" class="btn btn-dark btn-sm"
                    onclick="resetSelectForm()">Clear</button></div>
        </div>
    </form>

    <form method="get" action="" class="mb-2 mt-2"></form>
    <div class="menu2" id="colormenu">
        <fieldset id="color-selector">
            <button id="btnSubmit">CLEAR</button>
            <div class="color" style="background:#ff5050;" data-color="#ff5050"></div>
            <div class="color" style="background:#ff99cc;" data-color="#ff99cc"></div>
            <div class="color" style="background:#a9d08e;" data-color="#a9d08e"></div>
            <div class="color" style="background:#9966ff;" data-color="#9966ff"></div>
            <div class="color" style="background:#66ffcc;" data-color="#66ffcc"></div>
            <div class="color" style="background:#9bc2e6;" data-color="#9bc2e6"></div>
            <div class="color" style="background:#b2b2b2;" data-color="#b2b2b2"></div>
            <div class="color" style="background:#f4b084;" data-color="#f4b084"></div>
            <div class="color eraser" data-color="eraser"></div>
        </fieldset>
    </div>
    <table id="drawing-table" class="noselect mt-2 mb-3" border="1" width="100%">

        <div id="data-hk">
            <?php
            $konten = file_get_contents('https://w3.angkanet.tv/paito-warna-hongkong/');
            $pecah1 = explode('Minggu</th>', $konten);
            $pecah2 = explode('</tbody>', $pecah1[1]);
            echo $pecah2[0];
            ?>
        </div>

        </tbody>
        <thead>
            <tr>
                <td colspan="4"><b>Senin</b></td>
                <td class="asux">D</td>

                <td colspan="4"><b>Selasa</b></td>
                <td class="asux">D</td>

                <td colspan="4"><b>Rabu</b></td>
                <td class="asux">D</td>

                <td colspan="4"><b>Kamis</b></td>
                <td class="asux">D</td>

                <td colspan="4"><b>Jumat</b></td>
                <td class="asux">D</td>

                <td colspan="4"><b>Sabtu</b></td>
                <td class="asux">D</td>

                <td colspan="4"><b>Minggu</b></td>
                <td class="asux">D</td>
            </tr>
        </thead>
    </table>
</div>

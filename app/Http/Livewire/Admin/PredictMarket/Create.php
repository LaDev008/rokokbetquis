<?php

namespace App\Http\Livewire\Admin\PredictMarket;

use App\Models\PredictMarket;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class Create extends Component
{
    use WithFileUploads;

    public $predict;
    public $background;
    public $name;
    public $open;
    public $close;
    public $article;
    public $photo;
    public $livedraw;

    public function submit()
    {
        $this->predict = new PredictMarket();

        $slug = str_replace(' ', '-', $this->name);
        $slug = Str::lower($slug);
        if ($this->photo) {
            $extension =  $this->photo->getClientOriginalExtension();
            $name = str_replace(" ", '-', Str::lower($this->name));
            $newname = "$name.$extension";

            $this->photo->storeAs("market/emblem", $newname);

            $emblem_path = "/storage/market/emblem/$newname";
            $this->predict->emblem = $emblem_path;
        }

        if ($this->background) {
            $extension =  $this->background->getClientOriginalExtension();
            $name = str_replace(" ", '-', Str::lower($this->name));
            $newname = "$name.$extension";

            $this->background->storeAs("market/background", $newname);

            $background_path = "/storage/market/background/$newname";
            $this->predict->image = $background_path;
        }

        $shio = ['KELINCI', 'HARIMAU', 'KERBAU', 'TIKUS', 'BABI', 'ANJING', 'AYAM', 'MONYET', 'KAMBING', 'KUDA', 'ULAR', 'NAGA'];
        $market = [];
        $numberPool = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

        shuffle($numberPool);
        $bbfsPool = array_slice($numberPool, 0, 6);
        $bbfs = implode("", $bbfsPool);
        $market['bbfs'] = $bbfs;

        // CHANGE STRING to ARRAY
        $number = [];
        $digits = str_split($bbfs);
        foreach ($digits as $digit) {
            $number[] = $digit;
        }

        // GET 4 DIGIT NUMBER BASED ON ARRAY VALUE
        shuffle($number);
        $get4digit = array_slice($number, 0, 4);
        $angkaMain = implode('', $get4digit);
        $market['angkaMain'] = $angkaMain;

        shuffle($get4digit);
        $colokBebas = $get4digit[0];
        $market['colokBebas'] = $colokBebas;

        shuffle($get4digit);
        $colokMacau = $get4digit[0];
        $market['colokMacau'] = $colokMacau;

        //SHIO
        $get2lastDigit = substr($angkaMain, -2);
        //get modulo of 12 on get2lastDigit
        $modulo =  $get2lastDigit % 12;

        //switch 12 case
        switch ($modulo) {
            case 0:
                $market['shio'] = $shio[11];
                break;
            case 1:
                $market['shio'] = $shio[0];
                break;
            case 2:
                $market['shio'] = $shio[1];
                break;
            case 3:
                $market['shio'] = $shio[2];
                break;
            case 4:
                $market['shio'] = $shio[3];
                break;
            case 5:
                $market['shio'] = $shio[4];
                break;
            case 6:
                $market['shio'] = $shio[5];
                break;
            case 7:
                $market['shio'] = $shio[6];
                break;
            case 8:
                $market['shio'] = $shio[7];
                break;
            case 9:
                $market['shio'] = $shio[8];
                break;
            case 10:
                $market['shio'] = $shio[9];
                break;
            case 11:
                $market['shio'] = $shio[10];
                break;
        }

        // GET TWIN NUMBER
        shuffle($get4digit);
        $firstDigit = $get4digit[0];
        $secondDigit = $get4digit[1];
        if ($firstDigit == $secondDigit) {
            $secondDigit = $get4digit[2];
            if ($firstDigit == $secondDigit) {
                $secondDigit = $get4digit[3];
            }
        }
        $twin = "$firstDigit" . "$firstDigit " . "$secondDigit" . "$secondDigit";
        $market['twin'] = $twin;

        $this->predict->slug = $slug;
        $this->predict->name = $this->name;
        $this->predict->open = $this->open;
        $this->predict->close = $this->close;
        $this->predict->article = $this->article;
        if ($this->livedraw) {
            $this->predict->livedraw = $this->livedraw;
        }
        $this->predict->bbfs = $market['bbfs'];
        $this->predict->angka_main = $market['angkaMain'];
        $this->predict->colok_bebas = $market['colokBebas'];
        $this->predict->colok_macau = $market['colokMacau'];
        $this->predict->shio = $market['shio'];
        $this->predict->twin = $market['twin'];
        $this->predict->dua_d1 = $digits[0] . $digits[1];
        $this->predict->dua_d2 = $digits[1] . $digits[5];
        $this->predict->dua_d3 = $digits[2] . $digits[4];
        $this->predict->dua_d4 = $digits[3] . $digits[2];
        $this->predict->dua_d5 = $digits[5] . $digits[3];
        $this->predict->dua_d6 = $digits[4] . $digits[0];
        $this->predict->dua_d7 = $digits[0] . $digits[5];
        $this->predict->dua_d8 = $digits[1] . $digits[3];
        $this->predict->dua_d9 = $digits[5] . $digits[2];
        $this->predict->dua_d10 = $digits[3] . $digits[5];
        $this->predict->save();

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil Menambah Pasaran Baru');

        return redirect(route('predicts.index'));
    }

    public function render()
    {
        return view('livewire.admin.predict-market.create');
    }
}

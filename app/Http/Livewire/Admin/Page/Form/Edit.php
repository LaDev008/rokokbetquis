<?php

namespace App\Http\Livewire\Admin\Page\Form;

use App\Models\SeoPage;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Edit extends Component
{
    public $page, $name, $link, $main_slogan, $logo, $main_article, $banner, $background, $old_background, $old_logo;
    public $toggle_background = false, $toggle_logo = false;
    public $seos;

    public function mount()
    {
        $this->name = $this->page->name;
        $this->link = $this->page->link;
        $this->main_slogan = $this->page->main_slogan;
        $this->old_logo = $this->page->logo;
        $this->main_article = $this->page->main_article;
        $this->banner = $this->page->banner;
        $this->old_background = $this->page->background;
        $this->seos = SeoPage::with('navigation')->get();
    }

    public function submit()
    {
        $pecah = explode("/", $this->seos->first()->meta_canonical);
        $domain_name = $pecah[2];

        $pecah_target = explode("/", $this->link);
        $domain_target = $pecah_target[2];

        foreach ($this->seos as $seo) {
            $seo->meta_canonical = str_replace("$domain_name", "$domain_target", $seo->meta_canonical);
            $seo->save();
        }


        $this->page->name = $this->name;
        $this->page->link = $this->link;
        $this->page->main_slogan = $this->main_slogan;
        $this->page->main_article = $this->main_article;
        $this->page->save();

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil mengupdate Informasi');
    }

    public function render()
    {
        return view('livewire.admin.page.form.edit');
    }
}

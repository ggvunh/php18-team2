<?php
namespace App\Http\Views\Composers;
use App\Category;
use App\Brand;
use Illuminate\Contracts\View\View;
Class ProductFromComposer {
  protected $categories;
  protected $brands;
  public function __construct(Category $categories, Brand $brands)
  {
    $this->categories = $categories;
    $this->brands = $brands;
  }
  public function compose(View $view)
  {
    $view->with(['categories' => $this->categories->pluck('name', 'id')])->with(['brands' => $this->brands->pluck('name', 'id'), 'brand' => '']);
    // dd($this->breeds->pluck('name', 'id'));
  }
}

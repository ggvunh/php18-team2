<?php
namespace App\Http\Views\Composers;
use App\Category;
use Illuminate\Contracts\View\View;
Class ProductFromComposer {
  protected $categories;
  public function __construct(Category $categories)
  {
    $this->categories = $categories;
  }
  public function compose(View $view)
  {
    $view->with('categories', $this->categories->pluck('name', 'id'));
    // dd($this->breeds->pluck('name', 'id'));
  }
}

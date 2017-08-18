<?php
namespace App\Http\Views\Composers;
use App\Category;
use App\Brand;
use App\Product;
use Illuminate\Contracts\View\View;
Class ProductFromComposer {
  protected $categories;
  protected $brands;
  protected $apple;
  protected $asus;
  protected $dell;
  protected $hp;
  protected $lenovo;
  protected $acer;
  protected $sony;
  protected $samsung;
  public function __construct(Category $categories, Brand $brands)
  {
    $this->categories = $categories;
    $this->brands = $brands;
  }
  public function compose(View $view)
  {
    $brand_apple =  Brand::where('name', 'like', '%Apple%')->first();
    $brand_asus =  Brand::where('name', 'like', '%Asus%')->first();
    $brand_dell =  Brand::where('name', 'like', '%Dell%')->first();
    $brand_hp =  Brand::where('name', 'like', '%HP%')->first();
    $brand_ss =  Brand::where('name', 'like', '%SamSung%')->first();
    $brand_lenovo =  Brand::where('name', 'like', '%Lenovo%')->first();
    $brand_acer =  Brand::where('name', 'like', '%Acer%')->first();
    $brand_sony =  Brand::where('name', 'like', '%Sony%')->first();

    if(!empty($brand_apple))
      $apple = Product::where('brand_id', '=', $brand_apple->id)->count();
    else
      $apple = 0;

    if (!empty($brand_asus)) 
      $asus = Product::where('brand_id', '=', $brand_asus->id)->count();
    else
      $asus = 0;

    if (!empty($brand_dell)) {
      $dell = Product::where('brand_id', '=', $brand_dell->id)->count();
    }
    else
      $dell = 0;
    
    if (!empty($brand_hp))
      $hp = Product::where('brand_id', '=', $brand_hp->id)->count();
    else
      $hp = 0;

    if (!empty($brand_lenovo))
      $lenovo = Product::where('brand_id', '=', $brand_lenovo->id)->count();
    else
      $lenovo = 0;

    if (!empty($brand_acer))
      $acer = Product::where('brand_id', '=', $brand_acer->id)->count();
    else
      $acer = 0;
    
    if (!empty($brand_sony))
      $sony = Product::where('brand_id', '=', $brand_sony->id)->count();
    else
      $sony = 0;

    if (!empty($brand_ss))
      $samsung = Product::where('brand_id', '=', $brand_ss->id)->count();
    else
      $samsung = 0;
    $samsung = Product::where('brand_id', '=', $brand_ss->id)->count();
    $view->with(['categories' => $this->categories->pluck('name', 'id'), 'brands' => $this->brands->pluck('name', 'id'), 'apple' => $apple, 'dell' => $dell, 'asus' => $asus, 'hp' => $hp, 'lenovo' => $lenovo, 'acer' => $acer, 'sony' => $sony, 'samsung' => $samsung ]);
    // dd($this->breeds->pluck('name', 'id'));
  }
}

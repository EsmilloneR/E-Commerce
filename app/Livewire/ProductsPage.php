<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

#[Title('Products Page | PaperCountryInn')]
class ProductsPage extends Component
{
    use WithPagination, WithoutUrlPagination;

    public function render()
    {
        $productQUery = Product::query()->where('is_active', 1);
        return view('livewire.products-page', [
            'products' => $productQUery->paginate(6),
            'brands' => Brand::where('is_active', 1)->get(['id', 'name', 'slug']),
            'categories' => Brand::where('is_active', 1)->get(['id', 'name', 'slug']),
        ]);
    }
}

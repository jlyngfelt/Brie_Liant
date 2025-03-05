<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function a_product_can_be_created(): void
    {
        $admin = User::factory()->admin()->create();
        $this->actingAs($admin);


        $category = Category::factory()->create();

        $product = Product::create([
            'name' => 'Testost',
            'description' => 'En väldigt god ost',
            'price' => 99,
            'image_path' => 'https://example.com/testost.jpg',
            'category_id' => $category->id,
        ]);

        $this->assertDatabaseHas('products', [
            'name' => 'Testost',
            'description' => 'En väldigt god ost',
            'price' => 99,
            'category_id' => $category->id,
        ]);
    }
    #[Test]
    public function a_product_can_be_viewed(): void
    {
        $admin = User::factory()->admin()->create();
        $this->actingAs($admin);


        $category = Category::factory()->create();
        $product = Product::factory()->create(['category_id' => $category->id]);

        $response = $this->get(route('products.show', $product->id));

        $response->assertStatus(200);
        $response->assertSee($product->name);
        $response->assertSee($product->description);
        $response->assertSee($product->price);
    }

    #[Test]
    public function a_product_can_be_updated(): void
    {
        $admin = User::factory()->admin()->create();
        $this->actingAs($admin);


        $category = Category::factory()->create();
        $product = Product::factory()->create(['category_id' => $category->id]);

        $newData = [
            'name' => 'Uppdaterad Ost',
            'description' => 'Ännu godare ost',
            'price' => 120,
            'image_path' => 'https://example.com/updatedost.jpg',
            'category_id' => $category->id,
        ];

        $response = $this->patch(route('products.update', $product->id), $newData);

        $response->assertRedirect(route('products.show', $product->id));
        $this->assertDatabaseHas('products', $newData);
    }
}

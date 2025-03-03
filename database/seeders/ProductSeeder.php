<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ["name" => "Grevé", "category" => "1", "price" => 12, "weight" => 325, "description" => "Mild och nötig smak med inslag av sötma.", "image_url" => "https://cdb.arla.com/api/assets/falbygdensost/c78b5d71-05f5-4408-8ff8-bcccf1821437/greve.jpg?mode=crop&transform=downfill&quality=80&width=666&height=444"],
            ["name" => "Prästost", "category" => "1", "price" => 15, "weight" => 325, "description" => "Kraftig och fyllig smak med syrlig ton.", "image_url" => "https://cdb.arla.com/api/assets/falbygdensost/292e2ca0-1a23-4cc3-8d69-c0c9a88284f3/prastost.jpg?mode=crop&transform=downfill&quality=80&width=666&height=444"],
            ["name" => "Herrgård", "category" => "1", "price" => 14, "weight" => 325, "description" => "Mild och gräddig med sötaktig smak.", "image_url" => "https://cdb.arla.com/api/assets/falbygdensost/6a07f4a2-c8e9-43c1-9497-6a8471249859/herrgard.jpg?mode=crop&transform=downfill&quality=80&width=666&height=444"],
            ["name" => "Västerbotten", "category" => "1", "price" => 18, "weight" => 150, "description" => "Stark och pikant smak med lång eftersmak.", "image_url" => "https://www.johanlidbyvinhandel.se/privat/wp-content/uploads/sites/2/2023/03/vbotten.jpg"],
            ["name" => "Cheddar med tryffel", "category" => "1", "price" => 16, "weight" => 130, "description" => "Kraftig och nötig smak, lagrad.", "image_url" => "https://hugoericsonost.se/products_1500x1500px/12084.jpg"],
            ["name" => "Stilton", "category" => "2", "price" => 22, "weight" => 120, "description" => "Kraftig och krämig med tydlig mögelsmak.", "image_url" => "https://cdb.arla.com/api/assets/falbygdensost/8666458b-0908-4edb-9584-fae3fb783496/stilton.jpg?mode=crop&transform=downfill&quality=80&width=666&height=444"],
            ["name" => "Gorgonzola", "category" => "2", "price" => 20, "weight" => 200, "description" => "Mild till stark smak beroende på lagring.", "image_url" => "https://www.mollansost.com/wp-content/uploads/2021/12/3383.png"],
            ["name" => "Roquefort", "category" => "2", "price" => 25, "weight" => 200, "description" => "Salt och pikant med smulig konsistens.", "image_url" => "https://www.tastingtable.com/img/gallery/the-idyllic-myth-behind-roquefort-cheeses-origin/l-intro-1667938407.jpg"],
            ["name" => "Bleu d'Auvergne", "category" => "2", "price" => 19, "weight" => 120, "description" => "Krämig med stark och pepprig smak.", "image_url" => "https://champagneplusfromage.co.uk/wp-content/uploads/2020/07/UNAL-CF0266272DPI_scale50%EF%BF%BD_Qual78.jpg"],
            ["name" => "Danish Blue", "category" => "2", "price" => 18, "weight" => 120, "description" => "Kraftigt saltad och smulig ost.", "image_url" => "https://dorothy-lane-market.s3.us-east-2.amazonaws.com/shop/items/danish-blue-1_662x450.JPEG"],
            ["name" => "Ricotta", "category" => "3", "price" => 12, "weight" => 250, "description" => "Mild, mjuk och lätt grynig ost.", "image_url" => "https://www.thespruceeats.com/thmb/F8OID-hERdxE0NDAZbdLczmLCwY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/106908888-58aefb225f9b58a3c9287cf3.jpg"],
            ["name" => "Feta", "category" => "3", "price" => 14, "weight" => 180, "description" => "Salt och smulig ost med frisk smak.", "image_url" => "https://cheesemaking.com/cdn/shop/products/feta-cheese-making-recipe-442412.jpg?crop=center&height=450&v=1739766230&width=800"],
            ["name" => "Halloumi", "category" => "3", "price" => 17, "weight" => 200, "description" => "Salt ost med hög smältpunkt.", "image_url" => "https://boutique.oleahoerdt.fr/images/produits/1753/1713166735-grilled-halloumi-2.webp"]
        ];

        foreach ($products as $productData) {
            Product::create([
                'name' => $productData['name'],
                'description' => $productData['description'],
                'price' => $productData['price'],
                'image_path' => $productData['image_url'],
                'category_id' => $productData['category'], // Koppla rätt kategori
            ]);
        }
    }
}

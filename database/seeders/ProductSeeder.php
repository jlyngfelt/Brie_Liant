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
            ["name" => "Gammel Knas", "category" => "1", "price" => 41, "description" => "En söt ost, med fantastiska proteinkristaller", "image_url" => "https://arlaunika.se/cdn/shop/products/gammel_knas_0ee44cbb-b75f-424d-b43f-164dcb98a083_1200x1000.jpg?v=1576689118"],
            ["name" => "Parmeggiano", "category" => "1", "price" => 35, "description" => "Hård och salt ost med mycket smak", "image_url" => "https://cdb.arla.com/api/assets/falbygdensost/3a0a1a7a-bd91-4013-b834-bc23c860f72f/parmeggiano-webb.jpg?mode=crop&transform=downfill&quality=80&width=666&height=444"],
            ["name" => "Brillat Savarin", "category" => "6", "price" => 22, "description" => "Mild och krämig vitmögelost med syrad grädde", "image_url" => "https://images.arla.com/recordid/985AE336-0AE6-41EA-B84FD1420E95AE90/brillat-savarin-med-balsamicostekt-vattenmelon-och-jordgubbssalsa.jpg?mode=crop&transform=downfill&quality=80&width=666&height=444"],
            ["name" => "Hallands siren", "category" => "2", "price" => 22, "description" => "Mild och lätt samtidigt som den är fast och krämig.", "image_url" => "https://arlaunika.se/cdn/shop/files/Hallands-Siren_1200x1000.jpg?v=1682489301"],
            ["name" => "Gruyere", "category" => "1", "price" => 43, "description" => "Mild och lätt nötig smak.", "image_url" => "https://www.cheesesfromswitzerland.com/fileadmin/Global/content/Unser_Schweizer_Kaese/Le_Gruyere_AOP/Beitragsbild.jpeg"],
            ["name" => "Prästost", "category" => "1", "price" => 15, "description" => "Kraftig och fyllig smak med syrlig ton.", "image_url" => "https://cdb.arla.com/api/assets/falbygdensost/292e2ca0-1a23-4cc3-8d69-c0c9a88284f3/prastost.jpg?mode=crop&transform=downfill&quality=80&width=666&height=444"],
            ["name" => "Herrgård", "category" => "1", "price" => 14, "description" => "Mild och gräddig med sötaktig smak.", "image_url" => "https://cdb.arla.com/api/assets/falbygdensost/6a07f4a2-c8e9-43c1-9497-6a8471249859/herrgard.jpg?mode=crop&transform=downfill&quality=80&width=666&height=444"],
            ["name" => "Västerbotten", "category" => "1", "price" => 18, "description" => "Stark och pikant smak med lång eftersmak.", "image_url" => "https://www.johanlidbyvinhandel.se/privat/wp-content/uploads/sites/2/2023/03/vbotten.jpg"],
            ["name" => "Engelsk Cheddar", "category" => "1", "price" => 16, "description" => "Kraftig och nötig smak, lagrad.", "image_url" => "https://cdb.arla.com/api/assets/falbygdensost/efd31ae7-0bcd-4c07-8a18-540816e6ec1a/cheddar.jpg?mode=crop&transform=downfill&quality=80&width=364&height=252"],
            ["name" => "Stilton", "category" => "2", "price" => 22, "description" => "Kraftig och krämig med tydlig mögelsmak.", "image_url" => "https://cdb.arla.com/api/assets/falbygdensost/8666458b-0908-4edb-9584-fae3fb783496/stilton.jpg?mode=crop&transform=downfill&quality=80&width=666&height=444"],
            ["name" => "Gorgonzola", "category" => "2", "price" => 20, "description" => "Mild till stark smak beroende på lagring.", "image_url" => "https://www.mollansost.com/wp-content/uploads/2021/12/3383.png"],
            ["name" => "Roquefort", "category" => "2", "price" => 25, "description" => "Salt och pikant med smulig konsistens.", "image_url" => "https://www.tastingtable.com/img/gallery/the-idyllic-myth-behind-roquefort-cheeses-origin/l-intro-1667938407.jpg"],
            ["name" => "Bleu d'Auvergne", "category" => "2", "price" => 19, "description" => "Krämig med stark och pepprig smak.", "image_url" => "https://champagneplusfromage.co.uk/wp-content/uploads/2020/07/UNAL-CF0266272DPI_scale50%EF%BF%BD_Qual78.jpg"],
            ["name" => "Danish Blue", "category" => "2", "price" => 18, "description" => "Kraftigt saltad och smulig ost.", "image_url" => "https://dorothy-lane-market.s3.us-east-2.amazonaws.com/shop/items/danish-blue-1_662x450.JPEG"],
            ["name" => "Ricotta", "category" => "3", "price" => 12, "description" => "Mild, mjuk och lätt grynig ost.", "image_url" => "https://www.thespruceeats.com/thmb/F8OID-hERdxE0NDAZbdLczmLCwY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/106908888-58aefb225f9b58a3c9287cf3.jpg"],
            ["name" => "Grevé", "category" => "1", "price" => 12, "description" => "Mild och nötig smak med inslag av sötma.", "image_url" => "https://cdb.arla.com/api/assets/falbygdensost/c78b5d71-05f5-4408-8ff8-bcccf1821437/greve.jpg?mode=crop&transform=downfill&quality=80&width=666&height=444"],
            ["name" => "vacherousse d'argental", "category" => "5", "price" => 14, "description" => "Krämig, sötaktig och fyllig färskost.", "image_url" => "https://cheeseculture.com.au/cdn/shop/files/vacherousse.jpg?v=1697000919"],
            ["name" => "Burrata", "category" => "3", "price" => 13, "description" => "Mild, elastisk och krämig ost.", "image_url" => "https://images.squarespace-cdn.com/content/v1/602179b785961727c6f7fe3f/1657966016932-26SZNRYY3MGMTPEZJNYO/_DSC5060.jpeg"],
            ["name" => "Chèvre", "category" => "4", "price" => 18, "description" => "Mild och syrlig med krämig konsistens.", "image_url" => "https://cdb.arla.com/api/assets/falbygdensost/78a41f00-c379-450f-8997-fbe0716ca172/chevre.jpg?mode=crop&transform=downfill&quality=80&width=666&height=444"],
            ["name" => "Munster", "category" => "5", "price" => 23, "description" => "Stark doft och kraftfull smak.", "image_url" => "https://cdb.arla.com/api/assets/falbygdensost/2a2c9d83-3728-42f4-a9a0-8335d25df1a3/munster.jpg?mode=crop&transform=downfill&quality=80&width=666&height=444"],
            ["name" => "Brie de Meaux", "category" => "6", "price" => 18, "description" => "Krämig och mild med nötig eftersmak.", "image_url" => "https://cdb.arla.com/api/assets/falbygdensost/70e0a3ef-ba0d-4091-845b-fd089dc338b9/brie-webb-1.jpg?mode=crop&transform=downfill&quality=80&width=340&height=340"],
            ["name" => "Camembert", "category" => "6", "price" => 16, "description" => "Mjuk och fyllig med jordig smak.", "image_url" => "https://cdb.arla.com/api/assets/falbygdensost/2ec47785-988b-4ab6-ac42-879e67095624/camembert-webb.jpg?mode=crop&transform=downfill&quality=80&width=666&height=444"],
            ["name" => "Feta", "category" => "3", "price" => 14, "description" => "Salt och smulig ost med frisk smak.", "image_url" => "https://cheesemaking.com/cdn/shop/products/feta-cheese-making-recipe-442412.jpg?crop=center&height=450&v=1739766230&width=800"],
            ["name" => "Halloumi", "category" => "3", "price" => 17, "description" => "Salt ost med hög smältpunkt.", "image_url" => "https://boutique.oleahoerdt.fr/images/produits/1753/1713166735-grilled-halloumi-2.webp"],
            ["name" => "Taleggio", "category" => "5", "price" => 20, "description" => "Krämig och mild smak med jordiga toner.", "image_url" => "https://osterqvist.se/wp-content/uploads/Taleggio-dop.jpg"],
            ["name" => "Provolone", "category" => "1", "price" => 19, "description" => "Mild till pikant smak beroende på lagring.", "image_url" => "https://www.volpetti.com/wp-content/uploads/2018/04/17-provolone-del-monaco_001.jpg"],
        ];

        foreach ($products as $productData) {
            Product::create([
                'name' => $productData['name'],
                'description' => $productData['description'],
                'price' => $productData['price'],
                'image_path' => $productData['image_url'],
                'category_id' => $productData['category'],
            ]);
        }
    }
}

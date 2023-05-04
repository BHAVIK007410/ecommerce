<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;

/**
 * Class ProductsSeeder
 * 
 * @package Database\Seeders
 */
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'category_id' => 1,
                'product_name' => 'SanDisk Cruzer Blade 32GB USB Flash Drive',
                'product_price' => 289.00,
                'product_qty' => 100,
                'product_desc' => '<ul class="a-unordered-list a-vertical a-spacing-mini">   <li class="a-spacing-small"><span class="a-list-item"> Compact Design for Maximum Portability.  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Store more with capacities up to 16gb 5-year limited warranty , High-Capacity Drive Accommodates Your Favorite Media Files. Write Speed : 20 MB/s (USB 2.0)  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Operating temperature: 0ºC to 45ºC , Storage temperature: -10ºC to 70ºC  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> SanDisk SecureAccess Software Protects Drive from Unauthorized Access  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> The models are different because production is from different countries. Otherwise both are sandisk cruzer blade models.  </span></li>  </ul>',
                'product_img' => 'uploads/img1.png',
            ],
            [
                'category_id' => 1,
                'product_name' => 'Fire-Boltt Ninja 2 SpO2 Full Touch Smartwatch with 30 Workout Modes, Heart Rate Tracking, and 100+ Cloud Watch Faces, 7 Days of extensive Battery, Dark Green (Black)',
                'product_price' => 1099.00,
                'product_qty' => 50,
                'product_desc' => '<ul class="a-unordered-list a-vertical a-spacing-mini">   <li class="a-spacing-small"><span class="a-list-item"> Fire-Boltt is India\' No 1 Wearable Watch Brand Q122 by IDC Worldwide quarterly wearable device tracker Q122.【SPO2/ Oxygen, Heart Rate Monitoring】 - Fire-Boltt Ninja 2 Smatwatch comes with real time 24*7 SPO2 / Blood Oxygen tracking, Track your heart rate on the go with best in class technology. Get faster, accurate results;【Track each sport | 30 Workout Module】 - Sweat that fat out with each sports mode tracked and monitor. Enjoy your favourite sport and let the machine do the tracking  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> 【IP68 Rating Water Resistant】- Fire-Boltt Ninja 2 comes with an IP68 Rating allowing you to enjoy mild rains with the watch! Sweat and Water Resistance at its Best!;【HD Large Screen Full Touch 】- Fire-Boltt Ninja 2 smartwatch is a 1.3 inches Color screen full touch display, with 240*240 pixel HD clarity, the material, design and craftsmanship are all exquisite. Full capacitive touch, supporting taps and swipes.  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> 【Upto 7 Day Battery Life】 - Powerful battery to concentrate on the game without stopping. 【Set Up Alarms】- Set alarms and never be late for that meeting.  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> 【Music &amp; Camera Control】- Fire-Boltt Ninja 2 now lets the user remote control all the mobile function on the wrist!; Excellent Menu Control】- With a Honeycomb menu, the user can land to any activity with just one swipe and one tap  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Connectivity Technology: Bluetooth; Clasp Type: Tang Buckle; Item Type Name: Smart Watch; Case Material Type: Plastic; Included Components: 1u Smartwatch, 1u Charging Cable, 1u Manual; Band Material Type: Silicone; Human Interface Input: Touch Screen; Compatible Devices: Smartphonetablet  </span></li>  </ul>',
                'product_img' => 'uploads/img2.png',
            ],
            [
                'category_id' => 2,
                'product_name' => 'Rimsha Wear Women\'s Solid Regular Fit Ruffle Top',
                'product_price' => 399.00,
                'product_qty' => 500,
                'product_desc' => '<ul class="a-unordered-list a-vertical a-spacing-mini">   <li class="a-spacing-small"><span class="a-list-item"> Care Instructions: Hand Wash Only  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Fit Type: Regular Fit  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> It Features Collar Neck With Little Frills, Long Sleeves With Frills And Cuff, Regular Length Top, Center Back Loop Button Closure, Regular Fit, It Is A Hand Wash Product Only&lt;br&gt;&lt;br&gt;  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Collar Style: Round Collar&lt;br&gt;  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Lifestyle: Casual; Occasion Type: Casual; Material Composition: 80% Polyester, 20% Cotton  </span></li>  </ul>',
                'product_img' => 'uploads/img3.png',
            ],
            [
                'category_id' => 2,
                'product_name' => 'Juniper Women\'s Chiffon Printed Tiered Dress',
                'product_price' => 1294.00,
                'product_qty' => 500,
                'product_desc' => '<ul class="a-unordered-list a-vertical a-spacing-mini">   <li class="a-spacing-small"><span class="a-list-item"> Care Instructions: Hand Wash Only  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Fit Type: Regular  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> PACKAGE CONTAINS : 1 Dress  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> STYLE &amp; MATERIAL : Present an Elegant collection of Women\'s Tropical Print Chiffon Flared Three-Quarter Sleeves Fit and Flare Dress For You. This Dress is extremely stylish With Vibrant Colors, soft and comfortable.  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> SUITABLE FOR : Party, Weddings, Regular Wear, Celebrations, Occasions, Festivals, Lohri, Makar Sakranti, Baisakhi, Holi, Raksha Bandhan, Dussehra, Diwali, Navratri, Pooja, Christmas, Onam, Ganesha and Gifting.  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> TYPE OF WORK : Semi Fit With Button Closure Daily Use Ready To Wear Dress comes with lace insert and wood button detailing.  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> DISCLAIMER : Product colours or textures may slightly vary due to photographic lighting sources. To View our entire Product catalogue please Visit Our "Juniper" Store.  </span></li>  </ul>',
                'product_img' => 'uploads/img4.png',
            ],
            [
                'category_id' => 3,
                'product_name' => 'The Souled Store|Official Popeye: Bring Em On Mens and Boys T-Shirts |Half Sleeve| Loose Fit Graphic Printed| 80% Cotton 20% Polyester Blue Color Men Oversized T-Shirts',
                'product_price' => 1049.00,
                'product_qty' => 500,
                'product_desc' => '<ul class="a-unordered-list a-vertical a-spacing-mini">   <li class="a-spacing-small"><span class="a-list-item"> Care Instructions: Machine Wash  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Fit Type: Oversized Fit  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Homegrown Indian Brand - One-stop-shop for Official Merch of all your favorite superheroes, films, TV shows and cartoons.  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Material: 80% Cotton 20% Polyester, Fabric: Cotton &amp; Polyester, Color: Blue, Neck: Round Neck, Fit: Loose, Sleeve: Half Sleeve, Pattern: Printed, Closure: Pull On  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Size Guide: XS(44"), S(46"), M(48"), L(50"), XL(52"), XXL(54"), XXXL(56")  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> High Definition Print - Using the highest quality solvents and colors combines with fully automated machines, we ensure our t-shirts have razor-sharp prints that highlight every single detail.  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Colours may slightly vary depending on your screen brightness. The product specifications mentioned above may vary by +/- 10%.  </span></li>  </ul>',
                'product_img' => 'uploads/img5.png',
            ],
            [
                'category_id' => 3,
                'product_name' => 'The Souled Store|Official Harry Potter: 07 Mens and Boys Jackets|Regular Fit Graphic Printed| 60% Cotton 40% Polyester Maroon Color Men Jackets',
                'product_price' => 2351.00,
                'product_qty' => 500,
                'product_desc' => '<ul class="a-unordered-list a-vertical a-spacing-mini">   <li class="a-spacing-small"><span class="a-list-item"> Care Instructions: Hand Wash Only  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Fit Type: Regular Fit  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> It Features Collar Neck With Little Frills, Long Sleeves With Frills And Cuff, Regular Length Top, Center Back Loop Button Closure, Regular Fit, It Is A Hand Wash Product Only&lt;br&gt;&lt;br&gt;  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Collar Style: Round Collar&lt;br&gt;  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Lifestyle: Casual; Occasion Type: Casual; Material Composition: 80% Polyester, 20% Cotton  </span></li>  </ul>',
                'product_img' => 'uploads/img6.png',
            ],
            [
                'category_id' => 4,
                'product_name' => 'Red Tape Men\s Sports Walking Shoes - Arch Support, Dynamic Feet Support, On-Ground Stability, Soft-Cushioned Insole, Shock Absorption, Perfect for Walking & Running Black',
                'product_price' => 1563.00,
                'product_qty' => 500,
                'product_desc' => '<ul class="a-unordered-list a-vertical a-spacing-mini">   <li class="a-spacing-small"><span class="a-list-item"> Sole: Ethylene Vinyl Acetate  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Closure: Lace-Up  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Fit Type: Regular  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Shoe Width: Medium  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> MATERIAL: Upper: MESH+PU | Outsole- EVA (Ethylene Vinyl Acetate)+ TPU(Thermoplastic Polyurethane)  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> THIS MEN\'S SPORTS SHOES IS FOR: This Shoes Gives All-Day Comfort And Relaxation At The Feet And Keeps You Active All Day Long.  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> FEATURES: Closure - Lace-Up | Fit Type - Regular  </span></li>  </ul>',
                'product_img' => 'uploads/img7.png',
            ],
            [
                'category_id' => 4,
                'product_name' => 'Women\'s Blue Fashion Slippers',
                'product_price' => 349.00,
                'product_qty' => 500,
                'product_desc' => 'These ultra-modern slippers from Solea are a perfect addition to your footwear collection. With sophisticated designs, sturdy straps, and snug fitted soles, slippers from Solea are classic picks for women that require both comfort and style. Sport these durable pair of flip flops and make a style statement.',
                'product_img' => 'uploads/img8.png',
            ],
            [
                'category_id' => 5,
                'product_name' => 'OnePlus Nord CE 2 Lite 5G (Blue Tide, 6GB RAM, 128GB Storage)',
                'product_price' => 18499.00,
                'product_qty' => 500,
                'product_desc' => '<ul class="a-unordered-list a-vertical a-spacing-mini">   <li class="a-spacing-small"><span class="a-list-item"> Camera: 64MP Main Camera with EIS; 2MP Depth Lens and 2MP Macro Lens; Front (Selfie) Camera: 16MP Sony IMX471  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Camera Features: AI scene enhancement, Dual-View Video, HDR, Night Portrait, Panorama Mode, Retouch Filters, 1080p video at 30 fps, SLO-MO: 720p video at 120 fps, TIME-LAPSE: 1080p video at 30 fps, Video editor, Face unlock, Screen flash, HDR, NIGHT, PORTRAIT, TIME-LAPSE, Retouch, Filters  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Display: 6.59 Inches; 120 Hz Refresh Rate; Support sRGB, Display P3; Resolution: 2412 x 1080 pixels 402ppi; Aspect Ratio: 20:9  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Display Features: Dark mode  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Operating System: Oxygen OS based on Android 12  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Processor: Qualcomm Snapdragon 695 5G  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Battery &amp; Charging: 5000 mAh with 33W SuperVOOC  </span></li>  </ul>',
                'product_img' => 'uploads/img9.png',
            ],
            [
                'category_id' => 5,
                'product_name' => 'Samsung Galaxy A14 5G (Dark Red, 8GB, 128GB Storage) | Triple Rear Camera (50 MP Main) | Upto 16 GB RAM with RAM Plus | Without Charger',
                'product_price' => 20999.00,
                'product_qty' => 500,
                'product_desc' => '<ul class="a-unordered-list a-vertical a-spacing-mini">   <li class="a-spacing-small"><span class="a-list-item"> A large 6.6″ FHD+ LCD display (1080 X 2408) with a 20:9 aspect ratio for cinematic viewing  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> Android 13 One UI Core 5.0 (Octa Core 2.4GHz ) Octa-Core processor  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> 50+2+2MP High Resolution Camera, Lets you capture clearer, brighter photos on any occasion  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> 5000 Massive Battery ,Coherent Large battery capacity with AI Power management  </span></li>  <li class="a-spacing-small"><span class="a-list-item"> 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase  </span></li>  </ul>',
                'product_img' => 'uploads/img10.png',
            ],
        ];

        foreach ($products as $product) {
            Products::create($product);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{

    private $products = [
        ['id' => 1, 'name' => 'Laptop',
        'description' => "The Surface Laptop is truly an incredible portable machine, 
        all thanks to the Qualcomm Snapdragon chip it's equipped with. Performance, 
        battery life, light and thin, price, sound quality, and more are all top-notch, 
        making it an easy pick for best laptop of 2024. ", 'price' => 1500,
        'images' => [
         'https://media-cdn.bnn.in.th/411212/microsoft-surface-laptop-7-13ineli16512-win11-sc-thai-graphite-zgp-1-square_medium.jpg',
         'https://media-cdn.bnn.in.th/411328/microsoft-surface-laptop-7-13inpls16512-win11-sc-thai-graphite-zgm-4-square_medium.jpg',
         'https://media-cdn.bnn.in.th/411327/microsoft-surface-laptop-7-13inpls16512-win11-sc-thai-graphite-zgm-3-square_medium.jpg'
        ],'image' => 'https://media-cdn.bnn.in.th/411212/microsoft-surface-laptop-7-13ineli16512-win11-sc-thai-graphite-zgp-1-square_medium.jpg' ],

        ['id' => 2, 'name' => 'iPhone 16 Pro Max',
        'description' => "The iPhone 16 Pro Max gives you the best of everything Apple offers,
         and it's everything I want in a smartphone. The new Camera Control is useful and 
         getting better, and Apple Intelligence is just over the horizon. Plus, it performs like a champion.", 'price' => 800,
        'images' => [
         'https://media-cdn.bnn.in.th/426827/iPhone_16_Pro_Desert_Titanium_1-square_medium.jpg',
         'https://media-cdn.bnn.in.th/426829/iPhone_16_Pro_Desert_Titanium_3-square_medium.jpg',
         'https://media-cdn.bnn.in.th/426828/iPhone_16_Pro_Desert_Titanium_2-square_medium.jpg'
        ],'image' =>'https://media-cdn.bnn.in.th/426827/iPhone_16_Pro_Desert_Titanium_1-square_medium.jpg'],

        ['id' => 3, 'name' => 'Tablet',
        'description' => 'The tablet comes with a 11.50-inch touchscreen display offering a resolution 
        of 2200x1440 pixels.Huawei MatePad 11.5 comes with 8GB of RAM and Portable tablet for everyday use', 'price' => 500,
        'images' => [
         'https://consumer.huawei.com/dam/content/dam/huawei-cbg-site/common/mkt/plp-x/tablet/autumn-2024-wearable-launch/matepad-series/huawei-matepad-11-5-s.jpg',
         'https://reimg-teknosa-cloud-prod.mncdn.com/mnresize/600/600/productimage/125045672/125045672_0_MC/91788594.jpg',
         'https://down-my.img.susercontent.com/file/my-11134207-7rash-m1590sh2xvflb7'
        ],'image' => 'https://consumer.huawei.com/dam/content/dam/huawei-cbg-site/common/mkt/plp-x/tablet/autumn-2024-wearable-launch/matepad-series/huawei-matepad-11-5-s.jpg'],

        ['id' => 4, 'name' => 'Camera',
        'description' => 'The best camera for beginners With a compact build, 
        good handling and modern autofocus, the Canon EOS R10 represents excellent value for beginners', 'price' => 600,
        'images' => [
         'https://www.cliftoncameras.co.uk/uploads/variants/Panasonic-Lumix-S9-with-S-Series-20-60mm-F35-56-Lens-black-02.jpg',
         'https://shop.panasonic.com/cdn/shop/files/S9_N-KIT_slant_K.jpg?v=1733413851&width=800',
         'https://shop.panasonic.com/cdn/shop/files/S9_N-KIT_top_K.jpg?v=1733413796&width=800'
        ],'image' => 'https://www.cliftoncameras.co.uk/uploads/variants/Panasonic-Lumix-S9-with-S-Series-20-60mm-F35-56-Lens-black-02.jpg'],

        ['id' => 5, 'name' => 'Photo printer',
        'description' => "Best photo printer overall Though affordable and stripped back in 
        features - there's no this main paper tray or touchscreen for example - this six-tank inkjet delivers high-quality photos.", 'price' => 1200,
        'images' => [
         'https://mcc-jo.com/wp-content/uploads/2024/05/CANON-SELPHY-CP1500-WIRELESS-COMPACT-PORTABLE-COLOUR-PHOTO-PRINTER.jpg',
         'https://cdn3.evostore.io/productimages/vow_api/l/co67158_01.jpg'
        ],'image' => 'https://mcc-jo.com/wp-content/uploads/2024/05/CANON-SELPHY-CP1500-WIRELESS-COMPACT-PORTABLE-COLOUR-PHOTO-PRINTER.jpg'],

        ['id' => 6, 'name' => 'Wireless Headphone',
        'description' => 'The best cheap wireless headphones these were already great value when we first reviewed 
        them, but now that they often see discounts, the WH-CH520 are by far the best bargain buy for wireless on-ear cans.', 'price' => 400,
        'images' => [
         'https://www.jib.co.th/img_master/product/original/2024011216295064841_1.png',
         'https://www.jib.co.th/img_master/product/original/2024011216295064841_4.jpg',
         'https://www.jib.co.th/img_master/product/original/2024011216295064841_3.jpg'
        ],'image' => 'https://www.jib.co.th/img_master/product/original/2024011216295064841_1.png'],

        ['id' => 7, 'name' => 'Microphone',
        'description' => "This set-and-forget desktop option from mic specialists Rode is an ideal choice for podcasting.
         Whether you're recording to a PC or an iPad, the NT-USB is incredibly easy to use. ", 'price' => 700,
        'images' => [
         'https://www.aquapro.co.th/wp-content/uploads/2022/10/mn02_MaonoAU902-3.jpg',
         'https://cafe24img.poxo.com/channelcomph/web/product/extra/big/202107/c3b3eb200696f758900e5833b00b8263.jpg'
        ],'image' => 'https://www.aquapro.co.th/wp-content/uploads/2022/10/mn02_MaonoAU902-3.jpg'],

        ['id' => 8, 'name' => 'Bluetooth speaker',
        'description' => 'This small, round speaker has a natural sound and a cool design, and it’s built to survive outdoor adventures.', 'price' => 300,
        'images' => [
         'https://ae01.alicdn.com/kf/Sdfc1e2d2128946448c4ea649fae61e108/WISETIGER-P1S-IPX7-Waterproof-Speaker-Mini-Portable-Sound-Box-Bass-Boost-TWS-Dual-Pairing-BT5-3.jpg'
        ],'image' => 'https://ae01.alicdn.com/kf/Sdfc1e2d2128946448c4ea649fae61e108/WISETIGER-P1S-IPX7-Waterproof-Speaker-Mini-Portable-Sound-Box-Bass-Boost-TWS-Dual-Pairing-BT5-3.jpg'],

        ['id' => 9, 'name' => 'Power Bank',
        'description' => "It charges our phone and all of our accessories fast, and it's even powerful enough to charge a Chromebook or MacBook Air.", 'price' => 600,
        'images' => [
         'https://www.istudio.store/cdn/shop/files/Anker_335_Power_Bank_Black_001.jpg?v=1723804461'
        ],'image' => 'https://www.istudio.store/cdn/shop/files/Anker_335_Power_Bank_Black_001.jpg?v=1723804461'],

        ['id' => 10, 'name' => 'Smart Watch',
        'description' => 'The Samsung Galaxy Watch Ultra is top of the list because it does everything you want. 
        It runs Wear OS 5, offers advanced health features such as ECG and blood pressure monitoring', 'price' => 1400,
        'images' => [
         'https://media-cdn.bnn.in.th/411914/Samsung-Galaxy-Watch-Ultra-Watch7--3-square_medium.jpg',
         'https://media-cdn.bnn.in.th/411913/Samsung-Galaxy-Watch-Ultra-Watch7--2-square_medium.jpg'
        ],'image' => 'https://media-cdn.bnn.in.th/411914/Samsung-Galaxy-Watch-Ultra-Watch7--3-square_medium.jpg'],

        ['id' => 11, 'name' => 'Stylus Pen',
        'description' => 'The great writing feel and palm rejection are wonderful on this device-specific model,
        feels as natural and responsive as using a pencil on paper', 'price' => 100,
        'images' => [
         'https://www.incredible.co.za/api/catalog/product/a/d/adonitse_web_1000x1000_whitebg_black_ecommerce_483b.png?width=700&height=700&store=incredibleconnection&image-type=image',
         'https://media.education.studio7thailand.com/85392/Adonit-02-square_medium.jpg'
        ],'image' => 'https://www.incredible.co.za/api/catalog/product/a/d/adonitse_web_1000x1000_whitebg_black_ecommerce_483b.png?width=700&height=700&store=incredibleconnection&image-type=image'],

        ['id' => 12, 'name' => 'Smart TV',
        'description' => ' Brilliant sound experience and ultra smooth gaming', 'price' => 3000,
        'images' => [
         'https://vasanthandco.in/images/productimages/4a59b5b-85samsung-108-cm-43-inch-43t5450-full-hd-smart-led-tv-1-500x500.png',
         'https://fouanistore.com/storage/data/products_gallery/6353b4a0137cd.jpg'
        ],'image' => 'https://vasanthandco.in/images/productimages/4a59b5b-85samsung-108-cm-43-inch-43t5450-full-hd-smart-led-tv-1-500x500.png'],

        ['id' => 13, 'name' => 'Flip Phone',
        'description' => 'See caller ID on the outer screen and larges buttons for easy messaging,
        a long battery life, fast charging, improved cameras ', 'price' => 800,
        'images' => [
         'https://i5.walmartimages.com/asr/08431b4d-5aa9-4dad-83f2-ed22fb6c557d.7429c96ddbcbd5f87ca6460ad4cccfc1.png?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF',
         'https://i5.walmartimages.com/seo/NOKIA-2780-Flip-TA-1420-GSM-Verizon-Unlocked-Flip-Phone-Blue_7e4931a1-0e6d-4e2a-b6c7-53ef757b935f.c32d3b0f660fad89357a34fc6f08362a.jpeg'
        ],'image' => 'https://i5.walmartimages.com/asr/08431b4d-5aa9-4dad-83f2-ed22fb6c557d.7429c96ddbcbd5f87ca6460ad4cccfc1.png?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF']

        ];
        


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Products/Index', ['products' => $this->products]);
        // ส่งข้อมูลไปที่ตัวแปร products ในไฟล์ Index.jsx
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Product not found');
        }
        return Inertia::render('Products/Show', ['product' => $product]);
        // ส่งข้อมูลไปที่ตัวแปร product ในไฟล์ Show.jsx
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

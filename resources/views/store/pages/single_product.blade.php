
    @extends('store.layout.app')
    @section('content')
         <div class="wrapper">
        <div class="gambo-Breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="shop_grid.html">Vegetables & Fruits</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product Title</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-product-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-dt-view">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div id="sync1" class="owl-carousel owl-theme">
                                        <div class="item">
                                            <img src="store/images/product/big-1.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="store/images/product/big-2.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="store/images/product/big-3.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="store/images/product/big-4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div id="sync2" class="owl-carousel owl-theme">
                                        <div class="item">
                                            <img src="store/images/product/big-1.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="store/images/product/big-2.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="store/images/product/big-3.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="store/images/product/big-4.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="product-dt-right">
                                        <h2>Grape Fruit Turkey</h2>
                                        <div class="no-stock">
                                            <p class="pd-no">Product No.<span>12345</span></p>
                                            <p class="stock-qty">Available<span>(Instock)</span></p>
                                        </div>
                                        <div class="product-radio">
                                            <ul class="product-now">
                                                <li>
                                                    <input type="radio" id="p1" name="product1">
                                                    <label for="p1">500g</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="p2" name="product1">
                                                    <label for="p2">1kg</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="p3" name="product1">
                                                    <label for="p3">2kg</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="p4" name="product1">
                                                    <label for="p4">3kg</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="pp-descp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate, purus at tempor blandit, nulla felis dictum eros, sed volutpat odio sapien id lectus. Cras mollis massa ac congue posuere. Fusce viverra
                                            mauris vel magna pretium aliquet. Nunc tincidunt, velit id tempus tristique, velit dolor hendrerit nibh, at scelerisque neque mauris sed ex.</p>
                                        <div class="product-group-dt">
                                            <ul>
                                                <li>
                                                    <div class="main-price color-discount">Discount Price<span>$15</span></div>
                                                </li>
                                                <li>
                                                    <div class="main-price mrp-price">MRP Price<span>$18</span></div>
                                                </li>
                                            </ul>
                                            <ul class="gty-wish-share">
                                                <li>
                                                    <div class="qty-product">
                                                        <div class="quantity buttons_added">
                                                            <input type="button" value="-" class="minus minus-btn">
                                                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                            <input type="button" value="+" class="plus plus-btn">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><span class="like-icon save-icon" title="wishlist"></span></li>
                                            </ul>
                                            <ul class="ordr-crt-share">
                                                <li><button class="add-cart-btn hover-btn"><i class="uil uil-shopping-cart-alt"></i>Add to Cart</button></li>
                                                <li><button class="order-btn hover-btn">Order Now</button></li>
                                            </ul>
                                        </div>
                                        <h4>HIGHLIGHTS</h4>
                                        <ul class="pp-descp">
                                            <li>6 GB RAM | 128 GB ROM</li>
                                            <li>16.94cm(6.67inch) Display</li>
                                            <li>48 MP + 8 MP + 16 MP | 16 MP Front Camera</li>
                                            <li>4000 mAH Battery</li>
                                            <li>1 year manufacturer warrenty for device and 6 month manufacturer warrenty for inbox accessories including batteries from the data of purchase </li>
                                        </ul>
                                        <div class="pdp-details">
                                            <ul>
                                                <li>
                                                    <div class="pdp-group-dt">
                                                        <div class="pdp-icon"><i class="uil uil-usd-circle"></i></div>
                                                        <div class="pdp-text-dt">
                                                            <span>Lowest Pricefgvduyhg Guaranteed</span>
                                                            <p>Get difference refunded if you find it cheaper anywhere else.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="pdp-group-dt">
                                                        <div class="pdp-icon"><i class="uil uil-cloud-redo"></i></div>
                                                        <div class="pdp-text-dt">
                                                            <span>Easy Returns & Refunds</span>
                                                            <p>Return products at doorstep and get refund in seconds.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="pdpt-bg">
                            <div class="pdpt-title">
                                <h4>More Like This</h4>
                            </div>
                            <div class="pdpt-body scrollstyle_4">
                                <div class="cart-item border_radius">
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="cart-product-img">
                                        <img src="store/images/product/img-6.jpg" alt="">
                                        <div class="offer-badge">4% OFF</div>
                                    </a>
                                    <div class="cart-text">
                                        <h4>Product Title Here</h4>
                                        <div class="cart-radio">
                                            <ul class="kggrm-now">
                                                <li>
                                                    <input type="radio" id="k1" name="cart1">
                                                    <label for="k1">0.50</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="k2" name="cart1">
                                                    <label for="k2">1kg</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="k3" name="cart1">
                                                    <label for="k3">2kg</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="k4" name="cart1">
                                                    <label for="k4">3kg</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="qty-group">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus minus-btn">
                                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                <input type="button" value="+" class="plus plus-btn">
                                            </div>
                                            <div class="cart-item-price">$12 <span>$15</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-item border_radius">
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="cart-product-img">
                                        <img src="store/images/product/img-2.jpg" alt="">
                                        <div class="offer-badge">6% OFF</div>
                                    </a>
                                    <div class="cart-text">
                                        <h4>Product Title Here</h4>
                                        <div class="cart-radio">
                                            <ul class="kggrm-now">
                                                <li>
                                                    <input type="radio" id="k5" name="cart2">
                                                    <label for="k5">0.50</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="k6" name="cart2">
                                                    <label for="k6">1kg</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="k7" name="cart2">
                                                    <label for="k7">2kg</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="qty-group">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus minus-btn">
                                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                <input type="button" value="+" class="plus plus-btn">
                                            </div>
                                            <div class="cart-item-price">$24 <span>$30</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-item border_radius">
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="cart-product-img">
                                        <img src="store/images/product/img-5.jpg" alt="">
                                    </a>
                                    <div class="cart-text">
                                        <h4>Product Title Here</h4>
                                        <div class="cart-radio">
                                            <ul class="kggrm-now">
                                                <li>
                                                    <input type="radio" id="k8" name="cart3">
                                                    <label for="k8">0.50</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="k9" name="cart3">
                                                    <label for="k9">1kg</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="k10" name="cart3">
                                                    <label for="k10">1.50kg</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="qty-group">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus minus-btn">
                                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                <input type="button" value="+" class="plus plus-btn">
                                            </div>
                                            <div class="cart-item-price">$15</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="pdpt-bg">
                            <div class="pdpt-title">
                                <h4>Specifications</h4>
                            </div>
                            <div class="pdpt-body scrollstyle_4">
                                <div class="pdct-dts-1">
                                    <div class="pdct-dt-step">
                                        <table style="width:80%" class="table">
                                            <tbody>
                                                <tr>
                                                    <th scope="col">
                                                        ITEMS
                                                    </th>
                                                    <td>
                                                        Replacement LCD digitizer + Touch screen + Front glass +Flex cable
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        MODEL
                                                    </th>
                                                    <td>
                                                        For iphone Lcd
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        COLOR
                                                    </th>
                                                    <td>
                                                        black
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        MATERIAL
                                                    </th>
                                                    <td>
                                                        TFT Material;IPS(Multi- Touch)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        SCREEN
                                                    </th>
                                                    <td>
                                                        > 3"
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        SCREEN SIZE
                                                    </th>
                                                    <td>
                                                        4.0/4.7/5.5/5.8/6.1 inch
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        RESOLUTION
                                                    </th>
                                                    <td>
                                                        1334 X 750 P/ 1920 X 1080 P/ 2436 X 1125 P
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        MOQ
                                                    </th>
                                                    <td>
                                                        1 Pcs
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        SUPERIORITY
                                                    </th>
                                                    <td>
                                                        100% No Dead Pixel
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        QUALITY CONTROL
                                                    </th>
                                                    <td>
                                                        Strictly test one by one to make sure all the goods is best quality, Each item has been checked and in good condition before shipping.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        SAMPLE POLICY
                                                    </th>
                                                    <td>
                                                        Sample available
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        TOUCH SCREEN EFFECT
                                                    </th>
                                                    <td>
                                                        Capacitive Screen
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        PACKAGE
                                                    </th>
                                                    <td>
                                                        Bubble bag+ Rhiannon+styrofoam box+ * cardboard box
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        PAYMENT ITEMS
                                                    </th>
                                                    <td>
                                                        T/T in advance,bank wire, paypal, western union,escrow,moneygram
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        SHIPMENT ITEMS
                                                    </th>
                                                    <td>
                                                        1)Goods will be delivered by DHL, UPS, FedEx, EMS, TNT, HKEMS methods 2)Large order by sea or by air.
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PRODUCT DESCRIPTION START-->
        <div class="all-product-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-dt-view">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <h1>Product Description</h1>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <div class="item">
                                        <img src="store/images/product/img-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9">
                                    <div class="product-dt-right">
                                        <h2>Grape Fruit Turkey</h2>
                                        <p class="pp-descp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate, purus at tempor blandit, nulla felis dictum eros, sed volutpat odio sapien id lectus. Cras mollis massa ac congue posuere. Fusce viverra
                                            mauris vel magna pretium aliquet. Nunc tincidunt, velit id tempus tristique, velit dolor hendrerit nibh, at scelerisque neque mauris sed ex.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-dt-view">
                            <div class="row">
                                <div class="col-lg-9 col-md-9">
                                    <div class="product-dt-right">
                                        <h2>Grape Fruit Turkey</h2>
                                        <p class="pp-descp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate, purus at tempor blandit, nulla felis dictum eros, sed volutpat odio sapien id lectus. Cras mollis massa ac congue posuere. Fusce viverra
                                            mauris vel magna pretium aliquet. Nunc tincidunt, velit id tempus tristique, velit dolor hendrerit nibh, at scelerisque neque mauris sed ex.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="item">
                                        <img src="store/images/product/img-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-dt-view">
                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <div class="item">
                                        <img src="store/images/product/img-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9">
                                    <div class="product-dt-right">
                                        <h2>Grape Fruit Turkey</h2>
                                        <p class="pp-descp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate, purus at tempor blandit, nulla felis dictum eros, sed volutpat odio sapien id lectus. Cras mollis massa ac congue posuere. Fusce viverra
                                            mauris vel magna pretium aliquet. Nunc tincidunt, velit id tempus tristique, velit dolor hendrerit nibh, at scelerisque neque mauris sed ex.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-dt-view">
                            <div class="row">
                                <div class="col-lg-9 col-md-9">
                                    <div class="product-dt-right">
                                        <h2>Grape Fruit Turkey</h2>
                                        <p class="pp-descp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate, purus at tempor blandit, nulla felis dictum eros, sed volutpat odio sapien id lectus. Cras mollis massa ac congue posuere. Fusce viverra
                                            mauris vel magna pretium aliquet. Nunc tincidunt, velit id tempus tristique, velit dolor hendrerit nibh, at scelerisque neque mauris sed ex.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="item">
                                        <img src="store/images/product/img-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-dt-view">
                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <div class="item">
                                        <img src="store/images/product/img-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9">
                                    <div class="product-dt-right">
                                        <h2>Grape Fruit Turkey</h2>
                                        <p class="pp-descp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate, purus at tempor blandit, nulla felis dictum eros, sed volutpat odio sapien id lectus. Cras mollis massa ac congue posuere. Fusce viverra
                                            mauris vel magna pretium aliquet. Nunc tincidunt, velit id tempus tristique, velit dolor hendrerit nibh, at scelerisque neque mauris sed ex.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-dt-view">
                            <div class="row">
                                <div class="col-lg-9 col-md-9">
                                    <div class="product-dt-right">
                                        <h2>Grape Fruit Turkey</h2>
                                        <p class="pp-descp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate, purus at tempor blandit, nulla felis dictum eros, sed volutpat odio sapien id lectus. Cras mollis massa ac congue posuere. Fusce viverra
                                            mauris vel magna pretium aliquet. Nunc tincidunt, velit id tempus tristique, velit dolor hendrerit nibh, at scelerisque neque mauris sed ex.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="item">
                                        <img src="store/images/product/img-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- PRODUCT DESCRIPTION ENDS -->
        <!-- Frequently Brought Products Start -->
        <div class="section145">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title-tt">
                            <div class="main-title-left">
                                <span>For You</span>
                                <h2>Frequently Brought Products</h2>
                            </div>
                            <a href="#" class="see-more-btn">See All</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel featured-slider owl-theme">
                            <div class="item">
                                <div class="product-item">
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
                                        <img src="store/images/product/img-1.jpg" alt="">
                                        <div class="product-absolute-options">
                                            <span class="offer-badge-1">6% off</span>
                                            <span class="like-icon" title="wishlist"></span>
                                        </div>
                                    </a>
                                    <div class="product-text-dt">
                                        <p>Available<span>(In Stock)</span></p>
                                        <h4>Product Title Here</h4>
                                        <div class="product-price">$12 <span>$15</span></div>
                                        <div class="qty-cart">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus minus-btn">
                                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                <input type="button" value="+" class="plus plus-btn">
                                            </div>
                                            <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item">
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
                                        <img src="store/images/product/img-2.jpg" alt="">
                                        <div class="product-absolute-options">
                                            <span class="offer-badge-1">2% off</span>
                                            <span class="like-icon" title="wishlist"></span>
                                        </div>
                                    </a>
                                    <div class="product-text-dt">
                                        <p>Available<span>(In Stock)</span></p>
                                        <h4>Product Title Here</h4>
                                        <div class="product-price">$10 <span>$13</span></div>
                                        <div class="qty-cart">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus minus-btn">
                                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                <input type="button" value="+" class="plus plus-btn">
                                            </div>
                                            <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item">
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
                                        <img src="store/images/product/img-3.jpg" alt="">
                                        <div class="product-absolute-options">
                                            <span class="offer-badge-1">5% off</span>
                                            <span class="like-icon" title="wishlist"></span>
                                        </div>
                                    </a>
                                    <div class="product-text-dt">
                                        <p>Available<span>(In Stock)</span></p>
                                        <h4>Product Title Here</h4>
                                        <div class="product-price">$5 <span>$8</span></div>
                                        <div class="qty-cart">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus minus-btn">
                                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                <input type="button" value="+" class="plus plus-btn">
                                            </div>
                                            <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item">
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
                                        <img src="store/images/product/img-4.jpg" alt="">
                                        <div class="product-absolute-options">
                                            <span class="offer-badge-1">3% off</span>
                                            <span class="like-icon" title="wishlist"></span>
                                        </div>
                                    </a>
                                    <div class="product-text-dt">
                                        <p>Available<span>(In Stock)</span></p>
                                        <h4>Product Title Here</h4>
                                        <div class="product-price">$15 <span>$20</span></div>
                                        <div class="qty-cart">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus minus-btn">
                                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                <input type="button" value="+" class="plus plus-btn">
                                            </div>
                                            <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item">
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
                                        <img src="store/images/product/img-5.jpg" alt="">
                                        <div class="product-absolute-options">
                                            <span class="offer-badge-1">2% off</span>
                                            <span class="like-icon" title="wishlist"></span>
                                        </div>
                                    </a>
                                    <div class="product-text-dt">
                                        <p>Available<span>(In Stock)</span></p>
                                        <h4>Product Title Here</h4>
                                        <div class="product-price">$9 <span>$10</span></div>
                                        <div class="qty-cart">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus minus-btn">
                                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                <input type="button" value="+" class="plus plus-btn">
                                            </div>
                                            <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item">
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
                                        <img src="store/images/product/img-6.jpg" alt="">
                                        <div class="product-absolute-options">
                                            <span class="offer-badge-1">2% off</span>
                                            <span class="like-icon" title="wishlist"></span>
                                        </div>
                                    </a>
                                    <div class="product-text-dt">
                                        <p>Available<span>(In Stock)</span></p>
                                        <h4>Product Title Here</h4>
                                        <div class="product-price">$7 <span>$8</span></div>
                                        <div class="qty-cart">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus minus-btn">
                                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                <input type="button" value="+" class="plus plus-btn">
                                            </div>
                                            <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item">
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
                                        <img src="store/images/product/img-7.jpg" alt="">
                                        <div class="product-absolute-options">
                                            <span class="offer-badge-1">1% off</span>
                                            <span class="like-icon" title="wishlist"></span>
                                        </div>
                                    </a>
                                    <div class="product-text-dt">
                                        <p>Available<span>(In Stock)</span></p>
                                        <h4>Product Title Here</h4>
                                        <div class="product-price">$6.95 <span>$7</span></div>
                                        <div class="qty-cart">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus minus-btn">
                                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                <input type="button" value="+" class="plus plus-btn">
                                            </div>
                                            <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-item">
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
                                        <img src="store/images/product/img-8.jpg" alt="">
                                        <div class="product-absolute-options">
                                            <span class="offer-badge-1">3% off</span>
                                            <span class="like-icon" title="wishlist"></span>
                                        </div>
                                    </a>
                                    <div class="product-text-dt">
                                        <p>Available<span>(In Stock)</span></p>
                                        <h4>Product Title Here</h4>
                                        <div class="product-price">$8 <span>$10</span></div>
                                        <div class="qty-cart">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus minus-btn">
                                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                <input type="button" value="+" class="plus plus-btn">
                                            </div>
                                            <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Frequently Brought Products End -->
        <!-- FAQ START -->
        <div class="all-product-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="default-title mt-4">
                            <h2>Frequently Asked Questions</h2>
                            <img src="images/line.svg" alt="">
                        </div>
                        <div class="panel-group accordion pt-1" id="accordion0">
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseOne" href="#" aria-expanded="false" aria-controls="collapseOne">
                    									Registration
                    								</a>
                                    </div>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion0" style="">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper faucibus erat a efficitur. Praesent vulputate mauris eget augue semper, at eleifend enim aliquam. Vivamus suscipit lacinia neque eget suscipit.
                                            Morbi vitae nisl ac justo placerat vulputate ac quis lectus. Vestibulum pellentesque, orci eu ultrices molestie, nisi libero hendrerit eros, vel interdum augue tortor vel urna. Nullam enim dolor, pulvinar in
                                            metus vitae, tincidunt dignissim neque. Pellentesque tempor nulla eu neque hendrerit fringilla. Suspendisse ultricies venenatis maximus. Suspendisse erat elit, ultricies eu porta nec, luctus sit amet dui. Fusce
                                            feugiat odio semper, hendrerit lectus vitae, convallis nisl. Ut a justo diam. Donec vitae leo lorem. Cras pharetra libero ut urna condimentum, non imperdiet leo posuere.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingTwo">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" href="#" aria-expanded="false" aria-controls="collapseTwo">
                    									Account Related
                    								</a>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper faucibus erat a efficitur. Praesent vulputate mauris eget augue semper, at eleifend enim aliquam. Vivamus suscipit lacinia neque eget suscipit.
                                            Morbi vitae nisl ac justo placerat vulputate ac quis lectus. Vestibulum pellentesque, orci eu ultrices molestie, nisi libero hendrerit eros, vel interdum augue tortor vel urna. Nullam enim dolor, pulvinar in
                                            metus vitae, tincidunt dignissim neque. Pellentesque tempor nulla eu neque hendrerit fringilla. Suspendisse ultricies venenatis maximus. Suspendisse erat elit, ultricies eu porta nec, luctus sit amet dui. Fusce
                                            feugiat odio semper, hendrerit lectus vitae, convallis nisl. Ut a justo diam. Donec vitae leo lorem. Cras pharetra libero ut urna condimentum, non imperdiet leo posuere.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingThree">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" href="#" aria-expanded="false" aria-controls="collapseThree">
                    									Payment
                    								</a>
                                    </div>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper faucibus erat a efficitur. Praesent vulputate mauris eget augue semper, at eleifend enim aliquam. Vivamus suscipit lacinia neque eget suscipit.
                                            Morbi vitae nisl ac justo placerat vulputate ac quis lectus. Vestibulum pellentesque, orci eu ultrices molestie, nisi libero hendrerit eros, vel interdum augue tortor vel urna. Nullam enim dolor, pulvinar in
                                            metus vitae, tincidunt dignissim neque. Pellentesque tempor nulla eu neque hendrerit fringilla. Suspendisse ultricies venenatis maximus. Suspendisse erat elit, ultricies eu porta nec, luctus sit amet dui. Fusce
                                            feugiat odio semper, hendrerit lectus vitae, convallis nisl. Ut a justo diam. Donec vitae leo lorem. Cras pharetra libero ut urna condimentum, non imperdiet leo posuere.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingfour">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapsefour" href="#" aria-expanded="false" aria-controls="collapsefour">
                    									Delivery Related
                    								</a>
                                    </div>
                                </div>
                                <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper faucibus erat a efficitur. Praesent vulputate mauris eget augue semper, at eleifend enim aliquam. Vivamus suscipit lacinia neque eget suscipit.
                                            Morbi vitae nisl ac justo placerat vulputate ac quis lectus. Vestibulum pellentesque, orci eu ultrices molestie, nisi libero hendrerit eros, vel interdum augue tortor vel urna. Nullam enim dolor, pulvinar in
                                            metus vitae, tincidunt dignissim neque. Pellentesque tempor nulla eu neque hendrerit fringilla. Suspendisse ultricies venenatis maximus. Suspendisse erat elit, ultricies eu porta nec, luctus sit amet dui. Fusce
                                            feugiat odio semper, hendrerit lectus vitae, convallis nisl. Ut a justo diam. Donec vitae leo lorem. Cras pharetra libero ut urna condimentum, non imperdiet leo posuere.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingfive">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapsefive" href="#" aria-expanded="false" aria-controls="collapsefive">
                    									Order Related
                    								</a>
                                    </div>
                                </div>
                                <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper faucibus erat a efficitur. Praesent vulputate mauris eget augue semper, at eleifend enim aliquam. Vivamus suscipit lacinia neque eget suscipit.
                                            Morbi vitae nisl ac justo placerat vulputate ac quis lectus. Vestibulum pellentesque, orci eu ultrices molestie, nisi libero hendrerit eros, vel interdum augue tortor vel urna. Nullam enim dolor, pulvinar in
                                            metus vitae, tincidunt dignissim neque. Pellentesque tempor nulla eu neque hendrerit fringilla. Suspendisse ultricies venenatis maximus. Suspendisse erat elit, ultricies eu porta nec, luctus sit amet dui. Fusce
                                            feugiat odio semper, hendrerit lectus vitae, convallis nisl. Ut a justo diam. Donec vitae leo lorem. Cras pharetra libero ut urna condimentum, non imperdiet leo posuere.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingsix">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapsesix" href="#" aria-expanded="false" aria-controls="collapsesix">
                    									Customer Related
                    								</a>
                                    </div>
                                </div>
                                <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper faucibus erat a efficitur. Praesent vulputate mauris eget augue semper, at eleifend enim aliquam. Vivamus suscipit lacinia neque eget suscipit.
                                            Morbi vitae nisl ac justo placerat vulputate ac quis lectus. Vestibulum pellentesque, orci eu ultrices molestie, nisi libero hendrerit eros, vel interdum augue tortor vel urna. Nullam enim dolor, pulvinar in
                                            metus vitae, tincidunt dignissim neque. Pellentesque tempor nulla eu neque hendrerit fringilla. Suspendisse ultricies venenatis maximus. Suspendisse erat elit, ultricies eu porta nec, luctus sit amet dui. Fusce
                                            feugiat odio semper, hendrerit lectus vitae, convallis nisl. Ut a justo diam. Donec vitae leo lorem. Cras pharetra libero ut urna condimentum, non imperdiet leo posuere.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingseven">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseseven" href="#" aria-expanded="false" aria-controls="collapseseven">
                    									Return & Refund
                    								</a>
                                    </div>
                                </div>
                                <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper faucibus erat a efficitur. Praesent vulputate mauris eget augue semper, at eleifend enim aliquam. Vivamus suscipit lacinia neque eget suscipit.
                                            Morbi vitae nisl ac justo placerat vulputate ac quis lectus. Vestibulum pellentesque, orci eu ultrices molestie, nisi libero hendrerit eros, vel interdum augue tortor vel urna. Nullam enim dolor, pulvinar in
                                            metus vitae, tincidunt dignissim neque. Pellentesque tempor nulla eu neque hendrerit fringilla. Suspendisse ultricies venenatis maximus. Suspendisse erat elit, ultricies eu porta nec, luctus sit amet dui. Fusce
                                            feugiat odio semper, hendrerit lectus vitae, convallis nisl. Ut a justo diam. Donec vitae leo lorem. Cras pharetra libero ut urna condimentum, non imperdiet leo posuere.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingeight">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseeight" href="#" aria-expanded="false" aria-controls="collapseeight">
                    									How Does it Work
                    								</a>
                                    </div>
                                </div>
                                <div id="collapseeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper faucibus erat a efficitur. Praesent vulputate mauris eget augue semper, at eleifend enim aliquam. Vivamus suscipit lacinia neque eget suscipit.
                                            Morbi vitae nisl ac justo placerat vulputate ac quis lectus. Vestibulum pellentesque, orci eu ultrices molestie, nisi libero hendrerit eros, vel interdum augue tortor vel urna. Nullam enim dolor, pulvinar in
                                            metus vitae, tincidunt dignissim neque. Pellentesque tempor nulla eu neque hendrerit fringilla. Suspendisse ultricies venenatis maximus. Suspendisse erat elit, ultricies eu porta nec, luctus sit amet dui. Fusce
                                            feugiat odio semper, hendrerit lectus vitae, convallis nisl. Ut a justo diam. Donec vitae leo lorem. Cras pharetra libero ut urna condimentum, non imperdiet leo posuere.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- FAQ ENDS -->
    <!-- Similar Products End -->
    <div class="section145">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title-tt">
                        <div class="main-title-left">
                            <span>For You</span>
                            <h2>Similar Products</h2>
                        </div>
                        <a href="#" class="see-more-btn">See All</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel featured-slider owl-theme">
                        <div class="item">
                            <div class="product-item">
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
                                    <img src="store/images/product/img-1.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">6% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$12 <span>$15</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
                                    <img src="store/images/product/img-2.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">2% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$10 <span>$13</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
                                    <img src="store/images/product/img-3.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">5% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$5 <span>$8</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
                                    <img src="store/images/product/img-4.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">3% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$15 <span>$20</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
                                    <img src="store/images/product/img-5.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">2% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$9 <span>$10</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
                                    <img src="store/images/product/img-6.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">2% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$7 <span>$8</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
                                    <img src="store/images/product/img-7.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">1% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$6.95 <span>$7</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
                                    <img src="store/images/product/img-8.jpg" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">3% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$8 <span>$10</span></div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Similar Products End -->
   
    @endsection
   
 
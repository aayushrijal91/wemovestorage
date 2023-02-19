<header>
    <div class="container">
        <div class="row justify-content-center justify-content-md-between align-items-center">
            <div class="col-auto d-none d-md-block">
                <a href="./">
                    <?= renderImg("logo.png", "logo") ?>
                </a>
            </div>
            <div class="col-md-auto">
                <div class="row justify-content-center justify-content-lg-end align-items-center">
                    <div class="col-6 col-md-auto">
                        <a href="tel:<?= $phone_number ?>" class="btn border-white border rounded-0 text-white py-3 px-lg-4 px-xl-5">
                            <?= $phone_number ?>
                        </a>
                    </div>
                    <div class="col-6 col-md-auto">
                        <a href="#form" class="btn border-white border rounded-0 text-white py-3 px-lg-4 px-xl-5">
                            enquire now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="banner">
    <div class="container">
        <?= renderImg('logo.png', 'logo', 'd-md-none pb-5') ?>
        <h1 class="ls-3 fs-108 fw-700 lh-1">
            <span class="bg-teal">the ultimate</span>
            <div>convenient &amp; secure...</div>
        </h1>
        <div class="ls-3 fw-700 fs-60 pt-3 pt-md-4 lh-1">mobile storage<br class="d-md-none"> solution in sydney<span class="text-teal">.</span></div>
    </div>
</section>

<div class="bg-secondary pt-2 pb-3"></div>

<section class="size" id="prices">
    <div class="container">
        <div class="text-primary fs-63 fw-700 ls-3 lh-1">find the <span class="bg-teal text-white">right size</span> for your storage solution<span class="text-teal">.</span></div>
        <div class="ls-3 pt-4 pb-9 text-grey fw-500">select the size below that currently matches your own property the best to find out which size is right for you.</div>

        <div class="row justify-content-end d-lg-none radio-toolbar-sm">
            <div class="col-auto">
                <div class="vertical-bar"></div>
            </div>
            <div class="col-8">
                <div class="row gy-5">
                    <div class="col-12 position-relative">
                        <div class="price-target" target="1">
                            <div class="text-primary lh-1 fs-60 fw-700 ls-3">$119</div>
                            <div class="text-grey ls-3 lh-1">per month</div>
                        </div>
                        <input class="form-check-input form-control box-size" type="radio" name="smboxSize" value="1" id="smboxSize_1" checked>
                        <label class="form-check-label" for="smboxSize_1">
                            <div class="d-flex gap-2 align-items-end">
                                <div class="horizontal-line-sm"></div>
                                <div class="pre">suitable for<br> <span class="fw-700">a few items</span></div>
                                <div class="post text-primary">
                                    <div class="text-primary fs-28 fw-700">the solo box</div>
                                    <div class="fs-14">suitable for <span class="fw-700">a few items</span></div>
                                </div>
                                <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                                    <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                                    <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                                </svg>
                            </div>
                        </label>
                    </div>
                    <div class="col-12 position-relative">
                        <div class="price-target" target="2">
                            <div class="text-primary lh-1 fs-60 fw-700 ls-3">$120</div>
                            <div class="text-grey ls-3 lh-1">per month</div>
                        </div>
                        <input class="form-check-input form-control box-size" type="radio" name="smboxSize" value="2" id="smboxSize_2">
                        <label class="form-check-label" for="smboxSize_2">
                            <div class="d-flex gap-2 align-items-end">
                                <div class="horizontal-line-sm"></div>
                                <div class="pre">suitable for <span class="fw-700">1<br> bedroom home</span></div>
                                <div class="post text-primary">
                                    <div class="text-primary fs-28 fw-700">the solo box</div>
                                    <div class="fs-14">suitable for <span class="fw-700">1 bedroom home</span></div>
                                </div>
                                <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                                    <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                                    <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                                </svg>
                            </div>
                        </label>
                    </div>
                    <div class="col-12 position-relative">
                        <div class="price-target" target="3">
                            <div class="text-primary lh-1 fs-60 fw-700 ls-3">$130</div>
                            <div class="text-grey ls-3 lh-1">per month</div>
                        </div>
                        <input class="form-check-input form-control box-size" type="radio" name="smboxSize" value="3" id="smboxSize_3">
                        <label class="form-check-label" for="smboxSize_3">
                            <div class="d-flex gap-2 align-items-end">
                                <div class="horizontal-line-sm"></div>
                                <div class="pre">suitable for <span class="fw-700">2<br> bedroom home</span></div>
                                <div class="post text-primary">
                                    <div class="text-primary fs-28 fw-700">the duo box</div>
                                    <div class="fs-14">suitable for <span class="fw-700">2 bedroom home</span></div>
                                </div>
                                <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                                    <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                                    <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                                </svg>
                            </div>
                        </label>
                    </div>
                    <div class="col-12 position-relative">
                        <div class="price-target" target="4">
                            <div class="text-primary lh-1 fs-60 fw-700 ls-3">$140</div>
                            <div class="text-grey ls-3 lh-1">per month</div>
                        </div>
                        <input class="form-check-input form-control box-size" type="radio" name="smboxSize" value="4" id="smboxSize_4">
                        <label class="form-check-label" for="smboxSize_4">
                            <div class="d-flex gap-2 align-items-end">
                                <div class="horizontal-line-sm"></div>
                                <div class="pre">suitable for <span class="fw-700">2-3<br> bedroom home</span></div>
                                <div class="post text-primary">
                                    <div class="text-primary fs-28 fw-700">the tri box</div>
                                    <div class="fs-14">suitable for <span class="fw-700">2-3 bedroom home</span></div>
                                </div>
                                <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                                    <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                                    <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                                </svg>
                            </div>
                        </label>
                    </div>
                    <div class="col-12 position-relative">
                        <div class="price-target" target="5">
                            <div class="text-primary lh-1 fs-60 fw-700 ls-3">$150</div>
                            <div class="text-grey ls-3 lh-1">per month</div>
                        </div>
                        <input class="form-check-input form-control box-size" type="radio" name="smboxSize" value="5" id="smboxSize_5">
                        <label class="form-check-label" for="smboxSize_5">
                            <div class="d-flex gap-2 align-items-end">
                                <div class="horizontal-line-sm"></div>
                                <div class="pre">suitable for <span class="fw-700">3-4<br> bedroom home</span></div>
                                <div class="post text-primary">
                                    <div class="text-primary fs-28 fw-700">the family vault</div>
                                    <div class="fs-14">suitable for <span class="fw-700">3-4 bedroom home</span></div>
                                </div>
                                <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                                    <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                                    <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                                </svg>
                            </div>
                        </label>
                    </div>
                    <div class="col-12 position-relative">
                        <div class="price-target" target="6">
                            <div class="text-primary lh-1 fs-60 fw-700 ls-3">$160</div>
                            <div class="text-grey ls-3 lh-1">per month</div>
                        </div>
                        <input class="form-check-input form-control box-size" type="radio" name="smboxSize" value="6" id="smboxSize_6">
                        <label class="form-check-label" for="smboxSize_6">
                            <div class="d-flex gap-2 align-items-end">
                                <div class="horizontal-line-sm"></div>
                                <div class="pre">suitable for<br> <span class="fw-700">large home or office</span></div>
                                <div class="post text-primary">
                                    <div class="text-primary fs-28 fw-700">the mega vault</div>
                                    <div class="fs-14">suitable for <span class="fw-700">large home or office</span></div>
                                </div>
                                <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                                    <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                                    <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                                </svg>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row radio-toolbar g-3 gx-md-2 position-relative d-none d-lg-flex">
            <div class="bar"></div>
            <div class="col-md-4 col-lg">
                <input class="form-check-input form-control box-size" type="radio" name="boxSize" value="1" id="boxSize_1" checked>
                <label class="form-check-label" for="boxSize_1">
                    <div>
                        <div class="vertical-line"></div>
                        <div class="pt-4 pb-2">suitable for<br> <span class="fw-700">a few items</span></div>
                        <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                            <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                            <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                        </svg>
                    </div>
                </label>
            </div>
            <div class="col-md-4 col-lg">
                <input class="form-check-input form-control box-size" type="radio" name="boxSize" value="2" id="boxSize_2">
                <label class="form-check-label" for="boxSize_2">
                    <div>
                        <div class="vertical-line"></div>
                        <div class="pt-4 pb-2">suitable for <span class="fw-700">1<br> bedroom home</span></div>
                        <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                            <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                            <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                        </svg>
                    </div>
                </label>
            </div>
            <div class="col-md-4 col-lg">
                <input class="form-check-input form-control box-size" type="radio" name="boxSize" value="3" id="boxSize_3">
                <label class="form-check-label" for="boxSize_3">
                    <div>
                        <div class="vertical-line"></div>
                        <div class="pt-4 pb-2">suitable for <span class="fw-700">2<br> bedroom home</span></div>
                        <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                            <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                            <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                        </svg>
                    </div>
                </label>
            </div>
            <div class="col-md-4 col-lg">
                <input class="form-check-input form-control box-size" type="radio" name="boxSize" value="4" id="boxSize_4">
                <label class="form-check-label" for="boxSize_4">
                    <div>
                        <div class="vertical-line"></div>
                        <div class="pt-4 pb-2">suitable for <span class="fw-700">2-3<br> bedroom home</span></div>
                        <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                            <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                            <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                        </svg>
                    </div>
                </label>
            </div>
            <div class="col-md-4 col-lg">
                <input class="form-check-input form-control box-size" type="radio" name="boxSize" value="5" id="boxSize_5">
                <label class="form-check-label" for="boxSize_5">
                    <div>
                        <div class="vertical-line"></div>
                        <div class="pt-4 pb-2">suitable for <span class="fw-700">3-4<br> bedroom home</span></div>
                        <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                            <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                            <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                        </svg>
                    </div>
                </label>
            </div>
            <div class="col-md-4 col-lg">
                <input class="form-check-input form-control box-size" type="radio" name="boxSize" value="6" id="boxSize_6">
                <label class="form-check-label" for="boxSize_6">
                    <div>
                        <div class="vertical-line"></div>
                        <div class="pt-4 pb-2">suitable for <span class="fw-700">large<br> home or office</span></div>
                        <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                            <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                            <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                        </svg>
                    </div>
                </label>
            </div>
        </div>

        <div class="text-center fs-25 ls-3 text-grey row justify-content-center align-items-center gx-0 d-none d-lg-flex">
            <div class="col-auto">you've chosen...</div>
            <div class="text-primary fs-60 fw-700 col-lg-7 col-xl-6 lh-1">
                <div class="price-box">
                    <div>the mini box - 119</div>
                    <div>the solo box - 120</div>
                    <div>the duo box - 130</div>
                    <div>the tri box - 140</div>
                    <div>the family vault - 150</div>
                    <div>the mega vault - 160</div>
                </div>
            </div>
            <div class="col-auto fw-500">/month</div>
        </div>

        <div class="text-center pt-6">
            <a href="#form" class="slider-enquiry-btn text-white btn btn-secondary d-inline-flex rounded-0 fs-35 px-4 px-md-5">enquire now</a>
        </div>
    </div>
</section>

<section class="form-1" id="form">
    <div class="floating-get-started">get started<span class="text-white lh-1">.</span></div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-6 d-none d-md-block">
                <div class="text-light ls-3 fw-700 fs-63 lh-1 pb-7">get started<br> & enquire today<span class="text-teal">.</span></div>
                <?= renderImg('cardboard-box.png', 'lib', 'w-100 d-none d-xl-block') ?>
            </div>
            <div class="col-10 col-xl-6 col-xxl-5">
                <form action="./src/form" method="POST" class="main-form">
                    <input type="hidden" name="token" id="recaptchaResponse1" class="recaptchaResponse">
                    <div class="row align-items-center pb-5 d-none d-xl-flex">
                        <div class="col-auto fw-600 fs-25 ls-3 lh-1">we'll get back to you asap</div>
                        <div class="col">
                            <div class="horizontal-line"></div>
                        </div>
                    </div>
                    <div class="fs-36 fw-600 ls-3 lh-1 pb-5 d-md-none">enquire with<br> us now</div>
                    <div class="row gy-4 gy-md-5">
                        <div class="col-6">
                            <input type="text" class="form-control" name="name" placeholder="full name" required>
                        </div>
                        <div class="col-6">
                            <input type="tel" class="form-control" name="phone" placeholder="phone no." required>
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control" name="email" placeholder="your email" required>
                        </div>
                        <div class="col-12">
                            <label for="storageSize" class="mb-2">select storage size</label>
                            <select name="storageSize" class="form-control form-select" id="storageSize">
                                <option selected disabled>select here</option>
                                <option>the mini box (a few items)</option>
                                <option>the solo box (1 bedroom home)</option>
                                <option>the duo box (2 bedroom home)</option>
                                <option>the tri box (2-3 bedroom home)</option>
                                <option>the family vault (3-4 bedroom home)</option>
                                <option>the mega vault (large home or office)</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="enquiry" class="mb-2">enquiry</label>
                            <textarea class="form-control" name="enquiry" id="enquiry" placeholder="write your response here..." rows="5"></textarea>
                        </div>
                        <div class="col-12">
                            <div class="row gy-4">
                                <div class="col-md-6 fw-500 lh-1">all information provided will be kept 100% private &amp; secure</div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-teal w-100 rounded-0 text-white fs-25">get quote now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="about-1">
    <?= renderImg('about-1-sm.png', 'lib', 'w-100 pb-4 d-md-none') ?>
    <?= renderImg('about-1.png', 'background', 'w-100 pb-5 d-none d-md-block d-xl-none') ?>
    <div class="container">
        <div class="row gx-xl-10">
            <div class="col-xl-6 col-xxl-7">
                <div class="text-primary lh-1 fs-63 ls-3 fw-700 pb-2">
                    <span class="text-white bg-teal">professional</span>
                    <div>removalists &amp; storage team accessible 6 days a week in sydney<span class="text-teal">.</span></div>
                </div>
                <div class="text-grey fs-17 lh-1_7 pt-4">
                    <p class="mb-4">at fast storage sydney, we believe that storage should be fast and stress-free. that's why we offer the quickest and most secure storage solution in the city. our mobile storage units provide a convenient and reliable way to store your belongings without having to worry about the hassle of moving them to a storage facility.</p>
                    <p class="mb-4">our friendly staff are available 6 days a week to assist you with accessing your storage unit. all you have to do is call us at least 24 hours in advance, and we'll make sure your unit is ready and waiting for you in the visitor's bay.</p>
                    <p>for added peace of mind, you can also add your own storage insurance to your unit quote with just a click. and with every unit, you receive a free padlock and key, so you can lock up your belongings yourself and keep the only key.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-2">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <div class="row gx-xl-7">
                    <div class="col-6 position-relative d-none d-lg-block"><?= renderImg('boxedtrolley.png', 'lib', 'boxedTrolley') ?></div>
                    <div class="col-lg-6 col-xxl-5 content-box">
                        <div class="fs-63 lh-1 fw-700 ls-3">we come to you <br><span class="bg-teal">sydney wide</span> with storage units<span class="text-quartinary">.</span></div>
                        <div class="fs-17 lh-1_7 pt-5 text-lowercase">
                            <p class="mb-4">No matter where you are in Sydney, we've got you covered. Our mobile storage units can be delivered anywhere in the city, with small trucks that can fit down narrow streets or larger trucks for bigger jobs. Whether you're in the Western Sydney, Eastern Suburbs, North Shore, or anywhere else in the greater Sydney Metropolitan area, we'll bring your storage solution right to your door.</p>
                            <p>At Fast Storage Sydney, we prioritize your speed and security. With our quick and secure storage units and expert customer service, we are your one-stop solution for all your storage needs in sydney. contact us today to get started!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= renderImg('boxed-trolley-sm.png', 'lib', 'd-md-none mb-n5') ?>
</section>

<section class="about-3">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-xxl-6">
                <div class="fs-63 lh-1 fw-700 ls-3 text-primary">a convenient <br><span class="bg-teal text-white">stress-free</span> solution just one phone call away<span class="text-teal">.</span></div>
                <div class="fs-17 text-grey py-4 py-md-5 py-lg-6 lh-1_7 text-lowercase">
                    <p class="pb-4">at We Move Storage, we understand that downsizing or finding a storage solution can be a hassle, That's why we offer a convenient and stress-free solution with our StorageBox units. With just one phone call or online form, we'll take care of everything for you.</p>
                    <p class="pb-4">From loading your belongings to transporting them to one of our secure storage facilities, our professional removalists will handle it all. And when you're ready to access your belongings, we'll bring the StorageBox right to your doorstep. No need to worry about the heavy lifting or navigating through traffic.</p>
                    <p>At We Move Storage, we believe in making storage as simple and easy as possible. So, if you're looking for a reliable storage solution in Sydney, look no further. Contact us today to see how we can help.</p>
                </div>
                <div class="row gx-3 gx-md-4">
                    <div class="col-6 col-md-auto">
                        <a href="#form" class="btn btn-teal text-white rounded-0 px-3 px-md-5">enquire now</a>
                    </div>
                    <div class="col-6 col-md-auto">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-secondary text-white rounded-0 px-3 px-md-5"><?= $phone_number ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= renderImg('about-3.png', 'background', 'd-none d-md-block d-xl-none pt-6 w-100') ?>
    <?= renderImg('about-3-sm.png', 'lib', 'd-md-none pt-6 w-100') ?>
</section>

<section class="why-us text-lowercase">
    <div class="container">
        <div class="text-md-center text-white fs-63 fw-700 lh-1 ls-3"><span class="bg-teal">why choose</span> we move<br> sydney?</div>
        <div class="fs-17 lh-1_7 fw-700 text-md-center py-4 py-md-6">Choose We Move Storage for the ultimate one-stop storage solution that ensures the highest standard of care for your belongings in the Sydney area.</div>
        <div class="row justify-content-center gx-xl-7 gy-4">
            <div class="col-md-6 col-lg-4">
                <div class="why-us-card">
                    <?= renderImg('whyus-1.png', 'lib') ?>
                    <div class="pt-5 content">
                        <div class="fs-35 fw-900 ls-3 lh-1">24/7 Security on all Storage Units</div>
                        <div class="py-3 lh-1_7">Our StorageBox units offer a <strong>high-quality, responsible, and reliable end-to-end</strong> storage service that starts with our professional removalists who will load your belongings into your storage unit <strong>with your supervision.</strong></div>
                        <div class="d-none d-md-block"><a href="#prices" class="btn btn-teal text-white rounded-0 px-5 d-inline-flex">see prices</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="why-us-card">
                    <?= renderImg('whyus-2.png', 'lib') ?>
                    <div class="pt-5 content">
                        <div class="fs-35 fw-900 ls-3 lh-1">2-in-1 removalist & storage Team</div>
                        <div class="py-3 lh-1_7">At we move Storage, we believe in providing a <strong>comprehensive storage solution</strong> that takes care of all your storage needs. Our mission is to be your <strong>one point of contact for everything</strong> related to storage.</div>
                        <div class="d-none d-md-block"><a href="tel: <?= $phone_number ?>" class="btn btn-teal text-white rounded-0 px-5 d-inline-flex"><?= $phone_number ?></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="why-us-card">
                    <?= renderImg('whyus-3.png', 'lib') ?>
                    <div class="pt-5 content">
                        <div class="fs-35 fw-900 ls-3 lh-1">Storage Insurance Available</div>
                        <div class="py-3 lh-1_7">We then transport and store your items at our <strong>secure, monitored storage facilities,</strong> and even offer the option to add <strong>storage insurance for peace of mind.</strong></div>
                        <div class="d-none d-md-block"><a href="#form" class="btn btn-teal text-white rounded-0 px-5 d-inline-flex">enquire now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container-fluid">
        <div class="row justify-content-lg-end gy-5">
            <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="text-primary fs-63 fw-700 ls-3 lh-1">your <span class="text-white bg-teal">trusted</span> removalist &amp; storage services in sydney<span class="text-teal">.</span></div>
                <div class="row align-items-center py-5 d-none d-lg-flex">
                    <div class="col-auto"><?= renderImg('google.png', 'icons') ?></div>
                    <div class="col-auto d-flex align-items-center">
                        <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.1939 1.56143C13.5515 0.648695 14.8431 0.648698 15.2006 1.56143L18.0598 8.85997C18.213 9.25128 18.5798 9.51777 18.9994 9.54263L26.8242 10.0064C27.8027 10.0644 28.2019 11.2929 27.4443 11.915L21.3865 16.8895C21.0617 17.1562 20.9216 17.5874 21.0276 17.9941L23.0045 25.5793C23.2517 26.5279 22.2068 27.2871 21.381 26.7588L14.778 22.5347C14.424 22.3082 13.9706 22.3082 13.6166 22.5347L7.0135 26.7588C6.18775 27.2871 5.1428 26.5279 5.39003 25.5793L7.36693 17.9941C7.47292 17.5874 7.33281 17.1562 7.00803 16.8895L0.950217 11.915C0.192648 11.2929 0.591783 10.0644 1.57033 10.0064L9.39518 9.54263C9.8147 9.51777 10.1815 9.25128 10.3348 8.85997L13.1939 1.56143Z" fill="#E85429" />
                        </svg>
                        <span class="fs-32 ls-3 text-grey fw-700 lh-1">(4.2)</span>
                    </div>
                    <div class="col-auto">
                        <div class="vertical-line"></div>
                    </div>
                    <div class="col-auto">
                        <div class="text-grey lh-0_77 fs-32 ls-3 fw-700">624+</div>
                        <div class="fs-19 ls-3 lh-1">reviews</div>
                    </div>
                </div>
                <div class="row gx-3 pt-5 pt-lg-0">
                    <div class="col-6 col-md-auto">
                        <div class="review-platform bg-secondary px-2 py-1">
                            <div class="row align-items-center gx-2">
                                <div class="col col-md-auto"><?= renderImg('truelocal.png', 'icons') ?></div>
                                <div class="col-auto">
                                    <div class="vertical-line-sm"></div>
                                </div>
                                <div class="col-auto">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99789 1.14792C9.27539 0.439533 10.2779 0.439532 10.5554 1.14792L12.3874 5.82454C12.5063 6.12824 12.791 6.33507 13.1166 6.35437L18.1305 6.65156C18.8899 6.69658 19.1997 7.64998 18.6117 8.1328L14.7301 11.3203C14.4781 11.5273 14.3693 11.862 14.4516 12.1776L15.7183 17.0379C15.9102 17.7741 15.0992 18.3633 14.4583 17.9533L10.2273 15.2467C9.95256 15.0709 9.60068 15.0709 9.32592 15.2467L5.09495 17.9533C4.45406 18.3633 3.64305 17.7741 3.83493 17.0379L5.10164 12.1776C5.18391 11.862 5.07517 11.5273 4.8231 11.3203L0.941494 8.1328C0.353527 7.64998 0.663303 6.69658 1.42278 6.65156L6.43663 6.35437C6.76223 6.33507 7.0469 6.12824 7.16587 5.82454L8.99789 1.14792Z" fill="#FFF16F" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <div class="fs-23 ls-3 fw-700 text-white lh-1">(4.9)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-auto">
                        <div class="review-platform bg-teal px-2 py-1">
                            <div class="row align-items-center gx-2">
                                <div class="col col-md-auto"><?= renderImg('yellowpages.png', 'icons') ?></div>
                                <div class="col-auto">
                                    <div class="vertical-line-sm"></div>
                                </div>
                                <div class="col-auto">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99789 1.14792C9.27539 0.439533 10.2779 0.439532 10.5554 1.14792L12.3874 5.82454C12.5063 6.12824 12.791 6.33507 13.1166 6.35437L18.1305 6.65156C18.8899 6.69658 19.1997 7.64998 18.6117 8.1328L14.7301 11.3203C14.4781 11.5273 14.3693 11.862 14.4516 12.1776L15.7183 17.0379C15.9102 17.7741 15.0992 18.3633 14.4583 17.9533L10.2273 15.2467C9.95256 15.0709 9.60068 15.0709 9.32592 15.2467L5.09495 17.9533C4.45406 18.3633 3.64305 17.7741 3.83493 17.0379L5.10164 12.1776C5.18391 11.862 5.07517 11.5273 4.8231 11.3203L0.941494 8.1328C0.353527 7.64998 0.663303 6.69658 1.42278 6.65156L6.43663 6.35437C6.76223 6.33507 7.0469 6.12824 7.16587 5.82454L8.99789 1.14792Z" fill="#FFF16F" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <div class="fs-23 ls-3 fw-700 text-white lh-1">(4.9)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                $testimonials = [
                    [
                        "name" => "amanda galea",
                        "comment" => "...the men were very professional, courteous and respectful during the whole process and regularly checked in with me to make sure I was happy or to let me know when they found items already damaged before they packed them. They were careful with how they stacked the boxes and very thorough, didn’t miss a thing. A really great service from a great team of men and would definitely use again!",
                    ],
                    [
                        "name" => "Jesus Castro",
                        "comment" => "fast storage’s help last week was amazing. Amazing lads! They wrap and manage my furniture professionally. Even though I made a last-minute reservation, moving a large house wasn't easy, but they were competent and strong. I trust these boys to move. Trustworthy! I endorse them.",
                    ],
                    [
                        "name" => "Luz Zoquier",
                        "comment" => "We were given a quote that was incredible, almost too good to be true; nonetheless, it was accurate. We picked up our belongings from storage in Sydney, which were intended for a one-bedroom apartment, and then delivered them to Melbourne the next day. Our movers, Fast Removalists, were simply incredible to work with; they were extremely helpful and stayed in contact with us throughout the 48-hour period. Would definitely recommend to others. picked up and dropped off without a hitch.",
                    ],
                ];
                ?>
                <div class="testimonial-slider">
                    <?php foreach ($testimonials as $index => $testimonial) { ?>
                        <div class="testimonial-card">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto"><svg width="59" height="38" viewBox="0 0 59 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24.5455 37.9158V19.7055H20.52L26.2707 0.153248H8.25195L0.584416 25.6478V37.9158H24.5455ZM33.1714 37.9158H57.1325V19.7055H53.107L58.8577 0.153248H40.839L33.1714 25.6478V37.9158Z" fill="#00B8B1" />
                                    </svg>
                                </div>
                                <div class="col-auto fw-700 ls-3 fw-20"><?= $index + 1 . "/" . count($testimonials) ?></div>
                            </div>
                            <div class="py-3">
                                <svg width="200" height="40" viewBox="0 0 200 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.6059 2.37685C18.9377 1.52985 20.1363 1.52985 20.4681 2.37685L24.276 12.0975C24.4183 12.4606 24.7587 12.7079 25.148 12.731L35.5695 13.3487C36.4776 13.4025 36.848 14.5425 36.145 15.1198L28.0769 21.7452C27.7755 21.9927 27.6455 22.3928 27.7438 22.7702L30.3768 32.8726C30.6062 33.7528 29.6365 34.4574 28.8702 33.9671L20.0759 28.3413C19.7474 28.1311 19.3266 28.1311 18.9981 28.3413L10.2038 33.9671C9.43751 34.4574 8.46782 33.7528 8.69724 32.8726L11.3302 22.7702C11.4285 22.3928 11.2985 21.9927 10.9971 21.7452L2.929 15.1198C2.22599 14.5425 2.59638 13.4025 3.50446 13.3487L13.926 12.731C14.3153 12.7079 14.6557 12.4606 14.798 12.0975L18.6059 2.37685Z" fill="#59D4C6" />
                                    <path d="M58.6801 2.37685C59.0119 1.52985 60.2105 1.52985 60.5423 2.37685L64.3503 12.0975C64.4925 12.4606 64.8329 12.7079 65.2222 12.731L75.6438 13.3487C76.5518 13.4025 76.9222 14.5425 76.2192 15.1198L68.1511 21.7452C67.8497 21.9927 67.7197 22.3928 67.818 22.7702L70.451 32.8726C70.6804 33.7528 69.7107 34.4574 68.9444 33.9671L60.1501 28.3413C59.8216 28.1311 59.4009 28.1311 59.0723 28.3413L50.278 33.9671C49.5117 34.4574 48.542 33.7528 48.7715 32.8726L51.4044 22.7702C51.5028 22.3928 51.3727 21.9927 51.0714 21.7452L43.0032 15.1198C42.3002 14.5425 42.6706 13.4025 43.5787 13.3487L54.0002 12.731C54.3896 12.7079 54.7299 12.4606 54.8722 12.0975L58.6801 2.37685Z" fill="#59D4C6" />
                                    <path d="M98.7543 2.37685C99.0861 1.52985 100.285 1.52985 100.617 2.37685L104.424 12.0975C104.567 12.4606 104.907 12.7079 105.296 12.731L115.718 13.3487C116.626 13.4025 116.996 14.5425 116.293 15.1198L108.225 21.7452C107.924 21.9927 107.794 22.3928 107.892 22.7702L110.525 32.8726C110.755 33.7528 109.785 34.4574 109.019 33.9671L100.224 28.3413C99.8958 28.1311 99.4751 28.1311 99.1466 28.3413L90.3522 33.9671C89.5859 34.4574 88.6163 33.7528 88.8457 32.8726L91.4786 22.7702C91.577 22.3928 91.447 21.9927 91.1456 21.7452L83.0774 15.1198C82.3744 14.5425 82.7448 13.4025 83.6529 13.3487L94.0745 12.731C94.4638 12.7079 94.8041 12.4606 94.9464 12.0975L98.7543 2.37685Z" fill="#59D4C6" />
                                    <path d="M138.829 2.37685C139.16 1.52985 140.359 1.52985 140.691 2.37685L144.499 12.0975C144.641 12.4606 144.981 12.7079 145.371 12.731L155.792 13.3487C156.7 13.4025 157.071 14.5425 156.368 15.1198L148.3 21.7452C147.998 21.9927 147.868 22.3928 147.966 22.7702L150.599 32.8726C150.829 33.7528 149.859 34.4574 149.093 33.9671L140.299 28.3413C139.97 28.1311 139.549 28.1311 139.221 28.3413L130.426 33.9671C129.66 34.4574 128.69 33.7528 128.92 32.8726L131.553 22.7702C131.651 22.3928 131.521 21.9927 131.22 21.7452L123.152 15.1198C122.449 14.5425 122.819 13.4025 123.727 13.3487L134.149 12.731C134.538 12.7079 134.878 12.4606 135.021 12.0975L138.829 2.37685Z" fill="#59D4C6" />
                                    <path d="M178.903 2.37685C179.235 1.52985 180.433 1.52985 180.765 2.37685L184.573 12.0975C184.715 12.4606 185.056 12.7079 185.445 12.731L195.866 13.3487C196.775 13.4025 197.145 14.5425 196.442 15.1198L188.374 21.7452C188.072 21.9927 187.942 22.3928 188.041 22.7702L190.674 32.8726C190.903 33.7528 189.933 34.4574 189.167 33.9671L180.373 28.3413C180.044 28.1311 179.624 28.1311 179.295 28.3413L170.501 33.9671C169.734 34.4574 168.765 33.7528 168.994 32.8726L171.627 22.7702C171.725 22.3928 171.595 21.9927 171.294 21.7452L163.226 15.1198C162.523 14.5425 162.893 13.4025 163.801 13.3487L174.223 12.731C174.612 12.7079 174.953 12.4606 175.095 12.0975L178.903 2.37685Z" fill="#59D4C6" />
                                </svg>
                            </div>
                            <div class="fs-36 fw-700 lh-1 ls-3"><?= $testimonial['name'] ?></div>
                            <div class="pt-2">
                                “<?= $testimonial['comment'] ?>”
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="d-flex justify-content-center d-lg-none mt-n4 position-relative">
                    <div class="row align-items-center py-2 py-md-3 bg-teal gx-3 gx-md-4">
                        <div class="col-auto"><?= renderImg('google.png', 'icons') ?></div>
                        <div class="col-auto d-flex align-items-center">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.99789 1.14792C9.27539 0.439533 10.2779 0.439532 10.5554 1.14792L12.3874 5.82454C12.5063 6.12824 12.791 6.33507 13.1166 6.35437L18.1305 6.65156C18.8899 6.69658 19.1997 7.64998 18.6117 8.1328L14.7301 11.3203C14.4781 11.5273 14.3693 11.862 14.4516 12.1776L15.7183 17.0379C15.9102 17.7741 15.0992 18.3633 14.4583 17.9533L10.2273 15.2467C9.95256 15.0709 9.60068 15.0709 9.32592 15.2467L5.09495 17.9533C4.45406 18.3633 3.64305 17.7741 3.83493 17.0379L5.10164 12.1776C5.18391 11.862 5.07517 11.5273 4.8231 11.3203L0.941494 8.1328C0.353527 7.64998 0.663303 6.69658 1.42278 6.65156L6.43663 6.35437C6.76223 6.33507 7.0469 6.12824 7.16587 5.82454L8.99789 1.14792Z" fill="#FFF16F" />
                            </svg>
                            <span class="fs-28 ls-3 text-white fw-700 lh-1 ps-1">(4.7)</span>
                        </div>
                        <div class="col-auto">
                            <div class="vertical-line bg-quartinary"></div>
                        </div>
                        <div class="col-auto">
                            <div class="text-white lh-0_77 fs-28 ls-3 fw-700">250+</div>
                            <div class="text-white fs-19 ls-3 lh-1">reviews</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="quick-contact">
    <div class="container">
        <div class="row gy-5">
            <div class="col-md-7 col-lg-5">
                <div class="text-primary ls-3 fw-700 fs-63 lh-0_77">
                    <span class="text-white">contact us</span><br class="d-none d-md-block"> today to talk to the experts<span class="text-white">.</span>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="text-white fs-38 ls-3">email us</div>
                <a href="mailto:<?= $admin_email ?>" class="text-decoration-none text-white fs-63 fw-700 ls-3" id="admin-email"><?= $admin_email ?></a>
                <div class="pt-5"><a href="#form" class="btn btn-teal text-white rounded-0 px-4 px-md-5 d-inline-flex">enquire now</a></div>
            </div>
        </div>
    </div>
</section>

<section class="bg-tertiary py-4 d-none d-lg-block">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-auto">
                <a href="./">
                    <?= renderImg("logo.png", "logo") ?>
                </a>
            </div>
            <div class="col-auto">
                <div class="row justify-content-center justify-content-lg-end align-items-center">
                    <div class="col-12 col-md-auto">
                        <a href="tel:<?= $phone_number ?>" class="btn border-white border rounded-0 text-white py-3 px-md-5">
                            <?= $phone_number ?>
                        </a>
                    </div>
                    <div class="col-12 col-md-auto">
                        <a href="#form" class="btn border-white border rounded-0 text-white py-3 px-md-5">
                            enquire now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="bg-primary py-4 d-lg-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-auto text-teal fw-600 fs-32 ls-3">fill out the form below</div>
            <div class="col">
                <div class="horizontal-line bg-teal"></div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="floating-get-started">get started<span class="text-white lh-1">.</span></div>
    <div class="container">
        <div class="row">
            <div class="col-5 col-xl-6 col-xxl-7 d-none d-lg-block">
                <div class="fs-83 lh-1 ls-3 fw-700">payments<span class="text-teal">.</span></div>
                <div class="pt-4"><?= renderImg('payments.png', 'icons') ?></div>
                <div class="fs-83 lh-1 ls-3 fw-700 pt-5">socials<span class="text-teal">.</span></div>
                <div class="row gx-5 pt-4">
                    <div class="col-auto">
                        <a href="https://www.facebook.com/wemovesydney" target="_blank"><svg width="16" height="25" viewBox="0 0 16 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.70907 24.9245L4.67335 14.0201H0V9.3467H4.67335V6.23113C4.67335 2.02636 7.2772 0 11.0281 0C12.8249 0 14.3691 0.133767 14.8191 0.193555V4.58778L12.2176 4.58897C10.1777 4.58897 9.78268 5.55833 9.78268 6.9808V9.3467H15.5778L14.0201 14.0201H9.78266V24.9245H4.70907Z" fill="white" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="https://www.youtube.com/channel/UCMDlI2_-ECNoD7KQ3TcnG4g" target="_blank"><svg width="26" height="19" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.7067 4.47648C24.3952 2.45136 23.4605 1.04936 21.2796 0.737799C17.8525 0.114685 12.556 0.114685 12.556 0.114685C12.556 0.114685 7.25955 0.114685 3.83243 0.737799C1.65153 1.04936 0.561085 2.45136 0.405307 4.47648C0.09375 6.5016 0.09375 9.46138 0.09375 9.46138C0.09375 9.46138 0.09375 12.4212 0.405307 14.4463C0.716863 16.4714 1.65153 17.8734 3.83243 18.185C7.25955 18.8081 12.556 18.8081 12.556 18.8081C12.556 18.8081 17.8525 18.8081 21.2796 18.185C23.4605 17.7176 24.3952 16.4714 24.7067 14.4463C25.0183 12.4212 25.0183 9.46138 25.0183 9.46138C25.0183 9.46138 25.0183 6.5016 24.7067 4.47648ZM9.44045 14.1347V4.78803L17.2294 9.46138L9.44045 14.1347Z" fill="white" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="https://www.instagram.com/wemovesydney/" target="_blank"><svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.7845 7.55837C20.6104 7.55837 21.28 6.88882 21.28 6.06289C21.28 5.23697 20.6104 4.56742 19.7845 4.56742C18.9586 4.56742 18.289 5.23697 18.289 6.06289C18.289 6.88882 18.9586 7.55837 19.7845 7.55837Z" fill="white" />
                                <path d="M13.3275 18.6934C9.89103 18.6934 7.09637 15.8987 7.09637 12.4623C7.09637 9.0258 9.89103 6.23113 13.3275 6.23113C16.764 6.23113 19.5586 9.0258 19.5586 12.4623C19.5586 15.8987 16.764 18.6934 13.3275 18.6934ZM13.3275 9.3467C11.6093 9.3467 10.2119 10.744 10.2119 12.4623C10.2119 14.1805 11.6093 15.5778 13.3275 15.5778C15.0457 15.5778 16.4431 14.1805 16.4431 12.4623C16.4431 10.744 15.0457 9.3467 13.3275 9.3467Z" fill="white" />
                                <path d="M19.5586 24.9245H7.09637C3.89357 24.9245 0.865234 21.8962 0.865234 18.6934V6.23113C0.865234 3.02833 3.89357 0 7.09637 0H19.5586C22.7614 0 25.7898 3.02833 25.7898 6.23113V18.6934C25.7898 21.8962 22.7614 24.9245 19.5586 24.9245ZM7.09637 3.11557C5.63984 3.11557 3.9808 4.77461 3.9808 6.23113V18.6934C3.9808 20.178 5.6118 21.809 7.09637 21.809H19.5586C21.0152 21.809 22.6742 20.1499 22.6742 18.6934V6.23113C22.6742 4.77461 21.0152 3.11557 19.5586 3.11557H7.09637Z" fill="white" />
                            </svg>
                        </a>
                    </div>
                    <!-- <div class="col-auto">
                        <a href=""><svg width="26" height="21" viewBox="0 0 26 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.5613 2.67322C24.6266 3.14056 23.6919 3.29634 22.6015 3.45211C23.6919 2.829 24.4708 1.89433 24.7824 0.648105C23.8477 1.27122 22.7572 1.58277 21.511 1.89433C20.5763 0.959661 19.1743 0.336548 17.7723 0.336548C15.1241 0.336548 12.7874 2.67322 12.7874 5.47723C12.7874 5.94457 12.7874 6.25612 12.9432 6.56768C8.73719 6.4119 4.84273 4.38678 2.35028 1.27122C1.88295 2.05011 1.72717 2.829 1.72717 3.91945C1.72717 5.63301 2.66184 7.19079 4.06384 8.12546C3.28495 8.12546 2.50606 7.81391 1.72717 7.50235C1.72717 9.9948 3.44073 12.0199 5.7774 12.4873C5.31007 12.643 4.84273 12.643 4.3754 12.643C4.06384 12.643 3.75229 12.643 3.44073 12.4873C4.06384 14.5124 5.93318 16.0702 8.26986 16.0702C6.5563 17.4722 4.3754 18.2511 1.88295 18.2511C1.41561 18.2511 1.10405 18.2511 0.636719 18.2511C2.97339 19.6531 5.62163 20.5877 8.42564 20.5877C17.7723 20.5877 22.913 12.7988 22.913 6.10035C22.913 5.94457 22.913 5.63301 22.913 5.47723C24.0035 4.69834 24.9381 3.76367 25.5613 2.67322Z" fill="white" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href=""><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.7055 0C5.94307 0 0.410156 5.53291 0.410156 12.2954C0.410156 17.5209 3.63769 21.978 8.24845 23.6686C8.09476 22.7464 8.09476 21.2095 8.24845 20.1337C8.40214 19.2115 9.63168 13.986 9.63168 13.986C9.63168 13.986 9.32429 13.3712 9.32429 12.2954C9.32429 10.6047 10.4001 9.22152 11.6297 9.22152C12.7055 9.22152 13.1666 9.98998 13.1666 10.9121C13.1666 11.988 12.5518 13.5249 12.0907 15.0618C11.7834 16.2914 12.7055 17.2135 13.9351 17.2135C16.0867 17.2135 17.7774 14.9081 17.7774 11.5269C17.7774 8.60675 15.6257 6.45506 12.7055 6.45506C9.1706 6.45506 7.1726 9.06783 7.1726 11.8343C7.1726 12.9101 7.63368 13.986 8.09476 14.6007C8.09476 14.9081 8.09476 15.0618 8.09476 15.2155C7.94106 15.6766 7.78737 16.445 7.78737 16.5987C7.78737 16.7524 7.63368 16.9061 7.3263 16.7524C5.78938 15.984 4.86722 13.8323 4.86722 11.988C4.86722 8.14568 7.63368 4.61076 13.0129 4.61076C17.3163 4.61076 20.5438 7.6846 20.5438 11.6806C20.5438 15.984 17.931 19.3652 14.0887 19.3652C12.8592 19.3652 11.6297 18.7504 11.3223 17.982C11.3223 17.982 10.7075 20.2873 10.5538 20.9021C10.2464 21.978 9.47798 23.3612 9.01691 24.1296C10.2464 24.437 11.476 24.5907 12.7055 24.5907C19.468 24.5907 25.0009 19.0578 25.0009 12.2954C25.0009 5.53291 19.468 0 12.7055 0Z" fill="white" />
                            </svg>
                        </a>
                    </div> -->
                </div>
                <div class="pt-9 pb-4"><a href="https://aiims.com.au/" target="_blank"><?= renderImg('aiims.png', 'logo') ?></a></div>
                <div class="fw-700">Copyright <?= date('Y') ?> <span class="text-primary px-3">/</span><?= $site ?><span class="text-primary px-3">/</span>All Rights Reserved</div>
            </div>
            <div class="col-10 col-lg-6 col-xxl-5">
                <form action="./src/form" method="POST" class="main-form">
                    <input type="hidden" name="token" id="recaptchaResponse2" class="recaptchaResponse">
                    <div class="row align-items-center pb-5 d-none d-lg-flex">
                        <div class="col-auto fw-600 fs-25 ls-3 lh-1">we'll get back to you asap</div>
                        <div class="col">
                            <div class="horizontal-line"></div>
                        </div>
                    </div>
                    <div class="row gy-4">
                        <div class="col-6">
                            <input type="text" class="form-control" name="name" placeholder="full name" required>
                        </div>
                        <div class="col-6">
                            <input type="tel" class="form-control" name="phone" placeholder="phone no." required>
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control" name="email" placeholder="your email" required>
                        </div>
                        <div class="col-12">
                            <label for="storageSize" class="mb-2">select storage size</label>
                            <select name="storageSize" class="form-control form-select" id="storageSize">
                                <option selected disabled>select here</option>
                                <option>the mini box (a few items)</option>
                                <option>the solo box (1 bedroom home)</option>
                                <option>the duo box (2 bedroom home)</option>
                                <option>the tri box (2-3 bedroom home)</option>
                                <option>the family vault (3-4 bedroom home)</option>
                                <option>the mega vault (large home or office)</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="enquiry" class="mb-2">enquiry</label>
                            <textarea class="form-control" name="enquiry" id="enquiry" placeholder="write your response here..." rows="5"></textarea>
                        </div>
                        <div class="col-12">
                            <div class="row gy-4">
                                <div class="col-md-6 fw-500 lh-1">all information provided will be kept 100% private &amp; secure</div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary w-100 text-uppercase rounded-0 text-white fs-25 gap-2">get <span class="text-teal">your quote</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>

<div class="d-lg-none">
    <div class="bg-tertiary py-2"></div>
    <section class="footer-mobile-top">
        <div class="container">
            <a href="./"><?= renderImg("footer-logo.png", 'logo') ?></a>
            <div class="fs-70 lh-1 ls-3 fw-700 pt-6">payments<span class="text-tertiary">.</span></div>
            <div class="pt-4"><?= renderImg('payments.png', 'icons') ?></div>
            <div class="fs-70 lh-1 ls-3 fw-700 pt-4">socials<span class="text-tertiary">.</span></div>
            <div class="row gx-md-5 pt-4">
                <div class="col-auto">
                    <a href="https://www.facebook.com/wemovesydney" target="_blank"><svg width="16" height="25" viewBox="0 0 16 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.70907 24.9245L4.67335 14.0201H0V9.3467H4.67335V6.23113C4.67335 2.02636 7.2772 0 11.0281 0C12.8249 0 14.3691 0.133767 14.8191 0.193555V4.58778L12.2176 4.58897C10.1777 4.58897 9.78268 5.55833 9.78268 6.9808V9.3467H15.5778L14.0201 14.0201H9.78266V24.9245H4.70907Z" fill="white" />
                        </svg>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="https://www.youtube.com/channel/UCMDlI2_-ECNoD7KQ3TcnG4g" target="_blank"><svg width="26" height="19" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.7067 4.47648C24.3952 2.45136 23.4605 1.04936 21.2796 0.737799C17.8525 0.114685 12.556 0.114685 12.556 0.114685C12.556 0.114685 7.25955 0.114685 3.83243 0.737799C1.65153 1.04936 0.561085 2.45136 0.405307 4.47648C0.09375 6.5016 0.09375 9.46138 0.09375 9.46138C0.09375 9.46138 0.09375 12.4212 0.405307 14.4463C0.716863 16.4714 1.65153 17.8734 3.83243 18.185C7.25955 18.8081 12.556 18.8081 12.556 18.8081C12.556 18.8081 17.8525 18.8081 21.2796 18.185C23.4605 17.7176 24.3952 16.4714 24.7067 14.4463C25.0183 12.4212 25.0183 9.46138 25.0183 9.46138C25.0183 9.46138 25.0183 6.5016 24.7067 4.47648ZM9.44045 14.1347V4.78803L17.2294 9.46138L9.44045 14.1347Z" fill="white" />
                        </svg>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="https://www.instagram.com/wemovesydney/" target="_blank"><svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.7845 7.55837C20.6104 7.55837 21.28 6.88882 21.28 6.06289C21.28 5.23697 20.6104 4.56742 19.7845 4.56742C18.9586 4.56742 18.289 5.23697 18.289 6.06289C18.289 6.88882 18.9586 7.55837 19.7845 7.55837Z" fill="white" />
                            <path d="M13.3275 18.6934C9.89103 18.6934 7.09637 15.8987 7.09637 12.4623C7.09637 9.0258 9.89103 6.23113 13.3275 6.23113C16.764 6.23113 19.5586 9.0258 19.5586 12.4623C19.5586 15.8987 16.764 18.6934 13.3275 18.6934ZM13.3275 9.3467C11.6093 9.3467 10.2119 10.744 10.2119 12.4623C10.2119 14.1805 11.6093 15.5778 13.3275 15.5778C15.0457 15.5778 16.4431 14.1805 16.4431 12.4623C16.4431 10.744 15.0457 9.3467 13.3275 9.3467Z" fill="white" />
                            <path d="M19.5586 24.9245H7.09637C3.89357 24.9245 0.865234 21.8962 0.865234 18.6934V6.23113C0.865234 3.02833 3.89357 0 7.09637 0H19.5586C22.7614 0 25.7898 3.02833 25.7898 6.23113V18.6934C25.7898 21.8962 22.7614 24.9245 19.5586 24.9245ZM7.09637 3.11557C5.63984 3.11557 3.9808 4.77461 3.9808 6.23113V18.6934C3.9808 20.178 5.6118 21.809 7.09637 21.809H19.5586C21.0152 21.809 22.6742 20.1499 22.6742 18.6934V6.23113C22.6742 4.77461 21.0152 3.11557 19.5586 3.11557H7.09637Z" fill="white" />
                        </svg>
                    </a>
                </div>
                <!-- <div class="col-auto">
                    <a href=""><svg width="26" height="21" viewBox="0 0 26 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5613 2.67322C24.6266 3.14056 23.6919 3.29634 22.6015 3.45211C23.6919 2.829 24.4708 1.89433 24.7824 0.648105C23.8477 1.27122 22.7572 1.58277 21.511 1.89433C20.5763 0.959661 19.1743 0.336548 17.7723 0.336548C15.1241 0.336548 12.7874 2.67322 12.7874 5.47723C12.7874 5.94457 12.7874 6.25612 12.9432 6.56768C8.73719 6.4119 4.84273 4.38678 2.35028 1.27122C1.88295 2.05011 1.72717 2.829 1.72717 3.91945C1.72717 5.63301 2.66184 7.19079 4.06384 8.12546C3.28495 8.12546 2.50606 7.81391 1.72717 7.50235C1.72717 9.9948 3.44073 12.0199 5.7774 12.4873C5.31007 12.643 4.84273 12.643 4.3754 12.643C4.06384 12.643 3.75229 12.643 3.44073 12.4873C4.06384 14.5124 5.93318 16.0702 8.26986 16.0702C6.5563 17.4722 4.3754 18.2511 1.88295 18.2511C1.41561 18.2511 1.10405 18.2511 0.636719 18.2511C2.97339 19.6531 5.62163 20.5877 8.42564 20.5877C17.7723 20.5877 22.913 12.7988 22.913 6.10035C22.913 5.94457 22.913 5.63301 22.913 5.47723C24.0035 4.69834 24.9381 3.76367 25.5613 2.67322Z" fill="white" />
                        </svg>
                    </a>
                </div>
                <div class="col-auto">
                    <a href=""><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.7055 0C5.94307 0 0.410156 5.53291 0.410156 12.2954C0.410156 17.5209 3.63769 21.978 8.24845 23.6686C8.09476 22.7464 8.09476 21.2095 8.24845 20.1337C8.40214 19.2115 9.63168 13.986 9.63168 13.986C9.63168 13.986 9.32429 13.3712 9.32429 12.2954C9.32429 10.6047 10.4001 9.22152 11.6297 9.22152C12.7055 9.22152 13.1666 9.98998 13.1666 10.9121C13.1666 11.988 12.5518 13.5249 12.0907 15.0618C11.7834 16.2914 12.7055 17.2135 13.9351 17.2135C16.0867 17.2135 17.7774 14.9081 17.7774 11.5269C17.7774 8.60675 15.6257 6.45506 12.7055 6.45506C9.1706 6.45506 7.1726 9.06783 7.1726 11.8343C7.1726 12.9101 7.63368 13.986 8.09476 14.6007C8.09476 14.9081 8.09476 15.0618 8.09476 15.2155C7.94106 15.6766 7.78737 16.445 7.78737 16.5987C7.78737 16.7524 7.63368 16.9061 7.3263 16.7524C5.78938 15.984 4.86722 13.8323 4.86722 11.988C4.86722 8.14568 7.63368 4.61076 13.0129 4.61076C17.3163 4.61076 20.5438 7.6846 20.5438 11.6806C20.5438 15.984 17.931 19.3652 14.0887 19.3652C12.8592 19.3652 11.6297 18.7504 11.3223 17.982C11.3223 17.982 10.7075 20.2873 10.5538 20.9021C10.2464 21.978 9.47798 23.3612 9.01691 24.1296C10.2464 24.437 11.476 24.5907 12.7055 24.5907C19.468 24.5907 25.0009 19.0578 25.0009 12.2954C25.0009 5.53291 19.468 0 12.7055 0Z" fill="white" />
                        </svg>
                    </a>
                </div> -->
            </div>
        </div>
    </section>

    <section class="footer-mobile-bottom">
        <div class="container">
            <a href="https://aiims.com.au/" target="_blank"><?= renderImg('aiims.png', 'logo') ?></a>
            <div class="fw-700 fs-12 text-white pt-4">Copyright <?= date('Y') ?> <span class="text-primary px-3">/</span><?= $site ?><span class="text-primary px-3">/</span>All Rights Reserved</div>
        </div>
    </section>
</div>
<nav class="navbar bg-black">
    <div class="container">
        <a class="btn-img-back" href="<?= base_url(); ?>auth/de">
            <img src="<?= base_url(); ?>assets/images/back.png">
        </a>
    </div>
</nav>
<!-- Mashead header-->
<section class="py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-8 mx-auto form-tracklesscompany-select">
                <h2 class="head-title-form mb-5 f-inter">Fill this form to continue</h2>
                <form action="" class="f-inter">
                    <div class="mb-3">
                        <label for="fname" class="form-label">Full name</label>
                        <input type="email" class="form-control px-3 py-3" id="fname"
                            placeholder="Enter your full name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                        <input type="email" class="form-control px-3 py-3" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="vemail" class="form-label">Verify Email Address:</label>
                        <input type="email" class="form-control px-3 py-3" id="vemail"
                            placeholder="Verify Email Address">
                    </div>
                    <div class="mb-3">
                        <label for="companyt" class="form-label">Company type</label>
                        <input type="email" class="form-control px-3 py-3" id="companyt"
                            placeholder="Delaware Limited Liability Company (LLC)">
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">
                            <label for="phone1" class="form-label">Phone number</label>
                        </div>
                        <div class="col-8 row">
                            <div class="col-auto d-flex flex-row align-items-center mb-1">
                                <div>
                                    <input class="form-check-input me-2" type="radio" name="phone" id="us">
                                </div>
                                <label class="form-check-label" for="us">
                                    U.S phone number
                                </label>
                            </div>
                            <div class="col-auto d-flex flex-row align-items-center mb-1">
                                <div>
                                    <input class="form-check-input me-2" type="radio" name="phone" id="inter">
                                </div>
                                <label class="form-check-label" for="inter">
                                    International phone number
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">
                            <input type="email" class="form-control px-3 py-3" id="phone2">
                        </div>
                        <div class="col-4">
                            <input type="email" class="form-control px-3 py-3" id="phone2">
                        </div>
                        <div class="col-4">
                            <input type="email" class="form-control px-3 py-3" id="phone3">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Company name</label>
                        <input type="email" class="form-control px-3 py-3" id="company"
                            placeholder="Enter your company name ">
                    </div>
                    <div class="mb-3">
                        <label for="streetadd" class="form-label">Street address</label>
                        <input type="email" class="form-control px-3 py-3" id="streetadd1"
                            placeholder="Enter your sreet address">
                        <input type="email" class="form-control px-3 py-3" id="streetadd2" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City/Zip</label>
                        <input type="email" class="form-control px-3 py-3" id="city" placeholder="Enter your Zip code">
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select px-3 py-3" aria-label="Default select example" id="country">
                            <option selected>Select your country</option>
                            <option value="IND">Indonesia</option>
                        </select>
                    </div>
                    <div class="mb-5 d-flex flex-row">
                        <div class="">
                            <input class="form-check-input me-2 rounded-circle" type="checkbox" name="agree" id="agree">
                        </div>
                        <label class="form-check-label" for="agree">
                            This addresss will be used where the order will be sent and it will be list
                            on your cover letter and receipt this order
                        </label>
                    </div>
                    <div class="mb-3 text-center">
                        <button class="btn btn-color-trackless rounded-pill px-5 py-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
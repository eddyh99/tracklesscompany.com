<nav class="navbar bg-black">
    <div class="container">
        <a class="btn-img-back" href="<?= base_url(); ?>auth/deleware">
            <img src="<?= base_url(); ?>assets/images/back.png">
        </a>
    </div>
</nav>
<!-- Mashead header-->
<section class="py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-12 col-lg-8 mx-auto form-tracklesscompany-select">
                <?php if (@isset($_SESSION["failed"])) { ?>
                <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="notif-login f-poppins"><?= @$_SESSION["failed"] ?></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php } ?>
                <?php if (@isset($_SESSION["success"])) { ?>
                <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                    <span class="notif-login f-poppins"><?= @$_SESSION["success"] ?></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php } ?>
                <h2 class="head-title-form mb-5 f-inter">Fill this form to continue</h2>
                <form action="<?= base_url() ?>auth/mailproses" method="POST" class="f-inter"
                    onsubmit="return validate()">
                    <input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                        value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <div class="mb-3">
                        <label for="fname" class="form-label">Full name</label>
                        <input type="text" class="form-control px-3 py-3" id="fname" placeholder="Enter your full name"
                            name="fname">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                        <input type="text" class="form-control px-3 py-3" id="email" placeholder="Enter your email"
                            name="email">
                    </div>
                    <div class="mb-3">
                        <label for="vemail" class="form-label">Verify Email Address:</label>
                        <input type="text" class="form-control px-3 py-3" id="vemail" placeholder="Verify Email Address"
                            name="vemail">
                    </div>
                    <div class="mb-3">
                        <label for="companyt" class="form-label">Company type</label>
                        <input type="text" class="form-control px-3 py-3" id="companyt"
                            placeholder="Delaware Limited Liability Company (LLC)" name="companyt">
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">
                            <label for="phone1" class="form-label">Phone number</label>
                        </div>
                        <div class="col-8 row">
                            <div class="col-auto d-flex flex-row align-items-center mb-1">
                                <div>
                                    <input class="form-check-input me-2" type="radio" name="phonetype" id="us"
                                        value="us" onclick="selectPhone('us')" checked>
                                </div>
                                <label class="form-check-label" for="us">
                                    U.S phone number
                                </label>
                            </div>
                            <div class="col-auto d-flex flex-row align-items-center mb-1">
                                <div>
                                    <input class="form-check-input me-2" type="radio" name="phonetype" id="inter"
                                        value="inter" onclick="selectPhone('inter')">
                                </div>
                                <label class="form-check-label" for="inter">
                                    International phone number
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12" id="usnumber">
                            <div class="row">
                                <div class="col-12 col-sm">
                                    <input type="text" class="form-control text-center px-3 py-3 my-2" id="usphone0"
                                        name="usphone0"
                                        oninput="this.value = this.value.replace(/[^0-9+]/g, '').replace(/(\..*)\./g,);"
                                        placeholder="+1" maxlength="2" onkeyup="movetoNext(this, 'usphone1')">
                                </div>
                                <div class="col-12 col-sm">
                                    <input type="text" class="form-control text-center px-3 py-3 my-2" id="usphone1"
                                        name="usphone1"
                                        oninput="this.value = this.value.replace(/[^0-9+]/g, '').replace(/(\..*)\./g,);"
                                        placeholder="000" maxlength="3" onkeyup="movetoNext(this, 'usphone2')">
                                </div>
                                <div class="col-12 col-sm">
                                    <input type="text" class="form-control text-center px-3 py-3 my-2" id="usphone2"
                                        name="usphone2"
                                        oninput="this.value = this.value.replace(/[^0-9+]/g, '').replace(/(\..*)\./g,);"
                                        placeholder="000" maxlength="3" onkeyup="movetoNext(this, 'usphone3')">
                                </div>
                                <div class="col-12 col-sm">
                                    <input type="text" class="form-control text-center px-3 py-3 my-2" id="usphone3"
                                        name="usphone3"
                                        oninput="this.value = this.value.replace(/[^0-9+]/g, '').replace(/(\..*)\./g,);"
                                        placeholder="000" maxlength="3">
                                </div>
                            </div>
                        </div>
                        <div class="col-12" id="internumber" style="display: none;">
                            <input type="text" class="form-control px-3 py-3 my-2" id="interphone" name="interphone"
                                placeholder="+44 00 0000 0000"
                                oninput="this.value = this.value.replace(/[^0-9+]/g, '').replace(/(\..*)\./g,);">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Company name</label>
                        <input type="text" class="form-control px-3 py-3" id="company"
                            placeholder="Enter your company name " name="company">
                    </div>
                    <div class="mb-3">
                        <label for="streetadd" class="form-label">Street address</label>
                        <input type="text" class="form-control px-3 py-3" id="streetadd1"
                            placeholder="Enter your sreet address" name="streetadd1">
                        <input type="text" class="form-control px-3 py-3" id="streetadd2" placeholder=""
                            name="streetadd2">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City/Zip</label>
                        <input type="text" class="form-control px-3 py-3" id="city" placeholder="Enter your Zip code"
                            name="city">
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select px-3 py-3" aria-label="Default select example" id="country"
                            name="country">
                            <option selected>Select your country</option>
                            <?php
                            foreach ($countries_list as $key) {
                                foreach ($key as $data => $value) {
                                    if ($data == "name") { ?>

                            <option value="<?= $value; ?>"><?= $value; ?></option>
                            <?php }
                                }
                            } ?>
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
                        <button class="btn btn-color-trackless rounded-pill px-5 py-3" id="btnconfirm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
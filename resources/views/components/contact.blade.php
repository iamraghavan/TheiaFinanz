

<section class="sign-up section">
    <div class="container">
        <div class="row gy-5 gy-xl-0 justify-content-center justify-content-lg-between align-items-center">
            <div class="col-12 col-lg-7 col-xxl-6">
                <form method="POST" action='{{url('/enquiry/submit')}}' autocomplete="off" id="frmContactus"
                    class="sign-up__form me-lg-4 me-xxl-0 wow fadeInUp" data-wow-duration="0.8s" novalidate="novalidate"
                    style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">
                    @csrf

                    <h3 class="sign-up__title wow fadeInUp" data-wow-duration="0.8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">Let’s Get Started!</h3>
                    <p class="sign-up__sub-title mb_40">Please enter your information to join us</p>
                    <div class="sign-up__form-part">
                        <div class="input-group">
                            <div class="input-single">
                                <label class="label" for="fname">First Name</label>
                                <input value="{{old('fname')}}" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" id="fname"
                                    placeholder="Enter First Name..." required>
                                @error('fname')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-single">
                                <label class="label" for="lname">Last Name</label>
                                <input value="{{old('lname')}}" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" id="lname"
                                    placeholder="Enter Last Name..." required>
                                @error('lname')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-single">
                            <label class="label" for="email">Email</label>
                            <input value="{{old('email')}}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                placeholder="Enter Your Email..." required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-single">
                            <label class="label" for="phone">Phone</label>
                            <input value="{{old('phone')}}" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone"
                                placeholder="Enter Your Phone..." required>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-single">
                            <label class="label" for="interest">I am interested in</label>
                            <select value="{{old('interest')}}" style="
    border-radius: 30px;
    padding: 0.80rem 1rem;
" class="form-select @error('interest') is-invalid @enderror" name="interest" id="interest" required>
                                <option value="" selected disabled>Select Interest</option>
                                <option value="Will & Trust">Will & Trust</option>
                                <option value="Life Insurance (Term | Whole)">Life Insurance (Term | Whole)</option>
                                <option value="Annuities | IRA, 401(k), 403(b), Pension Rollover">Annuities | IRA, 401(k), 403(b),
                                    Pension Rollover</option>
                                <option value="Indexed Universal Life (IUL)">Indexed Universal Life (IUL)</option>
                                <option value="College Planning">College Planning</option>
                                <option value="Kids Education">Kids Education</option>
                                <option value="Retirement Planning">Retirement Planning</option>
                                <option value="Wealth Management">Wealth Management</option>
                                <option value="Payment Platform">Payment Platform</option>
                                <option value="Financial Need Analysis (FNA) | D.I.M.E">Financial Need Analysis (FNA) | D.I.M.E</option>
                                <option value="ADDITIONAL Income">ADDITIONAL Income</option>
                            </select>
                            @error('interest')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-single">
                             <label class="label" for="status">Status</label>
                            <select style="
    border-radius: 30px;
    padding: 0.80rem 1rem;
" class="form-select" name="status" id="status" >
                                <option value="" selected disabled>Select Status</option>
                                <option value="US Citizen">US Citizen</option>
                                <option value="Green Card">Green Card</option>
                                <option value="H1B">H1B</option>
                                <option value="H4 EAD">H4 EAD</option>
                                <option value="Others">Others</option>
                            </select>


                        </div>
                        <div class="input-single">
                            <label class="label" for="message">Message</label>
                            <input type="text" class="form-control @error('message') is-invalid @enderror"  name="message" id="message"
                                placeholder="Enter Your Message..."></input>
                            @error('message')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-single">
                           <x-turnstile />
                        </div>
                    </div>

                    <span id="msg"></span>
                    <button type="submit" class="btn_theme btn_theme_active mt_40 wow fadeInUp" name="submit" id="submit">Submit your
                        Request <i class="bi bi-arrow-up-right"></i><span></span></button>
                </form>
            </div>
            <div class="col-12 col-sm-7 col-lg-5 col-xxl-5">
                <div class="sign-up__thumb previewShapeY unset-xxl wow fadeInDown" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;">
                    <img src="{{ asset("/assets/Mention-cuate.png") }}" alt="images">
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#frmContactus').submit(function (event) {
            var isValid = true;
            $('input, select', this).each(function () {
                if ($(this).prop('required') && !$(this).val()) {
                    isValid = false;
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                }
            });
            if (!isValid) {
                event.preventDefault();
                $('#msg').html('<div class="alert alert-danger" role="alert">Please fill in all required fields.</div>');
            }
        });
    });
</script>

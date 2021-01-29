@extends('layout.main')

@section('headerClass', 'beige-background')

@section('banner')
    <div class="banner-container">
        <div class="tw-container tw-mx-auto banner tw-box-border tw-flex-col lg:tw-flex-row tw-flex tw-items-end tw-w-full tw-px-4">
            <div class="tw-w-full lg:tw-w-1/2 xl:tw-w-3/5">
                <h1 class="tw-text-blue tw-text-3xl xl:tw-text-5xl tw-font-black tw-mb-4 tw-leading-tight">
                    Get your guaranteed best price on life insurance for type 2 diabetics
                </h1>

                <p class="tw-text-gray tw-mb-4 tw-w-full tw-text-xl sm:tw-text-2xl">Did you know that many type 2 diabetics can get the same low price as non-diabetics? Find out if you qualify.</p>

                <p class="tw-text-gray tw-font-black tw-mb-4 w-text-lg sm:tw-text-xl">My latest A1C reading is:</p>

                <div class="tw-mb-10 xl:tw-mb-32 tw-flex tw-flex-col sm:tw-flex-row banner-buttons tw-flex-wrap">
                    <a plain class="custom-button homepage-selection tw-mr-2 tw-mb-2 tw-text-center tw-p-5 text-lg tw-inline-block tw-rounded-lg" href="{{ url('/what-is-your-gender?a1c=6.9') }}">
                        Less than<br> <span class="tw-font-black">7</span>
                    </a>
                    <a plain class="custom-button homepage-selection tw-mr-2 tw-mb-2 tw-text-center tw-p-5 text-lg tw-inline-block tw-rounded-lg" href="{{ url('/what-is-your-gender?a1c=7.5') }}">
                        Between<br> <span class="tw-font-black">7 and 8</span>
                    </a>
                    <a plain class="custom-button homepage-selection tw-mr-2 tw-mb-2 tw-text-center tw-p-5 text-lg tw-inline-block tw-rounded-lg" href="{{ url('/what-is-your-gender?a1c=8.5') }}">
                        Between<br> <span class="tw-font-black">8 and 9</span>
                    </a>
                    <a plain class="custom-button homepage-selection tw-mr-2 tw-mb-2 tw-text-center tw-p-5 text-lg tw-inline-block tw-rounded-lg" href="{{ url('/what-is-your-gender?a1c=9.5') }}">
                        Between<br> <span class="tw-font-black">9 and 10</span>
                    </a>
                    <a plain class="custom-button homepage-selection tw-mr-2 tw-mb-2 tw-text-center tw-p-5 text-lg tw-inline-block tw-rounded-lg" href="{{ url('/what-is-your-gender?a1c=10.1') }}">
                        Over<br> <span class="tw-font-black">10</span>
                    </a>
                </div>

                <div class="tw-flex tw-items-center tw-mb-10 tw-justify-between sm:tw-justify-start banner-images">
                    <a target="_blank" class="tw-inline-block tw-mr-4" title="Click for the Business Review of TypeTrue Ltd, an Insurance - Life in North York ON" href="https://www.bbb.org/ca/on/north-york/profile/life-insurance/typetrue-ltd-0107-1376679#sealclick">
                        <img alt="Click for the BBB Business Review of this Insurance - Life in North York ON" src="{{ url('images/img-bbb.png')  }}">
                    </a>

                    <a target="_blank" class="tw-inline-block" title="GClick for the Google Review of TypeTrue Ltd, an Insurance - Life in North York ON" href="https://www.google.com/search?sxsrf=ALeKk02wN0C5QkqI3ZX3yOe-sfD4T93mzg%3A1610406444592&ei=LNr8X8PFI-O9ggfplLGwBQ&q=typetrue.ca&oq=typetrue.ca&gs_lcp=CgZwc3ktYWIQAzICCCZQyC5YyC5grzZoAHAAeACAAVmIAVmSAQExmAEAoAEBqgEHZ3dzLXdpesABAQ&sclient=psy-ab&ved=0ahUKEwjDi8vA_5TuAhXjnuAKHWlKDFYQ4dUDCA0&uact=5#lrd=0x89d4cdba2710f7ed:0x1e3c1a3a12ea747a,1,,,">
                        <img alt="Click for the Google Review of TypeTrue Ltd, an Insurance - Life in North York ON" src="{{ url('images/img-google.png')  }}">
                    </a>
                </div>
            </div>

            <div class="tw-w-full tw-hidden md:tw-flex tw-justify-center lg:tw-w-1/2 xl:tw-w-2/5">
                <img class="tw-inline-block" src="{{ url('images/img-woman.png') }}" alt="Banner">
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="tw-container tw-mx-auto tw-px-4 tw-py-10 md:tw-py-20">
        <h2 class="tw-mb-10 text-blue tw-text-2xl sm:tw-text-4xl tw-font-black tw-text-center">Why TypeTrue?</h2>

        <div class="sm:tw-flex tw-justify-center tw-mb-10 tw-flex-wrap">
            <div class="tw-text-center tw-w-full lg:tw-w-1/3 max-width-card tw-mb-4 tw-p-5">
                <div class="tw-shadow-lg tw-rounded-lg tw-p-10 tw-h-full tw-pt-5">
                    <div class="tw-mb-4 tw-min-h-150">
                        <img class="tw-mb-4 tw-inline-block" src="{{ url('images/ic-fast.svg') }}" alt="Fast and accurate online quote">

                        <h3 class="tw-font-semibold tw-text-2xl">Fast &amp; Accurate<br> Online Quote</h3>
                    </div>

                    <p class="tw-text-gray tw-text-lg">Get a personalized price estimate in minutes.</p>
                </div>
            </div>

            <div class="tw-text-center tw-w-full lg:tw-w-1/3 max-width-card tw-mb-4 tw-p-5">
                <div class="tw-shadow-lg tw-rounded-lg tw-p-10 tw-h-full tw-pt-5">
                    <div class="tw-mb-4 tw-min-h-150">
                        <img class="tw-mb-4 tw-inline-block" src="{{ url('images/ic-guarantee.svg') }}" alt="Best price guarantee">

                        <h3 class="tw-font-semibold tw-text-2xl">Best Price<br> Guarantee</h3>
                    </div>

                    <p class="tw-text-gray tw-text-lg">Find the lowest price for your diabetes profile. Get a personalized price estimate in minutes.</p>
                </div>
            </div>

            <div class="tw-text-center tw-w-full lg:tw-w-1/3 max-width-card tw-mb-4 tw-p-5">
                <div class="tw-shadow-lg tw-rounded-lg tw-p-10 tw-h-full tw-pt-5">
                    <div class="tw-mb-4 tw-min-h-150">
                        <img class="tw-mb-4 tw-inline-block" src="{{ url('images/ic-trust.svg') }}" alt="Trusted providers">

                        <h3 class="tw-font-semibold tw-text-2xl">Trusted<br> Providers</h3>
                    </div>

                    <p class="tw-text-gray tw-text-lg">Buy your policy from leading Canadian insurance companies.</p>
                </div>
            </div>

            <div class="tw-text-center tw-w-full lg:tw-w-1/3 max-width-card tw-mb-4 tw-p-5">
                <div class="tw-shadow-lg tw-rounded-lg tw-p-10 tw-h-full tw-pt-5">
                    <div class="tw-mb-4 tw-min-h-150">
                        <img class="tw-mb-4 tw-inline-block" src="{{ url('images/ic-tech.svg') }}" alt="High Tech">

                        <h3 class="tw-font-semibold tw-text-2xl">High Tech</h3>
                    </div>

                    <p class="tw-text-gray tw-text-lg">Find the lowest price for your diabetes profile. Get a personalized price estimate in minutes.</p>
                </div>
            </div>

            <div class="tw-text-center tw-w-full lg:tw-w-1/3 max-width-card tw-mb-4 tw-p-5">
               <div class="tw-shadow-lg tw-rounded-lg tw-p-10 tw-h-full tw-pt-5">
                   <div class="tw-mb-4 tw-min-h-150">
                       <img class="tw-mb-4 tw-inline-block" src="{{ url('images/ic-touch.svg') }}" alt="High Touch">

                       <h3 class="tw-font-semibold tw-text-2xl">High Touch</h3>
                   </div>

                   <p class="tw-text-gray tw-text-lg">Buy your policy from leading Canadian insurance companies.</p>
               </div>
            </div>
        </div>

        <div class="tw-flex tw-justify-center">
            <a plain class="custom-button homepage-selection tw-mr-2 tw-mb-2 tw-text-center tw-px-10 tw-py-2 text-lg tw-inline-block tw-rounded-full" href="{{ url('/what-is-your-gender') }}">
               <span class="tw-font-black tw-text-xl sm:tw-text-2xl">Get your FREE quote</span>
            </a>
        </div>
    </div>

    <div class="accent-background tw-py-10 md:tw-py-20">
        <div class="tw-container tw-mx-auto tw-px-4">
            <div class="tw-flex tw-flex-col-reverse lg:tw-flex-row">
                <div class="lg:tw-w-1/3 tw-text-center">
                    <img src="{{ url('images/img-man.png')  }}" alt="About Us" class="tw-w-full tw-max-w-xl tw-inline-block">
                </div>

                <div class="lg:tw-w-2/3 lg:tw-pl-10">
                    <h2 class="tw-mb-10 text-blue tw-text-2xl sm:tw-text-4xl tw-font-black">About Us</h2>

                    <p class="tw-text-gray tw-text-lg tw-mb-4">People with diabetes often think they won’t qualify for life insurance – or that it won’t be affordable. The truth is that most Diabetics do pay too much for life insurance. TypeTrue works with life insurance professionals to get you the guaranteed best deal on life insurance. We do that first by understanding your diabetic condition. Everyone is unique.</p>

                    <p class="tw-text-gray tw-text-lg tw-mb-4">With that information, we can select the right life insurance product for your specific needs, and the insurance company that can give you the lowest possible available price. So, contact us before you contact an agent or insurance company to find out if you qualify for the lowest possible price.</p>
                </div>
            </div>

            <div class="tw-flex tw-p-10 tw-rounded-lg tw-shadow-lg tw-bg-white">
                <div class="tw-hidden md:tw-block tw-w-1/6">
                    <img src="{{ url('images/ic-shield.svg')  }}" alt="Our Guarantee" class="tw-w-full">
                </div>

                <div class="md:tw-pl-10">
                    <h3 class="tw-font-semibold tw-text-gray tw-text-2xl tw-mb-4">Our Guarantee:</h3>

                    <p class="tw-text-gray tw-text-lg tw-mb-4">We will, over the years, monitor your life insurance. If we or you can find a better deal, we will switch you to that offering. And, if you are not satisfied in any way, you may cancel your plan at any time – with no penalties whatsoever.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="light-blue-bg tw-py-6">
        <div class="tw-container tw-mx-auto tw-px-4">
            <div class="tw-text-center tw-mb-2">
                <h4 class="tw-text-white tw-uppercase">WE WORK WITH TRUSTED CANADIAN INSURERS</h4>
            </div>

            <div class="tw-flex tw-flex-wrap lg:tw-flex-no-wrap tw-justify-between tw-items-center">
                <div class="tw-text-center tw-mb-4 lg:tw-mb-0 tw-px-4 tw-w-1/2 md:tw-w-1/3 lg:tw-w-full">
                    <img class="tw-inline-block tw-w-full" src="{{ url('images/img-equitablelife.svg') }}" alt="equitable life">
                </div>
                <div class="tw-text-center tw-mb-4 lg:tw-mb-0 tw-px-4 tw-w-1/2 md:tw-w-1/3 lg:tw-w-full">
                    <img class="tw-inline-block tw-w-full" src="{{ url('images/img-empirelife.svg') }}" alt="empire life">
                </div>
                <div class="tw-text-center tw-mb-4 lg:tw-mb-0 tw-px-4 tw-w-1/2 md:tw-w-1/3 lg:tw-w-full">
                    <img class="tw-inline-block tw-w-full" src="{{ url('images/img-manulife.svg') }}" alt="manulife">
                </div>
                <div class="tw-text-center tw-mb-4 lg:tw-mb-0 tw-px-4 tw-w-1/2 md:tw-w-1/3 lg:tw-w-full">
                    <img class="tw-inline-block tw-w-full" src="{{ url('images/img-assumptionlife.svg') }}" alt="assumption life">
                </div>
                <div class="tw-text-center tw-mb-4 lg:tw-mb-0 tw-px-4 tw-w-1/2 md:tw-w-1/3 lg:tw-w-full">
                    <img class="tw-inline-block tw-w-full" src="{{ url('images/img-simply.svg') }}" alt="canada protection plan">
                </div>
                <div class="tw-text-center tw-mb-4 lg:tw-mb-0 tw-px-4 tw-w-1/2 md:tw-w-1/3 lg:tw-w-full">
                    <img class="tw-inline-block tw-w-full" src="{{ url('images/img-canadalife.svg') }}" alt="canada life">
                </div>
            </div>
        </div>
    </div>

    <div class="beige-background tw-py-10 md:tw-py-20">
        <div class="tw-container tw-mx-auto tw-px-4">
            <h2 class="tw-mb-10 text-blue tw-text-2xl sm:tw-text-4xl tw-font-black tw-text-center">What people are saying about TypeTrue</h2>

            <carousel
                    pagination-active-color="#FF6D80"
                    pagination-color="#DEE2E6"
                    :scroll-per-page="false"
                    :per-page="1"
                    :per-page-custom="[[320, 1], [768, 3]]"
                    :center-mode="true"
                    :loop="true">
                <slide>
                    <div class="tw-bg-white tw-shadow-md tw-p-10 tw-rounded-lg tw-mx-2 slide-item tw-h-full">
                        <div class="tw-flex tw-mb-10">
                            <img src="{{ url('images/ic-star.png') }}" alt="Star" class="tw-mr-2">
                            <img src="{{ url('images/ic-star.png') }}" alt="Star" class="tw-mr-2">
                            <img src="{{ url('images/ic-star.png') }}" alt="Star" class="tw-mr-2">
                            <img src="{{ url('images/ic-star.png') }}" alt="Star" class="tw-mr-2">
                            <img src="{{ url('images/ic-star.png') }}" alt="Star" class="tw-mr-2">
                        </div>

                        <p class="tw-text-gray tw-mb-4 tw-text-lg">I was able to compare prices for different coverage and it was awesome! The real value was knowing i have the information and confidence when purchasing term insurance. This has been a life saver for Type 2 Diabetics like me.</p>

                        <p class="tw-font-black tw-text-xl">Arkhe Sorde Salcedo</p>
                    </div>
                </slide>

                <slide>
                    <div class="tw-bg-white tw-shadow-md tw-p-10 tw-rounded-lg tw-mx-2 slide-item tw-h-full">
                        <div class="tw-flex tw-mb-10">
                            <img src="{{ url('images/ic-star.png') }}" alt="Star" class="tw-mr-2">
                            <img src="{{ url('images/ic-star.png') }}" alt="Star" class="tw-mr-2">
                            <img src="{{ url('images/ic-star.png') }}" alt="Star" class="tw-mr-2">
                            <img src="{{ url('images/ic-star.png') }}" alt="Star" class="tw-mr-2">
                            <img src="{{ url('images/ic-star.png') }}" alt="Star" class="tw-mr-2">
                        </div>

                        <p class="tw-text-gray tw-mb-4 tw-text-lg">I worked with TypeTrue and found them very helpful and responsive. I would highly recommend them for your diabetic life insurance needs!</p>

                        <p class="tw-font-black tw-text-xl">Tina</p>
                    </div>
                </slide>

                <slide>
                    <div class="tw-bg-white tw-shadow-md tw-p-10 tw-rounded-lg tw-mx-2 slide-item tw-h-full">
                        <div class="tw-flex tw-mb-10">
                            <img src="{{ url('images/ic-star.png') }}" alt="Star" class="tw-mr-2">
                            <img src="{{ url('images/ic-star.png') }}" alt="Star" class="tw-mr-2">
                            <img src="{{ url('images/ic-star.png') }}" alt="Star" class="tw-mr-2">
                            <img src="{{ url('images/ic-star.png') }}" alt="Star" class="tw-mr-2">
                            <img src="{{ url('images/ic-star-off.png') }}" alt="Star" class="tw-mr-2">
                        </div>

                        <p class="tw-text-gray tw-mb-4 tw-text-lg">When my father turned 60, I was put in charge of helping him get his retirement plan in order - which included his life insurance. My pops opted out of ever finding something for himself, since most agents wouldn’t even consider a type-2 diabetic with spotty health.</p>

                        <p class="tw-font-black tw-text-xl">Alan Rooke</p>
                    </div>
                </slide>
            </carousel>
        </div>
    </div>

    <div class="tw-container tw-mx-auto tw-px-4 tw-py-10 md:tw-py-20">
        <h4 class="text-blue tw-text-2xl sm:tw-text-4xl tw-font-black tw-mb-10 tw-text-center">Popular Questions</h4>

        <el-collapse class="tw-mb-10 md:tw-mb-20 tw-border-0">
            <el-collapse-item class="accent-background tw-rounded-lg tw-px-10 tw-py-5 tw-mb-5">
                <template slot="title">
                    <div class="tw-flex tw-items-center tw-flex-row-reverse tw-justify-between tw-w-full">
                        <img src="{{ url('images/btn-plus.png') }}" alt="Open question" class="el-icon-plus">

                        <img src="{{ url('images/btn-minus.png') }}" alt="Close question" class="el-icon-minus">

                        <span class="tw-font-semibold tw-text-lg md:tw-text-2xl tw-leading-none tw-text-gray tw-mr-4">Why should I choose TypeTrue?</span>
                    </div>
                </template>

                <p class="tw-text-gray tw-text-lg">
                    TypeTrue’s mission is to help type 2 diabetics avoid overpaying for life insurance. While other insurance providers may offer insurance to diabetics, they consider all diabetics to be in the same high-risk category, and charge heavy premiums as a result. Our approach takes into consideration your specific diabetes profile (such as A1C) to get you the lowest possible rate for life insurance. Our insurance advisors understand the challenges diabetics face when trying to find great life insurance coverage. They work with you to get an insurance policy comparable to policies for non-diabetics from leading Canadian providers.
                </p>
            </el-collapse-item>

            <el-collapse-item class="accent-background tw-rounded-lg tw-px-10 tw-py-5 tw-mb-5">
                <template slot="title">
                    <div class="tw-flex tw-items-center tw-flex-row-reverse tw-justify-between tw-w-full">
                        <img src="{{ url('images/btn-plus.png') }}" alt="Open question" class="el-icon-plus">

                        <img src="{{ url('images/btn-minus.png') }}" alt="Close question" class="el-icon-minus">

                        <span class="tw-font-semibold tw-text-lg md:tw-text-2xl tw-leading-none tw-text-gray tw-mr-4">What companies does TypeTrue represent?</span>
                    </div>
                </template>

                <p class="tw-text-gray tw-text-lg">
                    TypeTrue works with all of the leading Canadian insurance providers including Manulife, Sun Life, RBC Life Insurance, ScotiaLife, Standard Life, TD Life, Canada Life, etc. This is all facilitated by registered
                    <a href="https://www.ibac.ca/" target="_blank">Insurance Brokers</a>.
                </p>
            </el-collapse-item>

            <el-collapse-item class="accent-background tw-rounded-lg tw-px-10 tw-py-5 tw-mb-5">
                <template slot="title">
                    <div class="tw-flex tw-items-center tw-flex-row-reverse tw-justify-between tw-w-full">
                        <img src="{{ url('images/btn-plus.png') }}" alt="Open question" class="el-icon-plus">

                        <img src="{{ url('images/btn-minus.png') }}" alt="Close question" class="el-icon-minus">

                        <span class="tw-font-semibold tw-text-lg md:tw-text-2xl tw-leading-none tw-text-gray tw-mr-4">How confidential is my information?</span>
                    </div>
                </template>

                <p class="tw-text-gray tw-text-lg">
                    Your information will remain completely confidential. No one will have access to your information other than TypeTrue and the insurer you decide to use. We never sell your name, address, or personal information. Click here to view our <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>.
                </p>
            </el-collapse-item>

            <el-collapse-item class="accent-background tw-rounded-lg tw-px-10 tw-py-5 tw-mb-5">
                <template slot="title">
                    <div class="tw-flex tw-items-center tw-flex-row-reverse tw-justify-between tw-w-full">
                        <img src="{{ url('images/btn-plus.png') }}" alt="Open question" class="el-icon-plus">

                        <img src="{{ url('images/btn-minus.png') }}" alt="Close question" class="el-icon-minus">

                        <span class="tw-font-semibold tw-text-lg md:tw-text-2xl tw-leading-none tw-text-gray tw-mr-4">Do you just give price quotes?</span>
                    </div>
                </template>

                <p class="tw-text-gray tw-text-lg">
                    TypeTrue does far more than just give you a price quote. We handle every step of the buying process and do it all at your convenience. Unlike some online insurance services, which simply generate leads and sell your contact information to the highest-bidding agents, we are a full-service agency that helps you throughout the process.
                </p>
            </el-collapse-item>

            <el-collapse-item class="accent-background tw-rounded-lg tw-px-10 tw-py-5 tw-mb-5">
                <template slot="title">
                    <div class="tw-flex tw-items-center tw-flex-row-reverse tw-justify-between tw-w-full">
                        <img src="{{ url('images/btn-plus.png') }}" alt="Open question" class="el-icon-plus">

                        <img src="{{ url('images/btn-minus.png') }}" alt="Close question" class="el-icon-minus">

                        <span class="tw-font-semibold tw-text-lg md:tw-text-2xl tw-leading-none tw-text-gray tw-mr-4">How does TypeTrue pick the companies it represents?</span>
                    </div>
                </template>

                <p class="tw-text-gray tw-text-lg">
                    TypeTrue regularly monitors the products, prices and services of highly rated insurance companies. Different insurance companies have different standards for their underwriting classifications. Each company can be more or less competitive depending upon such factors as policy size, age range, health factors and lifestyle. TypeTrue selects those insurers who have the most competitive products for the widest range of underwriting factors for type 2 diabetics.
                </p>
            </el-collapse-item>

            <el-collapse-item class="accent-background tw-rounded-lg tw-px-10 tw-py-5 tw-mb-5">
                <template slot="title">
                    <div class="tw-flex tw-items-center tw-flex-row-reverse tw-justify-between tw-w-full">
                        <img src="{{ url('images/btn-plus.png') }}" alt="Open question" class="el-icon-plus">

                        <img src="{{ url('images/btn-minus.png') }}" alt="Close question" class="el-icon-minus">

                        <span class="tw-font-semibold tw-text-lg md:tw-text-2xl tw-leading-none tw-text-gray tw-mr-4">How much life insurance do I need?</span>
                    </div>
                </template>

                <p class="tw-text-gray tw-text-lg">
                    Since life insurance replaces lost income if something happens to you, the proceeds from your policy should be enough to cover immediate expenses as well as to provide continuous income for your beneficiaries. Most financial planners recommend coverage that’s 5 to 10 times your annual income. For example, if you make $50,000, you might consider coverage between $250,000 and $500,000. If you’re younger and just starting a family, you might need as much as 15 times your income to provide you with sufficient coverage. Since individual needs vary, we recommend that you speak to one of our licensed agents to help you determine what’s right for you.
                </p>
            </el-collapse-item>

            <el-collapse-item class="accent-background tw-rounded-lg tw-px-10 tw-py-5 tw-mb-5">
                <template slot="title">
                    <div class="tw-flex tw-items-center tw-flex-row-reverse tw-justify-between tw-w-full">
                        <img src="{{ url('images/btn-plus.png') }}" alt="Open question" class="el-icon-plus">

                        <img src="{{ url('images/btn-minus.png') }}" alt="Close question" class="el-icon-minus">

                        <span class="tw-font-semibold tw-text-lg md:tw-text-2xl tw-leading-none tw-text-gray tw-mr-4">What’s the difference between term and whole life insurance?</span>
                    </div>
                </template>

                <p class="tw-text-gray tw-text-lg">
                    Term life insurance is the most affordable type of life insurance, which is why it is the only type of policy we recommend. It covers you for a particular period of time, typically 10, 15, 20, or 30 years. A whole life insurance policy covers you for your whole life and has a cash value. Part of the premium you pay covers your insurance, and some of it goes into the policy’s cash value.
                </p>
            </el-collapse-item>

            <el-collapse-item class="accent-background tw-rounded-lg tw-px-10 tw-py-5 tw-mb-5">
                <template slot="title">
                    <div class="tw-flex tw-items-center tw-flex-row-reverse tw-justify-between tw-w-full">
                        <img src="{{ url('images/btn-plus.png') }}" alt="Open question" class="el-icon-plus">

                        <img src="{{ url('images/btn-minus.png') }}" alt="Close question" class="el-icon-minus">

                        <span class="tw-font-semibold tw-text-lg md:tw-text-2xl tw-leading-none tw-text-gray tw-mr-4">How do I apply for a policy?</span>
                    </div>
                </template>

                <p class="tw-text-gray tw-text-lg">
                    You can call one of our personal representatives toll-free at <span class="tw-font-semibold text-blue">1-877-897-3878</span>, or you can fill out our online life insurance application request form. A personal representative will then review your profile and get your application started.
                </p>
            </el-collapse-item>

            <el-collapse-item class="accent-background tw-rounded-lg tw-px-10 tw-py-5 tw-mb-5">
                <template slot="title">
                    <div class="tw-flex tw-items-center tw-flex-row-reverse tw-justify-between tw-w-full">
                        <img src="{{ url('images/btn-plus.png') }}" alt="Open question" class="el-icon-plus">

                        <img src="{{ url('images/btn-minus.png') }}" alt="Close question" class="el-icon-minus">

                        <span class="tw-font-semibold tw-text-lg md:tw-text-2xl tw-leading-none tw-text-gray tw-mr-4">Do I have to take a medical exam?</span>
                    </div>
                </template>

                <p class="tw-text-gray tw-text-lg">
                    A brief paramedic exam is required in order to qualify for the best possible price on life insurance. The exam is at no cost to you and can take place at your home or office at your convenience. It usually takes less than 20 minutes. We also offer an express underwriting policy that does not entail a medical exam but has a somewhat higher cost than that of a fully underwritten policy.
                </p>
            </el-collapse-item>

            <el-collapse-item class="accent-background tw-rounded-lg tw-px-10 tw-py-5 tw-mb-5">
                <template slot="title">
                    <div class="tw-flex tw-items-center tw-flex-row-reverse tw-justify-between tw-w-full">
                        <img src="{{ url('images/btn-plus.png') }}" alt="Open question" class="el-icon-plus">

                        <img src="{{ url('images/btn-minus.png') }}" alt="Close question" class="el-icon-minus">

                        <span class="tw-font-semibold tw-text-lg md:tw-text-2xl tw-leading-none tw-text-gray tw-mr-4">I already have a life insurance policy. What should I do with it?</span>
                    </div>
                </template>

                <p class="tw-text-gray tw-text-lg">
                    If you wish to replace an existing life insurance policy with new one through TypeTrue, you should not cancel your old coverage until you have received, reviewed and accepted your new policy. Cancel your old policy after all final requirements for the new one are complete and you have received notification from the insurance company that your policy is in force. It’s wise to consult an advisor if you are considering cancelling a whole life policy that has a cash value as its surrender may involve  penalties and tax consequences.
                </p>
            </el-collapse-item>
        </el-collapse>

        <div class="tw-text-center">
            <p class="tw-mb-10 md:tw-mb-20 tw-text-lg tw-text-gray">Didn’t find the answer? Call us and we will help <span class="tw-text-xl tw-text-primary tw-font-black">1-877-897-3878</span></p>

            <a plain class="custom-button homepage-selection tw-mr-2 tw-mb-2 tw-text-center tw-px-10 tw-py-2 text-lg tw-inline-block tw-rounded-full" href="{{ url('/what-is-your-gender') }}">
                <span class="tw-font-black tw-text-xl sm:tw-text-2xl">Get your FREE quote</span>
            </a>
        </div>
    </div>
@endsection

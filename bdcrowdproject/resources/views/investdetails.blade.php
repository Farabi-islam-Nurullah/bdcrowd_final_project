@extends('layouts.app')

@section('content')

 <!--============= invest intro section start ===============-->
 <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center py-3 py-md-5">
                    <h2>{{$project->project_name}}</h2>
                    <p>Address:{{$project->address}}</p>
                </div>
            </div>
        </div>
        <!--============= invest intro section end ===============-->

        <!--============= invest hero section start ===============-->
        <div class="py-3 py-md-5 bg-first">
            <div class="container py-3 py-md-5">
                <div class=" row">
                    <div class="preview col-md-5">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="inv-one" role="tabpanel" aria-labelledby="inv-one-tab">
                                @if($project->video == true)

                                {!!$project->video!!}
                          
                                @else
                                <img class="card-img-top" src="{{asset('public/media/project/'.$project->image_one)}}">
                              

                                @endif

                               
                            </div>
                            <div class="tab-pane" id="inv-two" role="tabpanel" aria-labelledby="inv-two-tab">
                                <img src="{{asset('public/media/project/'.$project->image_two)}}" alt="">
                            </div>
                            <div class="tab-pane " id="inv-three" role="tabpanel" aria-labelledby="inv-three-tab">
                                <img src="{{asset('public/media/project/'.$project->image_three)}}" alt="">
                            </div>
                            <div class="tab-pane " id="inv-four" role="tabpanel" aria-labelledby="inv-four-tab">
                                <img src="{{asset('public/media/project/'.$project->image_four)}}" alt="">
                            </div>
                        </div>

                        <ul class="preview-thumbnail nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="inv-one-tab" data-bs-toggle="tab" data-bs-target="#inv-one" role="tab" aria-controls="inv-one" aria-selected="true">
                                    <img src="{{asset('public/media/project/'.$project->image_one)}}" alt="">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="inv-two-tab" data-bs-toggle="tab" data-bs-target="#inv-two" role="tab" aria-controls="inv-two" aria-selected="false">
                                    <img src="{{asset('public/media/project/'.$project->image_two)}}" alt="">

                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="inv-three-tab" data-bs-toggle="tab" data-bs-target="#inv-three" role="tab" aria-controls="inv-three" aria-selected="false">
                                    <img src="{{asset('public/media/project/'.$project->image_three)}}" alt="">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="inv-four-tab" data-bs-toggle="tab" data-bs-target="#inv-four" role="tab" aria-controls="inv-four" aria-selected="false">
                                    <img src="{{asset('public/media/project/'.$project->image_four)}}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <div class=" project-card-1">
                            <ul class="list-unstyled pb-3">
                                <li class="d-flex justify-content-between">
                                    <div>
                                        <span></span>
                                        <a class="text-decoration-none" href=""></a>
                                    </div>
                                    <div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span>{{$project->address}}</span>
                                    </div>
                                </li>
                            </ul>

                            <p class="text-end">Interested: 90%</p>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-progress" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <p class="text-end">Raised: 20%</p>
                            <div class="progress mb-5">
                                <div class="progress-bar bg-progress" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <ul class="list-unstyled project-info">
                                <li class="d-flex justify-content-between  py-3">
                                    <span>Unit Price</span>
                                    <span>BDT: {{$project->unit_price}}</span>
                                </li>
                                <li class="d-flex justify-content-between py-3">
                                    <span>Unit quantity</span>
                                    <span>{{$project->unit_quantity}}</span>
                                </li>
                                <li class="d-flex justify-content-between py-3">
                                    <span>Maximum Goal</span>
                                    <span>BDT: {{$project->max_goal}}</span>
                                </li>
                                <li class="d-flex justify-content-between py-3">
                                    <span>Raised</span>
                                    <span>BDT:  63,000,000</span>
                                </li>
                                <li class="d-flex justify-content-between py-3">
                                    <span>Time Remaining</span>
                                    <span>{{$project->rtime}}</span>
                                </li>

                                <p class="pt-3">Minimum Investment is BDT: 1,00,000/-</p>

                                <li class="d-flex justify-content-end align-items-center ">


                                    <a href="tel:+880 1716 715 728" class="btn btn-first"> contact us</a>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============= invest hero section end ===============-->

        <!--============= invest details section end ===============-->
        <div class="">
            <div class="invest-details-header">
                <div class="container">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <!------- invest Overview  button ---------->
                            <button class="nav-link active" id="nav-Overview-tab" data-bs-toggle="tab" data-bs-target="#nav-Overview" type="button" role="tab" aria-controls="nav-Overview" aria-selected="true">Overview</button>

                            <!------- invest Details  button ---------->
                            <button class="nav-link" id="nav-Details-tab" data-bs-toggle="tab" data-bs-target="#nav-Details" type="button" role="tab" aria-controls="nav-Details" aria-selected="false">Details</button>


                            <!------- invest FAQ  button ---------->
                            <button class="nav-link" id="nav-faq-tab" data-bs-toggle="tab" data-bs-target="#nav-faq" type="button" role="tab" aria-controls="nav-faq" aria-selected="false">FAQ</button>

                            <!------- invest Updates  button ---------->
                            <button class="nav-link" id="nav-updates-tab" data-bs-toggle="tab" data-bs-target="#nav-updates" type="button" role="tab" aria-controls="nav-updates" aria-selected="false">Location</button>



                        </div>
                    </nav>
                </div>
            </div>
            <div class="container py-3 py-md-5 ">
                <div class="tab-content" id="nav-tabContent">
                    <!------------- invest Overview ------------->
                    <div class="tab-pane fade show active" id="nav-Overview" role="tabpane2" aria-labelledby="nav-Overview-tab">
                    

                    {!!$project->overview !!}
                 
                           
                    </div>
                    <!------------- invest Details ------------->
                    <div class="tab-pane fade" id="nav-Details" role="tabpane2" aria-labelledby="nav-Details-tab">
                    {!!$project->details !!}
                    </div>

                    <!------------- invest FAQ ------------->
                    <div class="tab-pane fade" id="nav-faq" role="tabpane2" aria-labelledby="nav-faq-tab">
                        <h2>Frequently Asked Questions</h2>
                        <div class="accordion accordion-flush pt-3 " id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        এটাকি প্লট নাকি ফ্লাট?
                        </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        উত্তর: ফ্লাট,

                                        <span class="py-3 d-block text-one">Last updated: Sat, May 1 2021 10:49 PM UTC +06:00</span>
                                    </div>

                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        টোটাল কতটাকা দিতে হবে?
                        </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">উত্তর: ১৪০০ স্কয়ার ফিট এর ফ্লাটের জন্য ৪৯ লক্ষ টাকা
                                        <span class="py-3 d-block text-one">Last updated: Sat, May 1 2021 10:49 PM UTC +06:00</span>
                                    </div>

                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        টোটাল প্রজেক্ট এরিয়া কতটুকু?
                        </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">উত্তর: ৩০ বিঘা</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        কত তলা বিল্ডিং হবে?
                        </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">উত্তর: আমাদের বর্তমান মাস্টারপ্লান অনুযায়ী ১৮ তলা।</div>
                                </div>
                            </div>



                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
                                        প্রজেক্ট এর ফ্যাসিলিটিসগুলি কি ফ্রি নাকি পে করতে হবে?
                        </button>
                                </h2>
                                <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">উত্তর: সম্পূর্ণ ফ্রি না, নাম মাত্র একটা চার্জ নেয়া হবে।</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
                                        বুকিং মানি কত?
                        </button>
                                </h2>
                                <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">উত্তর: এক লক্ষ টাকা মাাত্র</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
                                        শেয়ার প্রাইস কত?
                        </button>
                                </h2>
                                <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">উত্তর: সাড়ে চার লক্ষ টাকা</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse14" aria-expanded="false" aria-controls="flush-collapse14">
                                        পেমেন্ট শিডিউল কি?
                        </button>
                                </h2>
                                <div id="flush-collapse14" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">উত্তর: বুকিং মানি ১ লক্ষ টাকা, এর পর তিন কিস্তিতে আরো সাড়ে তিন লক্ষ টাকা প্রদান করলে আমাদের পক্ষ থেকে আপনাকে জমির রেজিস্ট্রি দেওয়া হবে। বাকি টাকা আপনি ৮ বছর ব্যাপী তথা ৯৬টি কিস্তিতে সমান হারে প্রদান করতে পারবেন, অথবা
                                        <br><br> প্রথম তিন বছর প্রতি বছর দুটি কিস্তিতে ৩০ হাজার টাকা করে দিতে পারবেন। প্রজেক্ট এর কন্সট্রাকশন এর কাজ শুরু হলে কাজের প্রগ্রেস অনুযায়ী শেয়ার প্রতি যেটা আসবে সেটি প্রদানের মাধ্যমে বাকি টাকা পরিশোধ করার সুযোগ
                                        রয়েছে।
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse15" aria-expanded="false" aria-controls="flush-collapse15">
                                        প্রজেক্ট হ্যান্ডওভার ডেট কবে?
                        </button>
                                </h2>
                                <div id="flush-collapse15" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">উত্তর: সম্ভব্য সাল: ২০২৮</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse17" aria-expanded="false" aria-controls="flush-collapse17">
                                        শেয়ার এর বিপরীতে কি ধরনের ডকুমেন্টস দেয়া হবে?
                        </button>
                                </h2>
                                <div id="flush-collapse17" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">উত্তর: প্রতি শেয়ার মূল্য সাড়ে চার লক্ষ টাকা প্রদান করলে আপনার নামে জমির সাব-কবলা রেজিষ্ট্রি দেওয়া হবে।</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse18" aria-expanded="false" aria-controls="flush-collapse18">
                                        প্রজেক্ট ডিটেইলস জানাবেন প্লিজ
                        </button>
                                </h2>
                                <div id="flush-collapse18" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">উত্তর: অনুগ্রহ করে প্রজেক্ট ডিটেইস ট্যাবটি দেখুন অথবা আমাদের সাথে যোগাযোগ করুন আরো বিস্তারিত জানার জন্য। প্রয়োজনে আমাদের অফিস ভিজিট করতে পারেন।</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse19" aria-expanded="false" aria-controls="flush-collapse19">
                                        আপনাদের অফিস এর এড্রেস কি?
                        </button>
                                </h2>
                                <div id="flush-collapse19" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">উত্তর: অনুগ্রহ করে Contact us পেইজটি দেখুন, বিস্তারিত দেওয়া আছে।</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse20" aria-expanded="false" aria-controls="flush-collapse20">
                                        আপনাদের অফিস আওয়ার কখন?
                        </button>
                                </h2>
                                <div id="flush-collapse20" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">উত্তর: ৯ টা থেকে ৫টা</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse21" aria-expanded="false" aria-controls="flush-collapse21">
                                        আমি কি প্রজেক্ট ভিজিট করতে পারি? কিভাবে?
                        </button>
                                </h2>
                                <div id="flush-collapse21" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">উত্তর: অবশ্যই। অনুগ্রহ করে আমাদের সাথে যোগাযোগ করে আপনি কবে ভিজিটে যেতে চাইছেন সেটা জানান। নিদৃষ্ট দিনে নিদৃষ্ট সময়ে আপনাদের অফিসে এলে আমরা আপনাকে প্রজেক্ট ভিজিট করতে নিয়ে যাব।</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse23" aria-expanded="false" aria-controls="flush-collapse23">
                                        সাপ্তাহিক বা অন্যান্য ছুটির দিনগুলিতে কি প্রজেক্ট অথবা অফিস ভিজিট করার সুযোগ আছে কিনা?
                        </button>
                                </h2>
                                <div id="flush-collapse23" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">উত্তর: জ্বী আছে। আপনাদের সুবিধার কথা বিবেচনা করে ছুটির দিনগুলিতে আমাদের অফিস খোলা থাকবে।</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse25" aria-expanded="false" aria-controls="flush-collapse25">
                                        আমি কি আপনাদের কারো সাথে কথা বলতে পারি?
                        </button>
                                </h2>
                                <div id="flush-collapse25" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">উত্তর: অবশ্যই। Contact us পেইজে আমাদের সাথো যোগাযোগ করার বিস্তারিত দেওয়া আছে। এছাড়া আপনি আমাদের WhatsApp এ গ্রুপে নিচের লিংক এ ক্লিক করার মাধ্যমে জয়েন করতে পারেন। সেখানে আপনি আপনার যে কোন প্রশ্ন করতে পারেন, অথবা অন্যদের
                                        করা প্রশ্নের উত্তর থেকে আপনার সম্ভব্য প্রশ্নের উত্তর পেতে পারেন।</div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!------------- invest Updates ------------->
                    <div class="tab-pane fade" id="nav-updates" role="tabpane2" aria-labelledby="nav-updates-tab">

                        <div class=" my-3 my-md-4 p-3 p-md-5">
                        {!!$project->location !!}
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--============= invest details section end ===============-->

    
@endsection


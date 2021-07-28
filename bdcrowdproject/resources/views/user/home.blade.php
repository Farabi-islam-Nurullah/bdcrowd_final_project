@extends('layouts.app')

@section('content')


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57173176.00670385!2d99.99999999999999!3d29!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1625798386613!5m2!1sen!2sbd"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <img class="user-profile-img mb-3" src="assets/images/persons/OmorFaisal.jpg" alt="">
                    <h5>Forhadul Islam</h5>
                    <p>There are many variations of passages</p>
                    <a class="btn btn-first" href="{{route('user.edit.profile')}}">Edite Profile</a>
                </div>
            </div>
        </div>
        <!--============= user profile start ===============-->
        <div class="mt-4">
            <div class="invest-details-header">
                <div class="container ">
                    <nav>
                        <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                            <!-------user about button ---------->
                            <button class="nav-link active" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about" type="button" role="tab" aria-controls="nav-about" aria-selected="true">About</button>

                            <!------- user interested  button ---------->
                            <button class="nav-link" id="nav-interested-tab" data-bs-toggle="tab" data-bs-target="#nav-interested" type="button" role="tab" aria-controls="nav-interested" aria-selected="false">Interested</button>


                            <!------- user investu  button ---------->
                            <button class="nav-link" id="nav-investu-tab" data-bs-toggle="tab" data-bs-target="#nav-investu" type="button" role="tab" aria-controls="nav-investu" aria-selected="false">Invest</button>

                            <!------- invest payoment  button ---------->
                            <button class="nav-link" id="nav-payoment-tab" data-bs-toggle="tab" data-bs-target="#nav-payoment" type="button" role="tab" aria-controls="nav-payoment" aria-selected="false">payoment</button>


                        </div>
                    </nav>
                </div>
            </div>
            <div class="container py-3 py-md-5 ">
                <div class="tab-content" id="nav-tabContent">
                    <!------------- about ------------->
                    <div class="tab-pane fade show active" id="nav-about" role="tabpane2" aria-labelledby="nav-about-tab">


                        <div class="row w-75 m-auto">
                            <div class="col-md-4">
                                Biography
                            </div>
                            <div class="col-md-8">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum minus doloribus iste repellat modi totam ex quasi debitis! Architecto cupiditate aperiam accusantium, iusto laboriosam ipsa eius rerum ut consequatur totam.
                            </div>
                        </div>
                    </div>



                    <!------------- user interested ------------->
                    <div class="tab-pane fade" id="nav-interested" role="tabpane2" aria-labelledby="nav-interested-tab">

                        <!--============= interested project section start ===============-->
                        <div class=" ">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 my-2 my-md-4 ">
                                        <div class="card project-card">
                                            <img class="founded-quet" src="assets/images/fundcomming.svg" alt="">
                                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/qOE9MpozKWA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <div class="card-body ">
                                                <h5 class="card-title py-3"> Medicina Hospital Complex </h5>

                                                <ul class="list-unstyled">
                                                    <li class="d-flex justify-content-between">
                                                        <div>
                                                            <span></span>
                                                            <a class="text-decoration-none" href=""></a>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                            <span>Dhaka, Bangladesh</span>
                                                        </div>
                                                    </li>
                                                </ul>

                                                <p class="text-end">Interested: 00%</p>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-progress" role="progressbar" style="width: 00%" aria-valuenow="00" aria-valuemin="0" aria-valuemax="00"></div>
                                                </div>

                                                <p class="text-end">Raised: 00%</p>
                                                <div class="progress mb-5">
                                                    <div class="progress-bar bg-progress" role="progressbar" style="width: 00%" aria-valuenow="00" aria-valuemin="0" aria-valuemax="00"></div>
                                                </div>

                                                <ul class="list-unstyled project-info">
                                                    <li class="d-flex justify-content-between  py-3">
                                                        <span>Unit Price</span>
                                                        <span>BDT: 1,000,000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Unit quantity</span>
                                                        <span>10000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Maximum Goal</span>
                                                        <span>BDT:10,0000000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Raised</span>
                                                        <span>BDT:00</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Time Remaining</span>
                                                        <span>0 day(s) to go</span>
                                                    </li>
                                                    <li class="d-flex justify-content-end align-items-center pt-4">

                                                        <a href="#"> <button class="btn btn-first">View Details</button></a>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 my-2 my-md-4 ">
                                        <div class="card project-card">
                                            <img class="founded-quet" src="assets/images/fundrising.svg" alt="">
                                            <img class="card-img-top" src="assets/images/dreem_gardenia.jpeg">
                                            <div class="card-body ">
                                                <h5 class="card-title py-3"> Dream Maison Gardenia</h5>

                                                <ul class="list-unstyled">
                                                    <li class="d-flex justify-content-between">
                                                        <div>
                                                            <span></span>
                                                            <a class="text-decoration-none" href=""></a>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                            <span>Dhaka, Bangladesh</span>
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
                                                        <span>BDT: 4,50,000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Unit quantity</span>
                                                        <span>700</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Maximum Goal</span>
                                                        <span>BDT: 315,000,000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Raised</span>
                                                        <span>BDT: 63,000,000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Time Remaining</span>
                                                        <span>Indimand</span>
                                                    </li>
                                                    <li class="d-flex justify-content-end align-items-center pt-4">

                                                        <a href="investdetails.html"> <button class="btn btn-first">View Details</button></a>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 my-2 my-md-4 ">
                                        <div class="card project-card">
                                            <img class="founded-quet" src="assets/images/fullyfunded.svg" alt="">
                                            <img class="card-img-top" src="assets/images/dream-maison-.jpg">
                                            <div class="card-body ">
                                                <h5 class="card-title py-3"> Dream Maison Condominium </h5>

                                                <ul class="list-unstyled">
                                                    <li class="d-flex justify-content-between">
                                                        <div>
                                                            <span></span>
                                                            <a class="text-decoration-none" href=""></a>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                            <span>Dhaka, Bangladesh</span>
                                                        </div>
                                                    </li>
                                                </ul>

                                                <p class="text-end">Interested: 133%</p>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-progress" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                                <p class="text-end">Raised: 100%</p>
                                                <div class="progress mb-5">
                                                    <div class="progress-bar bg-progress" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                                <ul class="list-unstyled project-info">
                                                    <li class="d-flex justify-content-between  py-3">
                                                        <span>Unit Price</span>
                                                        <span>BDT: 5,27,000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Unit quantity</span>
                                                        <span>72</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Maximum Goal</span>
                                                        <span>BDT: 37,944,000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Raised</span>
                                                        <span>BDT:37,944,000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Time Remaining</span>
                                                        <span>Fully Funded</span>
                                                    </li>
                                                    <li class="d-flex justify-content-end align-items-center pt-4">

                                                        <a href="#"> <button class="btn btn-first">View Details</button></a>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>
                        </div>
                        <!--============= interested project section end ===============-->

                    </div>

                    <!------------- invest investu ------------->
                    <div class="tab-pane fade" id="nav-investu" role="tabpane2" aria-labelledby="nav-investu-tab">
                        <!--============= invest project section start ===============-->
                        <div class=" ">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 my-2 my-md-4 ">
                                        <div class="card project-card">
                                            <img class="founded-quet" src="assets/images/fundcomming.svg" alt="">
                                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/qOE9MpozKWA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <div class="card-body ">
                                                <h5 class="card-title py-3"> Medicina Hospital Complex </h5>

                                                <ul class="list-unstyled">
                                                    <li class="d-flex justify-content-between">
                                                        <div>
                                                            <span></span>
                                                            <a class="text-decoration-none" href=""></a>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                            <span>Dhaka, Bangladesh</span>
                                                        </div>
                                                    </li>
                                                </ul>

                                                <p class="text-end">Interested: 00%</p>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-progress" role="progressbar" style="width: 00%" aria-valuenow="00" aria-valuemin="0" aria-valuemax="00"></div>
                                                </div>

                                                <p class="text-end">Raised: 00%</p>
                                                <div class="progress mb-5">
                                                    <div class="progress-bar bg-progress" role="progressbar" style="width: 00%" aria-valuenow="00" aria-valuemin="0" aria-valuemax="00"></div>
                                                </div>

                                                <ul class="list-unstyled project-info">
                                                    <li class="d-flex justify-content-between  py-3">
                                                        <span>Unit Price</span>
                                                        <span>BDT: 1,000,000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Unit quantity</span>
                                                        <span>10000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Maximum Goal</span>
                                                        <span>BDT:10,0000000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Raised</span>
                                                        <span>BDT:00</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Time Remaining</span>
                                                        <span>0 day(s) to go</span>
                                                    </li>
                                                    <li class="d-flex justify-content-end align-items-center pt-4">

                                                        <a href="#"> <button class="btn btn-first">View Details</button></a>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 my-2 my-md-4 ">
                                        <div class="card project-card">
                                            <img class="founded-quet" src="assets/images/fundrising.svg" alt="">
                                            <img class="card-img-top" src="assets/images/dreem_gardenia.jpeg">
                                            <div class="card-body ">
                                                <h5 class="card-title py-3"> Dream Maison Gardenia</h5>

                                                <ul class="list-unstyled">
                                                    <li class="d-flex justify-content-between">
                                                        <div>
                                                            <span></span>
                                                            <a class="text-decoration-none" href=""></a>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                            <span>Dhaka, Bangladesh</span>
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
                                                        <span>BDT: 4,50,000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Unit quantity</span>
                                                        <span>700</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Maximum Goal</span>
                                                        <span>BDT: 315,000,000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Raised</span>
                                                        <span>BDT: 63,000,000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Time Remaining</span>
                                                        <span>Indimand</span>
                                                    </li>
                                                    <li class="d-flex justify-content-end align-items-center pt-4">

                                                        <a href="investdetails.html"> <button class="btn btn-first">View Details</button></a>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 my-2 my-md-4 ">
                                        <div class="card project-card">
                                            <img class="founded-quet" src="assets/images/fullyfunded.svg" alt="">
                                            <img class="card-img-top" src="assets/images/dream-maison-.jpg">
                                            <div class="card-body ">
                                                <h5 class="card-title py-3"> Dream Maison Condominium </h5>

                                                <ul class="list-unstyled">
                                                    <li class="d-flex justify-content-between">
                                                        <div>
                                                            <span></span>
                                                            <a class="text-decoration-none" href=""></a>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                            <span>Dhaka, Bangladesh</span>
                                                        </div>
                                                    </li>
                                                </ul>

                                                <p class="text-end">Interested: 133%</p>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-progress" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                                <p class="text-end">Raised: 100%</p>
                                                <div class="progress mb-5">
                                                    <div class="progress-bar bg-progress" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                                <ul class="list-unstyled project-info">
                                                    <li class="d-flex justify-content-between  py-3">
                                                        <span>Unit Price</span>
                                                        <span>BDT: 5,27,000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Unit quantity</span>
                                                        <span>72</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Maximum Goal</span>
                                                        <span>BDT: 37,944,000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Raised</span>
                                                        <span>BDT:37,944,000</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between py-3">
                                                        <span>Time Remaining</span>
                                                        <span>Fully Funded</span>
                                                    </li>
                                                    <li class="d-flex justify-content-end align-items-center pt-4">

                                                        <a href="#"> <button class="btn btn-first">View Details</button></a>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--============= invest project section end ===============-->
                    </div>

                    <!------------- invest payoment ------------->
                    <div class="tab-pane fade" id="nav-payoment" role="tabpane2" aria-labelledby="nav-payoment-tab">

                        <table class="table text-center  table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">01</th>
                                    <td>02-02-21</td>
                                    <td class="w-75">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an </td>
                                    <td>10,00,000/-</td>
                                </tr>
                                <tr>
                                    <th scope="row">02</th>
                                    <td>02-02-21</td>
                                    <td class="w-75">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an </td>
                                    <td>10,00,000/-</td>
                                </tr>
                                <tr>
                                    <th scope="row">03</th>
                                    <td>02-02-21</td>
                                    <td class="w-75">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an </td>
                                    <td>10,00,000/-</td>
                                </tr>
                                <tr>
                                    <th scope="row">04</th>
                                    <td>02-02-21</td>
                                    <td class="w-75">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an </td>
                                    <td>10,00,000/-</td>
                                </tr>
                                <tr>
                                    <th scope="row">05</th>
                                    <td>02-02-21</td>
                                    <td class="w-75">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an </td>
                                    <td>10,00,000/-</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


@endsection
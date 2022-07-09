
@extends('template')


@section('body')


<!-- Crime Report Form Start -->
<div class="container mt-5">
            <form method="POST" action="{{ route('crime')}}"  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 float-left">
                        <div class="crime">Name:
                            <div class="urdu">:نام</div>
                            <input type="text" name="name" placeholder="Enter Your Name">
                        </div>
                        <div class="crime">Location:
                            <div class="urdu">:مقام</div>
                            <input type="text" name="location" placeholder="Enter Location">
                        </div>
                        <div class="crime">Date:
                            <div class="urdu">:تاریخ</div>
                            <input type="date" name="date" placeholder="Enter Location">
                        </div>
                        <div class="crime">Time:
                            <div class="urdu">:وقت</div>
                            <input type="time" name="time" placeholder="Enter Location">
                        </div>
                        <!--   Video Record Code Start  -->
                        <div class="clearfix"></div>
                        <div class="record">Record Your Video Here:</div>
                        <div id="container">
                          <video id="gum" name="video"  playsinline autoplay muted></video>
                          <video id="recorded"  playsinline loop></video>

                          <div>
                            <button id="start" type="button">Start camera</button>
                            <button id="record" type="button" disabled>Record</button>
                            <button id="play" type="button" disabled>Play</button>
                            <button id="download" type="button" disabled>Download</button>
                          </div>

                          <div>
                            <h4>Media Stream Constraints options</h4>
                            <p>
                              Echo cancellation: <input type="checkbox" id="echoCancellation" />
                            </p>
                          </div>

                          <div>
                            <span id="errorMsg"></span>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <!--   Video Record Code End  -->


                        <!--   Audio Recorder Code start here  -->
                        <!-- <div class="audio">
                            <audio id="recorder" muted hidden></audio>
                            <button id="start" Type="button">Record</button>
                            <button id="stop" Type="button">Stop Recording</button><br>
                            <span>Saved Recording</span>
                            <audio id="player" controls></audio>
                        </div>  -->
                        <!-- Audio Recorder Code End here   -->
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 float-left">
                        <div class="crimetype">Crime Type:
                            <div class="urdu">:جرم</div>
                            <select name="type">
                                <option value="Select">--------- Select ---------</option>
                                <option value="Aggravated assault">Aggravated assault --------- شدید حملہ</option>
                                <option value="Household larceny">Household larceny---------گھریلو چوری</option>
                                <option value="Personal larceny">Personal larceny ---------ذاتی چوری</option>
                                <option value="Pocket Picking">Pocket Picking ---------جیب چننا</option>
                                <option value="Arson">Arson ---------آگ لگانا</option>
                                <option value="Child Abuse">Child Abuse ---------بچوں کے ساتھ بدسلوکی</option>
                                <option value="Criminal fraud">Criminal fraud ---------مجرمانہ دھوکہ دہی</option>
                                <option value="Drug Crimes">Drug Crimes ---------منشیات کے جرائم</option>
                                <option value="Felonies(Serious type of crime)">Felonies(Serious type of crime) ---------جرم</option>
                                <option value="Gun Possession">Gun Possession ---------بندوق کا قبضہ</option>
                                <option value="kidnapping">kidnapping ---------اغوا</option>
                                <option value="Robbery">Robbery ---------ڈکیتی</option>
                                <option value="Theft">Theft ---------چوری</option>
                                <option value="Rape">Rape ---------عصمت دری</option>
                                <option value="Homicide">Homicide ---------قت ِل عام کا جرم</option>
                            </select>
                        </div>
                        <div class="area">Details of Crime:
                            <div class="urdu">:تفصیل</div>
                            <textarea name="details" rows="5" placeholder="Details of Crime"></textarea>
                        </div>
                        <div class="crime">Add Crime Image:
                            <div class="urdu">:تصویر</div>
                            <input type="file" name="pic" >
                        </div>
                        <!--   Google Map Code   -->
                        <!-- <div id="myMap"></div>
                        <input type="text" id="latitude" placeholder="Latitude">
                        <input type="text" id="longitude" placeholder="Longitude"> -->
                        <!--   Google Map Code End  -->
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="submit-btnn">
                <input type="Submit" value="SUBMIT">
                </div>
            </form>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <!-- Crime Report Form End -->
        <div class="clearfix"></div>

@endsection
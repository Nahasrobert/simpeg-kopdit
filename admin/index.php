<!-- @format -->
<?php include 'header.php' ?>
<!-- Main Menu area End-->
<!-- Start Status area -->
<?php $p = mysqli_query($con, "SELECT * FROM pegawai");
$pj = mysqli_num_rows($p);
$c = mysqli_query($con, "SELECT * FROM cuti join pegawai on pegawai.id_pegawai=cuti.id_pegawai");
$cj = mysqli_num_rows($c);
$k = mysqli_query($con, "SELECT * FROM pensiun join pegawai on pegawai.id_pegawai=pensiun.id_pegawai");
$kj = mysqli_num_rows($k);
$m = mysqli_query($con, "SELECT * FROM mutasi join pegawai on pegawai.id_pegawai=mutasi.id_pegawai");
$mj = mysqli_num_rows($m);



?>




<div class="notika-status-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter"><?php echo $pj; ?></span></h2>
                        <p>Total Pegawai</p>
                    </div>
                    <div class="sparkline-bar-stats1"><?php echo $pj; ?>,<?php echo $pj; ?>,<?php echo $pj; ?>,<?php echo $pj; ?>,<?php echo $pj; ?></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter"><?php echo $cj; ?></span></h2>
                        <p>Total Cuti</p>
                    </div>
                    <div class="sparkline-bar-stats2"><?php echo $cj; ?>,<?php echo $cj; ?>,<?php echo $cj; ?>,<?php echo $cj; ?>,<?php echo $cj; ?></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter"><?php echo $kj; ?></span></h2>
                        <p>Total Pensiun</p>
                    </div>
                    <div class="sparkline-bar-stats3"><?php echo $kj; ?>,<?php echo $kj; ?>,<?php echo $kj; ?>,<?php echo $kj; ?>,<?php echo $kj; ?></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter"><?php echo $mj; ?></span></h2>
                        <p>Total Mutasi</p>
                    </div>
                    <div class="sparkline-bar-stats4"><?php echo $mj; ?>,<?php echo $mj; ?>,<?php echo $mj; ?>,<?php echo $mj; ?>,<?php echo $mj; ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Status area-->
<!-- Start Sale Statistic area-->
<!-- <div class="sale-statistic-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                <div class="sale-statistic-inner notika-shadow mg-tb-30">
                    <div class="curved-inner-pro">
                        <div class="curved-ctn">
                            <h2>Sales Statistics</h2>
                            <p>Vestibulum purus quam scelerisque, mollis nonummy metus</p>
                        </div>
                    </div>
                    <div id="curved-line-chart" class="flot-chart-sts flot-chart"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                    <div class="past-day-statis">
                        <h2>For The Past 30 Days</h2>
                        <p>
                            Fusce eget dolor id justo luctus the commodo vel pharetra
                            nisi. Donec velit of libero.
                        </p>
                    </div>
                    <div class="dash-widget-visits"></div>
                    <div class="past-statistic-an">
                        <div class="past-statistic-ctn">
                            <h3><span class="counter">3,20,000</span></h3>
                            <p>Page Views</p>
                        </div>
                        <div class="past-statistic-graph">
                            <div class="stats-bar"></div>
                        </div>
                    </div>
                    <div class="past-statistic-an">
                        <div class="past-statistic-ctn">
                            <h3><span class="counter">1,03,000</span></h3>
                            <p>Total Clicks</p>
                        </div>
                        <div class="past-statistic-graph">
                            <div class="stats-line"></div>
                        </div>
                    </div>
                    <div class="past-statistic-an">
                        <div class="past-statistic-ctn">
                            <h3><span class="counter">24,00,000</span></h3>
                            <p>Site Visitors</p>
                        </div>
                        <div class="past-statistic-graph">
                            <div class="stats-bar-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Sale Statistic area-->
<!-- Start Email Statistic area-->
<br>
<div class="notika-email-post-area">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="email-statis-inner notika-shadow">
                    <div class="email-ctn-round">
                        <div class="email-rdn-hd">
                            <h2>Email Statistics</h2>
                        </div>
                        <div class="email-statis-wrap">
                            <div class="email-round-nock">
                                <input type="text" class="knob" value="0" data-rel="55" data-linecap="round" data-width="130" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" />
                            </div>
                            <div class="email-ctn-nock">
                                <p>Total Emails Sent</p>
                            </div>
                        </div>
                        <div class="email-round-gp">
                            <div class="email-round-pro">
                                <div class="email-signle-gp">
                                    <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled />
                                </div>
                                <div class="email-ctn-nock">
                                    <p>Bounce Rate</p>
                                </div>
                            </div>
                            <div class="email-round-pro">
                                <div class="email-signle-gp">
                                    <input type="text" class="knob" value="0" data-rel="35" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled />
                                </div>
                                <div class="email-ctn-nock">
                                    <p>Total Opened</p>
                                </div>
                            </div>
                            <div class="email-round-pro sm-res-ds-n lg-res-mg-bl">
                                <div class="email-signle-gp">
                                    <input type="text" class="knob" value="0" data-rel="45" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled />
                                </div>
                                <div class="email-ctn-nock">
                                    <p>Total Ignored</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="recent-post-wrapper notika-shadow sm-res-mg-t-30 tb-res-ds-n dk-res-ds">
                    <div class="recent-post-ctn">
                        <div class="recent-post-title">
                            <h2>Data Pensiunan</h2>
                        </div>
                    </div>
                    <div class="recent-post-items">

                        <?php
                        include 'koneksi/koneksi.php';
                        $no = 1;
                        $data = mysqli_query($con, "select * from pensiun join pegawai on pegawai.id_pegawai=pensiun.id_pegawai ORDER BY id_pensiun DESC LIMIT 10");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>

                            <div class="recent-post-signle">
                                <a href="#">
                                    <div class="recent-post-flex rct-pt-mg">
                                        <div class="recent-post-img">
                                            <img src="img/post/1.png" style="width: 80%;" alt="" />
                                        </div>
                                        <div class="recent-post-it-ctn">

                                            <h2><?php echo $d['nama']; ?></h2>
                                            <p>
                                                <?php echo $d['tgl_pensiun']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                    <div class="rc-it-ltd">
                        <div class="recent-items-ctn">
                            <div class="recent-items-title">
                                <h2>Data Cuti</h2>
                            </div>
                        </div>
                        <div class="recent-items-inn">
                            <table class="table table-inner table-vmiddle">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama</th>
                                        <th>Tanggal Cuti</th>
                                        <th>Lama Cuti</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'koneksi/koneksi.php';
                                    $no = 1;
                                    $data = mysqli_query($con, "select * from cuti join pegawai on pegawai.id_pegawai=cuti.id_pegawai ORDER BY id_cuti DESC LIMIT 10");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['nama']; ?></td>
                                            <td><?php echo $d['tanggal_cuti']; ?></td>
                                            <td><?php echo $d['lama_cuti']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="recent-items-chart" class="flot-chart-items flot-chart vt-ct-it tb-rc-it-res"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Email Statistic area-->
    <!-- Start Realtime sts area-->
    <div class="realtime-statistic-area">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="realtime-wrap notika-shadow mg-t-30">
                    <div class="realtime-ctn">
                        <div class="realtime-title">
                            <h2>Realtime Visitors</h2>
                        </div>
                    </div>
                    <div class="realtime-visitor-ctn">
                        <div class="realtime-vst-sg">
                            <h4><span class="counter">4,35,456</span></h4>
                            <p>Visitors last 24h</p>
                        </div>
                        <div class="realtime-vst-sg">
                            <h4><span class="counter">4,566</span></h4>
                            <p>Visitors last 30m</p>
                        </div>
                    </div>
                    <div class="realtime-map">
                        <div class="vectorjsmarp" id="world-map"></div>
                    </div>
                    <div class="realtime-country-ctn realtime-ltd-mg">
                        <h5>September 4, 21:44:02 (2 Mins 56 Seconds)</h5>
                        <div class="realtime-ctn-bw">
                            <div class="realtime-ctn-st">
                                <span><img src="img/country/1.png" alt="" /></span>
                                <span>United States</span>
                            </div>
                            <div class="realtime-bw">
                                <span>Firefox</span>
                            </div>
                            <div class="realtime-bw">
                                <span>Mac OSX</span>
                            </div>
                        </div>
                    </div>
                    <div class="realtime-country-ctn">
                        <h5>September 7, 20:44:02 (5 Mins 56 Seconds)</h5>
                        <div class="realtime-ctn-bw">
                            <div class="realtime-ctn-st">
                                <span><img src="img/country/2.png" alt="" /></span>
                                <span>Australia</span>
                            </div>
                            <div class="realtime-bw">
                                <span>Firefox</span>
                            </div>
                            <div class="realtime-bw">
                                <span>Mac OSX</span>
                            </div>
                        </div>
                    </div>
                    <div class="realtime-country-ctn">
                        <h5>September 9, 19:44:02 (10 Mins 56 Seconds)</h5>
                        <div class="realtime-ctn-bw">
                            <div class="realtime-ctn-st">
                                <span><img src="img/country/3.png" alt="" /></span>
                                <span>Brazil</span>
                            </div>
                            <div class="realtime-bw">
                                <span>Firefox</span>
                            </div>
                            <div class="realtime-bw">
                                <span>Mac OSX</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="add-todo-list notika-shadow mg-t-30">
                    <div class="realtime-ctn">
                        <div class="realtime-title">
                            <h2>Add Todo</h2>
                        </div>
                    </div>
                    <div class="card-box">
                        <div class="todoapp">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-sm-6 col-xs-12">
                                    <h4 id="todo-message">
                                        <span id="todo-remaining"></span> of
                                        <span id="todo-total"></span> remaining
                                    </h4>
                                </div>
                                <div class="col-sm-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="notika-todo-btn">
                                        <a href="#" class="pull-right btn btn-primary btn-sm" id="btn-archive">Archive</a>
                                    </div>
                                </div>
                            </div>
                            <div class="notika-todo-scrollbar">
                                <ul class="list-group no-margn todo-list" id="todo-list"></ul>
                            </div>
                            <div id="todo-form">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12 todo-inputbar">
                                        <div class="form-group todo-flex">
                                            <div class="nk-int-st">
                                                <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo" />
                                            </div>
                                            <div class="todo-send">
                                                <button class="btn-primary btn-md btn-block btn notika-add-todo" type="button" id="todo-btn-submit">
                                                    Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="notika-chat-list notika-shadow mg-t-30 tb-res-ds-n dk-res-ds">
                    <div class="realtime-ctn">
                        <div class="realtime-title">
                            <h2>Chat Box</h2>
                        </div>
                    </div>
                    <div class="card-box">
                        <div class="chat-conversation">
                            <div class="widgets-chat-scrollbar">
                                <ul class="conversation-list">
                                    <li class="clearfix">
                                        <div class="chat-avatar">
                                            <img src="img/post/1.jpg" alt="male" />
                                            <i>10:00</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>John Deo</i>
                                                <p>Hello!</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix odd">
                                        <div class="chat-avatar">
                                            <img src="img/post/2.jpg" alt="Female" />
                                            <i>10:01</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap chat-widgets-cn">
                                                <i>Smith</i>
                                                <p>Hi, How are you? What about our next meeting?</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="chat-avatar">
                                            <img src="img/post/1.jpg" alt="male" />
                                            <i>10:01</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>John Deo</i>
                                                <p>Yeah everything is fine</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix odd">
                                        <div class="chat-avatar">
                                            <img src="img/post/2.jpg" alt="male" />
                                            <i>10:02</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap chat-widgets-cn">
                                                <i>Smith</i>
                                                <p>Wow that's great</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="chat-avatar">
                                            <img src="img/post/1.jpg" alt="male" />
                                            <i>10:01</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>John Deo</i>
                                                <p>Doing Better i am thinking about that..</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix odd">
                                        <div class="chat-avatar">
                                            <img src="img/post/2.jpg" alt="male" />
                                            <i>10:02</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap chat-widgets-cn">
                                                <i>Smith</i>
                                                <p>Wow, You also tallent man...</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-widget-input">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12 chat-inputbar">
                                        <div class="form-group todo-flex">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control chat-input" placeholder="Enter your text" />
                                            </div>
                                            <div class="chat-send">
                                                <button type="submit" class="btn btn-md btn-primary btn-block notika-chat-btn">
                                                    Send
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            </div>
        </div>
    </div>
    <!-- End Realtime sts area-->
    <!-- Start Footer area-->
    <?php include 'footer.php' ?>
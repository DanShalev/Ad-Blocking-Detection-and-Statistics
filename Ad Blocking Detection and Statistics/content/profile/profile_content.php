<!--main content start-->
<section id="main-content">
<section class="wrapper">
<!-- page start-->

<div class="row">
<div class="col-md-12">
    <section class="panel">
        <div class="panel-body profile-information">
            <div class="col-md-3">
                <div class="profile-pic text-center">
                    <img src="database/userdata/profile/ynet.png" alt=""/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-desk">

                    <h1><?php echo $_SESSION['adb_name']; ?></h1>
                    <span class="text-muted">Product Manager</span>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor vestibulum imperdiet. Ut auctor accumsan erat, a vulputate metus tristique non. Aliquam aliquam vel orci quis sagittis.
                    </p>
                    <div id="tabs_top"></div>
                    <a href="#" class="btn btn-primary">View Profile</a>

                </div>
            </div>
            <div class="col-md-3">
                <div class="profile-statistics">
                    <h1>1240</h1>
                    <p>This Week Sales</p>
                    <h1>$5,61,240</h1>
                    <p>This Week Earn</p>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="col-md-12">
<section class="panel">
<header class="panel-heading tab-bg-dark-navy-blue">
    <ul id="tabs" class="nav nav-tabs nav-justified ">
        <li class="active">
            <a data-toggle="tab" href="#overview">
                Website Overview
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#contacts" class="contact-map">
                Contacts
            </a>
        </li>
        <li id="settings_tab">
            <a data-toggle="tab" href="#settings">
                Settings
            </a>
        </li>
    </ul>
</header>
<div class="panel-body">
<div class="tab-content tasi-tab">
<div id="overview" class="tab-pane active">
    <div class="row">
        <div class="col-md-8">
            <div class="recent-act">
                <h1>Recent Activity</h1>
                <div class="activity-icon terques">
                    <i class="fa fa-check"></i>
                </div>
                <div class="activity-desk">
                    <h2>1 Hour Ago</h2>
                    <p>Purchased new stationary items for head office</p>
                </div>
                <div class="activity-icon red">
                    <i class="fa fa-beer"></i>
                </div>
                <div class="activity-desk">
                    <h2 class="red">2 Hour Ago</h2>
                    <p>Completed Coffee meeting with <a href="#" class="terques">Stive Martin</a> regarding the Product Promotion</p>
                </div>
                <div class="activity-icon purple">
                    <i class="fa fa-tags"></i>
                </div>
                <div class="activity-desk">
                    <h2 class="purple">today evening</h2>
                    <p>3 photo Uploaded on facebook product page</p>

                </div>

                <div class="activity-icon green">
                    <i class="fa fa-map-marker"></i>
                </div>
                <div class="activity-desk">
                    <h2 class="green">yesterday</h2>
                    <p>Outdoor visit at <a href="#" class="blue">California State Route</a> 85 with <a href="#" class="terques">John Boltana</a> & <a href="#" class="terques">Harry Piterson</a> regarding to setup a new show room.</p>
                    <div class="loc-map">
                        location map goes here
                    </div>
                </div>

                <div class="activity-icon yellow">
                    <i class="fa fa-user-md"></i>
                </div>
                <div class="activity-desk">
                    <h2 class="yellow">12 december 2013</h2>
                    <p>Montly Regular Medical check up at Greenland Hospital.</p>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="prf-box">
                <h3 class="prf-border-head">work in progress</h3>
                <div class=" wk-progress">
                    <div class="col-md-5">Themeforest</div>
                    <div class="col-md-5">
                        <div class="progress  ">
                            <div style="width: 70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                <span class="sr-only">70% Complete (success)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">70%</div>
                </div>
                <div class=" wk-progress">
                    <div class="col-md-5">Graphics River</div>
                    <div class="col-md-5">
                        <div class="progress ">
                            <div style="width: 57%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success">
                                <span class="sr-only">57% Complete (success)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">57%</div>
                </div>
                <div class=" wk-progress">
                    <div class="col-md-5">Code Canyon</div>
                    <div class="col-md-5">
                        <div class="progress ">
                            <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-info">
                                <span class="sr-only">20% Complete (success)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">20%</div>
                </div>
                <div class=" wk-progress">
                    <div class="col-md-5">Audio Jungle</div>
                    <div class="col-md-5">
                        <div class="progress ">
                            <div style="width: 30%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                <span class="sr-only">30% Complete (success)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">30%</div>
                </div>
            </div>
            <div class="prf-box">
                <h3 class="prf-border-head">performance status</h3>
                <div class=" wk-progress pf-status">
                    <div class="col-md-8 col-xs-8">Total Product Sales</div>
                    <div class="col-md-4 col-xs-4">
                        <strong>23545</strong>
                    </div>
                </div>
                <div class=" wk-progress pf-status">
                    <div class="col-md-8 col-xs-8">Total Product Refer</div>
                    <div class="col-md-4 col-xs-4">
                        <strong>235</strong>
                    </div>
                </div>
                <div class=" wk-progress pf-status">
                    <div class="col-md-8 col-xs-8">Total Earn</div>
                    <div class="col-md-4 col-xs-4">
                        <strong>235452344$</strong>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="contacts" class="tab-pane ">
    <div class="row">
        <div class="col-md-6">
            <div class="prf-contacts">
                <h2> <span><i class="fa fa-map-marker"></i></span> location</h2>
                <div class="location-info">
                    <p>Postal Address<br>
                        PO Box 16122 Collins Street West<br>
                        Victoria 8007 Australia</p>
                    <p>Headquarters<br>
                        121 King Street, Melbourne<br>
                        Victoria 3000 Australia</p>
                </div>
                <h2> <span><i class="fa fa-phone"></i></span> contacts</h2>
                <div class="location-info">
                    <p>Phone	: +61 3 8376 6284 <br>
                        Cell		: +61 3 8376 6284</p>
                    <p>Email		: david@themebucket.net<br>
                        Skype		: david.rojormillan</p>
                    <p>
                        Facebook	: https://www.facebook.com/themebuckets <br>
                        Twitter	: https://twitter.com/theme_bucket
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div id="map-canvas"></div>
        </div>
    </div>
</div>
<div id="settings" class="tab-pane ">
    <div class="position-center">
        <div class="prf-contacts sttng">
            <h2>  Personal Information</h2>
        </div>
        <form role="form" class="form-horizontal">
            <div class="form-group">
                <label class="col-lg-2 control-label"> Avatar</label>
                <div class="col-lg-6">
                    <input type="file" id="exampleInputFile" class="file-pos">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Company</label>
                <div class="col-lg-6">
                    <input type="text" placeholder=" " id="c-name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Lives In</label>
                <div class="col-lg-6">
                    <input type="text" placeholder=" " id="lives-in" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Country</label>
                <div class="col-lg-6">
                    <input type="text" placeholder=" " id="country" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Description</label>
                <div class="col-lg-10">
                    <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                </div>
            </div>
        </form>
        <div class="prf-contacts sttng">
            <h2> socail networks</h2>
        </div>
        <form role="form" class="form-horizontal">
            <div class="form-group">
                <label class="col-lg-2 control-label">Facebook</label>
                <div class="col-lg-6">
                    <input type="text" placeholder=" " id="fb-name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Twitter</label>
                <div class="col-lg-6">
                    <input type="text" placeholder=" " id="twitter" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Google plus</label>
                <div class="col-lg-6">
                    <input type="text" placeholder=" " id="g-plus" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Flicr</label>
                <div class="col-lg-6">
                    <input type="text" placeholder=" " id="flicr" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Youtube</label>
                <div class="col-lg-6">
                    <input type="text" placeholder=" " id="youtube" class="form-control">
                </div>
            </div>

        </form>
        <div class="prf-contacts sttng">
            <h2>Contact</h2>
        </div>
        <form role="form" class="form-horizontal">
            <div class="form-group">
                <label class="col-lg-2 control-label">Address 1</label>
                <div class="col-lg-6">
                    <input type="text" placeholder=" " id="addr1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Address 2</label>
                <div class="col-lg-6">
                    <input type="text" placeholder=" " id="addr2" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Phone</label>
                <div class="col-lg-6">
                    <input type="text" placeholder=" " id="phone" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Cell</label>
                <div class="col-lg-6">
                    <input type="text" placeholder=" " id="cell" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Email</label>
                <div class="col-lg-6">
                    <input type="text" placeholder=" " id="email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Skype</label>
                <div class="col-lg-6">
                    <input type="text" placeholder=" " id="skype" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <button class="btn btn-default" type="button">Cancel</button>
                </div>
            </div>

        </form>
    </div>

</div>
</div>
</div>
</section>
</div>
</div>
<!-- page end-->
</section>
</section>
<!--main content end-->
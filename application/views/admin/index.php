<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Administrator's Control Panel</title>
    <META http-equiv=Content-Type content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../../bootstrap/css/global.css" type="text/css">
</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a href="dashboard.html" class="brand">Project Name</a>
            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo site_url("admin/listNews") ?>">新闻列表</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Secondary link</a>
                        </li>
                        <li>
                            <a href="#">Something else here</a>
                        </li>
                        <li>
                            <a href="#">Another link</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">System <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="help.html">Help</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="../index.html">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <form action="" class="navbar-search pull-left">
                <input type="text" placeholder="Search" class="search-query span2">
            </form>
        </div>
    </div>
</div>
<div class="container top">
    <div class="row">
        <div class="span12 columns">
            <div class="page-header">
                <h2>
                    Dashboard <small>What's happening</small>
                </h2>
            </div>
        </div>
        <div class="span8 columns">

            <div class="alert alert-success">
                <a class="close" href="#" data-dismiss="alert">×</a>
                <p>
                    <strong>Well done!</strong> You successfully read this alert message. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum.
                </p>
                <div class="alert-actions">
                    <a class="btn btn-primary" href="#">Take this action</a> <a class="btn small" href="#">Or do this</a>
                </div>
            </div>
            <div class="row">
                <div class="span4 columns">
                    <h4>
                        Customizable
                    </h4>
                    <p>
                        All elements within, and the entire topbar as well, are optional. You can choose to include a logo/name, nav, search, and a secondary nav or any combination of that.
                    </p>
                </div>
                <div class="span4 columns">
                    <h4>
                        Dropdowns included
                    </h4>
                    <p>
                        As part of the main navigation, we've included the ability for you to add dropdowns to your nav. Check out the secondary nav above (right aligned) to see how it's done.
                    </p>
                </div>
            </div>
            <div class="page-header">
                <h3>
                    Recent drafts
                </h3>
            </div>
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#news" data-toggle="tab">News</a>
                </li>
                <li>
                    <a href="#profile" data-toggle="tab">Profile</a>
                </li>
                <li>
                    <a href="#" data-toggle="tab">Messages</a>
                </li>
                <li>
                    <a href="#" data-toggle="tab">Settings</a>
                </li>
                <li>
                    <a href="#" data-toggle="tab">Contact</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Secondary link</a>
                        </li>
                        <li>
                            <a href="#">Something else here</a>
                        </li>
                        <li>
                            <a href="#">Another link</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="news">
                    <table class="table table-striped table-bordered table-condensed">
                        <thead>
                        <tr>
                            <th class="header">
                                #
                            </th>
                            <th class="yellow header headerSortDown">
                                First Name
                            </th>
                            <th class="blue header">
                                Last Name
                            </th>
                            <th class="green header">
                                Language
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                Joe
                            </td>
                            <td>
                                Sixpack
                            </td>
                            <td>
                                English
                            </td>
                        </tr>
                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                Stu
                            </td>
                            <td>
                                Dent
                            </td>
                            <td>
                                Code
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Your
                            </td>
                            <td>
                                One
                            </td>
                            <td>
                                English
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="profile">
                    <p>All elements within, and the entire topbar as well, are optional. You can choose to include a logo/name, nav, search, and a secondary nav or any combination of that.</p>
                </div>
            </div>
        </div>
        <div class="span4 columns">
            <h3>
                Quick actions
            </h3>
            <div class="well">
                <ul>
                    <li>
                        <a href="#">Link 1</a>
                    </li>
                    <li>
                        <a href="#">Link 2</a>
                    </li>
                    <li>
                        <a href="#">Link 3</a>
                    </li>
                    <li>
                        <a href="#">Link 4</a>
                    </li>
                </ul>
            </div>
            <h3>
                Tip of the day
            </h3>
            <div class="well">
                <p>
                    As part of the main navigation, we've included the ability for you to add dropdowns to your nav. Check out the secondary nav above (right aligned) to see how it's done.
                </p>
            </div>
            <h3>
                Feedback
            </h3>
            <div class="well">
                <p>
                    As part of the main navigation, we've included the ability for you to add dropdowns to your nav. Check out the secondary nav above (right aligned) to see how it's done.
                </p>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <hr>
    <div class="inner">
        <div class="container">
            <p class="right">
                <a href="#">Back to top</a>
            </p>
            <p>
                Assembled with ? by <a href="http://www.twitter.com/davitferreira" target="_blank">@davitferreira</a>, using <a href="http://twitter.github.com/bottstrap">twitter bootstrap</a> and <a href="http://jquery.com">jquery</a>.
            </p>
        </div>
    </div>
</div>
<script src="../../bootstrap/js/jquery-1.7.1.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../bootstrap/js/admin.min.js"></script>
</body>
</html>

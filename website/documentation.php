<?php
$key = "index";
$pageTitle = "Angular Grid Documentation";
$pageDescription = "Introduction page of documentation for Angular Grid";
$pageKeyboards = "AngularJS Angular Grid Documentation";
include 'documentation_header.php';
?>

<div style="border: 1px solid darkgrey; background-color: #eee; padding: 10px; margin: 30px 5px 5px 5px;">

    <div style="font-size: 20px; font-weight: bold; text-align: center; text-decoration: underline;">
        <img src="http://www.jstchillin.org/nickdemarco/toocool.gif" width="70px"/>
        Pagination & Infinite Scrolling Now Implemented
        <img src="http://www.jstchillin.org/nickdemarco/toocool.gif" width="70px"/>
    </div>

    <p>
        12th April 2015
    </p>
    <p>
        Getting pagination and infinite scrolling in was a big effort!!
        The grid's core components are refactored and laid out now
        in a way that paging and infinite scrolling slot right in.
        This was by far the largest requested feature. Now with this out
        of the way, I'll start making my way through the other issues
        and feature requests.
    </p>
    <p>
        Please start using the new features and get back with feedback! When I've done a sweep of the smaller
        feature requests, I plan on doing a release, so getting feedback before then would be appreciated.
    </p>
    <p>
        Is there somebody you haven't told yet about Angular Grid that might be interested? Please let them know!!
    </p>
    <a href="https://twitter.com/angularGrid" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @angularGrid</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>

<div style="padding: 20px; margin: 5px;">

    <div style="text-align: center; font-weight: bold;">

        <div style="display: inline-block; width: 40%;">
            Star or Watch <br/>
                <iframe src="https://ghbtns.com/github-btn.html?user=ceolter&repo=angular-grid&type=star&count=true&size=large"
                        frameborder="0" scrolling="0" width="160px" height="30px">
                </iframe>
                <iframe src="https://ghbtns.com/github-btn.html?user=ceolter&repo=angular-grid&type=watch&count=true&size=large&v=2"
                        frameborder="0" scrolling="0" width="160px" height="30px">
                </iframe>
        </div>

        <div style="display: inline-block; vertical-align: top; width: 25%;">
            Say You Use <br/>
                <a href="http://ngmodules.org/modules/angular-grid" style="color: black; border: 1px solid darkgrey; background-color: lightgrey; padding: 2px;">
                    A<span style="color: darkred">ng</span>ular Modules
                </a>
        </div>

        <div style="display: inline-block; vertical-align: top; width: 30%;">

            Tell Friends<br/>

                <a class='share-link' href="https://www.facebook.com/sharer/sharer.php?u=www.angulargrid.com">
                    <img src="/images/facebook_32.png" alt="Share on Facebook" title="Share on Facebook"/>
                </a>

                <a class='share-link' href="https://twitter.com/home?status=Check%20out%20AngularGrid,%20a%20new%20way%20to%20show%20grid%20data%20for%20AngularJS">
                    <img src="/images/twitter_32.png" alt="Share on Twitter" title="Share on Twitter"/>
                </a>

                <a class='share-link' href="https://plus.google.com/share?url=www.angulargrid.com">
                    <img src="/images/googleplus_32.png" alt="Share on Google Plus" title="Share on Google Plus"/>
                </a>

                <a class='share-link' href="https://www.linkedin.com/shareArticle?mini=true&url=www.angulargrid.com&title=Angular%20Grid&summary=A%20new%20way%20to%20show%20grid%20data%20for%20AngularJS&source=">
                    <img src="/images/linkedin_32.png" alt="Share on LinkedIn" title="Share on LinkedIn"/>
                </a>

        </div>

    </h4>
    </div>

</div>

<div style="padding: 20px;">

    <h3>
        News
    </h3>

    <p>
        <b>Next on my list</b> - Move to Gulp. Triage next items.
    </p>

    <p>
        <b>12 April</b> - Checked in datasources, pagination, virtual paging, infinite scrolling. Will be available in 1.3, or take latest. Documentation
        pages 'Datasource', 'Pagination' and 'Virtual Paging' created.
    </p>

    <p>
        <b>09 April</b> - Checked in support for 'Refresh Aggregate Data'. Will be available in 1.3, or take latest. Documentation
        page 'Grouping and Aggregating Rows' updated.
    </p>

    <p>
        <b>06 April</b> - Checked in support for 'Loading Panel' to show when fetching data. Will be available in 1.3, or take latest. Documentation
        page for loading created.
    </p>

    <p>
        <b>05 April</b> - Checked in support for custom icons in the headers. Will be available in 1.3, or take latest. Documentation
        page for icons created.
    </p>

    <p>
        <b>04 April</b> - Checked in support for footers while grouping. Will be available in 1.3, or take latest. Documentation
        for grouping and example in 'test drive' updated to show.
    </p>

    <p>
        <b>31 March</b> - DailyJS covers launch of Angular Grid.
    </p>

</div>

<?php include 'documentation_footer.php';?>

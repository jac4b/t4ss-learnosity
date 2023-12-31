<?php

include_once '../env_config.php';
include_once 'includes/header.php';
?>

    <div class="jumbotron section index">
        <div class="section-intro">
            <h1>Authoring</h1>
            <p>
            <ul>
                <li><a class="blue-chevron" href="#browsing">Browsing Items and Activities</a></li>
                <li><a class="blue-chevron" href="#creating">Creating Content, Questions & Features</a></li>
                <li><a class="blue-chevron" href="#integrate">Customizing and Integrating into your Authoring environment</a></li>
            </ul>
            </ul>
            </p>
        </div>
    </div>
    <div class="section index">
        <h2 id="browsing">Browsing Items and Activities</h2>
        <br>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Browse Items in Your Item Bank</h3>
                    </div>
                    <div class="panel-body">
                        <p>The item list mode allows authors to browse and search Learnosity-hosted item banks for
                            existing items.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/item-list.php" aria-label="Item list demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Browse Activities in Your Item Bank</h3>
                    </div>
                    <div class="panel-body">
                        <p>The activity list mode allows authors to search for Learnosity-hosted activities. From there
                            it can be configured to allow users to edit activities.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/activity-list.php" aria-label="Activity list demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Filter Items in Your Item Bank</h3>
                    </div>
                    <div class="panel-body">
                        <p>Use tags to control which items in your item bank are visible to different users.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/item-list-filtered.php" aria-label="Filtered item list demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Filter Activities in Your Item Bank</h3>
                    </div>
                    <div class="panel-body">
                        <p>Use tags to control which activities in your item bank are visible to different users.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/activity-list-filtered.php" aria-label="Filtered activity list demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Preview your Item Bank in Read-Only Mode</h3>
                    </div>
                    <div class="panel-body">
                        <p>By disabling specific configuration flags, you can easily setup read-only access to your item
                            bank.</p>
                        <p class="text-right">
                            <a class="demo_link" href="item-list-read-only.php" aria-label="Read-only item list demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Select Multiple Items from Item Browsing</h3>
                    </div>
                    <div class="panel-body">
                        <p>Easily build your own item picker UI with our multiple selection mode.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/item-list-enable-selection.php" aria-label="Select multiple items demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Browse Items Using Tag Hierarchies</h3>
                    </div>
                    <div class="panel-body">
                        <p>Easily discover items by using pre-defined tag hierarchies.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/item-list-browse-tag-hierarchy.php" aria-label="Tag hierarchies demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Control which Tags Appear in the Authoring Interface</h3>
                    </div>
                    <div class="panel-body">
                        <p>Hide specific tags from the item and activity tagging UI.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/hide-tags.php" aria-label="Controlling which tags appear demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Navigate your Item Bank</h3>
                    </div>
                    <div class="panel-body">
                        <p>Programmatically search, navigate to existing content, and create new content in your item
                            bank.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/routing.php" aria-label="Programming navigation demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bind to Author API Events</h3>
                </div>
                    <div class="panel-body">
                        <p>Use the 'on' public method to bind to authoring events, supporting custom
                            notifications and actions.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/events.php" aria-label="Binding to events demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create an Activity With Items From Multiple Item Banks</h3>
                    </div>
                    <div class="panel-body">
                        <p>The activity edit mode allows authors to browse and search multiple Learnosity hosted item banks for existing items to add to an activity.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/activity-edit-multi-ibk.php" aria-label="Create activities from multiple item banks demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section index">

        <h2 id="creating">Creating Content, Questions, and Features</h2>
        <br>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create New Items</h3>
                    </div>
                    <div class="panel-body">
                        <p>Create and edit items that persist in your Learnosity-hosted item bank.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/item-create.php" aria-label="Create new items demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create New Activities</h3>
                    </div>
                    <div class="panel-body">
                        <p>Create and edit activites that persist in your Learnosity-hosted item bank.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/activity-create.php" aria-label="Create new activities demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit Questions Directly</h3>
                    </div>
                    <div class="panel-body">
                        <p>Bring your authors straight to a question editing panel using JavaScript methods.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/question-edit.php" aria-label="Edit questions directly demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Workflow States and Comments</h3>
                    </div>
                    <div class="panel-body">
                        <p>Move your item through a series of workflow states, from a first draft to the
                            finished product.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/workflow.php" aria-label="Publishing workflow demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section index">

        <h2 id="integrate">Customizing and Integrating</h2>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Build Custom Question Templates</h3>
                    </div>
                    <div class="panel-body">
                        <p>Create your own question templates with default values, and simplify the editing interface by hiding unwanted fields.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/question_templates.php" aria-label="Custom question templates demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Simplify Authoring for Teachers and Instructors</h3>
                    </div>
                    <div class="panel-body">
                        <p>The simple authoring mode is an opinionated subset of the full authoring templates and
                            layouts available by default—ideal for use in an LMS for teacher or instructor use.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/item-edit-simple.php" aria-label="Simple authoring layout demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Customize the Question Editing Layout</h3>
                    </div>
                    <div class="panel-body">
                        <p>Custom editor panel layouts allow you to move, re-order and customize the question editor UI to your liking.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/custom-qe-layout.php" aria-label="Customize question editing layout demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Use your Own Digital Asset Management System</h3>
                    </div>
                    <div class="panel-body">
                        <p>Use your own asset management tool when integrating Learnosity into your CMS.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/dam-asset-request.php" aria-label="Custom digital asset management demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Use Custom Editor Buttons</h3>
                    </div>
                    <div class="panel-body">
                        <p>Custom buttons give you the ability to extend the standard Learnosity toolbar to add new functionality as you need it.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/custom-editor-buttons.php" aria-label="Custom editor toolbar demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Customize the Simple Feature Modal Layout</h3>
                    </div>
                    <div class="panel-body">
                        <p>Custom simple feature modal layouts allow you to move, re-order and customize the simple features to your liking.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/simple-feature-layout.php" aria-label="Custom simple feature modal demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Right-to-Left Language Support</h3>
                    </div>
                    <div class="panel-body">
                        <p>This demo demonstrates the Learnosity approach to handling right-to-left languages.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/rtl.php" aria-label="Right-to-left language demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Multi Language Support (i18n and l10n)</h3>
                    </div>
                    <div class="panel-body">
                        <p>This demo demonstrates how Learnosity provides language bundles for different languages.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/item-list-i18n.php" aria-label="Multiple languages demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Customizing the RTE toolbar</h3>
                    </div>
                    <div class="panel-body">
                        <p>Customize the RTE toolbar to rearrange or hide options.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/custom-ckeditor-toolbar.php" aria-label="Customize rich-text-editor demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Enabling Item Titles</h3>
                    </div>
                    <div class="panel-body">
                        <p>Item Titles allow authors to better organize and identify their content. Unlike references, titles can contain special characters and do not have to be unique.</p>
                        <p class="text-right">
                            <a class="demo_link" href="https://demos.learnosity.com/authoring/item-titles.php" aria-label="Enabling item titles demo">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div> -->

    </div>

<?php include_once 'includes/footer.php';

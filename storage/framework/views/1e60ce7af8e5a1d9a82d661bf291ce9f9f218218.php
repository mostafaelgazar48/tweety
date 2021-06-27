<div>
        <div class="row ">
            <div class="col-md-8">
                <div class="list-group text-center" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" href="<?php echo e(route('home')); ?>" role="tab" aria-controls="home">Home</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list"  href="<?php echo e(route('profile',auth()->user())); ?>" role="tab" aria-controls="profile">Profile</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" href="<?php echo e(route('explore')); ?>" role="tab" aria-controls="messages">Explore</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" aria-controls="settings">
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" >
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="list-group-item list-group-item-action border-0"> Logout</button>
                        </form>
                    </a>

                </div>
            </div>


        </div>

        <button class="btn btn-primary pt-2 mt-2 ml-5 rounded-pill">Tweet</button>

</div>
<?php /**PATH /opt/lampp/htdocs/tweety/resources/views/sidebar.blade.php ENDPATH**/ ?>
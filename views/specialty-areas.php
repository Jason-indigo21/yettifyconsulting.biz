<div class="page-content-wrapper">
    <div class="service-details-wrapper sm-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5">
                    <div class="service-details-content">
                        <?php foreach ($services as $service):  if ($service['link'] === $_REQUEST['service']): ?>

                                <img src="assets/images/<?= $service['image'] ?>" alt="Businex-Service Details">


                                <div class="service-details-info mb-5">


                                    <h3> <?= $service['title']; ?> </h3>
                                    <?= $service['description']; ?>


                                </div>

                                <div class="share-article text-center">
                                    <!-- <h6><b></b></h6> -->
                                    <blockquote class="blockquote mb-5"> <?= $service['statement']; ?> </blockquote>
                                    <div class=" justify-content-center">
                                        <div class="col-md-12 col-lg-12 specialty-button ">
                                            <a href="./?page=lets-talk" class="btn-outline-service w-100">Let’s talk about your digital future </a>
                                        </div>
                                    </div>
                                </div>
                        <?php endif;
                        endforeach; ?>
                    </div>
                </div>

                <div class="col-lg-4 mtn-40">
                    <div class="sidebar-wrap mt-sm-90 mt-md-100">
                        <!-- Start Sidebar Item -->
                        <div class="sidebar-single">
                            <h3 class="sidebar-heading">Services</h3>
                            <div class="sidebar-body">
                                <ul class="service-list">
                                    <?php foreach ($services as $service): ?>
                                        <li><a href="./?page=specialty-areas&service=<?= $service['link'] ?>"><?= $service['title'] ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
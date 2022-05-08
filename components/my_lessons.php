<div class="col-xl-12">
  <div class="card">
    <div
      class="card-header border-0 pb-0 d-sm-flex flex-wrap d-block"
    >
      <div class="mb-3">
        <h4 class="card-title mb-1">Шинэ хичээлүүд</h4>
        <small class="mb-0"
          >Сонгосон хичээлүүдийн мэдээлэл болно</small
        >
      </div>
      <div class="card-action card-tabs mb-3">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              data-bs-toggle="tab"
              href="#monthly1"
              role="tab"
              >Сараар</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              data-bs-toggle="tab"
              href="#weekly1"
              role="tab"
              >Долоо хоног</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              data-bs-toggle="tab"
              href="#today1"
              role="tab"
              >Өнөөдөр</a
            >
          </li>
        </ul>
      </div>
    </div>
    <div class="card-body tab-content pt-3">
      <div class="tab-pane fade show active" id="monthly1">
        <div
          class="row height750 dz-scroll loadmore-content"
          id="favourite-itemsContent"
        >
        <?php
        $sdate = date('Y-m-d', strtotime('-10 days'));
        $results = mysqli_query($db, "SELECT * FROM lesson  where `lesson_created_date`>='$sdate' order by `lesson_created_date` ");
        while ($row = mysqli_fetch_array($results)) {
        ?>
        <?php print_r($row); ?>
          <div class="col-md-4 col-xl-4 col-xxl-6 col-sm-6 mb-5">
            <div class="media mb-4">
              <a href="ecom-product-detail.html"
                ><img
                  src="<?php echo $row['lesson_image']; ?>"
                  style="width:100%;"
                  class="rounded"
                  alt=""
              /></a>
            </div>
            <div class="info">
              <h5 class="mb-3">
                <a class="text-black" href="ecom-product-detail.html"
                  >Meidum Spicy Spagethi Italiano</a
                >
              </h5>
              <div class="star-review fs-14 mb-3">
                <i class="fa fa-star text-orange"></i>
                <i class="fa fa-star text-orange"></i>
                <i class="fa fa-star text-orange"></i>
                <i class="fa fa-star text-gray"></i>
                <i class="fa fa-star text-gray"></i>
                <span class="ms-3 text-dark">451 reviews</span>
              </div>
              <a
                href="javascript:void(0);"
                class="btn btn-primary light btn-sm btn-rounded px-4"
                ><i class="fa fa-heart-o me-2 scale5"></i>
                <strong>256k</strong> Like it</a
              >
            </div>
          </div>
       <?php } ?>
        </div>
        <div class="bg-white pt-3 text-center">
          <a
            href="javascript:void(0);"
            class="btn-link dz-load-more"
            rel="ajax/favourite-items.html"
            id="favourite-items"
            >Илүү ихийг <i class="fa fa-angle-down ms-2 scale-2"></i
          ></a>
        </div>
      </div>
      <div class="tab-pane fade" id="weekly1">
        <div
          class="row height750 dz-scroll loadmore-content"
          id="favourite-items2Content"
        >
          <div class="col-md-4 col-xl-4 col-xxl-6 col-sm-6 mb-5">
            <div class="media mb-4">
              <a href="ecom-product-detail.html"
                ><img
                  src="images/dish/pic5.jpg"
                  style="width:100%;"
                  class="rounded"
                  alt=""
              /></a>
            </div>
            <div class="info">
              <h5 class="text-black mb-3">
                <a class="text-black" href="ecom-product-detail.html"
                  >Meidum Spicy Spagethi Italiano</a
                >
              </h5>
              <div class="star-review fs-14 mb-3">
                <i class="fa fa-star text-orange"></i>
                <i class="fa fa-star text-orange"></i>
                <i class="fa fa-star text-orange"></i>
                <i class="fa fa-star text-gray"></i>
                <i class="fa fa-star text-gray"></i>
                <span class="ms-3 text-dark">451 reviews</span>
              </div>
              <a
                href="javascript:void(0);"
                class="btn btn-primary light btn-sm btn-rounded px-4"
                ><i class="fa fa-heart-o me-2 scale5"></i>
                <strong>256k</strong> Like it</a
              >
            </div>
          </div>
        </div>
        <div class="bg-white pt-3 text-center">
          <a
            href="javascript:void(0);"
            class="btn-link dz-load-more"
            rel="ajax/favourite-items.html"
            id="favourite-items2"
            >Илүү ихыг <i class="fa fa-angle-down ms-2 scale-2"></i
          ></a>
        </div>
      </div>
      <div class="tab-pane fade" id="today1">
        <div
          class="row height750 dz-scroll loadmore-content"
          id="favourite-items3Content"
        >
          <div class="col-md-4 col-xl-4 col-xxl-6 col-sm-6 mb-5">
            <div class="media mb-4">
              <a href="ecom-product-detail.html"
                ><img
                  src="images/dish/pic4.jpg"
                  style="width:100%;"
                  class="rounded"
                  alt=""
              /></a>
            </div>
            <div class="info">
              <h5 class="text-black mb-3">
                <a class="text-black" href="ecom-product-detail.html"
                  >Tuna soup spinach with himalaya salt</a
                >
              </h5>
              <div class="star-review fs-14 mb-3">
                <i class="fa fa-star text-orange"></i>
                <i class="fa fa-star text-orange"></i>
                <i class="fa fa-star text-orange"></i>
                <i class="fa fa-star text-gray"></i>
                <i class="fa fa-star text-gray"></i>
                <span class="ms-3 text-dark">451 reviews</span>
              </div>
              <a
                href="javascript:void(0);"
                class="btn btn-primary light btn-sm btn-rounded px-4"
                ><i class="fa fa-heart-o me-2 scale5"></i>
                <strong>256k</strong> Like it</a
              >
            </div>
          </div>
        </div>
        <div class="bg-white pt-3 text-center">
          <a
            href="javascript:void(0);"
            class="btn-link dz-load-more"
            rel="ajax/favourite-items.html"
            id="favourite-items3"
            >Илүү ихыг <i class="fa fa-angle-down ms-2 scale-2"></i
          ></a>
        </div>
      </div>
    </div>
  </div>
</div>

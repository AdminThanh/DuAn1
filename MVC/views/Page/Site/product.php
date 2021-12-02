<main id="nhan" class="grid wide container">
  <nav class="nav-top">
    <ul>
      <li><a href=""><i class="fas fa-home"></i>Trang chủ</a></li><span>/</span>
      <li><a href="">Chi tiết sản phẩm</a></li><span>/</span>
      <li><a href="">Trà sữa</a></li>
    </ul>
  </nav>
  <div class="card mt-1">
    <!-- card left -->
    <div class="product-imgs">
      <div class="img-display">
        <div class="img-showcase">
          <img src="<?= BASE_URL ?>/MVC/public/images/products/trasua.png" alt="">

        </div>
      </div>

    </div>
    <!-- card right -->
    <div class="product-content">
      <h3 class="product-title">Tên sản phẩm</h3>

      <div class="product-price">
        <p class="new-price" style="font-size: 4rem;">55.000 đ</p>
        <p class="new-price" style="font-size: 12px;">Rẻ hơn hoàn tiền...</p>
      </div>

      <div class="product-detail">
        <ul class="product-detail__list">
          <li class="product-detail__item">Danh mục: <span>Trà sữa</span></li>
          <li class="product-detail__item">Tình trạng: <span>Còn hàng</span></li>
          <li class="product-detail__item">Topping: <span>Full Topping</span></li>
          <li class="product-detail__item">Vận chuyển: <span>Có</span></li>
        </ul>
      </div>

      <div class="purchase-info">
        <!-- <div class="quantity"> -->
        <div class="quantity buttons_added">
          <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
        </div>
        <!-- <button class="btn" id="minus">-</button>
          <input type="number" readonly value="1" id="input">
          <button class="btn" id="plus" style="margin-right: 50px;">+</button> -->
        <!-- </div> -->
        <div class="size">
          <div class="size-radio">
            <input type="radio" id="radio1" name="group-radio" />
            <label for="radio1">S</label>
          </div>
          <div class="size-radio">
            <input type="radio" id="radio2" name="group-radio" checked />
            <label for="radio2">M</label>
          </div>
          <div class="size-radio">
            <input type="radio" id="radio3" name="group-radio" />
            <label for="radio3">L</label>
          </div>
        </div>
        <!-- <input type="radio" class="size">
        <input type="radio" class="size">
        <input type="radio" class="size"> -->
        <!-- <button class="size">S</button>
        <button class="size">M</button>
        <button class="size">L</button> -->
      </div>

      <div class="click">
        <a href="#"><button type="button" id="btn1"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</button></a>
        <a href="#"><button type="button" id="btn2">Đặt hàng ngay</button></a>
      </div>
    </div>
  </div>
  <div class="nhan_container">
    <ul class="tab_navigation">
      <li>
        <input type="radio" value="desc" id="" name="desc" checked>
        <label for="desc">Mô tả</label>

      </li>
      <li>
        <input type="radio" value="rate" id="" name="desc">
        <label for="rate">Đánh giá</label>

      </li>
    </ul>
    <div class="tab_container_area">
      <div class="tab_container content-desc ">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellat doloribus dolor deleniti facilis temporibus aperiam sint. Omnis eum fuga distinctio vitae rerum, sed laudantium ipsa totam, magnam sapiente consequatur!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fuga rem ipsum atque nam velit deserunt, earum officiis est aliquam recusandae similique fugiat voluptatum cupiditate eius magnam quibusdam unde iste.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam ab distinctio culpa quia quas hic, cumque eum est eligendi quam cupiditate repudiandae, reprehenderit soluta inventore labore dignissimos veniam ipsum non?</p>
      </div>
      <!-- <div class="tab_container content-rate content-banking-none">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellat doloribus dolor deleniti facilis temporibus aperiam sint. Omnis eum fuga distinctio vitae rerum, sed laudantium ipsa totam, magnam sapiente consequatur!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fuga rem ipsum atque nam velit deserunt, earum officiis est aliquam recusandae similique fugiat voluptatum cupiditate eius magnam quibusdam unde iste.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam ab distinctio culpa quia quas hic, cumque eum est eligendi quam cupiditate repudiandae, reprehenderit soluta inventore labore dignissimos veniam ipsum non?</p>
      </div> -->
    </div>
    <div class="tab_container_area">
      <div class="tab_container">
        <h3 class="comment-heading">Bình luận</h3>
        <div class="comment-list">
          <div class="comment">
            <div class="comment-avatar">
              <img src="<?= BASE_URL ?>/MVC/public/images/users/SEIJ6567.JPG" alt="">
            </div>
            <div class="comment-user">
              <div class="comment-user__name">Nguyễn Đăng Thành</div>
              <div class="comment-user__content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur quisquam accusamus, enim perferendis voluptatum praesentium animi dolor ex quibusdam earum molestias aperiam, iusto amet voluptatibus sit ab ratione dolore perspiciatis?</div>
            </div>
            <!-- <div class="comment-feedback">
            Reply
          </div> -->
          </div>
          <div class="comment">
            <div class="comment-avatar">
              <img src="<?= BASE_URL ?>/MVC/public/images/users/SEIJ6567.JPG" alt="">
            </div>
            <div class="comment-user">
              <div class="comment-user__name">Nguyễn Đăng Thành</div>
              <div class="comment-user__content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur quisquam accusamus, enim perferendis voluptatum praesentium animi dolor ex quibusdam earum molestias aperiam, iusto amet voluptatibus sit ab ratione dolore perspiciatis?</div>
            </div>
            <!-- <div class="comment-feedback">
            Reply
          </div> -->
          </div>
          <div class="comment">
            <div class="comment-avatar">
              <img src="<?= BASE_URL ?>/MVC/public/images/users/SEIJ6567.JPG" alt="">
            </div>
            <div class="comment-user">
              <div class="comment-user__name">Nguyễn Đăng Thành</div>
              <div class="comment-user__content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur quisquam accusamus, enim perferendis voluptatum praesentium animi dolor ex quibusdam earum molestias aperiam, iusto amet voluptatibus sit ab ratione dolore perspiciatis?</div>
            </div>
            <!-- <div class="comment-feedback">
            Reply
          </div> -->
          </div>
          <div class="view-more-comments">
            <div class="view-more-comment__text">
              <span>View More Comments</span>
            </div>
            <div class="view-more-comment__quantity">
              <span>3 of 60</span>
            </div>
          </div>
        </div>
        <form action="" method="post">
          <textarea cols="131" rows="2" placeholder="Viết bình luận..."></textarea>
          <button type="submit">Gửi bình luận</button>
        </form>
      </div>
    </div>
  </div>
  <div class="nhan_container related-products">
    <h2 class="related-products__heading">Sản phẩm liên quan</h2>
    <div class="list-product related-products__list row sm-gutter">
      <div class="col l-2-5 m-4 c-6">
        <a href="<?= BASE_URL ?>/product" class="product-cart">
          <div class="product-cart__tags">
            <div class="tag-new">new</div>
            <div class="tag-discount">30%</div>
          </div>
          <div class="product-cart__img">
            <img src="<?= BASE_URL ?>/MVC/public/images/products/choco-creamcake.png" alt="">
          </div>
          <div class="product-cart__info">
            <div class="info-title">Sữa chua dâu tằm hoàng kim</div>
            <div class="info-rating">
              <div class="rating-list">
                <i class="rating-icon fas fa-star"></i>
                <i class="rating-icon fas fa-star"></i>
                <i class="rating-icon fas fa-star"></i>
                <i class="rating-icon fas fa-star"></i>
                <i class="rating-icon fas fa-star"></i>
              </div>
              <p class="rating-text">(2 đánh giá)</p>
            </div>
            <div class="info-price">
              <div class="info-origin-price">25,000 đ</div>
              <div class="info-sale-price">30,000 đ</div>
            </div>
            <div class="btn btn--primary btn-order-product">Đặt hàng</div>
          </div>
        </a>
      </div>
      <div class="col l-2-5 m-4 c-6">
        <a href="<?= BASE_URL ?>/product" class="product-cart">
          <div class="product-cart__tags">
            <div class="tag-new">new</div>
            <div class="tag-discount">30%</div>
          </div>
          <div class="product-cart__img">
            <img src="<?= BASE_URL ?>/MVC/public/images/products/choco-creamcake.png" alt="">
          </div>
          <div class="product-cart__info">
            <div class="info-title">Sữa chua dâu tằm hoàng kim</div>
            <div class="info-rating">
              <div class="rating-list">
                <i class="rating-icon fas fa-star"></i>
                <i class="rating-icon fas fa-star"></i>
                <i class="rating-icon fas fa-star"></i>
                <i class="rating-icon fas fa-star"></i>
                <i class="rating-icon fas fa-star"></i>
              </div>
              <p class="rating-text">(2 đánh giá)</p>
            </div>
            <div class="info-price">
              <div class="info-origin-price">25,000 đ</div>
              <div class="info-sale-price">30,000 đ</div>
            </div>
            <div class="btn btn--primary btn-order-product">Đặt hàng</div>
          </div>
        </a>
      </div>
      <div class="col l-2-5 m-4 c-6">
        <a href="<?= BASE_URL ?>/product" class="product-cart">
          <div class="product-cart__tags">
            <div class="tag-new">new</div>
            <div class="tag-discount">30%</div>
          </div>
          <div class="product-cart__img">
            <img src="<?= BASE_URL ?>/MVC/public/images/products/choco-creamcake.png" alt="">
          </div>
          <div class="product-cart__info">
            <div class="info-title">Sữa chua dâu tằm hoàng kim</div>
            <div class="info-rating">
              <div class="rating-list">
                <i class="rating-icon fas fa-star"></i>
                <i class="rating-icon fas fa-star"></i>
                <i class="rating-icon fas fa-star"></i>
                <i class="rating-icon fas fa-star"></i>
                <i class="rating-icon fas fa-star"></i>
              </div>
              <p class="rating-text">(2 đánh giá)</p>
            </div>
            <div class="info-price">
              <div class="info-origin-price">25,000 đ</div>
              <div class="info-sale-price">30,000 đ</div>
            </div>
            <div class="btn btn--primary btn-order-product">Đặt hàng</div>
          </div>
        </a>
      </div>
      <div class="col l-2-5 m-4 c-6">
        <a href="<?= BASE_URL ?>/product" class="product-cart">
          <div class="product-cart__tags">
            <div class="tag-new">new</div>
            <div class="tag-discount">30%</div>
          </div>
          <div class="product-cart__img">
            <img src="<?= BASE_URL ?>/MVC/public/images/products/choco-creamcake.png" alt="">
          </div>
          <div class="product-cart__info">
            <div class="info-title">Sữa chua dâu tằm hoàng kim</div>
            <div class="info-rating">
              <div class="rating-list">
                <i class="rating-icon fas fa-star"></i>
                <i class="rating-icon fas fa-star"></i>
                <i class="rating-icon fas fa-star"></i>
                <i class="rating-icon fas fa-star"></i>
                <i class="rating-icon fas fa-star"></i>
              </div>
              <p class="rating-text">(2 đánh giá)</p>
            </div>
            <div class="info-price">
              <div class="info-origin-price">25,000 đ</div>
              <div class="info-sale-price">30,000 đ</div>
            </div>
            <div class="btn btn--primary btn-order-product">Đặt hàng</div>
          </div>
        </a>
      </div>
    </div>
  </div>
</main>
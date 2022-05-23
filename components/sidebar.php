<div class="deznav">
  <div class="deznav-scroll">
    <ul class="metismenu" id="menu">
      <li>
        <a
          href="./index.php"
        >
          <i class="flaticon-381-networking"></i>
          <span class="nav-text">Нүүр</span>
        </a>
      </li>
      <li>
        <a
          class="has-arrow ai-icon"
          href="./classes.php"
          aria-expanded="false"
        >
          <i class="flaticon-381-television"></i>
          <span class="nav-text">Ангиуд</span>
        </a>
      </li>
      <li>
        <a
          class="has-arrow ai-icon"
          href="./class_subjects.php"
          aria-expanded="false"
        >
          <i class="flaticon-381-television"></i>
          <span class="nav-text">Хичээлүүд</span>
        </a>
      </li>
      <li>
        <a
          class="has-arrow ai-icon"
          href="./lessons.php"
          aria-expanded="false"
        >
          <i class="flaticon-381-television"></i>
          <span class="nav-text">Сэдэвүүд</span>
        </a>
      </li>
      <?php if (isAdmin()) { ?>
      <li >
        <a class="has-arrow ai-icon"  aria-expanded="false">
					<i class="flaticon-381-television"></i><span class="nav-text">Admin</span>
				</a>
        <ul aria-expanded="false" class="mm-collapse mm-show">
            <li><a href="admin-list.php">Хэрэглэгч нар</a></li>
				    <li><a href="admin-class.php">Ангиуд</a></li>
        </ul>
      </li>
      <?php } ?>
    </ul>


    <!-- <div class="copyright"
         style="
         position: fixed;
         left: 0;
         bottom: 0;
         width: 100%;"
    >
      <p>
        <strong>sitename.mn</strong> © 2022
      </p>
      <p>Made with <span class="heart"></span> by Лхагва Дорж</p>
    </div> -->
  </div>
</div>
